<article style="margin: 1rem;" class="post-format-padrao">
	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	<div class="imagem-artigo">
		<?php the_post_thumbnail(array(375,375)); ?>
	</div>
	<p>PAGE ARQUIVO, PUBLICADO DIA: <?php echo get_the_date(); ?> pelo autor: <?php the_author_posts_link(); ?></p>
	<p><?php echo the_excerpt(); ?></p>
</article>