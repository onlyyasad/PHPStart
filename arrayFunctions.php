<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array functions in PHP</title>
</head>
<body>
    <center>
        <?php 
            $numArray1 = array(4, 5, 6, 10, 8, 2);

            function sum($n)
            {
                return $n + 2;
            }

            function evenOddFinder($n)
            {
                $result = $n % 2;
                if($result)
                return "odd";
                else
                return "even";
            }
        
            $arrayAfterSum = array_map("sum", $numArray1);
            print_r($arrayAfterSum);
            echo "<br>";

            $evenOrOdd = array_map("evenOddFinder", $numArray1);
            print_r($evenOrOdd);
        
        ?>
    </center>
</body>
</html>