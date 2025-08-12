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
</head>

<body>
  <div class="topnav" id="myTopnav">
    <a href="../index.php" class="active">&nbsp;&nbsp; SkillNinja ⚔︎ &nbsp;&nbsp;</a>
    <a href="#home" class="" style="padding-top: 1.5%">News</a>
    <a href="../aboutus.php" class="" style="padding-top: 1.5%">About Us</a>
    <a href="../enquire.php" class="" style="padding-top: 1.5%">Enquire</a>
    <!-- <a style="pointer-events:none;float:right"> &emsp;</a> -->
    <div>
    </div>
    <!-- <a href="#home" class="" style="float: right; padding-top: 1.5%" onclick="openform()">Login &emsp;</a> -->
    <?php
    // Check if the user is logged in
    session_start();
    if (isset($_SESSION['username'])) {
      // If logged in, show the username and a logout button
      // echo "Welcome, " . $_SESSION['username'] . "!";
      echo '  <div class="dropdown">
        <button class="dropbtn">
          <img src="../../Images/user.png" style="zoom:8%">&emsp;&emsp;
        </button>
        <div class="dropdown-content">
          <a>Signed in as <b>' . $_SESSION['username'] . '</b></a>
          <hr>
          <a href="profile.php"><i class="material-icons">person</i> Profile</a>
          <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
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
  <!-- Main container -->
  <div class="container">
    <h1>Courses</h1>
    <hr>
    <p>
    <h4><i class="fa fa-address-card-o" style="font-size:24px"></i> Course Information</h4>
    <?php
    // Connect to the database
    require_once "../../Database/functions.php";

    $conn = DBConnect();
    $user_id = $_SESSION['u_id'];
    $sql = "SELECT u.U_id AS user_id, u.fname AS fname, c.c_name AS course_name, c.c_price, cu.c_date
    FROM course_users cu
    INNER JOIN course c ON cu.c_id = c.c_id
    INNER JOIN users u ON cu.u_id = u.U_id
    WHERE cu.u_id = $user_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      echo '<table border="1">';
      echo '<tr><th>User ID</th><th>First Name</th><th>Course Name</th><th>Completed Date</th><th>Price</th></tr>';

      while ($row = $result->fetch_assoc()) {
        $user_id = $row["user_id"];
        $fname = $row["fname"];
        $course_name = $row["course_name"];
        $c_date = $row["c_date"];
        $c_price = $row["c_price"];
        echo '<tr>';
        echo '<td>' . $user_id . '</td>';
        echo '<td>' . $fname . '</td>';
        echo '<td>' . $course_name . '</td>';
        echo '<td>' . $c_date . '</td>';
        echo '<td>' . $c_price . '</td>';

        echo '</tr>';
      }
      echo '</table>';

    } else {
      echo "No courses found for any users.";
    }

    // Close the database connection
    $conn->close();
    ?>
    </p>
  </div>
</body>

</html>