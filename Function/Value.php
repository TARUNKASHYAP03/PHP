<html>

<head>
    <title>PHP Function</title>
</head>

<body>
    <center>
        <?php

        function show($a,$b) //call by value ya copy by value
        {
            $a+=100;
            $b+=200;
        }

        $a=10;
        $b=20;
        
        show($a,$b);
        echo $a." ".$b;

        function dshow(&$s,&$t) //call by reference ya copy by reference
        {
            $s+=100;
            $t+=200;
        }

        $s=10;
        $t=20;
        
        dshow($s,$t);
        echo "<br>".$s." ".$t;


        ?>
    </center>
</body>

</html>