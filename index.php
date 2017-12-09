<?php get_header(); ?>

<article class="site-container">
	<div class="page-container">
			<div class="posts-list-container">
				<?php if ( have_posts() ) : ?>
					<?php while( have_posts() ) : the_post(); ?>
					<div class="posts-item-container">
					<?php if ( has_post_thumbnail() ) : ?>
						<a href="<?php the_permalink(); ?>" class="posts-thumbnail">
							<?php the_post_thumbnail('post-thumbnail'); ?>
						</a>
					<?php endif; ?>
						<div class="posts-content">
							<div class="posts-header">
								<h4 class="posts-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
								<span class="post-info"><?php the_time('j. F, Y'); ?></span>
							</div>
							<div class="posts-excerpt">
								<p>
								<?php the_excerpt(); ?>
								<a class="posts-read-more" href="<?php the_permalink(); ?>">weiterlesen &raquo;</a>
								</p>
							</div>
						</div>
					</div>
					<hr style="border-top: rgba(0, 0, 0, 0.1);">
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
	</div>
</article>	

<?php get_footer(); ?>