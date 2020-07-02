

<div id="sidebar">
    <?php do_action( 'before_sidebar' ); ?>
    <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
        <aside id="recent-posts-3" class="widget_recent_entries">
           <?php the_post (); ?>
        </aside>
        <aside id="categories-3" class="widget_categories">
            <h3 class="widget-title"><?php _e( 'Archives', 'shape' ); ?></h3>
            <ul>
                <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
            </ul>
        </aside>
        <aside id="search-3" class="widget_search">
            <h3 class="widget-title"><?php _e( 'Meta', 'shape' ); ?></h3>
            <ul>
                <?php wp_register(); ?>
                <li><?php wp_loginout(); ?></li>
                <?php wp_meta(); ?>
            </ul>
        </aside>
   <?php endif; ?>
</div>


