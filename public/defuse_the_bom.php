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

    <script src="/js/jquery-2.1.4.min.js"></script>
    <script>
        var detonationTimer = 5;
        var timerInterval = setInterval(updateTimer, 1000);
        var mustDefuse = true; //for button change
        var random;
        var defuser;

        // TODO: This function needs to be called once every second
        function updateTimer(){
            if (detonationTimer == 0) {
                alert('EXTERMINATE!');
                clearInterval(timerInterval); //no need for this one to keep running
                changeBodyOnExplode();
            } else if (detonationTimer > 0) {
                $("#timer").text(detonationTimer);
            }

            detonationTimer--;
        }

        // TODO: When this function runs, it needs to
        // cancel the interval/timeout for updateTimer()
        function defuseTheBOM(){
            clearInterval(timerInterval);
            $("#defuser").text("Start timer again");
            alert("MY HERO!!!");
        }

        function buttClick(){

            if(mustDefuse){ //countdown goes inactive if button is clicked while countdown is active
                defuseTheBOM();
                mustDefuse = false;
            } else{ //countdown goes active if button is clicked while countdown is inactive
                $("#defuser").text("Defuse the BOM");
                timerInterval = setInterval(updateTimer, 1000);
                mustDefuse = true;
            }

            //moves button in random position (according to window size constraints)
            random = Math.floor(Math.random() * window.innerHeight) + "px";
            $("#defuser").css("top", random); 
            
            random = Math.floor(Math.random() * window.innerWidth) + "px";
            $("#defuser").css("left", random);
        }

        function changeBodyOnExplode(){
            $("body").css("background-color", "red");
            $("body").text("");

            //creates new paragraph with text, and adds it to body
            $("body").append("<p>BOOM</p>");
            $("p").css("position", "absolute");
            $("p").css("font-size", "100px");

            setInterval(function (){
                var randomHeight;
                var randomWidth;

                //helps to keep text mostly visible. if there's a better way, i'll change it
                do{
                    randomHeight = Math.round(Math.random() * window.innerHeight - $("p").height());
                    randomWidth = Math.round(Math.random() * window.innerWidth - $("p").width());
                } while(randomHeight < 0 || randomWidth < 0);

                randomHeight = randomHeight + "px";
                randomWidth = randomWidth + "px";

                $("p").css("top", randomHeight);
                $("p").css("left", randomWidth);
            }, 1000);
        }

        $("#defuser").click(buttClick);
    </script>
</body>
</html>
