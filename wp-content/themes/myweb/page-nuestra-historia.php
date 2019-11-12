<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="breadcrumbs">
			<ul>
				<li><a href="<?php echo get_home_url(); ?>" title="Home">Home</a></li>
				<li><?php the_title(); ?></li>
			</ul>
		</div>

		<section class="box-content"> 
			<div class="container">

				<div class="row">
					<div class="col-12">

						<h2 class="center"><span><?php the_title(); ?></span></h2>
						<p class="sub-tituto mini"><?php the_field('content'); ?></p>

					</div>
				</div>

			</div>
		</section>
		<style type="text/css">
			form a {
				display: block;
				padding: 5px 20px;
			}

			form a.active {
				background-color: #ff0000;
				color: #ffffff;
			}
		</style>

		<div class="nav-linha-tempo">
			<h4>LINHA DE TEMPO</h4>
			<ul>
				<?php for($i = 0; $i <= 10; $i++){ ?>
					<li id="btn-item-<?php echo $i; ?>">
						<i class="fas fa-circle"></i>
						<i class="far fa-circle"></i>
						<span>200<?php echo $i; ?></span>
						<span class="titulo"> - Construcción del OCP</span>
					</li>
				<?php } ?>
			</ul>
		</div>


<?php for($i = 0; $i <= 10; $i++){ ?>

		<section class="box-content no-padding-top" id="item-<?php echo $i; ?>"> 
			<div class="container">
				<div class="row">
					<div class="col-m-1 col-11">

						<div class="slide">
							<div id="slide-<?php echo $i; ?>" class="carousel slide" data-ride="carousel" data-interval="8000">
								<div class="carousel-inner">
									<div class="carousel-item active" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-slide.jpg');">
									</div>

									<div class="carousel-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-slide.jpg');">
									</div>
								</div>
								<div class="mask-slide bgescuro lg"></div>
								<div class="text-item text-fixo lg mini">		
									<div class="vertical-center">
										<div class="content-vertical">
											<span class="titulo-slide justify active">
												<h2 class="center">2001<br>Construcción del OCP</h2>
												<p>El 15 de febrero OCP Ecuador S.A. fue autorizada por el Estado ecuatoriano para construir el Oleoducto de Crudos pesados (OCP).</p>
												<p>El 26 de junio se inició la construcción del OCP.</p>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
<?php } ?>

<?php /*
					<div class="spacer s1" id="item-<?php echo $i; ?>">
						<div class="box2" style="background-color: #8DBBE0; height: 100px; width: 100%; display: block;"></div>
					</div>
					
					<div class="spacer s1" id="item-<?php echo $i; ?>">
						<div class="box2" style="background-color: #6AA6D8; height: 100px; width: 100%; display: block;"></div>
					</div>

					<div class="spacer s1" id="item-<?php echo $i; ?>">
						<div class="box2" style="background-color: #4E96D1; height: 100px; width: 100%; display: block;"></div>
					</div>

					<div class="spacer s1" id="item-<?php echo $i; ?>">
						<div class="box2" style="background-color: #307FB5; height: 100px; width: 100%; display: block;"></div>
					</div>

					<div style="height: 50vh; display: block;"></div> */ ?>

	<?php endwhile; ?>

<?php get_footer(); ?>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/scrollmagic/ScrollMagic.js"></script>
<?php /* <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/scrollmagic/debug.addIndicators.js"></script> */ ?>

<script>
	var controller = new ScrollMagic.Controller({globalSceneOptions: {duration: 400}});

	<?php for($i = 0; $i <= 10; $i++){ ?>
		new ScrollMagic.Scene({triggerElement: "#item-<?php echo $i; ?>"})
			.setClassToggle("#btn-item-<?php echo $i; ?>", "active") // add class toggle
			//.addIndicators() // add indicators (requires plugin)
			.addTo(controller);
	<?php } ?>

	top_footer = jQuery('.footer').position();
	height_linha = jQuery('.nav-linha-tempo').height();
	posLinha = '-'+(height_linha/2)+'px';
	//top_footer = top_footer.top-height_linha;

	if(height_linha < jQuery(window).height()){
		jQuery('.nav-linha-tempo').css('margin-top',posLinha);
		jQuery('.nav-linha-tempo').css('top', '50%');
	}

	jQuery(window).scroll(function(){		
		scroll_body = jQuery(window).scrollTop();
		/*if(scroll_body > 400){
			jQuery('.header').addClass('scroll_menu');
		}else{
			jQuery('.header').removeClass('scroll_menu');
		}*/

		console.clear();
		console.log(top_footer.bottom);
		console.log('windows '+scroll_body);
		if(scroll_body >= top_footer.bottom){
			jQuery('.nav-linha-tempo').addClass('linha-tempo-bottom');
		}else{
			jQuery('.nav-linha-tempo').removeClass('linha-tempo-bottom');
		}
	});
</script>