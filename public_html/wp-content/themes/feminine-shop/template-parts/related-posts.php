<?php
/**
 * Related posts based on categories and tags.
 * 
 */

$feminine_shop_archive_year  = get_the_time('Y'); 
$feminine_shop_archive_month = get_the_time('m'); 
$feminine_shop_archive_day   = get_the_time('d'); 

$feminine_shop_related_posts_taxonomy = get_theme_mod( 'feminine_shop_related_posts_taxonomy', 'category' );

$feminine_shop_post_args = array(
    'posts_per_page'    => absint( get_theme_mod( 'feminine_shop_related_posts_count', '3' ) ),
    'orderby'           => 'rand',
    'post__not_in'      => array( get_the_ID() ),
);

$feminine_shop_tax_terms = wp_get_post_terms( get_the_ID(), 'category' );
$feminine_shop_terms_ids = array();
foreach( $feminine_shop_tax_terms as $tax_term ) {
	$feminine_shop_terms_ids[] = $tax_term->term_id;
}

$feminine_shop_post_args['category__in'] = $feminine_shop_terms_ids; 

if(get_theme_mod('feminine_shop_related_post',true)==1){

$feminine_shop_related_posts = new WP_Query( $feminine_shop_post_args );

if ( $feminine_shop_related_posts->have_posts() ) : ?>
    <div class="related-post">
        <h3><?php echo esc_html(get_theme_mod('feminine_shop_related_post_title','Related Post'));?></h3>
        <div class="row">
            <?php while ( $feminine_shop_related_posts->have_posts() ) : $feminine_shop_related_posts->the_post(); ?>
                <div class="col-lg-4 col-md-6">
                    <article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
                        <div class="post-main-box p-3">
                            <?php if( get_theme_mod('feminine_shop_related_image_hide_show',true) == 1) { ?>
                                <div class="box-image">
                                    <?php
                                        if(has_post_thumbnail()) {
                                          the_post_thumbnail();
                                        }
                                    ?>
                                </div>
                            <?php } ?>
                            <h2 class="section-title"><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
                            <?php if( get_theme_mod( 'feminine_shop_related_toggle_postdate',true) == 1 || get_theme_mod( 'feminine_shop_related_toggle_author',true) == 1 || get_theme_mod( 'feminine_shop_related_toggle_comments',true) == 1 || get_theme_mod( 'feminine_shop_related_toggle_time',true) == 1) { ?>
                                <div class="post-info p-2 my-3">
                                  <?php if(get_theme_mod('feminine_shop_related_toggle_postdate',true)==1){ ?>
                                    <i class="<?php echo esc_attr(get_theme_mod('feminine_shop_related_postdate_icon','fas fa-calendar-alt')); ?> me-2"></i><span class="entry-date"><a href="<?php echo esc_url( get_day_link( $feminine_shop_archive_year, $feminine_shop_archive_month, $feminine_shop_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><span><?php echo esc_html(get_theme_mod('feminine_shop_related_post_meta_field_separator', '|'));?></span>
                                  <?php } ?>

                                  <?php if(get_theme_mod('feminine_shop_related_toggle_author',true)==1){ ?>
                                    <i class="<?php echo esc_attr(get_theme_mod('feminine_shop_related_author_icon','fas fa-user')); ?> me-2"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span><span><?php echo esc_html(get_theme_mod('feminine_shop_related_post_meta_field_separator', '|'));?></span>
                                  <?php } ?>

                                  <?php if(get_theme_mod('feminine_shop_related_toggle_comments',true)==1){ ?>
                                    <i class="<?php echo esc_attr(get_theme_mod('feminine_shop_related_comments_icon','fa fa-comments')); ?> me-2" aria-hidden="true"></i><span class="entry-comments"><?php comments_number( __('0 Comment', 'feminine-shop'), __('0 Comments', 'feminine-shop'), __('% Comments', 'feminine-shop') ); ?></span><span><?php echo esc_html(get_theme_mod('feminine_shop_related_post_meta_field_separator', '|'));?></span>
                                  <?php } ?>

                                  <?php if(get_theme_mod('feminine_shop_related_toggle_time',true)==1){ ?>
                                    <i class="<?php echo esc_attr(get_theme_mod('feminine_shop_related_time_icon','fas fa-clock')); ?> me-2"></i><span class="entry-time"><?php echo esc_html( get_the_time() ); ?></span>
                                  <?php } ?>
                                  <?php echo esc_html (feminine_shop_edit_link()); ?>
                                </div>
                            <?php } ?>
                            <div class="new-text">
                                <div class="entry-content">
                                    <?php $theme_lay = get_theme_mod( 'feminine_shop_excerpt_settings','Excerpt');
                                        if($theme_lay == 'Content'){ ?>
                                          <?php the_content(); ?>
                                        <?php }
                                        if($theme_lay == 'Excerpt'){ ?>
                                          <?php if(get_the_excerpt()) { ?>
                                            <p><?php $feminine_shop_excerpt = get_the_excerpt(); echo esc_html( feminine_shop_string_limit_words( $feminine_shop_excerpt, esc_attr(get_theme_mod('feminine_shop_related_posts_excerpt_number','30')))); ?></p>
                                          <?php }?>
                                        <?php }?>
                                </div>
                            </div>
                            <?php if( get_theme_mod('feminine_shop_related_button_text','Read More') != ''){ ?>
                                <div class="more-btn">
                                    <a class="p-3" href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html(get_theme_mod('feminine_shop_related_button_text',__('Read More','feminine-shop')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('feminine_shop_related_button_text',__('Read More','feminine-shop')));?></span></a>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="clearfix"></div>
                    </article>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif;
wp_reset_postdata();

}