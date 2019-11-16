<?php
/*
Plugin Name: Páginas Pyxys
Description: Páginas 
Author: Cleison Carlos
*/


// Register Custom Post Type
function pyxys_plugin() {

	$labels = array(
		'name'                  => _x( 'Pyxye Páginas', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Pyxys Página', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Pyxys Páginas', 'text_domain' ),
		'name_admin_bar'        => __( 'Pyxys Páginas', 'text_domain' ),
		'archives'              => __( '', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( '', 'text_domain' ),
		'all_items'             => __( 'Todos itens', 'text_domain' ),
		'add_new_item'          => __( 'Add novo item', 'text_domain' ),
		'add_new'               => __( 'Add Página', 'text_domain' ),
		'new_item'              => __( 'Nova Página', 'text_domain' ),
		'edit_item'             => __( 'Editar itens', 'text_domain' ),
		'update_item'           => __( 'Atualizar Página', 'text_domain' ),
		'view_item'             => __( 'Ver Páginas', 'text_domain' ),
		'view_items'            => __( 'Ver Páginas', 'text_domain' ),
		'search_items'          => __( 'Procurar itens', 'text_domain' ),
		'not_found'             => __( 'Não encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'Não encontrado na lixeira', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'page_pyxys',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Pyxys Página', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'post-formats' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'paginas_pyxys', $args );

}
add_action( 'init', 'pyxys_plugin', 0 );



	