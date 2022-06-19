<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use \App\Http\Controllers\Auth;



class SecurityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('security');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('security');
       
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
            'security_id' => 'required',
            'bank_name_1'  => 'required',
            'account_number_1'  => 'required',
            'account_name_1'  => 'required',
            'bank_name_2' => 'required',
            'account_number_2'  => 'required',
            'account_name_2'  => 'required',
            'bank_name_3'  => 'required',
            'account_number_3'  => 'required',
            'account_name_3'  => 'required',
            'bank_name_4'  => 'required',
            'account_number_4'  => 'required',
            'account_name_4'  => 'required',
            'bitcoin_address'  => 'required',
            'skrill_address'  => 'required',
            'face_img'  => 'required',
           
        

        ]); 
      //handle file upload
   
      if($request->has('face_img'))
      {
         //Get filname with extension
         foreach($request->file('face_img') as $file){
            
             $imageName = $request->firstname.time().rand(1, 100). '.'. $file->extension();
             $file->move(public_path('storage/images'), $imageName);
             
             $user = User::where('email', '=', auth()->user()->email)->first();
           
             $user->security_id= $request->security_id;
             $user->bank_name_1 = $request->bank_name_1;
             $user->account_number_1 = $request->account_number_1;
             $user->account_name_1 = $request->account_name_1;
             $user->bank_name_2= $request->bank_name_2;
             $user->account_number_2 = $request->account_number_2;
             $user->account_name_2 = $request->account_name_2;
             $user->bank_name_3 = $request->bank_name_3;
             $user->account_number_3 = $request->account_number_3;
             $user->account_name_3 = $request->account_name_3;
             $user->bank_name_4 = $request->bank_name_4;
             $user->account_number_4 = $request->account_number_4;
             $user->account_name_4 = $request->account_name_4;
             $user->bitcoin_address = $request->bitcoin_address;
             $user->skrill_address = $request->skrill_address;
             $user->face_img = $imageName;
            
             $user->save();
   
         }
        return redirect('settings')->with('success', 'Settings updated successfully');
 
     }
 
     
 
     else{
         echo "no image uploaded yet";
         //$fileNameToStore = 'noimage.jpg';
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
