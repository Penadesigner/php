<?php 

// Função para carregamento dos scripts
function carrega_scripts(){
	// Enfileirando Bootstrap
	wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '3.3.7', 'all');
	wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), null, true);	
	// Enfileirando estilos e scripts próprios
	wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');
	wp_enqueue_script( 'template', get_template_directory_uri(). '/js/template.js', array(), null, true);	
}
add_action( 'wp_enqueue_scripts', 'carrega_scripts' );

// Função para registro de nossos menus
register_nav_menus(
	array(
		'meu_menu_principal' => 'Menu Principal',
		'menu_rodape' => 'Menu Rodapé',
		'menu_atividades' => 'Menu Atividades'
	)
);

// Adicionando suporte ao tema


add_theme_support( 'custom-logo', array(
	'height'               => 80,
	'width'                => 160
));
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('video', 'image', 'audio'));
add_theme_support('html5', array('search-form'));

// Registrando sidebars
if (function_exists('register_sidebar')){
	register_sidebar(
		array(
			'name'		=> 'Barra Lateral 1',
			'id'		=> 'sidebar-1',
			'description'	=> 'Barra lateral da página home',
			'before_widget'	=> '<div class="widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h2 class="widget-titulo">',
			'after_title'	=> '</h2>',			
		)
	);
	register_sidebar(
		array(
			'name'		=> 'Barra Lateral 2',
			'id'		=> 'sidebar-2',
			'description'	=> 'Barra lateral da página blog',
			'before_widget'	=> '<div class="widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h2 class="widget-titulo">',
			'after_title'	=> '</h2>',			
		)
	);
}


function mostra_banner_random(){
	$banners = array(
		'<a href=""><img src="https://s2.glbimg.com/Qgl26Ze8x7iJ1HoFwwRkwfjgGrM=/smart/e.glbimg.com/og/ed/f/original/2020/11/05/brasil-tem-duas-praias-entre-as-cinco-melhores-do-mundo.jpg" alt=""></a>',
		'<a href=""><img src="https://www.otempo.com.br/image/contentid/policy:1.2821486:1677621559/1024px-Praia-do-Sancho-Noronha-jpeg.jpeg?f=3x2&w=1224" alt=""></a>'
	);
	$rand = rand( 0, sizeof($banners) - 1);
	echo '<div class="banner-rand">' . $banners[$rand] . '</div>';
}

add_action('banner_random','mostra_banner_random');

function limitar_content($content)
{
  return substr($content, 0, 200);
}
add_filter("the_content", "limitar_content");	


 //Alterar o número de itens por página no blog
function num_itens_blog( $query ){
	if( is_admin() || ! $query->is_main_query() )
	return;

	// Página blog
	if ( is_home() ){
	$query->set( 'posts_per_page', 2 );
		return;
	}
}
remove_action('pre_get_posts', 'num_itens_blog', 1);