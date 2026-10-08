<?php
/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*

パンくずリスト生成関数（ microdata対応版 ）

*/

/*note: INDEXの表示は、コメントの「 index: 」でハイライト表示してください。*/

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: パンくずリスト生成関数（ microdata対応版 ）*/
if ( ! function_exists( 'breadcrumb' ) ) :
	function breadcrumb(){
		global $post;
		$str ='';
		$contents_no = 1;
		if( ! is_admin() ){

			$str.= '<ol itemscope itemtype="http://schema.org/BreadcrumbList">';
			$str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'. home_url() .'" itemprop="item"><span itemprop="name">HOME</span></a><meta itemprop="position" content="' . $contents_no . '" /></li>';
			$contents_no++;
			if( ! is_home() ){
				if( is_category() ) {
					$cat = get_queried_object();
					if($cat -> parent != 0){
						$ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
						foreach($ancestors as $ancestor){
							$str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'. get_category_link($ancestor) .'" itemprop="item"><span itemprop="name"> '. get_cat_name($ancestor) .'</span></a><meta itemprop="position" content="' . $contents_no . '" /></li>';
							$contents_no++;
						}
					}
					$str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'. get_category_link($cat -> term_id). '" itemprop="item"><span itemprop="name"> '. $cat-> cat_name . '</span></a><meta itemprop="position" content="' . $contents_no . '" /></li>';
				} elseif( is_tax() ) {
					$cat = get_queried_object();
					if($cat -> parent != 0){
						$ancestors = array_reverse(get_ancestors( $cat -> term_ID, 'blog_category' ));
						foreach($ancestors as $ancestor){
							$str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'. get_category_link($ancestor) .'" itemprop="item"><span itemprop="name"> '. get_cat_name($ancestor) .'</span></a><meta itemprop="position" content="' . $contents_no . '" /></li>';
							$contents_no++;
						}
					}
					$str.='<li> '. $cat-> name . '</li>';
				} elseif( is_page() ) {
					if($post -> post_parent != 0 ){
						$ancestors = array_reverse(get_post_ancestors( $post->ID ));
						foreach($ancestors as $ancestor){
							$str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'. get_permalink($ancestor).'" itemprop="item"><span itemprop="name"> '. get_the_title($ancestor) .'</span></a><meta itemprop="position" content="' . $contents_no . '" /></li>';
							$contents_no++;
						}
					}
					$str.='<li>'. wp_title('', false) .'</li>';
				} elseif( is_single() ) {

					$post_type = get_post_type( $post->ID );
					if ( $post_type == 'post' ) {
						$categories = get_the_category($post->ID);
						$cat = $categories[0];
						if($cat -> parent != 0){
							$ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
							foreach($ancestors as $ancestor){
								$str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'. get_category_link($ancestor).'" itemprop="item"><span itemprop="name"> '. get_cat_name($ancestor). '</span></a><meta itemprop="position" content="' . $contents_no . '" /></li>';
								$contents_no++;
							}
						}
						$str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'. get_category_link($cat -> term_id). '" itemprop="item"><span itemprop="name"> '. $cat-> cat_name . '</span></a><meta itemprop="position" content="' . $contents_no . '" /></li>';
					} elseif ( $post_type == 'blog' ) {
						$terms = get_the_terms( $post->ID,'blog_category');
						foreach( $terms as $term ) {
							$str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'. get_term_link($term->slug, 'blog_category').'" itemprop="item"><span itemprop="name"> '. $term->name . '</span></a><meta itemprop="position" content="' . $contents_no . '" /></li>';
							$contents_no++;
						}
					} else {
						$post_type_object = get_post_type_object( $post->post_type );
						if ( $post_type_object->has_archive !== false ) {
							$str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'. get_post_type_archive_link($post_type).'" itemprop="item"><span itemprop="name"> '. $post_type_object->labels->name . '</span></a><meta itemprop="position" content="' . $contents_no . '" /></li>';
							$contents_no++;
						}
					}
					$str.='<li>'. wp_title('', false) .'</li>';
				} elseif ( is_search() ) {
					$str.='<li>“ '. esc_attr(get_search_query()) .' ” の検索結果</li>';
				} elseif ( is_404() ) {
					$str.='<li>ページが見つかりませんでした</li>';
				} else {
					$str.='<li>'. wp_title('', false) .'</li>';
				}
			}
			$str.='</ol>';
		}
		echo $str;
	}
endif;
