<?php
/*
Template Name: Page - Home Old
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
		<div class="small-12 medium-10 medium-centered large-10 columns">
			<section class="block--strapline">
				<h2 class="font--strapline-home text-center"><?php the_field('unit_homepage_strapline');?></h2>
			</section>
			<?php if( get_field('unit_homepage_advert') ): ?>
				<section class="block--advert">
					<a href="<?php the_field('unit_homepage_advert_link');?>" title=""><img src="<?php the_field('unit_homepage_advert_image');?>" title="Latest from La Mouissone"></a>
				</section>
			<?php endif; ?>
			<section class="block--template">
				<?php get_template_part('templates/grid-homepage'); ?>
			</section>
			
			<!-- Updated: 2019 -->
			<section class="block--areas">
				<?php get_template_part('templates/row--areas'); ?>
			</section>

			<!-- needs to be updated as per Areas above: 2019, to archive -->
			<?php /*
			<section class="block--events">
				<?php get_template_part('templates/row--events'); ?>
			</section>
			*/ ?>
		</div>
	</div><!-- end .row -->
</section>

<section class="area--contact">
	<?php get_template_part('contact'); ?>
</section>

<?php get_footer(); ?>