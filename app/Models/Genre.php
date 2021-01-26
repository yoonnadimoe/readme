<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDelete;

class Genre extends Model
{
    use HasFactory;
     use SoftDelete;

    protected $fillable = ['name'];

     public function books(){
    	return $this->belongsToMany('App\Models\Book');
    }
}
