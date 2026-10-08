<?php
/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*

カスタムフィールドを検索対象に含めます

*/

/*note: INDEXの表示は、コメントの「 index: 」でハイライト表示してください。*/

/*note: カスタムフィールドを検索対象に含めます。(「-キーワード」のようなNOT検索にも対応します)*/

/*note: WordPress 4.4late で動作します。*/

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: カスタムフィールドを検索対象に含めます。*/
if ( version_compare( $GLOBALS['wp_version'], '4.4', '>' ) ) {
	
	// カスタムフィールドの検索条件を追加
	if ( ! function_exists( 'posts_search_custom_fields' ) ) {
		function posts_search_custom_fields( $orig_search, $query ) {
			if ( $query->is_search() && $query->is_main_query() && ! is_admin() ) {
				// 4.4のWP_Query::parse_search()の処理を流用しています。(検索語の分割処理などはすでにquery_vars上にセット済のため省きます)
				global $wpdb;
				$q = $query->query_vars;
				$n = ! empty( $q['exact'] ) ? '' : '%';
				$searchand = '';

				foreach ( (array)$q['search_terms'] as $term ) {
					$include = '-' !== substr( $term, 0, 1 );
					if ( $include ) {
						$like_op  = 'LIKE';
						$andor_op = 'OR';
					} else {
						$like_op  = 'NOT LIKE';
						$andor_op = 'AND';
						$term	 = substr( $term, 1 );
					}
					$like = $n . $wpdb->esc_like( $term ) . $n;
					// カスタムフィールド用の検索条件を追加します。
					$search .= $wpdb->prepare( "{$searchand}(($wpdb->posts.post_title $like_op %s) $andor_op ($wpdb->posts.post_content $like_op %s) $andor_op (custom.meta_value $like_op %s))", $like, $like, $like );
					$searchand = ' AND ';
				}
				if ( ! empty( $search ) ) {
					$search = " AND ({$search}) ";
					if ( ! is_user_logged_in() )
						$search .= " AND ($wpdb->posts.post_password = '') ";
				}
				return $search;
			}
			else {
				return $orig_search;
			}
		}
	}
	add_filter( 'posts_search', 'posts_search_custom_fields', 10, 2 );

	// カスタムフィールド検索用のJOIN
	if ( ! function_exists( 'posts_join_custom_fields' ) ) {
		function posts_join_custom_fields( $join, $query ) {
			if ( $query->is_search() && $query->is_main_query() && ! is_admin() ) {
				// group_concat()したmeta_valueをJOINすることでレコードの重複を除きつつ検索しやすくします。
				global $wpdb;
				$join .= " INNER JOIN ( ";
				$join .= " SELECT post_id, group_concat( meta_value separator ' ') AS meta_value FROM $wpdb->postmeta ";
				// $join .= " WHERE meta_key IN ( 'test' ) ";
				$join .= " GROUP BY post_id ";
				$join .= " ) AS custom ON ($wpdb->posts.ID = custom.post_id) ";
			}
			return $join;
		}
	}
	add_filter( 'posts_join', 'posts_join_custom_fields', 10, 2 );

}
