jQuery(document).ready(function($) { 

	$('.load-more').click(function(){

		$(this).html('<i class="fas fa-circle-notch cor3 fa-spin"></i> Mais');

		post_type = $(this).attr('var-post-type');
		paged = parseInt($(this).attr('var-paged'));

		$.ajax({
			url: ajaxurl, // Isso será definido no functions.php
			type: 'POST',
			data: {
				'action': 'acao_do_ajax', // Ação do Ajax
				'post-type': post_type,
				'paged': paged
			},
			success: function( response ){
				max_paged = response.split('max_paged').pop();
				loopHTML  = response.split('max_paged').shift();

				if(paged == max_paged){
					$('.load-more').hide();
				}else{

					paged = paged + 1;
					$('.load-more').attr('var-paged' , paged);
					$('.load-more').attr('var-max-paged' , max_paged);

				}

				$('.prensa-list .row:last-child').append(loopHTML);

				$('.load-more').html('Mais');
			}
		});

	});

});