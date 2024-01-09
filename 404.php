<?php get_header(); ?>

<section class="area--head" style="background:url(<?php the_field('unit_header_image'); ?>)repeat-x top center fixed;">
	<!-- to update css if no title - adjust padding -->
	<h1 class="font--overlay-head"><?php the_title(); ?></h1>
</section>

<section class="area--template">
	<div class="row">
		<div class="small-12 medium-4 large-4 columns">
			<!-- picture of hedge trimmers on floor with leaves -->
		</div>
		<div class="small-12 medium-8 large-8 columns">
			<section class="block--template">
				<h1><?php _e( '404 - Page Not Found', 'jointswp' ); ?></h1>
				<p><?php _e( 'The article you were looking for was not found, but maybe try looking again!', 'jointswp' ); ?></p>
			</section>
		</div>
	</div><!-- end .row -->
</section>

<?php get_footer(); ?>