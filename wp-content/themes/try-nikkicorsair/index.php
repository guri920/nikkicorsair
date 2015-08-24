<div class="container">
	<div class="row">
		<section class="postFeed col-sm-8">
			<ol class="postFeed-postList">
				<?php while( have_posts() ) : the_post(); ?>

					<li class="postFeed-post formatted" id="post-<?php the_ID(); ?>">
						<h2 class="postFeed-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<p class="postFeed-byline">Posted by <?php the_author_posts_link(); ?> on <?php the_time('F j, Y'); ?> in <?php the_category(', '); ?> | <?php comments_number(); ?></p>
						<?php the_excerpt(); ?>
					</li>

				<?php endwhile; ?>
			</ol>
		</section>
	</div>
</div>