<div class="owl-item">
	<div class="row row-flex">

		<?php //if($GLOBALS['mobile']){ ?>
			<div class="col-6 bg-img-slide if-mobile-true">
				<div class="conteudo-texto cont-right">
					<?php 
						$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'slide-funcionamiento' ); 
						if($imagem[0]){ ?>
							<img src="<?php echo $imagem[0]; ?>">
						<?php }
					?>
				</div>
			</div>
		<?php //} ?>
	
		<div class="col-6">
			<div class="conteudo-texto cont-left">
				
					<h3 class="center">
						<?php if(!get_field('ocultar-titulo') and (!is_singular('funcionamiento'))){ the_title(); } ?>
					</h3>
																	
				<p class="justify"><?php the_field('content'); ?></p>
			</div>

						<?php if(get_field('video-funcionamiento')){ ?>
							<div class="conteudo-texto margin-top-30">
								<div class="video-funcionamiento">

										<?php 
											$video_array = get_field('video-funcionamiento');
											preg_match('/src="(.+?)"/', $video_array, $matches);
											$video_url = $matches[1];

											$video_id = explode("embed/", $video_url);
											$video_id = $video_id[1];
											$video_id = explode("?feature=oembed", $video_id);
											$video_id = $video_id[0];
											$thumbnail="https://img.youtube.com/vi/".$video_id."/maxresdefault.jpg";
										?>

										<a data-fancybox href="<?php echo $video_url; ?>" class="capa">
											<img src="<?php echo $thumbnail; ?>">
										</a>

								</div>
							</div>
						<?php } ?>
		</div>

		<?php// if(!$GLOBALS['mobile']){ ?>
			<div class="col-6 bg-img-slide if-mobile-false">
				<div class="conteudo-texto cont-right">
					<?php 
						$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'slide-funcionamiento' ); 
						if($imagem[0]){ ?>
							<img src="<?php echo $imagem[0]; ?>">
						<?php }
					?>
				</div>
			</div>
		<?php //} ?>

	</div>
</div>