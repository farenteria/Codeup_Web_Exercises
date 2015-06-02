"use strict";
(function(){
	// Will update HTML page with current weather
	function updateWeather(data){
		console.log(data);
	}

	$.get("http://api.openweathermap.org/data/2.5/weather", {
		q: "San Antonio, TX"
	}).done(updateWeather);
})();