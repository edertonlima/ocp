
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-4">
					<img src="<?php the_field('logo_footer', 'option'); ?>" alt="<?php //the_field('titulo', 'option'); ?>">
					<p class=""><?php echo get_the_excerpt(get_page_by_path('quienes-somos')); ?></p>

					<div class="list-txt">
						<?php /*<h3>Oficinas:</h3>*/ ?>
						<span>
							Oficinas:
							Av. Amazonas 1014<br>
							y Naciones Unidas<br>
							Edf. Banco La Previsora,<br>
							Torre A, 3er piso
						</span>
					</div>

					<div class="list-txt">
						<?php /*<h3>Quito - Ecuador:</h3>*/?>
						<span>
							Quito - Ecuador:
							Teléfonos:<br>
							PBX (593) 2 297 3200<br> 
							Fax: (593) 2 246 9746
						</span>
					</div>
				</div>

				<div class="col-2 col-m-1">
					<nav class="nav nav-footer">
						<h3>Menús Principales</h3>
						<ul>
							<li><a href="<?php echo get_home_url(); ?>" title="Home">Home</a></li>
							<li><a href="<?php echo get_permalink(get_page_by_path('quienes-somos')); ?>" title="Quiénes Somos">Quiénes Somos</a></li>
							<li><a href="<?php echo get_permalink(get_page_by_path('nuestra-historia')); ?>" title="Nuestra Historia">Nuestra Historia</a></li>
							<li><a href="<?php echo get_home_url(); ?>/funcionamient" title="Funcionamento">Funcionamento</a></li>
							<li><a href="#" title="Servicios">Servicios</a></li>
							<li><a href="#" title="Aporte a la Sociedad">Aporte a la Sociedad</a></li>
							<li><a href="#" title="Aporte al Pais">Aporte al Pais</a></li>
						</ul>
					</nav>
				</div>

				<div class="col-2">
					<nav class="nav nav-footer">
						<h3>Menús Adicionales</h3>
						<ul>
							<li><a href="#" title="Sala de Prensa">Sala de Prensa</a></li>
							<li><a href="#" title="Sala de Clientes">Sala de Clientes</a></li>
							<li><a href="#" title="Contáctenos">Contáctenos</a></li>
						</ul>
					</nav>
				</div>

				<div class="col-3">
					<nav class="nav nav-footer">
						<h3>Contacto</h3>
						<ul>
							<li><a href="#" title="Sala de Proveedores">Sala de Proveedores</a></li>
							<?php /*<li><a href="#" title="Sala de Clientes">Sala de Clientes</a></li>*/?>
							<li><a href="#" title="Trabaje con nosotros">Trabaje con nosotros</a></li>
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
							© OCP Ecuador 2019
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
			if (jQuery(this).scrollTop() > 400){
				$('.go-item').addClass('on');
			}else{
				$('.go-item').removeClass('on');
			}
		}

		$(document).ready(function(){	

			widthWindow = jQuery(window).width();

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

		jQuery(window).scroll(function(){
			go_item();
		});

		jQuery(window).resize(function(){
			$('.menu-mobile').removeClass('open');
			$('.nav-principal').removeClass('open');
			$('.submenu').removeClass('ativo');
		});

	</script>

</body>
</html>