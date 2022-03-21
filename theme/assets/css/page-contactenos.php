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


							<?php if( have_rows('links-contactenos') ): ?>
								<!--<ul class="icon-page count-item-5">-->
								<ul class="list-category list-category-mini"> 

									<?php
										while ( have_rows('links-contactenos') ) : the_row(); ?>
											<li>
												<a <?php if(get_sub_field('link')){ echo 'href="' . get_permalink(get_sub_field('link')) . '"'; } ?> title="<?php the_sub_field('titulo'); ?>">
													<img src="<?php the_sub_field('icone'); ?>" alt="<?php the_sub_field('titulo'); ?>">
													<span><?php the_sub_field('titulo'); ?></span>
												</a>
											</li>
										<?php endwhile;
									?>

								</ul>
							<?php endif; ?>

					</div>
				</div>

			</div>
		</section>

		<section class="box-content no-padding bg-claro">	
			<div class="container">

				<ul class="ico-redes">
					<?php if(get_field('url_facebook','option')){ ?>
						<li><a href="<?php the_field('url_facebook','option'); ?>" title="<?php the_field('tit_facebook','option'); ?>" target="_blank">
							<i class="fab fa-facebook-f"></i>
						</a></li>
					<?php } ?>

					<?php if(get_field('url_youtube','option')){ ?>
						<li><a href="<?php the_field('url_youtube','option'); ?>" title="<?php the_field('tit_youtube','option'); ?>" target="_blank">
							<i class="fab fa-youtube"></i>
						</a></li>
					<?php } ?>

					<?php if(get_field('url_twitter','option')){ ?>
						<li><a href="<?php the_field('url_twitter','option'); ?>" title="<?php the_field('tit_twitter','option'); ?>" target="_blank">
							<i class="fab fa-twitter"></i>
						</a></li>
					<?php } ?>

					<?php if(get_field('url_linkedin','option')){ ?>
						<li><a href="<?php the_field('url_linkedin','option'); ?>" title="<?php the_field('tit_linkedin','option'); ?>" target="_blank">
							<i class="fab fa-linkedin"></i>
						</a></li>
					<?php } ?>
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