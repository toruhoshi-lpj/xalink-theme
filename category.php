<?php
/*
カテゴリー
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
*/
?>
<?php
get_template_part( 'parts/header' );
get_template_part( 'parts/div-site-header' );
?>
<div id="page-title-wrapper">
	<div id="page-title">
		<section>
			<h2 class="title"><span class="ja">お知らせ</span><br><span class="en-font">NEWS</span></h2>
		</section>
	</div>
</div>


<div id="main-wrapper" class="container">
	<div id="main">
		<main>
			<?php
			div_wrapper( 'contents', 'start' );
			div_wrapper( 'post-archive', 'start' );
			?>
			<ul>
				<?php
				if ( have_posts() ) :
				while ( have_posts() ) : the_post();
				get_template_part( 'parts/content', 'archive' );
				endwhile;
				?>
			</ul>
			<?php
			get_template_part( 'parts/content', 'pagination' );
			else :
			get_template_part( 'parts/content', 'none' );
			endif;
			div_wrapper( 'post-archive', 'end' );
			?>
			<?php
			div_wrapper( 'contents', 'end' );
			?>
		</main>
	</div>
	<?php
	get_template_part( 'parts/div-site-sidebar' );
	?>
</div>
<?php
get_template_part( 'parts/div-site-footer' );
get_template_part( 'parts/footer' );
?>
