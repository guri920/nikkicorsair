<?php the_post(); ?>

<section class="portfolio-piece">
    <div class="portfolio-piece-container container">
        <article class="composition">
            <h1 class="portfolio-piece-title"><?php the_title(); ?></h1>
            <?php if( $video = get_field('video') ) echo '<div class="video-container">' . $video . '</div>'; ?>
            <?php the_content(); ?>
        </article>
        
        <?php if( $gallery = get_field('gallery') ) : ?>
            <ul class="portfolio-piece-gallery">
                <?php foreach( $gallery as $image ) : ?>
                    <li class="portfolio-piece-gallery-thumbnail">
                        <a class="js-lightbox" rel="gallery" href="<?php echo $image['sizes']['gallery']; ?>">
                            <img src="<?php echo $image['sizes']['gallery-thumbnail']; ?>">
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>