"use strict";
(function(){
	// Will update HTML page with current weather
	function updateWeather(data){
		var iconUrl;
		var weatherType;
		var day;
		var degreeSymbol = unescape('%B0'); //javascript version of the degree symbol for temps

		//used to go through each day, and update HTML elements for each id
		for(var i = 0; i < data.list.length; i++){
			day = data.list[i];

			iconUrl = "http://openweathermap.org/img/w/" + day.weather[0].icon + ".png";
			weatherType = getWeatherType(day.weather[0].id) + ": ";

			$("#max-min-" + i).text(day.temp.max + degreeSymbol + "/" + day.temp.min + degreeSymbol);
			$("#weather-img-" + i).attr("src", iconUrl);
			$("#weather-type-" + i).text(weatherType);
			$("#weather-description-" + i).text(day.weather[0].description);
			$("#humidity-" + i).text(day.humidity);
			$("#wind-" + i).text(day.speed);
			$("#pressure-" + i).text(day.pressure);
		}
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

	$.get("http://api.openweathermap.org/data/2.5/forecast/daily?", {
		units: "imperial",
		lat: "29.42", 
		lon: "-98.49",
		cnt: "3"
	}).done(updateWeather);
})();