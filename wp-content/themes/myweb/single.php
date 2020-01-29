<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<section class="box-content">
			<div class="breadcrumbs">
				<ul>
					<li><a href="<?php echo get_home_url(); ?>" title="Home">Home</a></li>
					<li><a href="<?php echo get_permalink(get_page_by_path('sala-de-prensa')); ?>" title="Sala de Prensa">Sala de Prensa</a></li>
					
					<?php $categorias = wp_get_post_terms( $post->ID, 'category' ); ?>
					<li><a href="<?php echo get_term_link($categorias[0]->term_id); ?>" title=""><?php echo $categorias[0]->name; ?></a></li>
					<li><?php the_title(); ?></li>
				</ul>
			</div>
		</section>

		<section class="box-content no-padding-top prensa det-prensa"> 
			<div class="container">

				<div class="row">
					<div class="col-12">

						<h2 class="center"><span class="cor3"><?php the_title(); ?></span></h2>
						<p class="sub-tituto mini center cor3"><?php echo get_the_date(); ?></p>

						<div class="content">
							<?php the_content(); ?>
						</div>

					</div>
				</div>

			</div>
		</section>		

	<?php endwhile; ?>

<?php get_footer(); ?>