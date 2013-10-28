<?php
/**
 * List of versions
 */

global $pirenko_portfolios;

$versions = $pirenko_portfolios->get_file_versions();

if ( $versions ) : ?>
	<ul class="download-versions">
		<?php
			foreach ( $versions as $version ) {
				$pirenko_portfolios->set_version( $version->id );
				$version_post = get_post( $version->id );
				?>
				<li><a class="download-link" title="<?php printf( _n( 'Downloaded 1 time', 'Downloaded %d times', $pirenko_portfolios->get_the_download_count(), 'download_monitor' ), $pirenko_portfolios->get_the_download_count() ) ?>" href="<?php $pirenko_portfolios->the_download_link(); ?>" rel="nofollow">
					<?php $pirenko_portfolios->the_filename(); ?> <?php if ( $pirenko_portfolios->has_version_number() ) echo '- ' . $pirenko_portfolios->get_the_version_number(); ?>
				</a></li>
				<?php
			}
		?>
	</ul>
<?php endif; ?>