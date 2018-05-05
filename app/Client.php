<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {
	public function particuliers()
    {
        return $this->hasMany('App\Comment');
    }

}