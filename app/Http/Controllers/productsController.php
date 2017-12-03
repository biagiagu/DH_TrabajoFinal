<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class productsController extends Controller
{
    //Atributos

    //Metodos

    public function list(){
        $products=product::paginate(10);

        return view('listarProductos', compact('products'));
    }
}
