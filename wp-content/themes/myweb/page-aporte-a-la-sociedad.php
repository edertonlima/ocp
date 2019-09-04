<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="breadcrumbs">
			<ul>
				<li><a href="<?php echo get_home_url(); ?>" title="Home">Home</a></li>
				<li>Aporte a la sociedad</li>
			</ul>
		</div>

		<section class="box-content"> 
			<div class="container">

				<div class="row">
					<div class="col-12">

						<h2 class="center"><span>APORTE A LA SOCIEDAD</span></h2>

						<ul class="icon-page count-item-4">

							<li class="info-dados">						
								<span class="titulo center cor3">Educación<span class="num cor3">60%</span></span>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-aporte-1.png" align="">
							</li>
							
							<li class="info-dados">						
								<span class="titulo center laranja">Salud<span class="num laranja">20%</span></span>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-aporte-2.png" align="">
							</li>

							<li class="info-dados">						
								<span class="titulo center verde-limao">Productividad<span class="num verde-limao">10%</span></span>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-aporte-3.png" align="">
							</li>

							<li class="info-dados">						
								<span class="titulo center lilas">Otros<span class="num lilas">10%</span></span>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-aporte-4.png" align="">
							</li>

						</ul>

					</div>

					<div class="col-12">

						<div class="row-mini block-center block-inline">
							<div class="col-4 item-block">
								<span class="titulo">MEMORIA DE SOSTENIBILIDAD 2012</span>
								<div class="link-mais">
									<a href="#" title="Código de Ética y política antifraude (PDF, 657 kB)" class="link cor3">
										<i class="fas fa-arrow-circle-down cor3"></i> Descargar (PDF, 13.9 MB)
									</a>
								</div>
							</div>

							<div class="col-4 item-block">
								<span class="titulo">MEMORIA DE SOSTENIBILIDAD 2013</span>
								<div class="link-mais">
									<a href="#" title="Código de Ética para proveedores (PDF, 373 kB)" class="link cor3">
										<i class="fas fa-arrow-circle-down cor3"></i> Descargar (PDF, 21.3 MB)
									</a>
								</div>
							</div>

							<div class="col-4 item-block">
								<span class="titulo">MEMORIA DE SOSTENIBILIDAD 2014</span>
								<div class="link-mais">
									<a href="#" title="Código de Ética para proveedores (PDF, 373 kB)" class="link cor3">
										<i class="fas fa-arrow-circle-down cor3"></i> Descargar (PDF, 14.6 MB)
									</a>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
		</section>

		<section class="box-content"> 
			<div class="container">

				<div class="row">
					<div class="col-12">

						<h2 class="center"><span>PROYECTOS DE GRAN IMPACTO</span></h2>

						<ul class="list-category">
							<li>
								<a href="<?php echo get_term_link(2); ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-aporte-1.png" align="">
									<span class="cor3">Educación</span>
								</a>
							</li>
							<li>
								<a href="<?php echo get_term_link(3); ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-aporte-2.png" align="">
									<span class="laranja">Salud</span>
								</a>
							</li>
							<li>
								<a href="<?php echo get_term_link(4); ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-aporte-3.png" align="">
									<span class="verde-limao">Productividad</span>
								</a>
							</li>
							<li>
								<a href="<?php echo get_term_link(5); ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-aporte-4.png" align="">
									<span class="lilas">Otros</span>
								</a>
							</li>
						</ul>

						<p class="text-destaque center"><br><br>No se encontraron proyectos</p>

					</div>
				</div>

			</div>
		</section>


	<?php endwhile; ?>

<?php get_footer(); ?>