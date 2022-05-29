<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kyc;
class KycController extends Controller
{
    public function create()
    {
        return view('kyc');
    }

      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Kyc::create([
        'firstname'=> $request->firstname,
        'lastname'=> $request->lastname,
        'email'=> $request->email,
        'phonenumber'=> $request->phonenumber,
        'dob'=> $request->dob,
        'nationality'=> $request->nationality,
        'address1'=> $request->address1,
        'address2'=> $request->address2,
        'zipcode'=> $request->zipcode,
        'city'=> $request->city
        ]);
  
    }
}
