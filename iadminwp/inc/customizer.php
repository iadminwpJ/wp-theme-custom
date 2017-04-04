<?php
/**
 * iAdminWP Theme Customizer
 *
 * @package iAdminWP
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function iadminwp_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->remove_section("colors");
	$wp_customize->remove_control("header_image");

// Add Social Media Section
$wp_customize->add_section(
    'social-media',
    array(
        'title' => __( 'Social Media', 'iadminwp' ),
        'priority' => 30,
        'description' => __( 'Social Media icons in top bar.', 'iadminwp' )
    )
);

// Add Twitter Setting
$wp_customize->add_setting( 'twitter', array( 'default' => '#' ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'twitter', array( 'label' => __( 'Twitter', 'iadminwp' ), 'section' => 'social-media', 'settings' => 'twitter', ) ) );
// Add Facebook Setting
$wp_customize->add_setting( 'facebook', array( 'default' => '#' ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'facebook', array( 'label' => __( 'Facebook', 'iadminwp' ), 'section' => 'social-media', 'settings' => 'facebook', ) ) );
// Add Instagram Setting
$wp_customize->add_setting( 'instagram', array( 'default' => '#' ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'instagram', array( 'label' => __( 'Instagram', 'iadminwp' ), 'section' => 'social-media', 'settings' => 'instagram', ) ) );
// Add Linkedin Setting
$wp_customize->add_setting( 'linkedin', array( 'default' => '#' ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'linkedin', array( 'label' => __( 'LinkedIn', 'iadminwp' ), 'section' => 'social-media', 'settings' => 'linkedin', ) ) );
// Add Googleplus Setting
$wp_customize->add_setting( 'googleplus', array( 'default' => '#' ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'googleplus', array( 'label' => __( 'GooglePlus', 'iadminwp' ), 'section' => 'social-media', 'settings' => 'googleplus', ) ) );


$wp_customize->add_setting( 'iadminwp_twitter', array( 
        'default' => 1 
) );
$wp_customize->add_control( 'iadminwp_twitter', array(
        'label'     => __( 'Show Twitter icon', 'iadminwp' ),
        'section'   => 'social-media',
        'type'      => 'checkbox',
        'priority'  => 10
) );

$wp_customize->add_setting( 'iadminwp_facebook', array( 
        'default' => 1 
) );
$wp_customize->add_control( 'iadminwp_facebook', array(
        'label'     => __( 'Show Facebook icon', 'iadminwp' ),
        'section'   => 'social-media',
        'type'      => 'checkbox',
        'priority'  => 10
) );
$wp_customize->add_setting( 'iadminwp_instagram', array( 
        'default' => 1 
) );
$wp_customize->add_control( 'iadminwp_instagram', array(
        'label'     => __( 'Show Instagram icon', 'iadminwp' ),
        'section'   => 'social-media',
        'type'      => 'checkbox',
        'priority'  => 10
) );
$wp_customize->add_setting( 'iadminwp_linkedin', array( 
        'default' => 1 
) );
$wp_customize->add_control( 'iadminwp_linkedin', array(
        'label'     => __( 'Show LinkedIn icon', 'iadminwp' ),
        'section'   => 'social-media',
        'type'      => 'checkbox',
        'priority'  => 10
) );
$wp_customize->add_setting( 'iadminwp_googleplus', array( 
        'default' => 1 
) );
$wp_customize->add_control( 'iadminwp_googleplus', array(
        'label'     => __( 'Show GooglePlus icon', 'iadminwp' ),
        'section'   => 'social-media',
        'type'      => 'checkbox',
        'priority'  => 10
) );

$wp_customize->add_section(
    'contact-info',
    array(
        'title' => __( 'Contact Info', 'iadminwp' ),
        'priority' => 30,
        'description' => __( 'Contact info for the top bar and footer.', 'iadminwp' )
    )
);

// Add email Setting
$wp_customize->add_setting( 'email', array( 'default' => '#' ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'email', array( 'label' => __( 'Email', 'iadminwp' ), 'section' => 'contact-info', 'settings' => 'email', ) ) );

// Add Phone Setting
$wp_customize->add_setting( 'phone', array( 'default' => '#' ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'phone', array( 'label' => __( 'Phone', 'iadminwp' ), 'section' => 'contact-info', 'settings' => 'phone', ) ) );


//Content section
$wp_customize->add_section( 'iadminwp_content_options_section' , array(
        'title'      => __( 'Content Options', 'iadminwp' ),
        'priority'   => 40,
) );
$wp_customize->add_setting( 'iadminwp_page_comment_toggle', array( 
        'default' => 1 
) );
$wp_customize->add_control( 'iadminwp_page_comment_toggle', array(
        'label'     => __( 'Show comments on pages and post?', 'iadminwp' ),
        'section'   => 'iadminwp_content_options_section',
        'type'      => 'checkbox',
        'priority'  => 10
) );
$wp_customize->add_setting( 'iadminwp_copyright_textbox', array(
        'default' => 'Default copyright text',
    )
);
$wp_customize->add_control('iadminwp_copyright_textbox', array(
        'label' => 'Copyright text',
        'section' => 'iadminwp_content_options_section',
        'type' => 'text',
    )
);

$wp_customize->add_setting( 'iadminwp_share_textbox', array(
        'default' => 'Share this:',
    )
);
$wp_customize->add_control('iadminwp_share_textbox', array(
        'label' => 'Share this:',
        'section' => 'iadminwp_content_options_section',
        'type' => 'text',
    )
);

$wp_customize->add_setting( 'iadminwp_share_homepage_toggle', array( 
        'default' => 1 
) );
$wp_customize->add_control( 'iadminwp_share_homepage_toggle', array(
        'label'     => __( 'Hide share option on homepage? (is_front_page())', 'iadminwp' ),
        'section'   => 'iadminwp_content_options_section',
        'type'      => 'checkbox',
        'priority'  => 10
) );

//Colors

$wp_customize->add_section( 'iadminwp_textcolors' , array(
        'title'      => __( 'Color Scheme', 'iadminwp' ),
        'priority'   => 30,
) );

// Top bar links
$iadminwp_textcolors[] = array(
    'slug'=>'topbar_link_color', 
    'default' => '#38a1a7',
    'label' => 'Top bar Link Color'
);

$iadminwp_textcolors[] = array(
    'slug'=>'topbar_link_hovercolor', 
    'default' => '#000000',
    'label' => 'Top bar Link Hover Color'
);

// Navigation bar
$iadminwp_textcolors[] = array(
    'slug'=>'nav_bar_color', 
    'default' => '#38a1a7',
    'label' => 'Navigation bar color'
);

// Navigation bar li color
$iadminwp_textcolors[] = array(
    'slug'=>'nav_li_current', 
    'default' => '#145c7c',
    'label' => 'Navigation li Current background color'
);
$iadminwp_textcolors[] = array(
    'slug'=>'nav_li_currentcolor', 
    'default' => '#fff',
    'label' => 'Navigation li Current color'
);

$iadminwp_textcolors[] = array(
    'slug'=>'nav_li_color', 
    'default' => '#fff',
    'label' => 'Navigation li color'
);

$iadminwp_textcolors[] = array(
    'slug'=>'nav_li_background', 
    'default' => '##38a1a7',
    'label' => 'Navigation li background color'
);
$iadminwp_textcolors[] = array(
    'slug'=>'nav_li_backhover', 
    'default' => '#145c7c',
    'label' => 'Navigation li Hover background color'
);

// main color ( site title, h1, h2, h4. h6, widget headings, nav links, footer headings )
$iadminwp_textcolors[] = array(
    'slug'=>'color_scheme_1', 
    'default' => '#145c7c',
    'label' => 'site title, h1, h2, h4. h6'
);
 
// secondary color ( site description, sidebar headings, h3, h5, nav links on hover )
$iadminwp_textcolors[] = array(
    'slug'=>'color_scheme_2', 
    'default' => '#145c7c',
    'label' => 'h3, h3, h5'
);
 
// link color
$iadminwp_textcolors[] = array(
    'slug'=>'link_color', 
    'default' => '#145c7c',
    'label' => 'Link Color'
);
 
// link color ( hover, active )
$iadminwp_textcolors[] = array(
    'slug'=>'hover_link_color', 
    'default' => '#000',
    'label' => 'Link Color (on hover)'
);

$iadminwp_textcolors[] = array(
    'slug'=>'footer_background_color', 
    'default' => '#38a1a7',
    'label' => 'Footer background color'
);


$iadminwp_textcolors[] = array(
    'slug'=>'footer_font_color', 
    'default' => '#000000',
    'label' => 'Footer font color'
);

$iadminwp_textcolors[] = array(
    'slug'=>'footer_widget_header', 
    'default' => '#fff',
    'label' => 'Footer widget header color'
);

$iadminwp_textcolors[] = array(
    'slug'=>'footer_widget_color', 
    'default' => '#000',
    'label' => 'Footer widget text color'
);

$iadminwp_textcolors[] = array(
    'slug'=>'footer_widget_link', 
    'default' => '#145c7c',
    'label' => 'Footer widget link color'
);

$iadminwp_textcolors[] = array(
    'slug'=>'footer_widget_linkhover', 
    'default' => '#000',
    'label' => 'Footer widget link color hover'
);

$iadminwp_textcolors[] = array(
    'slug'=>'button_color', 
    'default' => '#ffffff',
    'label' => 'Button color'
);
$iadminwp_textcolors[] = array(
    'slug'=>'button_back_color', 
    'default' => '#38a1a7',
    'label' => 'Button background color'
);
$iadminwp_textcolors[] = array(
    'slug'=>'button_color_hover', 
    'default' => '#ffffff',
    'label' => 'Button color hover'
);
$iadminwp_textcolors[] = array(
    'slug'=>'button_back_color_hover', 
    'default' => '#145c7c',
    'label' => 'Button background color hover'
);




// add the settings and controls for each color
foreach( $iadminwp_textcolors as $iadminwp_textcolors ) {
 
    // SETTINGS
    $wp_customize->add_setting(
        $iadminwp_textcolors['slug'], array(
            'default' => $iadminwp_textcolors['default'],
            'type' => 'option', 
            'capability' => 'edit_theme_options'
        )
    );
    // CONTROLS
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            $iadminwp_textcolors['slug'], 
            array('label' => $iadminwp_textcolors['label'], 
            'section' => 'iadminwp_textcolors',
            'settings' => $iadminwp_textcolors['slug'])
        )
    );
}

}
add_action( 'customize_register', 'iadminwp_customize_register' );


function iadminwp_customize_colors() {
/**********************
text colors
**********************/
$color_scheme_1 = get_option( 'color_scheme_1' );
$color_scheme_2 = get_option( 'color_scheme_2' );
$link_color = get_option( 'link_color' );
$hover_link_color = get_option( 'hover_link_color' );
$topbar_link_color = get_option( 'topbar_link_color' );
$nav_bar_color = get_option( 'nav_bar_color' );
$nav_li_background = get_option( 'nav_li_background' );
$nav_li_backhover = get_option( 'nav_li_backhover' );
$nav_li_color = get_option( 'nav_li_color' );
$nav_li_current = get_option( 'nav_li_current' );
$nav_li_currentcolor = get_option( 'nav_li_currentcolor' );
$footer_background_color = get_option( 'footer_background_color' );
$footer_font_color = get_option( 'footer_font_color' );
$footer_widget_header = get_option( 'footer_widget_header' );
$footer_widget_color = get_option( 'footer_widget_color' );
$footer_widget_link = get_option( 'footer_widget_link' );
$footer_widget_linkhover = get_option( 'footer_widget_linkhover' );
$topbar_link_hovercolor = get_option( 'topbar_link_hovercolor' );
$button_color = get_option( 'button_color' );
$button_back_color = get_option( 'button_back_color' );
$button_color_hover = get_option( 'button_color_hover' );
$button_back_color_hover = get_option( 'button_back_color_hover' );
/****************************************
styling
****************************************/
?>
<style>
 
 
/* color scheme */
 
/* main color */
#site-title a, h1, h2, h2.page-title, h2.post-title, h2 a:link, h2 a:visited, footer h3 { 
    color:  <?php echo $color_scheme_1; ?>; 
}
 
/* secondary color */
#site-description, .sidebar h3, h3, h5 {
    color:  <?php echo $color_scheme_2; ?>; 
}
.menu.main,
.fatfooter {
    border-top: 1px solid <?php echo $color_scheme_2; ?>;
}
.menu.main {
    border-bottom: 1px solid <?php echo $color_scheme_2; ?>;  
}
.fatfooter {
    border-bottom: 1px solid <?php echo $color_scheme_2; ?>;
}
 
/* links color */
a:link, a:visited { 
    color:  <?php echo $link_color; ?>; 
}
 
/* hover links color */
a:hover, a:active {
    color:  <?php echo $hover_link_color; ?>; 
}

/*Navigation*/
#site-navigation {
    background-color: <?php echo $nav_bar_color; ?>; 
}

#site-navigation ul li a {
    color: <?php echo $nav_li_color; ?>;
}

#site-navigation ul li {
    background-color: <?php echo $nav_li_background; ?>;
}

#site-navigation ul li:hover {
    background-color: <?php echo $nav_li_backhover; ?>;
}

#site-navigation  li.current-menu-item {
    background: <?php echo $nav_li_current; ?>;
}

#site-navigation ul li.current-menu-item a {
    color:<?php echo $nav_li_currentcolor; ?>;    
}

/* Top bar links color */
.contact-info a , .social-media a { 
    color:  <?php echo $topbar_link_color; ?>; 
}

.contact-info a:hover , .social-media a:hover { 
    color:  <?php echo $topbar_link_hovercolor; ?>; 
}

.site-footer {
    background:<?php echo $footer_background_color; ?>; 
}

.site-footer .site-info {
    color:<?php echo $footer_font_color; ?>; 
}

.fw h2 {
    color:<?php echo $footer_widget_header; ?>; 
}

.fw .textwidget {
    color:<?php echo $footer_widget_color; ?>; 
}

.fw .textwidget a {
    color:<?php echo $footer_widget_link; ?>; 
}
.fw .textwidget a:hover {
    color:<?php echo $footer_widget_linkhover; ?>; 
}

button, input[type="button"], input[type="reset"], input[type="submit"] {
    background: <?php echo $button_back_color; ?>;
    color: <?php echo $button_color; ?>;
    border:none;
}
button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover {
    background: <?php echo $button_back_color_hover; ?>;
    color: <?php echo $button_color_hover; ?>;
    border:none;
}

</style>
     
<?php
}
add_action( 'wp_head', 'iadminwp_customize_colors' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function iadminwp_customize_preview_js() {
	wp_enqueue_script( 'iadminwp_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'iadminwp_customize_preview_js' );

