<?php
/**
 * Template Name: About
 * 
 * 100% wide page template without vertical spacing.
 * 
 * @package     Sinatra
 * @author      Sinatra Team <hello@sinatrawp.com>
 * @since       1.0.0
 */
?>

<?php get_header(); ?>


<!-- cursos -->


<div class="container">

<div class="row justify-content-center my-5">
	<div class="col-md-10">
	<?php
			do_action( 'sinatra_before_singular' );

			do_action( 'sinatra_content_singular' );

			do_action( 'sinatra_after_singular' );
			?>
	</div>
</div>
	

	

</div><!-- END .si-container -->


<?php  get_template_part( 'template-parts/content/comite', sinatra_get_article_feed_layout() ); ?>
<?php  get_template_part( 'template-parts/content/secciones-nacionales', sinatra_get_article_feed_layout() ); ?>
<?php  get_template_part( 'template-parts/content/representantes', sinatra_get_article_feed_layout() ); ?>



<?php
get_footer();
