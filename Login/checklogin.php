<!DOCTYPE html>
<html>
<head>
    <title>Login Check</title>
</head>
<body>
    <center>
        <?php
        // Check if the form was submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['txtuser']) && isset($_POST['txtpass'])) {
            
            $user = $_POST['txtuser'];
            $pass = $_POST['txtpass'];

            // Validate credentials
            if (strcmp($user, "tarun") == 0 && strcmp($pass, "12345") == 0) {
                echo "<h2 style='color:green;'>All good ✅</h2>";
            } else {
                echo "<h2 style='color:red;'>Sab galat kar diya ❌</h2>";
            }

        } else {
            echo "<h3 style='color:orange;'>Please submit the form from the login page.</h3>";
        }
        ?>
    </center>
</body>
</html>
