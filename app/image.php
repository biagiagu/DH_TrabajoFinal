<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    // Atributos - Properties
    protected $guarded=[];

    // Metodos

    public function product(){
        return $this->belongsTo(product::class, 'product_id');
    }
}
