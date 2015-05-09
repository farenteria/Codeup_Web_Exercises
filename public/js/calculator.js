(function(){
	"use strict"

	var firstNum = "0";
	var secondNum = "0";
	var operator = "0";
	var firstNumField = document.getElementById("first-num-field");
	var operField = document.getElementById("oper-field");
	var secondNumField = document.getElementById("second-num-field");
	var numbersButtons = document.getElementsByClassName("number");
	var operatorButtons = document.getElementsByClassName("operator");
	var onFirstNumber = true;

	for(var i = 0; i < numbersButtons.length; i++){
		numbersButtons[i].addEventListener("click", function(){
			if(onFirstNumber){
				firstNum += this.innerHTML;
				console.log(firstNum);
			} else{
				secondNum += this.innerHTML;
				console.log(secondNum);
			}
		});
	}

	for(var i = 0; i < operatorButtons.length; i++){
		operatorButtons[i].addEventListener("click", function(){
			operator = this.innerHTML;
			console.log(operator);
		});
	}
})();