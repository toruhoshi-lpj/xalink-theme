<?php
/*
404のの処理
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
*/
?>
<article class="no-results not-found error-404 " role="main">
	<header class="page-header">
		<h1 class="page-title">見つかりませんでした。</h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( '記事が見つかりませんでした。<a href="%1$s">最初の記事を書きましょう。</a>.', esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>
		<div class="wrapper">
			<p>ご指定した、検索結果はありませんでした。<br />別の検索設定で見つかるかもしれません。</p>
		</div>

		<?php else : ?>

		<div class="wrapper">
			<p>ご指定した、検索結果はありませんでした。<br />別の検索設定で見つかるかもしれません。</p>
		</div>

		<?php endif; ?>
		
		<form method="get" class="search" action="<?php echo home_url('/'); ?>">
			<input type="text" name="s" class="searchinput" value="<?php the_search_query(); ?>" placeholder="サイトを検索" />
			<input type="submit" value="検索" class="searchsubmit" accesskey="f" />
		</form>

	</div><!-- .page-content -->
</article><!-- .no-results -->
