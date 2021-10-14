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
		<div id="not-found">
			<div class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title" >
                        <?php 
                        _e( '404 - page not found', 'neve' ); ?> </h1>              
				</header><!-- .page-header -->
				<div class="page-content" > 
                     <p>The URL you've requested could not be found. The page could have been moved or is no longer live on the website. </p>  
					 <p>Please use the search or menu bar above to try and find a page relevant to you.</p>   
					<!-- <p>'Would you like to re-try your search?'</p> -->
					<div id="not-found-search">
								<?php get_search_form(); ?>
					</div>
			
				</div><!-- .page-content -->
			</div><!-- .error-404 -->
        </div>
		</div>
        	
    </div><!-- #primary -->

<?php
get_footer();
