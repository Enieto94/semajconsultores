<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="Servicios Jurídicos, Minero, Civil, Laboral, Ambiental, Zipaquira, Sabana Centro" />
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="Resource-type" content="Document" />
	<meta http-equiv="cache-control" content="max-age=0" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta http-equiv="expires" content="0" />
	<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
	<meta http-equiv="pragma" content="no-cache" />
	<meta property="og:type" content="article">
	<meta property="og:title" content="{{$post->title}}">
	<meta property="og:description" content="<?php echo htmlspecialchars(trim(strip_tags($post->content)));?>">
	<meta property="og:image" content="{{asset($post->featured)}}">
	<meta property="og:url" content="https://semajconsultores.com.co/">
	<meta property="og:site_name" content="Semaj Consultores SAS - Servicios Jurídicos">
	<link rel="icon" type="image/ico" href="/favico.ico">
    <title>Semajconsultores - Inicio</title>
    <link rel="shortcut icon" href="favico.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="/libs/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/libs/owl-carousel/owl.theme.default.min.css">
</head>
<body>
    <!-- Burger button -->
    <div class="row">
        <div id="nav-icon">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <!-- POPUP -->
    <div class="row popup-container justify-content-center align-items-center pos-relative">
        <div class="col-10 iframe-pdf">
        </div>

        <form action="" method="post" id="ftcn" class="d-none p-5 flex-column col-10 col-md-4">
            <h2>TRABAJE CON NOSOTROS</h2>

            <div class="row">
                <span>A continuación, diligencie sus datos personales. ¡Pronto nos contactaremos con usted!</span>
            </div>

            <label for="" class="row my-2">
                <input type="text" placeholder="Nombres y Apellidos" name="nombres">
            </label>

            <label for="" class="row my-2">
                <input type="text" placeholder="Teléfono" name="telefono">
            </label>

            <label for="" class="row my-2">
                <input type="text" placeholder="Correo" name="correo">
            </label>

            <label for="" class="row my-2">
                <input type="file" name="hoja-de-vida">
            </label>

            <div class="row my-3">
                <span><i>Solo se aceptan archivos con la extensión PDF*</i></span>
            </div>

            <div class="row justify-content-center">
                <button class="col-4 btn" type="submit" id="btn-tcn">ENVIAR</button>
            </div>
        </form>

        <div id="btn-cerrar-popup">
            <svg viewBox="0 0 24 24">
                <path  d="M20 6.91L17.09 4L12 9.09L6.91 4L4 6.91L9.09 12L4 17.09L6.91 20L12 14.91L17.09 20L20 17.09L14.91 12L20 6.91Z" />
            </svg>
        </div>
    </div>

    <div class="row">
        <!-- MENU -->
        <nav class="col-12 navbar bg-main">
            <div id="links-info">
                <a href="tel:3134395561">
                    <svg viewBox="0 0 24 24">
                        <path d="M15,12H17A5,5 0 0,0 12,7V9A3,3 0 0,1 15,12M19,12H21C21,7 16.97,3 12,3V5C15.86,5 19,8.13 19,12M20,15.5C18.75,15.5 17.55,15.3 16.43,14.93C16.08,14.82 15.69,14.9 15.41,15.18L13.21,17.38C10.38,15.94 8.06,13.62 6.62,10.79L8.82,8.59C9.1,8.31 9.18,7.92 9.07,7.57C8.7,6.45 8.5,5.25 8.5,4A1,1 0 0,0 7.5,3H4A1,1 0 0,0 3,4A17,17 0 0,0 20,21A1,1 0 0,0 21,20V16.5A1,1 0 0,0 20,15.5Z" />
                    </svg>
                    <span>
                        313-439-5561
                    </span>
                </a>

                <a href="mailto:juridica@semajconsultores.com.co">
                    <svg viewBox="0 0 24 24">
                        <path d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" />
                    </svg>
                    <span >
                        juridica@semajconsultores.com.co
                    </span>
                </a>

                <a href="https://www.google.com/maps/place/Semaj+Consultores+SAS/@5.0153925,-73.9983254,15z/data=!4m5!3m4!1s0x0:0x8b24fc4689889f7b!8m2!3d5.0153925!4d-73.9983254"
                    target="_blank" id="location-nav">
                    <svg viewBox="0 0 24 24">
                        <path d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z" />
                    </svg>
                    <span >
                        Ver Ubicación
                    </span>
                </a>
            </div>

            <div id="links-sm">
                <a href="https://www.facebook.com/semajconsultores/" target="_blank">
                    <svg class="sm-icon" viewBox="0 0 24 24">
                        <path d="M12 2.04C6.5 2.04 2 6.53 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.85C10.44 7.34 11.93 5.96 14.22 5.96C15.31 5.96 16.45 6.15 16.45 6.15V8.62H15.19C13.95 8.62 13.56 9.39 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96A10 10 0 0 0 22 12.06C22 6.53 17.5 2.04 12 2.04Z" />
                    </svg>
                </a>
                <a href="https://www.instagram.com/semajconsultores/" target="_blank">
                    <svg class="sm-icon" viewBox="0 0 24 24">
                        <path d="M7.8,2H16.2C19.4,2 22,4.6 22,7.8V16.2A5.8,5.8 0 0,1 16.2,22H7.8C4.6,22 2,19.4 2,16.2V7.8A5.8,5.8 0 0,1 7.8,2M7.6,4A3.6,3.6 0 0,0 4,7.6V16.4C4,18.39 5.61,20 7.6,20H16.4A3.6,3.6 0 0,0 20,16.4V7.6C20,5.61 18.39,4 16.4,4H7.6M17.25,5.5A1.25,1.25 0 0,1 18.5,6.75A1.25,1.25 0 0,1 17.25,8A1.25,1.25 0 0,1 16,6.75A1.25,1.25 0 0,1 17.25,5.5M12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z" />
                    </svg>
                </a>
            </div>

            <div id="nav-items">
                <a href="/" style="color: var(--blanco);">Inicio</a>
            </div>

            <a href="https://api.whatsapp.com/send?phone=+573138947226&text=Quiero%20m%C3%A1s%20informaci%C3%B3n%20acerca%20de%20sus%20servicios"
                id="whatsapp-icon" target="_blank">
                <svg viewBox="0 0 24 24">
                    <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 15 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M8.53 7.33C8.37 7.33 8.1 7.39 7.87 7.64C7.65 7.89 7 8.5 7 9.71C7 10.93 7.89 12.1 8 12.27C8.14 12.44 9.76 14.94 12.25 16C12.84 16.27 13.3 16.42 13.66 16.53C14.25 16.72 14.79 16.69 15.22 16.63C15.7 16.56 16.68 16.03 16.89 15.45C17.1 14.87 17.1 14.38 17.04 14.27C16.97 14.17 16.81 14.11 16.56 14C16.31 13.86 15.09 13.26 14.87 13.18C14.64 13.1 14.5 13.06 14.31 13.3C14.15 13.55 13.67 14.11 13.53 14.27C13.38 14.44 13.24 14.46 13 14.34C12.74 14.21 11.94 13.95 11 13.11C10.26 12.45 9.77 11.64 9.62 11.39C9.5 11.15 9.61 11 9.73 10.89C9.84 10.78 10 10.6 10.1 10.45C10.23 10.31 10.27 10.2 10.35 10.04C10.43 9.87 10.39 9.73 10.33 9.61C10.27 9.5 9.77 8.26 9.56 7.77C9.36 7.29 9.16 7.35 9 7.34C8.86 7.34 8.7 7.33 8.53 7.33Z" />
                </svg>
            </a>
        </nav>
    </div>

@extends('layouts.layout')

@section('post','POST')

@section('content')
    <section class="container-fluid content py-5" style="margin-top: 128px;">
        <div class="row justify-content-around">
            <!-- Post -->
            <div class="col-12 col-md-7 text-center">
                <h1>{{$post->title}}</h1>
                <hr>
                <img src="{{asset($post->featured)}}" alt="{{$post->title}}" class="img-fluid">

                <p class="text-left mt-3 post-txt">
                    <b>{{$post->author}}</b>, 
                    <span class="float-right">Publicado: {{$post->created_at->diffForHumans()}}</span>
                </p>
                <p class="text-left" id="content">
                    {{$post->content}}
                </p>
                <p class="text-left post-txt"><i>Categoría: {{$post->category->name}}</i></p>
            </div>

            <!-- Entradas recientes -->
            <div class="col-md-3">
                <p>Últimas entradas</p>
                @foreach ($latestPosts as $post)
                    <div class="row mb-4">
                        <div class="col-4 p-0">
                            <a href="{{route('post',$post->id)}}">
                                <img src="{{asset($post->featured)}}" class="img-fluid rounded" width="100" alt="{{$post->title}}">
                            </a>
                        </div>
                        <div class="col-7 pl-0">
                            <a href="{{route('post',$post->id)}}" class="link-post">{{$post->title}}</a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
@endsection
    <script src="/libs/jquery/jquery.min.js"></script>
    <script src="/libs/bootstrap/bootstrap.min.js"></script>
    <script src="/libs/owl-carousel/owl.carousel.min.js"></script>
    <script src="/libs/notify/notify.js"></script>
    <script src="/libs/swal/swal.min.js"></script>
    <script src="/libs/wow/wow.min.js"></script>
    <script src="/js/index.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BK29TDXCR3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-BK29TDXCR3');
    </script>
</body>
</html>