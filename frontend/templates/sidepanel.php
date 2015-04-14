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
				<li class="sidepanel-item <?php echo $printActive; ?>">
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


</div>