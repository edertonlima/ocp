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
		$size = 'wide-post';
	}
?>
	
<div class="item-prensa bg-claro">

	<a href="<?php the_permalink(); ?>" class="capa" title="<?php the_title(); ?>">
		<?php 
			$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $size ); 
			if($imagem[0]){ ?>
				<img src="<?php echo $imagem[0]; ?>">
			<?php }
		?>

		<div class="mask" style="background-color: <?php the_field('cor_categoria', $category->taxonomy . '_' . $category->term_id ); ?>"></div>
		<i class="fas fa-link"></i>
	</a>

	<div class="box-bg-content">
		<span class="data-prensa" style="color: <?php the_field('cor_categoria', $category->taxonomy . '_' . $category->term_id ); ?>">
			<?php echo get_the_date(); ?>
		</span>
		
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="titulo-prensa" onmouseover = "this.style.color = '<?php the_field('cor_categoria', $category->taxonomy . '_' . $category->term_id ); ?>'" onmouseout="this.style.color = '#4a4a4a'">
			<?php the_title(); ?>
		</a>
		
		<span class="categoria-prensa" style="color: <?php the_field('cor_categoria', $category->taxonomy . '_' . $category->term_id ); ?>">
			<i class="fas fa-circle" style="color: <?php the_field('cor_categoria', $category->taxonomy . '_' . $category->term_id ); ?>"></i>
			<?php echo $category->name; ?>
		</span>
	</div>

</div>