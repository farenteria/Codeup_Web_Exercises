"use strict";
(function(){
	// Will update HTML page with current weather
	function updateWeather(data){
		console.log(data);
		var iconUrl = "http://openweathermap.org/img/w/" + data.weather[0].icon + ".png";
		var weatherType = getWeatherType(data.weather[0].id) + ": ";
		var degreeSymbol = unescape('%B0');

		$("#max-min-1").text(data.main.temp_max + degreeSymbol + "/" + data.main.temp_min + degreeSymbol);
		$("#weather-img-1").attr("src", iconUrl);
		$("#weather-type-1").text(weatherType);
		$("#weather-description-1").text(data.weather[0].description);
		$("#humidity-1").text(data.main.humidity);
		$("#wind-1").text(data.wind.speed);
		$("#pressure-1").text(data.main.pressure);
	}

	// returns a type of weather according to the openweathermap id
	function getWeatherType(weatherId){
		if(weatherId >= 200 && weatherId <= 232){
			return "Thunderstorm";
		} else if(weatherId >= 300 && weatherId <= 321){
			return "Drizzle";
		} else if(weatherId >= 500 && weatherId <= 531){
			return "Rain";
		} else if(weatherId >= 600 && weatherId <= 622){
			return "Snow";
		} else if(weatherId >= 701 && weatherId <=781){
			return "Atmosphere";
		} else if(weatherId >= 800 && weatherId <= 804){
			return "Clouds";
		} else if(weatherId >= 900 && weatherId <= 906){
			return "Extreme";
		} else{
			return "Wind";
		}
	}

	$.get("http://api.openweathermap.org/data/2.5/weather", {
		units: "imperial",
		lat: "29.42", 
		lon: "-98.49"
	}).done(updateWeather);
})();