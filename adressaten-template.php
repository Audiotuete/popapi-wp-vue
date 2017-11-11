<?php 

/* 
Template Name: Layout Adressaten 
Template Post Type: adressaten
*/

?>


<?php get_header(); ?>
		
<div class="site-container">
	<div class="page-container adressaten">
		<div class="content-container adressaten">
			<?php if ( have_posts() ) : ?>
			<?php while( have_posts() ) : the_post(); ?>
				<h1 class="adressat-title"><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<p><strong>Beispiele für mögliche Maßnahmen in den Bereichen:</strong></p>
		</div>
				<div class="beispielmassnahmen">
					<div class="massnahme governance">
						<h5 class="bereich-title">Governance</h4>
						<?php echo get_post_meta($post->ID, '_governance', true); ?>
						<a class="link-to-papier" href="http://www.nachhaltige-hochschulen.de/positionspapier/#/governance">Mehr zum Thema Governance und Nachhaltigkeit</a>
					</div>
					<div class="massnahme betrieb">
						<h5 class="bereich-title">Betrieb</h4>
						<?php echo get_post_meta($post->ID, '_betrieb', true); ?>
						<a class="link-to-papier"  href="http://www.nachhaltige-hochschulen.de/positionspapier/#/betrieb">Mehr zum Thema Nachhaltigkeit im Betrieb</a>
					</div>
					<div class="massnahme lehre">
						<h5 class="bereich-title">Lehre</h4>	
						<?php echo get_post_meta($post->ID, '_lehre', true); ?>
						<a class="link-to-papier"  href="http://www.nachhaltige-hochschulen.de/positionspapier/#/lehre">Mehr zu Nachhaltigkeit und Ethik in der Lehre</a>
					</div>
					<div class="massnahme forschung">
						<h5 class="bereich-title">Forschung</h4>
						<?php echo get_post_meta($post->ID, '_forschung', true); ?>
						<a class="link-to-papier"  href="http://www.nachhaltige-hochschulen.de/positionspapier/#/forschung">Mehr zum Thema Forschung im Kontext von Nachhaltigkeit und Ethik</a>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
		
	</div>
</div>

<?php get_footer(); ?>