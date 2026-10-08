<?php
/*
共通サイドバー
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
*/
/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: セクションの基本設定 */
/*note: ファイル名と変数を同じに扱い、この同名でCSS（SASS）も管理します。 */
$id_wrapper = 'sidebar';
/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: セクションのテンプレート */
div_wrapper( $id_wrapper, 'start' );
?>
<h3>カテゴリー</h3>
<div class="category_name">
	<?php if ( is_post_type_archive('post') || is_singular('post') || get_post_type() === 'post') : ?>
	<ul>
		<?php
		wp_list_categories(array(
			'title_li' =>'',  //デフォルトで出力されるタイトルを非表示
		));
		?>
	</ul>
	<?php endif; ?>
	<?php if ( is_post_type_archive('blog') || is_singular('blog') || get_post_type() === 'blog') : ?>
	<ul>
		<?php
		wp_list_categories(array(
			'title_li' =>'',  //デフォルトで出力されるタイトルを非表示
			'taxonomy' => 'blog_category',
		));
		?>
	</ul>
	<?php endif; ?>
</div>
<!-- <h3>アーカイブ</h3>
<div class="category_name">
	<?php if ( is_post_type_archive('post') || is_singular('post') || get_post_type() === 'post') : ?>
	<ul>
		<?php
		wp_get_archives(array(
			'title_li' =>'',  //デフォルトで出力されるタイトルを非表示
		));
		?>
	</ul>
	<?php endif; ?>
	<?php if ( is_post_type_archive('blog') || is_singular('blog') || get_post_type() === 'blog') : ?>
	<ul>
		<?php
		wp_get_archives(
			'type=monthly&post_type=blog&limit=12');
		?>
	</ul>
	<?php endif; ?>
</div> -->
<?php
div_wrapper( $id_wrapper, 'end' );
?>
