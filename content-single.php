<?php
/**
 * @package caresland-lite
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <h1><?php the_title(); ?></h1>
        <p class="post-info-single">
             <a href="<?php echo get_month_link( get_the_time('Y'), get_the_time('m') ); ?>" title="<?php the_time('F j, Y '); ?>" class="blog-box-date"><?php the_time('F j, Y '); ?></a>
            <span class="blog-box-author"><?php the_author_posts_link() ?></span>
            <a href="<?php the_permalink(); ?>/#comments" class="blog-box-comments"><?php comments_number( __('No Comments','caresland-lite'), __('1 Comment','caresland-lite'), '% Comments' ); ?></a>
        </p>

		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'caresland-lite' ),
				'after'  => '</div>',
			) );
		?>

        <p class="post-info-single-category">
            <?php _e('Category:','caresland-lite'); ?>
            <?php 
                    echo get_the_category_list( __( ', ', 'caresland-lite' ) );
            ?>
        </p>
        <p class="post-info-single-tags">
            <?php 
            if( has_tag() ) {
                _e('Tags:','caresland-lite');
				echo ' ';
                echo get_the_tag_list( '', __( ', ', 'caresland-lite' ) );
            }	
            ?>
        </p>

</article><!-- #post-## -->
<div class="clear"></div>