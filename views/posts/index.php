<h2><?php echo $header ?></h2>
<hr>

	<div class="row">
		<?php foreach($posts as $post) { ?>
			<div class="col-sm-4">
				<div class="card">
					<blockquote>
						<p class="blurry-text"><?php echo $post->content; ?><p/>
						<small>
							<?php echo $post->author; ?> <cite title="Source Title">
							<a href="?controller=posts&action=show&id=<?php echo $post->id; ?>">
							See more</a></cite>
						</small>
					</blockquote>
				</div>
			</div>
		<?php } ?> 
	</div>	
		
