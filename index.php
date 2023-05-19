<?php get_header(); ?>
<!-- PAGINA INICIAL PADRAO -->
<img class="img-responsive" id="img-slide" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
<div class="conteudo">
	<main>
		<section class="meio">
			<div class="container">
				<div class="row">
					<div class="noticias col-md-9">
						<?php 
							$args = array(
								'posts_per_page' => 10
							);
							$consulta = new WP_Query($args);

							if($consulta->have_posts()) :
								while ($consulta->have_posts()) : $consulta->the_post(); 
						?>

						<?php get_template_part('content', get_post_format()); 
							endwhile;
							wp_reset_postdata(); 
						?>

						<div class="paginacao text-left">
							<?php next_posts_link("<< Mais antigos") ?>
						</div>
						<div class="paginacao text-right">
							<?php previous_posts_link("Mais novos >>"); ?>
						</div>						

						<?php else: ?>
							<p>Nao tem nada ainda pra mostrar</p>
						<?php endif; ?>

					</div>

					<aside class="barra-lateral col-md-3">
						<?php get_sidebar('blog'); ?>
					</aside>

				</div>
			</div>
		</section>

	</main>	
</div>
<?php get_footer(); ?>
