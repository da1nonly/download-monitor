<?php
/**
 * Download button
 */

global $pirenko_portfolios, $download_monitor;
?>
<p><a class="aligncenter download-button" href="<?php $pirenko_portfolios->the_download_link(); ?>" rel="nofollow">
	<?php printf( __( 'Download &ldquo;%s&rdquo;', 'download_monitor' ), $pirenko_portfolios->get_the_title() ); ?>
	<small><?php $pirenko_portfolios->the_filename(); ?> &ndash; <?php printf( _n( 'Downloaded 1 time', 'Downloaded %d times', $pirenko_portfolios->get_the_download_count(), 'download_monitor' ), $pirenko_portfolios->get_the_download_count() ) ?> &ndash; <?php $pirenko_portfolios->the_filesize(); ?></small>
</a></p>