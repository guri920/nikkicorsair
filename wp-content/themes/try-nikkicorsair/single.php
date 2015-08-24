<?php the_post(); ?>

<section class="portfolio-piece">
    <div class="portfolio-piece-container container">
        <article class="composition">
            <h1 class="portfolio-piece-title"><?php the_title(); ?></h1>
            <?php if( $video = get_field('video') ) echo '<div class="video-container">' . $video . '</div>'; ?>
            <?php the_content(); ?>
        </article>
    </div>
</section>