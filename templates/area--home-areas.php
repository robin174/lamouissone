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