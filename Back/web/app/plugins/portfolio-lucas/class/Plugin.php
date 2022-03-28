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
            [$this, 'portfolio_create_link_post_type']
        );

        add_action(
            'init', 
            [$this, 'portfolio_create_work_type_taxonomy']
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
            'menu_icon' => 'dashicons-code-standards',
            'map_meta_cap' => true,
        ];

        register_post_type('projects', $args);

        register_meta('post', 'github', [
            'object_subtype' => 'projects', 
            'type'           => 'string',
            'description'    => 'github link',
            'single'         => true,
            'show_in_rest'   => true,
        ]);
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

    public function portfolio_create_link_post_type()
    {

        // Method that allows us to add CPT
        $labels = [
            'name' => 'Liens Footer',
            'all_items' => 'Tout les liens',
            'singular_name' => 'lien',
            'add_new_item' => 'Ajouter un lien',
            'edit_item' => 'Modifier le lien',
            'menu_name' => 'Liens'
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
            'menu_position' => 7,
            'menu_icon' => 'dashicons-admin-links',
            'map_meta_cap' => true,
        ];

        register_post_type('link', $args);

        register_meta('post', 'lienGithub', [
            'object_subtype' => 'link', 
            'type'           => 'string',
            'description'    => 'footer link',
            'single'         => true,
            'show_in_rest'   => true,
        ]);

        register_meta('post', 'lienLinkedin', [
            'object_subtype' => 'link', 
            'type'           => 'string',
            'description'    => 'footer link',
            'single'         => true,
            'show_in_rest'   => true,
        ]);

        register_meta('post', 'email', [
            'object_subtype' => 'link', 
            'type'           => 'string',
            'description'    => 'footer link',
            'single'         => true,
            'show_in_rest'   => true,
        ]);
    }

    public function portfolio_create_work_type_taxonomy()
    {
        // Methode qui nous permet d'ajouter la Custom taxo "Type de projet"
        register_taxonomy(
            'type-de-projet',
            ['projects'], // seul les projets pourront avoir un/des types
            [
                'label' => 'Type',
                'hierarchical' => true,
                'public' => true,
                'show_in_rest' => true
            ]
        );
    }
}