<article class="post-format-padrao">
	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	<?php the_post_thumbnail(array(175,175)); ?>
	<p>Publicado em <?php echo get_the_date(); ?> pelo autor: <?php the_author_posts_link(); ?></p>
</article>