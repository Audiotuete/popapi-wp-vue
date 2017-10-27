<?php get_header(); ?>
		
<div class="site-container">
	<div class="page-container">
		<div class="content-container">
		<?php if ( have_posts() ) : ?>
			<?php while( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		<?php endif; ?>
		</div>
		<div class="slider-container"></div>
	</div>
</div>

<?php get_footer(); ?>