<?php
/*
ページネーションの処理
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
*/
/*

// 関数の書き出しタグ
// 「［ 〜 ］」は配列内の変数名が反映される箇所

<nav class="navigation pagination" role="navigation">
	<h2 class="screen-reader-text">［ screen_reader_text ］</h2>
	<div class="nav-links">
		<a class="prev page-numbers" href="">［ prev_text ］</a>
		<a class='page-numbers' href=''>［ before_page_number ］1［ after_page_number ］</a>
		<span class='page-numbers current'>［ before_page_number ］2［ after_page_number ］</span>
		<a class='page-numbers' href=''>［ before_page_number ］3［ after_page_number ］</a>
		<span class="page-numbers dots">&hellip;</span>
		<a class='page-numbers' href=''>［ before_page_number ］7［ after_page_number ］</a>
		<a class="next page-numbers" href="">［ next_text ］</a>
	</div>
</nav>

*/

	the_posts_pagination( array(
		'prev_text'		  => "&lt;<span class='screen-reader-text'>前のページへ</span>",
		'next_text'		  => "&gt;<span class='screen-reader-text'>次のページへ</span>",
		'after_page_number' => '<span class="screen-reader-text">ページへ</span> ',
		'screen_reader_text' => '投稿のナビゲーション',
	) );
?>
