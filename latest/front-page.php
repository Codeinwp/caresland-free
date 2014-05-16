<?php
/**
 * The template used for displaying home page.
 *
 * @package codeinwp
 */

get_header(); ?>


	<?php if ( get_theme_mod( 'first_slide' ) || get_theme_mod( 'second_slide' ) || get_theme_mod( 'third_slide' ) ||  get_theme_mod( 'fourth_slide' ) ) : ?>
        <div class="banner-homepage">
            <div class="container">

                <div class="line-orange"></div>

                <div class="banner-wrap">    
                    
                    <div class="flexslider">
                        <ul class="slides">
	                        <?php if ( get_theme_mod( 'first_slide' ) ) : ?>
                           		<li>
	                                <?php if ( get_theme_mod( 'codeinwp_first_slide_link' ) ) : ?>
                                    	<a href="<?php echo get_theme_mod( 'codeinwp_first_slide_link' ); ?>" >
	                                <?php endif; ?>	
                                	<img src="<?php echo get_theme_mod( 'first_slide' ); ?>" alt="first slide" />
                                	<?php if ( get_theme_mod( 'codeinwp_first_slide_link' ) ) : ?>
                                    	</a>
	                                <?php endif; ?>	
                           		</li>
 							<?php endif; ?>
	                        <?php if ( get_theme_mod( 'second_slide' ) ) : ?>
                           		<li>
	                                <?php if ( get_theme_mod( 'codeinwp_second_slide_link' ) ) : ?>
                                    	<a href="<?php echo get_theme_mod( 'codeinwp_second_slide_link' ); ?>" >
	                                <?php endif; ?>	
                                	<img src="<?php echo get_theme_mod( 'second_slide' ); ?>" alt="second slide"/>
                                	<?php if ( get_theme_mod( 'codeinwp_second_slide_link' ) ) : ?>
                                    	</a>
	                                <?php endif; ?>	
                           		</li>
 							<?php endif; ?>
	                        <?php if ( get_theme_mod( 'third_slide' ) ) : ?>
                           		<li>
	                                <?php if ( get_theme_mod( 'codeinwp_third_slide_link' ) ) : ?>
                                    	<a href="<?php echo get_theme_mod( 'codeinwp_third_slide_link' ); ?>" >
	                                <?php endif; ?>	
                                	<img src="<?php echo get_theme_mod( 'third_slide' ); ?>" alt="third slide" />
                                	<?php if ( get_theme_mod( 'codeinwp_third_slide_link' ) ) : ?>
                                    	</a>
	                                <?php endif; ?>	
                           		</li>
 							<?php endif; ?>
	                        <?php if ( get_theme_mod( 'fourth_slide' ) ) : ?>
                           		<li>
	                                <?php if ( get_theme_mod( 'codeinwp_fourth_slide_link' ) ) : ?>
                                    	<a href="<?php echo get_theme_mod( 'codeinwp_fourth_slide_link' ); ?>" >
	                                <?php endif; ?>	
                                	<img src="<?php echo get_theme_mod( 'fourth_slide' ); ?>" alt="fourt slide" />
                                	<?php if ( get_theme_mod( 'codeinwp_fourth_slide_link' ) ) : ?>
                                    	</a>
	                                <?php endif; ?>	
                           		</li>
 							<?php endif; ?>                          
                        </ul>
                    </div><!-- .flexslider -->
                    
                    <div class="botttom-shadow"></div>
                </div><!-- .banner-wrap -->
            </div><!-- .container -->
        </div><!-- .banner-homepage -->
	<?php endif; ?>

       <!-- [begin] content -->
<div id="content" class="content-area" role="main">

		<div class="centent-homepage-wrap">
        	<div class="container">
                    
                <?php if ( get_theme_mod('codeinwp_home_box_img_1') || get_theme_mod('codeinwp_home_box_title_1')  || get_theme_mod('codeinwp_home_box_textarea_1')  || get_theme_mod('codeinwp_home_box_link_1') ) : ?>
                <div class="box-homepage-wrap">
                    <div class="box-homepage-left"></div>
                    <div class="box-homepage-content">
	                    <?php if ( get_theme_mod( 'codeinwp_home_box_img_1' ) ) : ?>
    	                    <p class="box-icon"><img src="<?php echo get_theme_mod( 'codeinwp_home_box_img_1' ); ?> " alt="<?php echo get_theme_mod( 'codeinwp_home_box_title_1' ); ?>"></p>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'codeinwp_home_box_title_1' ) ) : ?>
	                        <p class="box-title"><?php echo get_theme_mod( 'codeinwp_home_box_title_1' ); ?></p>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'codeinwp_home_box_textarea_1' ) ) : ?>
                        	<p class="box-content"><?php echo get_theme_mod( 'codeinwp_home_box_textarea_1' ); ?></p>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'codeinwp_home_box_link_1' ) ) : ?>
	                        <p class="btn-wrap"><a href="<?php echo get_theme_mod( 'codeinwp_home_box_link_1' ); ?> " class="btn-box"><?php _e('Read more','codeinwp'); ?></a></p>
                        <?php endif; ?>    
                    </div>
                    <div class="box-homepage-right"></div>
                </div><!-- .box-homepage-wrap -->
                <?php endif; ?>


                <?php if ( get_theme_mod('codeinwp_home_box_img_2') || get_theme_mod('codeinwp_home_box_title_2')  || get_theme_mod('codeinwp_home_box_textarea_2')  || get_theme_mod('codeinwp_home_box_link_2') ) : ?>
                <div class="box-homepage-wrap">
                    <div class="box-homepage-left"></div>
                    <div class="box-homepage-content">
	                    <?php if ( get_theme_mod( 'codeinwp_home_box_img_2' ) ) : ?>
    	                    <p class="box-icon"><img src="<?php echo get_theme_mod( 'codeinwp_home_box_img_2' ); ?> " alt="<?php echo get_theme_mod( 'codeinwp_home_box_title_2' ); ?>"></p>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'codeinwp_home_box_title_2' ) ) : ?>
	                        <p class="box-title"><?php echo get_theme_mod( 'codeinwp_home_box_title_2' ); ?></p>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'codeinwp_home_box_textarea_2' ) ) : ?>
                        	<p class="box-content"><?php echo get_theme_mod( 'codeinwp_home_box_textarea_2' ); ?></p>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'codeinwp_home_box_link_2' ) ) : ?>
	                        <p class="btn-wrap"><a href="<?php echo get_theme_mod( 'codeinwp_home_box_link_2' ); ?> " class="btn-box">Read more</a></p>
                        <?php endif; ?>    
                    </div>
                    <div class="box-homepage-right"></div>
                </div><!-- .box-homepage-wrap -->
                <?php endif; ?>


                <?php if ( get_theme_mod('codeinwp_home_box_img_3') || get_theme_mod('codeinwp_home_box_title_3')  || get_theme_mod('codeinwp_home_box_textarea_3')  || get_theme_mod('codeinwp_home_box_link_3') ) : ?>
                <div class="box-homepage-wrap">
                    <div class="box-homepage-left"></div>
                    <div class="box-homepage-content">
	                    <?php if ( get_theme_mod( 'codeinwp_home_box_img_3' ) ) : ?>
    	                    <p class="box-icon"><img src="<?php echo get_theme_mod( 'codeinwp_home_box_img_3' ); ?> " alt="<?php echo get_theme_mod( 'codeinwp_home_box_title_3' ); ?>"></p>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'codeinwp_home_box_title_3' ) ) : ?>
	                        <p class="box-title"><?php echo get_theme_mod( 'codeinwp_home_box_title_3' ); ?></p>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'codeinwp_home_box_textarea_3' ) ) : ?>
                        	<p class="box-content"><?php echo get_theme_mod( 'codeinwp_home_box_textarea_3' ); ?></p>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'codeinwp_home_box_link_3' ) ) : ?>
	                        <p class="btn-wrap"><a href="<?php echo get_theme_mod( 'codeinwp_home_box_link_3' ); ?> " class="btn-box"><?php _e('Read more','codeinwp'); ?></a></p>
                        <?php endif; ?>    
                    </div>
                    <div class="box-homepage-right"></div>
                </div><!-- .box-homepage-wrap -->
                <?php endif; ?>
            
                
            </div><!-- .container -->
        </div><!-- .services -->
 

    <?php if(!is_home()): ?>

        <div class="content-body">
        	<div class="container">
       
                <div class="content-text">
	    
                    <?php while ( have_posts() ) : the_post(); ?>
                
                        <?php the_content(); ?>

    				<?php endwhile; // end of the loop. ?>

                </div>
                             
            </div><!-- .container -->
        </div><!-- .content-body -->

    <?php else: ?>

        <div class="full-content-body ">
            <div class="container">

                <div id="primary" class="blog-content-wrap">
                    <div id="main" class="blog-content" role="main">

                    <?php if ( have_posts() ) : ?>

                        <?php /* Start the Loop */ ?>
                        <?php while ( have_posts() ) : the_post(); ?>

                            <?php
                                /* Include the Post-Format-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                 */
                                get_template_part( 'content', get_post_format() );
                            ?>

                        <?php endwhile; ?>

                        <?php 
                            if (function_exists("cwp_pagination")) {
                                cwp_pagination();
                            } else{
                                codeinwp_paging_nav();
                            } 
                        ?>

                    <?php else : ?>

                        <?php get_template_part( 'content', 'none' ); ?>

                    <?php endif; ?>

   
                    </div><!-- .blog-content -->
                </div><!-- .blog-content-wra -->

                <div class="sidebar">
                    <?php get_sidebar(); ?>
                </div><!-- .sidebar -->
        </div>
    </div>


    <?php endif; ?>

	</div>        
        
<?php get_footer(); ?>