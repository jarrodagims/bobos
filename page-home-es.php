<?php get_header();

/*
    Template Name: Home Espanol
*/ ?>
<section class="home-module-1">
    <div class="sub-header">
        <div class="container">
            <div class="row ">
                <div class="v-align">
                    <div class="col-xs-12 navbar-button text-center">
                        <?php echo responsive_bs_menu('primary', 'left', SITENAME); ?>
                        <ul class="nav navbar-nav navbar-right visible-xs">
                            <li class="menu-item directions"><a href="<?php echo get_site_url() ?>/contact-us"></a></a></li>
                            <li class="menu-item contact"><a href="tel:<?php if (!empty(get_option('sherpa_telephone_number'))) : echo get_option('sherpa_telephone_number'); endif; ?>"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="jumbotron">
            <div class="jumbo-content">
                <h1>
                    Centro De Diversión <span class="brand">Bob<span class="dash">-</span>O’s</span><br> <span class="br-xs">en El Paso</span>
                </h1>

                <h2>¡Diversión Para Toda La Familia!</h2>

                <a href="<?= SITEURL ?>/contact-us/">
                    <button class="btn btn-primary">
                        Contáctenos Hoy
                    </button>
                </a>
            </div>
        </div>
    </div> 
</section>
</div> <!-- end home-bg -->
<div class="logo-section visible-xs visible-sm">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="border-left"><span class="title">Horas de operación</span>
                    <p>Domingo - Jueves: <strong>12pm – 9pm</strong><br />
                        Viernes - Sabado: <strong>10am – 11pm</strong><br>
                        Día de los Caídos, 27 de mayo: <strong>10am - 8pm</strong><br>
                        <a href="https://bobosfun.com/wp-content/uploads/2019/05/May-2019-Hours.pdf" target="_blank">
                                <button class="btn btn-primary">
                                Mayo 2019 Horas Especiales
                                </button>
                            </a>
                    </p>
                </div>
                <div><span class="title">Reserva tu evento</span>
                    <p><strong>PH.</strong>
                        <?php printPhone(); ?><br />
                        3851 Constitution Dr. El Paso, TX 79922</p>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="home-module-2">
    <div class="container hidden-xs">
        <div class="row">
            <div class="col-xs-12">
                <?php echo non_responsive_bs_menu('secondary-menu', 'left', SITENAME); ?>
            </div>
        </div>
    </div>
    <div class="visible-xs">
    <?php echo non_responsive_bs_menu('secondary-menu', 'left', SITENAME); ?>
    </div>
</section>
<section class="home-module-3">
    <div class="container">
		<ul class="rslides">
            <li><img src="/wp-content/uploads/2019/05/Bob-Os-_-Memorial-Day-Special-_-Spanish-Banner.jpg" alt="Bob-O's Memorial Day Special"></li>
			<li><img src="/wp-content/uploads/2019/03/Spanish-banner.jpg" alt="Bob-O's is going Green"></li>
		</ul>
        <div class="row flex-row">
            <div class="col-md-6 flex-col">
                <div class="extra-padding">
                    <h4>Visitanos hoy para disfrutar de un dia de diversion segura y saludable.</h4>
                    <h2>Bob-O’s es el mejor centro de diversión en la ciudad de El Paso.</h2>
                    <p>Estamos localizados en el lado Oeste, cerca de Sunland Park Drive. Abrimos nuestras puertas por
                        primera vez el Cuatro de Julio del año 2002. De ese dia en adelante, nos hemos dedicado a ser
                        el lugar principal para diversión en el Sur Oeste. Hemos logrado esta distinción al ofrecer una
                        variedad de opciones de entretenimiento para toda la familia. Ofrecemos laser tag, mini golf,
                        go-karts, y mucho más! Cuando eliges a Bob-O’s, ¡la diversión nunca se acaba!
                    </p>
                </div>
            </div>
            <div class="col-md-6 flex-col">
                <div class="card">
                    <div class="card-title">
                    <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                    Book your next
                    <?php else : ?>
                    Reserve su próximo
                    <?php endif; ?>
                    </div>
                    <div class="card-text">

                    <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                    <p><span class="big">Birthday</span> <span class="small">Celebration</span></p>
                    <?php else : ?>
                    <p><span class="big es">Celebración</span> <span class="small">de Cumpleaños</span></p>
                    <?php endif; ?>
                        

                        <a class="arrow" href="https://bobosfun.a.pcsparty.com/bookings/?_ga=2.117101574.1839719463.1539814279-1322542885.1535553428"
                            target="_blank">
                        <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                        Birthday Booking
                        <?php else : ?>
                        Reserva de cumpleaños
                        <?php endif; ?>
                       </a>
                    </div>
                    <div class="card-img">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="home-module-4">
    <div class="top">
        <img src="<?=IMGURL?>play.png" alt="El Paso's Place to Play" class="play-logo" />
        <img src="<?=IMGURL?>bg-banner-top.jpg" alt="El Paso's Place to Play" class="play-bg" />
    </div>
    <div class="bottom">
        <img src="<?=IMGURL?>bg-banner-bottom.jpg" alt="El Paso's Place to Play" />
        <h2>Lo Que Tenemos Que Ofrecer</h2>
    </div>
</section>
<section class="home-module-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <p></p>

                <h3 class="no-margin expander">Laser Odyssey/Laser Tag (para gente mayor de 6 años)</h3>
                <ul class="expand">
                    <li>Arena de laser tag con temática industrial de dos pisos
                    </li>
                    <li>Ideal para equipos, familias, fiestas, y cumpleaños
                    </li>
                </ul>


                <h3 class="expander">Go-Karts<br />
                    <strong>Go-Karts Dobles</strong></h3>
                <ul class="expand">
                    <li>El conductor debe medir más de 147 cm y debe tener 18 años,</li>
                    <li>El pasajero debe medir entre 100 cm a 142 cm</li>
                </ul>


                <h3 class="expander">Campo De Golf Miniatura de 18 Hoyos</h3>
                <ul class="expand">
                    <li>Golf Miniatura “Boulder Creek” – Votado Mejor en El Paso</li>
                    <li>Equipado con banqueta para discapacitados para que todos disfruten</li>
                </ul>

            </div>
            <div class="col-md-6">

                <div class="blox">
                    <h3 class="expander">Arcade con Juegos Modernos</h3>
                    <ul class="expand">
                        <li>Completo con juegos de video y redención modernos</li>
                    </ul>
                </div>

                <div class="blox">
                    <h3 class="expander">Paseos Para Niños</h3>
                    <ul class="expand">
                        <li>Mini Go-Karts (Chofer debe medir cuando menos 114 cm y no puede ser más alto que 147 cm)</li>
                        <li>Dizzy Drums (Requisito de altura minima de 88 cm, entre 88 cm y 111 cm deve pasear con un
                            adulto)</li>
                        <li>Tren Miniatura (Para niños de 2 años y mayores, no para adultos)</li>
                    </ul>

                </div>

                <div class="blox">
                    <h3 class="expander">Bumper Boats (Driver 45”, Passenger 40”)</h3>
                    <ul class="expand">
                        <li>Equipado con pistolitas de agua y motor eléctrico</li>
                        <li>¡Garantizado a mojarlo!</li>
                    </ul>
                </div>

                <div class="blox">
                    <h3 class="expander">Jaulas de Bateo</h3>
                    <ul class="expand">
                        <li>Pelotas de beisbol vuelan de 45 mph hasta 80 mph</li>
                        <li>Bate a su propio risco. Todos deben usar casco protector</li>
                        <li>Cada martes, compre un token de bateo y llévese otro gratis (Límite de 5)</li>
                        <li>Cada dia hay descuento militar, compre un token de bateo y llévese otro gratis (Límite de
                            5)</li>
                        <li>Precio por hora disponibles para equipos (llame para más detalles).</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="home-module-6">
    <div class="container">
        <div class="row flex-row">
            <div class="col-md-6 flex-col">
                <div class="extra-padding">
                    <p class="blurb">
                        Estamos dedicados a proveer el nivel más alto de diversión y entretenimiento para gente de
                        todas las edades.</p>

                    <p>Si está buscando cosas divertidas que hacer en El Paso, ¡lo tenemos cubierto!
                    </p>


                </div>
            </div>
            <div class="col-md-6 flex-col">
                <div class="circle"><img src="<?=IMGURL?>carts.jpg" alt="Go Karts" /></div>
            </div>
        </div>
    </div>
</section>
<picture>
    <source media="(min-width: 992px)" srcset="<?=IMGURL ?>bg-party.jpg" alt="Party" class="full-size">
    <img src="<?=IMGURL ?>bg-party-small.jpg" alt="Party" class="full-size">
</picture>

<section class="home-module-8">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Fiestas De Cumpleaños, Precios de Grupo, Eventos Escolares, Descuento Para Gente Militar, ¡Y Mucho
                    Más!</h2>
            </div>
        </div>
        <div class="row flex-row">
            <div class="col-md-6 flex-col">
                <div class="extra-padding">
                    <h3>Fiestas de Cumpleaños en Bob-O’s
                    </h3>
                    <p>Organice su siguiente fiesta en Bob-O’s y verá la diferencia. Ofrecemos paquetes excelentes para
                        que usted pueda elegir la fiesta perfecta. Nosotros nos hacemos cargo de todo, de arreglar
                        hasta limpiar. Haci, no tendrá que estresarse. </p>

                    <h3>Precios Especiales Para Grupos</h3>
                    <p>Creemos que gente de cualquier edad merece divertirse. Por esta rason, ofrecemos precios para
                        empresas. Nuestros juegos no son solo para niños. Contactenos hoy para saber más sobre lo que
                        podemos ofrecer.
                    </p>
                </div>
            </div>
            <div class="col-md-6 flex-col">
                <img src="<?=IMGURL?>pinball.jpg" alt="Pinball" class="hidden-sm hidden-xs" />
            </div>
        </div>
    </div>
    <img src="<?=IMGURL?>pinball-small.jpg" alt="Pinball" class="visible-xs visible-sm" />
</section>
<section class="home-module-9">
    <div class="container">
        <div class="row flex-row">
            <div class="flex-col col-md-6 hidden-xs hidden-sm">
                <img src="<?=IMGURL?>bg-train.jpg" alt="Train" />
            </div>
            <div class="flex-col col-md-6">
                <div class="extra-padding">
                    <h3>Eventos Escolares</h3>
                    <p>Bob-O’s es el lugar perfecto para cualquier evento escolar. Ofrecemos precios descontados para
                        clases tanto como fiestas del fin del año o de graduación. </p>

                    <h3>Descuento Para Gente Militar</h3>

                    <p>Tambien ofrecemos descuentos para gente militar. Contactenos hoy para saber más sobre nuestros
                        descuentos. Recuerda, nuestros descuentos no se pueden combinar.</p>
                </div>
            </div>
        </div>
    </div>

</section>
<img src="<?=IMGURL?>train-sm.jpg" alt="Pinball" class="visible-xs visible-sm" />

<img src="<?=IMGURL ?>bg-boats-bottom.jpg" alt="Boats" class="full-size hidden-xs hidden-sm" />

<section class="home-module-10">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h2>¡El Centro de Diversión Familiar Bob-O Está Listo Para Ayudar!</h2>
                <div class="extra-padding">
                    <p>Si busca diversión espontánea o está estresado porque la fiesta de cumpleaños de su hijo se acerca rápidamente y aún no ha planeado nada, ¡el Centro de diversión familiar de Bob-O’s le puede ayudar! Llámanos hoy y nos encargaremos de todo. ¡Elige Bob-O's para diversión ilimitada en familia!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<img src="<?=IMGURL?>bg-boats-sm.jpg" alt="Pinball" class="visible-xs visible-sm" />

<?php if (is_active_sidebar('form_widgets')) { //if the field is not empty
    ?>
<section id="contact-form" class="visible-xs">
    <div class="container" id="contact-form2">
        <div class="row">
            <div class="<?= FULLWIDTH ?>">
                <?php dynamic_sidebar('form_widgets'); ?>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<?php get_footer(); ?>