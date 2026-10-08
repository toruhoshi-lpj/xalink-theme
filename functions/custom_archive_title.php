<?php
/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*

アーカイブタイトルの修正

*/

/*note: INDEXの表示は、コメントの「 index: 」でハイライト表示してください。*/

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: アーカイブタイトルの修正*/
if ( ! function_exists( 'custom_archive_title' ) ) {
	function custom_archive_title( $title ){
		if ( is_category() ) {
			$title = single_cat_title( '', false );
		} elseif ( is_tag() ) {
			$title = single_tag_title( '', false );
		} elseif ( is_author() ) {
			$title = '<span class="vcard">' . get_the_author() . '</span>' ;
		}
		if ( is_post_type_archive() ) {
			if ( is_year() ) {
				$title = post_type_archive_title( '', false ) . ' ' . sprintf( '年間アーカイブ： %s' , get_the_date( "YYYY年" ) );
			} elseif ( is_month() ) {
				$title = post_type_archive_title( '', false ) . ' ' . sprintf( '月間アーカイブ： %s' , get_the_date( "YYYY年m月" ) );
			} elseif ( is_day() ) {
				$title = post_type_archive_title( '', false ) . ' ' . sprintf( '日間アーカイブ： %s' , get_the_date( "YYYY年m月d日" ) );
			} else {
				$title = post_type_archive_title( '', false );
			}
		} else if ( is_tax() ) {
			$title = single_term_title( '', false );
		} elseif ( is_year() ) {
			$title = '記事 ' . sprintf( '年間アーカイブ： %s' , get_the_date( "YYYY年" ) );
		} elseif ( is_month() ) {
			$title = '記事 ' . sprintf( '月間アーカイブ： %s' , get_the_date( "YYYY年m月" ) );
		} elseif ( is_day() ) {
			$title = '記事 ' . sprintf( '日間アーカイブ： %s' , get_the_date( "YYYY年m月d日" ) );
		}
		return $title;
	}
}
add_filter( 'get_the_archive_title', 'custom_archive_title', 10 );
