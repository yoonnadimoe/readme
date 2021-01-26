<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDelete;

class Township extends Model
{
    use HasFactory;
     use SoftDelete;

    protected $fillable = ['name'];

    public function shipping(){
    	return $this->hasOne('App\Models\Shipping');
    }
}
