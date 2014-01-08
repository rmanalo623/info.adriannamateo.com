<?php
	global $pc_is_front_page, $pc_home_page, $pc_show_on_front, $pc_page_on_front, $pc_post_id, $pc_template, $wp_registered_sidebars;
?>

	<div id="primary-sidebar" class="sidebar-container <?php echo PC_Utility::content_layout_classes_primary( true ); ?>" role="complementary">

		<?php

		/* If the page is singular we'll have a valid post/page ID to check for custom widget areas. */
		$primary_custom_widget_areas = is_singular() ? get_post_meta( $pc_post_id, '_'.PC_THEME_NAME_SLUG.'_primary_sort', true ) : null;

		/* Show global widget area if it contains widgets and we are NOT on a post/page that has custom widget areas set. */
		if ( is_active_sidebar( 'global-widget-area' ) && empty($primary_custom_widget_areas) ) {
			PC_Utility::render_widget_area( 'global-widget-area' );
		}

		?>

		<div id="links-widget-2" class="widget Links">
			<h3 class="widget-title">Follow Me</h3>
			<ul>
				<li class="youtube video">
					<a href="http://www.youtube.com/watch?v=KgEzofNuaTA" alt="" title="">
						YouTube
					</a>
				</li>
				<li class="facebook">
					<a href="https://www.facebook.com/adriannas.violin" alt="" title="">
						Facebook
					</a>
				</li>
				<li class="soundcloud">
					<a href="https://soundcloud.com/adriannamateo" alt="" title="">
						Soundcloud
					</a>
				</li>
				<li class="twitter">
					<a href="https://twitter.com/AdriannaMateo" alt="" title="">
						Twitter
					</a>
				</li>
				<li class="nulush">
					<a href="http://www.nuelush.com" alt="" title="">
						{NUE|LUSH}
					</a>
				</li>
			</ul>
		</div>



	</div><!-- .sidebar-container -->