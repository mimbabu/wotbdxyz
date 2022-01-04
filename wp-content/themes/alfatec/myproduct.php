<?php 
/***
 *Template Name: myproduct
 Displays Only myproduct Template

 *@package Wordpress
 * @subpackage webite
 * @since website 1.0
*/


get_header();
?>

 <?php
$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

$args = array(
    'posts_per_page' => 10,
    'category_name' => 'products',
    'paged' => $paged,
);

$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {

    while ( $the_query->have_posts() ) {
        $the_query->the_post();?>
            <h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
                <h5><?php the_time('F j, Y'); ?></h5>
                <div>
                   <?php if( has_excerpt() ): the_excerpt(); else: the_content(); endif; ?>
                </div>
            <?php  }?>
    //Page navigation
        <div id="pagenav" class="navigation clearfix">
            <div class="nav-prev alignleft"><?php next_posts_link( '<i class="fa fa-angle-double-left" aria-hidden="true"></i> Older Entries', $the_query->max_num_pages ); ?></div>
            <div class="nav-prev alignright"><?php previous_posts_link( 'Newer Entries <i class="fa fa-angle-double-right" aria-hidden="true"></i>' ); ?></div>
        </div>
        <?php echo '</div>';

     } else {
        // no posts found
        echo '<h1>No Posts Found</h1>';
    }

    // Restore original Post Data
    wp_reset_postdata();
    ?>


?> 






<?php get_footer();?>