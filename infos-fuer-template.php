<?php 

/* Template Name: Layout Informationen für... */

?>

<?php get_header(); ?>
		
<div class="site-container">
	<div class="page-container adressaten">
		<div class="content-container adressaten">
			<?php if ( have_posts() ) : ?>
			<?php while( have_posts() ) : the_post(); ?>
				<h1 class="adressat-title"><?php the_title(); ?></h1>
				<?php the_content(); ?>
			<?php endwhile; ?>
		<?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>