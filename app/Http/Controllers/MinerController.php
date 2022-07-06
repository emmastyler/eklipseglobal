<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Member;
use Illuminate\Http\Request;

class MinerController extends Controller
{
    //

    public function mine() {
        // get all resource
        //$data = Member::where('email', '=', auth()->user()->email)->first();
        $data = Member::where('email', '=', auth()->user()->email)->orderBy('id', 'desc')->first();
       if($data){
        $elps = $data->amount * 2;
        /*$future_date = date('y-m-d', strtotime($data->time_now.'+'.$elps . 'days')); */
        
        
        //1mp = 2elps;
        

        $dateobj1 = date_create(date('y-m-d'));
        $dateobj2 = date_create($data->time_future);
        $interval = date_diff($dateobj1, $dateobj2);
        $compare = $interval->format('%a');
      
        $iterate =  idate('z', strtotime($data->time_left));

        if($compare > 0){
            
            if($iterate < idate('z')){
                $member = User::where('email', '=', auth()->user()->email)->first();
            $member->elp = $member->elp + 1;
            $member->save();
                $data->time_left =  date('y-m-d');
                $data->save();
            }
            $data->time_now = date('y-m-d');
            $data->save();
           
        }

        if($compare == 0){
            $member = User::where('email', '=', auth()->user()->email)->first();
            //$member->elp = $member->elp + $elps;
            $member->mem_stats = NULL;
            $member->save();
            $data->status = 'Completed';
            $data->save();
           
        }

        return view('miner')->with('data', $data);
       }
       else{
        return view('miner')->with('data', $data);

       }
        
    }
    public function miner(Request $request) {
        $naira = $request->mineOption * 500;
        if($request->has('mineOption')){
            $member = User::where('email', '=', auth()->user()->email)->first();
            if(($member->balance < $naira) && ($member->usd < $request->mineOption) ){
                return redirect('member')->with('error_bal', 'Insufficient balance');
            }
            else{

                $user = User::where('email', '=', auth()->user()->email)->first();
               
                if($user->usd >= $request->mineOption){
                    $user->usd = $user->usd - $request->mineOption;
                }
                elseif ($user->balance > $naira) {
                    $user->balance =  $user->balance - $naira;
                   
                }
                $user->mem_stats = 'Set';
                $user->save();

               
                $time_now=date('y-m-d');
                $elps = $request->mineOption == 10 ? $request->mineOption  : $request->mineOption * 2;

            Member::create([
                'amount'=> $request->mineOption == 10 ? $request->mineOption / 2 : $request->mineOption,
                'status'=>'Running',
                'email'=>auth()->user()->email,
                'time_now'=>date('y-m-d'),
                'time_left'=>date('y-m-d'),
                'time_future'=>date('y-m-d', strtotime($time_now.'+'.$elps . 'days')),
                ]);
                
                $affiliate = User::where('name', '=', auth()->user()->ref)->first();

                $affiliate->usd = $affiliate->usd + ($request->mineOption == 10 ? $request->mineOption  * 0.5 : $request->mineOption * 0.25);
                $affiliate->save();
                
            //$data = Member::where('email', '=', auth()->user()->email)->first();
                return redirect('mine')->with('success', 'done');
            }
        }
        else{
            return redirect('member');
        }
    }
}
