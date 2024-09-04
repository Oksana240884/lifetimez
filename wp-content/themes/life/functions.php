<?php
//add_filter('show_admin_bar', '__return_false'); // отключить

include_once 'breadcrumbs.php';

add_image_size( 'primer', 557, 266, true );
add_image_size( 'portfolio', 450, 450, true );

add_filter('excerpt_more', function($more) {
	return '...';
});
add_filter( 'excerpt_length', function(){
	return 8;
} );

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' ); 
add_theme_support( 'custom-logo' );


//Поддержка svg
function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
//Регистрация меню
add_action( 'after_setup_theme', function(){
	register_nav_menus( [
		'header_menu' => 'Меню в шапке',
	] );
} );



add_filter( 'wpcf7_autop_or_not', '__return_false' );




function mytheme_customize_register( $wp_customize ) {
	$wp_customize->add_section(
	    'data_site_section',
	    array(
	        'title' => 'Данные сайта',
	        'capability' => 'edit_theme_options',
	        'description' => "Тут можно указать данные сайта"
	    )
	);

	//1
	$wp_customize->add_setting(
	    'site_telephone',
	    array(
	        'default' => '',
	        'type' => 'option'
	    )
	);
	$wp_customize->add_control(
	    'site_telephone_control',
	    array(
	        'type' => 'text',
	        'label' => "Телефон",
	        'section' => 'data_site_section',
	        'settings' => 'site_telephone'
	    )
	);

	//3
	$wp_customize->add_setting(
	    'email',
	    array(
	        'default' => '',
	        'type' => 'option'
	    )
	);
	$wp_customize->add_control(
	    'email_control',
	    array(
	        'type' => 'text',
	        'label' => "E-mail",
	        'section' => 'data_site_section',
	        'settings' => 'email'
	    )
	);

	//4
	$wp_customize->add_setting(
	    'viber',
	    array(
	        'default' => '',
	        'type' => 'option'
	    )
	);
	$wp_customize->add_control(
	    'viber_control',
	    array(
	        'type' => 'text',
	        'label' => "Viber",
	        'section' => 'data_site_section',
	        'settings' => 'viber'
	    )
	);

	//5
	$wp_customize->add_setting(
	    'telegram',
	    array(
	        'default' => '',
	        'type' => 'option'
	    )
	);
	$wp_customize->add_control(
	    'telegram_control',
	    array(
	        'type' => 'text',
	        'label' => "Telegram",
	        'section' => 'data_site_section',
	        'settings' => 'telegram'
	    )
	);

	//5
	$wp_customize->add_setting(
	    'facebook',
	    array(
	        'default' => '',
	        'type' => 'option'
	    )
	);
	$wp_customize->add_control(
	    'facebook_control',
	    array(
	        'type' => 'text',
	        'label' => "facebook",
	        'section' => 'data_site_section',
	        'settings' => 'facebook'
	    )
	);

	//5
	$wp_customize->add_setting(
	    'instagram',
	    array(
	        'default' => '',
	        'type' => 'option'
	    )
	);
	$wp_customize->add_control(
	    'instagram_control',
	    array(
	        'type' => 'text',
	        'label' => "instagram",
	        'section' => 'data_site_section',
	        'settings' => 'instagram'
	    )
	);

	//6
	$wp_customize->add_setting(
	    'copyrite',
	    array(
	        'default' => '',
	        'type' => 'option'
	    )
	);
	$wp_customize->add_control(
	    'copyrite_control',
	    array(
	        'type' => 'text',
	        'label' => "copyrite",
	        'section' => 'data_site_section',
	        'settings' => 'copyrite'
	    )
	);
}
add_action( 'customize_register', 'mytheme_customize_register' );


function m1_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'm1_logo' ); // Add setting for logo uploader
         
    // Add control for logo uploader (actual uploader)
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'm1_logo', array(
        'label'    => __( 'Логотип в футере', 'm1' ),
        'section'  => 'title_tagline',
        'settings' => 'm1_logo',
    ) ) );
}
add_action( 'customize_register', 'm1_customize_register' );


add_action('init', 'my_custom_init');
function my_custom_init(){
	register_post_type('services', array(
		'labels'             => array(
			'name'               => 'Услуги', // Основное название типа записи
			'singular_name'      => 'услуга', // отдельное название записи типа Book
			'add_new'            => 'Добавить новую',
			'add_new_item'       => 'Добавить новую услугу',
			'edit_item'          => 'Редактировать услугу',
			'new_item'           => 'Новая услуга',
			'view_item'          => 'Посмотреть услугу',
			'search_items'       => 'Найти услугу',
			'not_found'          =>  'услуг не найдено',
			'not_found_in_trash' => 'В корзине услуг не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Услуги'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail')
	) );
}

// хук для регистрации
add_action( 'init', 'create_taxonomy' );
function create_taxonomy(){
	// список параметров: http://wp-kama.ru/function/get_taxonomy_labels
	register_taxonomy('services_cat', array('services'), array(
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => array(
			'name'               => 'Категории', // Основное название типа записи
			'singular_name'      => 'Категория', // отдельное название записи типа Book
			'add_new'            => 'Добавить категорию',
			'add_new_item'       => 'Добавить новую категорию',
			'edit_item'          => 'Редактировать категорию',
			'new_item'           => 'Новая категория',
			'view_item'          => 'Посмотреть категорию',
			'search_items'       => 'Найти категорию',
			'not_found'          =>  'Категорий не найдено',
			'not_found_in_trash' => 'В корзине категорий не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Категории'
		),
		'description'           => '', // описание таксономии
		'public'                => true,
		'publicly_queryable'    => null, // равен аргументу public
		'show_in_nav_menus'     => true, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_in_menu'          => true, // равен аргументу show_ui
		'show_tagcloud'         => true, // равен аргументу show_ui
		'show_in_rest'          => null, // добавить в REST API
		'rest_base'             => null, // $taxonomy
		'hierarchical'          => true,
		//'update_count_callback' => '_update_post_term_count',
		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column'     => false, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
		'_builtin'              => false,
		'show_in_quick_edit'    => null, // по умолчанию значение show_ui
	) );
}



function true_load_posts(){
 
	$args = unserialize( stripslashes( $_POST['query'] ) );
	$args['paged'] = $_POST['page'] + 1; // следующая страница
	$args['post_status'] = 'publish';
 
	// обычно лучше использовать WP_Query, но не здесь
	query_posts( $args );
	// если посты есть
	if( have_posts() ) :
 
		// запускаем цикл
		while( have_posts() ): the_post();?>
 
			<div class="col-lg-4 col-md-6 col-sm-6 mb-30">
				<a href="<?php the_permalink();?>" class="portfolio-item2">
					<?php the_post_thumbnail('primer');?>
					<span class="portfolio-item2__content">
						<span class="portfolio-item2__title">
							<?php the_title();?>
						</span>
						<span class="portfolio-item2__desc">
							SEO копирайтинг
						</span>
						<span class="portfolio-item2__search"></span>
					</span>
				</a>
			</div>
 
		<?php endwhile;
 
	endif;
	die();
}
 
 
add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');