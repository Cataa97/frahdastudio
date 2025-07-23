<?php
//about theme info
add_action( 'admin_menu', 'feminine_shop_gettingstarted' );
function feminine_shop_gettingstarted() {
	add_theme_page( esc_html__('About Feminine Shop', 'feminine-shop'), esc_html__('Theme Demo Import', 'feminine-shop'), 'edit_theme_options', 'feminine_shop_guide', 'feminine_shop_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function feminine_shop_admin_theme_style() {
	wp_enqueue_style('feminine-shop-custom-admin-style', get_template_directory_uri() . '/inc/getstart/getstart.css');
	wp_enqueue_script('feminine-shop-tabs', get_template_directory_uri() . '/inc/getstart/js/tab.js');
}
add_action('admin_enqueue_scripts', 'feminine_shop_admin_theme_style');

//guidline for about theme
function feminine_shop_mostrar_guide() { 
	//custom function about theme customizer
	$feminine_shop_return = add_query_arg( array()) ;
	$feminine_shop_theme = wp_get_theme( 'feminine-shop' );
?>

<div class="wrapper-info">
    <div class="col-left  sshot-section">
    	<h2><?php esc_html_e( 'Welcome to Feminine Shop', 'feminine-shop' ); ?> <span class="version"><?php esc_html_e( 'Version', 'feminine-shop' ); ?>: <?php echo esc_html($feminine_shop_theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','feminine-shop'); ?></p>
    </div>
    <div class="col-right coupen-section">
		<div class="logo-section">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" alt="" />
		</div>
		<div class="logo-right">			
			<div class="update-now">
				<div class="theme-info">
					<div class="theme-info-left">
						<h2><?php esc_html_e('TRY PREMIUM','feminine-shop'); ?></h2>
						<h4><?php esc_html_e('FEMININE SHOP THEME','feminine-shop'); ?></h4>
					</div>	
					<div class="theme-info-right"></div>
				</div>	
				<div class="dicount-row">
					<div class="disc-sec">	
						<h5 class="disc-text"><?php esc_html_e('GET THE FLAT DISCOUNT OF','feminine-shop'); ?></h5>
						<h1 class="disc-per"><?php esc_html_e('20%','feminine-shop'); ?></h1>	
					</div>
					<div class="coupen-info">
						<h5 class="coupen-code"><?php esc_html_e('"VWPRO20"','feminine-shop'); ?></h5>
						<h5 class="coupen-text"><?php esc_html_e('USE COUPON CODE','feminine-shop'); ?></h5>
						<div class="info-link">						
							<a href="<?php echo esc_url( FEMININE_SHOP_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'UPGRADE TO PRO', 'feminine-shop' ); ?></a>
						</div>	
					</div>	
				</div>				
			</div>
		</div> 	
    </div>

    <div class="tab-sec">
    	<div class="tab">
    		<button class="tablinks" onclick="feminine_shop_open_tab(event, 'theme_offer')"><?php esc_html_e( 'Demo Importer', 'feminine-shop' ); ?></button>
    		<button class="tablinks" onclick="feminine_shop_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Setup With Customizer', 'feminine-shop' ); ?></button>
    		
			<button class="tablinks" onclick="feminine_shop_open_tab(event, 'feminine_pro')"><?php esc_html_e( 'Get Premium', 'feminine-shop' ); ?></button>
		  	<button class="tablinks" onclick="feminine_shop_open_tab(event, 'free_pro')"><?php esc_html_e( 'Free VS Premium', 'feminine-shop' ); ?></button>
		  	<button class="tablinks" onclick="feminine_shop_open_tab(event, 'get_bundle')"><?php esc_html_e( 'Get 250+ Themes Bundle at $99', 'feminine-shop' ); ?></button>
		</div>

		<?php 
			$feminine_shop_plugin_custom_css = '';
			if(class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$feminine_shop_plugin_custom_css ='display: block';
			}
		?>

		<div id="theme_offer" class="tabcontent open">
			<div class="demo-content">
				<h3><?php esc_html_e( 'Click the below run importer button to import demo content', 'feminine-shop' ); ?></h3>
				<?php 
				/* Get Started. */ 
				require get_parent_theme_file_path( '/inc/getstart/demo-content.php' );
			 	?>
			</div> 	
		</div>

		<div id="lite_theme" class="tabcontent">
			<?php  if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = Feminine_Shop_Plugin_Activation_Settings::get_instance();
				$feminine_shop_actions = $plugin_ins->recommended_actions;
				?>
				<div class="feminine-shop-recommended-plugins">
				    <div class="feminine-shop-action-list">
				        <?php if ($feminine_shop_actions): foreach ($feminine_shop_actions as $key => $feminine_shop_actionValue): ?>
				                <div class="feminine-shop-action" id="<?php echo esc_attr($feminine_shop_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($feminine_shop_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($feminine_shop_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($feminine_shop_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" get-start-tab-id="lite-theme-tab" href="javascript:void(0);"><?php esc_html_e('Skip','feminine-shop'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="lite-theme-tab" style="<?php echo esc_attr($feminine_shop_plugin_custom_css); ?>">
				<h3><?php esc_html_e( 'Lite Theme Information', 'feminine-shop' ); ?></h3>
				<hr class="h3hr">
				<p><?php esc_html_e('Feminine Shop is a beautiful WordPress theme for female-centric websites. It has a nice elegant feminist feel to it which makes it suitable for any female-centric shops and businesses like wedding planner, ecommerce, storefront, girly, parenting, fashion tips,etc. The stunning layout of this responsive theme creates an aura on the screen and enables your website to adjust itself to any screen size giving a great shopping experience to users that are accessing your website through different devices. You can use this theme to build beautiful blog or magazine related to photography, nature, art and design, Social media influencer, Arts & Handcrafts, food and many such areas. It is a multipurpose theme that is great for creating feminine fashion blogs as well. With its minimal design, all the attention is focused on the important details depicted on your site. The theme is perfect for feminine magazine, girlish blog, coaching, women’s collection, Googles, baby care products, designed for female, photographers, Graphic designer, Skincare & beauty products, Virtual assistance, Event planning, personal portfolio,Fashion, Boutique, Retail, E-commerce, Beauty, weddings store, art and design, lifestyle. Its Banner includes Call To Action (CTA) buttons that will not only guide the visitors but also play a key role in enhancing the conversion rates of your site. To make your website look absolutely professional, voguish & dazzling it has all the things included. Easy customization options make it a piece of cake for a novice to carve a website without having to write a single code. This modern theme consists of secure and clean codes to ensure smooth and clutter-free performance. You can be sure that your website will get noticed as it features in the top SERP ranks thanks to the theme’s SEO friendly design.','feminine-shop'); ?></p>			  	
			  	<div class="col-left-inner">
			  		<h4><?php esc_html_e( 'Theme Documentation', 'feminine-shop' ); ?></h4>
					<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'feminine-shop' ); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( FEMININE_SHOP_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'feminine-shop' ); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Theme Customizer', 'feminine-shop'); ?></h4>
					<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'feminine-shop'); ?></p>
					<div class="info-link">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'feminine-shop'); ?></a>
					</div>
					<hr>				
					<h4><?php esc_html_e('Having Trouble, Need Support?', 'feminine-shop'); ?></h4>
					<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'feminine-shop'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( FEMININE_SHOP_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'feminine-shop'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Reviews & Testimonials', 'feminine-shop'); ?></h4>
					<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'feminine-shop'); ?>  </p>
					<div class="info-link">
						<a href="<?php echo esc_url( FEMININE_SHOP_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'feminine-shop'); ?></a>
					</div>
					<div class="link-customizer">
						<h3><?php esc_html_e( 'Link to customizer', 'feminine-shop' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','feminine-shop'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-slides"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=feminine_shop_slidersettings') ); ?>" target="_blank"><?php esc_html_e('Slider Settings','feminine-shop'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=feminine_shop_top_header') ); ?>" target="_blank"><?php esc_html_e('Top Header Settings','feminine-shop'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-editor-table"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=feminine_shop_about_section') ); ?>" target="_blank"><?php esc_html_e('About Section','feminine-shop'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','feminine-shop'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','feminine-shop'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=feminine_shop_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','feminine-shop'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-admin-customizer"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=feminine_shop_global_typography') ); ?>" target="_blank"><?php esc_html_e('Typography','feminine-shop'); ?></a>
								</div> 
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=feminine_shop_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','feminine-shop'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=feminine_shop_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','feminine-shop'); ?></a>
								</div>
							</div>
						</div>
				</div>
			  	</div>
				<div class="col-right-inner">
					<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','feminine-shop'); ?></h3>
				  	<hr class="h3hr">
					<p><?php esc_html_e('Follow these instructions to setup Home page.','feminine-shop'); ?></p>
                  	<p><span class="strong"><?php esc_html_e('1. Create a new page :','feminine-shop'); ?></span><?php esc_html_e(' Go to ','feminine-shop'); ?>
					  	<b><?php esc_html_e(' Dashboard >> Pages >> Add New Page','feminine-shop'); ?></b></p>
                  	<p><?php esc_html_e('Name it as "Home" then select the template "Custom Home Page".','feminine-shop'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/home-page-template.png" alt="" />
                  	<p><span class="strong"><?php esc_html_e('2. Set the front page:','feminine-shop'); ?></span><?php esc_html_e(' Go to ','feminine-shop'); ?>
					  	<b><?php esc_html_e(' Settings >> Reading ','feminine-shop'); ?></b></p>
				  	<p><?php esc_html_e('Select the option of Static Page, now select the page you created to be the homepage, while another page to be your default page.','feminine-shop'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/set-front-page.png" alt="" />
                  	<p><?php esc_html_e(' Once you are done with setup, then follow the','feminine-shop'); ?> <a class="doc-links" href="<?php echo esc_url( FEMININE_SHOP_FREE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','feminine-shop'); ?></a></p>
			  	</div>
			</div>
		</div>


		<div id="feminine_pro" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'feminine-shop' ); ?></h3>
			<hr class="h3hr">
		    <div class="col-left-pro">
		    	<p><?php esc_html_e('Feminine WordPress Theme is a gorgeous female-oriented theme for business, blogs, and other endeavors. It is a smart choice to be made by females to get their business online. Though it is a female-centric theme, it doesnt limit its use to female-oriented websites. Even marketing firms and eCommerce businesses can use it to maximize their sales because a female-centric website is known to work well for fashion stores, eCommerce and marketing related websites as visitors find it alluring and they keep coming back on the site. WP Feminine WordPress Theme comes with an attractive layout that uses soft colors and minimalist approach. It is made to give a seamless performance on various popular web browsers. For ensuring that users and end-users get a flawless experience, it has been provided with a clean codebase. The smooth effects and navigation make it even more loved by the audience.','feminine-shop'); ?></p>
		    </div>
		    <div class="col-right-pro">
		    	<div class="pro-links">
			    	<a href="<?php echo esc_url( FEMININE_SHOP_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'feminine-shop'); ?></a>
					<a href="<?php echo esc_url( FEMININE_SHOP_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'feminine-shop'); ?></a>
					<a href="<?php echo esc_url( FEMININE_SHOP_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'feminine-shop'); ?></a>
					<a href="<?php echo esc_url( FEMININE_SHOP_THEME_BUNDLE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get 250+ Themes Bundle at $99', 'feminine-shop'); ?></a>
				</div>
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/responsive.png" alt="" />
		    </div>
		</div>

		<div id="free_pro" class="tabcontent">
		  	<div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'feminine-shop' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'feminine-shop'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'feminine-shop'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Slider Settings', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Number of Slides', 'feminine-shop'); ?></td>
								<td class="table-img"><?php esc_html_e('4', 'feminine-shop'); ?></td>
								<td class="table-img"><?php esc_html_e('Unlimited', 'feminine-shop'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'feminine-shop'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'feminine-shop'); ?></td>
								<td class="table-img"><?php esc_html_e('6', 'feminine-shop'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'feminine-shop'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'feminine-shop'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'feminine-shop'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Theme sections', 'feminine-shop'); ?></td>
								<td class="table-img"><?php esc_html_e('2', 'feminine-shop'); ?></td>
								<td class="table-img"><?php esc_html_e('12', 'feminine-shop'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Contact us Page Template', 'feminine-shop'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'feminine-shop'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Blog Templates & Layout', 'feminine-shop'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'feminine-shop'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Page Templates & Layout', 'feminine-shop'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('2(Left/Right Sidebar)', 'feminine-shop'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Color Pallete For Particular Sections', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Global Color Option', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Reordering', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Demo Importer', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Allow To Set Site Title, Tagline, Logo', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Enable Disable Options On All Sections, Logo', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Full Documentation', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Latest WordPress Compatibility', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Woo-Commerce Compatibility', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support 3rd Party Plugins', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Secure and Optimized Code', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Exclusive Functionalities', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Enable / Disable', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Google Font Choices', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Gallery', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Simple & Mega Menu Option', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Shortcodes', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Premium Membership', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Budget Friendly Value', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Priority Error Fixing', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Feature Addition', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('All Access Theme Pass', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>

							<tr>
								<td><?php esc_html_e('Advanced Slider', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Exclusive Product, Contact Blog & 404 pages', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Gutenberg Page Builder Compatible', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Preloader', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Mega Menu', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Cutom Instagram layout', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Product Compare Pop-up builder', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Product wishlist', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Product Gallery Slider', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Product Share Option', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Product Swatchs & Variations', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Anouncement Bar', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>

							<tr>
								<td><?php esc_html_e('Seamless Customer Support', 'feminine-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( FEMININE_SHOP_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'feminine-shop'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="get_bundle" class="tabcontent">		  	
		   <div class="col-left-pro">
		   	<h3><?php esc_html_e( 'WP Theme Bundle', 'feminine-shop' ); ?></h3>
		    	<p><?php esc_html_e('Enhance your website effortlessly with our WP Theme Bundle. Get access to 250+ premium WordPress themes and 5+ powerful plugins, all designed to meet diverse business needs. Enjoy seamless integration with any plugins, ultimate customization flexibility, and regular updates to keep your site current and secure. Plus, benefit from our dedicated customer support, ensuring a smooth and professional web experience.','feminine-shop'); ?></p>
		    	<div class="feature">
		    		<h4><?php esc_html_e( 'Features:', 'feminine-shop' ); ?></h4>
		    		<p><?php esc_html_e('250+ Premium Themes & 5+ Plugins.', 'feminine-shop'); ?></p>
		    		<p><?php esc_html_e('Seamless Integration.', 'feminine-shop'); ?></p>
		    		<p><?php esc_html_e('Customization Flexibility.', 'feminine-shop'); ?></p>
		    		<p><?php esc_html_e('Regular Updates.', 'feminine-shop'); ?></p>
		    		<p><?php esc_html_e('Dedicated Support.', 'feminine-shop'); ?></p>
		    	</div>
		    	<p><?php esc_html_e('Upgrade now and give your website the professional edge it deserves, all at an unbeatable price of $99!', 'feminine-shop'); ?></p>
		    	<div class="pro-links">
					<a href="<?php echo esc_url( FEMININE_SHOP_THEME_BUNDLE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'feminine-shop'); ?></a>
					<a href="<?php echo esc_url( FEMININE_SHOP_THEME_BUNDLE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'feminine-shop'); ?></a>
				</div>
		   </div>
		   <div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/bundle.png" alt="" />
		   </div>		    
		</div>

	</div>
</div>

<?php } ?>