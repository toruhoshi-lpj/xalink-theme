<?php
/*
アーカイブ
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
			<h1 class="title">お知らせ</h1>
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
			<div class="list">
				<?php
				if ( have_posts() ) :
				while ( have_posts() ) : the_post();
				get_template_part( 'parts/content', 'archive' );
				endwhile;
				?>
			</div>
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
