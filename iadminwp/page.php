<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package iAdminWP
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
			 if ( get_theme_mod( 'iadminwp_page_comment_toggle' ) == 1 ) : // show page comments? 

                  
                                        // If comments are open or we have at least one comment, load up the comment template
                                        if ( comments_open() || '0' != get_comments_number() ) :
                                                comments_template();
                                        endif;
                             
                        
                    endif;


			endwhile; // End of the loop.
			?>
<?php  if ( is_front_page() && get_theme_mod( 'iadminwp_share_homepage_toggle' ) == 1 ) {  ?>			

<?php }else {
?>
<div id="share">
	<h2><?php echo get_theme_mod( 'iadminwp_share_textbox', 'Share this:' ); ?></h2>
	<!-- AddToAny BEGIN -->
<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
<a class="a2a_button_facebook"></a>
<a class="a2a_button_twitter"></a>
<a class="a2a_button_google_plus"></a>
<a class="a2a_button_email"></a>
<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
</div>
<!-- AddToAny END -->
</div>
<?php } ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
