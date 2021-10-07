<?php
/**
 * 404 template.
 *
 * @package Neve
 */

get_header();
// do_action( 'neve_do_404' );
?>

	<div id="primary" class="content-area" style="text-align:center">
    <div class="container">
        		<div class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title" >
                        <?php 
                        _e( 'Oops thats a 404!  well thats not good.....', 'neve' ); ?> </h1>              
				</header><!-- .page-header -->
				<div class="page-content" > 
                     <h2>It looks like that page can't be found.</h2>   
					<p>'Would you like to re-try your search?'</p>
					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</div><!-- .error-404 -->
        </div>
    </div><!-- #primary -->

<?php
get_footer();
