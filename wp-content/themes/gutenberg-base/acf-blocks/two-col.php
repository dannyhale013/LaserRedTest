<div class="two-col container--1920 spacer">
    <div class="two-col__wrapper">
        <div class="two-col__col two-col__co-<?php echo get_field('column_1_type'); ?> <?php if(get_field('l_two_col_bg_colour_1')) { echo 'bg-' . get_field('l_two_col_bg_colour_1'); } else { echo 'bg-white'; } ?> ">
            <?php if(get_field('column_1_type') == 'text') { ?>
                <?php if(get_field('l_two_col_title_1')) { ?>
                    <div class="two-col__info-pre-title">
                        <p class="pre-title"><?php echo get_field('l_two_col_title_1'); ?></p>
                    </div>
                <?php } ?>
                <?php if(get_field('l_two_col_text_1')) { ?>
                    <div class="two-col__info-text">
                        <p><?php echo get_field('l_two_col_text_1'); ?></p>
                    </div>
                <?php } ?>
                <?php if(get_field('l_two_col_link_1') && get_field('l_two_col_link_text_1')) { ?>
                    <div class="two-col__info-link">
                        <a class="btn btn--ghost" href="<?php echo get_field('l_two_col_link_1'); ?>"><?php echo get_field('l_two_col_link_text_1'); ?></a>
                    </div>
                <?php } ?>
            <?php } ?>
            <?php if(get_field('column_1_type') == 'image') { ?>
                <?php if(get_field('l_two_col_image_1')) { ?>
                    <div class="two-col__image" style="background-image:url('<?php if(get_field('l_two_col_image_1')) { echo get_field('l_two_col_image_1')['url']; } ?>');">
                    </div>
                <?php } ?>
            <?php } ?>
            <?php if(get_field('column_1_type') == 'video') { ?>
                <?php if(get_field('l_two_col_video_link_1')) { ?>
                    <a href="javascript:void(0);" class="two-col__video" data-src="<?php echo get_field('l_two_col_video_link_1'); ?>" style="background-image:url('<?php if(get_field('l_two_col_image_1')) { echo get_field('l_two_col_image_1')['url']; } else { echo ''; } ?>');">
                        <div class="two-col__play">
                            <svg xmlns="http://www.w3.org/2000/svg" width="118" height="88.354" viewBox="0 0 118 88.354">
                                <g id="Video_Play" data-name="Video Play" transform="translate(-1381 -4464.396)">
                                    <text id="Play_Video" data-name="Play Video" transform="translate(1440 4547.75)" fill="#001a2c" font-size="16" font-family="FuturaPT-Heavy, Futura PT" font-weight="800" letter-spacing="0.2em"><tspan x="-58" y="0">PLAY VIDEO</tspan></text>
                                    <g id="Group_72" data-name="Group 72" transform="translate(1405.823 4459.396)">
                                    <path id="Path_76" data-name="Path 76" d="M33.677,5A28.677,28.677,0,1,0,62.354,33.677,28.72,28.72,0,0,0,33.677,5Zm0,54.167a25.49,25.49,0,1,1,25.49-25.49A25.483,25.483,0,0,1,33.677,59.167Z" fill="#001a2c"/>
                                    <path id="Path_77" data-name="Path 77" d="M51.654,36.881,38.381,29.225a1.146,1.146,0,0,0-1.04,0,1.034,1.034,0,0,0-.541.915V45.452a1.084,1.084,0,0,0,.541.915,1.234,1.234,0,0,0,1.082,0L51.7,38.711a1.034,1.034,0,0,0,.541-.915A1.129,1.129,0,0,0,51.654,36.881Z" transform="translate(-8.432 -4.119)" fill="#001a2c"/>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </a>
                <?php } ?>
            <?php } ?>
        </div>
        <div class="two-col__col two-col__co-<?php echo get_field('column_2_type'); ?> <?php if(get_field('l_two_col_bg_colour_2')) { echo 'bg-' . get_field('l_two_col_bg_colour_2'); } else { echo 'bg-white'; } ?>">
            <?php if(get_field('column_2_type') == 'text') { ?>
                <?php if(get_field('l_two_col_title_2')) { ?>
                    <div class="two-col__info-pre-title">
                        <p class="pre-title"><?php echo get_field('l_two_col_title_2'); ?></p>
                    </div>
                <?php } ?>
                <?php if(get_field('l_two_col_text_2')) { ?>
                    <div class="two-col__info-text">
                        <p><?php echo get_field('l_two_col_text_2'); ?></p>
                    </div>
                <?php } ?>
                <?php if(get_field('l_two_col_link_2') && get_field('l_two_col_link_text_2')) { ?>
                    <div class="two-col__info-link">
                        <a class="btn btn--ghost" href="<?php echo get_field('l_two_col_link_2'); ?>"><?php echo get_field('l_two_col_link_text_2'); ?></a>
                    </div>
                <?php } ?>
            <?php } ?>
            <?php if(get_field('column_2_type') == 'image') { ?>
                <?php if(get_field('l_two_col_image_2')) { ?>
                    <div class="two-col__image" style="background-image:url('<?php if(get_field('l_two_col_image_2')) { echo get_field('l_two_col_image_2')['url']; } ?>');">
                    </div>
                <?php } ?>
            <?php } ?>
            <?php if(get_field('column_2_type') == 'video') { ?>
                <?php if(get_field('l_two_col_video_link_2')) { ?>
                    <a href="javascript:void(0);" class="two-col__video" data-src="<?php echo get_field('l_two_col_video_link_2'); ?>" style="background-image:url('<?php if(get_field('l_two_col_image_2')) { echo get_field('l_two_col_image_2')['url']; } else { echo ''; } ?>');">
                        <div class="two-col__play">
                            <svg xmlns="http://www.w3.org/2000/svg" width="118" height="88.354" viewBox="0 0 118 88.354">
                                <g id="Video_Play" data-name="Video Play" transform="translate(-1381 -4464.396)">
                                    <text id="Play_Video" data-name="Play Video" transform="translate(1440 4547.75)" fill="#001a2c" font-size="16" font-family="FuturaPT-Heavy, Futura PT" font-weight="800" letter-spacing="0.2em"><tspan x="-58" y="0">PLAY VIDEO</tspan></text>
                                    <g id="Group_72" data-name="Group 72" transform="translate(1405.823 4459.396)">
                                    <path id="Path_76" data-name="Path 76" d="M33.677,5A28.677,28.677,0,1,0,62.354,33.677,28.72,28.72,0,0,0,33.677,5Zm0,54.167a25.49,25.49,0,1,1,25.49-25.49A25.483,25.483,0,0,1,33.677,59.167Z" fill="#001a2c"/>
                                    <path id="Path_77" data-name="Path 77" d="M51.654,36.881,38.381,29.225a1.146,1.146,0,0,0-1.04,0,1.034,1.034,0,0,0-.541.915V45.452a1.084,1.084,0,0,0,.541.915,1.234,1.234,0,0,0,1.082,0L51.7,38.711a1.034,1.034,0,0,0,.541-.915A1.129,1.129,0,0,0,51.654,36.881Z" transform="translate(-8.432 -4.119)" fill="#001a2c"/>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </a>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</div>