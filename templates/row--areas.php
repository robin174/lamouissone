<section>
	<div class="row">
		<div class="small-12 medium-12 large-12 columns">
			<div class="row">
				<div class="small-12 medium-12 large-12 columns">
					<h3 class="title--home-areas"><?php the_field('unit_areas_title');?></h3>
				</div>
				<?php
			        $args=array(
			            'post_type' => 'area',
			            'post_status' => 'publish',
			            'order' => 'desc',
			            'posts_per_page' => 3
			        );
			        $my_query = null;
			        $my_query = new WP_Query($args);
			        if( $my_query->have_posts() ) {
			        while ($my_query->have_posts()) : $my_query->the_post(); ?>
	            		<?php get_template_part('templates/area--home-areas'); ?> 
			    	<?php endwhile; }
			    	wp_reset_query(); ?>
				    <div class="small-12 medium-12 large-12 columns">
				    	<p class="all-areas"><a href="<?php echo get_page_link( get_page_by_path( 'areas' ) ); ?>" title="View all areas of La Mouissone">See all areas</a></p>
			    	</div>
			</div><!-- end .row -->
		</div>
	</div><!-- end .row -->
</section>