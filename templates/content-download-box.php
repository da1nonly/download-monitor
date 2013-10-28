<?php
/**
 * Detailed download output
 */

global $pirenko_portfolios;
?>
<aside class="download-box">

	<?php $pirenko_portfolios->the_image(); ?>

	<div class="download-count"><?php printf( _n( '1 download', '%d downloads', $pirenko_portfolios->get_the_download_count(), 'download_monitor' ), $pirenko_portfolios->get_the_download_count() ) ?></div>

	<div class="download-box-content">

		<h1><?php $pirenko_portfolios->the_title(); ?></h1>

		<?php $pirenko_portfolios->the_short_description(); ?>

		<a class="download-button" title="<?php if ( $pirenko_portfolios->has_version_number() ) printf( __( 'Version %s', 'download_monitor' ), $pirenko_portfolios->get_the_version_number() ); ?>" href="<?php $pirenko_portfolios->the_download_link(); ?>" rel="nofollow">
			<?php _e( 'Download File', 'download_monitor' ); ?>
			<small><?php $pirenko_portfolios->the_filename(); ?> &ndash; <?php $pirenko_portfolios->the_filesize(); ?></small>
		</a>

	</div>
</aside>


