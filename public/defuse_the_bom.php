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
        function updateTimer()
        {
            if (detonationTimer == 0) {
                alert('EXTERMINATE!');
                changeBodyOnExplode();
            } else if (detonationTimer > 0) {
                document.getElementById('timer').innerHTML = detonationTimer;
            }

            detonationTimer--;
        }

        // TODO: When this function runs, it needs to
        // cancel the interval/timeout for updateTimer()
        function defuseTheBOM()
        {
            clearInterval(timerInterval);
            button.innerHTML = "Start timer again";
            alert("MY HERO!!!");
        }

        function buttClick(){
            //random number between 0 and size of window (inclusive)
            var randomHeight = Math.floor(Math.random() * window.innerHeight) + "px";
            var randomWidth = Math.floor(Math.random() * window.innerWidth) + "px";
            console.log(randomHeight + " " + randomWidth);

            if(mustDefuse){ //countdown goes inactive if button is clicked while countdown is active
                defuseTheBOM();
                mustDefuse = false;
            } else{ //countdown goes active if button is clicked while countdown is inactive
                button.innerHTML = "Defuse the BOM";
                timerInterval = setInterval(updateTimer, 1000);
                mustDefuse = true;
            }

            //moves button in random position (according to random constraints)
           button.style["top"] = randomHeight;
           button.style["left"] = randomWidth;
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
            paragraph.style["font-size"] = "500%";

            setInterval(function (){
                var randomHeight = Math.floor(Math.random() * window.innerHeight) + "px";
                var randomWidth = Math.floor(Math.random() * window.innerWidth) + "px";
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
