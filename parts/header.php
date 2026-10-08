<?php
/*
共通ヘッダー
*/
/* note: 「div#wrapper」は「parts/footer.php」で閉じています。*/
?>
<!DOCTYPE html>
<html lang="ja" id="root">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="ゼビオアセットリンク,ゼビオアセットリンク株式会社,人材派遣,有料職業紹介,施設管理,指定管理者,スポーツ施設,福島県,郡山市">
	<meta name="description" content="ゼビオアセットリンク株式会社は、福島県郡山市を拠点に人材派遣・有料職業紹介と、スポーツ施設の指定管理事業を行っています。人の力を活かし、施設の価値を高め、地域に新しい可能性をつなぎます。">
	<link rel="icon" href="<?php echo esc_url( get_template_directory_uri() . '/images/favicon.ico' ); ?>" type="image/x-icon">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php
	/*note: カスタムフック */
	if( function_exists( 'body_first' ) ){ body_first(); }
?>
	<div id="wrapper">
