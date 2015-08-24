<li <?php post_class( array('portfolio-piece') ); ?> id="post-<?php the_ID(); ?>">
    <a class="portfolio-thumbnail-container" href="<?php the_permalink(); ?>">
        <img class="portfolio-thumbnail bw" src="<?php try_the_portfolio_piece_thumbnail_url( 'large', false ); ?>">
        <img class="portfolio-thumbnail color" src="<?php try_the_portfolio_piece_thumbnail_url( 'large', true ); ?>">
    </a>
    <h5 class="portfolio-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
</li>