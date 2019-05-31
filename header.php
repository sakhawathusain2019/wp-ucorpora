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

            <style>
                .header .topbar {
                    background-color: <?php echo ($top_color);?> !important;
                }
                .header .single-top p {
                    color: <?php echo ($top_font_color);?> !important;
                }
                .header .single-top a {
                    color: <?php echo ($top_font_color);?> !important;
                }
            </style>
            <?php wp_head();?>
        </head>
        <body <?php body_class();?>>
        <?php
        //function condition
        if (function_exists('cs_get_option')){
           $top_color = cs_get_option('top_color');

           $top_font_color = cs_get_option('top_font_color');

           $preeloader = cs_get_option('show_preeloader');

           $top_welcome_icon = cs_get_option('t_welcome_icon');

           $top_welcome_title = cs_get_option('t_welcome');

           $t_email = cs_get_option('t_email');

           $location_address = cs_get_option('location_address');

           $logo = cs_get_option('logo');

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
            <!-- end topbar -->
            <!-- middle header -->
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
                                <div class="single-widget">
                                    <i class="<?php echo cs_get_option('contact_fields_1_icon');?>"></i>
                                    <p><?php echo cs_get_option('contact_fields_1_con');?></p>
                                    <h4><?php echo cs_get_option('contact_fields_1_number');?></h4>
                                </div>
                                <!--/ end single widget -->
                                <!-- single widget -->
                                <div class="single-widget">
                                    <i class="<?php echo cs_get_option('contact_fields_2_icon');?>"></i>
                                    <p><?php echo cs_get_option('contact_fields_2_open');?></p>
                                    <h4><?php echo cs_get_option('contact_fields_2_time');?></h4>
                                </div>
                                <!--/ end single widget -->
                                <!-- single widget -->
                                <div class="single-widget button">
                                    <a href="#" class="btn">get a quote</a>
                                </div>
                                <!--/ end single widget -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

