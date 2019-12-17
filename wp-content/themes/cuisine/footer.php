<?php
/**
 * Kim Bum
 */
?>

<footer class="chopcafe_footer chopcafe_footer_1 chopcafe_footer_2 bg_image" style="background-image: url(<?php echo get_site_url() . '/wp-content/uploads/2019/12/footer_bg.jpg' ?>);">
	<div class="bg_overlay"></div>
	<div class="container">
		<div class="footer_widget footer_widget_1">
			<div class="row">
				<?php if(is_active_sidebar( 'sidebar-footer' )) : dynamic_sidebar( 'sidebar-footer' ); endif; ?>
			</div>
		</div>
		<div class="chopcafe_copyright chopcafe_copyright_1">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="copyright_text">
						<p>© Copyright <?= date( 'Y' ); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="copyright_text float-right">
						<p>Designed by Trương Tuấn</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<a id="scroll_top"><i class="fas fa-angle-up"></i></a>
<?php wp_footer(); ?>
</body>
</html>
