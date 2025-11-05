<html>

<head>
    <title>PHP Function</title>
</head>

<body>
    <center>
        <?php

        function swap(&$a,&$b) //Follow call by reference concept
        {
            $c=$a;
            $a=$b;
            $b=$c;
        }

        $a=10;
        $b=20;
        echo "<br>Before swap ".$a." ".$b;
        swap($a,$b);
        echo "<br>After swap ".$a." ".$b;


        ?>
    </center>
</body>

</html>