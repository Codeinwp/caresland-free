<?php
/**
 * @package codeinwp
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <h1><?php the_title(); ?></h1>
        <p class="post-info-single">
             <a href="<?php echo get_month_link( get_the_time('Y'), get_the_time('m') ); ?>" title="<?php the_time('F j, Y '); ?>" class="blog-box-date"><?php the_time('F j, Y '); ?></a>
            <span class="blog-box-author"><?php the_author_posts_link() ?></span>
            <a href="<?php the_permalink(); ?>/#comments" title="7 comments" class="blog-box-comments"><?php comments_number( 'No Comments', '1 Comment', '% Comments' ); ?></a>
        </p>

		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'codeinwp' ),
				'after'  => '</div>',
			) );
		?>

        <p class="post-info-single-category">
            <?php _e('Category:','codeinwp'); ?>
            <?php 
                    echo get_the_category_list( __( ', ', 'codeinwp' ) );
            ?>
        </p>
        <p class="post-info-single-tags">
            <?php 
            if( has_tag() ) {
                echo 'Tags: ';
                echo get_the_tag_list( '', __( ', ', 'codeinwp' ) );
            }	
            ?>
        </p>

</article><!-- #post-## -->
<div class="clear"></div>