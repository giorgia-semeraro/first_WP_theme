<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @package WordPress
 * @subpackage Sam_Theme
 * @since 1.0.0
 */

?>

<?php 

$template_directory = get_template_directory_uri ();
$path_images = $template_directory . '/assets/images/';

$linkedin_url = get_field ('linkedin_url', 'option');
$facebook_url = get_field ('facebook_url', 'option');
$instagram_url = get_field ('instagram_url', 'option');
$youtube_url = get_field ('youtube_url', 'option');
$nl_contact_form_id = get_field ('nl_contact_form_id', 'option');

?>
        </main>
        <!-- #site-footer -->
        <footer id="site-footer" class="page-footer bg-primary" role="contentinfo">
            <?php if ($linkedin_url || $facebook_url || $instagram_url || $youtube_url || $nl_contact_form_id ) :?>
            <div class="pre-footer bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6 order-lg-2">
                            <div>
                                <?php
                                    if($nl_contact_form_id){ 
                                        echo do_shortcode( '[contact-form-7 id=' . $nl_contact_form_id . ']' ); 
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <?php if ( $facebook_url ) :?>
                                <a href=" <?php echo $facebook_url; ?>">
                                    <img src="<?php echo $path_images; ?>facebook@2x.png" alt="facebook" class="footer-icon">
                                </a>
                            <?php endif; ?>
                            <?php if ( $linkedin_url ) :?>
                                <a href="<?php echo $linkedin_url; ?>">
                                    <img src="<?php echo $path_images; ?>linkedin@2x.png" alt="linkedin" class="footer-icon">
                                </a>
                            <?php endif; ?>
                            <?php if ( $instagram_url ) :?>
                                <a href="<?php echo $instagram_url; ?>">
                                    <img src="<?php echo $path_images; ?>instagram@2x.png" alt="instagram" class="footer-icon">
                                </a>
                            <?php endif; ?>
                            <?php if ( $youtube_url ) :?>
                                <a href="<?php echo $youtube_url; ?>">
                                    <img src="<?php echo $path_images; ?>youtube@2x.png" alt="youtube" class="footer-icon">
                                </a>
                            <?php endif; ?>        
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <div class="container">
                <div class="row">
                    <div class="col col-md-6 col-lg-4">
                        <?php 
                                $image = get_field('footer_logo', 'options');
                                if( !empty( $image ) ): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" class="footer-logo" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                        <?php the_field('footer_content', 'options'); ?>
                    </div>
                    <div class="col col-md-6 col-lg-8">
                        <div class="d-flex w-100 h-100 justify-content-end align-items-end flex-row">
                            
                            <?php 
                                $email = get_field ('email', 'options');
                                if ($email):
                            ?>
                                <a href="mailto:<?php echo $email; ?>" class="px-3 email-footer">
                                    <?php echo $email; ?>
                                </a>
                            <?php endif; ?>
                            <?php the_field('privacy_policy_link', 'options'); ?>
                            <?php the_field('cookie_policy_link', 'options'); ?>
                        </div>      
                    </div>                
                </div>
            </div>
        </footer>
       

        <?php wp_footer(); ?>

	</body>
</html>