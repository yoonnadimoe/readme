<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDelete;

class Shipping extends Model
{
    use HasFactory;
     use SoftDelete;

    protected $fillable = ['fee', 'township_id' ];

    
    public function township(){
    	return $this->belongsTo('App\Models\Township');
    }

    public function order(){
    	return $this->hasOne('App\Models\Order');
    }
}
