<?php
/* Template: Front Page */
get_header();

$upcoming_movies = tmdb_get_movies('upcoming', 10);
$genres          = tmdb_get_genres();
$actors          = tmdb_get_actors(10); 

if (!empty($upcoming_movies)): ?>
    <section class="tmdb-movies">
        <h2>Upcoming Movies</h2>
        <div class="movie-grid">
            <?php foreach ($upcoming_movies as $movie): ?>
                
                <div class="movie-card">
                    <?php if ($movie['poster_path']): ?>
                        <img src="https://image.tmdb.org/t/p/w500<?= esc_attr($movie['poster_path']) ?>" alt="<?= esc_attr($movie['title']) ?>">
                    <?php endif; ?>
                    <h3><?= esc_html($movie['title']) ?></h3>
                    <p>Release Date: <?= esc_html($movie['release_date']) ?></p>

                    <?php if (!empty($movie['genre_ids'])): ?>
                        <p>Genres:
                            <?php
                            $movie_genres = array_map(function($id) use ($genres) {
                                return $genres[$id] ?? 'Unknown';
                            }, $movie['genre_ids']);
                            echo esc_html(implode(', ', $movie_genres));
                            ?>
                        </p>
                    <?php endif; ?>

                </div>
            <?php endforeach; ?>
        </div>
    </section>
<?php else: ?>
    <p>No movies found.</p>
<?php endif; ?>

<?php if (!empty($actors)): ?>
    <section class="tmdb-actors">
        <h2>Popular Actors</h2>
        <div class="actor-grid">
            <?php foreach ($actors as $actor): ?>
                <div class="actor-card">
                    <?php if ($actor['profile_path']): ?>
                        <img src="https://image.tmdb.org/t/p/w300<?= esc_attr($actor['profile_path']) ?>" alt="<?= esc_attr($actor['name']) ?>">
                    <?php endif; ?>
                    <h3><?= esc_html($actor['name']) ?></h3>

                </div>
            <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>
