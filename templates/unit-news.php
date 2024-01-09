<div class="unit--news">
	<div class="row">
		<div class="small-12 medium-12 large-12 columns">

            <!-- If post category 'year' or 'annee', do this: -->
            <?php if(in_category('year')): ?>
                <section class="unit--news-container" >
                    <section class="item--news-image">
                        <figure class="shadow">
                            <img src="<?php the_field('year_marker'); ?>" alt="Year marker">
                        </figure>
                    </section>
                </section>

            <!-- else -->
            <?php else: ?>
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
                        <!--
                            <section class="item--news-additional">
                            </section>
                        -->
                    </section>
                </section>
            <? endif; ?>

        </div>
	</div><!-- end .row -->
</div>