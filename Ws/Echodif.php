<html>

<head>
    <title>Ws Wuestion in PHP</title>
</head>

<body>
    <center>
        <?php
        $name = 'Tarun';
        echo '<h1>Hello $name</h1>'; // Single not consider variable
        echo "<h1>Hello $name</h1>";

        $name = 'Linus';
        print '<h1>Hello $name</h1>';
        print "<h1>Hello " . $name . "</h1>";

        var_export($name); //🧰 var_dump() → For debugging (shows data type, length, and nested structure)

        #📦 var_export() → For exporting (shows code-like representation that PHP could re-create)
        echo "<br>";
        var_dump($name);
        echo "<br>";


        $arr = ["apple", "banana", "cherry"];

        var_export($arr);
        echo "<br>";
        var_dump($arr);

        ?>

    </center>
</body>

</html>