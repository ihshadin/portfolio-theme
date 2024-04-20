<?php
/**
 * The template for displaying 404 pages (not found)
 *
 */
get_header();
?>

<!-- content-holder -->
<div class="content-holder">
	<!--wrapper -->
	<div id="wrapper">
		<!--scroll-bar -->
		<div class="scr-bar_dec"></div>
		<div class="scr-bar_container">
			<div class="content full-height" data-pagetitle="Error 404" data-pagesubtitle="Error 404">
				<div class="bg-top"></div>
				<div class="error-content">
					<div class="overlay"></div>
					<div class="bg" data-bg="<?php echo get_template_directory_uri(); ?>/images/bg/2.jpg"></div>
					<div class="error-wrap fl-wrap">
						<div class="container">
							<h2><?php echo esc_html('404', 'shadin') ?></h2>
							<p><?php echo esc_html("We're sorry, but the content you were looking for, couldn't be found.", 'shadin') ?></p>
							<a href="<?php echo esc_url(site_url()); ?>" class="btn ajax color-bg"><span><?php echo esc_html('Back to Home Page', 'shadin') ?></span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--scroll-bar end -->
		<!--share end -->
		<div class="share-wrapper">
			<div class="share-container isShare"></div>
		</div>
		<!--share end -->							
	</div>
	<!--wrapper end -->
	<!--page-load -->	
	<div class="page-load">
		<div class="pl-spinner"><span></span></div>
	</div>
	<!--page-load end -->					 
</div>
<!-- content-holder end -->

<?php
get_footer();
