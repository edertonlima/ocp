<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="breadcrumbs">
			<ul>
				<li><a href="<?php echo get_home_url(); ?>" title="Home">Home</a></li>
				<li>Contactenos</li>
			</ul>
		</div>

		<section class="box-content"> 
			<div class="container">

				<div class="row">
					<div class="col-12">

						<h2 class="center"><span>CONTACTO</span></h2>

					</div>
				</div>

			</div>
		</section>

	<?php endwhile; ?>

<?php get_footer(); ?>