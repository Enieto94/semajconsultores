$(document).ready(function () {
    
    /*
        Inicializar wow.js y animate.css
        @author Edwin Nieto
        @version 1.0
    */
        new WOW().init();
    /*
        Scroll smooth para secciones de la página
        @author Edwin Nieto
        @version 1.0
    */

    $("a").on('click', function (event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top - 200
            }, 800, function () {

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });
    // Menú movil
    $('#nav-icon').click(function () {
        $(this).toggleClass('open');
        $('.bg-main').toggleClass('active');
    });

    /*
        Carousel de portada y botones acciones anterior y siguiente
        @author Edwin Nieto
        @version 1.0
    */

    $('#portada').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        center: true,
        responsive: {
            0: {
                items: 1
            }
        }
    });

    $('#btn-der').click(function () {
        $('#portada').trigger('next.owl.carousel');
    });

    $('#btn-izq').click(function () {
        $('#portada').trigger('prev.owl.carousel', [300]);
    });

    /*
        Carousel de nuestro equipo
        @author Edwin Nieto
        @version 1.0
    */

    $('#ne-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true,
        autoplayTimeout: 6000,
        smartSpeed: 4000,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 3
            }
        }
    });

    /*
        Carousel de artículos
        @author Edwin Nieto
        @version 1.0
    */

    $('#posts-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        center: true,
        autoplay: true,
        autoplayTimeout: 5000,
        smartSpeed: 3000,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 3
            }
        }
    });

    $('#btn-der-art').click(function () {
        $('#posts-carousel').trigger('next.owl.carousel');
    });

    $('#btn-izq-art').click(function () {
        $('#posts-carousel').trigger('prev.owl.carousel', [300]);
    });

    $("#btn-tcn").click(function () {
        event.preventDefault();
        if ($("#nombres-hv").val() == "") {
            $("#nombres-hv").notify("El campo no debe ir vacío", { position: "top" });
        } else if ($("#telefono--hv").val() == "") {
            $("#telefono-hv").notify("El campo no debe ir vacío", { position: "top" });
        } else if ($("#correo-hv").val() == "") {
            $("#correo-hv").notify("El campo no debe ir vacío", { position: "top" });
        } else if ($("#archivo").val() == "") {
            $("#archivo").notify("El campo no debe ir vacío", { position: "top" });
        } else {
            swal("Gracias por registrar sus datos", "Será redireccionado en breve...", "success");
            document.hv.submit();
        }
    });
    
    /*
        Popup de archivos pdf
        @author Edwin Nieto
        @version 1.0
    */

    $('#btn-cerrar-popup, .popup-container').click(function () {
        $('.popup-container').removeClass('active');
        $('.iframe-pdf').removeClass('active');
        $('#ftcn').removeClass('d-flex');
        $('#ftcn').removeClass('active');
    });
    /*
        Función que convierte  html
        @author Edwin Nieto
        @version 1.0
    */
    let texto = $('#content').text();
    $('#content').html(texto);
});

/*
    Función que agrega archivo pdf en el popup
    @author Edwin Nieto
    @version 1.0
*/

function clickaction(b) {
    event.preventDefault();
    $('.popup-container').addClass('active');
    switch (b.id) {
        case 'terminos-condiciones':
            $('.iframe-pdf').addClass('active');
            $('.iframe-pdf').html('<iframe src="/pdf/politicas-de-privacidad.pdf" style="width: 100%;height:80vh" frameborder="0"></iframe>');
            if ($('#ftcn').hasClass('active')) {
                $('#ftcn').removeClass('active');
            }
            break;
        case 'politicas':
            $('.iframe-pdf').addClass('active');
            $('.iframe-pdf').html('<iframe src="/pdf/terminos-y-condiciones.pdf" style="width: 100%;height:80vh" frameborder="0"></iframe>');
            break;
        case 'tcn':
            $('#ftcn').addClass('active');
            $('#ftcn').removeClass('d-none');
            $('#ftcn').addClass('d-flex');
            break;
        default:
            break;
    }
}

/*
    Función que diligencia hoja de Google Docs
    @author Edwin Nieto
    @version 1.0
*/

var form = document.getElementById('form-ataj');
  form.addEventListener("submit", e => {
    e.preventDefault();
    fetch(form.action, {
        method : "POST",
        body: new FormData(document.getElementById("form-ataj")),
    }).then(
        response => response.json()
    ).then((html) => {
      // you can put any JS code here
      swal("Gracias por registrar sus datos", "De clic en ok", "success");
      $('input').val('');
      $('select').val('');
    });
  });