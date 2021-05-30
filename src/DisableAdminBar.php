<?php

namespace Mytory\DisableAdminBar;

/**
 * Mytory Board의 확장팩 성격의 좋아요 모듈.
 * Class MytoryLike
 */
class DisableAdminBar {
	public function __construct() {
		add_action( 'after_setup_theme', [ $this, 'disable' ] );
		add_action( 'wp_enqueue_scripts', function () {
			wp_enqueue_style( 'admin-bar' );
		} );

	}

	public function disable() {
		show_admin_bar( false );
	}
}
