<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'name',
        'mobile',
        'title',
        'amount',
    ];

    public function material_invoices(){
        return $this->hasMany(MaterialInvoice::class,'suppliers_id','id');
    }
}
