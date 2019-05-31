<?php
define( 'CS_ACTIVE_FRAMEWORK',   true  ); // default true
define( 'CS_ACTIVE_METABOX',     true ); // default true
define( 'CS_ACTIVE_TAXONOMY',    true ); // default true
define( 'CS_ACTIVE_SHORTCODE',   true ); // default true
define( 'CS_ACTIVE_CUSTOMIZE',   true ); // default true

define( 'CS_ACTIVE_LIGHT_THEME',  true  ); // default false
//Cs options Setting
add_filter('cs_framework_settings','ucorpa_theme_option_setting');
function ucorpa_theme_option_setting(){
    $setting = array(
        'menu_title' => 'Theme Option',
        'menu_slug' => 'theme_option',
        'menu_type' => 'menu',
        'ajax_save'       => true,
        'show_reset_all'  => true,
        'framework_title' => '<b>Ucorpa Theme Option   <sub><small>Developer: Abu Yusuf</small></sub></b>'
    );
    return $setting;
}





add_filter('cs_framework_options','ucorpa_theme_option');

/**
 * @param $option
 * @return array
 */
function ucorpa_theme_option($option){
    $option = array();
    $option[]=array(
        'name'=>'ucorpa-main',
        'title'=>'Main',
        'icon'=>'fa fa-toggle-on',
        'sections'=> array(
            array(
                'name'      => 'preeloader_options',
                'title'     => 'Preeloader',
                'icon'      => 'fa fa-circle',
                'fields'    => array(
                    array(
                        'id'=>'show_preeloader',
                        'type'=>'switcher',
                        'title'=>'Preeloader',
                        'default'=>true ,
                    ),array(
                        'id'    => 'opt-code-editor-1',
                        'type'  => 'code_editor',
                        'title' => 'Code Editor',
                    ),



                ),
            ),
            array(
                'name'      => 'favicon_option',
                'title'     => 'Favicon',
                'icon'      => 'fa fa-picture-o',
                'fields'    => array(
                    array(
                        'id'=>'favicon_opt',
                        'type'=>'image',
                        'title'=>'Upload favicon',
                    ),



                ),
            ),
        )

    );
    $option[]=array(
        'name'=>'ucorpa-header',
        'title'=>'Header',
        'icon'=> 'fa fa-header',
        'sections'=> array(
            array(
                'name'      => 'text_options',
                'title'     => 'Top Header',
                'icon'      => 'fa fa-level-up',
                'fields'    => array(
                array(
                'id'=>'t_welcome',
                'type'=>'text',
                'title'=>'Top Header Welcome Notice',
                'default'=>'welcome to ucorpa company!',
            ),
              array(
                  'id'      => 'top_color',
                  'type'    => 'color_picker',
                   'title'   => 'Top Header Background color',
                   'default' => '#F6F6F6',
                ),
              array(
                  'id'      => 'top_font_color',
                  'type'    => 'color_picker',
                   'title'   => 'Font Color',
                   'default' => '#fff',
                ),

             array(
                'id'=>'t_welcome_icon',
                'type'=>'icon',
                'title'=>'Top Header Welcome Notice icon',
            ),
            array(
                'id'=>'t_email',
                'type'=>'textarea',
                'title'=>'Top Header Email Address',
                'default'=>'info@yourwebsite.com'
            ),
            array(
                'id'=>'location_address',
                'type'=>'textarea',
                'title'=>'Enter Your Location Name',
                'default'=>'ka-62/1, duck, united states'
            ),
            ),
            ),
            array(
                'name'      => 'logo-section',
                'title'     => 'Logo Section',
                'icon'      => 'fa fa-upload',
                'fields'    => array(
                    array(
                        'id'=>'logo',
                        'type'=>'image',
                        'title'=>'Upload Logo',
                        'add_title'=>'Add Logo',
                    ),

                    array(
                        'id'=> 'show_contact_logo_section',
                        'type'=>'switcher',
                        'title'=>'Are You Show this Contact Section',
                        'default'=> true,
                    ),
                    array(
                        'id'=>'contact_logo_sec',
                        'type'=>'textarea',
                        'title'=>'Call us anytime',
                        'default'=>'<i class="fas fa-headphones"></i>
                                    <p>Call us anytime</p>
                                    <h4>+880123-467-789</h4>'
                    ),

                    array(
                        'id'=> 'show_opening_section',
                        'type'=>'switcher',
                        'title'=> 'Are You Show This Section',
                        'default'=> true,
                    ),
                    array(
                        'id'=>'opening_logo_sec',
                        'type'=>'textarea',
                        'title'=>'Opening Time',
                        'default'=>'<i class="fas fa-stopwatch"></i>
                                    <p>Opeening Time</p>
                                    <h4>Mon-Sat: 9.00-18.00</h4>'
                    ),


        ),

    ),
        ),
    );
    $option[]=array(
        'name'=>'ucorpa-footer',
        'title'=>'Footer',
        'icon'=>'fa fa-bars',
        'sections'=> array(
            array(
                'name'      => 'footer_options',
                'title'     => 'Copyright',
                'icon'      => 'fa fa-copyright',
                'fields'    => array(
                    array(
                        'id'=>'f_copyright',
                        'type'=>'textarea',
                        'title'=>'Copyright',
                        'default'=>'<p><i class="far fa-copyright"></i>2018 UCorpa All Rights Reserved. Design By <a href="#">Themelamp</a></p>',
                    ),



                ),
            ),
        )

    );
    return $option;
}