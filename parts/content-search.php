<?php
/*
サーチコンテンツ
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
*/
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('list'); ?>>

	<?php $type = get_field('投稿形式'); ?>
	<?php if( $type === "PDF_only"): ?>
	<?php 
	$file = get_field('pdf');
	if($file):
	?>
	<a class="icon-file" href="<?php echo $file['url']; ?>">
		<div class="info">
			<h3 class="title"><?php the_title(); ?></h3>
		</div>
	</a>
	<?php endif; ?>
	<?php elseif( $type === "link_only"): ?>
	<a  class="icon-transition" href="<?php the_field('リンク設定'); ?>" target="_blank" rel="noopener">
		<div class="info">
			<h3 class="title"><?php the_title(); ?></h3>
		</div>
	</a>
	<?php else: ?>
	<a href="<?php echo esc_url( the_permalink() ); ?>">
		<div class="info">
			<h3 class="title"><?php the_title(); ?></h3>
			<p>
				<?php
				if(mb_strlen($post->post_content, 'UTF-8')>50){
					$content= mb_substr(strip_tags($post->post_content), 0, 50, 'UTF-8');
					$content =  strip_shortcodes($content);
					echo $content.'…';
				}else{
					echo strip_tags($post->post_content, '<span>');
				}
				?>
			</p>
		</div>
	</a>
	<?php endif; ?>

</article>