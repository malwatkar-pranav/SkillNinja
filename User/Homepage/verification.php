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
        <a href="verification.php">SkillNinja ⚔︎</a>
    </div>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="form-body">
            <h1>Security Questions</h1>
            <p>Before proceeding, please select and answer two security questions below.
                These questions will serve as an additional layer of protection for your account.
                Make sure to choose questions and answers that are both memorable and known only to you.
                In the future, when you need to reset your password or verify your identity,
                these questions will be your key to regaining access to your account.</p>
            <input type="text" placeholder="What is your College Name?" name="q1" />
            <input type="text" placeholder="What is your Mother's name?" name="q2" />
            <button type="submit" name="submit">Submit</button>
        </div>
    </form>
</body>

</html>

<?php
// Start the PHP session to access session variables
session_start();

if (isset($_POST['submit'])) {
    $question1 = $_POST['q1'];
    $question2 = $_POST['q2'];

    if (isset($_SESSION["username"]) && isset($_SESSION["password"])) {
        $UserName = $_SESSION["username"];
        $Password = $_SESSION["password"];

        // Connect to the MySQL database
        require_once('../Database/functions.php');
        $conn = DBConnect();

        // Check if the user exists with the provided username and password
        $stmt = $conn->prepare("SELECT * FROM users WHERE name = ? AND pass = ?");
        $stmt->bind_param("ss", $UserName, $Password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // User exists, now update the security questions
            $stmt = $conn->prepare("UPDATE users SET question1 = ?, question2 = ? WHERE name = ? AND pass = ?");
            $stmt->bind_param("ssss", $question1, $question2, $UserName, $Password);
            $stmt->execute();
            $stmt->close();

            // Handle success or failure here
            echo "<script> alert('Account Created Successfully! Please Login.');
            window.location.href='logout.php';
              </script>";
        } else {
            // User not found, handle the error
            echo "User not found or incorrect password.";
        }
    }
}
?>