<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="breadcrumbs">
			<ul>
				<li><a href="<?php echo get_home_url(); ?>" title="Home">Home</a></li>
				<li>Quiénes Somos</li>
			</ul>
		</div>

<section class="box-content"> 
	<div class="container">

		<div class="row">
			<div class="col-12">

				<h2 class="center"><span>QUIÉNES SOMOS</span></h2>
				<p class="sub-tituto mini">Bienvenido a OCP Ecuador. Somos una empresa privada que lleva 15 años transportando responsablemente petróleo en benefício del país y la región.</p>

			</div>
		</div>

	</div>
</section>

<section class="box-content no-padding">
	<div class="container">
		<div class="slide">

			<div id="slide-mision" class="carousel slide slide-quienes-somos" data-ride="carousel" data-interval="80000">
				<ol class="carousel-indicators">
					<li data-target="#slide-mision" data-slide-to="0" class="active"></li>
					<li data-target="#slide-mision" data-slide-to="1"></li>
					<li data-target="#slide-mision" data-slide-to="2"></li>
				</ol>

				<div class="carousel-inner">
					<div class="carousel-item active" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-slide.jpg');">
					</div>
					<div class="carousel-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-slide-1.jpg');">
					</div>
					<div class="carousel-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-slide-2.jpg');">
					</div>
				</div>

				<div class="mask-slide cor1 lg"></div>

				<div class="text-item text-fixo lg">				
					<div class="vertical-center">
						<div class="content-vertical">
							<span class="titulo-slide justify active">
								<h2 class="center extra-grande">MISIÓN</h2>
							</span>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<div class="container">
	<section class="box-content bg-claro">		
			<p class="text-destaque grande">Contribuir con el desarrollo del país, a través de una operación de transporte de crudo confiable, segura, eficiente y comprometida con el ambiente.</p>		
	</section>
</div>

<section class="box-content no-padding-bottom">
	<div class="container">
		<div class="slide">

			<div id="slide-vision" class="carousel slide slide-quienes-somos" data-ride="carousel" data-interval="80000">
				<ol class="carousel-indicators">
					<li data-target="#slide-vision" data-slide-to="0" class="active"></li>
					<li data-target="#slide-vision" data-slide-to="1"></li>
					<li data-target="#slide-vision" data-slide-to="2"></li>
				</ol>

				<div class="carousel-inner">
					<div class="carousel-item active" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-slide.jpg');">
					</div>
					<div class="carousel-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-slide-1.jpg');">
					</div>
					<div class="carousel-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-slide-2.jpg');">
					</div>
				</div>

				<div class="mask-slide cor1 lg"></div>

				<div class="text-item text-fixo lg">				
					<div class="vertical-center">
						<div class="content-vertical">
							<span class="titulo-slide justify active">
								<h2 class="center extra-grande">VISIÓN</h2>
							</span>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<div class="container">
	<section class="box-content bg-claro">	
		<p class="text-destaque grande">Alcanzar el éxito organizacional, trabajando con compromiso, creatividad y entusiasmo para:
			<br><br>
			I. Ser la opción preferida de transporte de crudo, manteniendo nuestros niveles de calidad de servicio.
			<br><br>
			II.Desarrollar nuevas oportunidades de negocio rentables y exitosas.
			<br><br>
			III.Promover el desarrollo de nuestros colaboradores en un ambiente de superación y aprendizaje
		</p>
	</section>
</div>


<section class="box-content no-padding-bottom">
	<div class="container">
		<div class="slide">

			<div id="slide-valores" class="carousel slide slide-quienes-somos" data-ride="carousel" data-interval="80000">
				<ol class="carousel-indicators">
					<li data-target="#slide-valores" data-slide-to="0" class="active"></li>
					<li data-target="#slide-valores" data-slide-to="1"></li>
					<li data-target="#slide-valores" data-slide-to="2"></li>
				</ol>

				<div class="carousel-inner">
					<div class="carousel-item active" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-slide.jpg');">
					</div>
					<div class="carousel-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-slide-1.jpg');">
					</div>
					<div class="carousel-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-slide-2.jpg');">
					</div>
				</div>

				<div class="mask-slide cor1 lg"></div>

				<div class="text-item text-fixo lg">				
					<div class="vertical-center">
						<div class="content-vertical">
							<span class="titulo-slide active">
								<h2 class="center extra-grande">VALORES</h2>
							</span>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<div class="container">
	<section class="box-content bg-claro">
		<ul class="icon-page itens-style-2 count-item-4">
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-11.png" align="">
				<div class="vertical-center">
					<div class="content-vertical">
						<span class="titulo center cor3">COMPROMISO</span>
					</div>
				</div>
				<p>con la seguridad, la comunidad y el ambiente.</p>
			</li>

			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-12.png" align="">
				<div class="vertical-center">
					<div class="content-vertical">
						<span class="titulo center cor4">RESPETO</span>
					</div>
				</div>
				<p>a la Ley, a la autoridad, a nuestros colaboradores y a todos con quienes nos relacionamos.</p>
			</li>

			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-13.png" align="">
				<div class="vertical-center">
					<div class="content-vertical">
						<span class="titulo center verde-limao">INTEGRIDAD Y TRANSPARENCIA</span>
					</div>
				</div>
				<p>en la ejecución de todas nuestras actividades.</p>		
			</li>

			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-14.png" align="">
				<div class="vertical-center">
					<div class="content-vertical">
						<span class="titulo center lilas">LEALTAD</span>
					</div>
				</div>
				<p>y trabajo en equipo para el logro de nuestros objetivos.</p>
			</li>
		</ul>
	</section>
</div>

		<section class="box-content"> 
			<div class="container">

				<div class="row">
					<div class="col-12">

						<h2 class="center"><span>CÓDIGO DE ÉTICA</span></h2>
						<p class="sub-tituto mini">Todos nuestros procesos son transparentes y nuestro comportamiento es consistente con los principios éticos que mantenemos desde el inicio de nuestra operación. Por eso compartimos con ustedes nuestro Código de Ética y Política Antifraude y el Código de Ética de proveedores.</p>

						<div class="link-mais margin-top-20 margin-bottom-40 center">
							<a href="#" title="Denuncia" class="link link-bloco">
								Denuncia
							</a>
						</div>

						<div class="block-center">
							<div class="item-block bg-claro">
								<span class="titulo center">CÓDIGO DE ÉTICA Y POLÍTICA ANTIFRAUDE</span>
								<div class="link-mais margin-top-30">
									<a href="#" title="Código de Ética y política antifraude (PDF, 657 kB)" class="link cor3 center">
										<i class="fas fa-arrow-circle-down cor3"></i> Código de Ética y política antifraude (PDF, 657 kB)
									</a>
								</div>
							</div>

							<div class="item-margin"></div>

							<div class="item-block bg-claro">
								<span class="titulo center">CÓDIGO DE ÉTICA PARA PROVEEDORES</span>
								<div class="link-mais margin-top-30">
									<a href="#" title="Código de Ética para proveedores (PDF, 373 kB)" class="link cor3 center">
										<i class="fas fa-arrow-circle-down cor3"></i> Código de Ética para provedores (PDF, 373 kB)
									</a>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
		</section>
<?php /*
		<section class="box-content"> 
			<div class="container">

				<div class="row">
					<div class="col-12">

						<h2 class="center"><span>NUESTRA HISTORIA</span></h2>
						<p class="text-destaque justify">OCP Ecuador ha apoyado al crecimiento y dinamismo de la economía del país mediante el transporte de 815 millones de barriles de petróleo, en más de 1500 buques y permitiendo que el crudo ecuatoriano llegue a mercados internacionales, lo que se traduce en obras y beneficios para los ecuatorianos.</p>

						<div class="link-mais margin-top-20 center">
							<a href="<?php echo get_permalink(get_page_by_path('nuestra-historia')); ?>" title="Conoce más" class="link cor1">
								<i class="fas fa-plus-circle cinza"></i> Conoce más
							</a>
						</div>

					</div>
				</div>

			</div>
		</section>
*/ ?>
	<?php endwhile; ?>

<?php get_footer(); ?>