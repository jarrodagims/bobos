<div id="sidebar">
    <?php if (is_page('contact-us')) : ?>
        <div id="contact-form">

            <?php if(ICL_LANGUAGE_CODE=='en'): 
            echo do_shortcode('[contact-form-7 id="41" title="Contact Form"]');
            
        else: 
            
            echo do_shortcode('[contact-form-7 id="479" title="Contact Form ES"]');
            
            endif; ?>
        </div>
        <section>
        </section>
    <?php endif; ?>
    <?php if (!is_page('contact-us')) : ?>
        <section>
            <div class="card">
                <div class="card-title">
                <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                Book your next
                <?php else: ?>
                Reserve su próximo
                <?php endif; ?> 
                </div>
                <div class="card-text">
                   <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                    <p><span class="big">Birthday</span>
                    <span class="small">Celebration</span></p>
                    <?php else: ?>
                    <p><span class="big">Celebración</span> <span class="small">de Cumpleaños</span></p>
                    <?php endif; ?>
                    <a class="arrow" href="https://bobosfun.a.pcsparty.com/bookings/?_ga=2.117101574.1839719463.1539814279-1322542885.1535553428" target="_blank">
                    <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                    Birthday Booking
                    <?php else: ?>
                    Reserva de cumpleaños
                    <?php endif; ?>
                </a>
                </div>
                <div class="card-img">

                </div>
            </div>

            <?php echo non_responsive_bs_menu('secondary-menu', 'left', SITENAME); ?>
        </section>

        <section class="home-module-4">
            <div class="top">
                <img src="<?=IMGURL?>play.png" alt="El Paso's Place to Play" class="play-logo" />
            </div>
            <div class="bottom">
                <h2>
                <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                Visit us today for a safe, wholesome day of fun for the entire family!
                <?php else: ?>
                Visítanos hoy para un día seguro y saludable de diversión para toda la familia.
                <?php endif; ?>
                </h2>

                <a href="<?= SITEURL ?>/contact-us/">
                <button class="btn btn-primary">
                <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                    Contact Us Today
                    <?php else: ?>
                    Contáctenos
                    <?php endif; ?>
                </button>
                </a>

                    

            </div>
        </section>


    <?php endif; ?>
</div>
