<?php
	global $row_proj;
	
	if($post->post_type == 'aporte-a-la-sociedad'){
		$category = wp_get_post_terms( $post->ID, 'categoria_aportealasociedad' )[0];
	}

	if($post->post_type == 'post'){
		$category = wp_get_post_terms( $post->ID, 'category' )[0];
	}

	if($row_proj <= 3){ 
		$size = 'list-post';
	}else{
		$size = 'galeria-post';
	}
	
	$images = get_field('galeria'); 
?>

<div class="item-prensa galeria bg-claro">
	<div class="carousel-itens owl-carousel owl-theme owl-loaded">
		<div class="owl-stage-outer">
			<div class="owl-stage"> 

					<?php if(count($images) > 1){
						foreach( $images as $image ): ?>

							<div class="owl-item">
								<div class="capa">
									<img src="<?php echo esc_url($image['sizes'][$size]); ?>">
								</div>
							</div>

						<?php endforeach;
					}else{ ?>

						<a href="<?php the_permalink(); ?>" class="owl-item capa" title="<?php the_title(); ?>">
							<img src="<?php echo esc_url($images[0]['sizes'][$size]); ?>">
							<div class="mask" style="background-color: <?php the_field('cor_categoria', $category->taxonomy . '_' . $category->term_id ); ?>"></div>
							<i class="far fa-file-image"></i>
						</a>

					<?php } ?>

			</div>
		</div>
	</div>

	<div class="box-bg-content">
		<span class="data-prensa" style="color: <?php the_field('cor_categoria', $category->taxonomy . '_' . $category->term_id ); ?>">
			<?php echo get_the_date(); ?>
		</span>
		
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="titulo-prensa" onmouseover = "this.style.color = '<?php the_field('cor_categoria', $category->taxonomy . '_' . $category->term_id ); ?>'" onmouseout="this.style.color = '#4a4a4a'">
			<?php the_title(); ?>
		</a>
				
		<?php
			//$tags = get_the_tags();
			/*if($tags){ ?>

				<span class="categoria-prensa">
					<i class="fas fa-circle" style="color: <?php the_field('cor_categoria', $category->taxonomy . '_' . $category->term_id ); ?>"></i>
					<?php 
						foreach ( $tags as $key => $tag ) { ?>
							<a href="<?php echo get_tag_link($tag->term_id); ?>" style="color: <?php the_field('cor_categoria', $category->taxonomy . '_' . $category->term_id ); ?>">
								<?php echo $tag->name; ?>
									
								</a>

							<?php if (next( $tags )){
								echo ', ';
							}
						}
					?>
				</span>

			<?php }else{ */?>

				<span class="categoria-prensa">
					<i class="fas fa-circle" style="color: <?php the_field('cor_categoria', $category->taxonomy . '_' . $category->term_id ); ?>"></i>
					<a href="<?php echo get_term_link($category->term_id); ?>" style="color: <?php the_field('cor_categoria', $category->taxonomy . '_' . $category->term_id ); ?>">
						<?php echo $category->name; ?>
					</a>
				</span>

			<?php //}
		?>
	</div>

</div>