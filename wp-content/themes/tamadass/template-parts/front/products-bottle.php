<?php
	$figure = get_the_post_thumbnail_url() 
		?:get_theme_file_uri( '/assets/img/front/レイヤー 35 のコピー.jpg' );
?>
<div class="pl_list_item">
	<a href="<?=esc_url( get_permalink() )?>">
		<div class="pll_item_title">
			<p><?=the_title()?></p>
		</div>
		<div class="pll_item_figure">
			<img src="<?=$figure?>">
		</div>
	</a>
</div>