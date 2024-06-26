<?php get_header(); ?>

<main id="site-content">
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <h1 class="post-title"><?= the_title() ?></h1>
                <div class="post-meta">
                    <div class="post-author">
                        <?= get_avatar($post->post_author) ?>
                        <?= get_the_author_meta('nickname', $post->post_author) ?>
                    </div>
                    <div class="post-date">
                        <time><?= wp_date('j F Y', strtotime($post->post_date))  ?></time>
                    </div>
                </div>
                <div class="post-content">
                    <?= get_the_post_thumbnail($post, 'large'); ?>
                    <?= the_content() ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>