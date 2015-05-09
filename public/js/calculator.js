(function(){
	"use strict"

	var firstNum = "";
	var secondNum = "";
	var operator = "";
	var onFirstNumber = true;
	var firstNumField = document.getElementById("first-num-field");
	var operField = document.getElementById("oper-field");
	var secondNumField = document.getElementById("second-num-field");
	var clearButton = document.getElementById("clear");
	var equalsButton = document.getElementById("equals");
	var numbersButtons = document.getElementsByClassName("number");
	var operatorButtons = document.getElementsByClassName("operator");

	function onEquals(){
		onFirstNumber = true;

		firstNum = parseFloat(firstNum);
		secondNum = parseFloat(secondNum);

		switch(operator){
			case "+":
				firstNumField.value = firstNum + secondNum;
				break;
			case "-":
				firstNumField.value = firstNum - secondNum;
				break;
			case "*":
				firstNumField.value = firstNum * secondNum;
				break;
			case "/":
				firstNumField.value = firstNum / secondNum;
				break;
		}

		//everything but first text field will be cleared
		firstNum = "";
		secondNum = "";
		operator = "";
		operField.value = "";
		secondNumField.value = "";
	}

	//saves each number when pressed to approriate variable
	for(var i = 0; i < numbersButtons.length; i++){
		numbersButtons[i].addEventListener("click", function(){
			if(onFirstNumber){
				firstNum += this.innerHTML;
				firstNumField.value = firstNum;
					console.log(firstNum);
			} else{
				secondNum += this.innerHTML;
				secondNumField.value = secondNum;
			}
		});
	}

	//saves operator as a string
	for(var i = 0; i < operatorButtons.length; i++){
		operatorButtons[i].addEventListener("click", function(){
			operator = this.innerHTML;
			onFirstNumber = false;
			operField.value = operator;
		});
	}

	//when clear is pressed, clear everything
	clearButton.addEventListener("click", function(){
		firstNum = "";
		secondNum = "";
		operator ="";

		firstNumField.value = firstNum;
		secondNumField.value = secondNum;
		operField.value = operator;
	});

	//when equals is pressed, do operation and print in first field
	equalsButton.addEventListener("click", onEquals)
	//when Enter is pressed on second number field
	secondNumField.addEventListener("keypress", function(e){
		if(e.keyCode == 13){
			onEquals();
		}
	});
})();