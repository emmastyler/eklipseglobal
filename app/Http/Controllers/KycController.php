<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kyc;
use App\Models\User;

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
        //validate file extension
        $this->validate($request, [
            //'image'=>'mimes:jpeg,png,jpg|max:2048',
            'firstname' => 'required',
            'lastname'  => 'required',
            'email'  => 'required',
            'phonenumber'  => 'required',
            'dob'  => 'required',
            'nationality'  => 'required',
            'address1'  => 'required',
            'address2'  => 'required',
            'zipcode'  => 'required',
            'city'  => 'required',
            
        

        ]); 
     //handle file upload
   
     if($request->has('image'))
     {
        //Get filname with extension
        foreach($request->file('image') as $file){
           
            $imageName = $request->firstname.time().rand(1, 100). '.'. $file->extension();
            $file->move(public_path('storage/images'), $imageName);
            Kyc::create([
            'firstname'=> $request->firstname,
            'lastname'=> $request->lastname,
            'email'=> $request->email,
            'phonenumber'=> $request->phonenumber,
            'dob'=> $request->dob,
            'nationality'=> $request->nationality,
            'address1'=> $request->address1,
            'address2'=> $request->address2,
            'zipcode'=> $request->zipcode,
            'city'=> $request->city,
            'status'=> 'Pending',
            'backImage' => $imageName,
    
            ]);
            $user = User::where('email', '=', auth()->user()->email)->first();
            $user->kyc_status = 'Pending';
            $user->save();
  
        }
       return redirect('kyc')->with('success', 'Kyc uploaded successfully');

    }

    

    else{
        echo "no image uploaded yet";
        //$fileNameToStore = 'noimage.jpg';
    }


    
       
  
    }
}
