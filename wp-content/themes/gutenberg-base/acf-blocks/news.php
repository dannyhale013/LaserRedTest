<div class="news container spacer">
    <div class="news__wrapper">
        <div class="news__info">
            <?php if(get_field('news_pre_title')) { ?>
                <div class="news__pre-title">
                    <p class="pre-title"><?php echo get_field('news_pre_title'); ?></p>
                </div>
            <?php } ?>
            <?php if(get_field('news_title')) { ?>
                <div class="news__title">
                    <h3><?php echo get_field('news_title'); ?></h3>
                </div>
            <?php } ?>
            <?php if(get_field('news_link') && get_field('news_link_text')) { ?>
                <div class="news__cta">
                    <a href="<?php echo get_field('news_link'); ?>" class="btn"><?php echo get_field('news_link_text'); ?></a>
                </div>
            <?php } ?>
        </div>
        <div class="news__items">
        <?php $query_vars['post_type'] = 'post';
            $query_vars['order'] = 'desc'; 
            $query_vars['posts_per_page'] = 2;
            $query_vars['post_status'] = 'publish';

            $ajax_query = new WP_Query( $query_vars );
            $posts = $ajax_query->posts;

            if($ajax_query->have_posts()) {
                while ( $ajax_query->have_posts() ) {
                    $ajax_query->the_post(); ?>
                    <a href="<?php echo get_the_permalink($post->ID); ?>" class="news__item">
                        <div class="news__item-info">
                            <div class="news__item-date">
                                <svg id="Icon_Cal" data-name="Icon Cal" xmlns="http://www.w3.org/2000/svg" width="22.188" height="21.324" viewBox="0 0 22.188 21.324">
                                    <g id="Group_11" data-name="Group 11">
                                        <path id="Path_42" data-name="Path 42" d="M22.189,6.1H18.942V5.171a.771.771,0,1,0-1.541,0V6.1H9.81V5.171a.771.771,0,1,0-1.541,0V6.1H5A2.5,2.5,0,0,0,2.5,8.6v14.62a2.5,2.5,0,0,0,2.5,2.5h17.19a2.5,2.5,0,0,0,2.5-2.5V8.581A2.5,2.5,0,0,0,22.189,6.1Zm.958,17.1a.942.942,0,0,1-.958.934H5a.957.957,0,0,1-.958-.934V13.3H23.123v9.9Zm0-11.467H4.041V8.581A.942.942,0,0,1,5,7.646H8.245v.934a.771.771,0,0,0,1.541,0V7.646h7.59v.934a.771.771,0,0,0,1.541,0V7.646h3.246a.957.957,0,0,1,.958.934v3.153Z" transform="translate(-2.5 -4.4)" fill="#d3a878"/>
                                    </g>
                                </svg>
                                <p><?php echo get_the_date('j F Y',$post->ID); ?></p>
                            </div>
                            <div class="news__item-title">
                                <h4><?php echo get_the_title($post->ID); ?></h4>
                            </div>
                            <?php if(get_the_excerpt($post->ID)) { ?>
                                <div class="news__item-desc">
                                    <p><?php echo get_the_excerpt($post->ID); ?></p>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="news__item-image" style="background-image:url('<?php if(get_the_post_thumbnail($post->ID)) { echo get_the_post_thumbnail_url($post->ID); } else { echo 'https://via.placeholder.com/400'; }?>');"></div>
                    </a>
                <?php } ?>
            <?php } else { echo '<p>Sorry there are no current posts!</p>'; } ?>
        </div>
    </div>
</div>