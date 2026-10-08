<?php
/*
「ホーム お知らせ・カレンダー」セクション
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
*/

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: セクションの基本設定 */
/*note: ファイル名と変数を同じに扱い、この同名でCSS（SASS）も管理します。 */
$id_wrapper = 'home-information';

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: セクションのテンプレート */
div_wrapper( $id_wrapper, 'start' );

?>

<div class="container">
		<h3 class="section-title">お知らせ</h3>
		<ul>
			<?php
			$args = array(
				'post_type' => 'post', /* カスタム投稿名 */
				'posts_per_page' => 5, /* 表示する数 */
			); ?>
			<?php $my_query = new WP_Query( $args ); ?>
			<?php if( $my_query->have_posts() ): ?>
			<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
			<?php
			$termslug = 'category';
			$terms = get_the_terms( $post->ID, $termslug );
			if ( $terms && ! is_wp_error( $terms ) ) :
			$posttermsid = array();
			$postslug = array();
			$postname = array();
			foreach ( $terms as $term ) {
				$posttermsid[] = $term->term_id;
				$postslug[] = $term->slug;
				$postname[] = $term->name;
			}
			$cat_number = end($posttermsid);
			$cat_name = end($postname);
			$cat_slug = end($postslug);
			if ($cat_number % 2 == 0) {
				$post_id = 2;
			} else {
				$post_id = 1;
			}
			?>
			<li>
				<a href="<?php echo esc_url( the_permalink() ); ?>">
					<span class="meta"><time datetime="<?php echo get_the_date('Y-m-d') ?>"><?php the_time('Y.m.d'); ?></time></span>
					<span class="category category-<?php echo $cat_slug; ?>"><?php echo $cat_name; ?></span>
					<span class="title"><?php the_title(); ?></span>
				</a>
			</li>
			<?php endif; ?>
			<?php endwhile; ?>
			<?php else: ?>
				<p class="no-post">現在、弊社からのお知らせはありません。</p>
			<?php endif; ?>
		</ul>
		<?php
		$args = array(
			'post_type' => 'post', /* カスタム投稿名 */
		); ?>
		<?php $my_query = new WP_Query( $args ); ?>
		<?php if( $my_query->have_posts() ): ?>
		<div class="btn-wrapper">
			<a href="<?php echo get_category_link( 1 ); ?>">お知らせ一覧を見る</a>
		</div>
		<?php endif; ?>

</div>

<?php

div_wrapper( $id_wrapper, 'end' );

?>
