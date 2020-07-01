<?php while(has_sub_field("new_page_content")): ?>

    <?php if(get_row_layout() == 'block_subheading_h2'): // Subheading: h2?>
        <div class="row">
            <div class="small-12 medium-centered medium-10 large-9 columns">
                <h2 class="font--subheading"><?php the_sub_field('unit_subheading_h2'); ?></h2>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>

    <?php if(get_row_layout() == 'block_subheading_h3'): // Subheading: h3 ?>
        <div class="row">
            <div class="small-12 medium-centered medium-10 large-9 columns">
                <h3 class="font--subheading"><?php the_sub_field('unit_subheading_h3'); ?></h3>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>

    <?php if(get_row_layout() == 'block_introduction'): // Paragraph: Introduction ?>
        <div class="row">
            <div class="small-12 medium-centered medium-10 large-9 columns">
                <p class="intro"><?php the_sub_field('unit_introduction'); ?></p>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>

    <?php if(get_row_layout() == 'block_paragraph'): // Paragraph: Full Width ?>
        <div class="row">
            <div class="small-12 medium-centered medium-10 large-9 columns">
                <?php the_sub_field('unit_paragraph'); ?>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>
    
    <?php if(get_row_layout() == 'block_image'): // layout: Image / Caption - Full Width?>
        <div class="row">
            <div class="small-12 medium-12 large-12 columns">
                <figure class="in-article">
                    <img class="border-shadow" src="<?php the_sub_field('unit_image'); ?>" alt="" />
                    <?php if( get_sub_field('unit_image_caption') ): ?>
                        <figcaption class="caption"><?php the_sub_field('unit_image_caption'); ?></figcaption>
                    <?php endif; ?>
                </figure>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>

    <?php if(get_row_layout() == 'block_box_ii'): // layout: Box II, The Repeater ?>
        <div class="row">
            <?php if( have_rows('unit_box') ): ?>
                <?php while( have_rows('unit_box') ): the_row(); ?>
                    <div class="small-12 medium-6 large-6 columns">
                        <figure class="in-article">
                            <img class="border-shadow" src="<?php the_sub_field('item_image')?>" alt="">
                            <figcaption class="caption"><?php the_sub_field('item_caption')?></figcaption>
                        </figure>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div><!-- end .row -->
    <?php endif; ?>

    <?php if(get_row_layout() == 'block_box_iii'): // layout: Box III, The Repeater ?>
        <div class="row">
            <?php if( have_rows('unit_box') ): ?>
                <?php while( have_rows('unit_box') ): the_row(); ?>
                    <div class="small-12 medium-4 large-4 columns">
                        <figure class="in-article">
                            <img class="border-shadow" src="<?php the_sub_field('item_image')?>" alt="">
                            <figcaption class="caption"><?php the_sub_field('item_caption')?></figcaption>
                        </figure>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div><!-- end .row -->
    <?php endif; ?>

    <?php if(get_row_layout() == 'block_page_break_new'): // layout: Page Break - new ?>
        <div class="row">
            <div class="small-12 medium-centered medium-10 large-9 columns">
                <?php if(get_sub_field('unit_separator') == "separator01"): ?>
                    <figure class="separator">
                        <img class="sep" src="<?php echo get_template_directory_uri(); ?>/images/hr-separator-01.png" alt="Separator - Figs" />
                    </figure>
                <?php elseif(get_sub_field('unit_separator') == "separator02"): ?>
                    <figure class="separator">
                        <img class="sep" src="<?php echo get_template_directory_uri(); ?>/images/hr-separator-02.png" alt="Separator - Lemons" />
                    </figure>
                <?php elseif(get_sub_field('unit_separator') == "separator03"): ?>
                    <figure class="separator">
                        <img class="sep" src="<?php echo get_template_directory_uri(); ?>/images/hr-separator-03.png" alt="Separator - Olives" />
                    </figure>
                <?php endif; ?>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>

    <?php if(get_row_layout() == 'block_footnote'): // layout: Footnote ?>
        <div class="row">
            <div class="small-12 medium-centered medium-10 large-9 columns">
                <section class="unit_footnote">
                    <p class="note"><?php the_sub_field('unit_note'); ?></p>
                </section>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>

    <?php if(get_sub_field('unit_site') == "vimeo"): // If Vimeo Selected ?>
        <div class="row">
            <div class="small-12 medium-centered medium-10 large-9 columns">
                <div class="responsive-embed vimeo">
                    <iframe width="640" height="360" src="//player.vimeo.com/video/<?php the_sub_field('unit_vimeo_link'); ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>

    <?php if(get_sub_field('unit_site') == "youtube"): // If YouTube Selected ?>
        <div class="row">
            <div class="small-12 medium-centered medium-10 large-9 columns">
                <div class="responsive-embed youtube">
                    <iframe width="560" height="315" src="//www.youtube.com/embed/<?php the_sub_field('unit_youtube_link'); ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>

    <?php if(get_row_layout() == 'block_template_part'): // layout: Template Part ?>
        <div class="row template">
            <?php
                global $templ;
                $templ = get_sub_field('unit_template_name');
            ?>
            <div class="small-12 medium-centered medium-12 large-12 columns">
                <?php include(locate_template("templates/$templ".".php")); ?>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>

    <?php if(get_row_layout() == 'block_bullet_list'): // Bullet List  ?>
        <div class="row">
            <div class="small-12 medium-centered medium-10 large-9 columns">
                <section>
                     <?php if( get_sub_field('unit_introduction_para') ): ?>
                        <p class="bullet-intro"><?php the_sub_field('unit_introduction_para'); ?></p>
                    <?php endif; ?>
                    <?php 
                    $values = get_sub_field('unit_bullet_point');
                    if ($values){ 
                    echo '<ul class="bullet">';
                    foreach($values as $value){
                        echo '<li class="">'.$value['item_list'].'</li>'; 
                    }
                    echo '</ul>';
                    } ?>
                    <?php if( get_sub_field('unit_conclusion_para') ): ?>
                        <p><?php the_sub_field('unit_conclusion_para'); ?></p>
                    <?php endif; ?>
                </section>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>

    <?php if(get_row_layout() == 'block_contact_us'): // layout: Contact Us -- CHECK ?>
        <div class="row">
            <div class="small-12 medium-centered medium-10 large-10 columns">
                <section class="unit_contactus" style="padding:25px;background-color:rgba(166,174,72, 0.25);margin-top:25px;">
                    <div class="row">
                        <div class="small-12 medium-3 large-3 columns">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/lm-icon-bill-lemons-tree.png">
                        </div>
                        <div class="small-12 medium-9 large-9 columns">
                            <section>
                                <!-- Title -->
                                <h4><?php the_sub_field('unit_contact_title'); ?></h4>
                                <!-- HTML friendly block -->
                                <p class="note"><?php the_sub_field('unit_contact_text'); ?></p>
                            </section>
                        </div>
                    </div><!-- end .row -->
                </section>                
            </div>
        </div><!-- end .row -->
    <?php endif; ?>

<?php endwhile; ?>