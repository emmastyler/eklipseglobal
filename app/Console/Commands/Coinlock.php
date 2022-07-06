<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Models\Coin;
use Illuminate\Http\Controllers\Auth;
use Illuminate\Http\Request;


class Coinlock extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'coinlock:monthly';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Coinlock for monthly interests';

    /**
     * Execute the console command.
     *
     * @return int
    
     */
    
    public function handle()
    { 
       
        $coinlocks = Coin::where('email', '=', auth()->user()->email)->orderBy('id', 'desc')->first();
        
            $coinlocks->each(function (Coin $coinlock) {
                if($coinlock->email == 'canvaverr@gmail.com' && $coinlock->month > $coinlock->status){
                    $coinlock->status =  $coinlock->status + 1;
                    $coinlock->time_left = $coinlock->time_left - 1;
                    $coinlock->save(); 
                    $models =  User::where('email', '=', 'canvaverr@gmail.com')->get();
                    $models->each(function (User $model) {
                        $model->time_left_lock =  $model->time_left_lock - 1;
                        if($model->time_left_lock == 0){
                            $model->balance = $model->balance + $model->amount_lock + ($model->amount_lock * 0.01);
                            $model->elp = $model->elp + $model->amount_lock_elps + ($model->amount_lock_elps * 0.01);

                        }
            
            $model->save();
        });
                }
           
        });
       
       
        
    }
}
