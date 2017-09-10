var overAllbackgroundColor = "#FFFFF7";
var coffteaThemeColor = "#483123";
var coffteaNormalText = "#5B4B27";
var transitionConfiguration = "linear 1s";
var lagoThemeColor = "#2a2a2a";

var category = $(".category");
var content = $(".content");
var entry_icon = $(".entry_icon");
var figure = $("figure");
var figcaption  = $("figcaption");
var enterBtn = $(".enterBtn");

var coffteaCategory = category[0];
var lagoCategory  = category [1];

var coffteaContent = content[0];
var lagoContent = content[1];

var coffteaEntry = entry_icon[0];
var lagoEntry = entry_icon[1];

var lagoFigure = figure[1];
var coffteaFigure = figure[0];
var coffteaFigcaption = figcaption[0];
var lagoFigcaption = figcaption[1];

var coffteaButton = enterBtn[0] , lagoButton = enterBtn[1];
/*$(document).ready(function(){
	$(coffteaFigcaption).css({"color" : "#5B4B27"});
});*/
$(document).ready(function() {
	$(coffteaCategory).mouseenter(function() {
		// $("#maincontainer").css({
		// 	"background-image": "url()",
		// 	"background-repeat": "no-repeat",
		// 	"background-size": "inherit inherit",
		// 	"background-position" : "center"
		// });
		$(this).css({
			"background-color": coffteaThemeColor,
			"transition" :transitionConfiguration
		});
		$(coffteaContent).css({
			"transition" :transitionConfiguration,
			"background-color":  coffteaThemeColor,
		});
		$(coffteaEntry).css({
			"transition" :transitionConfiguration,
			"background-color":  coffteaThemeColor,
		});
		$(coffteaFigure).css({
			"transition" :transitionConfiguration,
			"background-color":  coffteaThemeColor, 
			"color": overAllbackgroundColor
		})
		$(coffteaFigcaption).css({
			"transition" :transitionConfiguration,
			"background-color":  coffteaThemeColor, 
			"color": overAllbackgroundColor
		})
		$(coffteaButton).css({
			"transition" : "linear 1s",
			"border": "3px solid #e67e22",
			"color" : overAllbackgroundColor,
			"box-shadow" : "0px 0px 15px #2a2a2a",
			"background-color" : coffteaThemeColor
		});
	});
	$(coffteaCategory).mouseleave(function() {
		$(this).css({
			"background-color": overAllbackgroundColor,
			"transition" :transitionConfiguration
		});
		$(coffteaContent).css({
			"transition" :transitionConfiguration,
			"background-color":  overAllbackgroundColor, 
			"color": coffteaNormalText,
		});
		$(coffteaEntry).css({
			"transition" :transitionConfiguration,
			"background-color":  overAllbackgroundColor, 
			"color": coffteaNormalText
		});
		$(coffteaFigure).css({
			"transition" :transitionConfiguration,
			"background-color": overAllbackgroundColor, 
			"color": coffteaNormalText
		});
		$(coffteaFigcaption).css({
			"transition" :transitionConfiguration,
			"background-color": overAllbackgroundColor, 
			"color": coffteaNormalText
		});
		$(coffteaButton).css({
			"transition" : "linear 1s",
			"border": "3px solid #e67e22",
			"color" : coffteaNormalText,
			"box-shadow" : "0px 0px 5px #2a2a2a",
			"background-color": overAllbackgroundColor
		});
	});
	
	$(lagoCategory).mouseenter(function() {
		$(this).css({
			"background-color": lagoThemeColor,
			"transition" :transitionConfiguration
		});
		$(lagoContent).css({
			"transition" :transitionConfiguration,
			"background-color":  lagoThemeColor
		});
		$(lagoEntry).css({
			"transition" :transitionConfiguration,
			"background-color":   lagoThemeColor,
		});
		$(lagoFigure).css({
			"transition" :transitionConfiguration,
			"background-color":   lagoThemeColor, 
			"color": overAllbackgroundColor
		})
		$(lagoFigcaption).css({
			"transition" :transitionConfiguration,
			"background-color":   lagoThemeColor, 
			"color": overAllbackgroundColor
		})
		$(lagoButton).css({
			"transition" : "linear 1s",
			"border": "3px solid gray",
			"color" : overAllbackgroundColor,
			"box-shadow" : "0px 0px 15px #2a2a2a",
			"background-color": lagoThemeColor
		});
	});
	$(lagoCategory).mouseleave(function() {
		$(this).css({
			"background-color": overAllbackgroundColor,
			"transition" :transitionConfiguration
		});
		$(lagoContent).css({
			"transition" :transitionConfiguration,
			"background-color":  overAllbackgroundColor, 
			"color": "black"
		});
		$(lagoEntry).css({
			"transition" :transitionConfiguration,
			"background-color":  overAllbackgroundColor, 
			"color": "black"
		});
		$(lagoFigure).css({
			"transition" :transitionConfiguration,
			"background-color": overAllbackgroundColor, 
			"color": "black"
		});
		$(lagoFigcaption).css({
			"transition" :transitionConfiguration,
			"background-color": overAllbackgroundColor, 
			"color": "black"
		});
		$(lagoButton).css({
			"transition" : "linear 1s",
			"border": "3px solid black",
			"color" : "black",
			"box-shadow" : "0px 0px 5px #2a2a2a",
			"background-color" : overAllbackgroundColor
		});
	});
});


$(document).ready(function() {
	$(coffteaButton).mouseenter(function(){
		$(this).css({
			"transition" : "linear .5s",
			"border": "3px solid" + coffteaNormalText,
			"color" : overAllbackgroundColor,
			"box-shadow" : "0px 0px 15px #2a2a2a",
			"background-color" : "#e74c3c"
		});
	});
	$(coffteaButton).mouseleave(function(){
		$(this).css({
			"transition" : "linear .5s",
			"border": "3px solid maroon",
			"color" : overAllbackgroundColor,
			"box-shadow" : "0px 0px 5px #2a2a2a",
			"background-color" : coffteaThemeColor
		});
	});
});



$(document).ready(function() {
	$(lagoButton).mouseenter(function(){
		$(this).css({
			"transition" : "linear .5s",
			"border": "3px solid gray",
			"color" : overAllbackgroundColor,
			"box-shadow" : "0px 0px 15px gray",
			"background-color" : "#151515"
		});
	});
	$(lagoButton).mouseleave(function(){
		$(this).css({
			"transition" : "linear .5s",
			"border": "3px solid black",
			"color" : overAllbackgroundColor,
			"box-shadow" : "0px 0px 5px gray",
			"background-color" : "#2a2a2a"
		});
	});
});