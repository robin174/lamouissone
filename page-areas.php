<?php
/*
Template Name: Page - Areas
*/
get_header(); ?>

<section class="area--logo">
	<figure>
		<img src="<?php echo get_template_directory_uri(); ?>/images/la-mouissone-logo-general.png" alt="La Mouissone - Olive Grove logo">
		<!-- Social media links here. Or pinned to top. -->
	</figure>
</section>

<section class="area--template">
	<div class="row">
		<div class="small-12 medium-10 medium-centered large-10 columns">
			<section class="block--areas">
				<div class="row">
				<div class="small-12 medium-12 large-12 columns">
					<h3 class="title--home-areas">The Areas of La Mouissone</h3>
				</div>
				<?php
			        $args=array(
			            'post_type' => 'area',
			            'post_status' => 'publish',
			            'order' => 'desc'
			        );
			        $my_query = null;
			        $my_query = new WP_Query($args);
			        if( $my_query->have_posts() ) {
			        while ($my_query->have_posts()) : $my_query->the_post(); ?>
	            		<div class="small-12 medium-4 large-4 columns">
							<section class="unit--row-areas link--unit-div">
								<section class="unit--featured">
									<figure>
										<?php the_post_thumbnail('large'); ?>
									</figure>
								</section>
								<section class="square">
									<h5 class="title--home-areas"><?php the_title();?></h5>
								</section>
								<a class="link--unit" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Link</a>
							</section>
						</div>
			    	<?php endwhile; }
			    	wp_reset_query(); ?>
			    </div>
			</section>
		</div>
	</div><!-- end .row -->
</section>

<?php get_footer(); ?>