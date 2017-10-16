<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Flash
 */

?>

    </div>
    <!-- .tg-container -->
    </div>
    <!-- #content -->

    <?php
	/**
	 * flash_after_main hook
	 */
	do_action( 'flash_after_main' ); ?>

        <?php
	/**
	 * flash_before_footer hook
	 */
	do_action( 'flash_before_footer' ); ?>

            <footer id="colophon" class="footer-layout site-footer" role="contentinfo">
                <?php get_sidebar( 'footer' ); ?>

                <div class="footer-top">
                    <div class="row col-md-4">
                        <h2><span class="letter-color-red">T</span>echno-nt</h2>
                        <address>
                           adress column 1 <br>
                           address column 2<br>
                           <br>
                           tel: 12 345 6789<br>
                           e-mail: <span class="email-color">example@example.com</span>
                       </address>

                    </div>
                    <div class="row col-md-8"><!-- <?php echo do_shortcode("[contact-form-7 id="54"   title="Contact Page Form"]"); ?>--></div>
                </div>
                <div id="bottom-footer">
                    <p>&copy; Techno-NT 2017</p>
                </div>
            </footer>
            <!-- #colophon -->

            <?php
	/**
	 * flash_after_footer hook
	 */
	do_action( 'flash_after_footer' ); ?>

                <?php if ( get_theme_mod( 'flash_disable_back_to_top', '' ) != 1 ) : ?>
                <a href="#masthead" id="scroll-up"><i class="fa fa-chevron-up"></i></a>
                <?php endif; ?>
                </div>
                <!-- #page -->

                <?php
/**
 * flash_after hook
 */
do_action( 'flash_after' ); ?>

                    <?php wp_footer(); ?>

                    </body>

                    </html>
