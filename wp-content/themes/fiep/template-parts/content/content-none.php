<?php
/**
 * Template part for displaying not found posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package     Sinatra
 * @author      Sinatra Team <hello@sinatrawp.com>
 * @since       1.0.0
 */

?>

<section class="no-results not-found">

	<div class="page-content si-entry">

		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'sinatra' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :

			printf(
				'<h4>' . wp_kses( __( 'Lo siento, no se han encontrado resultados. Por favor, inténtalo de nuevo con palabras clave diferentes.', 'sinatra' ), sinatra_get_allowed_html_tags() ) . '</h4>'
			);
			//get_search_form();

		elseif ( is_category() ) :

			printf(
				'<p>' . wp_kses( __( 'Actualmente no hay publicaciones publicadas en esta categoría.', 'sinatra' ), sinatra_get_allowed_html_tags() ) . '</p>'
			);

		elseif ( is_tax() ) :

			printf(
				'<p>' . wp_kses( __( 'Actualmente no hay publicaciones publicadas en esta categoría..', 'sinatra' ), sinatra_get_allowed_html_tags() ) . '</p>'
			);

		elseif ( is_tag() ) :

			printf(
				'<p>' . wp_kses( __( 'Actualmente no hay publicaciones publicadas en esta etiqueta.', 'sinatra' ), sinatra_get_allowed_html_tags() ) . '</p>'
			);

		else :

			printf(
				'<p>' . wp_kses( __( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'sinatra' ), sinatra_get_allowed_html_tags() ) . '</p>'
			);
			get_search_form();

		endif;
		?>

	</div><!-- .page-content -->
</section><!-- .no-results -->
