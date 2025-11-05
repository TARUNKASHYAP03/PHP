<html>

<head>
    <title>String Concept</title>
</head>

<body>
    <center>
        <?php

        // Two types array in php simple and assoicate

        // Simple array
        $arr_city = array("Delhi", "Ghaziabad", "Meerut", "Lucknow", "Kanpur", "Ranchi", "Patna");
        // echo $arr_city; //Array not print through echo diaplay through print_r
        // print_r($arr_city);

        for ($i = 0; $i < count($arr_city); $i++) {
            echo $arr_city[$i], "<br>";
        }

        // Associative Array
        // $city = array("a" => "Ghaziabad", "b" => "Merrut", "c" => "Modinagar");
        // print_r($city);
        // Associative Array (short syntax)
        $city = ["a" => "Ghaziabad", "b" => "Merrut", "c" => "Modinagar"];
        print_r($city);

        $info = [
            "name" => "Rahul",         // string
            "age" => 25,               // integer
            "is_student" => true,      // boolean
            "grades" => [90, 85, 88],  // nested array
            "height" => 5.9            // float
        ];
        echo "<br>";
        print_r($info);

        $age_old = array(
            "Peter" => "35",
            "Ben" => "37",
            "Joe" => "43"
        );

        $age_new = [
            "Peter" => "35",
            "Ben" => "37",
            "Joe" => "43"
        ];

        $cars = [
            ["Volvo", 22, 18],
            ["BMW", 15, 13],
            ["Saab", 5, 2]
        ];

        



        ?>
    </center>
</body>

</html>