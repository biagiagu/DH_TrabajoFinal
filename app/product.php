<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //Atributos - Properties
    protected $guarded=[];

    //Metodos

    public function category(){
        return $this->belongsTo(category::class, 'category_id');
    }

    public function image(){
        return $this->hasMany(image::class, 'product_id');
    }

    public function price(){
        return $this->hasMany(price::class, 'product_id');
    }

    public function stock(){
        return $this->hasMany(stock::class, 'product_id');
    }

    public function suppliers(){
        return $this->belongsToMany(supplier::class, product_supplier::class, 'product_id', 'supplier_id');
    }
}
