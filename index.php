<!DOCTYPE html>
<html>
<head>
    <title>Mi pagina web</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <link href="faviconWS.ico" rel="shortcut icon">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript"> /*slide*/
        $(document).ready(function () {
    //rotation speed and timer
    var speed = 3500;
    
    var run = setInterval(rotate, speed);
    var slides = $('.slide');
    var container = $('#slides ul');
    var elm = container.find(':first-child').prop("tagName");
    var item_width = container.width();
    var previous = 'prev'; 
    var next = 'next'; 
    slides.width(item_width); 
    container.parent().width(item_width);
    container.width(slides.length * item_width);
    container.find(elm + ':first').before(container.find(elm + ':last'));
    resetSlides();
    

    
    $('#buttons a').click(function (e) {
        
        if (container.is(':animated')) {
            return false;
        }
        if (e.target.id == previous) {
            container.stop().animate({
                'left': 0
            }, 1500, function () {
                container.find(elm + ':first').before(container.find(elm + ':last'));
                resetSlides();
            });
        }
        
        if (e.target.id == next) {
            container.stop().animate({
                'left': item_width * -2
            }, 1500, function () {
                container.find(elm + ':last').after(container.find(elm + ':first'));
                resetSlides();
            });
        }
                   
        return false;
        
    });
        
    container.parent().mouseenter(function () {
        clearInterval(run);
    }).mouseleave(function () {
        run = setInterval(rotate, speed);
    });
    
    
    function resetSlides() {

        container.css({
            'left': -1 * item_width
        });
    }
    
});

function rotate() {
    $('#next').click();
}
    </script>
    <script src="js/jquery.js"></script>

 <script type="text/javascript"> //scroll
    $(document).ready(function() {
  var menu = $('#cabecera');
  var contenedor = $('.cabecera_large');
  var cont_offset = contenedor.offset();
  $(window).on('scroll', function() {
    if($(window).scrollTop() > 400) {
      menu.addClass('menu-fijo');
      contenedor.removeClass('cabecera_large');
      contenedor.addClass('cabecera_small');

    } else {
      menu.removeClass('menu-fijo');
      contenedor.addClass('cabecera_large');
      contenedor.removeClass('cabecera_small');
    }
  });
});
  </script> 

<!--ancla-->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="js/stickyMojo.js"></script>
<script type="text/javascript">
$(document).ready(function() {   

    $('.ancla').click(function(){
        var link = $(this);
        var anchor  = link.attr('href');
        $('html, body').stop().animate({
            scrollTop: jQuery(anchor).offset().top
        }, 2000);
        return false;
    });
});
</script>


<!-- slidebox image -->
<link rel="stylesheet"  href="css/lightslider.css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/lightslider.js"></script> 
    <script>
       $(document).ready(function() {
      $("#content-slider").lightSlider({
                loop:true,
                keyPress:true
            });
            $('#image-gallery').lightSlider({
                gallery:true,
                item:1,
                thumbItem:9,
                slideMargin: 0,
                speed:500,
                auto:true,
                loop:true,
                onSliderLoad: function() {
                    $('#image-gallery').removeClass('cS-hidden');
                }  
            });
    });
    </script>
</head>
<body>

<div id="inicio">
    <header id="cabecera">
        <div class="cabecera_large">
            <div id="marca">
                <a href="#inicio"><img src="imagenes/logoWS_3.png"></a>
            </div>
        <nav id="botonera_principal">
            <ul>
                <li><a href="#inicio" class="ancla">Inicio</a></li>
                <li><a href="#como_trabajamos" class="ancla">¿Cómo trabajamos?</a></li>
                <li><a href="#servicios" class="ancla">Servicios</a></li>
                <li><a href="#noticias" class="ancla">Noticias</a></li>
                <li><a href="#portfolio" class="ancla">Portfolio</a></li>
                <li><a href="#contactanos" class="ancla">Contactanos</a></li>
            </ul>
        </nav>
        </div>
    </header>
    
    <section id="contenido">
        <div class="centrales">
            <div id="imagen_marca">
                <img src="imagenes/logoWS_2.png" id="rotacion">
            </div>
            <div id="info">
                <h1>DISEÑO WEB PROFESIONAL</h1>
                <div id="carousel">
    <div id="slides">
        <ul>
            <li class="slide">
                <div class="quoteContainer">
                    <p class="quote-phrase"> Diseñamos y desarrollamos sitios web modernos y funcionales</p>
                </div>
        
            </li>
            <li class="slide">
                <div class="quoteContainer">
                    <p class="quote-phrase">
                      Utilizamos las mejores tecnologías como PHP, HTML5, CSS3 y JavaScript </p>
                </div>
            </li>
            <li class="slide">
                <div class="quoteContainer">
                    <p class="quote-phrase">Ofrecemos promociones y presupuestos a medida </p>
                </div>
            </li>
            <li class="slide">
                <div class="quoteContainer">
                    <p class="quote-phrase">Contactanos y recibí una propuesta en menos de 24hs!</p>
                </div>
            </li>
        </ul>
    </div>
      <div class="btn-bar">
    <div id="buttons"><a id="prev" href="#"><</a><a id="next" href="#">></a> </div></div>
        </div>
    </div>
    </section>
</div>


<div id="fondo_como_trabajamos">
	<div id="como_trabajamos">
	
	<?php
		include("como_trabajamos.php");
		?>

</div>
</div>


<div id="fondo_servicios">
	<div id="servicios">

		<?php
		include("servicios.php");
		?>
	</div>
</div>

<div id="fondo_noticias">
	<div id="noticias">
			<?php if(isset($_GET['noticia_completa'])) {
			if($_GET['noticia_completa']=='$id_noticia') { ?>

				<div id="noticia_completa">
				<p><?php include('noticia_completa.php'); ?> </p>
				</div>
				
		<?php	} } else { include("noticias.php"); } ?>
				<div class="caja_auto"></div>
</div>
</div>

<div id="fondo_portfolio">
    <div id="portfolio">
            <?php include("portfolio.php");
            ?>
</div>
</div>

<div id="fondo_contactanos">
	<div id="contactanos">
		
		<?php
		include("contactanos.php");
		?>
	</div>

</div>


</body>
</html>