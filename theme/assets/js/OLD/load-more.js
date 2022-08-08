jQuery(document).ready(function($) {

	$('.load-more').click(function(){

		$(this).html('<i class="fas fa-circle-notch cor3 fa-spin"></i> Más');

		post_type = $(this).attr('var-post-type');
		paged = parseInt($(this).attr('var-paged'));
		category = parseInt($(this).attr('var-category'));
		taxonomy = parseInt($(this).attr('var-taxonomy'));
		pesquisa = $(this).attr('var-pesquisa');

		$.ajax({
			url: $(this).attr('var-url'),//ajaxurl,
			type: 'POST',
			data: {
				'action': 'load_more', // Ação do Ajax
				'post-type': post_type,
				'category': category,
				'taxonomy': taxonomy,
				'paged': paged,
				'pesquisa': pesquisa
			},
			success: function( response ){
				max_paged = response.split('max_paged').pop();
				loopHTML  = response.split('max_paged').shift();

				paged = paged + 1;
				if(paged == max_paged){ 
					$('.load-more').hide();
				}else{

					$('.load-more').attr('var-paged' , paged);
					$('.load-more').attr('var-max-paged' , max_paged);

				}

				$('.prensa-list .row:last-child').append(loopHTML);

				owlCarousel();

				$('.load-more').html('Más');
			},
			
			error: function(){

				$('.prensa-list .row:last-child').append('<div class="col-12 center"><p>.Lo sentimos, no fue posible traer más contenido.</p></div>');
				$('.load-more').html('Más');
				$('.load-more').hide();

			}
		});

	});

});	