<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coin;
use App\Models\User;
use \App\Http\Controllers\Auth;


class CoinlockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = Coin::where('email', '=', auth()->user()->email)->get();
        $userscs = Coin::where('email', '=', auth()->user()->email)->orderBy('id', 'desc')->first();
       
        return view('coinlock', compact('users', 'userscs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        // $usersc = Coin::where('email', '=', auth()->user()->email)->last();

        
        
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
        if($user->balance < $request->amount_lock || $user->elp < $request->amount_lock_elps){
            return redirect('coinlock')->with('error', "Can't lock more than current balance");
        }
            $user->amount_lock= $request->amount_lock;
            $user->amount_lock_elps= $request->amount_lock_elps;
            $user->time_left_lock=$request->months;
            $user->balance=$user->balance - $request->amount_lock;
            $user->elp = $user->elp-$request->amount_lock_elps;
            $user->save();

           

            

            $coin = Coin::create([
                'amount_lock'=> $request->amount_lock,
                'email'=> auth()->user()->email,
                'status'=>'Running',
                'month'=>$request->months,
                'time_left'=>$request->months,
                'elps_lock'=>$request->amount_lock_elps,
                'time_now'=>$request->months,
                'time_later'=>time()+60
            ]);    
            $data = array(
                
                'success'=>'Coin locked successfully'
            );
         return redirect('coinlock')->with($data);

        
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
        $coins = Coin::find($id);
        $coins->month = 0;
        $coins->status = 'Completed';
        $coins->save();

        $model = User::where('email', '=', auth()->user()->email)->orderBy('id', 'desc')->first();
        $model->balance = $model->balance + $model->amount_lock + ($model->amount_lock * 0.01 * $model->time_left_lock);
        $model->elp = $model->elp + $model->amount_lock_elps + ($model->amount_lock_elps * 0.01 * $model->time_left_lock);
        $model->save();
        return redirect('coinlock')->with('coin_success', 'Lock reward claimed');
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






