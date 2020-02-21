<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="breadcrumbs">
			<ul class="container">
				<li><a href="<?php echo get_home_url(); ?>" title="Home">Início</a></li> 
				<?php if(is_singular('proyectos')){ 
					$name_category = 'categoria_' . $post->post_type; ?>
					<li><a href="<?php echo get_home_url(); ?>/aporte-a-la-sociedad" title="<?php the_field('titulo_menu',16); ?>"><?php the_field('titulo_menu',16); ?></a></li> 
					<?php /*<li><a href="<?php echo get_home_url(); ?>/proyectos" title="Proyectos"><?php the_field('tit_proyectos',16); ?></a></li> */?>
				<?php }else{
					$name_category = 'category';
				} ?>

				<?php 
					$category = wp_get_post_terms( $post->ID, $name_category )[0]; 
				?>
				<li><a href="<?php echo get_term_link($category->term_id); ?>" title="<?php echo $category->name; ?>"><?php echo $category->name; ?></a></li>
				<li><?php the_title(); ?></li>
			</ul>
		</div>


		<section class="box-content no-padding"> 
			<div class="container">

				<div class="row">
					<div class="col-m-1 col-10">

						<h2 class="center no-uppercase"><span style="color: <?php the_field('cor_categoria', $category->taxonomy . '_' . $category->term_id ); ?>"><?php the_title(); ?></span></h2>
						<p class="margin-bottom-20 center" style="color: <?php the_field('cor_categoria', $category->taxonomy . '_' . $category->term_id ); ?>"><?php echo get_the_date(); ?></p>

					</div>
				</div>

			</div>
		</section>
						
		<?php 	
			if(get_field('video')){

				//get_template_part( 'content', 'video' );

			}else{
				if(get_field('galeria')){
					$images = get_field('galeria'); ?>

					<section class="box-content no-padding-top prensa prensa-list">
						<div class="container">

							<div class="row">
								<div class="col-12">

									<div class="item-prensa galeria">
										<div class="carousel-itens owl-carousel owl-theme owl-loaded">
											<div class="owl-stage-outer">
												<div class="owl-stage"> 

													<?php foreach( $images as $image ): ?>

														<div class="owl-item">
															<div class="capa">
																<img src="<?php echo esc_url($image['sizes']['detalhe-post']); ?>">
															</div>
														</div>

													<?php endforeach; ?>

												</div>
											</div>
										</div>
									</div>

								</div>
							</div>

						</div>
					</section>

				<?php }else{
					if(get_field('link')){ ?>

						<section class="box-content no-padding-top"> 
							<div class="container">

								<div class="row">
									<div class="col-m-1 col-10">

										<div class="conteudo-texto">
											<div class="link-mais">
												<a href="<?php the_field('link'); ?>" class="link cor3 medium" title="<?php echo ( get_field('titulo_link') ? get_field('titulo_link') : "Lea la matéria completa" ); ?>" target="_blank">
													<?php echo ( get_field('titulo_link') ? get_field('titulo_link') : "Lea la matéria completa" ); ?>
												</a>
											</div>
										</div>

									</div>
								</div>

							</div>
						</section>

					<?php }else{
						if(get_field('arquivo')){ 
							$arquivo = get_field('arquivo');
							$filesize = filesize( get_attached_file( $arquivo['ID'] ) );
							$filesize = size_format($filesize, 2); ?>

							<section class="box-content no-padding-top"> 
								<div class="container">

									<div class="row">
										<div class="col-m-1 col-10">

											<div class="conteudo-texto">
												<div class="link-mais margin-bottom-20">
													<a href="<?php echo $arquivo['url']; ?>" class="link cor3 medium" title="Descargar Archive" target="_blank">
														<i class="fas fa-arrow-circle-down cor3"></i>  
														Descargar (<?php echo strtoupper($arquivo['subtype']) . ', ' . $filesize; ?>)
													</a>
												</div>

												<?php the_content(); ?>
											</div>

										</div>
									</div>

								</div>
							</section>

						<?php }else{ ?>

							<section class="box-content no-padding-top"> 
								<div class="container">

									<div class="row">
										<div class="col-m-1 col-10">

											<div class="conteudo-texto">
												<?php the_content(); ?>
											</div>

										</div>
									</div>

								</div>
							</section>

						<?php }
					}
				}
			}
		?>							


	<?php endwhile; ?>

<?php get_footer(); ?>

<?php if(count($images) > 1){ ?>
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
<?php } ?>