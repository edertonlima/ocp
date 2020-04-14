<?php get_header(); ?>

		<!-- slide --> 
		<?php if( have_rows('itens_slide') ): ?>

				<section class="box-content box-slide"> 
					<div class="slide">

						<div id="slide-home" class="carousel slide" data-ride="carousel" data-interval="8000">

							<?php if(count(get_field('itens_slide')) > 1){ ?>
								<ol class="carousel-indicators">

									<?php $slide = 0;
									while ( have_rows('itens_slide') ) : the_row(); ?>

										<li data-target="#slide-home" data-slide-to="<?php echo $slide; ?>" class="<?php if($slide == 0){ echo 'active'; } ?>"></li>

										<?php $slide = $slide+1;
									endwhile; ?>

								</ol>
							<?php } ?>
							
							<div class="carousel-inner">
								<?php 
								$slide = 0;
								while ( have_rows('itens_slide') ) : the_row(); 

									$image = get_sub_field('imagem');
									$image = esc_url($image['sizes']['slide']);

									if(($GLOBALS['mobile']) AND (get_sub_field('imagem_mobile'))){
										$image = get_sub_field('imagem_mobile');
									}

									?>
									<div class="carousel-item <?php if($slide == 0){ echo 'active'; } ?>" style="background-image: url('<?php echo $image; ?>');"></div>

									<?php $slide = $slide+1;
								endwhile; ?>
							</div>
							

							<div class="mask-slide cor2"></div>

							
								<?php $slide = 0;
								while ( have_rows('itens_slide') ) : the_row(); ?>
									<div class="text-item <?php if($slide == 0){ echo 'active'; } ?>" id="txt-<?php echo $slide; ?>">
										<div class="vertical-center">
											<div class="content-vertical">
												<span class="titulo-slide grande">
													<?php the_sub_field('titulo'); ?>
													<?php if(get_sub_field('link')){ ?>
														<a href="<?php the_sub_field('link'); ?>" class="link inline">Lea más</a>
													<?php } ?>
												</span>
											</div>
										</div>
									</div>
									<?php $slide = $slide+1;
								endwhile; ?>
							

							<a class="carousel-control-prev" href="#slide-home" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#slide-home" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>

					</div>
				</section>

		<?php endif; ?>



<section class="box-content"> 
	<div class="container">
		<form action="<?php echo home_url(); ?>" class="form-busca" method="get">
			<fieldset>
				<input type="text" name="s" id="search" placeholder="Buscar en el sitio…" value="<?php if(isset($_GET['s'])){ echo $_GET['s']; } ?>">
				<button type="submit" class="button"><i class="fas fa-search fa-flip-horizontal"></i></button>
			</fieldset>
		</form>
	</div>
</section>

<section class="box-content prensa prensa-list">
	<div class="container">
		
		<div class="row">
			<div class="col-12">

				<h3>Notas de Prensa 
					<?php if(!$GLOBALS['mobile']){ ?>
						<a href="<?php echo get_term_link( 1 ); ?>" class="link all-post position-top">Todos</a>
					<?php } ?>
				</h3>
			
				<div class="carousel-itens owl-carousel owl-theme owl-loaded">
					<div class="owl-stage-outer">
						<div class="owl-stage flex"> 

							<?php
								if($GLOBALS['mobile']){ $count_prensa = 4; }else{ $count_prensa = 12; }
								$prensa_list = array(
										'posts_per_page' => $count_prensa,
										'post_type' 	 => 'post',
										'category_name'  => 'prensa'
									);
								query_posts( $prensa_list ); 

								while ( have_posts() ) : the_post(); ?>

									<div class="owl-item bg-claro <?php if($GLOBALS['mobile']){ echo 'mobile-prensa'; } ?>">

										<?php get_template_part( 'content-home', '' ); ?>

									</div>

								<?php endwhile;
								wp_reset_query();
							?>

						</div>
					</div>
				</div>
							
			</div>	
		</div>

		<?php if($GLOBALS['mobile']){ ?>
			<div class="center">
				<a href="<?php echo get_permalink(get_page_by_path('sala-de-prensa')); ?>" class="link all-post">Todos</a>
			</div>
		<?php } ?>

	</div>
</section>


<?php if( have_rows('itens_dados') and !$GLOBALS['mobile'] ): ?>
	<section class="box-content no-padding-bottom">
		<div class="container">		
			<h2 class="center"><span><?php the_field('titulo_dados'); ?></span></h2>
		</div>
	</section>

	<section class="box-content bg-claro no-padding-top">
		<div class="container">
			
			<div class="row">
				<div class="col-12">

					<div class="conteudo-texto margin-top-30"><?php the_field('descricao_dados'); ?></div>

					<ul class="icon-page count-item-5">

						<?php while ( have_rows('itens_dados') ) : the_row(); ?>

							<li>
								<img src="<?php the_sub_field('icone'); ?>" align="">
								<span class="titulo center"><span class="num" style="color: <?php the_sub_field('cor'); ?>"><?php the_sub_field('dados'); ?></span></span>
								<p class="destaque" style="color: <?php the_sub_field('cor'); ?>"><?php the_sub_field('titulo'); ?></p>
							</li>

 						<?php endwhile; ?>

					</ul>

				</div>
			</div>
		
		</div>
	</section>
<?php endif; ?>


<?php $conocenos = get_field('itens_conocenos');
if( $conocenos ): ?>

	<section class="box-content prensa prensa-list">
		<div class="container">

			<h1 class="tit-principal center center-mobile"><span>CONÓCENOS</span></h1>
					
			<div class="row">

				<?php foreach( $conocenos as $item_conocenos): ?>
					<?php setup_postdata($item_conocenos); 

					//var_dump($item_conocenos); ?>

					<div class="col-6 item-list-prensa video">
						<?php 
							$video_array = get_field('video', $item_conocenos->ID);
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
						<div class="content-list-prensa">
							<span class="categoria-prensa">
								<?php 
									$categorias = wp_get_post_terms( $item_conocenos->ID, 'category' );
									foreach ( $categorias as $categoria ) { ?>
										<i class="fas fa-circle" style="color: <?php the_field('cor_categoria', $categoria->taxonomy . '_' . $categoria->term_id ); ?>"></i>
										<span style="color: <?php the_field('cor_categoria', $categoria->taxonomy . '_' . $categoria->term_id ); ?>">
											<?php echo $categoria->name; ?>
										</span>
									<?php }	
								?>
							</span>
							<a href="<?php echo get_permalink( $item_conocenos->ID ); ?>" title="" class="titulo-prensa">
								<?php echo get_the_title($item_conocenos->ID); ?>
							</a>
						</div>
					</div>

				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>

			</div>
		</div>
	</section>

<?php endif; ?>


<?php get_footer(); ?>

<script type="text/javascript">
	$('#slide-home').on('slide.bs.carousel', function (e) {
		$('.text-item').removeClass('active');
	});

	$('#slide-home').on('slid.bs.carousel', function (e) {
		$('#txt-'+e.to).addClass('active');
	});
</script>

<?php if(!$GLOBALS['mobile']){ ?>
		<!-- CAROUSEL -->
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>

	<script type="text/javascript">
		$('.carousel-itens').owlCarousel({
			loop:false,
			margin:30,
			responsiveClass:true,
			nav:true,
			navText: ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
			//rtl:true,
			responsive:{
				0:{
					items:1,
					nav:true
				},
				600:{
					items:2,
					nav:false
				},
				900:{
					items:3,
					nav:false
				},
				1100:{
					items:4,
					nav:true,
					loop:false
				}
			}
		})

		var qtddot = $('.owl-dots').children().length;
		qtddot = (((qtddot*22)/2)+10)+'px';
		$('.owl-prev').css('margin-right',qtddot);
		$('.owl-next').css('margin-left',qtddot);
	</script>
<?php } ?>