"use strict";

// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

switch (color) {

    // todo: create a case statement that will handle every color except indigo and violet
    // todo: when a color is encountered log a message that tells the color, and an object of that color
    //       example: Blue is the color of the sky.
    case "red":
    	console.log("THE BLOOD OF MY ENEMIES IS RED! :D");
    	break;
    case "orange":
    	console.log("Carrots are orange.");
    	break;
    case "yellow":
    	console.log("My grandma's teeth are yellow");
    	break;
    case "green":
    	console.log("My cheese is green. Why is my cheese green");
    	break;
    case "blue":
    	console.log("Blue is the color of a potato if it were dunked in blue paint");
    	break;
    // todo: create a default case that will catch indigo and violet
    // todo: for the default case, log: I do not know anything by that color.
    default:
    	console.log("I do not know anything by that color.");
}