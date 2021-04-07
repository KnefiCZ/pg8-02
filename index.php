<?php require_once "functions.php"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .dead {
            transform: rotate(180deg);
        }
        html {
        cursor: crosshair;
        }
    </style>
    <script>

    function kill(id) {
    //alert("Auvajs! Kvák! řekla: " + id);
    var duck = document.getElementById(id);
    duck.classList.add('dead');
    }

    </script>

</head>
<body>
<?php 

        define('DUCKS_COUNT', 20);


        for ($i=0; $i < DUCKS_COUNT; $i++) { 
            
            $size = rand(20,150);
            $positionLeft = rand(0,95);
            $positionTop = rand(0,95);
            $color = rand_color();
            $id = "duck-" . $i;

            drawDuck($size,$positionLeft,$positionTop, $color, $id);
        }

?>
</body>
</html>