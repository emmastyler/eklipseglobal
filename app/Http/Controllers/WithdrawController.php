<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Withdraw;
use App\Models\Transactions;
use \App\Http\Controllers\Auth;


class WithdrawController extends Controller
{
    public function create()
    {
        return view('withdraw');
    }

    public function store(Request $request)
    {

      $this->validate($request, [
        //'image'=>'mimes:jpeg,png,jpg|max:2048',
  
        'amount_withdraw' => 'required',
        

    ]); 
    if(auth()->user()->security_id == $request->security_id){
        Withdraw::create([
              'withdraw_amount'=> $request->amount_withdraw,
              'security_id'=>$request->security_id,
              'withdraw_type'=>$request->bank_details,
              'status'=>'Pending',
              'email'=>auth()->user()->email,
              'bitcoin_address'=>auth()->user()->bitcoin_address == $request->bitcoin_address ? $request->bitcoin_address : NULL,
              'skrill_address'=>auth()->user()->skrill_address == $request->skrill_email ? $request->skrill_email : NULL
              ]);  
          
              Transactions::create([
                'name'=>auth()->user()->fullname,
                'transaction_type'=>'Withdraw',
                'status'=>'Pending',
                'email'=>auth()->user()->email,
                
                ]);  

              return redirect('withdraw')->with('success', 'Withdrawal is pending, check transaction page for more information');
      }
      else{
        return redirect('withdraw')->with('error', 'Incorrect Secuirty ID');
      }
    

  
 //return redirect('withdrawverify')->with('success', 'Kyc uploaded successfully');


      /*   $url = "https://api.paystack.co/transferrecipient";
        $fields = [
          'type' => "nuban",
          'name' => $request->fullname,
          'account_number' => $request->account_number,
          'bank_code' => $request->bank_code,
          'currency' => "NGN"
        ];
        $fields_string = http_build_query($fields);
        //open connection
        $ch = curl_init();
        
        //set the url, number of POST vars, POST data
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_POST, true);
        curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
          "Authorization: Bearer sk_test_b8c5cbc294a50502972c150526a85e9065bd7d0d",
          "Cache-Control: no-cache",
        ));
        
        //So that curl_exec returns the contents of the cURL; rather than echoing it
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 
        
        //execute post
        $result = curl_exec($ch);
        //return $result;

        $url = "https://api.paystack.co/transfer";
  $fields = [
    'source' => "balance",
    'amount' => $request->amount,
    'recipient' => $result,
    'reason' => "Holiday Flexing"
  ];
  $fields_string = http_build_query($fields);
  //open connection
  $ch = curl_init();
  
  //set the url, number of POST vars, POST data
  curl_setopt($ch,CURLOPT_URL, $url);
  curl_setopt($ch,CURLOPT_POST, true);
  curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Authorization: Bearer sk_test_b8c5cbc294a50502972c150526a85e9065bd7d0d",
    "Cache-Control: no-cache",
  ));
  
  //So that curl_exec returns the contents of the cURL; rather than echoing it
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 
  
  //execute post
  $result = curl_exec($ch);
  echo $result;
        
    } */
}
}