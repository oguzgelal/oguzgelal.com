<div class="sidepanel">
	
	<div class="sidepanel-toggle">
		<i class="fa fa-bars sidepanel-toggle-btn"></i>
	</div>

	<ul class="sidepanel-list">
		
		<?php
		$pagesObj = new \Resource\Pages;
		$pages = $pagesObj->get();
		if ($pages!=null){
			for($i=0; $i<count($pages); $i++){
				$page = $pages[$i];
				$printActive="";
				if (isset($this->data["page"]) && $this->data["page"]==$page["alias"]){
					$printActive="active";
				}
				?>
				<li class="sidepanel-item sidepanel-item-reg <?php echo $printActive; ?>">
					<a href="<?php echo $page['url']; ?>" target="<?php echo $page['target']; ?>">
						<i class="fa <?php echo $page['icon']; ?> sidepanel-item-icon"></i>
						<span class="sidepanel-small-hide"><?php echo $page['text']; ?></span>
					</a>
				</li>
				<?php
			}
		}
		?>

	</ul>
	
	<hr class="sidepanel-divider">

	<ul class="sidepanel-list" style="margin-top: 20px;">
		<li class="sidepanel-item sidepanel-item-gh">
			<a href="https://github.com/oguzgelal" target="_new">
				<i class="fa fa-github-square sidepanel-item-icon"></i>
				<span class="sidepanel-small-hide">GitHub</span>
			</a>
		</li>
		<li class="sidepanel-item sidepanel-item-fb">
			<a href="https://www.facebook.com/o.gelal" target="_new">
				<i class="fa fa-facebook-square sidepanel-item-icon"></i>
				<span class="sidepanel-small-hide">Facebook</span>
			</a>
		</li>
		<li class="sidepanel-item sidepanel-item-tw">
			<a href="https://twitter.com/oguzgelal" target="_new">
				<i class="fa fa-twitter-square sidepanel-item-icon"></i>
				<span class="sidepanel-small-hide">Twitter</span>
			</a>
		</li>
		<li class="sidepanel-item sidepanel-item-gp">
			<a href="https://plus.google.com/+O%C4%9FuzGelal/posts" target="_new">
				<i class="fa fa-google-plus-square sidepanel-item-icon"></i>
				<span class="sidepanel-small-hide">Google+</span>
			</a>
		</li>
		<li class="sidepanel-item sidepanel-item-li" title="I'm not a very active LinkedIn user" placement="e">
			<a href="tr.linkedin.com/in/oguzgelal" target="_new">
				<i class="fa fa-linkedin-square sidepanel-item-icon"></i>
				<span class="sidepanel-small-hide">LinkedIn</span>
			</a>
		</li>
	</ul>


</div>