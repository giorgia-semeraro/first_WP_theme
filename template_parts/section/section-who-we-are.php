<?php 
// the home page who we are section
?>

<?php
    $who_we_are = get_field('who_we_are');


    if ($who_we_are ):
    
?>

<section id="chi-siamo" class="bg-light shadow pt-3">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6"> 
                        <div class="text-left section">
                        <?php if(isset($who_we_are['title']) && $who_we_are['title']):?>
                            <h2 class="text-primary"><?php echo $who_we_are['title']?></h2>
                        <?php endif; ?>

                            <?php if(isset($who_we_are['content']) && $who_we_are['content']):?>
                                    <p><?php echo $who_we_are['content']?></p>
                            <?php endif; ?>
                            <?php if (isset($who_we_are['call_to_action']) && $who_we_are['call_to_action']):?>
                                    <a href="<?php echo $who_we_are['call_to_action']['url']?>" target="<?php echo $who_we_are['call_to_action']['target'] ?>" class="btn btn-primary btn-lg text-uppercase rounded-0"><?php echo $who_we_are['call_to_action']['title'] ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 d-none d-md-block">
                    <?php if( !empty( $who_we_are['image'] ) ): ?>
                        <img src="<?php echo esc_url($who_we_are['image']['url']); ?>" alt="<?php echo esc_attr($who_we_are['image']['alt']); ?>" />
                    <?php endif; ?>
                    </div>
                </div>
            </div>
</section>

<?php endif; ?>