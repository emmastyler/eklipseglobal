<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Deposit;
use App\Models\Transactions;
use \App\Http\Controllers\Auth;



class DepositController extends Controller
{
    public function create()
    {
        return view('deposit');
    }

    public function mode(Request $request)
    {
      

            Deposit::create([
                        'deposit_amount_b'=> $request->amountpaid_b,
                        'deposit_amount_s'=> $request->amountpaid_s,
                        'deposit_amount_bw'=> $request->amountpaid_bw,
                        'status'=>'Pending',
                        'email'=>$request->email
                        ]);
            
            Transactions::create([
              'name'=>auth()->user()->fullname,
              'transaction_type'=>'Deposit',
              'status'=>'Pending',
              'email'=>auth()->user()->email,
              
              ]); 
                    
            return redirect('deposit')->with('success', 'Deposit is pending, check transaction page for more information');

        

       
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //to post into database
    public function store($reference, $email)
    {
       
        $curl = curl_init();
            
            curl_setopt_array($curl, array(
              CURLOPT_URL => "https://api.paystack.co/transaction/verify/$reference",
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_SSL_VERIFYHOST => 0,
              CURLOPT_SSL_VERIFYPEER => 0,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "GET",
              CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer sk_test_b8c5cbc294a50502972c150526a85e9065bd7d0d",
                "Cache-Control: no-cache",
              ),
            ));
            
            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            
            $decoded_json = json_decode($response, true);
            $datas = $decoded_json['data'];
            $amount =  $datas['amount'];

            $user = User::where('email', '=', $email)->first();;
            $user->balance = $amount/100;
            $user->save();

        return redirect('/dashboard')->with('success', 'Balance Updated'); 

        }
        
      
    }

