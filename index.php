<?php
/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*

基本ページ

Author: Kimura Kazuhiko
Author URI: https://8th.jp/
Version: 1.0.0
© 2017 Eighth.

*/

/*note: INDEXの表示は、コメントの「 index: 」でハイライト表示してください。*/

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/

get_template_part( 'parts/header' );
get_template_part( 'parts/div-site-header' );

?>
<div id="page-title-wrapper">
	<div id="page-title">
		<section>
			<h1 class="title"><?php the_title(); ?></h1>
		</section>
	</div>
</div>
<?php

get_template_part( 'parts/div-header-breadcrumb' );

?>
<div class="main-wrapper">
	<main>

<?php
eighth_div_wrapper( 'contents', 'start' );

if ( have_posts() ) :
	while ( have_posts() ) : the_post();
		get_template_part( 'parts/content' );
	endwhile;
	get_template_part( 'parts/content', 'pagination' );
else :
	get_template_part( 'parts/content', 'none' );
endif;

eighth_div_wrapper( 'contents', 'end' );
get_template_part( 'parts/div-site-sidebar' );
?>

	</main>
</div>

<?php
get_template_part( 'parts/div-site-footer' );
get_template_part( 'parts/footer' );

?>
