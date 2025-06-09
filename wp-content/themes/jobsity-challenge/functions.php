<?php

function mytheme_enqueue_styles() {
    // Main stylesheet
    wp_enqueue_style(
        'mytheme-style', // Handle name
        get_template_directory_uri() . '/style.css', // File URL
        [],              // Dependencies
        filemtime(get_template_directory() . '/style.css'), // Cache-busting version number
        'all'            // Media type
    );
}

function register_my_menus() {
    register_nav_menus([
        'main-menu' => __('Main Menu'),
    ]);
}
add_action('after_setup_theme', 'register_my_menus');

add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');
// Function to fetch movies by categort from TMDb API
function tmdb_get_movies($type, $q = null) {
    $url = 'https://api.themoviedb.org/3/movie/' . $type . '?api_key=' . TMDB_API_KEY;
    $response = wp_remote_get($url);
    if (is_wp_error($response)) return [];
    $body = wp_remote_retrieve_body($response);
    $data = json_decode($body, true);

    if ($q !== null) {
        return array_slice($data['results'] ?? [], 0, $q);
    }

    return $data['results'] ?? [];
    }

// Function to fetch genres from TMDb API
function tmdb_get_genres() {
    $url = 'https://api.themoviedb.org/3/genre/movie/list?api_key=' . TMDB_API_KEY;

    $response = wp_remote_get($url);
    if (is_wp_error($response)) return [];

    $body = wp_remote_retrieve_body($response);
    $data = json_decode($body, true);

    $genres = [];
    if (!empty($data['genres'])) {
        foreach ($data['genres'] as $genre) {
            $genres[$genre['id']] = $genre['name'];
        }
    }

    return $genres;
}

// Function to fetch actors from TMDb API
function tmdb_get_actors($q = null) {
    $url = 'https://api.themoviedb.org/3/person/popular?api_key=' . TMDB_API_KEY;
    $response = wp_remote_get($url);
    if (is_wp_error($response)) return [];
    $body = wp_remote_retrieve_body($response);
    $data = json_decode($body, true);
    
    if ($q !== null) {
        return array_slice($data['results'] ?? [], 0, $q);
    }
    
    return $data['results'] ?? [];
}