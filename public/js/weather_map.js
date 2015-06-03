"use strict";
(function(){
	var latitude;
	var longitude;
	var units;
	var days;
	var mapOptions;
	var map;
	var marker;

	// Will update HTML page with current weather
	function updateWeather(data){
		var iconUrl;
		var weatherType;
		var day;
		var degreeSymbol = unescape('%B0'); //javascript version of the degree symbol for temps

		$("#city-name").text(data.city.name);

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

	function getWeather(){
		$("#city-name").text("Loading");
		$.get("http://api.openweathermap.org/data/2.5/forecast/daily?", {
			units: units,
			lat: latitude, 
			lon: longitude,
			cnt: days
		}).done(updateWeather);
	}

	function placeMarker(location){
		marker = new google.maps.Marker({
			position: location,
			map: map
		});
	}

	//initial load in San Antonio
	latitude = "29.42";
	longitude = "-98.49";
	days = "3";
	units = "imperial";

	getWeather();

	//load new city when user clicks on button
	$("#button").on("click", function(){
		latitude = $("#latitude").val();
		longitude = $("#longitude").val();
		
		getWeather();
	});

	//loading initial map
	latitude = 37.09024;
	longitude = -95.712891;
	mapOptions = {
		zoom: 4,
		center: {
			lat: latitude,
			lng: longitude
		}
	};

	map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

	google.maps.event.addListener(map, "click", function(event){
		//deletes marker if there was one placed previously
		if(marker != null){
			marker.setMap(null);
		}

		placeMarker(event.latLng);
		zoom: 15;

		//get position of click
		latitude = event.latLng.lat();
		longitude = event.latLng.lng();
		getWeather();
	});
})();