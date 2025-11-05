<html>
<head>
    <title>Student Registration Form</title>
</head>
<body>
    <center>
        <h2>Student Registration Form</h2>
        <form method="post" action="Data.php">
            <table border="1" cellpadding="8">
                <tr>
                    <th>Student Name</th>
                    <td><input type="text" name="student_name" required></td>
                </tr>
                <tr>
                    <th>Course</th>
                    <td><input type="text" name="course" required></td>
                </tr>
                <tr>
                    <th>Father's Name</th>
                    <td><input type="text" name="father_name" required></td>
                </tr>
                <tr>
                    <th>Mother's Name</th>
                    <td><input type="text" name="mother_name" required></td>
                </tr>
                <tr>
                    <th>Date of Birth</th>
                    <td><input type="date" name="dob" required></td>
                </tr>
                <tr>
                    <th>Gender</th>
                    <td>
                        <input type="radio" name="gender" value="Male" required> Male
                        <input type="radio" name="gender" value="Female" required> Female
                        <input type="radio" name="gender" value="Other" required> Other
                    </td>
                </tr>
                <tr>
                    <th>Email ID</th>
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                    <th>Phone Number</th>
                    <td><input type="tel" name="phone" maxlength="10"></td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td><textarea name="address" rows="3" cols="25" required></textarea></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td><input type="password" name="password" required></td>
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
            $studentName = $_POST['student_name'];
            $courseName = $_POST['course'];
            $FatherName = $_POST['father_name'];
            $MotherName = $_POST['mother_name'];
            $DOB = $_POST['dob'];
            $gender = $_POST['gender'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $add = $_POST['address'];
            $password = $_POST['password'];

            echo "<h3>Entered Student Details:</h3>";
            echo "Student Name : " . htmlspecialchars($studentName) . "<br>";
            echo "Course       : " . htmlspecialchars($courseName) . "<br>";
            echo "Father Name  : " . htmlspecialchars($FatherName) . "<br>";
            echo "Mother Name  : " . htmlspecialchars($MotherName) . "<br>";
            echo "DOB          : " . htmlspecialchars($DOB) . "<br>";
            echo "Gender       : " . htmlspecialchars($gender) . "<br>";
            echo "Email ID     : " . htmlspecialchars($email) . "<br>";
            echo "Phone No     : " . htmlspecialchars($phone) . "<br>";
            echo "Address      : " . htmlspecialchars($add) . "<br>";
            echo "Password     : " . htmlspecialchars($password);
        }
        ?>
    </center>
</body>
</html>
