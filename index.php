<?php get_header(); ?>

<article class="site-container">
	<div class="page-container">
			<div class="content-container">
				<?php if ( have_posts() ) : ?>
					<?php while( have_posts() ) : the_post(); ?>
					<div>
						<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<p>
						<?php the_post_thumbnail(); ?>
						<span class="post-info"><?php the_time('F jS, Y'); ?></span>
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>">weiter lesen &raquo;</a>
						</p>
					</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
	</div>
</article>	

<?php get_footer(); ?>