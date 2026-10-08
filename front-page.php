<?php
/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*

ホーム

*/
/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/

get_template_part( 'parts/header' );
get_template_part( 'parts/div-site-header' );

div_wrapper( 'contents', 'start' );
?>



<div id="hero-wrapper">
	<div id="hero">
		<ul class="hero-slider">
			<li class="slide-img" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/hero-1.jpg');"></li>
			<li class="slide-img" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/hero-2.jpg');"></li>
			<li class="slide-img" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/hero-3.jpg');"></li>
			<li class="slide-img" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/hero-4.jpg');"></li>
			<li class="slide-img" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/hero-5.jpg');"></li>
		</ul>
		<div class="hero-copy-box">
			<h1>人を、<br>街を、<br>輝かせる</h1>
		</div>
	</div>
</div>

<div id="home-about-wrapper">
	<div id="home-about">
		<div class="about-copy">
			<p class="about-logo">
				<img src="<?php bloginfo('template_directory'); ?>/images/eyecatcher.svg" alt="XEBIO Asset Link">
			</p>
			<h2 class="about-lead">人の力を活かし、<br>施設の価値を高める。<br>地域に新しい可能性を。</h2>
			<p class="about-text">地域の可能性（Asset）を、<br>強固な絆（Link）で未来へつなぐ。<br>人と企業が共に繁栄し、<br>豊かに循環する地域社会を創り出します。</p>
		</div>
		<div class="about-photos">
			<div class="about-photo">
				<img src="<?php bloginfo('template_directory'); ?>/images/item01.jpg" alt="施設の空撮">
			</div>
			<div class="about-photo">
				<img src="<?php bloginfo('template_directory'); ?>/images/item02.jpg" alt="打ち合わせの様子">
			</div>
		</div>
	</div>
</div>

<div id="home-service-wrapper">
	<div id="home-service">
		<div class="service-photos">
			<div class="service-photo service-photo-01">
				<img src="<?php bloginfo('template_directory'); ?>/images/item03.jpg" alt="人材派遣のイメージ">
			</div>
			<div class="service-photo service-photo-02">
				<img src="<?php bloginfo('template_directory'); ?>/images/item04.jpg" alt="施設管理のイメージ">
			</div>
		</div>
		<div class="service-body">
			<div class="service-heading">
				<p class="service-en">SERVICES</p>
				<p class="service-ja">事業案内</p>
			</div>
			<section class="service-block service-dispatch">
				<h2>人材派遣</h2>
				<p>人材派遣事業では各企業様へ人材派遣の活用として、採用にかかる労力や採用費の削減、繁忙期などの業務量の変動に合わせたご利用など様々な視点からご提案させていただきます。</p>
				<a class="service-more" href="https://staff.xebiocp.co.jp/">詳しくみる</a>
			</section>
			<hr class="service-divider">
			<div id="service-facility" class="anchor-target"></div>
			<section class="service-block service-facility">
				<h2>施設管理</h2>
				<p>指定管理者制度による行政機関の施設管理業務を受託しており、複数のスポーツ関連施設について管理運営を行っております。</p>
				<ul class="service-links">
					<li><a href="https://kaiseizan-koriyama.jp/">開成山地区体育施設</a></li>
					<li><a href="https://www.yracs.jp/">郡山ユラックス熱海</a></li>
					<li><a href="https://www.icearena.jp/">磐梯熱海アイスアリーナ</a></li>
					<li><a href="https://www.sportspark.jp/">磐梯熱海スポーツパーク</a></li>
				</ul>
			</section>
		</div>
	</div>
</div>

<div id="home-profile-wrapper">
	<div id="home-profile">
		<div class="profile-heading">
			<p class="profile-en">CORPORATE PROFILE</p>
			<p class="profile-ja">企業情報</p>
		</div>
		<dl class="profile-list">
			<div class="profile-row">
				<dt>会社名</dt>
				<dd>ゼビオアセットリンク株式会社</dd>
			</div>
			<div class="profile-row">
				<dt>本社</dt>
				<dd>〒963-8024　福島県郡山市朝日 3-7-7</dd>
			</div>
			<div class="profile-row">
				<dt>会社設立</dt>
				<dd>2026年5月1日</dd>
			</div>
			<div class="profile-row">
				<dt>代表取締役社長兼執行役員</dt>
				<dd>代表取締役社長　石塚晃一</dd>
			</div>
			<div class="profile-row">
				<dt>主な事業内容</dt>
				<dd>
					労働派遣事業　［許可番号：派 07-300047］<br>
					有料職業紹介事業　［許可番号：07- ユ -300049］<br>
					指定管理事業
				</dd>
			</div>
		</dl>
	</div>
</div>



<?php

div_wrapper( 'contents', 'end' );

get_template_part( 'parts/div-site-footer' );
get_template_part( 'parts/footer' );

?>
