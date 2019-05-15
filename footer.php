    <div id="map-section">

        <iframe title="Google Map of 3851 Constitution Dr. El Paso, TX 79922" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3390.457790655903!2d-106.55649168484219!3d31.812523981273937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ddf819c39ce66b%3A0xfc1ae623e6635fdb!2sBob-O&#39;s+Family+Fun+Center!5e0!3m2!1sen!2sus!4v1539873706024" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
<section id="footer">
<div class="top-footer">
    <div class="container">
        <div class="row flex-row">
            <div class="col-md-12 flex-col">
                <div class="logo-footer">
                    <a class="navbar-brand" href='<?php echo get_site_url(); ?>'><img
                                src="<?= IMGURL; ?>logo.png"
                                alt="<?php echo get_bloginfo(
                                    'description'
                                ); ?>"/></a>
                    <p>
                    <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                    Nothing should stand in your way when it comes to <span class="brand">having fun</span>.
                    <?php else: ?>
                    Nada debe interponerse en su camino cuando se trata de <span class="brand">divertirse</span>.
                    <?php endif; ?>
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>
    <div class="container">
            <div class="flex-row row">
                <div class="col-xs-12 flex-col">
                    <div class="footer-blocks"><div class="contact-footer phone-footer">
                        <div><span class="title">
                            <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                            Address
                            <?php else: ?>
                            Dirección
                            <?php endif; ?>
                        </span>
                            <p class="hidden-xs">3851 Constitution Dr, <span class="br-xs">El Paso, TX 79922</span><br />
                                <strong>PH</strong>.  <?php printPhone(); ?>
                            </p>
                            <p class="visible-xs">
                                <strong>PH</strong>.  <?php printPhone(); ?>
                                <span class="br-xs">3851 Constitution Dr, El Paso, TX 79922</span>
                            </p>
                            <a href="<?= SITEURL ?>/contact-us/">
                                <button class="btn btn-primary">
                                    <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                                    CONTACT US TODAY
                                    <?php else: ?>
                                    CONTÁCTENOS
                                    <?php endif; ?>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="hours-footer">
                        <div>
                            <span class="title">
                            <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                            OPERATION HOURS
                            <?php else: ?>
                            HORAS DE OPERACIÓN
                            <?php endif; ?>
                            </span>
                            

                            <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                            <p class="hidden-xs">Sunday - Thursday: <strong>12:00pm - 9:00pm</strong><br />
                            Friday - Saturday: <strong>10:00am - 11:00pm</strong><br>
                            Memorial Day, May 27th: <strong>10am - 8pm</strong>	
                            </p>

                            <p class="visible-xs">Sunday - Thursday: <strong>12pm - 9pm</strong><br />
                                <span class="br-xs">Friday - Saturday: <strong>10am - 11pm</strong></span><br>
                                Memorial Day, May 27th: <strong>10am - 8pm</strong>
                            </p>
                            <?php else: ?>
                            <p class="hidden-xs">Domingo - Jueves: <strong>12:00pm - 9:00pm</strong><br />
                            Viernes - Sabado: <strong>10:00am - 11:00pm</strong><br>
                            Día de los Caídos, 27 de mayo: <strong>10am - 8pm</strong>    
                            </p> 

                            <p class="visible-xs">Domingo - Jueves: <strong>12pm - 9pm</strong><br />
                                <span class="br-xs">Viernes - Sabado: <strong>10am - 11pm</strong></span><br>
                                Día de los Caídos, 27 de mayo: <strong>10am - 8pm</strong>
                            </p>
                            <?php endif; ?>
							
							<!--p class="hidden-xs">Tuesday: <strong>10:00am - 9:00pm</strong><br />
								Wednesday: <strong>10:00am - 8:00pm</strong><br />
                            	Thursday: <strong>CLOSED for Thanksgiving</strong><br />
								Friday-Saturday: <strong>10:00am - 11:00pm</strong><br />
								Sunday: <strong>12:00pm-9:00pm</strong><br />
                            </p>

                            <p class="visible-xs">Tuesday: <strong>10am - 9pm</strong><br />
								<span class="br-xs">Wednesday: <strong>10am - 8pm</strong></span><br />
                            	<span class="br-xs">Thursday: <strong>CLOSED for Thanksgiving</strong></span><br />
								<span class="br-xs">Friday-Saturday: <strong>10am - 11pm</strong></span><br />
                                <span class="br-xs">Sunday: <strong>12am - 9pm</strong></span>
                            </p-->
							<br>
							<a href="https://bobosfun.com/wp-content/uploads/2019/05/May-2019-Hours.pdf" target="_blank">
                                <button class="btn btn-primary">
                                <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                                May 2019 Special Hours
                                <?php else: ?>
                                Mayo 2019 Horas Especiales
                                <?php endif; ?>
                                </button>
                            </a>
                        </div>
                    </div>

                    <div class="button-footer">
                        <div class="border-left">

                        <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                        <span class="title">METHODS OF PAYMENT</span>
                        <p>No Personal Checks</p>
                        <?php else: ?>
                        <span class = "title">Formas de Pago</span>
                        <p>Sin cheques personales</p>
                        <?php endif; ?>
                            
                           <img src="<?=IMGURL?>/cards.png" alt="Payment methods" />
                        </div>
                    </div></div>
                    <div class="visible-xs">
                        <?php $sm = new SocialMedia(array('facebook', 'twitter'));
                        $sm->setSize('sm');
                        $sm->showNetworkButtons();
                        $sm->setColorType('singleColor');
                        ?>
                    </div>
                </div>
            </div>
    </div>
</section>
    <section class="contact-button-footer visible-xs">
        <a href="https://bobosfun.a.pcsparty.com/bookings/?_ga=2.117101574.1839719463.1539814279-1322542885.1535553428" class="arrow" target="_blank">Birthday Booking</a> <a href="https://bobosfun.a.pcsparty.com/bookings/?_ga=2.117101574.1839719463.1539814279-1322542885.1535553428" target="_blank"><button class="btn btn-primary">Contact Us Today</button></a>
    </section>
<section class="footer-nav hidden-xs hidden-sm">
    <div class="container">
        <div class="row flex-row">
            <div class="col-xs-12">
                <?php echo non_responsive_bs_menu('footer'); ?>
            </div>
        </div>
    </div>
</section>
<section id="sub-footer">
    <div class="container">
        <div class="flex-row row">
            <div class="flex-col col-md-12 col-xs-12">
                <div class="hidden-xs hidden-sm"><?php $sm = new SocialMedia(array('facebook', 'twitter'));
                    $sm->setSize('sm');
                    $sm->showNetworkButtons();
                    $sm->setColorType('singleColor');
                    ?></div>
                <div>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | All Rights Reserved</div>
            </div>
        </div>
</section>
<?php wp_footer(); ?>
	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="<?=THEMEURL?>/js/responsiveslides.min.js"></script>
       	<script>
		  $(function() {
			$(".rslides").responsiveSlides({
			  auto: true,             // Boolean: Animate automatically, true or false
			  speed: 500,            // Integer: Speed of the transition, in milliseconds
			  timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
			  pager: true,           // Boolean: Show pager, true or false
			  nav: false,             // Boolean: Show navigation, true or false
			  pause: true          // Boolean: Pause on hover, true or false
			});
		  });
		</script>
</body>
</html>