<li class="postFeed-post formatted" id="post-<?php the_ID(); ?>">
    <h2 class="postFeed-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p class="postFeed-byline">Posted by <?php the_author_posts_link(); ?> on <?php the_time('F j, Y'); ?> in <?php the_category(', '); ?> | <?php comments_number(); ?></p>
    <?php the_excerpt(); ?>
</li>