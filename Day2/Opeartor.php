<html>

<head>
    <title>
        PHP Opeartor
    </title>
</head>

<body>
    <center>
        <?php

        // Types of Opeartor
        // Arithmatic Opeartor + - / * ** %
        echo (10 + 10) . "<br>";
        echo (10 - 10) . "<br>";
        echo (10 * 10) . "<br>";
        echo (10 ** 3) . "<br>";
        echo (10 / 2) . "<br>";
        echo (10 % 2) . "<br>";

        // Relational Opeartor > < >= <= == != === !==,<> depend on true and false
        $a = 10;
        $b = "10";

        echo ($a == $b) . "<br>";   // true  (same value)
        echo ($a === $b) . "<br>";  // false (different type) datatype
        echo ($a != $b) . "<br>";   // false (same value)
        echo ($a <> 5) . "<br>";    // true  (not equal)
        echo ($a >= 10) . "<br>";   // true
        echo ($a <= 5) . "<br>";    // false

        $c = 5;
        $d = true;
        if (($a == $c) == $d)
            echo "Tarun";
        else
            echo "Bye bye";

        // Increment and decrement Opeartor ++ --

        $t = 10;
        ++$t; //t=1+t;
        echo "<br>" . $t;
        $t--; //t=t-1
        echo "<br>" . $t;

        $tt = ++$t;
        $ttt = $t++;
        echo "<br>" . $tt;
        echo "<br>" . $ttt;
        echo "<br>" . $t;
        echo "<br>";
        if (++$t > 12)
            echo "Hello";
        else
            echo "bye bye";

        // Assigment
        // $a=5;
        // $b=++$a;
        // $c=$b--;
        // $a=++$b;
        // $d=$a+ ++$a+$a++;
        // echo d

        // logical Opeartor &&(all true)/and and ||(any one true)/or and Not(!=)

        $lp=50;
        $lb=100;

        if ($lp>40 && $lb>90)
            echo "<br>Yes True";
        else
            echo "<br>Bye Friend";

        // Strin Opeartor

        $str="Tarun";
        $str1="Kumar";
        echo "<br>";
        echo $str." ".$str1;

        
        ?>
    </center>
</body>

</html>