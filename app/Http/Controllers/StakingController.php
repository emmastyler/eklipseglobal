<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staking;
use App\Models\User;
use \App\Http\Controllers\Auth;

class StakingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = Staking::where('email', '=', auth()->user()->email)->get();
        $userscs = Staking::where('email', '=', auth()->user()->email)->orderBy('id', 'desc')->first();
       
        //return view('coinlock', compact('users', 'userscs'));
        return view('staking', compact('users', 'userscs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        $user = User::where('email', '=', auth()->user()->email)->first();
        $arr = $request->payOption;
        $result = explode(" ",$arr);
        $amount_stake = $result[0];
        $months = $result[1];
        if($user->usd < $amount_stake){
            return redirect('staking')->with('error', "Can't stake more than current USD balance");
        }
        else{
           
             $user->amount_stake = $amount_stake;
            $user->time_left_stake=$months;
            $user->usd=$user->usd - $amount_stake;
            $user->save();
        
            $stake = Staking::create([
                'amount_stake'=> $amount_stake,
                'email'=> auth()->user()->email,
                'status'=>'Running',
                'month'=>$months,
                'time_left'=>$months,  
                'time_now'=>$months,
               
            ]);    
            $data = array(
                
                'success'=>'Stake initiated successfully'
            );
         return redirect('staking')->with($data);
        }
           
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $stakes = Staking::find($id);
        $stakes->month = 0;
        $stakes->status = 'Completed';
        $stakes->save();

        $model = User::where('email', '=', auth()->user()->email)->orderBy('id', 'desc')->first();
        $model->usd = $model->usd + $model->amount_stake + ($model->amount_stake * 0.02);
        $model->save();
        return redirect('staking')->with('stake_success', 'Stake reward claimed');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
