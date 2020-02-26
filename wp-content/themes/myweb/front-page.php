<?php get_header(); ?>

		<!-- slide --> 
		<?php if( have_rows('itens_slide') ): ?>

				<section class="box-content box-slide"> 
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

									//$img_slide = wp_get_attachment_image_src( get_sub_field('imagem'), 'slide' ); ?>
									<div class="carousel-item <?php if($slide == 0){ echo 'active'; } ?>" style="background-image: url('<?php echo get_sub_field('imagem'); ?>');"></div>

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
													<?php the_sub_field('titulo'); ?>
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



<section class="box-content">
	<div class="container">
		<form action="<?php echo home_url(); ?>" class="form-busca" method="get">
			<fieldset>
				<input type="text" name="s" id="search" placeholder="Buscar en el sitio…" value="<?php if(isset($_GET['s'])){ echo $_GET['s']; } ?>">
				<button type="submit" class="button"><i class="fas fa-search"></i></button>
			</fieldset>

			<?php /*if(is_search()){ ?>
				<div class="col-6">
					<span class="result">
						<span><?php _e( 'Resultados da pesquisa encontrados para', 'locale' ); ?>: "<?php the_search_query(); ?></span>
					</span>
				</div>
			<?php } */?>
		</form>
	</div>
</section>

<section class="box-content prensa prensa-list">
	<div class="container">
		
		<div class="row">
			<div class="col-12">

				<h3>Notas de Prensa <a href="<?php echo get_permalink(get_page_by_path('sala-de-prensa')); ?>" class="link all-post">Todos</a></h3>
			
				<div class="carousel-itens owl-carousel owl-theme owl-loaded">
					<div class="owl-stage-outer">
						<div class="owl-stage"> 

							<?php
								$prensa_list = array(
										'posts_per_page' => 12,
										'post_type' => 'post',
										'category_name' => 'prensa'
									);
								query_posts( $prensa_list );

								while ( have_posts() ) : the_post(); ?>

									<div class="owl-item">

										<?php get_template_part( 'content-home', '' ); ?>

										<?php /*
										<a href="<?php the_permalink(); ?>" class="capa" title="">
											<?php 
												$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'list-post' ); 
												if($imagem[0]){ ?>
													<img src="<?php echo $imagem[0]; ?>">
												<?php }
											?>
										</a>
										<span class="data-prensa"><?php echo get_the_date(); ?></span>
										<a href="<?php the_permalink(); ?>;" title="" class="titulo-prensa">
											<?php the_title(); ?>
										</a>
										<span class="categoria-prensa">
											<?php 
												$categorias = wp_get_post_terms( $post->ID, 'category' );
												foreach ( $categorias as $categoria ) { ?>
													<i class="fas fa-circle"></i>
													<?php echo $categoria->name;
												}	
											?>
										</span>
										*/ ?>
									</div>

								<?php endwhile;
								wp_reset_query();
							?>

						</div>
					</div>
				</div>
							
			</div>	
		</div>

	</div>
</section>


<?php if( have_rows('itens_dados') ): ?>
	<section class="box-content no-padding-bottom">
		<div class="container">		
			<h2 class="center"><span><?php the_field('titulo_dados'); ?></span></h2>
		</div>
	</section>

	<section class="box-content bg-claro no-padding-top">
		<div class="container">
			
			<div class="row">
				<div class="col-12">

					<div class="conteudo-texto margin-top-30"><?php the_field('descricao_dados'); ?></div>
					<?php /* <p class="sub-tituto margin-top-30"><?php the_field('descricao_dados'); ?></p> */ ?>

					<ul class="icon-page count-item-5">

						<?php while ( have_rows('itens_dados') ) : the_row(); ?>

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


<?php $conocenos = get_field('itens_conocenos');
if( $conocenos ): ?>

	<section class="box-content prensa prensa-list">
		<div class="container">

			<h2 class="center"><span>CONÓCENOS</span></h2>
					
			<div class="row">

				<?php foreach( $conocenos as $item_conocenos): ?>
					<?php setup_postdata($item_conocenos); 

					//var_dump($item_conocenos); ?>

					<div class="col-6 item-list-prensa video">
						<?php 
							$video_array = get_field('video', $item_conocenos->ID);
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
						<div class="content-list-prensa">
							<span class="categoria-prensa">
								<?php 
									$categorias = wp_get_post_terms( $item_conocenos->ID, 'category' );
									foreach ( $categorias as $categoria ) { ?>
										<i class="fas fa-circle"></i>
										<?php echo $categoria->name;
									}	
								?>
							</span>
							<a href="<?php echo get_permalink( $item_conocenos->ID ); ?>" title="" class="titulo-prensa">
								<?php echo get_the_title($item_conocenos->ID); ?>
							</a>
						</div>
					</div>

				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>

			</div>
		</div>
	</section>

<?php endif; ?>


<?php get_footer(); ?>

<script type="text/javascript">
	$('#slide-home').on('slide.bs.carousel', function (e) {
		$('.text-item').removeClass('active');
	});

	$('#slide-home').on('slid.bs.carousel', function (e) {
		$('#txt-'+e.to).addClass('active');
	});
</script>

<!-- CAROUSEL -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>

<script type="text/javascript">
	$('.carousel-itens').owlCarousel({
		loop:false,
		margin:30,
		responsiveClass:true,
		nav:true,
		navText: ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
		//rtl:true,
		responsive:{
			0:{
				items:1,
				nav:true
			},
			600:{
				items:3,
				nav:false
			},
			1000:{
				items:4,
				nav:true,
				loop:false
			}
		}
	})

	var qtddot = $('.owl-dots').children().length;
	qtddot = (((qtddot*22)/2)+10)+'px';
	$('.owl-prev').css('margin-right',qtddot);
	$('.owl-next').css('margin-left',qtddot);
</script>























<?php /*

<section class="box-content box-content-blog">
	<span id="continue_sonhando" class="link_page_ancora"></span>
	<div class="container">

		<p class="sub-tituto borda-efeito">Nós tiramos do papel sua ideia e concretizamos seus sonhos</p>

		<?php if( have_rows('ico_page_superior') ): ?>
			<ul class="ico-page">
				<?php while ( have_rows('ico_page_superior') ) : the_row(); ?>

					<li>
						<img src="<?php the_sub_field('icone'); ?>" class="" alt="<?php the_sub_field('titulo'); ?>"/>
						<span><?php the_sub_field('titulo'); ?></span>
					</li>

				<?php endwhile; ?>
			</ul>
		<?php endif; ?>	

		<?php
			$prod_list = get_posts(
				array(
					'posts_per_page' => 5,
					'post_type' => 'projetos'
				)
			);

			if(count($prod_list) > 0){ ?>
				<div class="grid">
					<div class="grid-sizer"></div>

					<?php foreach ( $prod_list as $produto ) { $terms = wp_get_post_terms( $produto->ID, 'categoria_projeto' ); ?>

						<div class="grid-item">
							<div class="">
								<a href="<?php the_permalink($produto->ID); ?>" title="<?php echo $produto->post_title; ?>">
									<article class="item">

										<img src="<?php the_field('imagem_listagem', $produto->ID); ?>" class="img-grid" alt="<?php echo $produto->post_title; ?>"/>

										<div class="hover-grid">
											<div class="cont-hover">
												<img src="<?php the_field('ico_listagem',$terms[0]->taxonomy.'_'.$terms[0]->term_id); ?>" class="" alt=""/>
												<span><?php echo $produto->post_title; ?></span>
												<?php echo $terms[0]->name; ?>
											</div>
										</div>
									</article>
								</a>
							</div>
						</div>

					<?php } ?>

				</div>
			<?php }
		?>		

		<p class="sub-tituto borda-efeito">Trabalhamos para transformar ideias em serviços e produtos referências em seu segmento.</p>
		
		<?php if( have_rows('ico_page_inferior') ): ?>
			<ul class="ico-page ico-page-inferior">
				<?php while ( have_rows('ico_page_inferior') ) : the_row(); ?>

					<li>
						<img src="<?php the_sub_field('icone'); ?>" class="" alt="<?php the_sub_field('titulo'); ?>"/>
						<span><?php the_sub_field('titulo'); ?></span>
					</li>

				<?php endwhile; ?>
			</ul>
		<?php endif; ?>	
	
	</div>
</section>

<section class="box-content box-msg" style="background-image: url('<?php the_field('imagem_destaque'); ?>');">
	<div class="box-height">
		<div class="box-texto">
			
			<p class="texto"><?php the_field('texto_destaque'); ?></p>
			<?php if(get_field('sub_texto_destaque')){ ?>
				<p class="sub-texto"><?php the_field('sub_texto_destaque'); ?></p>
			<?php } ?>

		</div>
	</div>
</section>

<section class="box-content box-sobre sombra">
	<div class="container">
		
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico_cafe.png" class="ico_cafe" alt=""/>
		<p class="sub-tituto borda-efeito">Trabalhamos para transformar ideias em serviços e produtos referências em seu segmento.</p>
		<a href="#" class="button" title="Quero Agendar">Quero Agendar</a>

		<p class="sub-tituto sub-titulo-icone borda-efeito">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico_news.png" class="" alt=""/>
			Newsletter
		</p>

		<form class="news" action="javascript:">
			<input type="text" name="email_news" placeholder="Escreva seu email aqui...">
			<button class="news"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/button_news.png" class="" alt=""/></button>
		</form>

	</div>
</section>



<script type="text/javascript">
	jQuery(document).ready(function(){	    

		// FORM
		jQuery(".enviar").click(function(){
			jQuery('.enviar').html('ENVIANDO').prop( "disabled", true );
			jQuery('.msg-form').removeClass('erro ok').html('');
			var nome = jQuery('#nome').val();
			var email = jQuery('#email').val();
			var telefone = jQuery('#telefone').val();
			var assunto = jQuery('#assunto').val();
			var mensagem = jQuery('#texto').val();
			var para = '<?php get_field('email', 'option'); ?>';
			var nome_site = '<?php get_field('titulo', 'option'); ?>';

			if(email!=''){
				jQuery.getJSON("<?php echo get_template_directory_uri(); ?>/mail.php", { nome:nome, email:email, telefone:telefone, assunto:assunto, mensagem:mensagem, para:para, nome_site:nome_site }, function(result){		
					if(result=='ok'){
						resultado = 'Enviado com sucesso! Obrigado.';
						classe = 'ok';
					}else{
						resultado = result;
						classe = 'erro';
					}
					jQuery('.msg-form').addClass(classe).html(resultado);
					jQuery('form').trigger("reset");
					jQuery('.enviar').html('CADASTRAR').prop( "disabled", false );
				});
			}else{
				jQuery('.msg-form').addClass('erro').html('Por favor, digite um e-mail válido.');
				jQuery('.enviar').html('CADASTRAR').prop( "disabled", false );
			}
		});
		
	});

	jQuery(window).load(function(){
		jQuery('.grid-item').each(function(){
			jQuery('.hover-grid',this).height(jQuery(this).height());
		});
	});

	jQuery(window).resize(function(){
		jQuery('.grid-item').each(function(){
			jQuery('.hover-grid',this).height(jQuery(this).height());
		});
	});
</script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/masonry.pkgd.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/imagesloaded.pkgd.js" type="text/javascript"></script>
<script type="text/javascript">
	var $grid = jQuery('.grid').masonry({
		itemSelector: '.grid-item',
		percentPosition: true,
		columnWidth: '.grid-sizer'
	});
	// layout Masonry after each image loads
	$grid.imagesLoaded().progress( function() {
		$grid.masonry();
	});  
</script>

*/ ?>