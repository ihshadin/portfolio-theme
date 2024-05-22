<?php
/**
 * The template for displaying 404 pages (not found)
 *
 */
get_header();
?>
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
<?php
get_footer();
