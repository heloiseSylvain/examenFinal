<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
//////////////////////// single.php ///////////////////
	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

					// à modifier  utiliser la fonction in_category() pour que 'single-nouvelle'
					// ne s'exécute que pour les articles de catégorie nouvelle ou événement
					if ( in_category('nouvelle') ) {
						get_template_part( 'template-parts/content/content', 'single-nouvelle' );
					} elseif ( in_category('evenement') ) {
						get_template_part( 'template-parts/content/content', 'single-nouvelle' );
					} else {
						get_template_part( 'template-parts/content/content', 'single' );
					}
			
				if ( is_singular( 'attachment' ) ) {
					// Parent post navigation.
					the_post_navigation(
						array(
							/* translators: %s: parent post link */
							'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'twentynineteen' ), '%title' ),
						)
					);
				} elseif ( is_singular( 'post' ) ) {
					
				}


			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
