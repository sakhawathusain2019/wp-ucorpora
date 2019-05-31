<!doctype html>
    <html class="no-js" <?php language_attributes(); ?>>
    <head>
            <!-- meta tags -->
            <meta charset="<?php bloginfo('charset');?>">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="keywords" content="site keywords here"/>
            <meta name="description" content="">
            <meta name='copyright' content='ucorpa'>


            <!-- favicon -->
            <link rel="icon" type="image/png" href="img/favicon.png">

            <!-- web font -->
            <link href="https://fonts.googleapis.com/css?family=poppins:300,400,500,600,700,800,900" rel="stylesheet">


            <?php wp_head();?>
        </head>
        <body <?php body_class();?>>
        <?php
        //function condition
        if (function_exists('cs_get_option')){
           $show_logo_section = cs_get_option('show_logo_section');
           $preeloader = cs_get_option('show_preeloader');
           $top_welcome_icon = cs_get_option('t_welcome_icon');
           $top_welcome_title = cs_get_option('t_welcome');
           $t_email = cs_get_option('t_email');
           $location_address = cs_get_option('location_address');
           $logo = cs_get_option('logo');
           $contact_logo_sec = cs_get_option('contact_logo_sec');
           $opening_logo_sec = cs_get_option('opening_logo_sec');
           $show_contact_logo_section = cs_get_option('show_contact_logo_section');
           $show_opening_section = cs_get_option('show_opening_section');
           $show_top_bar = cs_get_option('show_top_bar');
           $logo_section_button =cs_get_option('logo_section_button');
           $show_logo_section_button =cs_get_option('show_logo_section_button');
           $logoimg = wp_get_attachment_image_src($logo,'full');

        }
        ?>

        <!-- preloader -->
        <?php if ($preeloader){?>
        <div class="preeloader">
            <div class="preloader-spinner"></div>
        </div>
        <?php }?>
        <!-- end preloader -->

        <!-- header area -->
        <header class="header">

            <!-- topbar -->
            <?php if ($show_top_bar){?>
            <div class="topbar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-top">
                                <p><i class="<?php echo esc_html($top_welcome_icon);?>"></i><?php echo esc_html($top_welcome_title);?></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-top text-center">
                                <p><a href="mailto:<?php echo esc_html($t_email);?>"><i class="far fa-envelope-open"></i><?php echo esc_html($t_email);?></a></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-top text-right">
                                <p><i class="fas fa-map-marker-alt"></i><?php echo esc_html($location_address);?></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <?php } ?>
            <!-- end topbar -->

            <!-- middle header -->
            <?php if ($show_logo_section) {?>
            <div class="middle-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <!-- logo -->
                            <div class="logo">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $logoimg[0];?>" alt="logo.png"></a>
                            </div>
                            <!--/ end logo -->
                            <div class="mobile-nav"></div>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="widget-main">
                                <!-- single widget -->
                                <?php if ($show_contact_logo_section) { ?>
                                <div class="single-widget">
                                    <?php echo ($contact_logo_sec);?>
                                </div>
                                <?php } ?>
                                <!--/ end single widget -->
                                <!-- single widget -->
                                <?php if ($show_opening_section) {?>
                                <div class="single-widget">
                                    <?php echo ($opening_logo_sec);?>
                                </div>
                                <?php } ?>
                                <!--/ end single widget -->
                                <!-- single widget -->
                                <?php if($show_logo_section_button) {?>
                                <div class="single-widget button">
                                    <?php echo ($logo_section_button);?>
                                </div>
                                <?php }?>
                                <!--/ end single widget -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <!-- end middle header -->
            <!-- header inner -->
            <div class="main-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <nav class="navbar navbar-default">
                                <div class="collapse navbar-collapse">
                                    <?php

                                    //menu function add
                                    ucorpa_nav_menu()

                                    ;?>
                                    <div class="right-bar">
                                        <!-- search form -->
                                        <div class="search-top">
                                            <div class="search"><a href="#"><i class="fa fa-search"></i></a></div>
                                            <form class="search-form">
                                                <input type="text" placeholder="search" name="search">
                                                <button value="search" type="submit"><i class="fas fa-search"></i></button>
                                            </form>
                                        </div>
                                        <!--/ end search form -->
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ end header inner -->
        </header>
        <!-- end header area -->

