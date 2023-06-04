<footer>
		<div class="row contatos">
			<div class="col-md-6">
				<div class="telefone">
					<h3>CONTATOS</h3>
					<p><?php echo get_theme_mod('set_telefone') ?></p>
					<p><?php echo get_theme_mod('set_email') ?></p>
				</div>
			</div>
		</div>

		<div class="row copy">
			<div class="col-md-7"><p><?php echo get_theme_mod('set_copy') ?></p></div>
			<nav class="menu-rodape col-md-5 text-right">
				<?php wp_nav_menu( array('theme_location' => 'menu_rodape') ); ?>
			</nav>
		</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
