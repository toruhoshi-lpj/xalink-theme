<?php
/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*

Plug-in「 ACF PRO 」のオプションページ有効化

*/

/*note: INDEXの表示は、コメントの「 index: 」でハイライト表示してください。*/
/*note: Plug-in「 ACF PRO (Personal $25, Developer $100AUD) 」 https://www.advancedcustomfields.com/pro/ */

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: 管理画面にACF Proのオプションページを有効化 */
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> '共通設定ページ',
		'menu_title'	=> '共通設定',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

?>