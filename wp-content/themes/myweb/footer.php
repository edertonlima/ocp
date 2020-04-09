
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-4">
					<img src="<?php the_field('logo_footer', 'option'); ?>" alt="<?php echo get_bloginfo( 'name' ); ?>">
					<p class=""><?php echo get_the_excerpt(get_page_by_path('quienes-somos')); ?></p>

					<?php if(get_field('texto-rodape-1', 'option')){ ?>
						<div class="list-txt">
							<?php /*<h3>Oficinas:</h3>*/ ?>
							<span><?php the_field('texto-rodape-1', 'option'); ?></span>
						</div>
					<?php } ?>

					<?php if(get_field('texto-rodape-2', 'option')){ ?>
						<div class="list-txt">
							<?php /*<h3>Quito - Ecuador:</h3>*/?>
							<span><?php the_field('texto-rodape-2', 'option'); ?></span>
						</div>
					<?php } ?>

				</div>

				<div class="col-2 col-m-1">
					<nav class="nav nav-footer">
						<h3>Menús Principales</h3>
						<ul>
							<li><a href="<?php echo get_home_url(); ?>" title="Home">Home</a></li>
							<li><a href="<?php echo get_permalink(get_page_by_path('quienes-somos')); ?>" title="Quiénes Somos">Quiénes Somos</a></li>
							<li><a href="<?php echo get_permalink(get_page_by_path('nuestra-historia')); ?>" title="Nuestra Historia">Nuestra Historia</a></li>
							<li><a href="<?php echo get_post_type_archive_link('funcionamiento'); ?>" title="Funcionamento">Funcionamento</a></li>
							<li><a href="<?php echo get_permalink(get_page_by_path('aporte-a-la-sociedad')); ?>" title="<?php the_field('titulo_menu',16); ?>"><?php the_field('titulo_menu',16); ?></a></li>
							<li><a href="<?php echo get_permalink(get_page_by_path('aporte-al-pais')); ?>" title="Aporte al Pais">Aporte al Pais</a></li>
						</ul>
					</nav>
				</div>

				<div class="col-2">
					<nav class="nav nav-footer">
						<h3>Menús Adicionales</h3>
						<ul>
							<li><a href="<?php echo get_permalink(get_page_by_path('sala-de-prensa')); ?>" title="Sala de Prensa">Sala de Prensa</a></li>
							<li><a href="<?php echo get_permalink(get_page_by_path('contactenos')); ?>" title="Contáctenos">Contáctenos</a></li>
						</ul>
					</nav>
				</div>

				<div class="col-3">
					<nav class="nav nav-footer">
						<h3>Contacto</h3>
						<ul>
							<li><a href="<?php echo get_permalink(get_page_by_path('registro-proveedores')); ?>" title="<?php the_field('titulo_menu',798); ?>"><?php the_field('titulo_menu',798); ?></a></li>
							<?php /*<li><a href="#" title="Sala de Clientes">Sala de Clientes</a></li>*/?>
							<li><a href="<?php echo get_permalink(get_page_by_path('trabaje-nosotros')); ?>" title="<?php the_field('titulo_menu',801); ?>"><?php the_field('titulo_menu',801); ?></a></li>
						</ul>
					</nav>

					<nav class="nav nav-footer rede-social">
						<h3>Síguenos</h3>
						<ul>
							<?php if(get_field('url_facebook','option')){ ?>
								<li><a href="<?php the_field('url_facebook','option'); ?>" title="<?php the_field('tit_facebook','option'); ?>" target="_blank">
									<i class="fab fa-facebook-f"></i><?php the_field('tit_facebook','option'); ?>
								</a></li>
							<?php } ?>

							<?php if(get_field('url_youtube','option')){ ?>
								<li><a href="<?php the_field('url_youtube','option'); ?>" title="<?php the_field('tit_youtube','option'); ?>" target="_blank">
									<i class="fab fa-youtube"></i><?php the_field('tit_youtube','option'); ?>
								</a></li>
							<?php } ?>

							<?php if(get_field('url_twitter','option')){ ?>
								<li><a href="<?php the_field('url_twitter','option'); ?>" title="<?php the_field('tit_twitter','option'); ?>" target="_blank">
									<i class="fab fa-twitter"></i><?php the_field('tit_twitter','option'); ?>
								</a></li>
							<?php } ?>
						</ul>
					</nav>
				</div>

				<div class="col-12">
					<div class="list-txt">
						<span class="copy">
							© <?php echo get_bloginfo( 'name' ) . ' ' . date('Y'); ?>
						</span>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<button id="goTop" class="button go-item" rel="body">
		<span></span>
		<span></span>
	</button>

	

	<?php wp_footer(); ?>

	<!--<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.2.1.slim.min.js"></script>-->
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

	<script type="text/javascript">
		
		function go_item() {
			if ($(this).scrollTop() > 400){
				$('.go-item').addClass('on');
			}else{
				$('.go-item').removeClass('on');
			}
		}

		$(document).ready(function(){	

			widthWindow = $(window).width();

			if(widthWindow < 421){
				$('.menu-mobile').click(function(){
					$('.submenu').removeClass('ativo');

					$(this).toggleClass('open');
					$('.nav-principal').toggleClass('open');
				});

				$('.btn-menu-mobile').click(function(){
					$(this).parent().toggleClass('ativo');
				});
			}

			go_item();
	
		});
		

		$('.go-item').click(function(){
			item = $(this).attr('rel');
			$('html,body').animate({
				scrollTop: $(item).offset().top-20
			}, 1000);
		});

		$(window).scroll(function(){
			go_item();
		});

		$(window).resize(function(){
			$('.menu-mobile').removeClass('open');
			$('.nav-principal').removeClass('open');
			$('.submenu').removeClass('ativo');
		});

	</script>

</body>
</html>