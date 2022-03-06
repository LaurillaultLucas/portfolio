<?php

namespace Portfolio;

class Plugin {

    public function __construct()
    {
       // Constructor side i will place all my add_action, these allow me to connect a method on a hook 
       add_action(
        'init',
        [$this, 'portfolio_create_project_post_type']
        );

        add_action(
        'init',
        [$this, 'portfolio_create_about_post_type']
        );

        add_action(
        'init',
        [$this, 'portfolio_create_techno_custom_taxonomy']
        );

        add_action(
            'init',
            [$this, 'portfolio_create_myWork_post_type']
        );


    }

    public function portfolio_create_project_post_type()
    {

        // Method that allows us to add CPT
        $labels = [
            'name' => 'Projets',
            'all_items' => 'Tout les projets',
            'singular_name' => 'Projet',
            'add_new_item' => 'Ajouter un projet',
            'edit_item' => 'Modifier le projet',
            'menu_name' => 'Projets'
        ];

        $args = [
            'labels' => $labels,
            'public' => true,
            'show_in_rest' => true,
            'has_archive' => true,
            'supports' => [
                'title',
                'editor',
                'thumbnail',
                'revisions',
                'excerpt',
                'custom-fields'
            ],
            'menu_position' => 5,
            'menu_icon' => 'dashicons-code-standards'
        ];

        register_post_type('projects', $args);

    }

    public function portfolio_create_about_post_type()
    {

        // Method that allows us to add CPT
        $labels = [
            'name' => 'À propos',
            'all_items' => 'Tout les articles',
            'singular_name' => 'À propos',
            'add_new_item' => 'Ajouter un post',
            'edit_item' => 'Modifier le post',
            'menu_name' => 'À propos'
        ];

        $args = [
            'labels' => $labels,
            'public' => true,
            'show_in_rest' => true,
            'has_archive' => true,
            'supports' => [
                'title',
                'editor',
                'thumbnail',
                'revisions',
                'excerpt',
                'custom-fields'
            ],
            'menu_position' => 5,
            'menu_icon' => 'dashicons-book'
        ];

        register_post_type('about', $args);

    }

    public function portfolio_create_techno_custom_taxonomy()
    {
        $labels = [
            'name' => 'Technos',
            'new_item_name' => 'Nom d\'une nouvelle techno',
        ];

        $args = [
            'labels' => $labels,
            'public' => true,
            'show_in_rest' => true,
            'hierarchical' => false
        ];

        register_taxonomy('technos', 'projects', 'about', $args);
    }

    public function portfolio_create_myWork_post_type()
    {

        // Method that allows us to add CPT
        $labels = [
            'name' => 'Mes réalisations',
            'all_items' => 'Tout les articles',
            'singular_name' => 'Mes réalisations',
            'add_new_item' => 'Ajouter un post',
            'edit_item' => 'Modifier le post',
            'menu_name' => 'Mes réalisations'
        ];

        $args = [
            'labels' => $labels,
            'public' => true,
            'show_in_rest' => true,
            'has_archive' => true,
            'supports' => [
                'title',
                'editor',
                'thumbnail',
                'revisions',
                'excerpt',
                'custom-fields'
            ],
            'menu_position' => 6,
            'menu_icon' => 'dashicons-art'
        ];

        register_post_type('myWork', $args);

    }


}