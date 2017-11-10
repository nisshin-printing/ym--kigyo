<?php
	if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
// Sliders Post type
$labels = array(
	'name'                  => _x('スライド','dtdsh'),
	'singular_name'         => _x('スライド','dtdsh'),
	'add_new'               => _x('新規追加','dtdsh'),
	'add_new_item'          => _x('新しいスライドを追加','dtdsh'),
	'edit_item'             => _x('スライドを編集','dtdsh'),
	'new_item'              => _x('新しいスライド','dtdsh'),
	'all_items'             => _x('スライド','dtdsh'),
	'view_item'             => _x('スライドを見る','dtdsh'),
	'search_items'          => _x('スライドを検索','dtdsh'),
	'not_found'             => _x('スライドが見つかりません','dtdsh'),
	'not_found_in_trash'    => _x('ゴミ箱にスライドはありません','dtdsh'),
	'parent_item_colon'     => _x('親アイテム','dtdsh'),
	'menu_name'             => _x('スライド','dtdsh'),
);
register_post_type('dtdsh-slides', array(
	'labels'                => $labels,
	'public'                => false,
	'menu_icon'             => 'dashicons-images-alt2',
	'publicly_queryable'    => false,
	'exclude_from_search'   => true,
	'show_ui'               => true,
	'show_in_menu'          => 'edit.php',
	'show_in_nav_menus'     => false,
	'query_var'             => true,
	'rewrite'               => true,
	'capability_type'       => 'post',
	'has_archive'           => false,
	'hierarchical'          => false,
	'menu_position'         => 10,
	'supports'              => array( 'title', 'editor', 'thumbnail' )
));
