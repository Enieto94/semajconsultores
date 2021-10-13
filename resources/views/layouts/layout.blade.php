@yield('content')
<!-- agrega aquí el footer -->
<!-- Footer -->
<div class="container-fluid">
    <div class="row">
        <footer class="col-12" id="contacto">
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