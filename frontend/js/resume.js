$(document).ready(function(){

	// ios devices doesnt register click event so click or touch is determined on page start.
	var click =((document.ontouchstart!==null)?'click':'touchstart');
	$(document).on(click, '.resume-download-version', function(){
		var elem = $('.resume-download-explain');
		if (elem.is(':visible')){ elem.slideUp('fast'); }
		else{ elem.slideDown('fast'); }
	});

	createHobbiesChart();
	createProgrammingChart();
	createToolsChart();
	createFrameworksChart();
	createProgramsChart();
	createLanguagesChart();
});

var createHobbiesChart = function(){
	var ctx = $("#resume-radar-hobbies").get(0).getContext("2d");
	var data = {
		labels: ["Piano", "Drums", "Webcomics", "Coding", "Reading", "Designing"],
		datasets: [{
			label: "Oguz",
			fillColor: "rgba(151,187,205,0.2)",
			strokeColor: "rgba(151,187,205,1)",
			pointColor: "rgba(151,187,205,1)",
			pointStrokeColor: "#fff",
			pointHighlightFill: "#fff",
			pointHighlightStroke: "rgba(151,187,205,1)",
			data: [
			85, // Piano
			45, // Drum
			60, // Webcomic
			95, // Coding
			65, // Reading
			75 // Designing
			]
		}]
	};
	var options = {
	};
	var ResumeRadar = new Chart(ctx).Radar(data, options);
}

var createProgrammingChart = function(){
	var ctx = $("#resume-radar-programming").get(0).getContext("2d");
	var data = {
		labels: ["Javascript", "Python", "HTML&CSS", "Visual Basic", "Cache Script", "Bash", "C/C++", "Java", "Swift", "Verilog", "F#", "SQL", "Processing", "PHP", "Perl"],
		datasets: [{
			label: "Oguz",
			fillColor: "rgba(151,187,205,0.2)",
			strokeColor: "rgba(151,187,205,1)",
			pointColor: "rgba(151,187,205,1)",
			pointStrokeColor: "#fff",
			pointHighlightFill: "#fff",
			pointHighlightStroke: "rgba(151,187,205,1)",
			data: [
				99, //"Javascript",
				45, //"Python",
				99, //"HTML&CSS",
				55, //"Visual Basic",
				40, //"Cache",
				85, //"Bash",
				35, //"C/C++",
				90, //"Java",
				50, //"Swift",
				40, //"Verilog",
				60, //"F#",
				85, //"SQL",
				95, //"Processing",
				99, //"PHP",
				30 //"Perl"
				]
			}]
		};
		var options = {
		};
		var ResumeRadar = new Chart(ctx).Radar(data, options);
	}

	var createToolsChart = function(){
		var ctx = $("#resume-radar-tools").get(0).getContext("2d");
		var data = {
			labels: ["Grunt", "Composer", "Git", "SVN", "Terminal", "Apache", "NGINX", "Vim"],
			datasets: [{
				label: "Oguz",
				fillColor: "rgba(151,187,205,0.2)",
				strokeColor: "rgba(151,187,205,1)",
				pointColor: "rgba(151,187,205,1)",
				pointStrokeColor: "#fff",
				pointHighlightFill: "#fff",
				pointHighlightStroke: "rgba(151,187,205,1)",
				data: [
				75, //"Grunt",
				95, //"Composer",
				99, //"Git",
				40, //"SVN",
				80, //"Terminal",
				30, //"Apache",
				75, //"NGINX",
				70, //"Vim"
				]
			}]
		};
		var options = {
		};
		var ResumeRadar = new Chart(ctx).Radar(data, options);
	}

	var createFrameworksChart = function(){
		var ctx = $("#resume-radar-frameworks").get(0).getContext("2d");
		var data = {
			labels: ["BackboneJS (JS)", "AngularJS (JS)", "MeteorJS (JS)", "JSP&JSF (Java)", "ACM (Java)", "Slim Framework (PHP)", "F3 Framework (PHP)", "CakePHP (PHP)", "Django (Python)"],
			datasets: [{
				label: "Oguz",
				fillColor: "rgba(151,187,205,0.2)",
				strokeColor: "rgba(151,187,205,1)",
				pointColor: "rgba(151,187,205,1)",
				pointStrokeColor: "#fff",
				pointHighlightFill: "#fff",
				pointHighlightStroke: "rgba(151,187,205,1)",
				data: [
				95, //"BackboneJS (JS)",
				45, //"AngularJS (JS)",
				97, //"MeteorJS (JS)",
				60, //"JSP&JSF (Java)",
				70, //"ACM (Java)",
				98, //"Slim Framework (PHP)",
				98, //"F3 Framework (PHP)",
				35, //"CakePHP (PHP)",
				10, //"Django (Python)"
				]
			}]
		};
		var options = {
		};
		var ResumeRadar = new Chart(ctx).Radar(data, options);
	}

	var createProgramsChart = function(){
		var ctx = $("#resume-radar-programs").get(0).getContext("2d");
		var data = {
			labels: ["Adobe Photoshop", "Adobe Illustrator", "SketchBook", "Sublime Text 2", "IntelliJ Idea", "Eclipse", "Apple XCode", "Xilinx", "Visual Studio"],
			datasets: [{
				label: "Oguz",
				fillColor: "rgba(151,187,205,0.2)",
				strokeColor: "rgba(151,187,205,1)",
				pointColor: "rgba(151,187,205,1)",
				pointStrokeColor: "#fff",
				pointHighlightFill: "#fff",
				pointHighlightStroke: "rgba(151,187,205,1)",
				data: [
				80, //"Adobe Photoshop",
				60, //"Adobe Illustrator",
				95, //"SketchBook",
				90, //"Sublime Text 2",
				50, //"IntelliJ Idea",
				95, //"Eclipse",
				90, //"Apple XCode",
				25, //"Xilinx",
				60 //"Visual Studio"
				]
			}]
		};
		var options = {
		};
		var ResumeRadar = new Chart(ctx).Radar(data, options);
	}

	var createLanguagesChart = function(){
		var ctx = $("#resume-radar-languages").get(0).getContext("2d");
		var data = {
			labels: ["English", "Turkish", "Italian", "Spanish", "German"],
			datasets: [{
				label: "Oguz",
				fillColor: "rgba(151,187,205,0.2)",
				strokeColor: "rgba(151,187,205,1)",
				pointColor: "rgba(151,187,205,1)",
				pointStrokeColor: "#fff",
				pointHighlightFill: "#fff",
				pointHighlightStroke: "rgba(151,187,205,1)",
				data: [
				90, //"English",
				99, //"Turkish",
				15, //"Italian",
				12, //"Spanish",
				5 //"German"
				]
			}]
		};
		var options = {
		};
		var ResumeRadar = new Chart(ctx).Radar(data, options);
	}