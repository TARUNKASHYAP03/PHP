<html>

<head>
    <title>PHP Function</title>
</head>

<body>
    <center>
        <?php

        function sum(...$a) //Parameter var args
        {
            $sum = 0;
            foreach ($a as $m) {
                $sum += $m;
            }
            return $sum; //Return
        }

        $aa=sum(10, 20, 20, 30, 50);
        echo "Sum is ".$aa;
        // sum(10,10);

        ?>
    </center>
</body>

</html>