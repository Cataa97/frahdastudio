<?php
/**
 * The template part for displaying post
 *
 * @package Feminine Shop 
 * @subpackage feminine-shop
 * @since feminine-shop 1.0
 */
?>

<?php 
  $feminine_shop_archive_year  = get_the_time('Y'); 
  $feminine_shop_archive_month = get_the_time('m'); 
  $feminine_shop_archive_day   = get_the_time('d'); 
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="post-main-box p-3 mb-3 wow zoomInUp" data-wow-duration="2s">
    <?php $feminine_shop_theme_lay = get_theme_mod( 'feminine_shop_blog_layout_option','Default');
    if($feminine_shop_theme_lay == 'Default'){ ?>
      <div class="row">
        <?php if(has_post_thumbnail() && get_theme_mod( 'feminine_shop_featured_image_hide_show',true) == 1) {?>
          <div class="box-image col-lg-6 col-md-6">
            <?php the_post_thumbnail(); ?>
          </div>
        <?php } ?>
        <article class="new-text <?php if(has_post_thumbnail() && get_theme_mod( 'feminine_shop_featured_image_hide_show',true) == 1) { ?>col-lg-6 col-md-6" <?php } else { ?>col-lg-12 col-md-12" <?php } ?>>
          <h2 class="section-title mt-0 pt-0"><a href="<?php the_permalink(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
          <?php if( get_theme_mod( 'feminine_shop_toggle_postdate',true) == 1 || get_theme_mod( 'feminine_shop_toggle_author',true) == 1 || get_theme_mod( 'feminine_shop_toggle_comments',true) == 1 || get_theme_mod( 'feminine_shop_toggle_time',true) == 1) { ?>
            <div class="post-info p-2 mb-3">
              <?php if(get_theme_mod('feminine_shop_toggle_postdate',true)==1){ ?>
                <i class="fas fa-calendar-alt"></i><span class="entry-date"><a href="<?php echo esc_url( get_day_link( $feminine_shop_archive_year, $feminine_shop_archive_month, $feminine_shop_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
              <?php } ?>

              <?php if(get_theme_mod('feminine_shop_toggle_author',true)==1){ ?>
                <span><?php echo esc_html(get_theme_mod('feminine_shop_meta_field_separator', '|'));?></span> <i class="fas fa-user"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span>
              <?php } ?>

              <?php if(get_theme_mod('feminine_shop_toggle_comments',true)==1){ ?>
                <span><?php echo esc_html(get_theme_mod('feminine_shop_meta_field_separator', '|'));?></span> <i class="fa fa-comments" aria-hidden="true"></i><span class="entry-comments"><?php comments_number( __('0 Comment', 'feminine-shop'), __('0 Comments', 'feminine-shop'), __('% Comments', 'feminine-shop') ); ?></span>
              <?php } ?>

              <?php if(get_theme_mod('feminine_shop_toggle_time',true)==1){ ?>
                <span><?php echo esc_html(get_theme_mod('feminine_shop_meta_field_separator', '|'));?></span> <i class="fas fa-clock"></i><span class="entry-time"><?php echo esc_html( get_the_time() ); ?></span>
              <?php } ?>
            </div>
          <?php } ?>
          <p class="mb-0">
            <?php $feminine_shop_theme_lay = get_theme_mod( 'feminine_shop_excerpt_settings','Excerpt');
            if($feminine_shop_theme_lay == 'Content'){ ?>
              <?php the_content(); ?>
            <?php }
            if($feminine_shop_theme_lay == 'Excerpt'){ ?>
              <?php if(get_the_excerpt()) { ?>
                <?php $feminine_shop_excerpt = get_the_excerpt(); echo esc_html( feminine_shop_string_limit_words( $feminine_shop_excerpt, esc_attr(get_theme_mod('feminine_shop_excerpt_number','30')))); ?> <?php echo esc_html(get_theme_mod('feminine_shop_blog_excerpt_suffix',''));?>
              <?php }?>
            <?php }?>
          </p>
          <?php if( get_theme_mod('feminine_shop_button_text','Read More') != ''){ ?>
            <div class="more-btn mt-4 mb-4">
              <a class="p-3" href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('feminine_shop_button_text',__('Read More','feminine-shop')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('feminine_shop_button_text',__('Read More','feminine-shop')));?></span></a>
            </div>
          <?php } ?>
        </article>
      </div>
    <?php }else if($feminine_shop_theme_lay == 'Center'){ ?>
      <div class="service-text">
        <h2 class="section-title"><a href="<?php the_permalink(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
        <?php if( get_theme_mod( 'feminine_shop_featured_image_hide_show',true) == 1) { ?>
          <div class="box-image">
            <?php the_post_thumbnail(); ?>
          </div>
        <?php } ?>
        <?php if( get_theme_mod( 'feminine_shop_toggle_postdate',true) == 1 || get_theme_mod( 'feminine_shop_toggle_author',true) == 1 || get_theme_mod( 'feminine_shop_toggle_comments',true) == 1 || get_theme_mod( 'feminine_shop_toggle_time',true) == 1) { ?>
          <div class="post-info p-2 mb-3">
            <?php if(get_theme_mod('feminine_shop_toggle_postdate',true)==1){ ?>
              <i class="fas fa-calendar-alt"></i><span class="entry-date"><a href="<?php echo esc_url( get_day_link( $feminine_shop_archive_year, $feminine_shop_archive_month, $feminine_shop_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
            <?php } ?>

            <?php if(get_theme_mod('feminine_shop_toggle_author',true)==1){ ?>
              <span><?php echo esc_html(get_theme_mod('feminine_shop_meta_field_separator', '|'));?></span> <i class="fas fa-user"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span>
            <?php } ?>

            <?php if(get_theme_mod('feminine_shop_toggle_comments',true)==1){ ?>
              <span><?php echo esc_html(get_theme_mod('feminine_shop_meta_field_separator', '|'));?></span> <i class="fa fa-comments" aria-hidden="true"></i><span class="entry-comments"><?php comments_number( __('0 Comment', 'feminine-shop'), __('0 Comments', 'feminine-shop'), __('% Comments', 'feminine-shop') ); ?></span>
            <?php } ?>

            <?php if(get_theme_mod('feminine_shop_toggle_time',true)==1){ ?>
              <span><?php echo esc_html(get_theme_mod('feminine_shop_meta_field_separator', '|'));?></span> <i class="fas fa-clock"></i><span class="entry-time"><?php echo esc_html( get_the_time() ); ?></span>
            <?php } ?>
          </div>
        <?php } ?>
        <p class="mb-0">
          <?php $feminine_shop_theme_lay = get_theme_mod( 'feminine_shop_excerpt_settings','Excerpt');
          if($feminine_shop_theme_lay == 'Content'){ ?>
            <?php the_content(); ?>
          <?php }
          if($feminine_shop_theme_lay == 'Excerpt'){ ?>
            <?php if(get_the_excerpt()) { ?>
              <?php $feminine_shop_excerpt = get_the_excerpt(); echo esc_html( feminine_shop_string_limit_words( $feminine_shop_excerpt, esc_attr(get_theme_mod('feminine_shop_excerpt_number','30')))); ?> <?php echo esc_html(get_theme_mod('feminine_shop_blog_excerpt_suffix',''));?>
            <?php }?>
          <?php }?>
        </p>
        <?php if( get_theme_mod('feminine_shop_button_text','Read More') != ''){ ?>
          <div class="more-btn mt-4 mb-4">
            <a class="p-3" href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('feminine_shop_button_text',__('Read More','feminine-shop')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('feminine_shop_button_text',__('Read More','feminine-shop')));?></span></a>
          </div>
        <?php } ?>
      </div>
    <?php }else if($feminine_shop_theme_lay == 'Left'){ ?>
      <div class="service-text">
        <?php if( get_theme_mod( 'feminine_shop_featured_image_hide_show',true) == 1) { ?>
          <div class="box-image">
            <?php the_post_thumbnail(); ?>
          </div>
        <?php } ?>
        <h2 class="section-title"><a href="<?php the_permalink(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
        <?php if( get_theme_mod( 'feminine_shop_toggle_postdate',true) == 1 || get_theme_mod( 'feminine_shop_toggle_author',true) == 1 || get_theme_mod( 'feminine_shop_toggle_comments',true) == 1 || get_theme_mod( 'feminine_shop_toggle_time',true) == 1) { ?>
          <div class="post-info p-2 mb-3">
            <?php if(get_theme_mod('feminine_shop_toggle_postdate',true)==1){ ?>
              <i class="fas fa-calendar-alt"></i><span class="entry-date"><a href="<?php echo esc_url( get_day_link( $feminine_shop_archive_year, $feminine_shop_archive_month, $feminine_shop_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
            <?php } ?>

            <?php if(get_theme_mod('feminine_shop_toggle_author',true)==1){ ?>
              <span><?php echo esc_html(get_theme_mod('feminine_shop_meta_field_separator', '|'));?></span> <i class="fas fa-user"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span>
            <?php } ?>

            <?php if(get_theme_mod('feminine_shop_toggle_comments',true)==1){ ?>
              <span><?php echo esc_html(get_theme_mod('feminine_shop_meta_field_separator', '|'));?></span> <i class="fa fa-comments" aria-hidden="true"></i><span class="entry-comments"><?php comments_number( __('0 Comment', 'feminine-shop'), __('0 Comments', 'feminine-shop'), __('% Comments', 'feminine-shop') ); ?></span>
            <?php } ?>

            <?php if(get_theme_mod('feminine_shop_toggle_time',true)==1){ ?>
              <span><?php echo esc_html(get_theme_mod('feminine_shop_meta_field_separator', '|'));?></span> <i class="fas fa-clock"></i><span class="entry-time"><?php echo esc_html( get_the_time() ); ?></span>
            <?php } ?>
          </div>
        <?php } ?>
        <p class="mb-0">
          <?php $feminine_shop_theme_lay = get_theme_mod( 'feminine_shop_excerpt_settings','Excerpt');
          if($feminine_shop_theme_lay == 'Content'){ ?>
            <?php the_content(); ?>
          <?php }
          if($feminine_shop_theme_lay == 'Excerpt'){ ?>
            <?php if(get_the_excerpt()) { ?>
              <?php $feminine_shop_excerpt = get_the_excerpt(); echo esc_html( feminine_shop_string_limit_words( $feminine_shop_excerpt, esc_attr(get_theme_mod('feminine_shop_excerpt_number','30')))); ?> <?php echo esc_html(get_theme_mod('feminine_shop_blog_excerpt_suffix',''));?>
            <?php }?>
          <?php }?>
        </p>
        <?php if( get_theme_mod('feminine_shop_button_text','Read More') != ''){ ?>
          <div class="more-btn mt-4 mb-4">
            <a class="p-3" href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('feminine_shop_button_text',__('Read More','feminine-shop')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('feminine_shop_button_text',__('Read More','feminine-shop')));?></span></a>
          </div>
        <?php } ?>
      </div>
    <?php } ?>
  </div>
</div>