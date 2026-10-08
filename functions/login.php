<?php
/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*

ログイン画面のカスタマイズ

*/

/*note: INDEXの表示は、コメントの「 index: 」でハイライト表示してください。*/
/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: ログイン画面のスタイルシート*/
if ( ! function_exists( 'custom_login' ) ) {
	function custom_login() { ?>
<style>.login {background: #f1f1f1;} .login #backtoblog a, .login #nav a {color: #444 !important;}.login #backtoblog a:hover, .login #nav a:hover, .login h1 a:hover {color: #00a0d2 !important;}.login #login h1 a {width: 286px;height: 42px;background: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png) no-repeat center center;background-size:contain;}</style>
<?php
	}
}
add_action( 'login_enqueue_scripts', 'custom_login' );

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: ログイン画面のロゴのリンク先*/
if ( ! function_exists( 'custom_login_logo_url' ) ) {
	function custom_login_logo_url() {
		return home_url( '/' );
	}
}
add_filter( 'login_headerurl', 'custom_login_logo_url' );

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: ログイン画面のロゴのタイトル名*/
if ( ! function_exists( 'custom_login_logo_title' ) ) {
	function custom_login_logo_title() {
		return get_option( 'blogname' );
	}
}
add_filter( 'login_headertitle', 'custom_login_logo_title' );

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: ログイン画面のエラーコメント*/
if ( ! function_exists( 'custom_login_errors' ) ) {
	function custom_login_errors() {
		return "<strong>エラー:</strong> ログインできませんでした";
	}
}
add_filter( 'login_errors', 'custom_login_errors' );
?>
