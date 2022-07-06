<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buy_Sell_Model;
use App\Models\User;
use App\Models\Transactions;
use App\Models\Admin;
use \App\Http\Controllers\Auth;

class TransactionController extends Controller
{
    public function index()
    {
        $admin = Admin::where('username', '=', 'admin')->first();
        return view('buy_sell')->with('admin', $admin);
    }

    public function store(Request $request)
    {

        $naira = $request->usd * 500;
            $member = User::where('email', '=', auth()->user()->email)->first();
            $admin = Admin::where('username', '=', 'admin')->first();
            $plan = $request->payOption == 'tranxETH' ? 'Buy' : 'Sell';
            if($plan == 'Sell'){
                if($member->elp < $request->elps){
                    return redirect('transact')->with('error_bal', 'Amount lower than available balance'); 
                }
            }
            
            if($request->usd == 0 || $naira == 0){
                return redirect('transact')->with('error_bal', 'Minimum amount is 1 USD');
            }
            if($plan == 'Buy' && ($member->balance < $naira) && ($member->usd < $request->usd) ){
                 
                    return redirect('transact')->with('error_bal', 'Insufficient balance');
                
                
            }
           
            else{
                $plan = $request->payOption == 'tranxETH' ? 'Buy' : 'Sell';
                $transact =  Buy_Sell_Model::create([
                    'name'=> auth()->user()->name,
                    'elps'=>$request->elps,
                    'amount'=>$request->usd,
                    'status'=>'Pending',
                    'type'=> $plan
                    
                    ]);
                    Transactions::create([
                        'name'=>auth()->user()->fullname,
                        'transaction_type'=>$plan,
                        'status'=>'Successful',
                        'email'=>auth()->user()->email,
                        
                        ]); 
                    if($plan == 'Buy'){
                         $member->usd = $member->usd - $request->usd;
                         $member->elp = $member->elp + $request->elps;
                         $member->save();

                         $admin->elps_total = $admin->elps_total - $request->elps;
                         $admin->elps_price = $admin->elps_price + 0.5;
                         $admin->save();
                    }
                    else{
                        $member->elp = $member->elp - $request->elps;
                        $member->usd= $member->usd + $request->usd;
                        $member->save();

                        $admin->elps_total = $admin->elps_total + $request->elps;
                        $admin->elps_price = $admin->elps_price + 1;
                        $admin->save();
                    }
               
        
                    return redirect('transact')->with('success', ' Successful');
            }
       
    }
}
