<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class MaterialInvoice extends Model
{
    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }
}
