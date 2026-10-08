<?php
/*
検索結果
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
			<h1 class="title">検索結果
				<span class="en">SEARCH RESULTS</span>
			</h1>
		</section>
	</div>
</div>

<?php
get_template_part( 'parts/div-header-breadcrumb' );
?>

<div id="main-wrapper" class="clearfix">
	<main>

	<?php
		div_wrapper( 'contents', 'start' );
		div_wrapper( 'post-archive', 'start' );
	?>
	<?php
		if ( have_posts() ) :
		while ( have_posts() ) : the_post();
	?>

	<?php
			get_template_part( 'parts/content', 'search' );
	?>


	<?php
		endwhile;
		get_template_part( 'parts/content', 'pagination' );
		else :
		get_template_part( 'parts/content', 'none' );
		endif;

		div_wrapper( 'post-archive', 'end' );
		div_wrapper( 'contents', 'end' );
	?>

	</main>
</div>

<?php
get_template_part( 'parts/div-site-footer' );
get_template_part( 'parts/footer' );
?>