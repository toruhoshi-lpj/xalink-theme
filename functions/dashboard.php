<?php
/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*

ダッシュボードのカスタマイズ

*/

/*note: INDEXの表示は、コメントの「 index: 」でハイライト表示してください。*/

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: ダッシュボードのウィジェットを削除*/
if ( ! function_exists( 'remove_dashboard_meta' ) && is_admin() ) {
	function remove_dashboard_meta() {
		remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );			//wordpress ニュースとイベント
		remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );		//クイックドラフト
		remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
//		remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );		//概要
		remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');			//アクティビティ
	}
}
add_action( 'admin_init', 'remove_dashboard_meta' );
/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: ダッシュボードの「WordPress へようこそ !（ ウェルカムパネル ）」を非表示に変更*/
if ( ! function_exists( 'hide_welcome_panel' ) && is_admin() ) {
	function hide_welcome_panel() {
		$user_id = get_current_user_id();
			if ( 1 == get_user_meta( $user_id, 'show_welcome_panel', true ) )
		update_user_meta( $user_id, 'show_welcome_panel', 0 );
	}
}
add_action( 'load-index.php', 'hide_welcome_panel' );

?>
