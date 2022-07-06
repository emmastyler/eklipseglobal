<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\video;


class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('video');

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
         $video = video::where('email', '=', auth()->user()->email)->first();
        if($video){
            $video->status = 'Pending';
            $video->type_f = $request->type_f;
            $video->type_w = $request->type_w;
            $video->type_y = $request->type_y;
            $video->email = auth()->user()->email;
            $video->save();
            return redirect('videocontensy')->with('success', ' Links uploaded successfully');

        } 
        else{
           
            video::create([
            'status'=> 'Pending',
            'type_f'=> $request->type_f,
            'type_w'=> $request->type_w,
            'type_y'=> $request->type_y,
            'email'=> auth()->user()->email,
        
            ]);

            return redirect('videocontensy')->with('success', ' Links uploaded successfully');
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
