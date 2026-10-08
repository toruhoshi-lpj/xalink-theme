<?php
/*
アーカイブコンテンツ
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
*/
?>
<?php
if ( get_post_type() === 'blog' ) {
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
<li>
<a href="<?php echo esc_url( the_permalink() ); ?>">
	<span class="meta"><time datetime="<?php echo get_the_date('Y-m-d') ?>"><?php the_time('Y.m.d'); ?></time></span>
	<span class="category category-<?php echo $cat_slug; ?>"><?php echo $cat_name; ?></span>
	<span class="title"><?php the_title(); ?></span>
</a>
</li>
