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

        // TODO: This function needs to be called once every second
        function updateTimer()
        {
            if (detonationTimer == 0) {
                alert('EXTERMINATE!');
                document.body.innerHTML = '';
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
            document.getElementById("defuser").innerHTML = "Start timer again";
            alert("MY HERO!!!");
        }

        function buttClick(){
            if(mustDefuse){
                defuseTheBOM();
                mustDefuse = false;
            } else{
                timerInterval = setInterval(updateTimer, 1000);
                document.getElementById("defuser").innerHTML = "Defuse the BOM";
                mustDefuse = true;
            }
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