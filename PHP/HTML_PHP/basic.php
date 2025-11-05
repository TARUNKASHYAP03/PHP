<html>

<head>
    <title>PHP in HTML</title>
</head>

<body>
    <center>
        <?php
        $h2_h3_color="blue";

        /*
        php used in html for dynamic website develop karne ke liye
        */
        echo "<h1 style='color:green'>Hello Tarun HTML in php</h1>";
        echo "<h1 style='color:red'>Hello Tarun HTML in php</h1>";
        echo "<h1 style='color:blue'>Hello Tarun HTML in php</h1>";


        ?>

        <?php
        $name="Tarun Kumar";
        echo "<h1 style='color:green'>Hello ".$name." HTML in php</h1>";
        echo "<h1 style='color:red'>Hello Tarun HTML in php</h1>";
        echo "<h1 style='color:blue'>Hello Tarun HTML in php</h1>";


        ?>
        <h1 style='color:green'>Hello <?php echo $name?> HTML in php</h1>;
        <h2 style='color:<?php echo $h2_h3_color?>'>Hello <?php echo $name?> HTML in php</h1>;
        <h3 style='color:<?php echo $h2_h3_color?>'>Hello <?php echo $name?> HTML in php</h1>;

    </center>
</body>

</html>