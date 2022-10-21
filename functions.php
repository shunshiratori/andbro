<?php

function add_css_js()
{
	// stylesheet
	wp_enqueue_style('commonCss', get_template_directory_uri() . '/assets/css/common.css' . '?' . date('Ymdhis'));
	if (is_front_page()) {
		wp_enqueue_style('frontCss', get_template_directory_uri() . '/assets/css/front.css' . '?' . date('Ymdhis'));
	} elseif (is_page('work')) {
		wp_enqueue_style('workCss', get_template_directory_uri() . '/assets/css/work.css' . '?' . date('Ymdhis'));
	} elseif (is_page('news')) {
		wp_enqueue_style('newsCss', get_template_directory_uri() . '/assets/css/news.css' . '?' . date('Ymdhis'));
	} elseif (is_page('service')) {
		wp_enqueue_style('serviceCss', get_template_directory_uri() . '/assets/css/service.css' . '?' . date('Ymdhis'));
	} elseif (is_page('about')) {
		wp_enqueue_style('aboutCss', get_template_directory_uri() . '/assets/css/about.css' . '?' . date('Ymdhis'));
	} elseif (is_page('security-policy')) {
		wp_enqueue_style('security-policyCss', get_template_directory_uri() . '/assets/css/security.css' . '?' . date('Ymdhis'));
	} elseif (is_page('privacy-policy')) {
		wp_enqueue_style('privacy-policyCss', get_template_directory_uri() . '/assets/css/privacy.css' . '?' . date('Ymdhis'));
	} elseif (is_page('contact')) {
		wp_enqueue_style('contactCss', get_template_directory_uri() . '/assets/css/contact.css' . '?' . date('Ymdhis'));
	} elseif (is_page('web_building')) {
		wp_enqueue_style('web_buildingCss', get_template_directory_uri() . '/assets/css/web_building.css' . '?' . date('Ymdhis'));
	} elseif (is_page('web_management')) {
		wp_enqueue_style('web_managementCss', get_template_directory_uri() . '/assets/css/web_management.css' . '?' . date('Ymdhis'));
	} elseif (is_page('sns_management')) {
		wp_enqueue_style('sns_managementCss', get_template_directory_uri() . '/assets/css/sns_management.css' . '?' . date('Ymdhis'));
	} elseif (is_page('branding')) {
		wp_enqueue_style('brandingCss', get_template_directory_uri() . '/assets/css/branding.css' . '?' . date('Ymdhis'));
	} elseif (is_page('advertising-management')) {
		wp_enqueue_style('advertising-managementCss', get_template_directory_uri() . '/assets/css/advertising-management.css' . '?' . date('Ymdhis'));
	} elseif (is_page('writing')) {
		wp_enqueue_style('writingCss', get_template_directory_uri() . '/assets/css/writing.css' . '?' . date('Ymdhis'));
	} elseif (is_page('price')) {
		wp_enqueue_style('priceCss', get_template_directory_uri() . '/assets/css/price.css' . '?' . date('Ymdhis'));
	} elseif (is_page('company')) {
		wp_enqueue_style('companyCss', get_template_directory_uri() . '/assets/css/company.css' . '?' . date('Ymdhis'));
	} elseif (is_page('andbro-is')) {
		wp_enqueue_style('andbro-isCss', get_template_directory_uri() . '/assets/css/is.css' . '?' . date('Ymdhis'));
	} elseif (is_page('support')) {
		wp_enqueue_style('supportCss', get_template_directory_uri() . '/assets/css/csr.css' . '?' . date('Ymdhis'));
	} elseif (is_page('access')) {
		wp_enqueue_style('accessCss', get_template_directory_uri() . '/assets/css/access.css' . '?' . date('Ymdhis'));
	} elseif (is_single('')) {
		wp_enqueue_style('singleCss', get_template_directory_uri() . '/assets/css/single.css' . '?' . date('Ymdhis'));
	}
}

add_action('wp_enqueue_scripts', 'add_css_js');

// アイキャッチ
add_theme_support('post-thumbnails');

// メニュー
//ナビゲーションメニューの有効化※複数のメニューを登録する場合
register_nav_menus(array(
	'global' => 'Header Menu',
	'footer-menu'  => 'Footer Menu',
	'header-sp'  => 'header-sp',
));

// サイドバー
function andbro_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'andbro'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'andbro'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'andbro_widgets_init');

/* 「投稿」ラベル変更 */
function change_post_menu_label()
{
	global $menu;
	global $submenu;
	$name = 'ブログ';
	$menu[5][0] = $name;
	$submenu['edit.php'][5][0] = $name . '一覧';
	$submenu['edit.php'][10][0] = '新しい' . $name;
}
function change_post_object_label()
{
	global $wp_post_types;
	$name = 'ブログ';
	$labels = &$wp_post_types['post']->labels;
	$labels->name = $name;
	$labels->singular_name = $name;
	$labels->add_new = _x('追加', $name);
	$labels->add_new_item = $name . 'の新規追加';
	$labels->edit_item = $name . 'の編集';
	$labels->new_item = '新規' . $name;
	$labels->view_item = $name . 'を表示';
	$labels->search_items = $name . 'を検索';
	$labels->not_found = $name . 'が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に' . $name . 'は見つかりませんでした';
}
add_action('init', 'change_post_object_label');
add_action('admin_menu', 'change_post_menu_label');