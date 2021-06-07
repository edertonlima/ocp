
<div class="row det-slide-funcionamiento <?php if(!$GLOBALS['mobile']){ echo 'row-flex'; } ?>">

	<?php if($GLOBALS['mobile']){ ?>
	<div class="col-6 bg-img-slide">
		<div class="conteudo-texto">

			<?php 
				$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'slide-funcionamiento' ); 
				if($imagem[0]){ ?>
					<img src="<?php echo $imagem[0]; ?>">
				<?php }
			?>

		</div>
	</div>
	<?php } ?>

	<div class="col-6 <?php if(!$GLOBALS['mobile']){ echo 'txt-slide'; } ?>">											

		<div class="funcionamiento funcionamiento-navegacao owl-carousel owl-theme owl-loaded">
			<div class="owl-stage-outer">
				<div class="owl-stage">

					<?php 
						if( have_rows('itens-funcionamiento') ):
							while ( have_rows('itens-funcionamiento') ) : the_row(); ?>


								<div class="owl-item">
									<div class="conteudo-texto cont-left">

										<?php //if(is_singular('funcionamiento')){

											if(get_sub_field('titulo')){ ?>
												<h3 class="center"><?php the_sub_field('titulo'); ?></h3>
											<?php } ?>

										<?php // } ?>
										
										<p class="justify"><?php the_sub_field('texto'); ?></p>

									</div>
								</div>


								<?php
							endwhile;
						endif;
					?>

				</div>
			</div>
		</div>

	</div>


	<?php if(!$GLOBALS['mobile']){ ?>
	<div class="col-6 img-slide bg-img-slide">
		<div class="conteudo-texto cont-right">

			<?php 
				$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'slide-funcionamiento' ); 
				if($imagem[0]){ ?>
					<img src="<?php echo $imagem[0]; ?>">
				<?php }
			?>

		</div>
	</div>
	<?php } ?>

	<?php if(get_the_title()){ ?>
		<div class="col-6"> </div>
		<div class="col-6">
			<div class="conteudo-texto cont-left">
				<div class="link-mais margin-top-10 margin-bottom-20 center">
					<a href="<?php the_permalink(); ?>">
						<h4 class="link link-bloco">
							<?php the_title(); ?>
						</h4> 
					</a>
				</div>
			</div>
		</div>
	<?php } ?>	

</div>