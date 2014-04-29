<?php

/*

 * Template Name: Contact

 */

?>



<?php



if(isset($_POST['submitted'])) {

        if(trim($_POST['contactName']) === '') {

               $nameError = __('Please enter your name.','codeinwp');;

               $hasError = true;

        } else {

               $name = trim($_POST['contactName']);

        }



         if(trim($_POST['contactPhone']) === '') {

               $phoneError = __('Please enter your phone number.','codeinwp');;

               $hasError = true;

        } else {

               $phone = trim($_POST['contactPhone']);

        }



        if(trim($_POST['email']) === '')  {

               $emailError = __('Please enter your email address.','codeinwp');;

               $hasError = true;

        } else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {

               $emailError = __('You entered an invalid email address.','codeinwp');

               $hasError = true;

        } else {

               $email = trim($_POST['email']);

        }



        if(trim($_POST['comments']) === '') {

               $commentError = __('Please enter a message.','codeinwp');;

               $hasError = true;

        } else {

               if(function_exists('stripslashes')) {

                       $comments = stripslashes(trim($_POST['comments']));

               } else {

                       $comments = trim($_POST['comments']);

               }

        }



        if(!isset($hasError)) {

               $emailTo = get_option('tz_email');

               if (!isset($emailTo) || ($emailTo == '') ){

                       $emailTo = get_option('admin_email');

               }



               $subject = '[PHP Snippets] From '.$name;



               $body = "Name: $name \n\nEmail: $email \n\nComments: $comments";



               $headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;



               wp_mail($emailTo, $subject, $body, $headers);



               $emailSent = true;



        }



} ?>





<?php get_header(); ?>



<div class="full-content-body ">



            <div class="container">

                <div class="line-orange"></div>



                <div class="content-wrap">

                    <div class="content-inside">



                        <h1><?php the_title(); ?></h1>



                        <div class="contact-area-left contact-area">



                       <?php if (have_posts()) : while (have_posts()) : the_post(); ?>



                       <div <?php post_class() ?> id="post-<?php the_ID(); ?>">



                                      <div>

                                              <?php if(isset($emailSent) && $emailSent == true) { ?>

                                                      <div>

                                                             <p><?php echo __('Thanks, your email was sent successfully.','codeinwp'); ?></p>

                                                      </div>

                                              <?php } else { ?>

                                              

                                                      <?php the_content(); ?>



                                        <form action="<?php the_permalink(); ?>" id="contactForm" method="post">



                                        	<label for="i1"><?php _e('Name*:','codeinwp'); ?></label>



                                            <?php if($nameError != '') { ?>

                                                    <span><?php echo $nameError;?></span>

                                            <?php } ?>



                                            <input type="text" name="contactName" id="i3" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" />



                                            <label for="i2"><?php echo __('Phone*:','codeinwp'); ?></label>



                                            <?php if($phoneError != '') { ?>

                                                    <span><?php echo $phoneError;?></span>

                                            <?php } ?>



                                            <input type="text" name="contactPhone" id="i2" value="<?php if(isset($_POST['contactPhone'])) echo $_POST['contactPhone'];?>" />



                                            <label for="i3"><?php echo __('Email*:','codeinwp'); ?></label>



                                                <?php if($emailError != '') { ?>



                                                <span><?php echo $emailError;?></span>



                                            <?php } ?>



                                            <input type="text" name="email" id="i3" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" />



                                                             



                                            <label for="i4"><?php echo __('Message:','codeinwp'); ?></label>



                                            <?php if($commentError != '') { ?>



                                                <span><?php echo $commentError;?></span>



                                            <?php } ?>



                                            <textarea name="comments" id="i4" rows="6" cols="10"><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea>



                                            <input type="submit" value="Send Message">

                                            

                                            <input type="hidden" name="submitted" id="submitted" value="true" />



                                        </form>



                               <?php } ?>



                               </div><!-- .entry-content -->

                               

                       </div><!-- .post -->



                               <?php endwhile; endif; ?>



                        </div>



                        <div class="contact-area-right">



							<?php echo get_theme_mod( 'codeinwp_contact_page_map' ); ?>         



                        </div><!-- .contact-area-right -->



               </div><!-- .content-inside -->



                    <div class="botttom-box-shadow-center"></div>

                    <div class="botttom-box-shadow-left"></div>

                    <div class="botttom-box-shadow-right"></div>



                </div><!-- .banner-wrap -->



            </div><!-- .container -->



        </div>



<?php get_footer(); ?>