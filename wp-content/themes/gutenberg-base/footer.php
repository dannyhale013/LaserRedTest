<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gutenberg-starter-theme
 */

?>

<div class="lm-modal video-modal">
    <div class="lm-modal__bg"></div>
    <div class="lm-modal__wrapper">
        <div class="lm-modal__inner">
            <div class="lm-modal__close"></div>
            <div class="lm-modal__container">
                <iframe class="lm-modal__iframe" src="" gesture="media"  allow="encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<footer id="colophon" class="site-footer">
    <div class="footer">
        <div class="container">
            <div class="footer__wrapper footer__wrapper--upper">
                <div class="footer__stt">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35">
                            <g id="Up" transform="translate(-1726 -74)">
                                <g id="Circle" transform="translate(1726 74)" fill="none" stroke="#fff" stroke-width="1">
                                <circle cx="17.5" cy="17.5" r="17.5" stroke="none"/>
                                <circle cx="17.5" cy="17.5" r="17" fill="none"/>
                                </g>
                                <path id="Arrow" d="M41.817,36.862,38.955,34H37.213l3.111,3.111H29v1.244H40.324l-3.111,3.111h1.742l3.733-3.733Z" transform="translate(1706 126.689) rotate(-90)" fill="#fff"/>
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="footer__links">
                    <nav class="footer__nav">
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'menu-footer',
                                'menu_id'        => 'footer-menu',
                                'container_class' => 'footer-menu-container', 
                                'menu_class' => 'footer-menu'
                            ) );
                        ?>
                    </nav>
                </div>
                <div class="footer__newsletter">
                    <?php if(get_field('newsletter_pre_title', 'option')) { ?>
                        <p class="pre-title"><?php echo get_field('newsletter_pre_title', 'option'); ?></p>
                    <?php } ?>
                    <?php if(get_field('newsletter_title', 'option')) { ?>
                        <h4><?php echo get_field('newsletter_title', 'option'); ?></h4>
                    <?php } ?>
                    <?php if(get_field('newsletter_text', 'option')) { ?>
                        <p><?php echo get_field('newsletter_text', 'option'); ?></p>
                    <?php } ?>
                    <form action="#">
                        <input type="text" placeholder="Email address">
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
            <div class="footer__wrapper">
                <div class="footer__social-info">
                    <div class="footer__socials">
                        <?php $socials = get_field('socials', 'option');

                        if($socials) {
                            foreach ($socials as $social) { 
                                if($social['link'] && $social['icon']) { ?>
                                    <a href="<?php echo $social['link']; ?>" target="_blank">
                                        <img src="<?php echo $social['icon']['url']; ?>" alt="Social Icon">
                                    </a>
                                <?php } ?>
                            <?php } 
                        } ?>
                    </div>
                    <div class="footer__info">
                        <?php if(get_field('contact_text', 'option')) { ?>
                            <p><?php echo get_field('contact_text', 'option'); ?></p>
                        <?php } ?>
                        <div class="footer__info-lower">
                            <?php if(get_field('phone_number', 'option')) { ?>
                                <p><span>T</span> - <a href="tel:<?php echo get_field('phone_number', 'option'); ?>"><?php echo get_field('phone_number', 'option'); ?></a></p>
                            <?php } ?>
                            <?php if(get_field('phone_number', 'option') && get_field('email', 'option')) { ?>
                                <p class="seperator"> | </p>
                            <?php } ?>
                            <?php if(get_field('email', 'option')) { ?>
                                <p><span>E</span> - <a href="mailto:<?php echo get_field('email', 'option'); ?>"><?php echo get_field('email', 'option'); ?></a></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="footer__copyright">
                    <div class="footer__lower-links">
                        <?php if(get_field('copyright_text', 'option')) { ?>
                            <p class="copyinfo"><?php echo get_field('copyright_text', 'option'); ?></p>
                        <?php } ?>
                        <?php $copyrights = get_field('copyright_links', 'option');
                        $count = 1;
                        if($copyrights) {
                            $max = count($copyrights); ?>
                            <p class="seperator seperator--hide-mob"> | </p>
                            <?php foreach ($copyrights as $link) { 
                                if($link['link'] && $link['link_text']) { ?>
                                    <a href="<?php echo $link['link']; ?>"><?php echo $link['link_text']; ?></a>
                                    <?php if($count < $max) { ?>
                                        <p class="seperator"> | </p>
                                    <?php } ?>
                                <?php } ?>
                            <?php $count++; } 
                        } ?>
                    </div>
                    <div class="footer__laser">
                        <a href="#" target="_blank" rel="noopener noreferrer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="96" height="17.283" viewBox="0 0 96 17.283">
                                <g id="LR_Logo" data-name="LR Logo" transform="translate(-831.086 -5199.061)">
                                    <g id="HEADER_-_LOGO" data-name="HEADER - LOGO" transform="translate(831.086 5199.061)">
                                    <path id="Path_11" data-name="Path 11" d="M-19.684-11.713l-2.524,5.047,2.447,4.932h-2.256l-2.447-4.932,2.524-5.047-1.376-2.753L-28.67-3.836h2.829l1.032,2.065h-7.15l8.6-17.245Zm1.376,2.753L-19.455-6.7l2.447,4.932h2.256Z" transform="translate(31.958 19.016)" fill="#9da7bd"/>
                                    </g>
                                    <g id="HEADER_-_LOGO_TEXT" data-name="HEADER - LOGO TEXT" transform="translate(854.946 5202.781)">
                                    <path id="Path_12" data-name="Path 12" d="M0,0H1.649V8.048H5.278V9.665H0Z" transform="translate(0 0.396)" fill="#9da7bd"/>
                                    <path id="Path_13" data-name="Path 13" d="M-7.854-11.407h1.847l-4.387-10.061-4.387,10.061h1.847l2.54-6.069Z" transform="translate(21.246 21.468)" fill="#9da7bd"/>
                                    <path id="Path_14" data-name="Path 14" d="M-1.272-10.547a3.08,3.08,0,0,1-1.121-1.616l1.484-.66a1.758,1.758,0,0,0,.561.924,1.437,1.437,0,0,0,.989.33,1.419,1.419,0,0,0,1.023-.4,1.233,1.233,0,0,0,.429-.956,1.081,1.081,0,0,0-.2-.693,1.68,1.68,0,0,0-.528-.429c-.2-.1-.594-.264-1.089-.462a4.632,4.632,0,0,1-1.814-1.121A2.525,2.525,0,0,1-2.1-17.309,2.435,2.435,0,0,1-1.733-18.6a2.567,2.567,0,0,1,.956-.924,2.65,2.65,0,0,1,1.352-.33,2.686,2.686,0,0,1,1.616.495,2.659,2.659,0,0,1,.989,1.319L1.7-17.342a1.04,1.04,0,0,0-.4-.627A1.066,1.066,0,0,0,.576-18.2a1.176,1.176,0,0,0-.759.264.828.828,0,0,0-.3.659,1.113,1.113,0,0,0,.264.759,3.257,3.257,0,0,0,1.056.561c.033.033.1.033.132.066.033,0,.1.033.132.033a10.255,10.255,0,0,1,1.319.594,2.636,2.636,0,0,1,.924.89,2.66,2.66,0,0,1,.4,1.517,3.067,3.067,0,0,1-.4,1.517A2.963,2.963,0,0,1,2.225-10.25a3.1,3.1,0,0,1-1.55.4,3.84,3.84,0,0,1-1.946-.693" transform="translate(18.655 20.113)" fill="#9da7bd"/>
                                    <path id="Path_15" data-name="Path 15" d="M-5.722-10.958l-1.979-3.6H-9.153v3.6h-1.616v-9.665h3.6a3.062,3.062,0,0,1,1.517.4,3.049,3.049,0,0,1,1.121,1.121,3.064,3.064,0,0,1,.4,1.517,2.855,2.855,0,0,1-.528,1.716,3.046,3.046,0,0,1-1.385,1.121l2.21,3.793Zm-3.43-5.212h1.979a1.255,1.255,0,0,0,.99-.429,1.4,1.4,0,0,0,.4-.99,1.342,1.342,0,0,0-.4-.989,1.343,1.343,0,0,0-.99-.4H-9.153Z" transform="translate(44.151 21.019)" fill="#9da7bd"/>
                                    <path id="Path_16" data-name="Path 16" d="M-5.722-10.958l-1.979-3.6H-9.153v3.6h-1.616v-9.665h3.6a3.062,3.062,0,0,1,1.517.4,3.049,3.049,0,0,1,1.121,1.121,3.064,3.064,0,0,1,.4,1.517,2.855,2.855,0,0,1-.528,1.716,3.046,3.046,0,0,1-1.385,1.121l2.21,3.793Zm-3.43-5.212h1.979a1.255,1.255,0,0,0,.99-.429,1.4,1.4,0,0,0,.4-.99,1.342,1.342,0,0,0-.4-.989,1.343,1.343,0,0,0-.99-.4H-9.153Z" transform="translate(57.642 21.019)" fill="#9da7bd"/>
                                    <path id="Path_18" data-name="Path 18" d="M-.037,0H6V1.616H1.612V3.991H4.977l-.66,1.649H1.579V8.016H5.966V9.632H-.07V0Z" transform="translate(24.809 0.396)" fill="#9da7bd"/>
                                    <path id="Path_19" data-name="Path 19" d="M-.037,0H6V1.616H1.612V3.991H4.977l-.66,1.649H1.579V8.016H5.966V9.632H-.07V0Z" transform="translate(55.915 0.396)" fill="#9da7bd"/>
                                    <path id="Path_20" data-name="Path 20" d="M0,0H2.8A4.837,4.837,0,0,1,5.245.66,4.932,4.932,0,0,1,6.993,2.408a4.749,4.749,0,0,1,.66,2.441,4.837,4.837,0,0,1-.66,2.441A4.929,4.929,0,0,1,5.245,9.038,4.747,4.747,0,0,1,2.8,9.7H0ZM2.8,8.016A3.045,3.045,0,0,0,4.42,7.587,2.99,2.99,0,0,0,5.574,6.432,3.041,3.041,0,0,0,6,4.816,3.041,3.041,0,0,0,5.574,3.2,2.989,2.989,0,0,0,4.42,2.045,3.041,3.041,0,0,0,2.8,1.616H1.616v6.4Z" transform="translate(64.487 0.396)" fill="#9da7bd"/>
                                    <path id="Path_22" data-name="Path 22" d="M0,0H1.649V8.048H5.278V9.665H0Z" transform="translate(0 0.396)" fill="#9da7bd"/>
                                    <path id="Path_23" data-name="Path 23" d="M-7.854-11.407h1.847l-4.387-10.061-4.387,10.061h1.847l2.54-6.069Z" transform="translate(21.246 21.468)" fill="#9da7bd"/>
                                    <path id="Path_24" data-name="Path 24" d="M-1.272-10.547a3.08,3.08,0,0,1-1.121-1.616l1.484-.66a1.758,1.758,0,0,0,.561.924,1.437,1.437,0,0,0,.989.33,1.419,1.419,0,0,0,1.023-.4,1.233,1.233,0,0,0,.429-.956,1.081,1.081,0,0,0-.2-.693,1.68,1.68,0,0,0-.528-.429c-.2-.1-.594-.264-1.089-.462a4.632,4.632,0,0,1-1.814-1.121A2.525,2.525,0,0,1-2.1-17.309,2.435,2.435,0,0,1-1.733-18.6a2.567,2.567,0,0,1,.956-.924,2.65,2.65,0,0,1,1.352-.33,2.686,2.686,0,0,1,1.616.495,2.659,2.659,0,0,1,.989,1.319L1.7-17.342a1.04,1.04,0,0,0-.4-.627A1.066,1.066,0,0,0,.576-18.2a1.176,1.176,0,0,0-.759.264.828.828,0,0,0-.3.659,1.113,1.113,0,0,0,.264.759,3.257,3.257,0,0,0,1.056.561c.033.033.1.033.132.066.033,0,.1.033.132.033a10.255,10.255,0,0,1,1.319.594,2.636,2.636,0,0,1,.924.89,2.66,2.66,0,0,1,.4,1.517,3.067,3.067,0,0,1-.4,1.517A2.963,2.963,0,0,1,2.225-10.25a3.1,3.1,0,0,1-1.55.4,3.84,3.84,0,0,1-1.946-.693" transform="translate(18.655 20.113)" fill="#9da7bd"/>
                                    <path id="Path_25" data-name="Path 25" d="M-5.722-10.958l-1.979-3.6H-9.153v3.6h-1.616v-9.665h3.6a3.062,3.062,0,0,1,1.517.4,3.049,3.049,0,0,1,1.121,1.121,3.064,3.064,0,0,1,.4,1.517,2.855,2.855,0,0,1-.528,1.716,3.046,3.046,0,0,1-1.385,1.121l2.21,3.793Zm-3.43-5.212h1.979a1.255,1.255,0,0,0,.99-.429,1.4,1.4,0,0,0,.4-.99,1.342,1.342,0,0,0-.4-.989,1.343,1.343,0,0,0-.99-.4H-9.153Z" transform="translate(44.151 21.019)" fill="#9da7bd"/>
                                    <path id="Path_26" data-name="Path 26" d="M-5.722-10.958l-1.979-3.6H-9.153v3.6h-1.616v-9.665h3.6a3.062,3.062,0,0,1,1.517.4,3.049,3.049,0,0,1,1.121,1.121,3.064,3.064,0,0,1,.4,1.517,2.855,2.855,0,0,1-.528,1.716,3.046,3.046,0,0,1-1.385,1.121l2.21,3.793Zm-3.43-5.212h1.979a1.255,1.255,0,0,0,.99-.429,1.4,1.4,0,0,0,.4-.99,1.342,1.342,0,0,0-.4-.989,1.343,1.343,0,0,0-.99-.4H-9.153Z" transform="translate(57.642 21.019)" fill="#9da7bd"/>
                                    <path id="Path_28" data-name="Path 28" d="M-.037,0H6V1.616H1.612V3.991H4.977l-.66,1.649H1.579V8.016H5.966V9.632H-.07V0Z" transform="translate(24.809 0.396)" fill="#9da7bd"/>
                                    <path id="Path_29" data-name="Path 29" d="M-.037,0H6V1.616H1.612V3.991H4.977l-.66,1.649H1.579V8.016H5.966V9.632H-.07V0Z" transform="translate(55.915 0.396)" fill="#9da7bd"/>
                                    <path id="Path_30" data-name="Path 30" d="M0,0H2.8A4.837,4.837,0,0,1,5.245.66,4.932,4.932,0,0,1,6.993,2.408a4.749,4.749,0,0,1,.66,2.441,4.837,4.837,0,0,1-.66,2.441A4.929,4.929,0,0,1,5.245,9.038,4.747,4.747,0,0,1,2.8,9.7H0ZM2.8,8.016A3.045,3.045,0,0,0,4.42,7.587,2.99,2.99,0,0,0,5.574,6.432,3.041,3.041,0,0,0,6,4.816,3.041,3.041,0,0,0,5.574,3.2,2.989,2.989,0,0,0,4.42,2.045,3.041,3.041,0,0,0,2.8,1.616H1.616v6.4Z" transform="translate(64.487 0.396)" fill="#9da7bd"/>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
