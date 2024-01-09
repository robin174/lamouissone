<?php
/*
Template Name: Page - Home NEW
*/
get_header(); ?>

<section class="area--logo">
	<div class="row">
		<div class="small-12 medium-10 medium-centered large-10 columns">
			<section class="block--logo">
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/images/la-mouissone-logo-general.png" alt="La Mouissone - Olive Grove logo">
				</figure>
			</section>
		</div>
	</div><!-- end .row -->
</section>

<section class="area--template">
	<div class="row">
		<div class="small-12 medium-12 medium-centered large-11 columns">
			<section class="block--strapline">
				<h2 class="font--strapline-home text-center">The 'Oliveraie' of La Mouissone is spread over three hectares of the hill slopes below le Bois de la Marbière, to the east of Grasse.</h2>
			</section>

			<?php if( get_field('unit_homepage_advert') ): ?>
				<section class="block--advert">
					<a href="<?php the_field('unit_homepage_advert_link');?>" title=""><img src="<?php the_field('unit_homepage_advert_image');?>" title="Latest from La Mouissone"></a>
				</section>
			<?php endif; ?>

			<!-- Grid: New -->
			<section class="block--template">
				<?php get_template_part('templates/grid--homepage-new'); ?>
			</section>

			<!-- TO SORT: Square image sizes, colors, content... responsive-ness, insta block, no bullets...etc., make Instagram tile an H4??? -->

			<!-- Row: Areas) -->
			<section class="block--areas">
				<?php get_template_part('templates/row--areas'); ?>
			</section>

			<!-- Row: Instagram -->
			<!-- 
			<section class="block--instagram">
				<?php get_template_part('templates/row--instagram'); ?>
			</section>
			-->
			
		</div>
	</div><!-- end .row -->
</section>

<section class="area--contact">
	<?php get_template_part('contact'); ?>
</section>

<?php get_footer(); ?>