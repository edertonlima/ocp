<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="breadcrumbs">
            <ul class="container">
				<li><a href="<?php echo get_home_url(); ?>" title="Home">Home</a></li>
				<li>Contactenos</li>
			</ul>
		</div>

		<section class="box-content"> 
			<div class="container">

				<div class="row">
					<div class="col-12">

						<h2 class="center"><span>CONTACTO</span></h2>

                        <?php if( have_rows('links-contactenos') ): ?>
                            <div class="container-mini">
                                <ul class="icon-page count-item-5">

                                    <?php while( have_rows('links-contactenos') ) : the_row(); ?>
                                        <li>
                                            <a <?php $link = get_sub_field('link'); if($link[0]){ echo 'href="' . get_the_permalink($link[0]) . '"'; } ?> title="<?php the_sub_field('titulo'); ?>">
                                                <img src="<?php the_sub_field('icone'); ?>" alt="<?php the_sub_field('titulo'); ?>">
                                                <?php if(get_sub_field('titulo')){ ?>
                                                    <span class="titulo center"><?php the_sub_field('titulo'); ?></span>
                                                <?php } ?>
                                            </a>
                                        </li>
                                    <?php endwhile; ?>

                                </ul>
                            </div>
                        <?php endif; ?>

					</div>
				</div>

			</div>
		</section>

		<section class="box-content no-padding bg-claro">	
			<div class="container">

				<ul class="ico-redes">
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
				</ul>

			</div>
		</section>

		<section class="box-content"> 
			<div class="container">

				<div class="row">
					<div class="col-12">

						<h2 class="center"><span>CONTACTO</span></h2>
						<p class="sub-tituto mini justify">Si desea ofertar sus servicios o productos haga en <a href="<?php echo get_permalink(get_page_by_path('sala-proveedores')); ?>" title="registro de proveedores">registro de proveedores.</a> Si desea registrar su hoja de vida haga en <a href="<?php echo get_permalink(get_page_by_path('trabaje-nosotros')); ?>" title="trabaje con nosotros">trabaje con nosotros.</a> Para cualquier otro asunto, llene el siguiente formulario:</p>

						<form class="contacto" id="form" action="<?php echo get_template_directory_uri(); ?>/mail/contactenos.php" enctype="multipart/form-data" method="post">
							<fieldset>
								<label for="name">Nombre*</label>
								<input type="text" name="name" id="name">
							</fieldset>

							<fieldset>
								<label for="telefono">Teléfono*</label>
								<input type="tel" name="telefono" id="telefono">
							</fieldset>

							<fieldset>
								<label for="direccion">Dirección*</label>
								<input type="text" name="direccion" id="direccion">
							</fieldset>

							<fieldset>
								<label for="email">Correo electrónico*</label>
								<input type="email" name="email" id="email">
							</fieldset>

							<fieldset>
								<label for="mensaje">Mensaje*</label>
								<textarea name="mensaje" id="mensaje"></textarea>
							</fieldset>

							<fieldset>
								<label for="anexo">Adjuntar un archivo (pdf)</label>
								<input type="file" name="anexo" id="anexo">
							</fieldset>

							<fieldset>
								<?php 
									$num1 = rand(0, 9);
									$num2 = rand(0, 9);
								?>
								<label for="verificador">Resultado: <?php echo $num1 . ' + ' . $num2; ?></label>
								<input type="number" name="verificador" id="verificador">
							</fieldset>

							<fieldset>
								<p class="msg-form center"></p>
								<button type="submit" class="enviar right">ENVIAR</button>
                                <input type="hidden" name="para" value="<?php the_field('email-form'); ?>">
					            <input type="hidden" name="nome_site" value="<?php bloginfo('name'); ?>">
                                <input type="hidden" name="subject" value="<?php the_title(); ?>">
							</fieldset>
						</form>

					</div>
				</div>

			</div>
		</section>

	<?php endwhile; ?>

<?php get_footer(); ?>

<script type="text/javascript">
	$('#form').submit(function() {
        form_error = false;
        resp_verificador = <?php echo ($num1 + $num2); ?>;

        var verificador = $('#verificador').val();
        if(verificador != resp_verificador){
            $('#verificador').parent().addClass('erro');
            msg_verificador = false;
            form_error = true;
        }

        var name = $('#name').val();
        if(name == ''){
            $('#name').parent().addClass('erro');
            form_error = true;
        }

        var telefono = $('#telefono').val();
        if(telefono == ''){
            $('#telefono').parent().addClass('erro');
            form_error = true;
        }

        var direccion = $('#direccion').val();
        if(direccion == ''){
            $('#direccion').parent().addClass('erro');
            form_error = true;
        }

        var email = $('#email').val();
        if(email == ''){
            $('#email').parent().addClass('erro');
            form_error = true;
        }

        var mensaje = $('#mensaje').val();
        if(mensaje == ''){
            $('#mensaje').parent().addClass('erro');
            form_error = true;
        }

        if(form_error){
            if(msg_verificador){
                $('.msg-form').html('Los campos obligatorios no pueden estar vacíos.');
            }else{
                $('.msg-form').html('Los campos obligatorios no pueden estar vacíos.<br>La respuesta total es incorrecta.');
            }
			return false;
		}else{
			return true;
		}
    });

    $('input').change(function(){
        if($(this).parent().hasClass('erro')){
            $(this).parent().removeClass('erro');
        }
    });

    $('textarea').change(function(){
        if($(this).parent().hasClass('erro')){
            $(this).parent().removeClass('erro');
        }
    });
</script>