<?php

// Register Custom Post Type
function gallery_post_type() {

    $labels = array(
        'name'                  => _x( 'Galerie', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Galeria', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Galerie', 'text_domain' ),
        'name_admin_bar'        => __( 'Galerie', 'text_domain' ),
        'archives'              => __( 'Archiwum Galerii', 'text_domain' ),
        'parent_item_colon'     => __( 'Rodzic Galerii:', 'text_domain' ),
        'all_items'             => __( 'Wszystkie Galerie', 'text_domain' ),
        'add_new_item'          => __( 'Dodaj nową Galerie', 'text_domain' ),
        'add_new'               => __( 'Dodaj nową', 'text_domain' ),
        'new_item'              => __( 'Nowa Galeria', 'text_domain' ),
        'edit_item'             => __( 'Edytuj Galerie', 'text_domain' ),
        'update_item'           => __( 'Zaaktualizuj Galerie', 'text_domain' ),
        'view_item'             => __( 'Zobacz Galerie', 'text_domain' ),
        'search_items'          => __( 'Szukaj Galerii', 'text_domain' ),
        'not_found'             => __( 'Nie znaleziono', 'text_domain' ),
        'not_found_in_trash'    => __( 'Nie znaleziono w koszu', 'text_domain' ),
        'featured_image'        => __( 'Wyróżniony obrazek', 'text_domain' ),
        'set_featured_image'    => __( 'Ustaw wyróżniony obrazek', 'text_domain' ),
        'remove_featured_image' => __( 'Usuń wyróżniony obrazek', 'text_domain' ),
        'use_featured_image'    => __( 'Użyj jako wyróżniony obrazek', 'text_domain' ),
        'insert_into_item'      => __( 'Wstaw do Galerii', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Wgrano do Galerii', 'text_domain' ),
        'items_list'            => __( 'Lista Galerii', 'text_domain' ),
        'items_list_navigation' => __( 'Lista Galerii', 'text_domain' ),
        'filter_items_list'     => __( 'Filtruj Galerie', 'text_domain' ),
    );

    $args = array(
        'label'                 => __( 'Galeria', 'text_domain' ),
        'description'           => __( 'Post type used for site galleries', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title' ),
        'taxonomies'            => array( 'galleries' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 15,
        'menu_icon'             => 'dashicons-format-gallery',
        'show_in_admin_bar'     => false,
        'show_in_nav_menus'     => false,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );

    register_post_type( 'gallery', $args );

}

add_action( 'init', 'gallery_post_type', 0 );

// Register Custom Taxonomy
function galleries() {

    $labels = array(
        'name'                       => _x( 'Kategorie', 'Taxonomy General Name', 'Galleries' ),
        'singular_name'              => _x( 'Kategoria', 'Taxonomy Singular Name', 'Galleries' ),
        'menu_name'                  => __( 'Kategoria', 'Galleries' ),
        'all_items'                  => __( 'Wszystkie kategorie:', 'Galleries' ),
        'parent_item'                => __( 'Kategoria nadrzędna:', 'Galleries' ),
        'parent_item_colon'          => __( 'Kategoria nadrzędna:', 'Galleries' ),
        'new_item_name'              => __( 'Nazwa nowej kategorii', 'Galleries' ),
        'add_new_item'               => __( 'Dodaj nową kategorię', 'Galleries' ),
        'edit_item'                  => __( 'Edytuj kategorię', 'Galleries' ),
        'update_item'                => __( 'Zapisz kategorię', 'Galleries' ),
        'view_item'                  => __( 'Zobacz kategorię', 'Galleries' ),
        'separate_items_with_commas' => __( 'Oddziel kategorie przecinkami', 'Galleries' ),
        'add_or_remove_items'        => __( 'Dodaj lub usuń kategorię', 'Galleries' ),
        'choose_from_most_used'      => __( 'Wybierz z najczęściej używanych', 'Galleries' ),
        'popular_items'              => __( 'Najpopularniejsze kategorie', 'Galleries' ),
        'search_items'               => __( 'Szukaj kategorii', 'Galleries' ),
        'not_found'                  => __( 'Nie znaleziono', 'Galleries' ),
        'no_terms'                   => __( 'Brak kategorii', 'Galleries' ),
        'items_list'                 => __( 'Lista kategorii', 'Galleries' ),
        'items_list_navigation'      => __( 'Nawigacja listy kategorii', 'Galleries' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true,
        'default_term'               => 'projekty-artystyczne'
    );
    register_taxonomy( 'galleries', array( 'gallery' ), $args );

}
add_action( 'init', 'galleries', 0 );

?>