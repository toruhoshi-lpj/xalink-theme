<?php
/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*

機能設定

*/
/*note: INDEXの表示は、コメントの「 index: 」でハイライト表示してください。*/

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: WordPressの設定*/
require get_template_directory() . '/functions/settings_wordpress.php';

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: スタイルシートの設定 */
require get_template_directory() . '/functions/settings_style_sheet.php';

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: スクリプトの設定 */
require get_template_directory() . '/functions/settings_scripts.php';

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: WYSIWYGの設定 */
require get_template_directory() . '/functions/settings_wysiwyg.php';

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: ログイン画面のカスタマイズ*/
require get_template_directory() . '/functions/login.php';

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: ダッシュボードのカスタマイズ*/
require get_template_directory() . '/functions/dashboard.php';

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: コントロールパネルのサイドメニュー*/
require get_template_directory() . '/functions/side_menu.php';

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: アーカイブタイトルの修正*/
require get_template_directory() . '/functions/custom_archive_title.php';

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: Wrapperを生成*/
require get_template_directory() . '/functions/div_wrapper.php';

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: パンくずリスト生成関数（ microdata対応版 ）*/
require get_template_directory() . '/functions/breadcrumb.php';

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: カスタムフィールドを検索対象に含めます。(「-キーワード」のようなNOT検索にも対応します)*/
require get_template_directory() . '/functions/posts_search_custom_fields.php';

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: Plug-in 「 ACF PRO 」のオプションページ有効化*/
require get_template_directory() . '/functions/acf_add_options_page.php';

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: IDよりリンク生成 */
require get_template_directory() . '/functions/pagelink.php';

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: IDよりカテゴリページへのリンク生成 */
require get_template_directory() . '/functions/categorylink.php';

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: 秋山ユアビスのカスタム投稿ページの設定 */
require get_template_directory() . '/functions/custompost.php';

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: カスタム投稿の記事数を取得 */
require get_template_directory() . '/functions/get_number.php';

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: 最上のスラッグを用いたclassを付与する */
add_filter( 'body_class', 'add_page_slug_class_name' );
function add_page_slug_class_name( $classes ) {
	if ( is_page() ) {
		$page = get_post( get_the_ID() );
		$classes[] = $page->post_name;

		$parent_id = $page->post_parent;
		if ( 0 == $parent_id ) {
			$classes[] = get_post($parent_id)->post_name;
		} else {
			$progenitor_id = array_pop( get_ancestors( $page->ID, 'page', 'post_type' ) );
			$classes[] = get_post($progenitor_id)->post_name . '-child';
		}
	}
	return $classes;
}

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: WordPressのバージョン情報を非表示 */
function remove_cssjs_ver2( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver2', 9999 );
add_filter( 'script_loader_src', 'remove_cssjs_ver2', 9999 );

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: 投稿者アーカイブ無効 */
add_filter( 'author_rewrite_rules', '__return_empty_array' );
function disable_author_archive() {
if( $_GET['author'] || preg_match('#/author/.+#', $_SERVER['REQUEST_URI']) ){
wp_redirect( home_url( '/404.php' ) );
exit;
}
}
add_action('init', 'disable_author_archive');

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: ログインユーザー名無効 */
function remove_comment_author_class( $classes ) {
foreach( $classes as $key => $class ) {
if(strstr($class, "comment-author-")) {
unset( $classes[$key] );
}
}
return $classes;
}
add_filter( 'comment_class' , 'remove_comment_author_class' );


/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
function custom_login_logo() {
    echo '<style type="text/css">
        #login h1 a {
            background-image: url(' . get_stylesheet_directory_uri() . '/images/logo_xalink_blue.png) !important;
            background-size: contain !important;
            width: 100% !important;
            height: 80px !important; 
        }
    </style>';
}
add_action('login_enqueue_scripts', 'custom_login_logo');

function xalink_favicon() {
	wp_redirect( get_template_directory_uri() . '/images/favicon.ico' );
	exit;
}
add_action( 'do_faviconico', 'xalink_favicon' );