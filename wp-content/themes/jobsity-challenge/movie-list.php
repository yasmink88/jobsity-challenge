<?php
/*
Template Name: Movies Archive
*/

get_header();

$movies = tmdb_get_movies('popular');

if (!empty($movies)): ?>
    <section class="tmdb-movies">
        <h2>All Movies</h2>
        <div class="movie-grid">
            <?php foreach ($movies as $movie): ?>
                
                <div class="movie-card">
                    <?php if ($movie['poster_path']): ?>
                        <img src="https://image.tmdb.org/t/p/w500<?= esc_attr($movie['poster_path']) ?>" alt="<?= esc_attr($movie['title']) ?>">
                    <?php endif; ?>
                    <h3><?= esc_html($movie['title']) ?></h3>

                </div>
            <?php endforeach; ?>
        </div>
    </section>
<?php else: ?>
    <p>No movies found.</p>
<?php endif; ?>