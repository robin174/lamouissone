<?php if(get_row_layout() == 'box_design'): ?>
<div class="small-12 medium-12 large-6 columns">
	<div class="row">
		<div class="small-12 medium-12 large-12 columns">
			<!-- is this the right class below -->
			<section class="n-home-box link--unit-div" style="background-color:<?php the_sub_field('box_bgcolor'); ?>; margin-bottom:25px;">
				<div class="row">
					<div class="small-12 medium-6 large-6 columns">
						<section class="">
							<figure>
								<img class="border shadow" src="<?php the_sub_field('box_image'); ?>">
							</figure>
						</section>
					</div>
					<div class="small-12 medium-6 large-6 columns">
						<section class="n- link--unit-div">
							<div class="unit--square-single">
								<div class="unit--content-single">
									<div class="unit--table-single">
										<div class="unit--table-cell">
											<p class="grid--head-home"><?php the_sub_field('box_text_head'); ?></p>
											<h2 class="grid--main-home"><?php the_sub_field('box_text_main'); ?></h2>
											<?php /* <p style="margin-top: 25px;line-height: 1.1;color: white;">xxxx</p> */ ?>
											<p class="grid--cta-home"><?php the_sub_field('box_text_cta'); ?></p>
										</div>
									</div>
								</div>
							</div>
							
						</section>
					</div>
				</div><!-- end .row -->
				<a class="link--unit" href="<?php the_sub_field('box_link'); ?>" title="<?php the_title(); ?>">Link</a>
			</section>
		</div>
	</div><!-- end .row -->
</div>
<?php endif; ?>