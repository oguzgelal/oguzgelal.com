var hobbies = {
	"Piano": 85,
	"Drums": 55,
	"Webcomic": 60,
	"Coding": 95,
	"Reading": 65,
	"Table Tennis": 55,
	"Chess": 70,
	"Designing": 75
};
var programming = {
	"Javascript": 99,
	"Python": 45,
	"HTML&CSS": 99,
	"Visual Basic": 55,
	"Cache": 40,
	"Bash": 85,
	"C/C++": 35,
	"Java": 90,
	"Swift": 50,
	"Verilog": 40,
	"F#": 60,
	"SQL": 85,
	"Processing": 95,
	"PHP": 99,
	"Perl": 30
};
var tools = {
	"Grunt": 75,
	"Composer": 95,
	"Git": 99,
	"SVN": 40,
	"Terminal": 80,
	"Apache": 30,
	"NGINX": 75,
	"Vim": 70
};
var frameworks = {
	"BackboneJS (JS)": 95,
	"AngularJS (JS)": 45,
	"MeteorJS (JS)": 97,
	"JSP&JSF (Java)": 60,
	"ACM (Java)": 70,
	"Slim Framework (PHP)": 98,
	"F3 Framework (PHP)": 98,
	"CakePHP (PHP)": 35,
	"Laravel/Lumen (PHP)": 90,
	"Django (Python)": 10
};
var programs = {
	"Adobe Photoshop": 80,
	"Adobe Illustrator": 60,
	"SketchBook": 95,
	"Sublime Text 2": 90,
	"IntelliJ Idea": 50,
	"Eclipse": 95,
	"Apple XCode": 90,
	"Xilinx": 25,
	"Visual Studio": 60
};
var languages = {
	"English": 90,
	"Turkish": 99,
	"Italian": 15,
	"Spanish": 12,
	"German": 5
}

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
	
	var populateLabels = [], populateData = [];
	for(var item in hobbies){
		populateLabels.push(item);
		populateData.push(hobbies[item]);
	}

	var data = {
		labels: populateLabels,
		datasets: [{
			label: "Oguz",
			fillColor: "rgba(151,187,205,0.2)",
			strokeColor: "rgba(151,187,205,1)",
			pointColor: "rgba(151,187,205,1)",
			pointStrokeColor: "#fff",
			pointHighlightFill: "#fff",
			pointHighlightStroke: "rgba(151,187,205,1)",
			data: populateData
		}]
	};
	var options = {};
	var ResumeRadar = new Chart(ctx).Radar(data, options);
}

var createProgrammingChart = function(){
	var ctx = $("#resume-radar-programming").get(0).getContext("2d");

	var populateLabels = [], populateData = [];
	for(var item in programming){
		populateLabels.push(item);
		populateData.push(programming[item]);
	}

	var data = {
		labels: populateLabels,
		datasets: [{
			label: "Oguz",
			fillColor: "rgba(151,187,205,0.2)",
			strokeColor: "rgba(151,187,205,1)",
			pointColor: "rgba(151,187,205,1)",
			pointStrokeColor: "#fff",
			pointHighlightFill: "#fff",
			pointHighlightStroke: "rgba(151,187,205,1)",
			data: populateData
		}]
	};
	var options = {};
	var ResumeRadar = new Chart(ctx).Radar(data, options);
}

var createToolsChart = function(){
	var ctx = $("#resume-radar-tools").get(0).getContext("2d");

	var populateLabels = [], populateData = [];
	for(var item in tools){
		populateLabels.push(item);
		populateData.push(tools[item]);
	}

	var data = {
		labels: populateLabels,
		datasets: [{
			label: "Oguz",
			fillColor: "rgba(151,187,205,0.2)",
			strokeColor: "rgba(151,187,205,1)",
			pointColor: "rgba(151,187,205,1)",
			pointStrokeColor: "#fff",
			pointHighlightFill: "#fff",
			pointHighlightStroke: "rgba(151,187,205,1)",
			data: populateData
		}]
	};
	var options = {};
	var ResumeRadar = new Chart(ctx).Radar(data, options);
}

var createFrameworksChart = function(){
	var ctx = $("#resume-radar-frameworks").get(0).getContext("2d");

	var populateLabels = [], populateData = [];
	for(var item in frameworks){
		populateLabels.push(item);
		populateData.push(frameworks[item]);
	}

	var data = {
		labels: populateLabels,
		datasets: [{
			label: "Oguz",
			fillColor: "rgba(151,187,205,0.2)",
			strokeColor: "rgba(151,187,205,1)",
			pointColor: "rgba(151,187,205,1)",
			pointStrokeColor: "#fff",
			pointHighlightFill: "#fff",
			pointHighlightStroke: "rgba(151,187,205,1)",
			data: populateData
		}]
	};
	var options = {};
	var ResumeRadar = new Chart(ctx).Radar(data, options);
}

var createProgramsChart = function(){
	var ctx = $("#resume-radar-programs").get(0).getContext("2d");

	var populateLabels = [], populateData = [];
	for(var item in programs){
		populateLabels.push(item);
		populateData.push(programs[item]);
	}

	var data = {
		labels: populateLabels,
		datasets: [{
			label: "Oguz",
			fillColor: "rgba(151,187,205,0.2)",
			strokeColor: "rgba(151,187,205,1)",
			pointColor: "rgba(151,187,205,1)",
			pointStrokeColor: "#fff",
			pointHighlightFill: "#fff",
			pointHighlightStroke: "rgba(151,187,205,1)",
			data: populateData
		}]
	};
	var options = {};
	var ResumeRadar = new Chart(ctx).Radar(data, options);
}

var createLanguagesChart = function(){
	var ctx = $("#resume-radar-languages").get(0).getContext("2d");

	var populateLabels = [], populateData = [];
	for(var item in languages){
		populateLabels.push(item);
		populateData.push(languages[item]);
	}

	var data = {
		labels: populateLabels,
		datasets: [{
			label: "Oguz",
			fillColor: "rgba(151,187,205,0.2)",
			strokeColor: "rgba(151,187,205,1)",
			pointColor: "rgba(151,187,205,1)",
			pointStrokeColor: "#fff",
			pointHighlightFill: "#fff",
			pointHighlightStroke: "rgba(151,187,205,1)",
			data: populateData
		}]
	};
	var options = {};
	var ResumeRadar = new Chart(ctx).Radar(data, options);
}