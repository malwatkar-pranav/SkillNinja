<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillNinja</title>
    <link rel="stylesheet" href="verification.css">
</head>

<body>
    <div class="nav">
        <a href="../Homepage/index.php">SkillNinja ⚔︎</a>
    </div>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="form-body">
            <h1>Forgot Password</h1>
            <p>To recover your Password you must provide the following details.</p>
            <input type="text" placeholder="Enter Username" name="uname" />
            <input type="text" placeholder="What is your College Name?" name="q1" />
            <input type="text" placeholder="What is your Mother's name?" name="q2" />
            <button type="submit" name="submit">Submit</button>
        </div>
    </form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $uname = $_POST['uname'];
    $question1 = $_POST['q1'];
    $question2 = $_POST['q2'];

    //Connect to the MySQL database
    require_once('../Database/functions.php');

    $conn = DBConnect();
    if (
        !empty($uname) && !empty($question1) && !empty($question2)
    ) {
        if (mysqli_connect_error()) {
            die('Connect Error(' . mysqli_connect_error() . ')' . mysqli_connect_error());
        } else {
            $SELECT = "SELECT name, pass, question1,question2 From users Where name=? Limit 1";
        }
        //prepare statement
        $stmt = $conn->prepare($SELECT);

        // Assuming $uid, $question1, and $question2 are user input values
        $stmt->bind_param("s", $uname);
        $stmt->execute();
        $stmt->bind_result($result_username, $result_Password, $result_question1, $result_question2);
        $stmt->fetch();

        if ($result_username == $uname && $result_question1 == $question1 && $result_question2 == $question2) {
            // User input matches with the bound variables
            // Perform some action here
            // echo "Your Password:  ". $result_Password;
            echo "<script>
            alert('Your Password:  $result_Password');
            window.location.href='index.php';
            </script>";
        } else {
            // User input does not match with the bound variables
            // Perform some error handling here
            // echo "invalid input";
            echo "<script>
            alert('Invalid Input.');
            window.location.href='../User/Homepage/forgotpass.php';
            </script>";
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "<script>
        alert('Invalid Input.');
        window.location.href='../User/Homepage/forgotpass.php';
        </script>";
    }
}
?>