<?php get_header(); ?>

<!-- slide --> 
<section class="box-content box-slide"> 
	<div class="slide">

		<div id="slide-home" class="carousel slide" data-ride="carousel" data-interval="8000">
			<ol class="carousel-indicators">
				<li data-target="#slide-home" data-slide-to="0" class="active"></li>
				<li data-target="#slide-home" data-slide-to="1"></li>
				<li data-target="#slide-home" data-slide-to="2"></li>
			</ol>

			<div class="carousel-inner">
				<div class="carousel-item active" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-slide.jpg');">
				</div>
				<div class="carousel-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-slide-1.jpg');">
				</div>
				<div class="carousel-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-slide-2.jpg');">
				</div>
			</div>

			<div class="mask-slide cor2"></div>

			<div class="text-item">
					
				<span id="txt-0" class="titulo-slide grande light bottom active">
					OCP Ecuador promueve prácticas a favor de la seguridad y salud ocupacional
					<a href="#" class="link inline">Lea más</a>
				</span>
				<span id="txt-1" class="titulo-slide grande light bottom">
					OCP Ecuador promueve prácticas a favor de la seguridad y salud ocupacional
					<a href="#" class="link inline">Lea más</a>
				</span>		
				<span id="txt-2" class="titulo-slide grande light bottom">
					OCP Ecuador promueve prácticas a favor de la seguridad y salud ocupacional
					<a href="#" class="link inline">Lea más</a>
				</span>

			</div>

			<a class="carousel-control-prev" href="#slide-home" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#slide-home" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

<?php /*

				<?php /*if( have_rows('slide') ):
					$slide = 0;
					while ( have_rows('slide') ) : the_row();

						if(get_sub_field('imagem')){
							$slide = $slide+1; ?>

							<div class="item <?php if($slide == 1){ echo 'active'; } ?>" style="background-image: url('<?php the_sub_field('imagem'); ?>');">

								<div class="box-height">
									<div class="box-texto">
										
										<p class="texto"><?php the_sub_field('texto'); ?></p>
										<?php if(get_sub_field('sub_texto')){ ?>
											<p class="sub-texto"><?php the_sub_field('sub_texto'); ?></p>
										<?php } ?>

									</div>
								</div>
								
							</div>

						<?php }

					endwhile;
				endif;* ?>

			</div>

			<ol class="carousel-indicators">
				
				<?php //for($i=0; $i<3; $i++){ ?>
					<li data-target="#slide" data-slide-to="1<?php //echo $i; ?>" class="<?php //if($i == 0){ echo 'active'; } ?>"></li>
				<?php //} ?>
				
			</ol>

		</div> */?>

	</div>
</section>

<section class="box-content">
	<div class="container">
		<form action="<?php echo home_url(); ?>" class="form-busca" method="post">
			<fieldset>
				<input type="text" name="s" id="search" placeholder="Buscar en el sitio…">
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

<section class="box-content bg-claro prensa prensa-list">
	<div class="container">
		
		<div class="row">
			<div class="col-12">

				<h3>Notas de Prensa</h3>
			
				<div class="carousel-itens owl-carousel owl-theme owl-loaded">
					<div class="owl-stage-outer">
						<div class="owl-stage">

<?php for ($i=0; $i < 3; $i++) { ?>

							<div class="owl-item">
								<a href="<?php echo get_home_url(); ?>" title="<?php //the_field('titulo', 'option'); ?>">
									<img src="<?php //the_field('logo_header', 'option'); ?><?php echo get_template_directory_uri(); ?>/assets/images/thumbs-prensa-1.jpg" alt="<?php //the_field('titulo', 'option'); ?>">
								</a>
								<span class="data-prensa" style="background-color: #0B7ABF">6 Mayo 2019</span>
								<a href="<?php echo get_home_url(); ?>" title="" class="titulo-prensa">
									Emprendedores que evidencian que Ecuardo es un país de oportunidades
								</a>
								<span class="categoria-prensa" style="color: #0B7ABF">
									PRODUCTIVIDAD
								</span>
							</div>

							<div class="owl-item">
								<a href="<?php echo get_home_url(); ?>" title="">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs-prensa-2.jpg" alt="">
								</a>
								<span class="data-prensa" style="background-color: #0B7ABF">28 Mayo 2019</span>
								<a href="<?php echo get_home_url(); ?>" title="" class="titulo-prensa">
									250 estudiantes de Baeza recibieron atención odontológica
								</a>
								<span class="categoria-prensa" style="color: #0B7ABF">
									PRODUCTIVIDAD
								</span>
							</div>

							<div class="owl-item">
								<a href="<?php echo get_home_url(); ?>" title="<?php //the_field('titulo', 'option'); ?>">
									<img src="<?php //the_field('logo_header', 'option'); ?><?php echo get_template_directory_uri(); ?>/assets/images/thumbs-prensa-3.jpg" alt="<?php //the_field('titulo', 'option'); ?>">
								</a>
								<span class="data-prensa" style="background-color: #0B7ABF">8 Abril 2019</span>
								<a href="<?php echo get_home_url(); ?>" title="" class="titulo-prensa">
									Cooperación institucional sigue beneficiando a estudiantes en atención odontológica
								</a>
								<span class="categoria-prensa" style="color: #0B7ABF">
									PRODUCTIVIDAD
								</span>
							</div>

							<div class="owl-item">
								<a href="<?php echo get_home_url(); ?>" title="<?php //the_field('titulo', 'option'); ?>">
									<img src="<?php //the_field('logo_header', 'option'); ?><?php echo get_template_directory_uri(); ?>/assets/images/thumbs-prensa-4.jpg" alt="<?php //the_field('titulo', 'option'); ?>">
								</a>
								<span class="data-prensa" style="background-color: #F9A61A">29 Abril 2019</span>
								<a href="<?php echo get_home_url(); ?>" title="" class="titulo-prensa">
									OCP Ecuador promueve prácticas a favor de la seguridad y salud ocupacional]
								</a>
								<span class="categoria-prensa" style="color: #F9A61A">
									SALUD
								</span>
							</div>

<?php } ?>

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

				<h2 class="center"><span>OCP EN NÚMEROS</span></h2>
				<p class="sub-tituto center">Transportamos el crudo de Ecuador y Colombia de manera responsable</p>

				<ul class="icon-page count-item-5">
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-01.png" align="">
						<span class="titulo center cor3"><span class="num cor3">+1.500</span></span>
						<p>buques cargados con crudo para exportación</p>
					</li>

					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-02.png" align="">
						<span class="titulo center cor2"><span class="num cor2">+16</span>mil</span>
						<p>fuentes de empleo de tubería tiene el OCP creadas</p>
					</li>

					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-03.png" align="">
						<span class="titulo center cor4"><span class="num cor4">485</span>km</span>
						<p>de tubería tiene el OCP</p>
					</li>

					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-04.png" align="">
						<span class="titulo center"><span class="num">815</span>millones</span>
						<p>barriles de crudo transportados desde el 2003</p>
					</li>

					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-05.png" align="">
						<span class="titulo center verde-limao"><span class="num verde-limao">42</span>millones</span>
						<p>de dólares invertidos en 750 proyectos de Responsabilidas Social</p>
					</li>
				</ul>

				<div class="link-mais center">
					<a href="<?php echo get_home_url(); ?>/proyectos" title="Conoce más de nuestros logros" class="link cor1">
						<i class="fas fa-plus-circle cinza"></i> Conoce más de nuestros logros
					</a>
				</div>

			</div>
		</div>
	
	</div>
</section>

<?php get_footer(); ?>

<script type="text/javascript">
	$('#slide-home').on('slide.bs.carousel', function (e) {
		$('.titulo-slide').removeClass('active');
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