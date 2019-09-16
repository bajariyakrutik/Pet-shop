<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Table Name
    protected $table = 'products';
    // Primary Key
   
    // Timestamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
