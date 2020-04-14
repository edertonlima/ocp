<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="breadcrumbs">
			<ul class="container">
				<li><a href="<?php echo get_home_url(); ?>" title="Home">Início</a></li> 
				<li><?php the_field('titulo_menu'); ?></li>
			</ul>
		</div>

		<!-- slide --> 
		<?php if( have_rows('itens_slide') ): ?>

				<section class="box-content first-section box-slide"> 
					<div class="slide">

						<div id="slide-home" class="carousel slide" data-ride="carousel" data-interval="8000">

							<?php if(count(get_field('itens_slide')) > 1){ ?>
								<ol class="carousel-indicators">

									<?php $slide = 0;
									while ( have_rows('itens_slide') ) : the_row(); ?>

										<li data-target="#slide-home" data-slide-to="<?php echo $slide; ?>" class="<?php if($slide == 0){ echo 'active'; } ?>"></li>

										<?php $slide = $slide+1;
									endwhile; ?>

								</ol>
							<?php } ?>
							
							<div class="carousel-inner">
								<?php $slide = 0;
								while ( have_rows('itens_slide') ) : the_row(); 

									$image = get_sub_field('imagem');
									$image = esc_url($image['sizes']['slide']);

									if(($GLOBALS['mobile']) AND (get_sub_field('imagem_mobile'))){
										$image = get_sub_field('imagem_mobile');
									}

									//$img_slide = wp_get_attachment_image_src( get_sub_field('imagem'), 'slide' ); ?>
									<div class="carousel-item <?php if($slide == 0){ echo 'active'; } ?>" style="background-image: url('<?php echo $image; ?>');"></div>

									<?php $slide = $slide+1;
								endwhile; ?>
							</div>
							

							<div class="mask-slide cor2"></div>

							
								<?php $slide = 0;
								while ( have_rows('itens_slide') ) : the_row(); ?>
									<div class="text-item <?php if($slide == 0){ echo 'active'; } ?>" id="txt-<?php echo $slide; ?>">
										<div class="vertical-center">
											<div class="content-vertical">
												<span class="titulo-slide grande">
													<?php the_sub_field('titulo'); ?> aa
													<?php if(get_sub_field('link')){ ?>
														<a href="<?php the_sub_field('link'); ?>" class="link inline">Lea más</a>
													<?php } ?>
												</span>
											</div>
										</div>
									</div>
									<?php $slide = $slide+1;
								endwhile; ?>
							

							<a class="carousel-control-prev" href="#slide-home" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#slide-home" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>

					</div>
				</section>

		<?php endif; ?>


 		<?php if( have_rows('itens_dados') ): ?>
			<section class="box-content">
				<div class="container">		
					<h1 class="tit-principal center"><span><?php the_field('titulo_dados'); ?></span></h1>
				</div>
			</section>

			<section class="box-content bg-claro no-padding-top">
				<div class="container">
					
					<div class="row">
						<div class="col-12">

							<div class="conteudo-texto margin-top-30"><?php the_field('descricao_dados'); ?></div>
							<?php /* <p class="sub-tituto margin-top-30"><?php the_field('descricao_dados'); ?></p> */ ?>
							<?php 
								if(count(get_field('itens_dados')) > 5){
									$qtdCol = 4;
									$newRow = 5;
								}else{
									$qtdCol = count(get_field('itens_dados'));
									$newRow = 0;
								}
							?>
							<ul class="icon-page count-item-<?echo $qtdCol; ?>">

								<?php 
								$i = 0;
								while ( have_rows('itens_dados') ) : the_row(); 
									$i++; 
									if($newRow == $i){
										echo '</ul>';
										echo '<ul class="icon-page count-item-'.$qtdCol.'">';
									} ?>

									<li>
										<img src="<?php the_sub_field('icone'); ?>" align="">
										<span class="titulo center"><span class="num" style="color: <?php the_sub_field('cor'); ?>"><?php the_sub_field('dados'); ?></span></span>
										<p class="destaque" style="color: <?php the_sub_field('cor'); ?>"><?php the_sub_field('titulo'); ?></p>
									</li>

		 						<?php endwhile; ?>

							</ul>

							<?php /*
							<div class="link-mais center">
								<a href="<?php echo get_home_url(); ?>/proyectos" title="Conoce más de nuestros logros" class="link cor1">
									<i class="fas fa-plus-circle cinza"></i> Conoce más de nuestros logros
								</a>
							</div>
							*/ ?>

						</div>
					</div>
				
				</div>
			</section>
		<?php endif; ?>


		<?php if( have_rows('conteudo_flexivel') ):
			while( have_rows('conteudo_flexivel') ): the_row();

				switch (get_row_layout()) {
					case 'conteudo': ?>

						<section class="box-content no-padding-bottom no-padding-top-mobile"> 
							<div class="container">

								<?php if(get_sub_field('titulo')){ ?>
									<h2 class="center"><span><?php the_sub_field('titulo'); ?></span></h2>
								<?php } ?>

								<?php if(get_sub_field('subtitulo')){ ?>
									<p class="sub-tituto center"><?php the_sub_field('subtitulo'); ?></p>
								<?php } ?>

								<?php if(get_sub_field('texto')){ ?>
								</div>
									<div class="conteudo-texto margin-top-40 bg-claro">
										<div class="container padding-top-20 padding-bottom-20">
											<?php the_sub_field('texto'); ?>
										</div>
									</div>
								<?php } ?>

						</section>	

					<?php break;

					case 'video': ?>

						<section class="box-content no-padding-bottom prensa prensa-list">
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

						<section class="box-content no-padding-bottom hide-mobile">
							<?php if(get_sub_field('tamanho-imagem')){ ?>
								<div class="container">
							<?php } ?>

								<div class="conteudo-texto center <?php if(get_sub_field('tamanho-imagem')){ echo 'normal'; }else{ echo 'full';} ?>">
									<?php $image = get_sub_field('imagem'); ?>
									<img src="<?php echo esc_url($image['sizes']['slide']); ?>">
								</div>

							<?php if(get_sub_field('tamanho-imagem')){ ?>
								</div>
							<?php } ?>
						</section>	

					<?php break;

					case 'arquivo': ?>

						<section class="box-content no-padding-bottom">
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

						<section class="box-content no-padding-bottom">
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

									<div class="text-item">				
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
		endif;
 ?>


	<section class="box-content hide-mobile">
		<?php if(get_field('mostrar_etica')){ ?>
			<div class="container">

				<div class="row">
					<div class="col-12">

						<h2 class="center"><span><?php the_field('titulo_etica'); ?></span></h2>
						<p class="sub-tituto mini"><?php the_field('descricao_etica'); ?></p>

					</div>

						<div class="block-center block-foto">

							<?php while ( have_rows('arquivos_etica') ) : the_row();
								$arquivo = get_sub_field('arquivo');
								$filesize = filesize( get_attached_file( $arquivo['ID'] ) );
								$filesize = size_format($filesize, 2);
								$imagem = get_sub_field('foto'); ?>

								<div class="col-4">
									<img src="<?php echo $imagem['sizes']['list-post']; ?>" align="" alt="<?php the_sub_field('nome'); ?>">
									<div class="cont-block bg-claro">
										<span class="nome cor3"><?php the_sub_field('nome'); ?></span>
										
										<div class="link-mais">
											<a href="<?php echo $arquivo['url']; ?>" title="Código de Ética y política antifraude (PDF, 657 kB)" target="_blank" class="link cor3">
												<span class="titulo"><?php the_sub_field('titulo'); ?></span>
												<i class="fas fa-arrow-circle-down cor3"></i>
											</a>
										</div>
									</div>
								</div>

	 						<?php endwhile; ?>
						</div>

						<div class="link-mais margin-top-40 center">
							<a href="<?php the_field('link_etica'); ?>" target="_blank" title="<?php the_field('titulo_link_etica'); ?>" class="link link-bloco">
								<?php the_field('titulo_link_etica'); ?>
							</a>
						</div>

					
				</div>

			</div>
		<?php } ?>
	</section>
	
	<?php endwhile; ?>

<?php get_footer(); ?>

<script type="text/javascript">
	$('#slide-home').on('slide.bs.carousel', function (e) {
		$('.text-item').removeClass('active');
	});

	$('#slide-home').on('slid.bs.carousel', function (e) {
		$('#txt-'+e.to).addClass('active');
	});
</script>