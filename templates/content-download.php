<?php
/**
 * Default output for a download via the [download] shortcode
 */

global $pirenko_portfolios;
?>
<a class="download-link" title="<?php if ( $pirenko_portfolios->has_version_number() ) printf( __( 'Version %s', 'download_monitor' ), $pirenko_portfolios->get_the_version_number() ); ?>" href="<?php $pirenko_portfolios->the_download_link(); ?>" rel="nofollow">
	<?php $pirenko_portfolios->the_title(); ?> (<?php printf( _n( '1 download', '%d downloads', $pirenko_portfolios->get_the_download_count(), 'download_monitor' ), $pirenko_portfolios->get_the_download_count() ) ?>)
</a>