<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="profile.css" />
  <script src="script.js"></script>
  <title>Profle</title>

  <head>
    <title>Email Form</title>
    <script>
      function showEmailForm() {
        var addEmailDiv = document.getElementById("addemail");
        addEmailDiv.style.display = "block";
      }
    </script>
  </head>
</head>

<body>
  <div class="topnav" id="myTopnav">
    <a href="../index.php" class="active">&nbsp;&nbsp; SkillNinja ⚔︎ &nbsp;&nbsp;</a>
    <a href="#home" class="" style="padding-top: 1.5%">News</a>
    <a href="../aboutus.php" class="" style="padding-top: 1.5%">About Us</a>
    <a href="../enquire.php" class="" style="padding-top: 1.5%">Enquire</a>
    <div>
    </div>
    <?php
    // Connect to the database
    require_once "../../Database/functions.php";

    $conn = DBConnect();


    // Check if the user is logged in
    session_start();
    $loginUserID = $_SESSION["u_id"];
    if (isset($_SESSION['username'])) {
      echo '  <div class="dropdown">
        <button class="dropbtn">
          <img src="../../Images/user.png" style="zoom:8%">&emsp;&emsp;
        </button>
        <div class="dropdown-content">
          <a>Signed in as <b>' . $_SESSION['username'] . '</b></a>
          <hr>
          <a href="profile.php"><i class="material-icons">person</i> Profile</a>
          <a href="../logout.php"><i class="fa fa-sign-out"></i> Logout</a>
        </div>
      </div> ';
    } else { // If not logged in, show the login form 
      echo '<a href="#" onclick="openform()" style="float:right;padding-top: 1%;"><i class="material-icons">person</i> Login</a>';
    } ?>
    <?php
    if (!isset($_SESSION['username'])) { ?>
      <a href="#home" class="" style="float: right; padding-top: 1.5%" onclick="openform2()"><button id="reg-btn"
          style="pointer-events: none">
          Join For Free!
        </button></a>
    <?php } ?>
    <a href="javascript:void(0)" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>

  </div>
  <div class="sidebar">
    <img src="../../Images/user.png" alt="" style="zoom:25%">
    <p>
      <?php echo "" . $_SESSION['fname'] . ""; ?>
    </p>
    <a href="profile.php" class="active"><i class="fa fa-info-circle"></i> Profile Info</a>
    <a href="usercourses.php"><i class="fa fa-search"></i> Course Info</a>
    <a href="updateprofile.php"><i class="fa fa-edit"></i> Update Profile</a>
    <a href="deleteprofile.php"><i class="fa fa-trash-o"></i> Delete Account</a>
  </div>
  <!-- Login -->
  <div class="form-popup" id="myform">
    <div class="form-container">
      <h1>Welcome Back!</h1>
      <a href="#closebtn" class="closebtn" onclick="closeform()"><i class="material-icons">close</i></a>
      <form action="../Database/logindb.php" method="POST">
        <input type="hidden" name="redirectTo" value="Homepage/index.php">
        <label for="username">USERNAME:</label>
        <input type="text" name="uname" id="" placeholder="Username" />
        <label for="password">PASSWORD:</label>
        <input type="password" name="pass" placeholder="Password" />
        <p>
          <a href="#forgotpass" style="text-decoration: none">Forgot Password?</a>
        </p>
        <button type="submit" name="login" value="login">Login</button>
      </form>
      <hr style="
                  width: 45%;
                  float: left;
                  border: 1px solid rgb(204, 204, 204);
                " />
      <b>or</b>
      <hr style="
                  width: 45%;
                  float: right;
                  border: 1px solid rgb(204, 204, 204);
                " />

      <p>
        New to SkillNinja?
        <a href="#home" onclick="openform2(),closeform()">SignUp</a>
      </p>
    </div>
  </div>

  <form action="../Database/registerdb.php" method="POST">
    <input type="hidden" name="redirectTo" value="Homepage/index.php">
    <!-- Register -->
    <div class="form-popup" id="myform2" style="display: none">
      <div class="form-container">
        <h1>Sign Up</h1>
        <a href="#closebtn" class="closebtn" onclick="closeform2()"><i class="material-icons">close</i></a>
        <label for="Fullname">Full Name:</label>
        <input type="text" name="fullname" id="" placeholder="Enter Your Full Name" />
        <label for="username1">Username:</label>
        <input type="text" id="username" required pattern="[a-z]{4,8}[0-9][0-9]{1,9}?" min="0" max="99"
          oninvalid="this.setCustomValidity('Username must be a combination lowercase alphabets and numbers only!')"
          maxlength="12" name="username" id="" placeholder="Create a Username" />
        <label for="password1">Password:</label>
        <input type="password" name="password" id="password" required pattern="[a-z]{4,8}[0-9][0-9]{1,9}?"
          oninvalid="this.setCustomValidity('Password must contain atleast 4 alphabets and a number!')" maxlength="12"
          placeholder="Password" />
        <button type="submit" name="signup">Join Now!</button>

        <hr style="
                  width: 45%;
                  float: left;
                  border: 1px solid rgb(204, 204, 204);
                " />
        <b>or</b>
        <hr style="
                  width: 45%;
                  float: right;
                  border: 1px solid rgb(204, 204, 204);
                " />
        <p>
          Already a user?
          <a href="#home" onclick="openform(),closeform2()">Login</a>
        </p>
      </div>
    </div>
  </form>
  <div class="container">
    <h1>Account</h1>
    <hr>
    <p>
    <h4><i class="fa fa-address-card-o" style="font-size:24px"></i> General Information</h4>
    UserID:&emsp; &emsp;&emsp;
    <?php echo "" . $_SESSION['u_id'] . ""; ?><br><br>
    FullName:&emsp;&nbsp;&nbsp;
    <?php echo "" . $_SESSION['fname'] . ""; ?><br><br>
    Username:&emsp;
    <?php echo "" . $_SESSION['username'] . ""; ?><br><br>
    Email:&emsp; &emsp; &emsp;

    <?php
    if (empty($_SESSION['email'])) { ?>
      <button id="reg-btn" onclick="showEmailForm()">Add Email +</button><br>
    <?php } else { ?>
      <?php echo $_SESSION['email']; ?><br><br>
    <?php } ?>
    </p>

    <div id="addemail" style="display: none;">
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="new_email" id="new_email">
        <button type="submit" name="email" class="sbtn">Submit</button>
      </form>
    </div>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
      // Get the new email from the form
      $newEmail = $_POST['new_email'];

      // Update the email in the database
      $sql = "UPDATE users SET Email = '$newEmail' WHERE u_id = $loginUserID";
      if ($conn->query($sql) === TRUE) {
        // Update the session variable with the new email
        $_SESSION['email'] = $newEmail;
      } else {
        echo "Error updating record: " . $conn->error;
      }
    }

    // Fetch the email from the database
    $query = "SELECT Email FROM users WHERE u_id = '$loginUserID'";
    $result = $conn->query($query);

    if ($result && $result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $newEmail = $row['Email'];
      }
    } else {
      echo "No records found for email.";
    }

    ?>
  </div>
</body>

</html>