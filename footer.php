<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

?>
<div class="certs">
</div>
</section>
<footer class="row">
	<div class="footer-strip">
		<ul>
			<li><h5>PRE-PRIMARY & JUNIOR PREPARATORY <br>
				<span>91 Raats Drive, Parklands 7441</span>
			</li>
			<li><h5>SENIOR PREPARATORY <br>
				<span>50 Wood Drive, Parklands</span>
			</li>
			<li><h5>SECONDARY FACULTY <br>
				<span>1 College Avenue, Sandown</span>
			</li>
			<li><h5>Tel: 0861EDUCATE / 021 5212700 <br>
				<span>www.parklands.co.za</span>
			</li>
		</ul>
	</div>
	<div class="gallery-block">
		<ul class="medium-block-grid-4">
			<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/footer-img-01.jpg" /></li>
			<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/footer-img-02.jpg" /></li>
			<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/footer-img-03.jpg" /></li>
			<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/footer-img-04.jpg" /></li>
		</ul>
		<h5>WCED Independent School Reg No. 13/3/1/125  •  Whole School Umalusi Accreditation No. 13SCH0100021/22  •  Dept of Social Development Reg No. 15/5/13/2/2 C10506</h5>
		<div class="clearfix"></div>
	</div>
	<?php do_action( 'foundationpress_before_footer' ); ?>
	<?php dynamic_sidebar( 'footer-widgets' ); ?>
	<?php do_action( 'foundationpress_after_footer' ); ?>
</footer>
<a class="exit-off-canvas"></a>

	<?php do_action( 'foundationpress_layout_end' ); ?>
	</div>
</div>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
