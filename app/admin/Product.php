<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
        'name',
        'unit-price',
        'price',
        'stoked',
        'unit-type',
        'colors',
        'tex-type',
        'meterage',
        'num-of-stoked-units',
        'num-of-stoked-returns',
        'num-of-stoked-rolls',
        'num-of-colors',
        'price-of-meter-in-roll',
        'price-of-cutting',
        'price-of-ironing'
    ];
}
