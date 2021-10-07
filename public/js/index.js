$(document).ready(function () {
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
        autoplayTimeout: 3000,
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
        autoplayTimeout: 2000,
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

    /*
        Envío de formulario Agenda tu Asesoría Jurídica
        @author Edwin Nieto
        @version 1.0
    */

    $("#button-form").click(function () {
        event.preventDefault();
        if ($("#nombres").val() == "") {
            $("#nombres").notify("El campo no debe ir vacío", { position: "top" });
        } else if ($("#telefono").val() == "") {
            $("#telefono").notify("El campo no debe ir vacío", { position: "top" });
        } else if ($("#correo").val() == "") {
            $("#correo").notify("El campo no debe ir vacío", { position: "top" });
        } else if ($("#motivo").val() == "") {
            $("#motivo").notify("El campo no debe ir vacío", { position: "top" });
        } else if ($("#modalidad").val() == "") {
            $("#modalidad").notify("El campo no debe ir vacío", { position: "top" });
        } else if ($("#fecha").val() == "") {
            $("#fecha").notify("El campo no debe ir vacío", { position: "top" });
        } else {
            swal("Gracias por registrar sus datos", "Será redireccionado en breve...", "success");
            document.ataj.submit();
        }
    });
    
    /*
        Popup de archivos pdf
        @author Edwin Nieto
        @version 1.0
    */

    $('#btn-cerrar-popup').click(function () {
        $('.popup-container').removeClass('active');
        $('.iframe-pdf').removeClass('active');
        $('#ftcn').removeClass('d-flex');
        $('#ftcn').removeClass('active');
    });
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
            $('.iframe-pdf').html('<iframe src="/pdf/politicas-de-privacidad.docx&amp;embedded=true" style="width: 100%;height:420px" frameborder="0"></iframe>');
            if ($('#ftcn').hasClass('active')) {
                $('#ftcn').removeClass('active');
            }
            break;
        case 'politicas':
            $('.iframe-pdf').addClass('active');
            $('.iframe-pdf').html('<iframe src="/pdf/terminos-y-condiciones.docx&amp;embedded=true" style="width: 100%;height:420px" frameborder="0"></iframe>');
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