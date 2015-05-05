<div class="page portfolio">
	<div class="portfolio-wrapper">
		
		<?php
		$portfolioObj = new \Resource\Portfolio;
		$portfolios = $portfolioObj->get();

		for($i=0; $i<count($portfolios); $i++){
			$portfolio = $portfolios[$i];
			?>
			<div class="portfolio-box clearfix fancy-enter-portfolio">
				<div class="portfolio-box-vis"><img src="<?php echo PORTFOLIO.$portfolio["image"]; ?>" alt="Dummy"></div>
				<div class="portfolio-box-content">
					<div class="portfolio-box-title">
						<?php echo $portfolio["title"]; ?>
						<?php if($portfolio["recent"]=="1"){ ?><i class="fa fa-circle portfolio-recent" title="Ongoing/Recent"><span class="portfolio-recent-text">Recent</span></i><?php } ?>
						<?php if($portfolio["simple"]=="1"){ ?><i class="fa fa-circle portfolio-simple" title="Small Scale"><span class="portfolio-simple-text">Small Scale</span></i><?php } ?>
					</div>
					<div class="portfolio-box-desc"><?php echo $portfolio["desc"]; ?></div>
					<div class="portfolio-box-tagcloud">
						<ul class="portfolio-box-taglist">
							<?php
							$tagcloud = explode(",", $portfolio["builtwith"]);
							for($j=0; $j<count($tagcloud); $j++){
								?><li class="portfolio-box-tag"><?php echo $tagcloud[$j]; ?></li><?php
							}
							?>
						</ul>
					</div>
					<div class="portfolio-box-buttons">
						<?php
						if (isset($portfolio["github_link"])){
							?><a href="<?php echo $portfolio["github_link"]; ?>" target="_new"><div class="portfolio-box-button gh"><i class="fa fa-github" style="margin-left: 3px;"></i> View on GitHub</div></a><?php
						}
						if (isset($portfolio["other_link"])){
							?><a href="<?php echo $portfolio["other_link"]; ?>" target="_new"><div class="portfolio-box-button default"><i class="fa fa-link" style="margin-left: 3px;"></i> Visit Link</div></a><?php
						}
						?>
					</div>
				</div>
			</div>
			<?php
			if ($i != count($portfolios)-1){
				?><hr class="portfolio-divider"><?php
			}
		}		
		?>

		
	</div>
</div>