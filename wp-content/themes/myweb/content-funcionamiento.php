<div class="owl-item">
	<div class="row <?php if(!$GLOBALS['mobile']){ echo 'row-flex'; } ?>">

		<?php if($GLOBALS['mobile']){ ?>
			<div class="col-6 bg-img-slide">
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
	
		<div class="col-6">
			<div class="conteudo-texto cont-left">
				
					<h3 class="center">
						<?php if(!get_field('ocultar-titulo') and (!is_singular('funcionamiento'))){ the_title(); } ?>
					</h3>
																	
				<p class="justify"><?php the_field('content'); ?></p>
			</div>
		</div>

		<?php if(!$GLOBALS['mobile']){ ?>
			<div class="col-6 bg-img-slide">
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

	</div>
</div>