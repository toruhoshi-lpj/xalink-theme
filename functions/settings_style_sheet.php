<?php
/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*

テーマのスタイルシート

*/

/*note: INDEXの表示は、コメントの「 index: 」でハイライト表示してください。*/

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: テーマのスタイルシート*/
if ( ! function_exists( 'custom_css' ) ) {
	function custom_css() {
		wp_enqueue_style( 'custom_css', get_template_directory_uri() . '/css/style.css?2109' );
		wp_enqueue_style( 'hover_css', get_template_directory_uri() . '/css/hover.css' );
	}
}
add_action( 'wp_enqueue_scripts', 'custom_css' );

?>
