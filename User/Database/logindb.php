<?php
// Check if the login form was submitted
if (isset($_POST["login"])) {
    // Get the username and password from the form
    $UserName = $_POST["uname"];
    $Password = $_POST["pass"];
    $redirectTo = $_POST['redirectTo'];

    // Connect to the database
    require_once "functions.php";

    $conn = DBConnect();

    if (!empty($UserName) && !empty($Password)) {

        $query = "SELECT * FROM users WHERE name='$UserName' AND pass='$Password'";
        $result = mysqli_query($conn, $query);
        // Check if the query was successful
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $IsAdmin = $row["IsAdmin"];
            $Fullname = $row['fname'];

            // Start the session
            session_start();

            // Create a session object
            $sessionObject = new stdClass();
            $sessionObject->name = $UserName;
            $sessionObject->pwd = $Password;

            // Save the session object
            $_SESSION["mySessionObject"] = $sessionObject;

            $valid_username = $row["name"];
            $valid_password = $row["pass"];

            if ($IsAdmin) {
                header("Location:../../Admin/admin.php"); // Redirect to dashboard page
            } else {
                if ($UserName == $valid_username && $Password == $valid_password) {
                    $_SESSION["loggedin"] = true;
                    $_SESSION["username"] = $UserName;
                    $_SESSION["u_id"] = $row['u_id'];

                    $_SESSION["fname"] = $Fullname;
                    $_SESSION["email"] = $row['Email'];

                    // Successful login
                    // header("Location: ../User/Homepage/index.php");
                    echo "<script>window.location.href='../$redirectTo'; </script>";
                } else {
                    // Login failed, show an error message
                    echo "<script>
                    alert('Invalid username or password.');
                    window.location.href='../Homepage/logout.php';
                    </script>";
                }
            }
        } else {
            echo "<script>
            alert('Invalid username or password.');
            window.location.href='../Homepage/logout.php';
            </script>";
        }

    } else {
        // User doesn't exist or wrong password
        echo "<script>
        alert('Invalid username or password.');
        window.location.href='../Homepage/logout.php';
        </script>";
    }
} else {
    echo "<script>
    alert('Invalid username or password.');
    window.location.href='../Homepage/logout.php';
    </script>";
}


?>