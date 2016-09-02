<?php //123veto ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">

    <head profile="http://gmpg.org/xfn/11">
        <title>
            <?php bloginfo('name') ?>
                <?php if ( is_404() ) : ?> &raquo;
                    <?php _e('Not Found') ?>
                        <?php elseif ( is_home() ) : ?> &raquo;
                            <?php bloginfo('description') ?>
                                <?php else : ?>
                                    <?php wp_title() ?>
                                        <?php endif ?>
        </title>
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
        <!-- leave this for stats -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
        <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        
            <?php wp_get_archives('type=monthly&format=link'); ?>
                

                    <!-- typos -->
                    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css' />
                    <link rel="stylesheet" href="css/font-awesome.css" />
                    
    </head>

    <body>


        <!-- menu de navigation -->
        <?php wp_nav_menu(array('theme_location' => 'main_menu')); ?>
       
        <div id="header">
            <div class="header-corp">
                <!-- logo -->
                <div class="logo-img img-responsive"></div>
                <!-- infos -->
                <div class="info">
                    <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a> - <?php bloginfo('description'); ?></h1>
                    <h2>Dr Eric Wintz - Dr Aurélie Mayoussier</h2>
                    <p class="description">123 Véto vous accueille du lundi au vendredi de 9h à 12h et de 14h à 19h et le samedi de 9h à 12h</p>
                    <p class="description">Les urgences sont assurées 24h/24 7 jours sur 7 sur appel téléphonique au 02 40 01 61 69</p>
                </div>
            </div>
        </div>