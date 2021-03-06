<?php
/* ------------------------------------------------------------------------- *
 *	Search results template				
/* ------------------------------------------------------------------------- */
?>

<?php get_header(); ?>

<section class="container<?php ac_mini_disabled() ?> main-section clearfix">
	
    <?php get_sidebar( 'browse' ); ?>
    
    <div class="wrap-template-1 clearfix">
    
    <section class="content-wrap with-title" role="main">
    
    	<header class="main-page-title">
        	<h1 class="page-title"><?php printf( __( 'Kết quả tìm kiếm: %s', 'justwrite' ), '<span>' . get_search_query() . '</span>' ) . ac_icon( 'angle-down' ) ?></h1>
        </header>
    
    	<div class="posts-wrap clearfix">
        
        <?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					get_template_part( 'post-templates/content', 'index' );
				endwhile;
			else :
				get_template_part( 'post-templates/content', 'no-articles' );
			endif;			
		?>
        
        </div><!-- END .posts-wrap -->
        
        <?php ac_paginate(); ?>
        
    </section><!-- END .content-wrap -->
    
    <?php get_sidebar(); ?>
    
    </div><!-- END .wrap-template-1 -->
    
</section><!-- END .container -->

<?php get_footer(); ?>