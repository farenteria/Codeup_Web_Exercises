"use strict";
(function(){
	var address = "3329 Fort Blvd, El Paso, TX 79930"; //Cicala's Pizza. Yeah, boi
	var geocoder = new google.maps.Geocoder();
	var cicalasLocation = " 3329 Fort Blvd, El Paso, TX 79930";
	var marker;
	var map;
	var mapOptions;
	var infoWindow;

	//makes marker bounce like if it was in a hip hop video
	function startMarkerAnimation(){
		marker.setAnimation(google.maps.Animation.BOUNCE);
		marker.setOpacity(1.0);
	}

	//stops the bouncing
	function stopMarkerAnimation(){
		infoWindow.open(map, marker);	
		marker.setAnimation(null); //stop marker animation
		marker.setOpacity(0.7);		
	}

	geocoder.geocode({ 
		"address": address
	}, 
	function(results, status){
		if(status == google.maps.GeocoderStatus.OK){
			//initial map options
			mapOptions = {
				zoom: 15,
				center: { 
					lat: 31.806325, 
					lng: -106.454533}
				}

			map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

			//puts marker right on top of the restaurant. 
			marker = new google.maps.Marker({
				position: results[0].geometry.location,
				map: map,
				icon: "/img/pizza_icon.png"
			});

			startMarkerAnimation(); 

			//creates an info window with name of resteraunt
			infoWindow = new google.maps.InfoWindow({
				content: "Cicala's Italian Pizza (Don't trust Street View)",
			});

			//opens info window when marker is clicked
			google.maps.event.addListener(marker, "click", function(){
				stopMarkerAnimation();
				map.setZoom(18); //zoom in on the bad boy
			});

			//when info window is close, marker starts bouncing again
			google.maps.event.addListener(infoWindow, "closeclick", startMarkerAnimation);
		} else{
			alert("Geocode unsuccessful, status: " + status);
		}
	});
})();