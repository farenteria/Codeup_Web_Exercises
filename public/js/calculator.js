(function(){
	"use strict"

	var firstNum = "";
	var secondNum = "";
	var operator = "";
	var firstNumField = document.getElementById("first-num-field");
	var operField = document.getElementById("oper-field");
	var secondNumField = document.getElementById("second-num-field");
	var clearButton = document.getElementById("clear");
	var numbersButtons = document.getElementsByClassName("number");
	var operatorButtons = document.getElementsByClassName("operator");
	var onFirstNumber = true;

	for(var i = 0; i < numbersButtons.length; i++){
		numbersButtons[i].addEventListener("click", function(){
			if(onFirstNumber){
				firstNum += this.innerHTML;
				console.log("First Number: " + firstNum);
			} else{
				secondNum += this.innerHTML;
				console.log("Second Number: " + secondNum);
			}
		});
	}

	for(var i = 0; i < operatorButtons.length; i++){
		operatorButtons[i].addEventListener("click", function(){
			operator = this.innerHTML;
			onFirstNumber = false;
			console.log("Operator: " + operator);
		});
	}

	clearButton.addEventListener("click", function(){
		firstNum = "";
		secondNum = "";
		operator ="";
	})
})();