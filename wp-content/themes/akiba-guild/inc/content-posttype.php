<?php

/**************Games Post Type****************/

function games_post_type() {
  register_post_type('Games', array(
    'supports' => array('title', 'editor', 'excerpt','author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
    'rewrite' => array('slug' => 'games'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Games',
      'add_new_item' => 'Add New Game',
      'edit_item' => 'Edit Game',
      'all_items' => 'All Games',
      'singular_name' => 'Game',
    ),
    'taxonomies' => array('category'),
    'menu_icon' => 'dashicons-games',
    'show_in_rest' => true,
    'supports' => array('title','editor')
  ));
}

add_action('init', 'games_post_type');