<div class="events spacer container">
    <div class="events__wrapper">
        <div class="events__events">
        <?php $query_vars['post_type'] = 'events';
            $query_vars['order'] = 'desc'; 
            $query_vars['posts_per_page'] = 3;
            $query_vars['post_status'] = 'publish';

            $ajax_query = new WP_Query( $query_vars );
            $posts = $ajax_query->posts;

            if($ajax_query->have_posts()) {
                while ( $ajax_query->have_posts() ) {
                    $ajax_query->the_post(); ?>
                    <a class="events__event" href="<?php echo get_the_permalink($post->ID); ?>">
                        <div class="events__event-image" style="background-image:url('<?php if(get_the_post_thumbnail($post->ID)) { echo get_the_post_thumbnail_url($post->ID); } else { echo 'https://via.placeholder.com/400'; }?>');"></div>
                        <div class="events__event-info">
                            <?php if(get_field('event_date', get_the_ID())) { ?>
                                <div class="events__event-date">
                                    <svg id="Icon_Cal" data-name="Icon Cal" xmlns="http://www.w3.org/2000/svg" width="22.188" height="21.324" viewBox="0 0 22.188 21.324">
                                        <g id="Group_11" data-name="Group 11">
                                            <path id="Path_42" data-name="Path 42" d="M22.189,6.1H18.942V5.171a.771.771,0,1,0-1.541,0V6.1H9.81V5.171a.771.771,0,1,0-1.541,0V6.1H5A2.5,2.5,0,0,0,2.5,8.6v14.62a2.5,2.5,0,0,0,2.5,2.5h17.19a2.5,2.5,0,0,0,2.5-2.5V8.581A2.5,2.5,0,0,0,22.189,6.1Zm.958,17.1a.942.942,0,0,1-.958.934H5a.957.957,0,0,1-.958-.934V13.3H23.123v9.9Zm0-11.467H4.041V8.581A.942.942,0,0,1,5,7.646H8.245v.934a.771.771,0,0,0,1.541,0V7.646h7.59v.934a.771.771,0,0,0,1.541,0V7.646h3.246a.957.957,0,0,1,.958.934v3.153Z" transform="translate(-2.5 -4.4)" fill="#d3a878"/>
                                        </g>
                                    </svg>
                                    <p><?php echo get_field('event_date', get_the_ID()); ?></p>
                                </div>
                            <?php } ?>
                            <div class="events__event-title">
                                <h4><?php echo get_the_title($post->ID); ?></h4>
                            </div>
                            <div class="events__event-time-price">
                                <?php if(get_field('event_time', get_the_ID())) { ?>
                                    <div class="events__event-time">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21.311" height="21.311" viewBox="0 0 21.311 21.311">
                                            <g id="Icon_Clock" data-name="Icon Clock" transform="translate(0.25 0.25)">
                                                <path id="Path_80" data-name="Path 80" d="M14.905,25.311A10.405,10.405,0,1,0,4.5,14.905,10.414,10.414,0,0,0,14.905,25.311Zm0-18.524a8.118,8.118,0,1,1-8.118,8.118A8.12,8.12,0,0,1,14.905,6.787Z" transform="translate(-4.5 -4.5)" fill="#d3a878" stroke="#fff" stroke-width="0.5"/>
                                                <path id="Path_81" data-name="Path 81" d="M44.143,30.233h3.888a1.143,1.143,0,0,0,0-2.287H45.287v-4.8a1.143,1.143,0,1,0-2.287,0v5.946A1.132,1.132,0,0,0,44.143,30.233Z" transform="translate(-34.196 -17.998)" fill="#d3a878" stroke="#fff" stroke-width="0.5"/>
                                            </g>
                                        </svg>
                                        <p><?php echo get_field('event_time', get_the_ID()); ?></p>
                                    </div>
                                <?php } ?>
                                <?php if(get_field('event_price', get_the_ID())) { ?>
                                    <div class="events__event-price">
                                        <svg id="Icon_Ticket" data-name="Icon Ticket" xmlns="http://www.w3.org/2000/svg" width="26.292" height="15" viewBox="0 0 26.292 15">
                                            <g id="Group_613" data-name="Group 613">
                                                <path id="Path_82" data-name="Path 82" d="M28.017,28.352a.792.792,0,0,0,.775-.775v-3.9a.792.792,0,0,0-.775-.775H3.275a.792.792,0,0,0-.775.775v3.9a.792.792,0,0,0,.775.775,2.048,2.048,0,1,1,0,4.1.792.792,0,0,0-.775.775v3.9a.792.792,0,0,0,.775.775H28.017a.792.792,0,0,0,.775-.775v-3.9a.792.792,0,0,0-.775-.775,2.048,2.048,0,0,1,0-4.1ZM4.05,33.915A3.618,3.618,0,0,0,6.873,30.4,3.564,3.564,0,0,0,4.05,26.913V24.477H20.821v11.9H4.05Zm23.192,0V36.35H22.371V24.45h4.9v2.435a3.611,3.611,0,0,0-2.823,3.487A3.574,3.574,0,0,0,27.242,33.915Z" transform="translate(-2.5 -22.9)" fill="#d3a878"/>
                                                <path id="Path_83" data-name="Path 83" d="M25.175,36.65H33.45a.775.775,0,1,0,0-1.55H25.175a.792.792,0,0,0-.775.775A.774.774,0,0,0,25.175,36.65Z" transform="translate(-18.339 -31.724)" fill="#d3a878"/>
                                                <path id="Path_84" data-name="Path 84" d="M33.45,47.2H25.175a.775.775,0,0,0,0,1.55H33.45a.775.775,0,0,0,0-1.55Z" transform="translate(-18.339 -40.475)" fill="#d3a878"/>
                                                <path id="Path_85" data-name="Path 85" d="M33.45,59.3H25.175a.775.775,0,0,0,0,1.55H33.45a.775.775,0,1,0,0-1.55Z" transform="translate(-18.339 -49.226)" fill="#d3a878"/>
                                            </g>
                                        </svg>
                                        <p><?php echo get_field('event_price', get_the_ID()); ?></p>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </a>
                <?php } ?>
            <?php } else { echo '<p>Sorry there are no current events!</p>'; } ?>
        </div>
        <div class="events__info">
            <?php if(get_field('events_pre_title')) { ?>
                <div class="events__info-pre-title">
                    <p class="pre-title"><?php echo get_field('events_pre_title'); ?></p>
                </div>
            <?php } ?>
            <?php if(get_field('events_title')) { ?>
                <div class="events__info-title">
                    <h3><?php echo get_field('events_title'); ?></h3>
                </div>
            <?php } ?>
            <?php if(get_field('events_link') && get_field('events_link_text')) { ?>
                <div class="events__button">
                    <a class="btn btn--smaller-font btn--gold" href="<?php echo get_field('events_link'); ?>"><?php echo get_field('events_link_text'); ?></a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>