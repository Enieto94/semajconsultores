$(document).ready(function(){
    $('#portada').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        center: true,
        responsive:{
            0:{
                items:1
            }
        }
    });

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

    $("a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();
    
          // Store hash
          var hash = this.hash;
    
          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top -200
          }, 800, function(){
    
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });
});