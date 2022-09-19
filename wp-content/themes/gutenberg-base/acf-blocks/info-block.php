<div class="info-block spacer container">
    <div class="info-block__wrapper">
        <div class="info-block__col info-block__col--first info-block__col--<?php echo get_field('column_width_1'); ?>">
            <?php if(get_field('col_1_type') == 'text') { ?>
                <div class="info-block__text-wrap">
                    <?php if(get_field('col_1_pre_title')) { ?>
                        <div class="info-block__pre-title">
                            <p class="pre-title"><?php echo get_field('col_1_pre_title'); ?></p>
                        </div>
                    <?php } ?>
                    <?php if(get_field('col_1_title')) { ?>
                        <div class="info-block__title">
                            <h3><?php echo get_field('col_1_title'); ?></h3>
                        </div>
                    <?php } ?>
                    <?php if(get_field('col_1_text')) { ?>
                        <div class="info-block__text">
                            <p><?php echo get_field('col_1_text'); ?></p>
                        </div>
                    <?php } ?>
                    <?php if(get_field('col_1_link') && get_field('col_1_link_text')) { ?>
                        <div class="info-block__link">
                            <a href="<?php echo get_field('col_1_link'); ?>"><?php echo get_field('col_1_link_text'); ?></a>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
            <?php if(get_field('col_1_type') == 'image') { ?>
                <?php if(get_field('col_1_image')) { ?>
                    <div class="info-block__image">
                        <img src="<?php echo get_field('col_1_image')['url']; ?>" alt="<?php echo get_field('col_1_image')['alt']; ?>">
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
        <div class="info-block__col info-block__col--<?php echo get_field('column_width_2'); ?>">
            <?php if(get_field('col_2_type') == 'text') { ?>
                <div class="info-block__text-wrap">
                    <?php if(get_field('col_2_pre_title')) { ?>
                        <div class="info-block__pre-title">
                            <p class="pre-title"><?php echo get_field('col_2_pre_title'); ?></p>
                        </div>
                    <?php } ?>
                    <?php if(get_field('col_2_title')) { ?>
                        <div class="info-block__title">
                            <h3><?php echo get_field('col_2_title'); ?></h3>
                        </div>
                    <?php } ?>
                    <?php if(get_field('col_2_text')) { ?>
                        <div class="info-block__text">
                            <p><?php echo get_field('col_2_text'); ?></p>
                        </div>
                    <?php } ?>
                    <?php if(get_field('col_2_link') && get_field('col_2_link_text')) { ?>
                        <div class="info-block__link">
                            <a href="<?php echo get_field('col_2_link'); ?>"><?php echo get_field('col_2_link_text'); ?></a>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
            <?php if(get_field('col_2_type') == 'image') { ?>
                <?php if(get_field('col_2_image')) { ?>
                    <div class="info-block__image">
                        <img src="<?php echo get_field('col_2_image')['url']; ?>" alt="<?php echo get_field('col_2_image')['alt']; ?>">
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</div>