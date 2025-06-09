<?php

function tmdb_get_upcoming_movies() {
    $api_key = 'c5e03873865e98f550b7600d62b8fe23';
    $url = 'https://api.themoviedb.org/3/movie/upcoming?api_key=' . $api_key;
    $response = wp_remote_get($url);
    if (is_wp_error($response)) return [];
    $body = wp_remote_retrieve_body($response);
    $data = json_decode($body, true);
    return $data['results'] ?? [];
}

tmdb_get_upcoming_movies();