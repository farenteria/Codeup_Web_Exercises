"use strict";
(function(){
	// Will update HTML page with current weather
	function updateWeather(data){
		console.log(data);
		var iconUrl = "http://openweathermap.org/img/w/" + data.weather[0].icon + ".png";
		$("#max-min-1").text(data.main.temp_max + "/" + data.main.temp_min + unescape('%B0'));
		$("#weather-img-1").attr("src", iconUrl);
	}

	$.get("http://api.openweathermap.org/data/2.5/weather", {
		units: "imperial",
		lat: "29.42", 
		lon: "-98.49"
	}).done(updateWeather);
})();