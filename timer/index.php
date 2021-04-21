<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body onload="prepareBoard()">
    <?php
    require('class/GameManager.class.php');

    session_start();

    if(isset($_SESSION['gm'])) {
        $gm = $_SESSION['gm'];
    } else {
        $gm = new GameManager();
        $_SESSION['gm'] = $gm;
    }
    

    
    ?>




    <form action="#" id="moveForm" method="POST">
        <input type="hidden" name="source" id="source">
        <input type="hidden" name="target" id="target">
        <!--<input type="submit" value="Przesuń figurę"><br>-->
    </form>

    <?php

    if (isset($_REQUEST['source']) && isset($_REQUEST['target'])) {
        $source = $_REQUEST['source'];
        $target = $_REQUEST['target'];
        echo "<h3>pion z pola $source na pole $target</h3>";
        $gm->movePiece($source, $target);
    }


        echo $gm->getBoardHTML();

        echo $gm->turn();
        echo $gm->timer();
    ?>
    <script>
        function prepareBoard() {
            let container = document.getElementById('grid-container');
            container.childNodes.forEach(function(element) {
                element.addEventListener("click", fieldClick);
            });

        }

        function fieldClick(e) {
            let source = document.getElementById('source');
            let target = document.getElementById('target');

            if (source.value) { //jeżeli podano źródło
                target.value = e.currentTarget.id;
                document.getElementById('moveForm').submit();
            } else { //jeżeli jeszcze nie ma źródła
                source.value = e.currentTarget.id;
            }
        }
    </script>

<script type="text/javascript">
    // Initialize clock countdowns by using the total seconds in the elements tag
    secs       = parseInt(document.getElementById('countdown-1').innerHTML,10);
    countdown('countdown-1',secs);
    secs       = parseInt(document.getElementById('countdown-2').innerHTML,10);
    countdown('countdown-2',secs);

    function countdown(id, timer){
        minRemain  = Math.floor(timer / 60);
        secsRemain = String(timer - (minRemain * 60)).padStart(2, '0');
       

        // String format the remaining time
        clock      = minRemain + ":" + secsRemain;
        document.getElementById(id).innerHTML = clock;
        if (id == "countdown-1" && document.getElementById('turn').innerHTML == "Ruch czarnych") return;
        if (id == "countdown-2" && document.getElementById('turn').innerHTML == "Ruch białych") return;
        timer--;
        if ( timer > 0 ) {
            // Time still remains, call this function again in 1 sec
            setTimeout(countdown.bind(null, id, timer), 1000);
        }
        
    }
</script>

</body>

</html>