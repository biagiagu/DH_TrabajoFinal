<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    // Atributos - Properties
    protected $guarded = [];

    // Metodos

    public function product(){
        return $this->hasMany(product::class, 'category_id');
    }

}
