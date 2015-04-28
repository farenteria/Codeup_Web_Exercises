// Set the upper limit of the collection of numbers one can guess
var maxNumber = 20;
var playAgain = true;
var cancel = false;
var answer;
var guess;

playGame();

/* has its own function so it doesn't pop up automatically
 when page is (re)loaded */
function playGame(){
	while(playAgain){
		//answer will be random for every new game
		answer = Math.floor((Math.random() * maxNumber) + 1);
		console.log(answer); //answer is in console

		guess = prompt("I'm thinking of a number between one and " 
			+ maxNumber + ". Guess what number I'm thinking of!");

		hitCancel();

		while(guess != answer){
			hitCancel();

			if(guess > answer && !cancel){
				guess = prompt("Too high! Try something lower.");
			} else{
				guess  = prompt("You're lowballing me, bro. Guess a bit higher.");
			}
		}

		/* this check is to see if user clicked cancel at some point.
		   The answer won't be revealed, because the user doesn't 
		   deserve it */
		if(playAgain != false){
			alert("You got the answer: " + answer + "! Congrats!");
			playAgain = confirm("Play Again?");
			hitCancel();
		}
	}
}

// whenever user hits cancel button, it ends game
function hitCancel(){
	if(guess == null){
		alert("Okay! See you later!");
		playAgain = false;
		guess = answer;
		cancel = true;
	}
}