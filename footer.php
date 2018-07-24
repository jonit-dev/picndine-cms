<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PicnDine
 */

?>



	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
            <div class="connect">
                <p>Connect with us:</p>
            </div>
                <nav id="social-navigation" class="social-navigation">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-social',
				'menu_id'        => 'menu-social',
                            'menu_class'   => 'menu menu-social',
														'link_before'  => '<span class="screen-reader-text">',
														'link_after'   => '</span>',
                            'container'    => ' ',
			) );
			?>
		</nav>

               <div class="site-info">
                   <p>&copy; 2018 Picndine. All rights Reserved.</p>
		</div><!-- .site-info -->


	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
