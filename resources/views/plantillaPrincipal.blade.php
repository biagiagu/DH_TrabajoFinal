<!DOCTYPE html>
<html>
    <head>
        <title>@yield("titulo")</title>
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <link rel="stylesheet" type="text/css" href="/css/micss.css">
        @yield("css")
    </head>
    <body>
        <header>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="/">NombreDelNegocio</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="/productos/listar">Productos</a></li>
                        <li><a href="#">Ingresar</a></li>
                        <li><a href="#">Subscribirse</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="container">
            @yield("contenido")
        </div>

    </body>
</html>