<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gestion_Users extends Model
{
    //
}
public function index()
    {
        $gestionUsers= Gestion_Users::all();
        return view('gestionUsers.index',compact('gestionUsers',$gestionUsers));
    }