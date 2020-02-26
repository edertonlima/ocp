
<div class="item-prensa">

	<a href="<?php the_permalink(); ?>" class="capa" title="<?php the_title(); ?>">
		<?php 
			$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'list-post' ); 
			if($imagem[0]){ ?>
				<img src="<?php echo $imagem[0]; ?>">
			<?php }
		?>

		<div class="mask bg-cor3" style=""></div>
		<i class="fas fa-search"></i>
	</a>

	<div class="box-bg-content bg-claro">
		<span class="data-prensa cor3">
			<?php echo get_the_date(); ?>
		</span>
		
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="titulo-prensa">
			<?php the_title(); ?>
		</a>


			
				<span class="categoria-prensa">
					<i class="fas fa-circle cor3"></i>
					<?php 
						$tags = get_the_tags();
						//var_dump($tags);

						foreach ( $tags as $key => $tag ) { ?>
							<a href="<?php echo get_tag_link($tag->term_id); ?>" class="cor3">
								<?php echo $tag->name; ?>
									
								</a>

							<?php if (next( $tags )){
								echo ', ';
							}
						}
					?>
				</span>

		
	</div>

</div>