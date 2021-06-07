<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="breadcrumbs">
			<ul class="container">
				<li><a href="<?php echo get_home_url(); ?>" title="Home">Home</a></li>
				<li><?php the_field('titulo_menu'); ?></li>
			</ul>
		</div>

		<section class="box-content no-padding-top margin-top-15 contacto">
			<div class="container">
				<div class="slide">

					<div id="slide-mision" class="carousel slide slide-quienes-somos" data-ride="carousel" data-interval="80000">
						<ol class="carousel-indicators">
							<!--<li data-target="#slide-mision" data-slide-to="0" class="active"></li>-->
						</ol>

						<div class="carousel-inner">
							<?php $imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'wide' ); ?>
							<div class="carousel-item active" style="background-image: url('<?php echo $imagem[0]; ?>');"></div>
						</div>

						<div class="mask-slide cor1 lg"></div>

						<div class="text-item text-fixo lg active">				
							<div class="vertical-center">
								<div class="content-vertical">
									<span class="titulo-slide active">
										<h2 class=""><?php the_title(); ?></h2>
									</span>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>


		<?php if( have_rows('conteudo_flexivel') ):
			while( have_rows('conteudo_flexivel') ): the_row();

				switch (get_row_layout()) {
					case 'conteudo': ?>

						<section class="box-content no-padding-top"> 
							<div class="container">

								<?php if(get_sub_field('titulo')){ ?>
									<h2 class="center"><span><?php the_sub_field('titulo'); ?></span></h2>
								<?php } ?>

								<?php if(get_sub_field('subtitulo')){ ?>
									<p class="sub-tituto center"><?php the_sub_field('subtitulo'); ?></p>
								<?php } ?>

								<?php if(get_sub_field('texto')){ ?>
									<div class="conteudo-texto mini margin-top-40"><?php the_sub_field('texto'); ?></div>
								<?php } ?>

							</div>
						</section>	

					<?php break;


					case 'acordion': ?>

						<section class="box-content no-padding-top"> 
							<div class="container">

								<div class="conteudo-texto mini">
									
									<?php if(get_sub_field('acordion')): ?>

										<ul class="acordion">

										<?php while(has_sub_field('acordion')): ?>

											<li>
												<?php the_sub_field('titulo');

												if(get_sub_field('texto')){ ?>
													
													<i class="fas fa-chevron-down btn-acordion"></i>
													<div class="cont-acordion">
														<?php the_sub_field('texto'); ?>
													</div>

												<?php } ?>
											</li>

										<?php endwhile; ?>

										</ul>

									<?php endif; ?>

								</div>

							</div>
						</section>	

					<?php break;


					case 'video': ?>

						<section class="box-content no-padding-top prensa prensa-list">
							<div class="container">
										
								<div class="row conteudo-texto">
									<div class="col-m-2 col-8 item-list-prensa video">

											<?php 
												$video_array = get_sub_field('video');
												preg_match('/src="(.+?)"/', $video_array, $matches);
												$video_url = $matches[1];

												$video_id = explode("embed/", $video_url);
												$video_id = $video_id[1];
												$video_id = explode("?feature=oembed", $video_id);
												$video_id = $video_id[0];
												$thumbnail="https://img.youtube.com/vi/".$video_id."/maxresdefault.jpg";
											?>

											<a data-fancybox href="<?php echo $video_url; ?>" class="capa">
												<img src="<?php echo $thumbnail; ?>">
											</a>

									</div>
								</div>

							</div>
						</section>

					<?php break;

					case 'imagem': ?>

						<section class="box-content no-padding-top">
							<?php if(get_sub_field('tamanho-imagem')){ ?>
								<div class="container">
							<?php } ?>

								<div class="conteudo-texto <?php if(get_sub_field('tamanho-imagem')){ echo 'full'; } ?>">
									<?php $image = get_sub_field('imagem'); ?>
									<img src="<?php echo esc_url($image['sizes']['slide']); ?>">
								</div>

							<?php if(get_sub_field('tamanho-imagem')){ ?>
								</div>
							<?php } ?>
						</section>	

					<?php break;

					case 'arquivo': ?>

						<section class="box-content no-padding-top">
							<div class="container">

								<div class="link-mais center">
									<a href="<?php the_sub_field('arquivo'); ?>" target="_blank" title="<?php the_sub_field('titulo-arquivo'); ?>" class="link link-bloco">
										<?php the_sub_field('titulo-arquivo'); ?>
									</a>
								</div>

							</div>
						</section>	

					<?php break;

					case 'slide-destaque':

						$images = get_sub_field('imagens-slide'); ?>

						<section class="box-content no-padding-top">
							<div class="slide">

								<div id="slide" class="carousel slide" data-ride="carousel" data-interval="80000">
									<ol class="carousel-indicators">
								        <?php 
								        	$slide_elem = 0;
								        	foreach( $images as $image ): ?>
								        		<li data-target="#slide" data-slide-to="<?php echo $slide_elem; ?>" class="<?php if($slide_elem == 0){ echo 'active'; } ?>"></li>
								        		<?php $slide_elem = $slide_elem+1;
								        	endforeach;
								        ?>
									</ol>

									<div class="carousel-inner">
								        <?php 
								        	$slide_elem = 0;
								        	foreach( $images as $image ): ?>
								        		<div class="carousel-item <?php if($slide_elem == 0){ echo 'active'; } ?>" style="background-image: url('<?php echo esc_url($image['sizes']['slide']); ?>');"></div>
								        	<?php $slide_elem = $slide_elem+1;
								        	endforeach;
								        ?>
									</div>

									<div class="mask-slide cor1 lg"></div>

									<div class="text-item active">				
										<div class="vertical-center">
											<div class="content-vertical">
												<span class="titulo-slide active">
													<?php the_sub_field('texto-destaque'); ?>
												</span>
											</div>
										</div>
									</div>
								</div>

							</div>
						</section>

					<?php break;

				}
			
			endwhile;
		endif; ?>


		<section class="box-content no-padding-top"> 
			<div class="container">

				<div class="row">
					<div class="col-12">

<!--						<ul class="container-mini list-cont">
							<li>1. Se deberán adjuntar en un archivo PDF los siguientes documentos actualizados:</li>

							<li>2. Llenar el Formulario de Matriculación Proveedores (<a href="#">FMP</a>):</li>

							<li>3. Para proveedores Nacionales, llenar y firmar por la persona habilitada para tal efecto, el <a href="#">Formato de Transferencia Bancaria Nacional.</a></li>

							<li>4. Para proveedores Internacionales, llenar y firmar por la persona habilitada para tal efecto el <a href="#">Formato de Transferencia Bancaria Internacional</a>, en inglés <a href="#">Wire Transfer Instructions.</a></li>

							<li>5. Para todos los proveedores llenar <a href="#">Formulario de declaración de origen lícito de bienes o recursos económicos</a>.</li>
						</ul>

						<p class="sub-tituto mini justify">Para mayor información contactarse con el departamento de compras: (593 2) 2973-200, ext. 5280
							<br><br>
						Formulario de contacto:</p>-->


						<form class="contacto" id="contacto" action="javascript:" method="post">
							<fieldset class="no-margin">
								<label for="nombre">Nombre de la Empresa o Razón Social*</label>
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
								<label for="Ciudad">Ciudad*</label>
								<input type="text" name="Ciudad" id="Ciudad">
							</fieldset>

							<fieldset>
								<label for="País">País*</label>
								<input type="text" name="País" id="País">
							</fieldset>

							<fieldset>
								<label for="Página Web">Página Web*</label>
								<input type="text" name="Página Web" id="Página Web">
							</fieldset>

							<fieldset>
								<label for="nombre-contacto">Nombre del contacto para solicitudes de cotización*</label>
								<input type="text" name="nombre-contacto" id="nombre-contacto">
							</fieldset>

							<fieldset>
								<label for="email">Correo electrónico*</label>
								<input type="text" name="email" id="email">
							</fieldset>

							<fieldset>
								<label for="mensaje">Producto/Servicio que oferece (breve descripción) 600 caracteres max*</label>
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

<script>
	$('.btn-acordion').click(function(){

		if($(this).hasClass('on')){
			$(this).removeClass('on fa-times').addClass('fa-chevron-down');
			$(this).siblings('.cont-acordion').hide();
		}else{
			$(this).addClass('on fa-times').removeClass('fa-chevron-down');
			$(this).siblings('.cont-acordion').show();
		}
		
	});
</script>