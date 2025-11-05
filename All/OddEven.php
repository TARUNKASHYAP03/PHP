<html>

<head>
    <title>String Concept</title>
</head>

<body>
    <center>
        <?php

        // $arr=array("Btech","MCA","PolyTechnic","BCA","BBA","BED","MCA","BCA");
        // $newarr=array_unique($arr);
        // print_r($newarr);

        function sum($n){
            if ($n%2==0)
                echo $n." Even<br>";
            else
                echo $n." Odd <br>";
        }

        $arrn=array(2,3,4,5,6,7,78,8,3,5,4,5,2);

        $newa=array_map('sum',$arrn);

        ?>
    </center>
</body>

</html>