<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="breadcrumbs">
			<ul class="container">
				<li><a href="<?php echo get_home_url(); ?>" title="Home">Home</a></li>
				<li><?php the_title(); ?></li>
			</ul>
		</div>

		<section class="box-content first-section">
			<div class="container">

				<div class="row">
					<div class="col-12">

						<h1 class="tit-principal center"><span><?php the_title(); ?></span></h1>
						<p class="sub-tituto mini"><?php the_field('content'); ?></p>

					</div>
				</div>

			</div>
		</section>

		<?php if(!$GLOBALS['mobile']){ ?>
			<div class="nav-linha-tempo">
				<h4>LINHA DE TEMPO</h4>
				<ul>
								
					<?php if( have_rows('nuestra-historia') ):
						while ( have_rows('nuestra-historia') ) : the_row(); ?>

						<li id="btn-item-<?php the_sub_field('ano-nuestra-historia'); ?>" class="go-item" rel="#slide-<?php the_sub_field('ano-nuestra-historia'); ?>">
							<i class="fas fa-circle"></i>
							<i class="far fa-circle"></i>
							
							<span><?php the_sub_field('ano-nuestra-historia'); ?></span>
							<span class="titulo"> - <?php the_sub_field('titulo-nuestra-historia'); ?></span>
						</li>

						<?php endwhile;
					endif; ?>

				</ul>
			</div>
		<?php } ?>


		<?php if( have_rows('nuestra-historia') ):
			while ( have_rows('nuestra-historia') ) : the_row(); ?>

				<section class="box-content no-padding-top" id="item-<?php the_sub_field('ano-nuestra-historia'); ?>"> 
					<div class="container">
						<div class="row">
							<div class="col-m-1 col-11">

								<div class="slide">
									<div id="slide-<?php the_sub_field('ano-nuestra-historia'); ?>" class="carousel slide" data-ride="carousel" data-interval="4000" data-pause="false">
										<div class="carousel-inner">

											<?php $images = get_sub_field('imagens-nuestra-historia');
											if($GLOBALS['mobile']){ $name_image = 'slide-funcionamiento'; }else{ $name_image = 'slide'; }
											if( $images ): 
												$i = 0;
												foreach( $images as $image ): $i = $i+1; ?>

													<div class="carousel-item <?php if($i == 1){ echo 'active'; } ?>" style="background-image: url('<?php echo $image['sizes'][$name_image]; ?>');">
													</div>

												<?php endforeach;
											endif; ?>
										</div>

										<div class="mask-slide bgescuro lg item-nuestra-historia"></div>
										<div class="text-item active text-fixo lg mini item-nuestra-historia">		

											<span class="titulo-slide active">
												<h2 class="center">
													<span class="ano"><?php the_sub_field('ano-nuestra-historia'); ?></span>
													<span><?php the_sub_field('titulo-nuestra-historia'); ?></span>
												</h2>

												<div class="carousel-texto owl-carousel owl-theme owl-loaded">
													<div class="owl-stage-outer">
														<div class="owl-stage"> 

															<?php if( have_rows('texto-slide-nuestra-historia') ):
																while ( have_rows('texto-slide-nuestra-historia') ) : the_row(); ?>

																	<div class="owl-item">
																		<div class="scrollbar scrollbar-dynamic">
																			<p><?php the_sub_field('texto'); ?></p>
																		</div>
																	</div>

																<?php endwhile;
															endif; ?>

														</div>
													</div>
												</div>
											</span>

										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</section>

			<?php endwhile;
		endif; ?>

	<?php endwhile; ?>

<?php get_footer(); ?>

<?php if(!$GLOBALS['mobile']){ ?>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/scrollmagic/ScrollMagic.js"></script>

	<script>
		var controller = new ScrollMagic.Controller({globalSceneOptions: {duration: 400}});

		<?php if( have_rows('nuestra-historia') ):
			while ( have_rows('nuestra-historia') ) : the_row(); ?>

				new ScrollMagic.Scene({triggerElement: "#item-<?php the_sub_field('ano-nuestra-historia'); ?>"})
					.setClassToggle("#btn-item-<?php the_sub_field('ano-nuestra-historia'); ?>", "active") // add class toggle
					//.addIndicators() // add indicators (requires plugin)
					.addTo(controller);
			<?php endwhile;
		endif; ?>
	</script>

	<script type="text/javascript">
		height_linha = jQuery('.nav-linha-tempo').height();
		posLinha = '-'+(height_linha/2)+'px';
		altura = (jQuery('.footer').position().top)-600;

		if(height_linha < jQuery(window).height()){
			jQuery('.nav-linha-tempo').css('margin-top',posLinha);
			jQuery('.nav-linha-tempo').css('top', '50%');
			jQuery('.nav-linha-tempo').css('opacity',1);
		}

		jQuery(window).scroll(function(){
			if (jQuery(this).scrollTop() > altura){
				jQuery(".nav-linha-tempo").css('top',altura);
				jQuery(".nav-linha-tempo").css('position','absolute');
				jQuery(".nav-linha-tempo").css('margin-top',(jQuery(".nav-linha-tempo").height()/2)+'px');
			}else{
				jQuery(".nav-linha-tempo").css('top','50%');
				jQuery(".nav-linha-tempo").css('position','fixed');
				jQuery(".nav-linha-tempo").css('margin-top',posLinha);
			}
		});
	</script>
<?php } ?>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/scrollbar/jquery.scrollbar.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('.scrollbar').scrollbar();
	});
</script>


<!-- CAROUSEL -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>

<script type="text/javascript">
	$('.carousel-texto').owlCarousel({
		loop: false,
		margin: 20,
		responsiveClass: true,
		nav: true,
		dots: true,
		navText: ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1,
				dots:false,
				nav: true
			},
			980:{
				items:1
			}
		}
	});

	<?php if(!$GLOBALS['mobile']){ ?>
		$( '.carousel-texto' ).each(function( index ) {
			var qtddot = $('.owl-dots',this).width();
			$('.owl-nav',this).width(qtddot+50);
		});
	<?php } ?>
</script>