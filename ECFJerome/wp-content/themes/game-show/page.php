<?php
/**
 * Template Name: SGS
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Game_Show
 */

get_header();
?>

	<main id="primary" class="site-main">
	<h2><?= get_field('titre_main_01');
    ?></h2>
	<?php
	$bloc1 = get_field('bloc_1');
	if( $bloc1 ) ?>
    	<div id="bloc_1">
        	<img src="<?= esc_url( $bloc1['image_main_1']['url'] ); ?>" alt="<?= esc_attr( $bloc1['image']['alt'] ); ?>">
        	<div class="content">
			<h3><?= $bloc1['titre_main_02']; ?></h3>
			<p><?= $bloc1['texte_main_01']; ?></p>

            	
        	</div>
    	</div>


		<!-- <?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?> -->



	</main><!-- #main -->

<?php
get_sidebar();
get_footer();