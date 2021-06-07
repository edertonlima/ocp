<?php get_header(); ?>

	<?php
		$args = array(
		    'taxonomy'      	=> 'category',
		    'parent'        	=> 0, // get top level categories
		    'orderby'       	=> 'count',
		    'order'         	=> 'DESC',
		    'hide_empty'      	=> false
		);
		$categories = get_categories( $args );
		$category_current = get_queried_object();
	?>

	<div class="breadcrumbs">
		<ul class="container">
			<li><a href="<?php echo get_home_url(); ?>" title="Home">Início</a></li> 
			<li><a href="<?php echo get_home_url(); ?>/sala-de-prensa" title="<?php the_field('titulo_menu',20); ?>"><?php the_field('titulo_menu',20); ?></a></li>
			<li>Tag <?php echo $category_current->name; ?></li>
		</ul>
	</div>

	<section class="box-content no-padding">
		<div class="container">

			<h1 class="tit-principal center"><span>Tag <?php echo $category_current->name; ?></span></h1>

			<form action="<?php echo home_url(); ?>" class="form-busca" method="get">
				<fieldset>
					<input type="text" name="s" id="search" placeholder="Buscar en el sitio…" value="<?php if(isset($_GET['s'])){ echo $_GET['s']; } ?>">
					<button type="submit" class="button"><i class="fas fa-search fa-flip-horizontal"></i></button>
				</fieldset>
			</form>
		</div>
	</section>

	<section class="box-content no-padding"> 
		<div class="container">

			<div class="row">
				<div class="col-12">

					<ul class="list-category">

						<?php foreach ( $categories as $category ){ ?>

							<li class="<?php if($category_current->term_id != $category->term_id): echo 'off'; endif; ?>">
								<a href="<?php echo get_term_link( $category->term_id); ?>" title="<?php echo $category->name; ?>">
									<img src="<?php the_field('icone', $category->taxonomy . '_' . $category->term_id ); ?>" alt="<?php echo $category->name; ?>">
									<span style="color: <?php the_field('cor_categoria', $category->taxonomy . '_' . $category->term_id ); ?>"><?php echo $category->name; ?></span>
								</a>
							</li>

						<?php } ?>

					</ul>
				</div>
			</div>

		</div>
	</section>

	<section class="box-content no-padding-top prensa prensa-list">
		<div class="container">

			<div class="row flex">

				<?php 
					if(have_posts()){
						while ( have_posts() ) : the_post();
							$row_proj = $row_proj+1;

							if($row_proj == 4){
								echo '</div><div class="row flex">';
							}
							?>
							<div class="<?php if($row_proj <= 3){ echo 'col-4'; }else{ echo 'col-6'; } ?> margin-bottom-60">

								<?php 	
									if(get_field('video')){

										get_template_part( 'content', 'video' );

									}else{
										if(get_field('galeria')){

											get_template_part( 'content', 'galeria' );

										}else{
											if(get_field('link')){

												get_template_part( 'content', 'link' );

											}else{
												if(get_field('arquivo')){

													get_template_part( 'content', 'arquivo' );

												}else{
													get_template_part( 'content', '' );
												}
											}
										}
									}
								?>
							
							</div>
						<?php endwhile;
					}else{ ?>

						<div class="col-12">
							<p class="text-destaque center"><br><br>No se encontraron entradas</p>
						</div>

					<?php }
				?>

			</div>

		</div>
	</section>	

	<?php if($wp_query->max_num_pages > 1){ ?>
		<section class="box-content no-padding-top">
			<div class="container">

				<div class="center">
					<button class="button load-more largo transparent cor3" var-taxonomy="category" var-category="<?php echo $category_current->term_id; ?>" var-post-type="post" var-paged="2" var-max-paged="<?php echo $wp_query->max_num_pages; ?>">
						Mais
					</button>
				</div>			

			</div>
		</section>
	<?php } ?>

<?php get_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
<script type="text/javascript">
	$('.carousel-itens').owlCarousel({
		loop:false,
		margin:0,
		responsiveClass:true,
		nav:true,
		navText: ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
		//rtl:true,
		responsive:{
			0:{
				items:1,
				nav:true
			}
		}
	})
</script>