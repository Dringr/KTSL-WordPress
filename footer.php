<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<footer>
    <section>
        <div class="footer__logo">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/src/assets/images/svg/logos/ktsl-white.svg" alt="" width="80px">
            <p class="text--white">© KTSL 2019</p>
        </div>
        <div class="footer__sign-up">
            <input style="height:51px;" type="text" id="right-label" placeholder="Sign up to our newsletter">
            <a href=""><img src="<?php bloginfo('stylesheet_directory'); ?>/src/assets/images/svg/square-arrow.svg" alt=""
                    width="51px"></a>
        </div>
        <div class="footer__menu">
            <ul class="text--white">
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>solutions"><span>Solutions</span></a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>news"><span>News & events</span></a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>case-studies"><span>Case Studies</span></a> </li>
                <li> <a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us"><span>About us</span></a></li>
                 <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>careers"><span>Careers</span></a></li>
                <li> <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us"><span>Contact</span></a></li>
                <li><a href="https://ktsl.secure.force.com/apex/bmcservicedesk__sssitelogin?lang=en-GB" target="_blank"><span>Support</span></a></li>
            </ul>
        </div>
    </section>
</footer>


<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
