<?php
/*
共通フッター
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
*/

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: セクションの基本設定 */
/*note: ファイル名と変数を同じに扱い、この同名でCSS（SASS）も管理します。 */
$id_wrapper = 'footer';

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: セクションのテンプレート */
div_wrapper( $id_wrapper, 'start' );

?>
<footer id="sub-footer" role="contentinfo" class="header-footer-group footer-wrap">
	<div class="sub-footer-container">
		<div class="sub-footer-logo">
			<a href="/">
				<img src="<?php bloginfo('template_directory'); ?>/images/logo_xalink_blue.svg"
					alt="XEBIOアセットリンク株式会社">
			</a>
		</div>
		<!-- ナビゲーションメニュー -->
		<div class="sub-footer-nav">
			<!-- 列1: 事業案内 -->
			<div class="nav-column">
				<span class="nav-title js-listlink-trigger">事業案内</span>
				<div class="js-listlink-target">
					<ul class="sub-menu">
						<li><a href="#home-service">人材派遣業務</a></li>
						<li><a href="#service-facility">施設管理業務</a></li>
					</ul>
				</div>
			</div>
			<!-- 列2: 会社案内 / 採用情報 -->
			<div class="nav-column">
				<ul>
				<li><a href="#home-profile" class="nav-title">会社案内</a></li>
				<li><a href="https://www.xebiocp.co.jp/recruit" class="nav-title">採用情報</a></li>
				</ul>
			</div>
			<!-- 列3: 規約・情報公開 -->
			<div class="nav-column">
				<ul>
					<li><a href="<?php echo home_url('/compliance/'); ?>" class="nav-title">個人情報保護方針</a></li>
					<li><a href="<?php echo home_url('/compliance/'); ?>#compliance-2" class="nav-title">労働者派遣事業に関する情報</a></li>
				</ul>
			</div>
		</div>
		<!-- バナー・認定マークエリア -->
		<div class="sub-footer-marks">
			<div class="mark-item">
				<a href="https://privacymark.jp/" target="_blank" rel="noopener noreferrer">
					<img src="<?php bloginfo('template_directory'); ?>/images/p-mark.jpg" alt="プライバシーマーク">
				</a>
			</div>
			<div class="mark-item">
				<a href="https://www.jassa.or.jp/" target="_blank" rel="noopener noreferrer">
					<img src="<?php bloginfo('template_directory'); ?>/images/jsa-mark.jpg" alt="JSA 日本人材派遣協会">
				</a>
			</div>
		</div>
	</div>
</footer>
<!-- #site-footer -->

<!-- .l-group -->
<div class="l-group">
	<div class="c-container">
		<div class="l-group__logo"><img
				src="<?php bloginfo('template_directory'); ?>/images/xebio.svg"
				alt="ゼビオグループ" width="218" height="61"></div>
		<div class="l-group__cols">
			<div class="l-group__col">
				<ul class="l-group__menu">
					<li><span class="js-listlink-trigger">コーポレートサイト</span>
						<div class="l-group__slide js-listlink-target">
							<ul class="l-group__listLink">
								<li><a href="https://www.xebio.co.jp/" target="_blank"
										rel="noopener noreferrer">ゼビオホールディングス株式会社</a></li>
								<li><a href="https://www.supersports.com/ja-jp/xebio" target="_blank"
										rel="noopener noreferrer">ゼビオ株式会社</a></li>
								<li><a href="https://www.supersports.com/ja-jp/victoria" target="_blank"
										rel="noopener noreferrer">株式会社ヴィクトリア</a></li>
								<li><a href="http://www.golfpartner.co.jp/" target="_blank"
										rel="noopener noreferrer">株式会社ゴルフパートナー</a></li>
								<li><a href="https://www.xsmktg.com/" target="_blank"
										rel="noopener noreferrer">クロススポーツマーケティング株式会社</a></li>
								<li><a href="https://www.xebiocard.co.jp/" target="_blank"
										rel="noopener noreferrer">ゼビオカード株式会社</a></li>
								<li><a href="https://xis.xebiocard.co.jp/" target="_blank"
										rel="noopener noreferrer">ゼビオカード株式会社保険事業部</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
			<div class="l-group__col">
				<ul class="l-group__menu">
					<li><span class="js-listlink-trigger">ブランド・店舗</span>
						<div class="l-group__slide js-listlink-target">
							<ul class="l-group__listLink">
								<li><a href="https://www.supersports.com/ja-jp/xebio" target="_blank"
										rel="noopener noreferrer">スーパースポーツゼビオ</a></li>
								<li><a href="https://www.supersports.com/ja-jp/victoria" target="_blank"
										rel="noopener noreferrer">Victoria</a></li>
								<li><a href="http://nexas-sports.jp/" target="_blank"
										rel="noopener noreferrer">NEXAS</a></li>
								<li><a href="http://takeda-sports.jp/" target="_blank"
										rel="noopener noreferrer">タケダスポーツ</a></li>
								<li><a href="https://www.supersports.com/ja-jp/golf" target="_blank"
										rel="noopener noreferrer">Victoria Golf</a></li>
								<li><a href="http://www.golfpartner.co.jp/" target="_blank"
										rel="noopener noreferrer">ゴルフパートナー</a></li>
								<li><a href="https://www.double-eagle-golf.com/" target="_blank"
										rel="noopener noreferrer">Double-eagle</a></li>
								<li><a href="https://www.supersports.com/ja-jp/lbreath" target="_blank"
										rel="noopener noreferrer">L-Breath</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
			<div class="l-group__col">
				<ul class="l-group__menu">
					<li><span class="js-listlink-trigger">スポーツチーム</span>
						<div class="l-group__slide js-listlink-target">
							<ul class="l-group__listLink">
								<li><a href="https://freeblades.jp/" target="_blank"
										rel="noopener noreferrer">東北フリーブレイズ</a></li>
								<li><a href="https://www.verdy.co.jp/" target="_blank"
										rel="noopener noreferrer">東京ヴェルディ</a></li>
							</ul>
						</div>
					</li>
				</ul>
				<ul class="l-group__menu">
					<li><span class="js-listlink-trigger">宿泊・レジャー施設</span>
						<div class="l-group__slide js-listlink-target">
							<ul class="l-group__listLink">
								<li><a href="https://lakesidebanko.jp/" target="_blank"
										rel="noopener noreferrer">レイクサイド磐光</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
			<div class="l-group__col">
				<ul class="l-group__menu">
					<li><span class="js-listlink-trigger">スポーツ施設</span>
						<div class="l-group__slide js-listlink-target">
							<ul class="l-group__listLink">
								<li><a href="https://flathachinohe.com/" target="_blank"
										rel="noopener noreferrer">フラット八戸</a></li>
							</ul>
						</div>
					</li>
				</ul>
				<ul class="l-group__menu -last">
					<li><span class="js-listlink-trigger">グループ採用</span>
						<div class="l-group__slide js-listlink-target">
							<ul class="l-group__listLink">
								<li><a href="https://www.xebio.co.jp/kanaeru/info/new.html" target="_blank"
										rel="noopener noreferrer">新卒採用情報</a></li>
								<li><a href="https://www.xebio.co.jp/kanaeru/" target="_blank"
										rel="noopener noreferrer">中途・アルバイト採用情報</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- /.l-group -->
<!-- .l-footer -->
<footer class="l-footer">
	<div>
		<p class="l-footer__copyright"><small>© 2025 XEBIO CORPORATE CO.,LTD. </small></p>
	</div>
</footer>
<!-- /.l-footer -->
<?php

div_wrapper( $id_wrapper, 'end' );

?>