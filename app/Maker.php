<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maker extends Model
{
    protected $fillable = [
      'id',
      'name',
      'title',
      'phone',
      'salary'
    ];
}
