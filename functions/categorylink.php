<?php
/*
メニューリスト項目生成（カテゴリ）

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
INDEX

#01 メニューリスト項目生成

*/

/*
┌─────────────────────────────
│ #01 メニューリスト項目生成
│ 
*/
if ( ! function_exists( 'categorylink' ) ) :
	function categorylink( $cat_no , $wrapper = true ){
		$cat_no = (int) $cat_no;
		$category = get_term( $cat_no );
		if( $wrapper ){ echo '<li class="category-' . $cat_no . '">'; }
		echo '<a href="' . esc_url( get_term_link( $cat_no ) ) . '">' . $category->name . '</a>';
		if( $wrapper ){ echo '</li>'; }
	}
endif;
