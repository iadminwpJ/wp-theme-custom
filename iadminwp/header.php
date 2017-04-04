<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package iAdminWP
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>

  <script>
    $(window).load(function(){
      $("#site-navigation").sticky({ topSpacing: 0 });
    });
  </script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'iadminwp' ); ?></a>
    
    <div id="top-bar">
        <div class="contact-info">
        <a class="fa fa-phone-square" aria-label="Email"> <?php echo get_theme_mod( 'phone', 'default_value' ); ?></a>
        <a class="fa fa-envelope" href="mailto:<?php echo get_theme_mod( 'email', 'default_value' ); ?>" aria-label="Email"> <?php echo get_theme_mod( 'email', 'default_value' ); ?></a>
        </div>
        <div class="social-media">
<?php  if ( get_theme_mod( 'iadminwp_twitter' ) == 1 ) {  ?>			
        <a class="fa fa-twitter" href="<?php echo get_theme_mod( 'twitter', 'default_value' ); ?>" aria-label="Twitter"></a>
<?php } ?>
<?php  if ( get_theme_mod( 'iadminwp_facebook' ) == 1 ) {  ?>			
        <a class="fa fa-facebook" href="<?php echo get_theme_mod( 'facebook', 'default_value' ); ?>" aria-label="Facebook"></a>
<?php } ?>
<?php  if ( get_theme_mod( 'iadminwp_instagram' ) == 1 ) {  ?>			        
        <a class="fa fa-instagram" href="<?php echo get_theme_mod( 'instagram', 'default_value' ); ?>" aria-label="Instagram"></a>
<?php } ?>
<?php  if ( get_theme_mod( 'iadminwp_linkedin' ) == 1 ) {  ?>			        
        <a class="fa fa-linkedin" href="<?php echo get_theme_mod( 'linkedin', 'default_value' ); ?>" aria-label="LinkedIn"></a>
<?php } ?>        
<?php  if ( get_theme_mod( 'iadminwp_googleplus' ) == 1 ) {  ?>			        
        <a class="fa fa-google-plus" href="<?php echo get_theme_mod( 'googleplus', 'default_value' ); ?>" aria-label="Google Plus"></a>
<?php } ?>        
        </div>
    </div>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<?php 
				// Display the Custom Logo
                    the_custom_logo();
                    
                    // No Custom Logo, just display the site's name
                    if (!has_custom_logo()) {
                        ?>
                        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                        <?php
                    }
				?>
			<?php else : 
			the_custom_logo();
				?>
			<?php
			endif;
?>
<div id="search">
<div class="hw"><?php dynamic_sidebar( 'hw-1' ); ?></div> 
</div>
		</div><!-- .site-branding -->

<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'iadminwp' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
