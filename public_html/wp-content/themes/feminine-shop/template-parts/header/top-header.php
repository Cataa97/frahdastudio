<?php
/**
 * The template part for top header
 *
 * @package Feminine Shop
 * @subpackage feminine-shop
 * @since feminine-shop 1.0
 */
?>
<?php if (get_theme_mod('feminine_shop_hide_show_topbar_section', true) == 1 || get_theme_mod( 'feminine_shop_resp_topbar_hide_show', true) == 1) {  ?>
  <div class="top-bar text-center">
    <div class="container">
      <?php if( get_theme_mod('feminine_shop_top_bar_text') != ''){ ?>
        <p class="py-2 py-lg-3 py-md-3 mb-0"><?php echo esc_html(get_theme_mod('feminine_shop_top_bar_text',''));?></p>
      <?php } ?>
    </div>
  </div>
<?php }?>  