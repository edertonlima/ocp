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

	<section class="box-content no-padding-top">
		<div class="container">

			<div class="funcionamiento det-slide-funcionamiento owl-carousel owl-theme owl-loaded" id="funcionamiento">
				<div class="owl-stage-outer">
					<div class="owl-stage">

						<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'content-funcionamiento', get_post_format() );

							endwhile;
						?>

					</div>
				</div>
			</div>

		</div>
	</section>	

<?php get_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>

<script type="text/javascript">
	$('#funcionamiento').owlCarousel({
		loop:false,
		margin:60,
		responsiveClass:true,
		nav:true,
		dots: false,
		navText: ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
		//rtl:true,
		responsive:{
			0:{
				items:1,
				nav:true
			}
		}
	});

	function top_nav(data){
		if(data <= 980){

			setTimeout(function(){
				position_nav = ($('.funcionamiento .owl-item img').height())+25;
				$('.funcionamiento .owl-nav').css('top',position_nav);
			}, 300);

		}
	}	

	$(document).ready(function(){	
		width_body = $(window).width();
		top_nav(width_body);
	});

	$(window).resize(function(){
		width_body = $(window).width();
		top_nav(width_body);
	});
</script>