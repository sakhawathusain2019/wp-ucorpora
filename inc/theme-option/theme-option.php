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
                        'id'        => 'contact_fields_1',
                        'type'      => 'fieldset',
                        'title'     => 'Contact',
                        'fields'    => array(
                            array(
                                'type'    => 'subheading',
                                'content' => 'Contact Fields Here',
                            ),

                            array(
                                'id'    => 'contact_fields_1_icon',
                                'type'  => 'icon',
                                'title' => 'Add Icon',
                            ),
                            array(
                                'id'    => 'contact_fields_1_con',
                                'type'  => 'text',
                                'title' => 'Description',
                                'default'=>'call us anytime',
                            ),
                            array(
                                'id'    => 'contact_fields_1_number',
                                'type'  => 'text',
                                'title' => 'Contact Number',
                                'default'=>'+880123-467-789',

                            ),
                ),
            ),

                    array(
                         'id'        => 'contact_fields_2',
                         'type'      => 'fieldset',
                         'title'     => 'Contact',
                         'fields'    => array(
                        array(
                            'type'    => 'subheading',
                            'content' => 'Open Or Close',
                        ),

                        array(
                            'id'    => 'contact_fields_2_icon',
                            'type'  => 'icon',
                            'title' => 'Add Icon',
                        ),
                        array(
                            'id'    => 'contact_fields_2_open',
                            'type'  => 'text',
                            'title' => 'Open',
                            'default'=>'opeening time',
                        ),
                        array(
                            'id'    => 'contact_fields_2_time',
                            'type'  => 'text',
                            'title' => 'Time',
                            'default'=>'mon-sat: 9.00-18.00',

                        ),
                    ),
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