<?php
/*
Template Name: Page - Area
Template Post Type: area
*/
get_header(); ?>

<section class="area--head" style="background:url(<?php the_field('unit_header_image'); ?>)repeat-x top center fixed;">
	<!-- to update css if no title - adjust padding -->
	<h1 class="font--overlay-head"><?php the_title(); ?></h1>
</section>

<section class="area--template">
	<div class="row">
		<div class="small-12 medium-10 medium-centered large-10 columns">
			<section class="block--template">
				<?php get_template_part('templates/page-buildingblocks'); ?>
			</section>
		</div>
	</div><!-- end .row -->
</section>

<section class="area--template-additional">
	<div class="row">
		<div class="small-12 medium-10 medium-centered large-10 columns">
			<section class="block--template-additional">
				<?php get_template_part('templates/area-buildingblocks-additional'); ?>
			</section>
		</div>
	</div><!-- end .row -->
</section>

<section class="area--contact">
	<?php get_template_part('contact'); ?>
</section>

<?php get_footer(); ?>