<?php
/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*

WordPressの設定

*/

/*note: INDEXの表示は、コメントの「 index: 」でハイライト表示してください。*/

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: テーマの基本設定*/
if ( ! function_exists( 'basic_setup' ) ) {
	function basic_setup() {

		/*フィードリンク（ Wordpress 3.0 以降 ）*/
		add_theme_support( 'automatic-feed-links' );

		/*ドキュメントのタイトル管理（ Wordpress 4.1 以降 ）*/
		add_theme_support( 'title-tag' );

		/*Jetpackのカスタマイザーが更新された部分のみリフレッシュするための宣言 https://github.com/Automattic/jetpack/blob/master/to-test.md */
		add_theme_support( 'customize-selective-refresh-widgets' );

		/*コメントフォーム、検索フォーム、コメントリスト、ギャラリーでHTML5マークアップの使用を許可*/
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', ) );

		/*対応する投稿フォーマットを設定（ Wordpress 3.1 以降 ）*/
//		add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat', ) );

		/*サムネイル*/
		add_theme_support( 'post-thumbnails' ); // 投稿サムネイル対応の有効化
		set_post_thumbnail_size( 1200, 9999 ); // 投稿サムネイルのサイズ設定

		/*新しいカスタムメニューエディター （ Wordpress 3.0 以降 ） wp_nav_menu()*/
		register_nav_menus( array( 'grobal' => 'Grobal Menu', 'social' => 'Social Links', ) );

	}
}
add_action( 'after_setup_theme', 'basic_setup' );

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: WordPressのバージョン出力を削除*/
remove_action('wp_head', 'wp_generator');

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: Indexへのリンクを削除*/
remove_action('wp_head', 'index_rel_link');

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: 前の記事・次の記事へのリンクを削除 */
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: 正規URLを削除*/
remove_action('wp_head', 'rel_canonical');

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: 短縮URLを削除*/
remove_action('wp_head', 'wp_shortlink_wp_head');

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: 分割ページへのリンクを削除*/
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: RSSフィードを削除*/
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: 外部ツール連携：外部のブログ投稿ツールを使っている場合は削除しない。*/
remove_action('wp_head', 'rsd_link');// Really Simple Discovery
remove_action('wp_head', 'wlwmanifest_link');// Windows Live Writer

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: Embed（ WordPress 4.4late ）を削除*/
remove_action('wp_head','rest_output_link_wp_head');// Head 内の REST API のエンドポイント
remove_action('wp_head','wp_oembed_add_discovery_links');// JSON と XML
remove_action('wp_head','wp_oembed_add_host_js');// oEmbed スクリプト
remove_action('template_redirect', 'rest_output_link_header', 11 );// リクエストヘッダーの REST API のエンドポイント

?>
