<?php
/**
 * Load API functions, register scripts and actions, etc.
 *
 * @package gutenberg
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( 'Silence is golden.' );
}

/**
 * Checks whether the Gutenberg experiment is enabled.
 *
 * @since 6.7.0
 *
 * @param string $name The name of the experiment.
 *
 * @return bool True when the experiment is enabled.
 */
function gutenberg_is_experiment_enabled( $name ) {
	$experiments = get_option( 'gutenberg-experiments' );
	return ! empty( $experiments[ $name ] );
}

// These files only need to be loaded if within a rest server instance
// which this class will exist if that is the case.
if ( class_exists( 'WP_REST_Controller' ) ) {
	/**
	* Start: Include for phase 2
	*/
	if ( ! class_exists( 'WP_REST_Sidebars_Controller' ) ) {
		require_once __DIR__ . '/class-wp-rest-sidebars-controller.php';
	}
	if ( ! class_exists( 'WP_REST_Widget_Types_Controller' ) ) {
		require_once __DIR__ . '/class-wp-rest-widget-types-controller.php';
	}
	if ( ! class_exists( 'WP_REST_Widgets_Controller' ) ) {
		require_once __DIR__ . '/class-wp-rest-widgets-controller.php';
	}
	if ( ! class_exists( 'WP_REST_Block_Directory_Controller' ) ) {
		require __DIR__ . '/class-wp-rest-block-directory-controller.php';
	}
	if ( ! class_exists( 'WP_REST_Block_Types_Controller' ) ) {
		require __DIR__ . '/class-wp-rest-block-types-controller.php';
	}
	if ( ! class_exists( 'WP_REST_Menus_Controller' ) ) {
		require_once __DIR__ . '/class-wp-rest-menus-controller.php';
	}
	if ( ! class_exists( 'WP_REST_Menu_Items_Controller' ) ) {
		require_once __DIR__ . '/class-wp-rest-menu-items-controller.php';
	}
	if ( ! class_exists( 'WP_REST_Menu_Locations_Controller' ) ) {
		require_once __DIR__ . '/class-wp-rest-menu-locations-controller.php';
	}
	if ( ! class_exists( 'WP_Rest_Customizer_Nonces' ) ) {
		require_once __DIR__ . '/class-wp-rest-customizer-nonces.php';
	}
	if ( ! class_exists( 'WP_REST_Image_Editor_Controller' ) ) {
		require __DIR__ . '/class-wp-rest-image-editor-controller.php';
	}
	if ( ! class_exists( 'WP_REST_Plugins_Controller' ) ) {
		require_once __DIR__ . '/class-wp-rest-plugins-controller.php';
	}
	if ( ! class_exists( 'WP_REST_Post_Format_Search_Handler' ) ) {
		require_once __DIR__ . '/class-wp-rest-post-format-search-handler.php';
	}
	if ( ! class_exists( 'WP_REST_Term_Search_Handler' ) ) {
		require_once __DIR__ . '/class-wp-rest-term-search-handler.php';
	}
	if ( ! class_exists( 'WP_REST_Batch_Controller' ) ) {
		require_once __DIR__ . '/class-wp-rest-batch-controller.php';
	}
	/**
	* End: Include for phase 2
	*/

	require __DIR__ . '/rest-api.php';
}

if ( ! class_exists( 'WP_Block_Patterns_Registry' ) ) {
	require __DIR__ . '/class-wp-block-patterns-registry.php';
}

if ( ! class_exists( 'WP_Block_Pattern_Categories_Registry' ) ) {
	require __DIR__ . '/class-wp-block-pattern-categories-registry.php';
}

if ( ! class_exists( 'WP_Block' ) ) {
	require __DIR__ . '/class-wp-block.php';
}

if ( ! class_exists( 'WP_Block_List' ) ) {
	require __DIR__ . '/class-wp-block-list.php';
}

if ( ! class_exists( 'WP_Widget_Block' ) ) {
	require_once __DIR__ . '/class-wp-widget-block.php';
}

require_once __DIR__ . '/widgets-page.php';

require __DIR__ . '/compat.php';
require __DIR__ . '/utils.php';

require __DIR__ . '/full-site-editing.php';
require __DIR__ . '/templates-sync.php';
require __DIR__ . '/templates.php';
require __DIR__ . '/template-parts.php';
require __DIR__ . '/template-loader.php';
require __DIR__ . '/edit-site-page.php';
require __DIR__ . '/edit-site-export.php';

require __DIR__ . '/block-patterns.php';
require __DIR__ . '/blocks.php';
require __DIR__ . '/client-assets.php';
require __DIR__ . '/block-directory.php';
require __DIR__ . '/demo.php';
require __DIR__ . '/widgets.php';
require __DIR__ . '/navigation.php';
require __DIR__ . '/navigation-page.php';
require __DIR__ . '/experiments-page.php';
require __DIR__ . '/global-styles.php';

if ( ! class_exists( 'WP_Block_Supports' ) ) {
	require_once __DIR__ . '/class-wp-block-supports.php';
}
require __DIR__ . '/block-supports/generated-classname.php';
require __DIR__ . '/block-supports/colors.php';
require __DIR__ . '/block-supports/align.php';
require __DIR__ . '/block-supports/typography.php';
require __DIR__ . '/block-supports/custom-classname.php';
