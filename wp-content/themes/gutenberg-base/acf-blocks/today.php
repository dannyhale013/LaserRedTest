<section class="today spacer container">
    <div class="today__events">
        <div class="today__events-wrapper">
            <div class="today__col today__col--events">
                <p class="pre-title"><?php echo date("l j F Y"); ?></p>
                <div class="today__events-title">
                    <h2><?php if(get_field('today_events_title')) { echo get_field('today_events_title'); } else { echo 'Today at London Minster'; } ?></h2>
                </div>
                <?php $tableItems = get_field('today_table');
                if($tableItems) { ?>
                    <div class="today__events-table">
                        <table>
                            <?php foreach ($tableItems as $item) { ?>
                                <tr>
                                    <?php if($item['time']) { ?>
                                        <td class="time"><?php echo $item['time']; ?></td>
                                    <?php } ?>
                                    <?php if($item['event']) { ?>
                                        <td class="event-name"><?php echo $item['event']; ?></td>
                                    <?php } ?>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                <?php } ?>
                <?php $eventLinks = get_field('today_links');
                if($eventLinks) { ?>
                    <div class="today__events-links">
                        <?php foreach ($eventLinks as $link) { ?>
                            <?php if($link['link'] && $link['text']) { ?>
                                <div class="today__events-link">
                                    <a href="<?php echo $link['link']; ?>"><?php echo $link['text']; ?></a>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
            <div class="today__col today__col--bg" style="background-image:url('<?php if(get_field('today_events_image')) { echo get_field('today_events_image')['url']; } else { echo ''; } ?>');"></div>
        </div>
    </div>
    <div class="today__info">
        <?php if(get_field('today_pre_title')) { ?>
            <div class="today__info-pre-title">
                <p class="pre-title"><?php echo get_field('today_pre_title'); ?></p>
            </div>
        <?php } ?>
        <?php if(get_field('today_title')) { ?>
            <div class="today__info-title">
                <h2><?php echo get_field('today_title'); ?></h2>
            </div>
        <?php } ?>
        <?php if(get_field('today_text')) { ?>
            <div class="today__info-text">
                <p><?php echo get_field('today_text'); ?></p>
            </div>
        <?php } ?>
        <?php if(get_field('today_link') && get_field('today_link_text')) { ?>
            <div class="today__info-link">
                <a href="<?php echo get_field('today_link'); ?>"><?php echo get_field('today_link_text'); ?></a>
            </div>
        <?php } ?>
    </div>
</section>
