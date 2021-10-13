<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="Servicios Jurídicos, Minero, Civil, Laboral, Ambiental, Zipaquirá, Sabana Centro" />
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="Resource-type" content="Document" />
	<meta http-equiv="cache-control" content="max-age=0" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta http-equiv="expires" content="0" />
	<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
	<meta http-equiv="pragma" content="no-cache" />
	<meta property="og:type" content="article">
	<meta property="og:title" content="Semaj Consultores">
	<meta property="og:description" content="Empresa dedicada a la prestación de servicios de asesoría y consultoría en temas ambientales, mineros, jurídicos y económicos.">
	<meta property="og:image" content="https://semajconsultores.com.co/logo-semaj-consultores.jpg">
	<meta property="og:url" content="https://semajconsultores.com.co/">
	<meta property="og:site_name" content="Semaj Consultores SAS - Servicios Jurídicos">
	<link rel="icon" type="image/ico" href="/favico.ico">
    <title>Semajconsultores - Inicio</title>
    <link rel="shortcut icon" href="favico.png">
    <link rel="stylesheet" href="/libs/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="/libs/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/libs/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="/libs/wow/animate.css">
</head>

<body>
    <!-- agrega aquí el header con el logo -->
    <!-- Logo -->

    <div class="container-fluid">
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

            <form action="enviar-hv.php" method="post" enctype="multipart/form-data" name="hv" id="ftcn" class="d-none p-5 flex-column col-10 col-md-4" >
                <h2>TRABAJE CON NOSOTROS</h2>

                <div class="row">
                    <span>A continuación, diligencie sus datos personales. ¡Pronto nos contactaremos con usted!</span>
                </div>

                <label for="" class="row my-2">
                    <input type="text" placeholder="Nombres y Apellidos" name="nombres-hv" id="nombres-hv">
                </label>

                <label for="" class="row my-2">
                    <input type="text" placeholder="Teléfono" name="telefono-hv" id="telefono-hv">
                </label>

                <label for="" class="row my-2">
                    <input type="text" placeholder="Correo" name="correo-hv" id="correo-hv">
                </label>

                <label for="" class="row my-2">
                    <input type="file" name="archivo" id="archivo">
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
                    <a class="link-servicios" href="#inicio">Inicio</a>
                    <a class="link-servicios" href="#articulos">Artículos</a>
                    <a class="link-servicios" href="#nuestros-servicios">Nuestros servicios</a>
                    <a class="link-servicios" href="#nosotros">Nosotros</a>
                    <a class="link-servicios" href="#contacto">Contacto</a>
                </div>

                <a href="https://api.whatsapp.com/send?phone=+573138947226&text=Quiero%20m%C3%A1s%20informaci%C3%B3n%20acerca%20de%20sus%20servicios"
                    id="whatsapp-icon" target="_blank">
                    <svg viewBox="0 0 24 24">
                        <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 15 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M8.53 7.33C8.37 7.33 8.1 7.39 7.87 7.64C7.65 7.89 7 8.5 7 9.71C7 10.93 7.89 12.1 8 12.27C8.14 12.44 9.76 14.94 12.25 16C12.84 16.27 13.3 16.42 13.66 16.53C14.25 16.72 14.79 16.69 15.22 16.63C15.7 16.56 16.68 16.03 16.89 15.45C17.1 14.87 17.1 14.38 17.04 14.27C16.97 14.17 16.81 14.11 16.56 14C16.31 13.86 15.09 13.26 14.87 13.18C14.64 13.1 14.5 13.06 14.31 13.3C14.15 13.55 13.67 14.11 13.53 14.27C13.38 14.44 13.24 14.46 13 14.34C12.74 14.21 11.94 13.95 11 13.11C10.26 12.45 9.77 11.64 9.62 11.39C9.5 11.15 9.61 11 9.73 10.89C9.84 10.78 10 10.6 10.1 10.45C10.23 10.31 10.27 10.2 10.35 10.04C10.43 9.87 10.39 9.73 10.33 9.61C10.27 9.5 9.77 8.26 9.56 7.77C9.36 7.29 9.16 7.35 9 7.34C8.86 7.34 8.7 7.33 8.53 7.33Z" />
                    </svg>
                </a>
            </nav>
        </div>

        <div class="row" data-wow-duration="2s" data-wow-delay="5s">
            <main class="col-12 content" id="inicio">
                <!-- Carousel portada -->
                <div class="row" >
                    <section class="owl-carousel" id="portada">
                        <div class="portada-item">
                            <div class="cover">
                            </div>
                            <img src="/images/portada.jpg" alt="">
                            <div class="lema">
                                <h2 class="wow slideInLeft">Derecho + Economía + Ambiente</h2>
                            </div>
                        </div>
    
                        <div class="portada-item">
                            <div class="cover">
                            </div>
                            <img src="/images/portada.jpg" alt="">
                            <div class="lema">
                                <h2 class="wow slideInLeft">Derecho + Economía + Ambiente</h2>
                            </div>
                        </div>
                    </section>

                    <div class="navs-container">
                        <span class="bnn-portada-nav" id="btn-izq">
                            <svg viewBox="0 0 24 24">
                                <path d="M15.41,16.58L10.83,12L15.41,7.41L14,6L8,12L14,18L15.41,16.58Z" />
                            </svg>
                        </span>
                        <span class="bnn-portada-nav" id="btn-der">
                            <svg viewBox="0 0 24 24">
                                <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                            </svg>
                        </span>
                    </div>
                </div>

                <!-- Agenda tu Asesoría Jurídica -->
                <section class="row justify-content-center wow fadeInUp">
                    <div class="col-10" id="form">
                        <div class="row justify-content-center text-center py-4">
                            <h4><i>Abogados en Zipaquirá</i></h4>
                            <h2 class="verde">Agenda tu Asesoría Jurídica</h2>
                        </div>

                        <form class="row justify-content-around" action="https://sheetdb.io/api/v1/96xn69emj5lc8" metod="POST" name="ataj" id="form-ataj">
                            <div class="col-md-5 form-group my-2">
                                <input name="data[nombres]" type="text" class="form-control" placeholder="Nombres" id="nombres" required>
                            </div>

                            <div class="col-md-5 form-group my-2">
                                <input name="data[telefono]" type="text" class="form-control" placeholder="Teléfono" id="telefono" required>
                            </div>

                            <div class="col-md-5 form-group my-2">
                                <input name="data[correo]" type="text" class="form-control" placeholder="Correo" id="correo" required>
                            </div>

                            <div class="col-md-5 form-group my-2">
                                <input name="data[motivo]" type="text" class="form-control" placeholder="Motivo consulta" id="motivo" required>
                            </div>

                            <div class="col-md-5 form-group my-2">
                                <select name="data[modalidad]" class="form-control" id="modalidad" required>
                                    <option name="modalidad" value="">Escoja la modalidad de la consulta</option>
                                    <option name="modalidad" value="Presencial">Presencial</option>
                                    <option name="modalidad" value="Virtual">Virtual</option>
                                </select>
                            </div>

                            <div class="col-md-5 form-group my-2">
                                <input name="data[fecha]" type="date" class="form-control" placeholder="Campo" id="fecha" required min="<?php $hoy=date("Y-m-d"); echo $hoy;?>" >
                            </div>
                            <button type="submit" class="my-3 col-5 col-md-3 btn" id="button-form">
                                AGENDAR CITA AHORA
                            </button>
                            <span class="text-center"><i>Recuerda que nuestros horarios de atención son de Lunes a Viernes de 8:00 AM a 5:00 PM</i></span>
                        </form>
                    </div>
                </section>

                <!-- Sección nosotros -->
                <section class="row justify-content-center align-items-center my-4 wow fadeInUp" id="nosotros">
                    <div class="col-md-5">
                        <div class="row">
                            <h4 class="verde">
                                Semaj Consultores SAS
                            </h4>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam, sed et. Qui
                                reprehenderit
                                non laboriosam totam porro sequi dolor? Ab explicabo ea quam alias vitae accusamus!
                                Rerum,
                                exercitationem iure. Omnis.
                            </p>
                        </div>

                    </div>

                    <div class="col-md-5">
                        <div class="row">
                            <img class="img-responsive" src="https://media.istockphoto.com/photos/judges-male-lawyers-consultation-of-businessmen-legal-services-in-picture-id1234426314?b=1&k=6&m=1234426314&s=170667a&w=0&h=OWf5y-y_p2PvayEqbOd1VpSB046qXSRJkPLwb3NYPnU=" alt="">
                        </div>
                    </div>
                    <div class="col-10 my-5">

                        <div class="row">
                            <h4 class="verde">
                                NUESTRA PROMESA DE VALOR
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam a modi maiores, dolorem
                                at
                                laborum quis explicabo accusamus, odio, atque debitis unde illum. In neque accusantium
                                doloremque mollitia placeat voluptatum.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Categorías -->
                <section class="row justify-content-center text-center wow fadeInUp">
                    <h2><i>NUESTROS ARTÍCULOS</i></h2>
                    <div class="col-12">
                        <nav class="text-center my-5">
                            <a href="/" class="mx-3 pb-3 link-category d-block d-md-inline {{isset($categoryIdSelected)? '':'selected-category'}}">Todas</a>
                            @foreach ($categories as $category)
                            <a href="{{route('posts.category',$category->name)}}" class="mx-3 pb-3 link-category d-block d-md-inline {{(isset($categoryIdSelected) && $category->id == $categoryIdSelected) ? 'selected-category' : ''}}">{{$category->name}}</a>
                            <!-- <a href="{{route('posts.category',$category->name)}}" class="mx-3 pb-3 link-category d-block d-md-inline selected-category" >{{$category->name}}</a> -->
                            @endforeach
                        </nav>
                    </div>
                </section>

                <!-- Posts -->
                <section class="row justify-content-center" id="articulos">
                        <div class="row  my-5">
                            <!-- ARTICULOS -->
                            <div class="owl-carousel" id="posts-carousel">
                                @foreach ($posts as $post)
                                <div class="card m-auto py-5">
                                    <img class="card-img-top" src="{{asset($post->featured)}}" alt="{{$post->title}}">
                                    <div class="card-body">
                                        <small class="card-txt-category">Categoría: <span
                                                class="tag">{{$post->category->name}}</span></small>
                                        <h5 class="card-title my-2">{{$post->title}}</h5>
                                        <!-- <div class="d-card-text">
                                            {{$post->content}}
                                        </div> -->
                                        <a href="{{route('post', $post->id)}}" class="btn btn-success post-link mt-4"><b>Ver artículo</b></a>
                                        <hr>
                                        <div class="row">
                                            <div class="col-6 text-left">
                                                <div class="row">

                                                    <span class="card-txt-author"><b>Autor: </b>{{$post->author}}</span>
                                                </div>
                                            </div>
                                            <div class="col-6 text-right">
                                                <div class="row">

                                                    <span class="card-txt-date">{{$post->created_at->diffForHumans()}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                        </div>
                        <div class="navs-container">
                            <span class="bnn-articulos-nav" id="btn-izq-art">
                                <svg viewBox="0 0 24 24">
                                    <path d="M15.41,16.58L10.83,12L15.41,7.41L14,6L8,12L14,18L15.41,16.58Z" />
                                </svg>
                            </span>
                            <span class="bnn-articulos-nav" id="btn-der-art">
                                <svg viewBox="0 0 24 24">
                                    <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                                </svg>
                            </span>
                        </div>

                </section>

                <!-- Nuestros servicios  -->
                <section class="row justify-content-center wow fadeInUp" id="nuestros-servicios">
                    <div class="col-md-10">
                        <div class="row text-center">
                            <h1 class="blanco">Nuestras especialidades</h1>
                        </div>
                        <div class="row justify-content-around">
                            <div class="col-md-4">
                                <div class="row justify-content-center">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M13,16.12C16.47,15.71 19.17,12.76 19.17,9.17C19.17,5.3 16.04,2.17 12.17,2.17A7,7 0 0,0 5.17,9.17C5.17,12.64 7.69,15.5 11,16.06V20H5V22H19V20H13V16.12Z" />
                                    </svg>
                                    <h4><b>Asesoría y Consultoría Ambiental</b></h4>
                                </div>

                                <div class="row">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita, non. Quos,
                                        maiores voluptas. Nostrum in voluptate architecto. Corrupti sint velit ullam, dolorem inventore aspernatur. Quam sapiente inventore veritatis repellendus vero.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row justify-content-center">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M12,3C10.73,3 9.6,3.8 9.18,5H3V7H4.95L2,14C1.53,16 3,17 5.5,17C8,17 9.56,16 9,14L6.05,7H9.17C9.5,7.85 10.15,8.5 11,8.83V20H2V22H22V20H13V8.82C13.85,8.5 14.5,7.85 14.82,7H17.95L15,14C14.53,16 16,17 18.5,17C21,17 22.56,16 22,14L19.05,7H21V5H14.83C14.4,3.8 13.27,3 12,3M12,5A1,1 0 0,1 13,6A1,1 0 0,1 12,7A1,1 0 0,1 11,6A1,1 0 0,1 12,5M5.5,10.25L7,14H4L5.5,10.25M18.5,10.25L20,14H17L18.5,10.25Z" />
                                    </svg>
                                    <h4><b>Asesoría y Consultoría en derecho (Laboral, Civil)</b></h4>
                                </div>

                                <div class="row">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita, non. Quos,
                                        maiores voluptas. Nostrum in voluptate architecto. Corrupti sint velit ullam, dolorem inventore aspernatur. Quam sapiente inventore veritatis repellendus vero.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row justify-content-center">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M7,15H9C9,16.08 10.37,17 12,17C13.63,17 15,16.08 15,15C15,13.9 13.96,13.5 11.76,12.97C9.64,12.44 7,11.78 7,9C7,7.21 8.47,5.69 10.5,5.18V3H13.5V5.18C15.53,5.69 17,7.21 17,9H15C15,7.92 13.63,7 12,7C10.37,7 9,7.92 9,9C9,10.1 10.04,10.5 12.24,11.03C14.36,11.56 17,12.22 17,15C17,16.79 15.53,18.31 13.5,18.82V21H10.5V18.82C8.47,18.31 7,16.79 7,15Z" />
                                    </svg>
                                    <h4><b>Asesoría y consultoría económica</b></h4>
                                </div>

                                <div class="row">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita, non. Quos,
                                        maiores voluptas. Nostrum in voluptate architecto. Corrupti sint velit ullam, dolorem inventore aspernatur. Quam sapiente inventore veritatis repellendus vero.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row justify-content-center">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M13.78 15.3L19.78 21.3L21.89 19.14L15.89 13.14L13.78 15.3M17.5 10.1C17.11 10.1 16.69 10.05 16.36 9.91L4.97 21.25L2.86 19.14L10.27 11.74L8.5 9.96L7.78 10.66L6.33 9.25V12.11L5.63 12.81L2.11 9.25L2.81 8.55H5.62L4.22 7.14L7.78 3.58C8.95 2.41 10.83 2.41 12 3.58L9.89 5.74L11.3 7.14L10.59 7.85L12.38 9.63L14.2 7.75C14.06 7.42 14 7 14 6.63C14 4.66 15.56 3.11 17.5 3.11C18.09 3.11 18.61 3.25 19.08 3.53L16.41 6.2L17.91 7.7L20.58 5.03C20.86 5.5 21 6 21 6.63C21 8.55 19.45 10.1 17.5 10.1Z" />
                                    </svg>
                                    <h4><b>Asesoría en Legislación Ambiental y Minera</b></h4>
                                </div>

                                <div class="row">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita, non. Quos,
                                        maiores voluptas. Nostrum in voluptate architecto. Corrupti sint velit ullam, dolorem inventore aspernatur. Quam sapiente inventore veritatis repellendus vero.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row justify-content-center">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M17,8C8,10 5.9,16.17 3.82,21.34L5.71,22L6.66,19.7C7.14,19.87 7.64,20 8,20C19,20 22,3 22,3C21,5 14,5.25 9,6.25C4,7.25 2,11.5 2,13.5C2,15.5 3.75,17.25 3.75,17.25C7,8 17,8 17,8Z" />
                                    </svg>
                                    <h4><b>Asesoría en trámites ambientales</b></h4>
                                </div>

                                <div class="row">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita, non. Quos,
                                        maiores voluptas. Nostrum in voluptate architecto. Corrupti sint velit ullam, dolorem inventore aspernatur. Quam sapiente inventore veritatis repellendus vero.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row justify-content-center">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M12.5 10C12.5 8.34 11.16 7 9.5 7C7.86 7 6.5 8.34 6.5 10C6.5 11.64 7.86 13 9.5 13C11.16 13 12.5 11.64 12.5 10M9.5 11C8.96 11 8.5 10.54 8.5 10C8.5 9.44 8.96 9 9.5 9C10.06 9 10.5 9.44 10.5 10C10.5 10.54 10.06 11 9.5 11M16 13C17.12 13 18 12.1 18 11C18 9.88 17.12 9 16 9C14.9 9 14 9.88 14 11C14 12.1 14.9 13 16 13M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2M5.85 17.11C6.53 16.57 8.12 16 9.5 16C9.58 16 9.66 16 9.74 16C10 15.37 10.41 14.72 11.04 14.15C10.5 14.05 9.95 14 9.5 14C8.21 14 6.12 14.44 4.78 15.42C4.28 14.38 4 13.22 4 12C4 7.58 7.59 4 12 4C16.41 4 20 7.58 20 12C20 13.19 19.73 14.33 19.25 15.36C18.25 14.77 16.89 14.5 16 14.5C14.5 14.5 11.5 15.3 11.5 17.19V19.97C9.24 19.84 7.22 18.76 5.85 17.11Z" />
                                    </svg>
                                    <h4><b>Asesoría en Sistemas Integrados de Gestión</b></h4>
                                </div>

                                <div class="row">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita, non. Quos,
                                        maiores voluptas. Nostrum in voluptate architecto. Corrupti sint velit ullam, dolorem inventore aspernatur. Quam sapiente inventore veritatis repellendus vero.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row justify-content-center">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M21.82,15.42L19.32,19.75C18.83,20.61 17.92,21.06 17,21H15V23L12.5,18.5L15,14V16H17.82L15.6,12.15L19.93,9.65L21.73,12.77C22.25,13.54 22.32,14.57 21.82,15.42M9.21,3.06H14.21C15.19,3.06 16.04,3.63 16.45,4.45L17.45,6.19L19.18,5.19L16.54,9.6L11.39,9.69L13.12,8.69L11.71,6.24L9.5,10.09L5.16,7.59L6.96,4.47C7.37,3.64 8.22,3.06 9.21,3.06M5.05,19.76L2.55,15.43C2.06,14.58 2.13,13.56 2.64,12.79L3.64,11.06L1.91,10.06L7.05,10.14L9.7,14.56L7.97,13.56L6.56,16H11V21H7.4C6.47,21.07 5.55,20.61 5.05,19.76Z" />
                                    </svg>
                                    <h4><b>Asesoría y Consultoría en Análisis de ciclo de vida de producto</b></h4>
                                </div>

                                <div class="row">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita, non. Quos, maiores voluptas. Nostrum in voluptate architecto. Corrupti sint velit ullam, dolorem inventore aspernatur. Quam sapiente inventore veritatis repellendus vero.</p>
                                </div>
                            </div>


                        </div>
                    </div>
                </section>

                <!-- Nuestro Equipo -->
                <section class="row py-4 justify-content-around text-center wow fadeInUp" id="ne">
                    <h2 class="my-4">NUESTRO EQUIPO DE TRABAJO</h2>

                    <div class="owl-carousel" id="ne-carousel">
                        <div class="card">
                            <div class="avatar">
                                <img src="https://i.pinimg.com/280x280_RS/2e/45/66/2e4566fd829bcf9eb11ccdb5f252b02f.jpg">
                            </div>
                            <div class="title">
                                <h2>Nombres Apellidos</h2>
                            </div>
                            <div class="description">
                                <p>Área de conocimiento</p>
                                <p>Abogado laboralista con experiencia en...</p>
                            </div>
                            
                        </div>

                        <div class="card">
                            <div class="avatar">
                                <img src="https://i.pinimg.com/280x280_RS/2e/45/66/2e4566fd829bcf9eb11ccdb5f252b02f.jpg">
                            </div>
                            <div class="title">
                                <h2>Nombres Apellidos</h2>
                            </div>
                            <div class="description">
                                <p>Área de conocimiento</p>
                                <p>Abogado laboralista con experiencia en...</p>
                            </div>
                            
                        </div>

                        <div class="card">
                            <div class="avatar">
                                <img src="https://i.pinimg.com/280x280_RS/2e/45/66/2e4566fd829bcf9eb11ccdb5f252b02f.jpg">
                            </div>
                            <div class="title">
                                <h2>Nombres Apellidos</h2>
                            </div>
                            <div class="description">
                                <p>Área de conocimiento</p>
                                <p>Abogado laboralista con experiencia en...</p>
                            </div>
                            
                        </div>
                    </div>
                </section>
            </main>

            <!-- Footer -->
            <footer class="col-12 wow fadeInUp" id="contacto">
                <div class="row justify-content-center align-items-center text-center p-4">
                    <div class="col-md-4">
                        <div class="row">
                            <img class="img-responsive" src="/images/logo-semaj-consultores.jpg" class="img-fluid" style="width: 60%; margin: 0 auto;" alt="Semaj Logo">
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                        <div class="row text-center">
                            <a class="footer-link btn-popup" onclick=clickaction(this)  href="#" id="terminos-condiciones">Términos y condiciones</a>
                            <a class="footer-link btn-popup" onclick=clickaction(this)  href="#" id="politicas">Políticas y privacidad</a>
                            <a class="footer-link btn-popup" onclick=clickaction(this)  href="#" id="tcn">Trabaje con nosotros</a>
                            <a class="footer-link" href="tel:3134395561">
                                <!-- <img src="{{asset('images/logo.png')}}" width="120" alt="" loading="lazy"> -->
                                <svg viewBox="0 0 24 24">
                                    <path d="M15,12H17A5,5 0 0,0 12,7V9A3,3 0 0,1 15,12M19,12H21C21,7 16.97,3 12,3V5C15.86,5 19,8.13 19,12M20,15.5C18.75,15.5 17.55,15.3 16.43,14.93C16.08,14.82 15.69,14.9 15.41,15.18L13.21,17.38C10.38,15.94 8.06,13.62 6.62,10.79L8.82,8.59C9.1,8.31 9.18,7.92 9.07,7.57C8.7,6.45 8.5,5.25 8.5,4A1,1 0 0,0 7.5,3H4A1,1 0 0,0 3,4A17,17 0 0,0 20,21A1,1 0 0,0 21,20V16.5A1,1 0 0,0 20,15.5Z" />
                                </svg>
                                <span style="font-size: 15px;">
                                    313-439-5561
                                </span>
                            </a>
                            <a class="footer-link" href="mailto:juridica@semajconsultores.com.co">
                                <!-- <img src="{{asset('images/logo.png')}}" width="120" alt="" loading="lazy"> -->
                                <svg viewBox="0 0 24 24">
                                    <path d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" />
                                </svg>
                                <span style="font-size: 15px;">
                                    juridica@semajconsultores.com.co
                                </span>
                            </a>
                            <a class="footer-link" href="https://www.google.com/maps/place/Semaj+Consultores+SAS/@5.0153925,-73.9983254,15z/data=!4m5!3m4!1s0x0:0x8b24fc4689889f7b!8m2!3d5.0153925!4d-73.9983254"
                                target="_blank">
                                <!-- <img src="{{asset('images/logo.png')}}" width="120" alt="" loading="lazy"> -->
                                <svg viewBox="0 0 24 24">
                                    <path d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z" />
                                </svg>
                                <span style="font-size: 15px;">
                                    Cra 22 #3-03, Zipaquirá - Cundinamarca
                                </span>
                            </a>
                            <p>Horarios: L - V de 8:00 A.M - 5:00 P.M</p>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15898.169178202324!2d-73.9983254!3d5.0153925!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8b24fc4689889f7b!2sSemaj%20Consultores%20SAS!5e0!3m2!1ses-419!2sco!4v1633580979442!5m2!1ses-419!2sco" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                    <p class="mt-3">Copyright © 2021 David R. Baracaldo <b><i>Semaj Consultores SAS</i></b>. <br> Todos los derechos reservados.</p>
                </div>
            </footer>
        </div>
    </div>

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