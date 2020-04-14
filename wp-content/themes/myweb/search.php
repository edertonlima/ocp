<?php get_header(); ?>

	<?php
		if(is_category()){

			$taxonomy = 'category';

		}else{ 
			if(is_archive('aporte-a-la-sociedad')){

				$taxonomy = 'categoria_aportealasociedad';

			}else{

				$taxonomy = 'category';

			}
		}

		$args = array(
		    'taxonomy'      	=> $taxonomy,
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

			<?php 
				if(is_category()){ ?>

					<li><a href="<?php echo get_home_url(); ?>/sala-de-prensa" title="<?php the_field('titulo_menu',20); ?>"><?php the_field('titulo_menu',20); ?></a></li> 
					<li><?php echo $category_current->name; ?></li>

				<?php }else{ 
					if(is_archive('aporte-a-la-sociedad')){ 
						if(is_tax()){ ?>

							<li><a href="<?php echo get_home_url(); ?>/aporte-a-la-sociedad" title="<?php the_field('titulo_menu',16); ?>"><?php the_field('titulo_menu',16); ?></a></li>
							<li><?php echo $category_current->name; ?></li>

						<?php }else{ ?>
							
							<li><?php the_field('titulo_menu',16); ?></li>

						<?php }

					}else{ ?>

						<li><?php the_field('titulo_menu',20); ?></li>

					<?php }
				}
			?>	
			
		</ul>
	</div>

	<section class="box-content no-padding">
		<div class="container">

			<h1 class="tit-principal center"><span>
				<?php 
					if(is_category()){

						echo $category_current->name;
						$link_form = get_term_link( $category_current->term_id);

					}else{
						if(is_archive('aporte-a-la-sociedad')){
							if(is_tax()){ 

								echo $category_current->name;
								$link_form = get_term_link( $category_current->term_id);

							}else{

								the_field('titulo_menu',16);
								$link_form = get_permalink(get_page_by_path('aporte-a-la-sociedad'));

							}
						}else{

							the_field('titulo_menu',20);
							$link_form = get_permalink(get_page_by_path('sala-de-prensa'));

						}
					}
				?>
			</span></h1>

			<form action="<?php echo $link_form; ?>" class="form-busca" method="get">
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


						<?php if(is_category()){ ?>

							<li class="off">
								<a href="<?php echo get_permalink(get_page_by_path('contactenos')); ?>" title="<?php the_field('titulo_menu',23); ?>">
									<img src="<?php the_field('icone', get_page_by_path('contactenos') ); ?>" alt="<?php the_field('titulo_menu',23); ?>">
									<span><?php the_field('titulo_menu',23); ?></span>
								</a>
							</li>

						<?php }else{
							if(is_archive('aporte-a-la-sociedad')){

								//the_field('titulo_menu',16);

							}else{ ?>

								<li class="off">
									<a href="<?php echo get_permalink(get_page_by_path('contactenos')); ?>" title="<?php the_field('titulo_menu',23); ?>">
										<img src="<?php the_field('icone', get_page_by_path('contactenos') ); ?>" alt="<?php the_field('titulo_menu',23); ?>">
										<span><?php the_field('titulo_menu',23); ?></span>
									</a>
								</li>

							<?php }
						} ?>

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
	
	<?php if($wp_query->max_num_pages > 1){ 

		if(is_archive('aporte-a-la-sociedad')){
			$var_posttype = 'aporte-a-la-sociedad';
		}else{
			$var_posttype = 'post';	
		}

		?>
		<section class="box-content no-padding-top">
			<div class="container">

				<div class="center">
					<button class="button load-more largo transparent cor3" var-url="<?php echo admin_url( 'admin-ajax.php' ); ?>" var-taxonomy="<?php echo $category_current->taxonomy; ?>" var-category="<?php echo $category_current->term_id; ?>" var-post-type="<?php echo $var_posttype; ?>" var-paged="2" var-max-paged="<?php echo $wp_query->max_num_pages; ?>" var-pesquisa="<?php if(isset($_GET['s'])){ echo $_GET['s']; } ?>">
						Mais
					</button>
				</div>			

			</div>
		</section>
	<?php } ?>

<?php get_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
<script type="text/javascript">

	function owlCarousel(){
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
	}

	owlCarousel();

</script>