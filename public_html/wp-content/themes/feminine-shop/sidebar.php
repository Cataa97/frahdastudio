<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Feminine Shop
 */
?>

<div id="sidebar" <?php if( is_page_template('blog-post-left-sidebar.php')){?> style="float:left;"<?php } ?>>    
    <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
        <aside id="search" class="widget" role="complementary" aria-label="firstsidebar">
            <h3 class="widget-title"><?php esc_html_e( 'Search', 'feminine-shop' ); ?></h3>
            <?php get_search_form(); ?>
        </aside>
        <aside id="archives" class="widget" role="complementary" aria-label="firstsidebar">
            <h3 class="widget-title"><?php esc_html_e( 'Archives', 'feminine-shop' ); ?></h3>
            <ul>
                <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
            </ul>
        </aside>
        <aside id="meta" class="widget" role="complementary" aria-label="secondsidebar">
            <h3 class="widget-title"><?php esc_html_e( 'Meta', 'feminine-shop' ); ?></h3>
            <ul>
                <?php wp_register(); ?>
                <li><?php wp_loginout(); ?></li>
                <?php wp_meta(); ?>
            </ul>
        </aside>
        <aside id="categories" class="widget" role="complementary" aria-label="forthsidebar"> 
            <h3 class="widget-title"><?php esc_html_e( 'Categories', 'feminine-shop' ); ?></h3>          
            <ul>
                <?php wp_list_categories('title_li=');  ?>
            </ul>
        </aside>
        <aside id="categories-dropdown" class="widget" role="complementary" aria-label="fifthsidebar">
            <h3 class="widget-title"><?php esc_html_e( 'Dropdown Categories', 'feminine-shop' ); ?></h3>
            <ul>
                <?php wp_dropdown_categories('title_li=');  ?>
            </ul>
        </aside>
        <aside id="tag-cloud" class="widget" role="complementary" aria-label="sixthsidebar">
            <h3 class="widget-title"><?php esc_html_e( 'Tag Cloud', 'feminine-shop' ); ?></h3>
            <ul>
                <?php wp_tag_cloud('title_li=');  ?>
            </ul>
        </aside>
    <?php endif; ?>
</div> 