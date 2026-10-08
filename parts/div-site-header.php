<?php
/*
共通ヘッダー
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
*/

$id_wrapper = 'header';
div_wrapper( $id_wrapper, 'start' );

?>
<header id="site-header" class="header-footer-group header-wrap" role="banner">
	<div id="header-nav" class="header-inner">
		<div class="xalink-logo">
			<a href="<?php echo esc_url( home_url( "" ) ); ?>">
				<img src="<?php bloginfo('template_directory'); ?>/images/logo_xalink_blue.svg" alt="XEBIOアセットリンク株式会社">
			</a>
		</div>
		<!--note global-navigation　グローバルナビゲーション-->
		<nav role="navigation" id="global-nav" class="nav-pc">
			<ul class="clearfix">
				<li><a href="#home-service">事業案内</a></li>
				<li><a href="#home-profile">会社案内</a></li>
				<li><a href="https://www.xebiocp.co.jp/recruit">採用情報</a></li>
			</ul>
		</nav>
		<button type="button" id="nav-toggle" class="nav-toggle" aria-expanded="false" aria-controls="global-nav-sp" aria-label="メニューを開く">
			<span></span>
			<span></span>
			<span></span>
		</button>
	</div>
	<nav role="navigation" id="global-nav-sp" class="nav-sp" aria-hidden="true">
		<ul>
			<li><a href="#home-service">事業案内</a></li>
			<li><a href="#home-profile">会社案内</a></li>
			<li><a href="https://www.xebiocp.co.jp/recruit">採用情報</a></li>
		</ul>
	</nav>
</header>
<?php

div_wrapper( $id_wrapper, 'end' );

?>