<div class="page blog">
	<div class="blog-wrapper">
		
		<?php

		$postsObj = new \Resource\Blogposts;
		$posts = $postsObj->get();

		foreach($posts as $post){
			if ($post["active"]==1){

				$date = new DateTime($post["posttime"]);
				$timestamp = $date->getTimestamp();
				$readableTime = date("M jS, Y", $timestamp);

				$postLink = "#";
				$postTarget = "_self";
				if (isset($post['out_link']) && $post['out_link']!=""){
					$postLink = $post['out_link'];
					$postTarget = "_new";
				}
				else{
					$postLink = "/blog/post/".$post['id'];
					$postTarget = "_self";
				}

				$postImgurl = BLOG.$post['cover'];
				if(isset($post['out_imgurl']) && $post['out_imgurl']!=""){ $postImgurl = $post['out_imgurl']; }

				?>
				<div class="blog-post" id="<?php echo $post['id']; ?>" data-img="<?php echo $postImgurl; ?>">
					<a href="<?php echo $postLink; ?>" target="<?php echo $postTarget; ?>">
						<div class="blog-post-hover">
							<div class="blog-post-lang">
								<i class="fa fa-calendar-o" style="position: absolute; margin-top: -2px;"></i>
								<span style="margin-left: 15px;"><?php echo $readableTime; ?></span>
								<i class="fa fa-globe" style="font-size: 14px; position: absolute; margin-top: -3px; margin-left: 3px;"></i>
								<img style="margin-left: 19px;" class="blog-post-lang-flag" src="<?php echo FLAGS.$post['language'].".png"; ?>" alt="US Flag">
							</div>
							<div class="blog-post-title"><?php echo $post['title']; ?></div>
						</div>
					</a>
				</div>
				<?php
			}
		}

		?>

		

	</div>
</div>