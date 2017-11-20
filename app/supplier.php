<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    //Atributos - Properties
    protected $guarded=[];

    //Metodos
    public function suppliers(){
        return $this->belongsToMany(product::class, product_supplier::class, 'supplier_id', 'product_id');
    }

}
