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

        //foreach ($products as $product){
        //    echo $product->name." ".$product->price." HASTA ACá!!!"."<br>";
        //}

        return view('listarProductos', compact('products'));
    }
}
