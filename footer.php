<?php
/**
 * The template for displaying the footer
 */
?>
			<!-- footer -->
			<footer class="main-footer">
				<div class="footer-social">
					<ul>
						<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
						<li><a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
					</ul>
				</div>
				<div class="copyright">&#169; <?php echo esc_html('IH Shadin 2024. All rights reserved.', 'shadin'); ?></div>
			</footer>
			<!-- footer end -->	
			<div class="nav-overlay"></div>
		</div>
		<!-- main-container end -->
		<!--body-bg -->
		<div class="body-bg">
			<div class="slider-thumb"></div>
			<div class="cavas-wrap">
				<canvas id="liquid"></canvas>
			</div>
			<div class="dynamic-title"><span><?php echo esc_html(the_title(), 'shadin') ?></span></div>
		</div>
		<!-- body-bg end -->
	</div>
	<!-- Main end -->
	<?php wp_footer(); ?>
</body>
</html>

