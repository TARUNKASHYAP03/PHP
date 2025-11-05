<!DOCTYPE html>
<html>
<head>
    <title>PHP Data Types Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        .container {
            width: 60%;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        pre {
            background: #eee;
            padding: 10px;
            border-radius: 5px;
            font-size: 14px;
        }
        .datatype {
            margin-bottom: 15px;
        }
        .label {
            font-weight: bold;
            color: #0066cc;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>PHP Data Types Demo</h2>

    <?php
    // Integer
    $a = 10;
    echo "<div class='datatype'><span class='label'>Integer:</span> $a</div>";

    // Float
    $b = 10.5;
    echo "<div class='datatype'><span class='label'>Float:</span> $b</div>";

    // String
    $str = "Hello";
    echo "<div class='datatype'><span class='label'>String:</span> $str</div>";

    // Boolean
    $d = true;
    echo "<div class='datatype'><span class='label'>Boolean:</span> $d</div>"; // true prints 1

    // Array
    $arr = array("Apple", "Mango", "Grapes", "Orange");
    echo "<div class='datatype'><span class='label'>Array:</span><pre>";
    print_r($arr);
    echo "</pre></div>";

    // Null
    $e = null;
    echo "<div class='datatype'><span class='label'>Null:</span> ";
    var_export($e);
    echo "</div>";
    ?>
</div>

</body>
</html>
