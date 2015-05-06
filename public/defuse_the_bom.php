<!DOCTYPE html>
<html>
<head>
    <title>Defuse the BOM</title>
    <style>
        #defuser{
            position: absolute;
        }
    </style>
</head>
<body>
    <h2 id="message">This BOM will self destruct in <span id="timer">5</span> seconds...</h2>

    <button id="defuser">Defuse the BOM</button>

    <script>
        var detonationTimer = 5;
        var timerInterval = setInterval(updateTimer, 1000);
        var mustDefuse = true; //for button change
        var button = document.getElementById("defuser");
        var body = document.body;

        // TODO: This function needs to be called once every second
        function updateTimer(){
            if (detonationTimer == 0) {
                alert('EXTERMINATE!');
                clearInterval(timerInterval); //no need for this one to keep running
                changeBodyOnExplode();
            } else if (detonationTimer > 0) {
                document.getElementById('timer').innerHTML = detonationTimer;
            }

            detonationTimer--;
        }

        // TODO: When this function runs, it needs to
        // cancel the interval/timeout for updateTimer()
        function defuseTheBOM(){
            clearInterval(timerInterval);
            button.innerHTML = "Start timer again";
            alert("MY HERO!!!");
        }

        function buttClick(){

            if(mustDefuse){ //countdown goes inactive if button is clicked while countdown is active
                defuseTheBOM();
                mustDefuse = false;
            } else{ //countdown goes active if button is clicked while countdown is inactive
                button.innerHTML = "Defuse the BOM";
                timerInterval = setInterval(updateTimer, 1000);
                mustDefuse = true;
            }

            //moves button in random position (according to window size constraints)
           button.style["top"] = Math.floor(Math.random() * window.innerHeight) + "px";
           button.style["left"] = Math.floor(Math.random() * window.innerWidth) + "px";
        }

        function changeBodyOnExplode(){
            body.style["background-color"] = "red";
            body.innerHTML = "";

            //creates new paragraph with text, and adds it to body
            var paragraph = document.createElement("P");
            var paragraphText = document.createTextNode("BOOM");
            paragraph.appendChild(paragraphText);
            body.appendChild(paragraph);

            paragraph.style["position"] = "absolute";
            paragraph.style["font-size"] = "100px";

            setInterval(function (){
                var randomHeight;
                var randomWidth;

                //helps to keep text mostly visible. if there's a better way, i'll change it
                do{
                    randomHeight = Math.round(Math.random() * window.innerHeight - 250);
                    randomWidth = Math.round(Math.random() * window.innerWidth - 250);
                } while(randomHeight < 0 || randomWidth < 0);

                randomHeight = randomHeight + "px";
                randomWidth = randomWidth + "px";

                paragraph.style["top"] = randomHeight;
                paragraph.style["left"] = randomWidth;
            }, 1000);
        }

        // Don't modify anything below this line!
        //
        // This causes the defuseTheBOM() function to be called
        // when the "defuser" button is clicked.
        // We will learn about events in the DOM lessons
        var defuser = document.getElementById('defuser');
        defuser.addEventListener('click', buttClick, false);
    </script>
</body>
</html>
