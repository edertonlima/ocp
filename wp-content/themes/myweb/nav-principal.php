<nav class="nav nav-principal">
	<div class="container">
		<ul>
			<li>
				<a href="<?php echo get_home_url(); ?>" title="" class="<?php if ( is_front_page() ) : echo 'ativo'; endif ?>">INICIO</a>
			</li>

			<li class="">
				<a href="<?php echo get_permalink(get_page_by_path('quienes-somos')); ?>" title="" class="<?php if ( is_page('quienes-somos') ) : echo 'ativo'; endif ?>">QUIÉNES SOMOS</a>
			</li>

			<li class="">
				<a href="<?php echo get_permalink(get_page_by_path('nuestra-historia')); ?>" title="" class="<?php if ( is_page('nuestra-historia') ) : echo 'ativo'; endif ?>">NUESTRA HISTORIA</a>
			</li>

			<li class="">
				<a href="<?php echo get_permalink(get_page_by_path('funcionamiento')); ?>" title="" class="<?php if ( is_page('funcionamiento') ) : echo 'ativo'; endif ?>">FUNCIONAMIENTO</a>
			</li>

			<li class="">
				<a href="<?php echo get_home_url(); ?>/servicios" title="" class="<?php if ( is_post_type_archive('servicios') ) : echo 'ativo'; endif ?>">SERVICIOS</a>
			</li>

			<li class="">
				<a href="<?php echo get_permalink(get_page_by_path('aporte-a-la-sociedad')); ?>" title="" class="<?php if ( is_page('aporte-a-la-sociedad') ) : echo 'ativo'; endif ?>">APORTE A LA SOCIEDAD</a>
			</li>

			<li class="">
				<a href="<?php echo get_permalink(get_page_by_path('aporte-al-pais')); ?>" title="" class="<?php if ( is_page('aporte-al-pais') ) : echo 'ativo'; endif ?>">APORTE AL PAIS</a>
			</li>

			<?PHP /*
			<li class="submenu">
				<a href="<?php //echo get_permalink(get_page_by_path('sobre')); ?>" title="SOBRE">SOBRE <i class="fas fa-chevron-down"></i></a>

				<ul>
					<li><a href="<?php echo get_home_url(); ?>/" title="">História</a></li>
					<li><a href="<?php echo get_home_url(); ?>/" title="">Estatuto</a></li>
					<li><a href="<?php echo get_home_url(); ?>/" title="">Missão e Visão</a></li>
					<li><a href="<?php echo get_home_url(); ?>/" title="">Regime Interno</a></li>
					<li><a href="<?php echo get_home_url(); ?>/" title="">Diretoria Executiva</a></li>
					<li><a href="<?php echo get_home_url(); ?>/" title="">Conselho Fiscal</a></li>
					<li><a href="<?php echo get_home_url(); ?>/" title="">Assessoria Técnica</a></li>
					<li><a href="<?php echo get_home_url(); ?>/associado" title="ASSOCIADOS">Associados</a></li>
				</ul>
			</li>

			<li class="">
				<a href="<?php //echo get_home_url(); ?>" title="CURSOS">CURSOS</a>
			</li>

			<li class="">
				<a href="<?php //echo get_permalink(get_page_by_path('co-found')); ?>" title="EVENTOS">EVENTOS</a>
			</li>

			<li class="submenu">
				<a href="<?php //echo get_home_url(); ?>" title="NOTÍCIAS">NOTÍCIAS <i class="fas fa-chevron-down"></i></a>

				<ul>
					<li><a href="#"><i class="fas fa-chevron-right"></i>Agricultura</a></li>
					<li><a href="#"><i class="fas fa-chevron-right"></i>Agronegócio</a></li>
					<li><a href="#"><i class="fas fa-chevron-right"></i>Ciência</a></li>
					<li><a href="#"><i class="fas fa-chevron-right"></i>Energia</a></li>
					<li><a href="#"><i class="fas fa-chevron-right"></i>Florestal</a></li>
					<li><a href="#"><i class="fas fa-chevron-right"></i>Gestão Rural</a></li>
					<li><a href="#"><i class="fas fa-chevron-right"></i>Mercado</a></li>
					<li><a href="#"><i class="fas fa-chevron-right"></i>Política</a></li>
					<li><a href="#"><i class="fas fa-chevron-right"></i>Tecnologia</a></li>
				</ul>
			</li>

			<li class="">
				<a href="<?php //echo get_permalink(get_page_by_path('contato')); ?>" title="CONTATO">CONTATO</a>
			</li>

			<?php if ( $_SESSION['associado']['login'] != 'ok' ): ?>

				<li class="">
					<a href="<?php //echo get_permalink(get_page_by_path('contato')); ?>" class="button associar-se" title="ASSOCIAR-SE">ASSOCIAR-SE</a>
				</li>

				<li class="">
					<a href="javascript:" class="" id="btn-login" title="ENTRAR"><i class="fas fa-user-lock"></i>ENTRAR</a>
				</li>

			<?php endif; ?>


			<li class="redes-sociais">
				<a href="<?php //echo get_permalink(get_page_by_path('contato')); ?>" class="" title="FACEBOOK"><i class="fab fa-facebook-square"></i></a>
				<a href="<?php //echo get_permalink(get_page_by_path('contato')); ?>" class="" title="INSTAGRAM"><i class="fab fa-instagram"></i></a>
			</li>

			<li class="busca">
				<a href="<?php //echo get_permalink(get_page_by_path('contato')); ?>" class="" title="O QUE VOCÊ QUER BUSCAR?"><i class="fas fa-search"></i></a>
			</li>
			*/ ?>
		</ul>
	</div>
</nav>