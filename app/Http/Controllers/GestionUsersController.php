<?php

namespace App\Http\Controllers;

use App\Gestion_Users;
use Illuminate\Http\Request;

class GestionUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('GestionUsers.create');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /Validate
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required',
        ]);
        
        $task = Task::create(['title' => $request->title,'description' => $request->description]);
        return redirect('/GestionUsers/'.$gestion_Users->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gestion_Users  $gestion_Users
     * @return \Illuminate\Http\Response
     */
    public function show(Gestion_Users $gestion_Users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gestion_Users  $gestion_Users
     * @return \Illuminate\Http\Response
     */
    public function edit(Gestion_Users $gestion_Users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gestion_Users  $gestion_Users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gestion_Users $gestion_Users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gestion_Users  $gestion_Users
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gestion_Users $gestion_Users)
    {
        //
    }
}
