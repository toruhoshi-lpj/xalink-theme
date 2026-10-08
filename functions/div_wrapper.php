<?php
/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*

要素を梱包

*/

/*note: INDEXの表示は、コメントの「 index: 」でハイライト表示してください。*/

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*index: 要素梱包*/
if(!function_exists('div_wrapper')){
	function div_wrapper($id = "body", $type = "", $class = ""){
		if($type=="start"){
			echo '<div id="'.$id.'-wrapper"><div id="'.$id.'" '; post_class($class); echo '>';
		}elseif($type=="end"){
			echo '</div><!-- #'.$id.' --></div><!-- #'.$id.'-wrapper -->';
		}
	}
}

?>
