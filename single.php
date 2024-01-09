<?php get_header(); ?>
			
<section class="area--template">
	<div class="row">
		<div class="small-12 medium-10 medium-centered large-10 columns">
			<section class="block--template">
				<p><i>News post preview:</i></p>
			</section>
		</div>
	</div>
	<div class="row">
		<div class="small-12 medium-6 medium-centered large-4 columns">
			<section class="block--news">
				
				<div class="unit--news">
					<div class="row">
						<div class="small-12 medium-12 large-12 columns"><!-- incase we want to take the design to different proportions -->
							<section class="unit--news-container" >
				                <section class="item--news-image">
				                    <figure class="shadow">
				                        <?php the_post_thumbnail('normal'); ?>
				                    </figure>
				                </section>
				                <section class="item--news-info">
				                    <span class="date--news"><?php custom_date_month(); ?></span>
				                	<h2 class="title--news"><?php the_title(); ?></h2>
				                    <?php the_field('post_description'); ?>
				                    <section class="item--news-additional">
				                        <!-- What would we add here -->
				                        <!-- AND Should we test flexbox? -->
				                    </section>
				                </section>
				            </section>
				        </div>
					</div><!-- end .row -->
				</div>

			</section>
		</div>
	</div><!-- end .row -->
</section>

<?php get_footer(); ?>