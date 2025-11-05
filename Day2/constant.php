<html><head><title>PHP Constant</title></head>
<body>
    <center>
        <?php

        // $a=100;
        // echo $a;

        echo "<br>";
        define('Pi', 3.14);
        
        echo Pi;
        $r=12.45;

        $ar=Pi*$r*$r;
        $c=2*Pi*$r;
        echo "<br> Area : ".$ar;
        echo "<br> Circum : ".$c;
        

        ?>
    </center>
</body>
</html>