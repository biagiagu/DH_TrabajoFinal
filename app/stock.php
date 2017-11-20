<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stock extends Model
{
    //Atributos - properties
    protected $guarded=[];

    //Metodos

    public function product(){
        return  $this->belongsTo(product::class, 'product_id');
    }
}
