<?php global $post; if ($post->comment_status != 'closed') { ?>
	<div class="comment-link">
		<?php comments_popup_link('<span class="comment-balloon comment-balloon-empty">&rdquo;</span>Comment ', '<span class="comment-balloon">1</span>Comment ', '<span class="comment-balloon">%</span>Comment '); ?>
	</div>
<?php } ?>
