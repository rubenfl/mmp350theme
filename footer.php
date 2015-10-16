<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rubenzorro
 */

?>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'sampletheme' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'sampletheme' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'sampletheme' ), 'sampletheme', '<a href="http://rfernand.com" rel="designer">rf</a>' ); ?>
		<a href="https://www.facebook.com/ruben.fernandez.146"><i class="fa fa-facebook-square fa-4x"></i></a>
        <a href="https://www.youtube.com/channel/UCuWxyC7uKHnHXUuKi9cT77g"><i class="fa fa-youtube-square fa-4x"></i></a>
            <a href="https://www.linkedin.com/profile/view?id=129350427&trk=nav_responsive_tab_profile_pic"><i class="fa fa-linkedin-square fa-4x"></i></a>
            <a href="https://secure.skype.com/portal/profile"><i class="fa fa-skype fa-4x"></i></a>
            <a href="https://plus.google.com/u/0/"><i class="fa fa-google fa-4x"></i></a>
        
        <h6>Contact Me at:<br />Phone Number:<span style="color:red;"> 718-807-5640</span><br /> or by email:<span style="color:red;"> psarfl@hotmail.com</span>
    </h6>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
