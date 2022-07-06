<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Http;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {   $ref =  request()->query('ref');
        //return gettype($ref);
        return view('auth.register')->with('ref', $ref);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        
        if($request->ref != NULL){
            $member = User::where('name', '=', $request->ref)->first(); 
            if($member){
                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'bank_name' => $request->bank_name ? $request->bank_name : NULL ,
                    'account_number' => $request->account_number ? $request->account_number : NULL,
                    'fullname'=>$request->fullname ? $request->fullname : $request->othername,
                    'bank_code'=>$request->bank_code ? $request->bank_code : NULL,
                    'ref'=> $request->ref,
                    'status'=>$request->ref ? 'Miner' : NULL,
                    'address'=>Hash::make($request->email),
                    
                ]);
                
        
                event(new Registered($user));
        
                Auth::login($user);
        
                //return redirect()->action([AuthenticatedSessionController::class, 'create']);
                return redirect(RouteServiceProvider::HOME);
            }
            else {
                return redirect('register')->with('error', 'Invalid Referral details');
            }
           
        }
        else {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'bank_name' => $request->bank_name ? $request->bank_name : NULL ,
                'account_number' => $request->account_number ? $request->account_number : NULL,
                'fullname'=>$request->fullname ? $request->fullname : $request->othername,
                'bank_code'=>$request->bank_code ? $request->bank_code : NULL,
                'ref'=> $request->ref,
                'status'=>$request->ref ? 'Miner' : NULL,
                'address'=>Hash::make($request->email),
            ]);
            
    
            event(new Registered($user));
    
            Auth::login($user);
    
            //return redirect()->action([AuthenticatedSessionController::class, 'create']);
            return redirect(RouteServiceProvider::HOME);
        }
       
    }
}
