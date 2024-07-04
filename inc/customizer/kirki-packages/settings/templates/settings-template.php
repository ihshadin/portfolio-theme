<?php
/**
 * Settings page template.
 *
 * @package Kirki
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );

return function () {
?>
	<div class="wrap heatbox-wrap kirki-settings-page" data-setup-udb-nonce="<?php echo esc_attr( wp_create_nonce( 'Kirki_Prepare_Install_Udb' ) ); ?>">
		<div class="heatbox-header heatbox-has-tab-nav heatbox-margin-bottom">
			<div class="heatbox-container heatbox-container-center">
				<div class="logo-container">
					<div>
						<span class="title">
							<?php _e( 'Imam Hossain Shadin', 'kirki' ); ?>
							<span class="version"><?php echo esc_html("Web Developer"); ?></span>
						</span>
						<p class="subtitle"><?php _e( 'Feel free to reach out to discuss custom website development solutions. I specialize in creating tailored websites using WordPress and advanced MERN stack technologies.', 'kirki' ); ?></p>
					</div>
					<div>
						<img src="<?php echo esc_url( KIRKI_PLUGIN_URL ); ?>/assets/images/imam.jpg">
					</div>
				</div>
				<nav>
					<ul class="heatbox-tab-nav">
						<li class="heatbox-tab-nav-item kirki-settings-panel">
							<a href="https://ihshadin.com" target="_blank"><?php _e( 'My Website', 'kirki' ); ?></a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="heatbox-container heatbox-container-center heatbox-column-container">
			<div class="heatbox-main heatbox-panel-wrapper">
				<h1 style="display: none;"></h1>
				<div class="heatbox-admin-panel kirki-settings-panel">
					<?php require __DIR__ . '/metaboxes/clear-font-cache.php'; ?>
				</div>
			</div>
			<div class="heatbox-sidebar">
				<?php require __DIR__ . '/metaboxes/documentation.php'; ?>
			</div>
		</div>
	</div>
	<?php
};
