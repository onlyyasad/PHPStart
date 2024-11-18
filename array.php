<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array in PHP</title>
</head>
<body>
    <center>
    <?php 
        $normalArray = array("Dhaka", "Mymensingh", "Barisal", "Khulna");
        $normalArray2 = array("Rahim", "Karim", "Badshah", "Gulam");

        //Two ways to print array in php
        //1. each element of array

        //for loop
        for($i=0; $i<count($normalArray); $i++)
        {
            echo "".$normalArray[$i]."<br>";
        }

        //while loop
        $i = 0;
        while($i<count($normalArray2))
        {
            echo "".$normalArray2[$i]."<br>";
            $i++;
        }

        //2. complete array
        print_r($normalArray);

        echo "<br>";
        echo "<br>";

        $associativeArray = ["a"=>"Dhaka","b"=>"Mymensingh","c"=>"Barisal"];
        print_r($associativeArray)
    
    
    ?>
    </center>
</body>
</html>