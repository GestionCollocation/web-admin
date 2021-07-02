<?php

namespace App\Http\Controllers;

use App\Models\Us;
use Illuminate\Http\Request;

class UsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $message= Us::latest()->paginate(4);
        return view('admin.support')->with('msg',$message);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required',

        ]);

       

           $posts=Us::create([
            
            
            
            'name'=> $request->name,
            'email'=> $request->email,
            'subject'=> $request->subject,
            'message'=> $request->message,
            

           ]); 
           return redirect()->back()->with('success_create', 'Votre message à été bien envoyer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Us  $us
     * @return \Illuminate\Http\Response
     */
    public function show(Us $us)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Us  $us
     * @return \Illuminate\Http\Response
     */
    public function edit(Us $us)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Us  $us
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Us $us)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Us  $us
     * @return \Illuminate\Http\Response
     */
    public function destroy(Us $us)
    {
        //
    }
}
