<?php
/**
 * Template part for displaying page layout in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package     Sinatra
 * @author      Sinatra Team <hello@sinatrawp.com>
 * @since       1.0.0
 */

?>

<?php
	$postype_detail=get_post_type($post->ID);

	if($postype_detail != 'page'){
		$template_part= get_template_part( 'template-parts/content/content-' .  $postype_detail);
		if (isset( $template_part)) {
			get_template_part( 'template-parts/content/content-' .  $postype_detail);	
		}
	}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?><?php sinatra_schema_markup( 'article' ); ?>>
<div class="entry-content si-entry">

	<?php
	do_action( 'sinatra_before_page_content' );

	the_content();

	do_action( 'sinatra_after_page_content' );
	?>
</div><!-- END .entry-content -->

<?php sinatra_link_pages(); ?>

</article><!-- #post-<?php the_ID(); ?> -->
