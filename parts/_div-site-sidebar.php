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

<?php
$args = array(
	'post_type' => 'page',
	'post_status' => 'publish',
	'posts_per_page' => 1000
);
$the_query = new WP_Query($args);
if($the_query->have_posts()):
?>
<aside>
<ul>
<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
<li>
	<a href="<?php the_permalink(); ?>">
<?php
$terms = get_the_terms( $post->ID, 'store_name' );
if ( $terms && ! is_wp_error( $terms ) ) :
	$storenameslug = array();
	$storename = array();
	foreach ( $terms as $term ) {
		$storenameslug[] = $term->slug;
		$storename[] = $term->name;
	}
?>
<img src="<?php bloginfo('template_directory'); ?>/images/sidebar-<?php echo $storenameslug[0]; ?>.png" alt="<?php echo $storename[0]; ?>" />

<?php endif; ?>
<br />
		<?php the_title(); ?>
	</a>
</li>
<?php endwhile; ?>
</ul>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
</aside>


<?php

div_wrapper( $id_wrapper, 'end' );

?>
