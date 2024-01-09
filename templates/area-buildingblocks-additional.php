<?php while(has_sub_field("add_area_c")): ?>

	<!-- Inspiration -->
	<?php if(get_row_layout() == 'block_inspir'): ?>
		<section class="additional">
			<div class="row">
			    <div class="small-12 medium-3 large-3 columns">
        			<h3 class="reduced"><?php the_sub_field('u_title');?></h3>
        			<img src="<?php echo get_template_directory_uri(); ?>/images/lm-icon-bill-horse.png">
			    </div>
			    <div class="small-12 medium-9 large-9 columns">

		    		<?php if( have_rows('u_bullet_inspir') ): // Repeater 01 Field Name ?>
		    			<?php while( have_rows('u_bullet_inspir') ): the_row(); ?>
		    				<h4><?php the_sub_field('ut_insp_list'); ?></h4>

		    					<?php if( have_rows('u_bullet_insp') ): // Repeater 02 Field Name ?>
		    						<ul>
		    							<?php while( have_rows('u_bullet_insp') ): the_row(); ?>
		    								<li><?php the_sub_field('item_inspiration'); ?></li>
		    							<?php endwhile; ?>
		    						</ul>
		    					<?php endif; ?>

		    			<?php endwhile; ?>
		    		<?php endif; ?>

			    </div>
			</div><!-- end .row -->
		</section>
	<?php endif; ?>

	<!-- Plant List -->
	<?php if(get_row_layout() == 'block_plant'): ?>
		<section class="additional">
			<div class="row">
				<div class="small-12 medium-3 large-3 columns">
        			<h3 class="reduced"><?php the_sub_field('u_title');?></h3>
        			<img src="<?php echo get_template_directory_uri(); ?>/images/lm-icon-bill-basket.png">
			    </div>
			    <div class="small-12 medium-9 large-9 columns">

		    		<?php if( have_rows('u_bullet_plant') ): // Repeater 01 Field Name ?>
		    			<?php while( have_rows('u_bullet_plant') ): the_row(); ?>
		    				<h4><?php the_sub_field('ut_pl_list'); ?></h4>

		    					<?php if( have_rows('u_bullet_pl') ): // Repeater 02 Field Name ?>
		    						<ul>
		    							<?php while( have_rows('u_bullet_pl') ): the_row(); ?>
		    								<li><?php if( get_sub_field('item_plant_latin') ): ?><span class="add-latin"><?php the_sub_field('item_plant_latin'); ?>&nbsp;</span><?php endif; ?><?php if( get_sub_field('item_plant_eng') ): ?><span class="to-add"><?php the_sub_field('item_plant_eng'); ?><?php endif; ?></li>
		    							<?php endwhile; ?>
		    						</ul>
		    					<?php endif; ?>

		    			<?php endwhile; ?>
		    		<?php endif; ?>

				</div>
			</div><!-- end .row -->
		</section>
	<?php endif; ?>

	<!-- Reading List -->
	<?php if(get_row_layout() == 'block_read'): ?>
		<section class="additional">
			<div class="row">
				<div class="small-12 medium-3 large-3 columns">
        			<h3 class="reduced"><?php the_sub_field('u_title');?></h3>
        			<img src="<?php echo get_template_directory_uri(); ?>/images/lm-icon-bill-jugs.png">
			    </div>
			    <div class="small-12 medium-9 large-9 columns">

			    	<?php if( have_rows('u_bullet_reading') ): // Repeater 01 Field Name ?>
		    			<?php while( have_rows('u_bullet_reading') ): the_row(); ?>
		    				<h4><?php the_sub_field('ut_read_list'); ?></h4>

		    					<?php if( have_rows('u_bullet_read') ): // Repeater 02 Field Name ?>
		    						<ul>
		    							<?php while( have_rows('u_bullet_read') ): the_row(); ?>
		    								<li><span class="add-title"><?php the_sub_field('item_title'); ?>,&nbsp;</span><?php if( get_sub_field('item_author') ): ?><span class="to-add"><?php the_sub_field('item_author'); ?></span><br><?php endif; ?>
		    								<?php if( get_sub_field('item_isbn') ): ?><span class="to-add"><?php the_sub_field('item_isbn'); ?></span><?php endif; ?></li>
		    							<?php endwhile; ?>
		    						</ul>
		    					<?php endif; ?>

		    			<?php endwhile; ?>
		    		<?php endif; ?>

			    </div>
			</div><!-- end .row -->
		</section>
	<?php endif;?>

	<!-- Supplier List-->
	<?php if(get_row_layout() == 'block_sup'): ?>
		<section class="additional">
			<div class="row">
				<div class="small-12 medium-3 large-3 columns">
        			<h3 class="reduced"><?php the_sub_field('u_title');?></h3>
        			<img src="<?php echo get_template_directory_uri(); ?>/images/lm-icon-bill-lemons.png">
			    </div>
			    <div class="small-12 medium-9 large-9 columns">

			    	<?php if( have_rows('u_bullet_supplier') ): // Repeater 01 Field Name ?>
		    			<?php while( have_rows('u_bullet_supplier') ): the_row(); ?>
		    				<h4><?php the_sub_field('ut_sup_list'); ?></h4>

		    					<?php if( have_rows('u_bullet_sup') ): // Repeater 02 Field Name ?>
		    						<ul>
		    							<?php while( have_rows('u_bullet_sup') ): the_row(); ?>
		    								<li><?php if( get_sub_field('item_name') ): ?><span class="add-title"><?php the_sub_field('item_name'); ?>:</span>&nbsp;<?php endif; ?><?php if( get_sub_field('item_location') ): ?><span class="to-add"><?php the_sub_field('item_location'); ?></span><?php endif; ?><br>
		    									<?php if( get_sub_field('item_url_clean') ): ?><span class="to-add"><a href="<?php the_sub_field('item_url_full'); ?>" target="_blank" title="<?php the_sub_field('item_name'); ?>"><?php the_sub_field('item_url_clean'); ?></a></span><?php endif; ?></li>
		    							<?php endwhile; ?>
		    						</ul>
		    					<?php endif; ?>

		    			<?php endwhile; ?>
		    		<?php endif; ?>

			    </div>
			</div><!-- end .row -->
		</section>
	<?php endif;?>

<?php endwhile; ?>