<?php

function cf2m_init_theme(){
    add_theme_support('post-thumbnails');
}

//hook
add_action('after_setup_theme', 'cf2m_init_theme');

//Création de l'URL de l'image mise en avant
function cf2m_URL_image_en_avant($data){
    $image_id = $data->data['featured_media'];
    $image_url = wp_get_attachment_image_src($image_id, 'medium large');
    if($image_url){
        $data->data['Image_en_avant'] = $image_url[0];
    }
    return $data;
}

add_filter('rest_prepare_temoignage', 'cf2m_URL_image_en_avant', 10, 1);

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










/*
Examples Pierre


// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'cv-portfolio-blocks-animate-css','cv-portfolio-blocks-style','cv-portfolio-blocks-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION

// Un exemple d'utilisation des hooks : création d'une page d'administration
function page_bloginfo() {
	?>
	<h1>Page de la fonction bloginfo()</h1>
	<h2>Ici on peut découvrir les valeurs renvoyées par la fonction bloginfo de WordPress</h2>
	<?php
	// suite du code...
}

function menu_bloginfo() {
	add_menu_page( 'Bloginfo' , 'Liste Bloginfo' , 'manage_options', 'bloginfo_liste', 'page_bloginfo', 'dashicons-admin-generic' , 30 );
}

add_action ( 'admin_menu' , 'menu_bloginfo' );

// Ajouter un nouveau type de données : Projet
function ajouterType_Projet() {
	$labels = array(
		'name' => 'Projets',
		'singular_name' => 'Projet',
		'add_new' => 'Ajouter un projet',
		'add_new_item' => 'Ajouter un projet',
		'not_found' => 'Aucun projet trouvé',
		'all_items' => 'Tous les projets',
		'menu_name' => 'Projets'
	);
	
	$arguments = array(
		'label' => 'Projet',
		'labels' => $labels,
		'public' => true,
		'show_in_rest' => true,
		'show_in_admin_bar' => true,
		'has_archive' => true,
		'supports' => array('title','editor','thumbnail','custom-fields'),
		'menu_position' => 40,
		'menu_icon' => 'dashicons-open-folder'
	);
	
	register_post_type('projet', $arguments);
}
add_action('init','ajouterType_Projet');

// Ajouter une metabox pour l'URL du projet
function projet_metabox_url($post){
	?>
	<input id="url" type="url" size="100" name="url" value="<?php echo get_post_meta($post->ID, 'url', true); ?>">
	<?php
}

function ajouter_meta_projet_url(){
	add_meta_box('projet_url','URL du projet','projet_metabox_url',['projet','post']);
}

add_action('add_meta_boxes','ajouter_meta_projet_url');

function sauver_projet_url($post_id, $cle){
	if (array_key_exists($cle,$_POST)) {
		if ($_POST[$cle] == '') {
			delete_post_meta($post_id, $cle);
		} else {
			update_post_meta($post_id, $cle,$_POST[$cle]);
		}
	}
}

function sauver_projet($post_id){
	sauver_projet_url($post_id,'url');
}
add_action('save_post','sauver_projet');

// Ajouter une colonne dans l'admin

function projet_colonne_url($col){
	return [
		'cb' => $col['cb'],
		'title' => $col['title'],
		'url' => 'URL du projet',
		'date' => $col['date']
	];
}
add_filter('manage_projet_posts_columns', 'projet_colonne_url');

function projet_url($col,$id){
	if ($col === 'url') {
		echo get_post_meta($id,'url',true);
	}
}
add_filter('manage_projet_posts_custom_column', 'projet_url',10,2);
*/