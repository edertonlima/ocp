<nav class="nav nav-topo">
	<ul>
		<?php if(get_field('url_facebook','option')){ ?>
			<li class="rede-social"><a href="<?php the_field('url_facebook','option'); ?>" title="<?php the_field('tit_facebook','option'); ?>" target="_blank">
				<i class="fab fa-facebook-f"></i> 
			</a></li>
		<?php } ?>

		<?php if(get_field('url_youtube','option')){ ?>
			<li class="rede-social"><a href="<?php the_field('url_youtube','option'); ?>" title="<?php the_field('tit_youtube','option'); ?>" target="_blank">
				<i class="fab fa-youtube"></i>
			</a></li>
		<?php } ?>

		<?php if(get_field('url_twitter','option')){ ?>
			<li class="rede-social"><a href="<?php the_field('url_twitter','option'); ?>" title="<?php the_field('tit_twitter','option'); ?>" target="_blank">
				<i class="fab fa-twitter"></i>
			</a></li>
		<?php } ?>

		<?php if(get_field('url_linkedin','option')){ ?>
			<li class="rede-social"><a href="<?php the_field('url_linkedin','option'); ?>" title="<?php the_field('tit_linkedin','option'); ?>" target="_blank">
				<i class="fab fa-linkedin"></i>
			</a></li>
		<?php } ?>

		<li class="rede-social last-rede-social"></li> 

		<?php /*
		<li class="">
			<a href="<?php echo get_home_url(); ?>" title="">SALA DE CLIENTES</a>
		</li>
		*/?>

		<li>
			<a href="<?php echo get_permalink(get_page_by_path('sala-de-prensa')); ?>" title="" class="<?php if ( is_page('sala-de-prensa') ) : echo 'ativo'; endif ?>">SALA DE PRENSA</a>
		</li>
		<li>
			<a href="<?php echo get_permalink(get_page_by_path('contactenos')); ?>" title="<?php the_field('titulo_menu',23); ?>" class="<?php if ( is_page('contactenos') ) : echo 'ativo'; endif ?>"><?php the_field('titulo_menu',23); ?></a>
		</li>
	</ul>

	<ul class="idiomas" style="display: none;">
		<li style="display: none;">
			<a href="<?php echo get_home_url(); ?>" title=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/idiomas-en.jpg" alt="EN"><span>EN</span></a>
		</li>

		<li>
			<a href="<?php echo get_home_url(); ?>" title=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/idiomas-es.jpg" alt="ES"><span>ES</span></a>
		</li>
	</ul>

			<div class="menu-mobile" id="nav-icon2">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
</nav>