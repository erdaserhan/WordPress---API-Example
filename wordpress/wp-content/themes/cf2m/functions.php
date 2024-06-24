<?php

function cf2m_init_theme(){
    add_theme_support('post-thumbnails');
}

//hook
add_action('after_setup_theme', 'cf2m_init_theme');

// Ajouter un nouveau type de données : Projet
function ajouterType_Temoignage() {
	$labels = array(
		'name' => 'Témoignages',
		'singular_name' => 'Témoignage',
		'add_new' => 'Ajouter un Témoignage',
		'add_new_item' => 'Ajouter un Témoignage',
		'not_found' => 'Aucun Témoignage trouvé',
		'all_items' => 'Tous les Témoignage',
		'menu_name' => 'Témoignages'
	);
	$arguments = array(
		'label' => 'Témoignage',
		'labels' => $labels,
		'public' => true,
		'show_in_rest' => true,
		'show_in_admin_bar' => true,
		'has_archive' => true,
		'supports' => array('title','editor','thumbnail','custom-fields'),
		'menu_position' => 40,
		'menu_icon' => 'dashicons-testimonial'
	);
	register_post_type('temoignage', $arguments);
}
add_action('init','ajouterType_Temoignage');