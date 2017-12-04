<?php get_header(); ?>

<main class="site-container">
	<div class="page-container">
			<div class="content-container">
				<?php if ( have_posts() ) : ?>
					<?php while( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; ?>
				<?php endif; ?>
        <div class="supporter-logos">
          <?php dynamic_sidebar('supporter-logos')?>
        </div>
			</div>
			<div class="slider-container"></div>
	</div>

</main>	

<?php get_footer(); ?>