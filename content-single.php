<article>
	<header>
		<h1><?php the_title(); ?></h1>
		<p>Publicado pelo querido <?php the_author_posts_link(); ?> em <?php echo get_the_date(); ?></p>
		<?php the_tags('Tags: ', ', '); ?></p>
		<p><?php the_category(' '); ?></p>
	</header>	

	<div class="content">
		<?php 	do_action('banner_random');
				the_content(); 
		?>
	</div>

	

</article>