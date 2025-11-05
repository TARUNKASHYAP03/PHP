<html>

<head>
    <title>String Concept</title>
</head>

<body>
    <center>
        <form method="post" action="">
            <table border="1" cellpadding="5">
                <tr>
                    <th>User Name</th>
                    <td><input type="text" name="txtuser" required></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td><input type="password" name="txtpass" required></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="submit" value="Submit">
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $username = $_POST['txtuser'];
            $password = $_POST['txtpass'];

            echo "<h3>Entered Details:</h3>";
            echo "Username: " . htmlspecialchars($username) . "<br>";
            echo "Password: " . htmlspecialchars($password);
        }
        ?>
    </center>
</body>

</html>



