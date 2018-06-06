<?php
/**
 * @package ti_caresland_lite
 */
?>

						<article class="post-box" id="post-<?php the_ID(); ?>">
							<a href="<?php the_permalink(); ?>" class="blog-box-img" title="<?php the_title(); ?>">
								<?php
								if ( has_post_thumbnail() ) {
									the_post_thumbnail( 'post-thumbnail' );
								}
								?>
							</a>
							<a href="<?php the_permalink(); ?>" class="blog-box-title"><?php the_title(); ?></a>

							<a href="<?php echo get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ); ?>" title="<?php the_time( 'F j, Y ' ); ?>" class="blog-box-date">
								<?php the_time( 'F j, Y ' ); ?>
							</a>
							<span class="blog-box-author"><?php the_author_posts_link() ?></span>

							<div class="blog-box-content">
								<?php the_excerpt(); ?>
							</div>

							<a href="<?php the_permalink(); ?>/#comments" class="btn-box-green post-box-comm">
								<?php comments_number( 'Comments (0)', 'Comments (1)', 'Comments (%)' ); ?>
							</a>
							<a href="<?php the_permalink(); ?>" class="btn-box-orange post-box-read" title="<?php the_title(); ?>"><?php _e( 'Read more','caresland-lite' ); ?></a>

						</article><!-- .post-box -->

