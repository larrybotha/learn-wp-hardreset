<?php if(function_exists('theme_name_pagenav')){ ?>
	<?php theme_name_pagenav(); ?>
<?php } else { ?>
	<div class="post-nav">
		<span class="prev"><?php next_posts_link(__('&laquo; Older Entries', 'theme_name')) ?></span>
		<span class="next"><?php previous_posts_link(__('Newer Entries &raquo;', 'theme_name')) ?></span>
	</div>
<?php } ?>