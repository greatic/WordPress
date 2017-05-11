<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SampleWebsite
 */

?>

	</div><!-- #content -->

	<footer>
		<div class="wrapper">
			<ul>
					<li>New York Restaurant</li>
					<li>3926 Anmoore Road</li>
					<li>New York, NY 10014</li>
					<li>718-749-1714</li>
			</ul>
			<ul>
					<li>France Restaurant</li>
					<li>68, rue da le Couronne</li>
					<li>75002 PARIS</li>
					<li>02.94.23.69.56</li>
			</ul>
			<ul>
					<li><a href="">Blog</a></li>
					<li><a href="">Careers</a></li>
					<li><a href="">Privacy Policy</a></li>
					<li><a href="">Contact</a></li>
			</ul>
			<ul>
					<li><img src="<?php echo(get_template_directory_uri());?>/images/white-logo.png" alt="logo"></li>
					<li>&copy; All rights reserved 2015</li>

			</ul>
			<?php dynamic_sidebar( 'footer' ); ?>
		</div><!-- end wrapper -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
