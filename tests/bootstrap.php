<?php
/**
 * LifterLMS Add-On Testing Bootstrap
 *
 * @package LifterLMS_Blocks/Tests
 * @since   1.0.0
 * @version 1.2.0
 */

require_once './vendor/lifterlms/lifterlms-tests/bootstrap.php';

class LLMS_Blocks_Tests_Bootstrap extends LLMS_Tests_Bootstrap {

	/**
	 * __FILE__ reference, should be defined in the extending class
	 *
	 * @var [type]
	 */
	public $file = __FILE__;

	/**
	 * Name of the testing suite
	 *
	 * @var string
	 */
	public $suite_name = 'LifterLMS Blocks';

	/**
	 * Main PHP File for the plugin
	 *
	 * @var string
	 */
	public $plugin_main = 'lifterlms-blocks.php';

	/**
	 * Load the plugin
	 *
	 * @return  void
	 * @since   1.2.0
	 * @version 1.2.0
	 */
	public function load() {

		if ( $this->plugin_main ) {
			require_once( $this->plugin_dir . '/' . $this->plugin_main );
		}

		if ( $this->use_core ) {
			define( 'LLMS_USE_PHP_SESSIONS', true );
			define( 'LLMS_PLUGIN_DIR', WP_PLUGIN_DIR . '/lifterlms/' );
			$this->load_plugin( 'lifterlms', 'lifterlms.php' );
		}

	}

}
return new LLMS_Blocks_Tests_Bootstrap();
