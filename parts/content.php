<?php
/*
汎用コンテント
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
*/
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'wysiwyg' ); ?> role="main">
	<?php if ( is_single() ): ?>
	<div class="entry-header">
		<header>
			<?php the_title( '<h1>', '</h1>' ); ?>
			<?php
			if ( is_singular( 'blog' ) ) {
				$termslug = 'blog_category';
			} else {
				$termslug = 'category';
			}
			$terms = get_the_terms( $post->ID, $termslug );
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
			<div class="meta">
				<time datetime="<?php echo get_the_date('Y-m-d') ?>">
					<?php the_time('Y.m.d'); ?></time>
				<span class="category <?php echo $cat_slug; ?>"><?php echo $cat_name; ?></span>
			</div>
		</header>
	</div>
	<?php endif; ?>
	<?php
	the_content( sprintf( 'Continue reading<span> "%s"</span>', get_the_title()) );
	$editor = get_field('掲載内容');
	if($editor){
		echo $editor;
	}
	wp_link_pages( array(
		'before'	  => '<div class="page-links"><span class="page-links-title">ページ：</span>',
		'after'	   => '</div>',
		'link_before' => '<span>',
		'link_after'  => '</span>',
		'pagelink'	=> '<span class="screen-reader-text">ページ </span>',
		'separator'   => '<span class="screen-reader-text">, </span>',
	) );
	?>
	<footer>
		<div class="back-button-wrapper">
			<a href="<?php echo get_category_link( 1 ); ?>">一覧へ戻る</a>
		</div>
	</footer>
</article>
