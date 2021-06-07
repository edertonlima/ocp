<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="breadcrumbs">
			<ul class="container">
				<li><a href="<?php echo get_home_url(); ?>" title="Home">Home</a></li>
				<li><?php the_field('titulo_menu'); ?></li>
			</ul>
		</div>

		<section class="box-content first-section"> 
			<div class="container">

				<div class="row">
					<div class="col-12">

						<h1 class="tit-principal center"><span><?php the_title(); ?></span></h1>

							<!--<ul class="icon-page count-item-5">-->
							<ul class="list-category list-category-mini">
								<li class="off">
									<a href="<?php echo get_permalink(get_page_by_path('contactenos')); ?>" title="Geral">
										<img src="<?php the_field('icone', get_page_by_path('contactenos') ); ?>" alt="Geral">
										<span>Geral</span>
									</a>
								</li>

								<li>
									<a href="">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-contacto-2.png" align="">
										<span>Comunidad</span>
									</a>
								</li>

								<li>
									<a href="<?php echo get_permalink(get_page_by_path('trabaje-nosotros')); ?>" title="">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-contacto-3.png" align="">
										<span>Trabaje con nosostros</span>
									</a>
								</li>

								<li>
									<a href="<?php echo get_permalink(get_page_by_path('sala-proveedores')); ?>" title="">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-contacto-4.png" align="">
										<span>Registro proveedores</span>
									</a>
								</li>

								<li>
									<a href="">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-contacto-5.png" align="">
										<span>Facturación Electrónica</span>
									</a>
								</li>
							</ul>

					</div>
				</div>

			</div>
		</section>

		<section class="box-content no-padding bg-claro">	
			<div class="container">

				<ul class="ico-redes">
					<li>
						<a href="" title="">
							<i class="fab fa-facebook-f"></i>
						</a>
					</li>
					<li>
						<a href="" title="">
							<i class="fab fa-youtube"></i>
						</a>
					</li>
					<li>
						<a href="" title="">
							<i class="fab fa-twitter"></i>
						</a>
					</li>
				</ul>

			</div>
		</section>

		<section class="box-content"> 
			<div class="container">

				<div class="row">
					<div class="col-12">

						<h2 class="center center-mobile"><span>CONTACTO</span></h2>
						<p class="sub-tituto mini justify txt-contato">Si desea ofertar sus servicios o productos haga en <a href="<?php echo get_permalink(get_page_by_path('sala-proveedores')); ?>" title="registro de proveedores">registro de proveedores.</a> Si desea registrar su hoja de vida haga en <a href="<?php echo get_permalink(get_page_by_path('trabaje-nosotros')); ?>" title="trabaje con nosotros">trabaje con nosotros.</a> Para cualquier otro asunto, llene el siguiente formulario:</p>

						<form class="contacto" id="contacto" action="javascript:" method="post">
							<fieldset>
								<label for="nombre">Nombre*</label>
								<input type="text" name="nombre" id="nombre">
							</fieldset>

							<fieldset>
								<label for="telefono">Teléfono*</label>
								<input type="text" name="telefono" id="telefono">
							</fieldset>

							<fieldset>
								<label for="direccion">Dirección*</label>
								<input type="text" name="direccion" id="direccion">
							</fieldset>

							<fieldset>
								<label for="email">Correo electrónico*</label>
								<input type="text" name="email" id="email">
							</fieldset>

							<fieldset>
								<label for="telefono">Mensaje*</label>
								<textarea name="mensaje" id="mensaje"></textarea>
							</fieldset>

							<fieldset>
								<p class="msg-form center off"></p>
								<button class="enviar right">ENVIAR</button>
							</fieldset>
						</form>

					</div>
				</div>

			</div>
		</section>

	<?php endwhile; ?>

<?php get_footer(); ?>