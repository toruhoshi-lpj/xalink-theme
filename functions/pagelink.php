<?php
/*
メニューリスト項目生成

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
INDEX

#01 メニューリスト項目生成

*/

/*
┌─────────────────────────────
│ #01 メニューリスト項目生成
│ 
*/
if ( ! function_exists( 'pagelink' ) ) :
	function pagelink( $post_no , $wrapper = true ){
		if( $wrapper ){ echo '<li class="id-' . $post_no . '">'; }
		
		/*note: アクセスページの「東京駅」をリンクから外します。 */
		if( $post_no === 18 ){
			echo '<a href="' . esc_url( get_permalink( $post_no ) ) . '">交通アクセス</a>';
		}else{
			echo '<a href="' . esc_url( get_permalink( $post_no ) ) . '">' . get_the_title( $post_no ) . '</a>';
		}
		if( $wrapper ){ echo '</li>'; }
	}
endif;
