@extends("plantillaPrincipal")

@section("css")
    <link rel="stylesheet" type="text/css" href="css/mipagination.css">
@endsection

@section("contenido")
    <h2>
        Productos
    </h2>
    <ul>
        @foreach($products as $product)
            <li>
                <a href="#">
                    {{$product->name." - ".$product->description}}
                </a>
            </li>
        @endforeach
    </ul>
    {{ $products->links('vendor.pagination.semantic-ui') }}
@endsection

