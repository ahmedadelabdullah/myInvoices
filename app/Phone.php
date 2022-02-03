<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable = [
        'phone' , 'user'
    ];

    public function user(){
        return $this->belongsTo(Phone::class , 'user_id');
    }
}
