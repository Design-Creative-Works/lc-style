<?php
/**
 * The template for 500 page in PWA.
 *
 * @package Neve
 * @since   2.4.3
 */
get_header( );

// do_action( 'neve_do_server_error' );
?>
	<div id="primary" class="content-area" style="text-align:center">
    <div class="container">
		<div id="server_error">
			<div class="error-500 server_error">
				<header class="page-header">
					<h1 class="page-title" >
                        <?php 
                        _e( '500 - server_error', 'neve' ); ?> </h1>              
				</header><!-- .page-header -->
				<div class="page-content image">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/500_custom.png" />
				</div><!-- .page-content-image -->
			</div><!-- .error-500 -->
        </div>
		</div>
        	
    </div><!-- #primary -->

<?php


get_footer();
