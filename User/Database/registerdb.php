<?php
// Check if the login form was submitted
if (isset($_POST["signup"])) {
    // Store the values in the session
    session_start();
    // Get the username and password from the form
    $Fullname = $_POST['fullname'];
    $UserName = $_POST["username"];
    $Password = $_POST["password"];
    $redirectTo = $_POST['redirectTo'];
    // Store the values in the session
    $_SESSION["username"] = $UserName;
    $_SESSION["password"] = $Password;
    $_SESSION["fullname"] = $Fullname;

    $IsAdmin = 0;

    // Connect to the database
    require_once "functions.php";

    $conn = DBConnect();

    if (!empty($Fullname) && !empty($UserName) && !empty($Password)) {
        $SELECT = "SELECT name From users Where name=? Limit 1";

        //prepare statement
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $UserName);
        $stmt->execute();
        $stmt->bind_result($UserName);
        $stmt->store_result();

        $rnum = $stmt->num_rows;
        if ($rnum == 0) {
            $INSERT = "INSERT Into users(fname,name,pass) values('$Fullname','$UserName','$Password')";
            $result = $conn->query($INSERT);
            echo "<script> alert('Account Created ! Give Security Question.');
            window.location.href='../$redirectTo';
              </script>";
        } else {
            echo "<script>
            alert('Someone already registered using this Username.');
            window.location.href='../Homepage/logout.php';
            </script>";
        }
    } else {
        echo "<script> alert('Invalid input !');
        window.location.href='../Homepage/logout.php';
        </script>";
    }

}
?>