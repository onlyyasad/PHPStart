<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constant in PHP</title>
</head>
<body>
    <center>
        <h1>Constant Define</h1>
        <?php 
            define("myAge", 25);
            define("herAge", 19);
            $totalAge = myAge + herAge;
            define("totalAgeBoth", myAge + herAge);

            echo "Couple age total: ".$totalAge;
            echo "<br>";
            echo "Couple age add: ".totalAgeBoth;
        ?>
    </center>
</body>
</html>