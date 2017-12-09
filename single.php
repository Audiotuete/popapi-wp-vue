
<?php get_header(); ?>

<main class="site-container">
	<div class="page-container">
      <?php if ( have_posts() ) : ?>
      <?php while( have_posts() ) : the_post(); ?>
        <div class="single-post-container">
          <div class="single-post-header">
            <h4 class="single-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <span class="post-info"><?php the_time('j. F, Y'); ?></span>
          </div>
          <div class="single-post-content">
            <?php the_content(); ?>
            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail('post-thumbnail-image'); ?>
            <?php endif; ?>
          </div>
      </div>
      <?php endwhile; ?>
      <?php endif; ?> 
	</div>
</main>	

<?php get_footer(); ?>