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

			<li class="submenu <?php if ( is_post_type_archive('funcionamiento') or is_tax('categoria_funcionamiento') or is_singular('funcionamiento') ) : echo 'ativo'; endif ?>">
				<a href="<?php echo get_post_type_archive_link('funcionamiento'); ?>" title="" class="">FUNCIONAMIENTO</a>
				<i class="fas fa-chevron-down btn-menu-mobile"></i>

				<div class="container-menu">
					<div class="bg-submenu">
						<span class="tit-menu">Funcionamiento</span>
						<div class="col-menu col-principal">
							
						</div>

						<div class="col-menu col-links">
							<ul class="">

								<?php
									$args = array(
									    'taxonomy'      	=> 'categoria_funcionamiento',
									    'parent'        	=> 0, // get top level categories
									    'orderby'       	=> 'name',
									    'order'         	=> 'ASC',
									    'hide_empty'      	=> false
									);
									$categories = get_categories( $args );  

									foreach ( $categories as $category ){ ?>

										<li style="order: <?php the_field('order', $category->taxonomy . '_' . $category->term_id ); ?>">
											<a href="<?php echo get_term_link( $category->term_id); ?>" title="<?php echo $category->name; ?>" class="">
												<?php echo $category->name; ?>										
											</a>
										</li>

									<?php }
								?>

							</ul>
						</div>
					</div>
				</div>

			</li>

			<li class="">
				<a href="<?php echo get_permalink(get_page_by_path('operacion-segura')); ?>" title="" class="<?php if ( is_page('operacion-segura') ) : echo 'ativo'; endif ?>">OPERACIÓN SEGURA</a>
			</li>

			<li class="">
				<a href="<?php echo get_permalink(get_page_by_path('aporte-a-la-sociedad')); ?>" title="" class="<?php if ( is_post_type_archive('aporte-a-la-sociedad') or is_tax('categoria_aportealasociedad') or is_singular('aporte-a-la-sociedad') ) : echo 'ativo'; endif ?>"><?php the_field('titulo_menu',16); ?></a>
			</li>

			<li class="">
				<a href="<?php echo get_permalink(get_page_by_path('aporte-al-pais')); ?>" title="" class="<?php if ( is_page('aporte-al-pais') ) : echo 'ativo'; endif ?>">APORTE AL PAIS</a>
			</li>

			<li class="off-mobile">
				<a href="<?php echo get_permalink(get_page_by_path('sala-de-prensa')); ?>" title="" class="<?php if ( is_page('sala-de-prensa') ) : echo 'ativo'; endif ?>">SALA DE PRENSA</a>
			</li>
			<li class="off-mobile submenu">
				<a href="<?php echo get_permalink(get_page_by_path('contactenos')); ?>" title="" class="<?php if ( is_page('contactenos') ) : echo 'ativo'; endif ?>">CONTÁCTENOS</a>
				<i class="fas fa-chevron-down btn-menu-mobile"></i>

				<div class="container-menu">
					<div class="bg-submenu">
						<div class="col-menu col-links">
							<ul class="">

								<li>
									<a href="<?php echo get_permalink(get_page_by_path('registro-proveedores')); ?>" title="<?php the_field('titulo_menu',798); ?>" class="<?php if ( is_page('registro-proveedores') ) : echo 'ativo'; endif ?>"><?php the_field('titulo_menu',798); ?></a>
								</li>

								<li>
									<a href="<?php echo get_permalink(get_page_by_path('trabaje-nosotros')); ?>" title="" class="<?php if ( is_page('trabaje-nosotros') ) : echo 'ativo'; endif ?>"><?php the_field('titulo_menu',801); ?></a>
								</li>

							</ul>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</nav>