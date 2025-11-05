<html>

<head>
    <title>PHP Function</title>
</head>

<body>
    <center>
        <?php

        function sum($a,$b) //Parameter
        {
            $sum=$a+$b;
            echo "<br>Sum is ".$sum;
        }

        sum(10,20);//Arguments
        sum(102,420);//Arguments
        sum(100,220);//Arguments

        ?>
    </center>
</body>

</html>