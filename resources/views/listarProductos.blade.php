@extends("plantillaPrincipal")

@section("contenido")
    <h2>
        Productos
    </h2>
    <ul>
        @foreach($products as $product)
            <li>
                <a href="#">
                    {{$product->name}}
                </a>
            </li>
        @endforeach
    </ul>
    {{ $products->links() }}
@endsection