<div class="theme-offer">
	<?php
        // Check if the demo import has been completed
        $feminine_shop_demo_import_completed = get_option('feminine_shop_demo_import_completed', false);

        // If the demo import is completed, display the "View Site" button
        if ($feminine_shop_demo_import_completed) {
        echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'feminine-shop') . '</p>';
        echo '<span><a href="' . esc_url(home_url()) . '" class="button button-primary site-btn" target="_blank">' . esc_html__('View Site', 'feminine-shop') . '</a></span>';
        }

		//POST and update the customizer and other related data of POLITICAL CAMPAIGN
        if (isset($_POST['submit'])) {

             // Check if woocommerce is installed and activated
            if (!is_plugin_active('woocommerce/woocommerce.php')) {
                // Install the plugin if it doesn't exist
                $feminine_shop_plugin_slug = 'woocommerce';
                $feminine_shop_plugin_file = 'woocommerce/woocommerce.php';
    
                // Check if plugin is installed
                $feminine_shop_installed_plugins = get_plugins();
                if (!isset($feminine_shop_installed_plugins[$feminine_shop_plugin_file])) {
                    include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
                    include_once(ABSPATH . 'wp-admin/includes/file.php');
                    include_once(ABSPATH . 'wp-admin/includes/misc.php');
                    include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');
    
                    // Install the plugin
                    $feminine_shop_upgrader = new Plugin_Upgrader();
                    $feminine_shop_upgrader->install('https://downloads.wordpress.org/plugin/woocommerce.latest-stable.zip');
                }
                // Activate the plugin
                activate_plugin($feminine_shop_plugin_file);
            }

            // Check if ibtana visual editor is installed and activated
            if (!is_plugin_active('ibtana-visual-editor/plugin.php')) {
              // Install the plugin if it doesn't exist
              $feminine_shop_plugin_slug = 'ibtana-visual-editor';
              $feminine_shop_plugin_file = 'ibtana-visual-editor/plugin.php';

              // Check if plugin is installed
              $feminine_shop_installed_plugins = get_plugins();
              if (!isset($feminine_shop_installed_plugins[$feminine_shop_plugin_file])) {
                  include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
                  include_once(ABSPATH . 'wp-admin/includes/file.php');
                  include_once(ABSPATH . 'wp-admin/includes/misc.php');
                  include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');

                  // Install the plugin
                  $feminine_shop_upgrader = new Plugin_Upgrader();
                  $feminine_shop_upgrader->install('https://downloads.wordpress.org/plugin/ibtana-visual-editor.latest-stable.zip');
              }
              // Activate the plugin
              activate_plugin($feminine_shop_plugin_file);
            }


            // ------- Create Nav Menu --------
            $feminine_shop_menuname = 'Main Menus';
            $feminine_shop_bpmenulocation = 'primary';
            $feminine_shop_menu_exists = wp_get_nav_menu_object($feminine_shop_menuname);

            if (!$feminine_shop_menu_exists) {
                $feminine_shop_menu_id = wp_create_nav_menu($feminine_shop_menuname);

                // Create Home Page
                $feminine_shop_home_title = 'Home';
                $feminine_shop_home = array(
                    'post_type' => 'page',
                    'post_title' => $feminine_shop_home_title,
                    'post_content' => '',
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'home'
                );
                $feminine_shop_home_id = wp_insert_post($feminine_shop_home);
                // Assign Home Page Template
                add_post_meta($feminine_shop_home_id, '_wp_page_template', 'page-template/custom-home-page.php');
                // Update options to set Home Page as the front page
                update_option('page_on_front', $feminine_shop_home_id);
                update_option('show_on_front', 'page');
                // Add Home Page to Menu
                wp_update_nav_menu_item($feminine_shop_menu_id, 0, array(
                    'menu-item-title' => __('Home', 'feminine-shop'),
                    'menu-item-classes' => 'home',
                    'menu-item-url' => home_url('/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $feminine_shop_home_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));


                // Create Pages Page with Dummy Content
                $feminine_shop_pages_title = 'Pages';
                $feminine_shop_pages_content = '
                <p>Explore all the pages we have on our website. Find information about our services, company, and more.</p>

                 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br>

                  All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
                $feminine_shop_pages = array(
                    'post_type' => 'page',
                    'post_title' => $feminine_shop_pages_title,
                    'post_content' => $feminine_shop_pages_content,
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'pages'
                );
                $feminine_shop_pages_id = wp_insert_post($feminine_shop_pages);
                // Add Pages Page to Menu
                wp_update_nav_menu_item($feminine_shop_menu_id, 0, array(
                    'menu-item-title' => __('Pages', 'feminine-shop'),
                    'menu-item-classes' => 'pages',
                    'menu-item-url' => home_url('/pages/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $feminine_shop_pages_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));

                // Create About Us Page with Dummy Content
                $feminine_shop_about_title = 'About Us';
                $feminine_shop_about_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

                         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br>

                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br>

                            All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
                $feminine_shop_about = array(
                    'post_type' => 'page',
                    'post_title' => $feminine_shop_about_title,
                    'post_content' => $feminine_shop_about_content,
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'about-us'
                );
                $feminine_shop_about_id = wp_insert_post($feminine_shop_about);
                // Add About Us Page to Menu
                wp_update_nav_menu_item($feminine_shop_menu_id, 0, array(
                    'menu-item-title' => __('About Us', 'feminine-shop'),
                    'menu-item-classes' => 'about-us',
                    'menu-item-url' => home_url('/about-us/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $feminine_shop_about_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));


                // Set the menu location if it's not already set
                if (!has_nav_menu($feminine_shop_bpmenulocation)) {
                    $locations = get_theme_mod('nav_menu_locations'); // Use 'nav_menu_locations' to get locations array
                    if (empty($locations)) {
                        $locations = array();
                    }
                    $locations[$feminine_shop_bpmenulocation] = $feminine_shop_menu_id;
                    set_theme_mod('nav_menu_locations', $locations);
                }

            }


            // Set the demo import completion flag
    		update_option('feminine_shop_demo_import_completed', true);
    		// Display success message and "View Site" button
    		echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'feminine-shop') . '</p>';
    		echo '<span><a href="' . esc_url(home_url()) . '" class="button button-primary site-btn" target="_blank">' . esc_html__('View Site', 'feminine-shop') . '</a></span>';
            //end


            // Top Bar //
          
            set_theme_mod( 'feminine_shop_top_bar_text', 'Lorem ipsum dolor sit amet ipsum dolor sit amet.' );
            set_theme_mod( 'feminine_shop_cart_icon', 'fas fa-shopping-basket' );           
          
            // slider section start //
            set_theme_mod( 'feminine_shop_slider_small_title', 'LOREM IPSUM DOLOR SIT AMET' );
            set_theme_mod( 'feminine_shop_topbar_btn_link', '#' );
            set_theme_mod( 'feminine_shop_topbar_btn_text', 'EXPLORE NOW' );

            for($feminine_shop_i=1;$feminine_shop_i<=3;$feminine_shop_i++){
               $feminine_shop_slider_title = 'Lorem ipsum dolor sit amet consectetur!';
               $feminine_shop_slider_content = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.';
                  // Create post object
               $my_post = array(
               'post_title'    => wp_strip_all_tags( $feminine_shop_slider_title ),
               'post_content'  => $feminine_shop_slider_content,
               'post_status'   => 'publish',
               'post_type'     => 'page',
               );

               // Insert the post into the database
               $feminine_shop_post_id = wp_insert_post( $my_post );

               if ($feminine_shop_post_id) {
                 // Set the theme mod for the slider page
                set_theme_mod('feminine_shop_slider_page' . $feminine_shop_i, $feminine_shop_post_id);

                $feminine_shop_image_url = get_template_directory_uri().'/assets/images/slider'.$feminine_shop_i.'.png';

                $feminine_shop_image_id = media_sideload_image($feminine_shop_image_url, $feminine_shop_post_id, null, 'id');

                    if (!is_wp_error($feminine_shop_image_id)) {
                        // Set the downloaded image as the post's featured image
                        set_post_thumbnail($feminine_shop_post_id, $feminine_shop_image_id);
                    }
                }
            }

            //About Section 
            set_theme_mod( 'feminine_shop_about_section_title', 'Our Features & Quality Details' );

            $feminine_shop_product_banner_title = 'Lorem ipsum dolor sit amet consectetur!';
            $feminine_shop_product_banner_content = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.';
            // Create post object
            $my_post = array(
            'post_title'    => wp_strip_all_tags( $feminine_shop_product_banner_title ),
            'post_content'  => $feminine_shop_product_banner_content,
            'post_status'   => 'publish',
            'post_type'     => 'page',
            );

            // Insert the post into the database
            $feminine_shop_post_id = wp_insert_post( $my_post );

            if ($feminine_shop_post_id) {
                // Set the theme mod for the slider page
            set_theme_mod('feminine_shop_about_page', $feminine_shop_post_id);
            }

            // products page//           
            $feminine_shop_title_array = array(
                array("Product #1","Product #2","Product #3","Product #3")
            );

            foreach ($feminine_shop_title_array as $feminine_shop_titles) {
                // Loop to create only 3 products
                for ($feminine_shop_i = 0; $feminine_shop_i < 4; $feminine_shop_i++) {
                    // Create product content
                    $feminine_shop_title = $feminine_shop_titles[$feminine_shop_i];
                    $feminine_shop_content = 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.';

                    // Create product post object
                    $feminine_shop_my_post = array(
                        'post_title'    => wp_strip_all_tags($feminine_shop_title),
                        'post_content'  => $feminine_shop_content,
                        'post_status'   => 'publish',
                        'post_type'     => 'product',
                    );
                    set_theme_mod('feminine_shop_products_page', esc_url($feminine_shop_post_id));
                    // Insert the product into the database
                    $feminine_shop_post_id = wp_insert_post($feminine_shop_my_post);

                    if (is_wp_error($feminine_shop_post_id)) {
                        error_log('Error creating product: ' . $feminine_shop_post_id->get_error_message());
                        continue; // Skip to the next product if creation fails
                    }

                    // Add product meta (price, etc.)
                    update_post_meta($feminine_shop_post_id, '_regular_price', '99.00'); // Regular price
                    update_post_meta($feminine_shop_post_id, '_sale_price', '99.00'); // Sale price

                    // Handle the featured image using media_sideload_image
                    $feminine_shop_image_url = get_template_directory_uri() . '/assets/images/product' . ($feminine_shop_i + 1) . '.png';
                    $feminine_shop_image_id = media_sideload_image($feminine_shop_image_url, $feminine_shop_post_id, null, 'id');

                    if (is_wp_error($feminine_shop_image_id)) {
                        error_log('Error downloading image: ' . $feminine_shop_image_id->get_error_message());
                        continue; // Skip to the next product if image download fails
                    }

                    // Assign featured image to product
                    set_post_thumbnail($feminine_shop_post_id, $feminine_shop_image_id);
                }
            }

        
            // Create the 'Products' page if it doesn't exist
            $feminine_shop_page_query = new WP_Query(array(
                'post_type'      => 'page',
                'title'          => 'Products page',
                'post_status'    => 'publish',
                'posts_per_page' => 1
            ));

            if (!$feminine_shop_page_query->have_posts()) {
                $feminine_shop_page_title = 'Products page';
                $productpage = '[products limit="4" columns="4"]';

                // Append the WooCommerce products shortcode to the content
                $feminine_shop_content = '';
                $feminine_shop_content .= do_shortcode($productpage);

                // Create the new page
                $feminine_shop_page = array(
                    'post_type'    => 'page',
                    'post_title'   => $feminine_shop_page_title,
                    'post_content' => $feminine_shop_content,
                    'post_status'  => 'publish',
                    'post_author'  => 1,
                    'post_slug'    => 'products'
                );

                // Insert the page and get its ID
                $feminine_shop_page_id = wp_insert_post($feminine_shop_page);

                // Store the page ID in theme mod
                if (!is_wp_error($feminine_shop_page_id)) {
                    set_theme_mod('feminine_shop_products_page', $feminine_shop_page_id);
                }
            }

            //Copyright Text
            set_theme_mod( 'feminine_shop_footer_text', 'By VWThemes' );

        }
    ?>

	<p><?php esc_html_e('Please back up your website if it’s already live with data. This importer will overwrite your existing settings with the new customizer values for Feminine Shop', 'feminine-shop'); ?></p>
    <form action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.php?page=feminine_shop_guide" method="POST" onsubmit="return validate(this);">
        <?php if (!get_option('feminine_shop_demo_import_completed')) : ?>
            <input class="run-import" type="submit" name="submit" value="<?php esc_attr_e('Run Importer', 'feminine-shop'); ?>" class="button button-primary button-large">
        <?php endif; ?>
        <div id="spinner" style="display:none;">         
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/spinner.png" alt="" />
        </div>
    </form>
    <script type="text/javascript">
        function validate(form) {
            if (confirm("Do you really want to import the theme demo content?")) {
                // Show the spinner
                document.getElementById('spinner').style.display = 'block';
                // Allow the form to be submitted
                return true;
            } 
            else {
                return false;
            }
        }
    </script>
</div>
