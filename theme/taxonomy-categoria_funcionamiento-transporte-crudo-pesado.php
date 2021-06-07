<?php 
	get_header();
	$term_id = get_queried_object_id();
	$description = get_queried_object()->description;
	$term = get_queried_object();
	$image = get_field('imagem-taxonomy', $taxonomy . '_' . $term_id );
?>

	<div class="breadcrumbs">
		<ul class="container">
			<li><a href="<?php echo get_home_url(); ?>" title="Início">Início</a></li>
			<li><a href="<?php echo get_home_url(); ?>/funcionamiento" title="<?php the_field('titulo_menu', 11); ?>"><?php the_field('titulo_menu', 11); ?></a></li>
			<li><?php single_term_title(); ?></li>
		</ul>
	</div>

	<section class="box-content first-section">
		<div class="container">

			<h1 class="tit-principal center"><span><?php the_field('titulo-taxonomy', $taxonomy . '_' . $term_id ); ?></span></h1>
			<p class="sub-tituto mini center"><?php echo $description; ?></p>

		</div>
	</section>

	<?php if(!$GLOBALS['mobile']){ ?>
	<?php /*<section class="box-content no-padding servicios det-servicios img-funcionamiento"> 
		<div class="img-topo">
			<img src="<?php echo esc_url($image['sizes']['slide']); ?>">
		</div>
	</section> */?>
	<?php } ?>

	
	<section class="box-content no-padding-top time-line"> 
		<div class="cd-h-timeline js-cd-h-timeline margin-bottom-md"> 
			<div class="container">
				<div class="cd-h-timeline__container">
					<div class="cd-h-timeline__dates">
						<div class="cd-h-timeline__line">
							<ol>
								<?php 
									$nun_nav = 0;

									if(!$GLOBALS['mobile']){
										global $query_string;
										query_posts( $query_string . '&order=ASC' );
										$count_post = count($posts);
									}else{
										$count_post = 1;
									}									

									while ( have_posts() ) : the_post();
										$nun_nav = $nun_nav+1; ?>

										<li data-date="<?php echo $nun_nav . '/1/0001'; //echo get_the_date('d/m/Y'); ?>" class="cd-h-timeline__date <?php if($nun_nav == $count_post){ echo 'cd-h-timeline__date--selected'; } ?>">
											<span></span>

											<?php if(!$GLOBALS['mobile']){ ?>
												<div class="legenda">
													<div class="titulo">
														<?php 
															if($nun_nav == 1){ echo 'FINAL'; }
															if($nun_nav == $count_post){ echo 'INICIO'; }
														?>												
													</div>
													<div><?php the_field('titulo-funcionamiento'); ?></div>
												</div>
											<?php } ?>
										</li>

									<?php endwhile;
								?>
							</ol>

							<span class="cd-h-timeline__filling-line" aria-hidden="true"></span>
						</div>
					</div>

					<ul style="opacity: 0;">
						<li><a href="#0" class="text-replace cd-h-timeline__navigation cd-h-timeline__navigation--prev">Prev</a></li>
						<li><a href="#0" class="text-replace cd-h-timeline__navigation cd-h-timeline__navigation--next">Next</a></li>
					</ul>
				</div>
			</div>

			<div class="cd-h-timeline__events">

				<?php /* <div class="container">
					<div class="link-nav">
						<a href="javascript:" class="link-timeline prev-timeline" <?php if($GLOBALS['mobile']){ echo 'style="display: none;"'; } ?>>
							<i class="fas fa-chevron-left"></i>
						</a>
						<a href="javascript:" class="link-timeline next-timeline" <?php if(!$GLOBALS['mobile']){ echo 'style=" display: none;"'; } ?>>
							<i class="fas fa-chevron-right"></i> 
						</a>
					</div>
				</div> */ ?>  
				

					<ol>
						<?php 
							$nun_nav = 0;

							if(!$GLOBALS['mobile']){
								/*global $query_string;
								query_posts( $query_string . '&order=ASC' );*/
							}else{

							}

							while ( have_posts() ) : the_post();
								$nun_nav = $nun_nav+1; ?>

								<li class="cd-h-timeline__event <?php if($nun_nav == $count_post){ echo 'cd-h-timeline__event--selected'; } ?> text-component">
									<div class="cd-h-timeline__event-content">

										<div class="container">
											
											<?php if($GLOBALS['mobile']){ ?>
												<h2 class="center uppercase"><span><?php the_field('titulo-funcionamiento'); ?></span></h2>
												<p class="sub-tituto center"><?php the_field('subtitulo-funcionamiento'); ?></p> 
											<?php } ?>


											<?php get_template_part( 'content-funcionamiento-slide', get_post_format() ); ?>

										</div>

									</div>
								</li>

							<?php endwhile;
						?>
					</ol>

							
			</div> 
		</div>
	</section>

<?php get_footer(); ?>


<script src="<?php echo get_template_directory_uri(); ?>/assets/js/horizontal-timeline/util.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/horizontal-timeline/swipe-content.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/horizontal-timeline/main.js"></script>


<script type="text/javascript">

	// nav timeline
	$('.prev-timeline').click(function(){
		ele = $('.cd-h-timeline__date--selected').prev();
		$(ele).trigger( 'click' );

		if(!ele.prev().length){
			$(this).hide();
		}

		if(ele.next().length){
			$('.next-timeline').show();
		}
	});

	$('.next-timeline').click(function(){
		ele = $('.cd-h-timeline__date--selected').next();
		$(ele).trigger( 'click' );

		if(!ele.next().length){
			$(this).hide();
		}

		if(ele.prev().length){
			$('.prev-timeline').show();
		}
	});

	$('.cd-h-timeline__date').click(function(){
		//ele = $(this)().next();
		//$('button',ele).trigger( 'click' );

		if(!$(this).next().length){
			$('.next-timeline').hide();
		}else{
			$('.next-timeline').show();
		}

		if(!$(this).prev().length){
			$('.prev-timeline').hide();
		}else{
			$('.prev-timeline').show();
		}
	});

</script>


<?php if(!$GLOBALS['mobile']){ ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>

<script type="text/javascript">
	width_body = jQuery(window).width();
	if(width_body > 980){
		$('.funcionamiento').owlCarousel({
			loop:false,
			margin:60,
			responsiveClass:true,
			nav:true,
			dots: false,
			navText: ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
			//rtl:true,
			responsive:{
				0:{
					items:1
				}
			}
		})
	}else{

		/*jQuery(document).ready(function(){
			$margin_top = ($('.img-slide img').height())+70;
			$('.link-nav').css('top',$margin_top);
		})*/

	}

	$(window).resize(function(){
		width_body = jQuery(window).width();

		if(width_body <= 980){
			$('.funcionamiento').owlCarousel('destroy');
	
			/*$margin_top = 0;
			$('.link-nav').css('top',$margin_top);*/

		}else{
			$('.funcionamiento').owlCarousel({
				loop:false,
				margin:60,
				responsiveClass:true,
				nav:true,
				dots: false,
				navText: ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
				//rtl:true,
				responsive:{
					0:{
						items:1
					}
				}
			})

			/*$('.link-nav').css('margin-top','0px');*/
		}
	})
</script>
<?php } ?>