<?php get_header(); ?>
<!-- PAGINA HOME -->
<div class="conteudo">
	<main>
		<section class="slide">
			<div class="container">Slide</div>
		</section>
		<section class="servicos">
			<div class="container">Serviços</div>
		</section>
		<section class="meio">
			<div class="container">
				<div class="row">
					<aside class="barra-lateral col-md-3">
						<?php get_sidebar('home'); ?>
					</aside>
					<div class="noticias col-md-9">
						<div class="row">

						<?php 
						$tamanho = 'col-md-12';
                        $op_content = 'destaque';
						$itens = get_categories(array('include' => '5,6'));
		
						foreach($itens as $item):
							$args = array(
								'category__in' => $item->cat_ID,
								'posts_per_page' => 3
							);
							$consulta = new WP_Query($args);
							
							// O loop WordPress (consulta padrão modificada)
							if($consulta->have_posts()):
								while($consulta->have_posts()):
									$consulta->the_post();
?>
								<div class="<?php echo $tamanho; ?>">
									<?php get_template_part('content', $op_content); ?>
								</div>					

							<?php
								// Reiniciamos o valor das variáveis $tamanho e $op_content com novos valores
								// Esses novos valores só valerão do segundo loop em diante
								$tamanho = 'col-md-6';
	                        	$op_content = 'secundaria';

								endwhile;
								// Reseta a consulta a cada passo do loop
								wp_reset_postdata();

							endif;

						// Fim do loop foreach
						endforeach;

						?>
							
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>	
</div>
<?php get_footer(); ?>



