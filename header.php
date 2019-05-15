<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-WD57SK7');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-124744922-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-124744922-1');
    </script>
    <meta name="google-site-verification" content="7_-Zc3BXPmuLZFu9EI1BNuPnIFpytNqF5EMxJWjHoKQ" />
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>

    <?php if (!empty(get_option('sherpa_schema'))): ?>

    <?= get_option('sherpa_schema') ?>

    <?php endif; ?>


    <!-- Default Statcounter code for Bob-Os
https://bobosfun.com/ -->
    <script type="text/javascript">
    var sc_project = 11806956;
    var sc_invisible = 1;
    var sc_security = "db835a20";
    </script>
    <script type="text/javascript" src="https://www.statcounter.com/counter/counter.js" async></script>
    <noscript>
        <div class="statcounter"><a title="Web Analytics
Made Easy - StatCounter" href="http://statcounter.com/" target="_blank"><img class="statcounter"
                    src="//c.statcounter.com/11806956/0/db835a20/1/" alt="Web
Analytics Made Easy - StatCounter"></a></div>
    </noscript>
    <!-- End of Statcounter Code -->


    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "AmusementPark",
        "name": "Bob-O's Family Fun Center",
        "image": "https://bobosfun.com/wp-content/themes/bobos/img/logo.png",
        "@id": "",
        "url": "https://bobosfun.com/",
        "telephone": "(915) 587-6070",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "3851 Constitution Dr",
            "addressLocality": "El Paso",
            "addressRegion": "TX",
            "postalCode": "79922",
            "addressCountry": "US"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 31.8123567,
            "longitude": -106.55403369999999
        },
        "openingHoursSpecification": [{
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday"
            ],
            "opens": "10:00",
            "closes": "22:00"
        }, {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
                "Friday",
                "Saturday"
            ],
            "opens": "10:00",
            "closes": "23:00"
        }, {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": "Sunday",
            "opens": "12:00",
            "closes": "22:00"
        }],
        "sameAs": [
            "https://www.facebook.com/BobOsFamilyFunCenter/",
            "https://twitter.com/BobOsFUN"
        ]
    }
    </script>

</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WD57SK7" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php if (is_front_page()) : ?>
    <div class="landing-bg"><?php endif; ?>
        <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser.</p>
    <p class="browsehappy">Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
    </p>
    <![endif]-->

        <div class="top-header">
            <div class="container">
                <div class="row flex-row">
                    <div class="col-xs-12 flex-col">
                        <?php do_action('wpml_add_language_selector'); ?>
                        <a href="https://bobosfun.a.pcsparty.com/bookings/?_ga=2.117101574.1839719463.1539814279-1322542885.1535553428"
                            target="_blank" class="arrow">
                            <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                            Birthday Booking
                            <?php else: ?>
                            Reserva de cumpleaños
                            <?php endif; ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container logo-section">
            <div class="row flex-row">
                <div class="col-md-4 flex-col"><a class="navbar-brand" href='<?php echo get_site_url(); ?>'><img
                            src="<?= IMGURL; ?>logo.png" alt="<?php echo get_bloginfo(
                                    'description'
                                ); ?>" /></a></div>

                <div class="col-md-4 flex-col hidden-xs">
                    <div><span class="title">
                            <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                            BOOK YOUR EVENT
                            <?php else: ?>
                            Reserva tu evento
                            <?php endif; ?>
                        </span>
                        <p><strong>PH.</strong> <a
                                href="tel:<?php if (!empty(get_option('sherpa_telephone_number'))) : echo get_option('sherpa_telephone_number'); endif; ?>"><?php printPhone(); ?></a><br />
                            3851 Constitution Dr. El Paso, TX 79922</p>
                    </div>
                </div>

                <div class="col-md-4 flex-col hidden-xs">
                    <div class="border-left"><span class="title" style="margin-bottom: 0;">
                            <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                            OPERATION HOURS
                            <?php else: ?>
                            HORAS DE OPERACIÓN
                            <?php endif; ?>
                        </span>
                        <p>Sunday - Thursday: <strong>12pm – 9pm</strong><br />
                            Friday - Saturday: <strong>10am – 11pm</strong><br />
                            <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                            Memorial Day, May 27th:
                            <?php else: ?>
                            27 de mayo:
                            <?php endif; ?>
                            <strong>10am-8pm</strong></p>
                        <a href="http://bobosfun.com/wp-content/uploads/2019/05/May-2019-Hours.pdf" target="_blank">
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
            </div>
        </div>
        <?php if (!is_front_page()) : ?>
        <div class="sub-header">
            <div class="container">
                <div class="row ">
                    <div class="v-align">
                        <div class="col-xs-12 navbar-button text-center">
                            <?php echo responsive_bs_menu('primary', 'left', SITENAME); ?>
                            <ul class="nav navbar-nav navbar-right visible-xs">
                                <li class="menu-item directions"><a title="contact"
                                        href="<?php echo get_site_url() ?>/contact-us"></a></li>
                                <li class="menu-item contact"><a title="phone"
                                        href="tel:<?php if (!empty(get_option('sherpa_telephone_number'))) : echo get_option('sherpa_telephone_number'); endif; ?>"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>