<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<section class="box-content"> 
			<div class="container">

				<h2 class="center"><span>PROCESO DE FUNCIONAMIENTO DEL OCP</span></h2>
				<p class="sub-tituto center">Conoce cómo funcionamos y nuestras estaciones.</p>

			</div>
		</section>

		<section class="box-content"> 
			<div class="container">

				<div class="iframe-video">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/video-funcionamento.jpg" >
				</div>

			</div>
		</section>

		<section class="box-content"> 
			<div class="container">

				<h2 class="center"><span>RUTA DE LAS ESTACIONES</span></h2>
				<p class="sub-tituto center">Mapa interactivo de la ruta de las estaciones y sus caracerísticas básicas</p>

			</div>
		</section>

		<section class="box-content no-padding-top"> 
			<div class="slide">

				<div id="slide-mision" class="carousel slide" data-ride="carousel" data-interval="80000">
					<div class="carousel-inner">
						<div class="carousel-item active" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-slide.jpg');">
						</div>
					</div>

					<div class="mask-slide cor1 lg"></div>

					<div class="text-item">				
						<div class="vertical-center">
							<div class="content-vertical">
								<span class="titulo-slide active">
									Política Integrada de Gestión Ambiental, Seguridad Industrial y Salud Ocupacional
								</span>
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

						<h2 class="center"><span>CUIDADO DEL AMBIENTE</span></h2>
						<p class="text-destaque">En concordancia con nuestra Misión y Valores Corporativos, todas las operaciones que se desarrollan en OCP, se orientan a la protección y conservación del medio ambiente, así como el cumplimiento legal vigente en materia ambiental.
						<br><br>
						La identi!cación de aspectos e impactos, su análisis, seguimiento, control y minimización, constituyen factores importantes en la gestión ambiental de nuestra empresa. Este análisis se ejecuta a través de monitoreos internos y de cumplimiento legal.
						<br><br>
						Los objetivos en materia ambiental, se hallan enfocados hacia la minimización de los impactos ambientales y se encuentran plasmados mediante una gestión adecuada para el tratamiento de aspectos ambientales identi!cados.</p>

					</div>
				</div>

			</div>
		</section>

		<section class="box-content"> 
			<div class="container">

				<div class="row">
					<div class="col-12">

						<h2 class="center"><span>OPERACIÓN SEGURA</span></h2>
						<p class="text-destaque ">El compromiso de la Dirección de la Empresa ha permitido implementar e integrar un Sistema de Gestión de Seguridad y Salud en el Trabajo, tomando como referencia las directrices de la Organización Internacional de Trabajo, el Instrumento Andino de Seguridad y Salud en el Trabajo y el marco legal vigente en el Ecuador.</p>

					</div>
				</div>

			</div>
		</section>

	<?php endwhile; ?>

<?php get_footer(); ?>