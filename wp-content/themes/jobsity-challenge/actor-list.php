<?php
/*
Template Name: Actors Archive
*/

get_header();

$actors = tmdb_get_actors();

if (!empty($actors)): ?>
    <section class="tmdb-actors">
        <h2>All Actors</h2>
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