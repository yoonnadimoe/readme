<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDelete;

class Language extends Model
{
    use HasFactory;
     use SoftDelete;

    protected $fillable = ['name'];

     public function books(){
    	return $this->hasMany('App\Models\Book');
    }
}
