<article id="post-<?php the_ID(); ?>" <?php post_class( 'sinatra-article' ); ?><?php sinatra_schema_markup( 'article' ); ?>>
	<?php if ( have_posts() ) : ?>
		<div class="si-flex-row">	
		<?php while ( have_posts() ) : the_post();
        $fecha = get_field('fecha');
        $lugar = get_field('lugar');
        $tema = get_field('tema');  
        $estado_inscripciones = get_field_object('estado_inscripciones');
        $estado_inscripciones_value = get_field('estado_inscripciones');  
        $cupos = get_field_object('cupos'); 
        $cupos_value = get_field('cupos'); 
        $certificaciones = get_field('certificaciones');
        $institucion_organizadora = get_field('institucion_organizadora');    
             
        ?>
	<div class="col-12">                
    	<div class="card text-left shadow mb-4">
				<div class="card-header">
					<div class="row">
						<div class="col-12">
							
							<?php 
								// estado de inscripciones
								if( $estado_inscripciones['value'] == 'proximamente' ) {                    
									echo wp_kses_post( '<h5 class="my-0 text-left"> <strong> <i class="fa fa-clock-o text-warning" aria-hidden="true"></i> ' . $estado_inscripciones['label'] . ': ' . $estado_inscripciones['choices'][$estado_inscripciones_value] . '</strong></h5>'  );
								} elseif( $estado_inscripciones['value'] == 'abiertas' ){
									echo wp_kses_post( '<h5 class="my-0 text-left"> <strong> <i class="fa fa-check-circle-o text-success" aria-hidden="true"></i> ' . $estado_inscripciones['label'] . ' ' . $estado_inscripciones['choices'][$estado_inscripciones_value] . '</strong></h5>'  );
								}  else {
									echo wp_kses_post( '<h5 class="my-0 text-left"> <strong> <i class="fa fa-times-circle text-danger" aria-hidden="true"></i> ' . $estado_inscripciones['label'] . ' ' . $estado_inscripciones['choices'][$estado_inscripciones_value] . '</strong></h5>'  );
								} ;
							?>
						</div>
							
					</div>
				</div>

				<div class="card-body">
					<div class="row">
						<div class="col-md-4 col-xs-12">
								<a href="<?php the_permalink(); ?>">
								<?php  
									get_template_part( 'template-parts/entry/entry-thumbnail' );
								?> 
								</a> 
						</div>

						<div class="col-md-8 col-xs-12">
							<?php get_template_part( 'template-parts/entry/entry-header' ); ?>
							<hr>
								
							<?php 
								if ($cupos){
									echo wp_kses_post('<h5 class="small  mt-0 mb-0 text-muted my-1">' . $cupos['choices'][$cupos_value] . '</h5>'); 
								};
								if ($certificaciones){
									echo wp_kses_post('<h5 class="small  mt-0 mb-0 text-muted my-1"> ' . $certificaciones . '</h5>');
								};
								if ($institucion_organizadora){
									echo wp_kses_post('<h5 class="small  mt-0 mb-0 text-muted my-1"> Organizado por: ' . $institucion_organizadora . '</h5>');
								};         
								
								echo wp_kses_post('<h4 class="h6 mt-2 ">  Inicia el <strong>' . $fecha . '</strong></h3>');    			
							?>
							<a href="<?php the_permalink(); ?>" class="btn btn-primary mt-3">Ver curso</a>            
						</div>
					</div>
				</div> 	                 

			</div>
						
  	</div>
		<?php endwhile; ?>
					
			
		<?php wp_reset_postdata(); ?>
	<?php else : ?>
		<p><?php __('No News'); ?></p>
		</div>
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->

