<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Datatypes</title>
</head>
<body>
    <center>
        <?php 

            /*
            1. int
            2. float
            3. string
            4. boolean
            5. array
            6. object
            7. null
            */

            $age = 12; //int

            $weight = 35.4; //float

            $name = "Habib"; //string

            $isStudent = TRUE; //boolean

            $friends = array("Hamid", "Dev", "Roman"); //array

            class Student
            {
                // Properties
                public $name;
                public $age;
                public $weight;
                public $isStudent;
                public $friends;

                // Constructor to initialize properties
                public function __construct($name, $age, $weight, $isStudent, $friends)
                {
                    $this->name = $name;
                    $this->age = $age;
                    $this->weight = $weight;
                    $this->isStudent = $isStudent;
                    $this->friends = $friends;
                }

                // Method to display student details
                public function displayInfo()
                {
                    echo "Name: " . $this->name . PHP_EOL;
                    echo "Age: " . $this->age . PHP_EOL;
                    echo "Weight: " . $this->weight . " kg" . PHP_EOL;
                    echo "Is Student: " . ($this->isStudent ? "Yes" : "No") . PHP_EOL;
                    echo "Friends: " . implode(", ", $this->friends) . PHP_EOL;
                }
            }
            $student = new Student($name, $age, $weight, $isStudent, $friends);

            // Display the student information
            $student->displayInfo();

            $a = TRUE;
            
            $b = FALSE;

            $c = array("Rahim", "Karim", "Zaved");

            $num1 = 34;

            $num2 = 55;

            if($num1 > $num2)
                echo "<br> Greater value is:".$num1;
            else
                echo "<br> Greater value is:".$num2;

            echo "<br>";

            echo $a;
            echo "<br>";
            echo $b;
            echo "<br>";
            print_r($c); //We can't print array using echo in PHP, we have to use print_r instead
        
        ?>
    </center>
</body>
</html>