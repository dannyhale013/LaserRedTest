<div class="quote container container--1000 spacer">
    <?php if(get_field('quote_pre_title')) { ?>
        <div class="quote__pre">
            <p class="pre-title"><?php echo get_field('quote_pre_title'); ?></p>
        </div>
    <?php } ?>
    <?php if(get_field('quote_quote')) { ?>
        <div class="quote__quote">
            <h2><?php echo get_field('quote_quote'); ?></h2>
        </div>
    <?php } ?>
    <?php if(get_field('quote_author_image')) { ?>
        <div class="quote__author-image">
            <img src="<?php echo get_field('quote_author_image')['url']; ?>" alt="<?php echo get_field('quote_author_image')['alt']; ?>">
        </div>
    <?php } ?>
    <?php if(get_field('quote_author_name') || get_field('quote_author_job')) { ?>
        <div class="quote__author-info">
            <p><?php if(get_field('quote_author_name')) { echo get_field('quote_author_name'); } ?> <?php if(get_field('quote_author_name') && get_field('quote_author_job')) { ?> - <?php } ?> <?php if(get_field('quote_author_job')) { echo get_field('quote_author_job'); } ?></p>
        </div>
    <?php } ?>
</div>