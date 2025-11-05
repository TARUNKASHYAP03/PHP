<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <center>
        <form method="post" action="checklogin.php">
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
    </center>
</body>
</html>
