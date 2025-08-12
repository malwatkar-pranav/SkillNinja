<?php
// Assuming you have a file named functions.php for database functions
require_once "../User/Database/functions.php";

// Connect to the database
$conn = DBConnect();

// Check if the user ID is provided in the URL
if (isset($_GET['u_id'])) {
    $user_id = $_GET['u_id'];

    // Fetch user details based on user ID
    $query = "SELECT * FROM users WHERE U_id = $user_id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $user = mysqli_fetch_assoc($result);
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
        exit;
    }
} else {
    echo "User ID not provided.";
    exit;
}

// Check if the form is submitted for updating user information
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $collegename = $_POST['collegename'];
    $mothername = $_POST['mothername'];

    // Update user information in the database
    $update_query = "UPDATE users SET fname = '$fullname', name = '$username', question1 = '$collegename', question2 = '$mothername' WHERE U_id = $user_id";
    $update_result = mysqli_query($conn, $update_query);

    if ($update_result) {
        echo "<script>
            alert('Data Updated Successfully');
            window.location.href='#';
            </script>";
    } else {
        echo "<script>
            alert('Error updating Information.');
            window.location.href='#';
            </script>". mysqli_error($conn);
    }
}
?>

<!-- HTML form for editing user information -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Information</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Finger+Paint&family=Pangolin&family=Rubik+Puddles&family=Ubuntu:wght@600&display=swap');
        @import url("https://fonts.googleapis.com/css2?family=Quicksand&display=swap");
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins&family=Roboto+Condensed&display=swap');

        html {
        scroll-behavior: smooth;
        }
        *{
            padding:0 ;
            text-align:left;
        }
        body{
            background-color: whitesmoke;
            margin: 0;
            font-family: 'Poppins', sans-serif;
            font-family: 'Roboto Condensed', sans-serif;
            padding: 0;

            }

            form {
                max-width: 400px;
                margin: 20px auto;
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            label {
                display: block;
                margin-bottom: 8px;
                font-weight: bold;
            }
            h2{
                text-align:center;
                font-size:xx-large;
            }

            input ,button{
                width: 100%;
                padding: 8px;
                margin-bottom: 16px;
                box-sizing: border-box;
                border: 1px solid #ccc;
                border-radius: 4px;
            }

            input[type="submit"], button {
                background-color: #4caf50;
                color: #fff;
                cursor: pointer;
                text-align:center
            }

            input[type="submit"]:hover {
                background-color: #45a049;
            }

            /* Optional: Style for required fields */
            input:required {
                border-color: #e74c3c;
            }

            input:focus {
                outline: none;
                border-color: #3498db;
                box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
            }
        

</style>
<body>
    <button style="float:left;max-width:100px" onclick="window.location.href='userinfo.php'">Back</button>
    <h2>Edit User Information</h2>

    <form method="post" action="">
        <label for="fullname">Full Name:</label>
        <input type="text" name="fullname" value="<?php echo $user['fname']; ?>" required><br>

        <label for="username">User Name:</label>
        <input type="text" name="username" value="<?php echo $user['name']; ?>" required><br>

        <label for="collegename">College Name:</label>
        <input type="text" name="collegename" value="<?php echo $user['question1']; ?>" required><br>

        <label for="mothername">Mother Name:</label>
        <input type="text" name="mothername" value="<?php echo $user['question2']; ?>" required><br>

        <input type="submit" value="Update">
    </form>

</body>

</html>