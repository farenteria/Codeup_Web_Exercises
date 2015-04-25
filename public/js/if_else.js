// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'green'; // TODO: change this to your favorite color from the list

// TODO: Create a block of if/else statements to check for every color except indigo and violet.
// TODO: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.
if(color == "red"){
	console.log("THE BLOOD OF MY ENEMIES IS RED :D");
} else if(color == "orange"){
	console.log("The carrot is orange. I repeat: the carrot is orange");
} else if(color == "yellow"){
	console.log("My grandma's teeth are yellow");
} else if(color == "green"){
	console.log("My cheese is green. Why is my cheese green?");
} else if(color == "blue"){
	console.log("Blue is the color of a potato if it were dunked in blue paint");
}

// TODO: Have a final else that will catch indigo and violet.
// TODO: In the else, log: I do not know anything by that color.
else if(color == "violet" || color == "indigo"){
	console.log("Violet is the name of the oldest Baudelaire orphan.");
	console.log("Indigo is a color.");
} else{
	console.log("I do not know anything by that color.");
}
// TODO: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.
(color == "green") ? console.log("This is my favorite color.") : console.log("This is not my favorite color, and I'm angry");