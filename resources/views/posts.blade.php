<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semajconsultores - Inicio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="/libs/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/libs/owl-carousel/owl.theme.default.min.css">
</head>

<body>
    <!-- agrega aquí el header con el logo -->
    <!-- Logo -->

    <div class="container-fluid">
        <div class="row">
            <nav class="col-12 navbar bg-main">
                <div id="links-info">
                    <a href="tel:3000000000">
                        <!-- <img src="{{asset('images/logo.png')}}" width="120" alt="" loading="lazy"> -->
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="#ffff"
                                d="M15,12H17A5,5 0 0,0 12,7V9A3,3 0 0,1 15,12M19,12H21C21,7 16.97,3 12,3V5C15.86,5 19,8.13 19,12M20,15.5C18.75,15.5 17.55,15.3 16.43,14.93C16.08,14.82 15.69,14.9 15.41,15.18L13.21,17.38C10.38,15.94 8.06,13.62 6.62,10.79L8.82,8.59C9.1,8.31 9.18,7.92 9.07,7.57C8.7,6.45 8.5,5.25 8.5,4A1,1 0 0,0 7.5,3H4A1,1 0 0,0 3,4A17,17 0 0,0 20,21A1,1 0 0,0 21,20V16.5A1,1 0 0,0 20,15.5Z" />
                        </svg>
                        <span style="color: #fff;">
                            300-000-0000
                        </span>
                    </a>

                    <a href="mailto:juridica@semajconsultores.com.co">
                        <!-- <img src="{{asset('images/logo.png')}}" width="120" alt="" loading="lazy"> -->
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="#f3f3f3"
                                d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" />
                        </svg>
                        <span style="color: #f3f3f3;">
                            juridica@semajconsultores.com.co
                        </span>
                    </a>

                    <a href="https://www.google.com/maps?ll=5.015214,-73.998228&z=16&t=m&hl=es-419&gl=CO&mapclient=embed&q=Cra.+22+%233-3+Zipaquir%C3%A1,+Cundinamarca"
                        target="_blank">
                        <!-- <img src="{{asset('images/logo.png')}}" width="120" alt="" loading="lazy"> -->
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="#f3f3f3"
                                d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z" />
                        </svg>
                        <span style="color: #f3f3f3;">
                            Cra 22 #3-03, Zipaquirá - Cundinamarca
                        </span>
                    </a>
                </div>

                <div id="links-sm">
                    <a href="https://www.facebook.com/semajconsultores/" target="_blank">
                        <svg class="sm-icon" style="width:40px;height:40px" viewBox="0 0 24 24">
                            <path fill="#f3f3f3"
                                d="M12 2.04C6.5 2.04 2 6.53 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.85C10.44 7.34 11.93 5.96 14.22 5.96C15.31 5.96 16.45 6.15 16.45 6.15V8.62H15.19C13.95 8.62 13.56 9.39 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96A10 10 0 0 0 22 12.06C22 6.53 17.5 2.04 12 2.04Z" />
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/semajconsultores/" target="_blank">
                        <svg class="sm-icon" style="width:40px;height:40px" viewBox="0 0 24 24">
                            <path fill="#f3f3f3"
                                d="M7.8,2H16.2C19.4,2 22,4.6 22,7.8V16.2A5.8,5.8 0 0,1 16.2,22H7.8C4.6,22 2,19.4 2,16.2V7.8A5.8,5.8 0 0,1 7.8,2M7.6,4A3.6,3.6 0 0,0 4,7.6V16.4C4,18.39 5.61,20 7.6,20H16.4A3.6,3.6 0 0,0 20,16.4V7.6C20,5.61 18.39,4 16.4,4H7.6M17.25,5.5A1.25,1.25 0 0,1 18.5,6.75A1.25,1.25 0 0,1 17.25,8A1.25,1.25 0 0,1 16,6.75A1.25,1.25 0 0,1 17.25,5.5M12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z" />
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
                    <svg style="width:48px;height:48px" viewBox="0 0 24 24">
                        <path fill="#fff"
                            d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 15 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M8.53 7.33C8.37 7.33 8.1 7.39 7.87 7.64C7.65 7.89 7 8.5 7 9.71C7 10.93 7.89 12.1 8 12.27C8.14 12.44 9.76 14.94 12.25 16C12.84 16.27 13.3 16.42 13.66 16.53C14.25 16.72 14.79 16.69 15.22 16.63C15.7 16.56 16.68 16.03 16.89 15.45C17.1 14.87 17.1 14.38 17.04 14.27C16.97 14.17 16.81 14.11 16.56 14C16.31 13.86 15.09 13.26 14.87 13.18C14.64 13.1 14.5 13.06 14.31 13.3C14.15 13.55 13.67 14.11 13.53 14.27C13.38 14.44 13.24 14.46 13 14.34C12.74 14.21 11.94 13.95 11 13.11C10.26 12.45 9.77 11.64 9.62 11.39C9.5 11.15 9.61 11 9.73 10.89C9.84 10.78 10 10.6 10.1 10.45C10.23 10.31 10.27 10.2 10.35 10.04C10.43 9.87 10.39 9.73 10.33 9.61C10.27 9.5 9.77 8.26 9.56 7.77C9.36 7.29 9.16 7.35 9 7.34C8.86 7.34 8.7 7.33 8.53 7.33Z" />
                    </svg>
                </a>
            </nav>

            <!-- Contenido -->
            <main class="col-12 content" id="inicio">
                <section class="owl-carousel" id="portada">

                    <div class="portada-item">
                        <div class="cover">
                        </div>
                        <img src="/images/portada.jpg" alt="">
                        <div class="lema">
                            <h2>Derecho + Economía + Ambiente</h2>
                        </div>
                    </div>

                    <div class="portada-item">
                        <div class="cover">
                        </div>
                        <img src="/images/portada.jpg" alt="">
                        <div class="lema">
                            <h2>Derecho + Economía + Ambiente</h2>
                        </div>
                    </div>

                </section>

                <section class="row justify-content-center">
                    <div class="col-10" id="form">
                        <div class="row justify-content-center text-center py-4">
                            <h4><i>Abogados en Zipaquirá</i></h4>
                            <h2 class="verde">Agenda tu Asesoría Jurídica</h2>
                        </div>
                        <form class="row justify-content-around" action="enviar.php" method="post"
                            enctype="multipart/form-data" name="ataj">
                            <div class="col-md-5 form-group my-2">
                                <input name="nombres" type="text" class="form-control" placeholder="Nombres" id="nombres">
                            </div>

                            <div class="col-md-5 form-group my-2">
                                <input name="telefono" type="text" class="form-control" placeholder="Teléfono" id="telefono">
                            </div>

                            <div class="col-md-5 form-group my-2">
                                <input name="correo" type="text" class="form-control" placeholder="Correo" id="correo">
                            </div>

                            <div class="col-md-5 form-group my-2">
                                <input name="motivo" type="text" class="form-control" placeholder="Motivo consulta" id="motivo">
                            </div>

                            <div class="col-md-5 form-group my-2">
                                <select name="modalidad" class="form-control" id="modalidad">
                                    <option name="modalidad" value="">Escoja la modalidad de la consulta</option>
                                    <option name="modalidad" value="Presencial">Presencial</option>
                                    <option name="modalidad" value="Virtual">Virtual</option>
                                </select>
                            </div>
                            <div class="col-md-5 form-group my-2">
                                <input name="fecha" type="date" class="form-control" placeholder="Campo" id="fecha">
                            </div>
                            <button type="submit" class="my-3 col-5 col-md-3 btn" id="button-form">
                                AGENDAR CITA AHORA
                            </button>
                        </form>
                    </div>
                </section>

                <section class="row justify-content-center align-items-center my-4" id="nosotros">
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
                            <img class="img-responsive"
                                src="https://media.istockphoto.com/photos/judges-male-lawyers-consultation-of-businessmen-legal-services-in-picture-id1234426314?b=1&k=6&m=1234426314&s=170667a&w=0&h=OWf5y-y_p2PvayEqbOd1VpSB046qXSRJkPLwb3NYPnU="
                                alt="">
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
                <section class="row justify-content-center text-center">
                    <h2><i>NUESTROS ARTÍCULOS</i></h2>
                    <div class="col-12">
                        <nav class="text-center my-5">
                            <a href="/"
                                class="mx-3 pb-3 link-category d-block d-md-inline {{isset($categoryIdSelected)? '':'selected-category'}}">Todas</a>
                            @foreach ($categories as $category)
                            <a href="{{route('posts.category',$category->name)}}"
                                class="mx-3 pb-3 link-category d-block d-md-inline {{(isset($categoryIdSelected) && $category->id == $categoryIdSelected) ? 'selected-category' : ''}}">{{$category->name}}</a>
                            <!-- <a href="{{route('posts.category',$category->name)}}" class="mx-3 pb-3 link-category d-block d-md-inline selected-category" >{{$category->name}}</a> -->
                            @endforeach
                        </nav>
                    </div>
                </section>

                <!-- Posts -->
                <section class="row justify-content-center" id="articulos">
                    <div class="col-10">
                        <div class="row">
                            <!-- Post 1 -->
                            @foreach ($posts as $post)
                            <div class="col-md-4 col-12 justify-content-center mb-5">
                                <div class="card m-auto" style="width: 18rem;">
                                    <img class="card-img-top" src="{{asset($post->featured)}}" alt="{{$post->title}}">
                                    <div class="card-body">
                                        <small class="card-txt-category">Categoría: <span
                                                class="tag">{{$post->category->name}}</span></small>
                                        <h5 class="card-title my-2">{{$post->title}}</h5>
                                        <div class="d-card-text">
                                            {{$post->content}}
                                        </div>
                                        <a href="{{route('post', $post->id)}}" class="btn btn-success post-link"><b>Leer
                                                más</b></a>
                                        <hr>
                                        <div class="row">
                                            <div class="col-8 text-left">
                                                <span class="card-txt-author"><b>Autor: </b>{{$post->author}}</span>
                                            </div>
                                            <div class="col-4 text-right">
                                                <span
                                                    class="card-txt-date">{{$post->created_at->diffForHumans()}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>

                    <div class="col-12">
                        <!-- Paginador -->

                    </div>
                </section>

                <section class="row justify-content-center" id="nuestros-servicios">
                    <div class="col-md-10">
                        <div class="row text-center">
                            <h2 class="blanco">Nuestras especialidades</h2>
                        </div>
                        <div class="row justify-content-around">
                            <div class="col-md-4">
                                <div class="row">
                                    <svg style="width:96px;height:96px" viewBox="0 0 24 24">
                                        <path fill="#B7C53E"
                                            d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z" />
                                    </svg>
                                    <h2><b>Derecho Civil</b></h2>
                                </div>

                                <div class="row">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita, non. Quos,
                                        maiores
                                        voluptas. Nostrum in voluptate architecto. Corrupti sint velit ullam, dolorem
                                        inventore
                                        aspernatur. Quam sapiente inventore veritatis repellendus vero.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <svg style="width:96px;height:96px" viewBox="0 0 24 24">
                                        <path fill="#B7C53E"
                                            d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z" />
                                    </svg>
                                    <h2><b>Derecho Civil</b></h2>
                                </div>

                                <div class="row">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita, non. Quos,
                                        maiores
                                        voluptas. Nostrum in voluptate architecto. Corrupti sint velit ullam, dolorem
                                        inventore
                                        aspernatur. Quam sapiente inventore veritatis repellendus vero.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <svg style="width:96px;height:96px" viewBox="0 0 24 24">
                                        <path fill="#B7C53E"
                                            d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z" />
                                    </svg>
                                    <h2><b>Derecho Civil</b></h2>
                                </div>

                                <div class="row">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita, non. Quos,
                                        maiores
                                        voluptas. Nostrum in voluptate architecto. Corrupti sint velit ullam, dolorem
                                        inventore
                                        aspernatur. Quam sapiente inventore veritatis repellendus vero.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <svg style="width:96px;height:96px" viewBox="0 0 24 24">
                                        <path fill="#B7C53E"
                                            d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z" />
                                    </svg>
                                    <h2><b>Derecho Civil</b></h2>
                                </div>

                                <div class="row">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita, non. Quos,
                                        maiores
                                        voluptas. Nostrum in voluptate architecto. Corrupti sint velit ullam, dolorem
                                        inventore
                                        aspernatur. Quam sapiente inventore veritatis repellendus vero.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <svg style="width:96px;height:96px" viewBox="0 0 24 24">
                                        <path fill="#B7C53E"
                                            d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z" />
                                    </svg>
                                    <h2><b>Derecho Civil</b></h2>
                                </div>

                                <div class="row">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita, non. Quos,
                                        maiores
                                        voluptas. Nostrum in voluptate architecto. Corrupti sint velit ullam, dolorem
                                        inventore
                                        aspernatur. Quam sapiente inventore veritatis repellendus vero.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <svg style="width:96px;height:96px" viewBox="0 0 24 24">
                                        <path fill="#B7C53E"
                                            d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z" />
                                    </svg>
                                    <h2><b>Derecho Civil</b></h2>
                                </div>

                                <div class="row">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita, non. Quos,
                                        maiores
                                        voluptas. Nostrum in voluptate architecto. Corrupti sint velit ullam, dolorem
                                        inventore
                                        aspernatur. Quam sapiente inventore veritatis repellendus vero.</p>
                                </div>
                            </div>


                        </div>
                    </div>
                </section>
            </main>

            <!-- Footer -->
            <footer class="col-12" id="contacto">
                <div class="row justify-content-between align-items-center text-center p-4">
                    <div class="col-md-4">
                        <div class="row">
                            <img class="img-responsive" src="images/uploads/1629559811-logo.PNG" class="img-fluid" style="width: 60%; margin: 0 auto;" alt="Semaj Logo">
                        </div>
                        
                    </div>
                    <div class="col-md-2">
                        <div class="row text-center">
                            <a class="footer-link" href="#">Términos y condiciones</a>
                            <a class="footer-link" href="#">Políticas y privacidad</a>
                            <a class="footer-link" href="#">Trabaje con nosotros</a>
                            <a class="footer-link" href="tel:3000000000">
                                <!-- <img src="{{asset('images/logo.png')}}" width="120" alt="" loading="lazy"> -->
                                <svg style="width:20px;height:20px" viewBox="0 0 24 24">
                                    <path fill="#000"
                                        d="M15,12H17A5,5 0 0,0 12,7V9A3,3 0 0,1 15,12M19,12H21C21,7 16.97,3 12,3V5C15.86,5 19,8.13 19,12M20,15.5C18.75,15.5 17.55,15.3 16.43,14.93C16.08,14.82 15.69,14.9 15.41,15.18L13.21,17.38C10.38,15.94 8.06,13.62 6.62,10.79L8.82,8.59C9.1,8.31 9.18,7.92 9.07,7.57C8.7,6.45 8.5,5.25 8.5,4A1,1 0 0,0 7.5,3H4A1,1 0 0,0 3,4A17,17 0 0,0 20,21A1,1 0 0,0 21,20V16.5A1,1 0 0,0 20,15.5Z" />
                                </svg>
                                <span style="font-size: 15px;">
                                    300-000-0000
                                </span>
                            </a>
                            <a class="footer-link" href="mailto:juridica@semajconsultores.com.co">
                                <!-- <img src="{{asset('images/logo.png')}}" width="120" alt="" loading="lazy"> -->
                                <svg style="width:20px;height:20px" viewBox="0 0 24 24">
                                    <path fill="#000"
                                        d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" />
                                </svg>
                                <span style="font-size: 15px;">
                                    juridica@semajconsultores.com.co
                                </span>
                            </a>
                            <a class="footer-link" href="https://www.google.com/maps?ll=5.015214,-73.998228&z=16&t=m&hl=es-419&gl=CO&mapclient=embed&q=Cra.+22+%233-3+Zipaquir%C3%A1,+Cundinamarca"
                                target="_blank">
                                <!-- <img src="{{asset('images/logo.png')}}" width="120" alt="" loading="lazy"> -->
                                <svg style="width:20px;height:20px" viewBox="0 0 24 24">
                                    <path fill="#000"
                                        d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z" />
                                </svg>
                                <span style="font-size: 15px;">
                                    Cra 22 #3-03, Zipaquirá - Cundinamarca
                                </span>
                            </a>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3974.543380611096!2d-74.00041648523636!3d5.015214096359539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e407024d4386065%3A0x2ef8a4c07f9659e5!2sCra.%2022%20%233-3%2C%20Zipaquir%C3%A1%2C%20Cundinamarca!5e0!3m2!1ses-419!2sco!4v1629512327721!5m2!1ses-419!2sco"
                                width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                    <p class="mt-3">Copyright © 2021 David R. Baracaldo <b><i>Semaj Consultores SAS</i></b>. <br> Todos
                        los
                        derechos reservados.</p>
                </div>
            </footer>
        </div>
    </div>

    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
    <script src="/libs/owl-carousel/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="/js/index.js"></script>
</body>

</html>