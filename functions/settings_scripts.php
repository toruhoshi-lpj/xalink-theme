<?php
/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*

スクリプトの設定

*/

/*note: INDEXの表示は、コメントの「 index: 」でハイライト表示してください。*/

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: body_first： body要素の最初の要素を追加するために作成*/
if ( ! function_exists( 'body_first' ) ) {
	function body_first() {
		do_action('body_first');
	}
}

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: テーマのスクリプト*/
if ( ! function_exists( 'custom_scripts' ) ) {
	function custom_scripts() {
		wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/js/basic.min.js', array( 'jquery' ) );
	}
}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: Google CDN より jQuery を読み込みに変更*/
if ( ! function_exists( 'google_jquery' ) ) {
	function google_jquery() {
		if ( !is_admin() ) {
			wp_deregister_script('jquery'); // 同梱のJQueryを読み込ませない
//			wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', array(),  NULL,false); //Google CDNのJQueryの登録
			wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(),  NULL,false);
			wp_enqueue_script('jquery'); //登録したJQueryをフックさせる
		}
	}
}
add_action( 'init', 'google_jquery' );

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: Google Tag Manager*/
if ( ! function_exists( 'google_tag_manager_head' ) ) {
	function google_tag_manager_head() { ?>
<!-- Google Tag Manager -->
<?php
	}
}
add_action( 'wp_head', 'google_tag_manager_head' );
if ( ! function_exists( 'google_tag_manager_body' ) ) {
	function google_tag_manager_body() { ?>
<!-- Google Tag Manager (noscript) -->
<?php
	}
}
add_action( 'body_first', 'google_tag_manager_body' );

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: slickスライダーのスクリプト*/
if ( ! function_exists( 'slick_scripts' ) ) {
	function slick_scripts() {
		wp_enqueue_script( 'slick-script', get_template_directory_uri() . '/js/slick.min.js', array( 'jquery' ) );
	}
}
add_action( 'wp_enqueue_scripts', 'slick_scripts' );

?>
