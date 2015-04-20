<div class="page resume">
	<div class="resume-wrapper">
		<div class="resume-col" style="width: 100% !important; margin-top: 20px;">
			<div class="resume-title">Summary of Me <span class="resume-warning" title="You won't see any skill under 30% in my CV"><i class="fa fa-exclamation-circle"></i></span></div>	
		</div>
		<div class="resume-col" style="width: 100% !important; margin-top: 20px;">
			<div class="resume-download">
				<div class="resume-download-link">
					<a href="<?php echo RESUME; ?>" target="_new">
						<span class="resume-download-normaltext"><i class="fa fa-download"></i> Download Resume (PDF)</span>
						<span class="resume-download-mobiletext"><i class="fa fa-download"></i> CV (PDF)</span>
					</a>
				</div>
				<div class="resume-download-version">
					<span class="resume-download-normaltext">Version <?php echo RESUME_VERSION; ?> <i class="fa fa-question-circle"></i> <span style="color: lightgray;">What is this ?</span></span>
					<span class="resume-download-mobiletext"> v<?php echo RESUME_VERSION; ?> <i class="fa fa-question-circle"></i> </span>
				</div>
				<div class="resume-download-explain">
					<hr>
					<p>
						Applying <b>versioning number</b> (on my CV) is something I came up with to avoid outdated versions of my CV 
						to misinform anyone. Its fairly simple, the PDF copies has version numbers on them. 
						And there is a small warning that says "<i>The latest version could be found at 
						oguzgelal.com/cv</i>". So anyone who is interested in me should visit that link and see 
						if the version number on their copy matches with the one on my site. 
					</p>
					<p>
						The versioning system is similar to versioning in programming. It goes like 
						<b>x.y.z</b>. <u>x</u> means <b>information change</b>. If <u>x</u> is different with 
						your version, you should probably download it again. <u>y</u> means <b>design change</b>. 
						If I update the layout, color or that kind of stuff, I'll increment this. If you want your 
						version to look better, then you should download it again ^.^ Otherwise, no need to download. You can just ignore the 
						<u>z</u> part, but note that there may be a typo on the CV if your <u>z</u> is different with 
						the one on the site. One last thing; when a number changes, the ones on the righ resets 
						(ex: 4.1.1 would update to 5.0.0) so you should start checking from the left ^.^
					</p>
				</div>
			</div>	
		</div>
		<div class="resume-col">
			<canvas id="resume-radar-programming"></canvas>
			<div class="resume-radar-label">Programming</div>
		</div>
		<div class="resume-col">
			<canvas id="resume-radar-frameworks"></canvas>
			<div class="resume-radar-label">Frameworks</div>
		</div>
		<div class="resume-col">
			<canvas id="resume-radar-tools"></canvas>
			<div class="resume-radar-label">Tools</div>
		</div>

		<div class="resume-col">
			<canvas id="resume-radar-programs"></canvas>
			<div class="resume-radar-label">Programs</div>
		</div>
		<div class="resume-col">
			<canvas id="resume-radar-hobbies"></canvas>
			<div class="resume-radar-label">Hobbies</div>
		</div>
		<div class="resume-col">
			<canvas id="resume-radar-languages"></canvas>
			<div class="resume-radar-label">Languages</div>
		</div>
	</div>
</div>

