<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=7, initial-scale=1.0">
    <title>Blog - @yield('post')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>
<body>
    <!-- Contenido -->
     <!-- Logo -->
    <nav class="navbar navbar-light bg-main">
    </nav>

   @yield('content')
  <!-- agrega aquí el footer -->
  <!-- Footer -->
  <footer class="container-fluid bg-main">
        <div class="row text-center p-4">
            <div class="mb-3">
                <img src="{{asset('images/logo.png')}}" alt="YouDevs logo" width="120" id="logofooter">
            </div>
            <div id="col-md-10">
                <a href="https://www.facebook.com/">
                    <img src="{{asset('images/facebook.png')}}" class="img-fluid" width="40px" alt="facebook ">
                </a>
                <a href="https://www.instagram.com/">
                    <img src="{{asset('images/instagram.png')}}" class="img-fluid" width="40px" alt="instagram ">
                </a>
                <a href="https://www.youtube.com/c/Oficial">
                    <img src="{{asset('images/youtube.png')}}" class="img-fluid" width="40px" alt="youtube ">
                </a>
                <p class="mt-3">Copyright © 2020 , Blog. <br> Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
</body>
</html>