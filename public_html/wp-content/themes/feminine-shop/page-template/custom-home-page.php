<?php
/**
 * Template Name: Custom Home Page
 */

get_header(); ?>

<main id="maincontent" role="main">
  <?php do_action( 'feminine_shop_before_slider' ); ?>

  <?php if( get_theme_mod( 'feminine_shop_slider_arrows', true) == 1 || get_theme_mod( 'feminine_shop_resp_slider_hide_show', true) == 1) { ?>
    <section id="slider"> 
      <?php if(get_theme_mod('feminine_shop_slider_type', 'Default slider') == 'Default slider' ){ ?>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="<?php echo esc_attr(get_theme_mod( 'feminine_shop_slider_speed',4000)) ?>">
        <?php $feminine_shop_pages = array();
          for ( $count = 1; $count <= 3; $count++ ) {
            $mod = intval( get_theme_mod( 'feminine_shop_slider_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $feminine_shop_pages[] = $mod;
            }
          }
          if( !empty($feminine_shop_pages) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $feminine_shop_pages,
              'orderby' => 'post__in'
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              $i = 1;
        ?>
        <div class="carousel-inner" role="listbox">
          <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
              <?php if(has_post_thumbnail()){
                the_post_thumbnail();
              } else{?>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/block-patterns/images/slider.png" alt="" />
              <?php } ?>
              <div class="carousel-caption pt-0">
                <div class="inner_carousel">
                  <?php if( get_theme_mod('feminine_shop_slider_small_title') != '' ){ ?>
                    <div class="mb-1 wow bounceInUp" data-wow-duration="2s">
                      <span class="slider-badge mb-1"><?php echo esc_html(get_theme_mod('feminine_shop_slider_small_title',''));?></span>
                    </div>
                  <?php }?>
                  <h1 class="mb-0 py-0 wow bounceInUp" data-wow-duration="2s"><?php the_title(); ?></h1>
                  <p class="my-3 wow bounceInUp" data-wow-duration="2s"><?php $feminine_shop_excerpt = get_the_excerpt(); echo esc_html( feminine_shop_string_limit_words( $feminine_shop_excerpt, esc_attr(get_theme_mod('feminine_shop_slider_excerpt_number','25')))); ?></p>
                  
                  <?php 
                    $feminine_shop_button_text = get_theme_mod('feminine_shop_topbar_btn_text', 'EXPLORE NOW');
                    $feminine_shop_button_link = get_theme_mod('feminine_shop_topbar_btn_link', ''); 
                    if (empty($feminine_shop_button_link)) {
                      $feminine_shop_button_link = get_permalink();
                    }
                    if ($feminine_shop_button_text || !empty($feminine_shop_button_link)) { ?>
                      <div class="more-btn mt-3 mb-3 mt-lg-5 mb-lg-5 mt-md-4 mb-md-5 wow bounceInUp" data-wow-duration="2s">
                        <a class="px-3 py-2 px-lg-4 py-lg-3 px-md-4 py-md-3" href="<?php echo esc_url($feminine_shop_button_link); ?>" class="button redmor">
                        <?php echo esc_html($feminine_shop_button_text); ?>
                          <span class="screen-reader-text"><?php echo esc_html($feminine_shop_button_text); ?></span>
                        </a>
                      </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
          <div class="no-postfound"></div>
        <?php endif;
        endif;?>
        <a class="carousel-control-prev" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" role="button">
          <span class="carousel-control-prev-icon w-auto h-auto" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Previous','feminine-shop' );?></span>
        </a>
        <a class="carousel-control-next" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" role="button">
          <span class="carousel-control-next-icon w-auto h-auto" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Next','feminine-shop' );?></span>
        </a>
      </div>
      <div class="clearfix"></div>
      <?php } else if(get_theme_mod('feminine_shop_slider_type', 'Advance slider') == 'Advance slider'){?>
        <?php echo do_shortcode(get_theme_mod('feminine_shop_advance_slider_shortcode')); ?>
      <?php } ?>
    </section>
  <?php }?>

  <?php do_action( 'feminine_shop_after_slider' ); ?>

  <section id="about-us" class="py-4 text-center text-md-start wow rotateInDownRight delay-1000">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 text-lg-start text-md-start text-center">
        <?php if( get_theme_mod( 'feminine_shop_about_section_title') != '') { ?>
          <strong><?php echo esc_html(get_theme_mod('feminine_shop_about_section_title',''));?></strong>
        <?php } ?>
        <?php $feminine_shop_product_page = array();
          $mod = absint( get_theme_mod( 'feminine_shop_about_page','feminine-shop'));
          if ( 'page-none-selected' != $mod ) {
            $feminine_shop_product_page[] = $mod;
          }
          if( !empty($feminine_shop_product_page) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $feminine_shop_product_page,
              'orderby' => 'post__in'
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              $count = 0;
              while ( $query->have_posts() ) : $query->the_post(); ?>
                <h3 class="mt-3"><?php the_title(); ?></h3>
                <p class="my-4"><?php $feminine_shop_excerpt = get_the_excerpt(); echo esc_html( feminine_shop_string_limit_words( $feminine_shop_excerpt, esc_attr(get_theme_mod('feminine_shop_slider_excerpt_number','30')))); ?></p>
                <div class="more-btn mt-3 mb-3 mt-lg-5 mb-lg-5 mt-md-5 mb-md-5">
                  <a class="px-3 py-2 px-lg-4 py-lg-3 px-md-4 py-md-3" href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html('KNOW MORE','feminine-shop');?><i class="fas fa-angle-double-right"></i><span class="screen-reader-text"><?php echo esc_html('KNOW MORE','feminine-shop');?></span></a>
                </div>
              <?php endwhile; ?>
            <?php else : ?>
              <div class="no-postfound"></div>
            <?php endif;
          endif;
          wp_reset_postdata()
        ?>
      </div>
      <div class="col-lg-8 col-md-8">
        <?php $feminine_shop_product_page = array();
          $mod = absint( get_theme_mod( 'feminine_shop_products_page','feminine-shop'));
          if ( 'page-none-selected' != $mod ) {
            $feminine_shop_product_page[] = $mod;
          }
          if( !empty($feminine_shop_product_page) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $feminine_shop_product_page,
              'orderby' => 'post__in'
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              $count = 0;
              while ( $query->have_posts() ) : $query->the_post(); ?>
                <?php the_content(); ?>
              <?php endwhile; ?>
            <?php else : ?>
              <div class="no-postfound"></div>
            <?php endif;
          endif;
          wp_reset_postdata()
        ?>
      </div>
    </div>
  </div>
  </section>

  <?php do_action( 'feminine_shop_after_service' ); ?>

  <div id="content-vw">
    <div class="container">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>