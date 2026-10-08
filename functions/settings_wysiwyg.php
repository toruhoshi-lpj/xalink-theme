<?php
/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*

WYSIWYGエディタの設定

*/

/*note: INDEXの表示は、コメントの「 index: 」でハイライト表示してください。*/

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: WYSIWYG エディタ（ TinyMCE ）のスタイルシート*/
if ( is_admin() ) {
	add_editor_style( array( 'css/style.min.css' ) );
}
/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: WYSIWYG エディタ（ TinyMCE ）の body 要素（編集領域）に「 .editor-area 」属性を追加*/
if ( ! function_exists( 'custom_editor_settings' ) && is_admin() ) {
	function custom_editor_settings( $initArray ) {
		$initArray['body_class'] = 'editor-area';
		return $initArray;
	}
}
add_filter( 'tiny_mce_before_init', 'custom_editor_settings' );

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: WYSIWYG エディタ（ TinyMCE ）の メニュー項目制御*/
//if ( ! function_exists( 'custom_editor_menu_settings' ) && is_admin() ) {
//	function custom_editor_menu_settings($init){
//		$init['block_formats'] = '段落=p;';
//		return $init;
//	}
//}
//add_filter( 'tiny_mce_before_init', 'custom_editor_menu_settings' );

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: Auto-p の img 要素のみ p 要素を付与しない*/
if ( ! function_exists( 'remove_p_on_images' ) ) {
	function remove_p_on_images($content){
		return preg_replace('/<p>(\s*)(<img .* \/>)(\s*)<\/p>/iU', '\2', $content);
	}
}
add_filter('the_content', 'remove_p_on_images');

?>
