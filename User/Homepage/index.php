<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="style.css" />
  <script src="script.js"></script>
</head>

<body>
  <div class="topnav" id="myTopnav">
    <a href="#home" class="active">SkillNinja ⚔︎</a>
    <a href="#home" class="" style="padding-top: 1.5%">News</a>
    <a href="aboutus.php" class="" style="padding-top: 1.5%">About Us</a>
    <a href="enquire.php" class="" style="padding-top: 1.5%">Enquire</a>
    <div>
    </div>
    <?php
    // Check if the user is logged in
    session_start();
    if (isset($_SESSION['username'])) {
      // If logged in, show the username and a logout button
      // echo "Welcome, " . $_SESSION['username'] . "!";
      echo '  <div class="dropdown">
    <button class="dropbtn">
      <img src="../Images/user.png" style="zoom:8%">&emsp;&emsp;
    </button>
    <div class="dropdown-content">
      <a>Signed in as <b>' . $_SESSION['username'] . '</b></a>
      <hr>
      <a href="../Homepage/Profile/profile.php"><i class="material-icons">person</i> Profile</a>
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
    <a href="#none" style="padding-top: 1%">&nbsp;
      <a href="#none" style="padding-top: 1%">
        <input type="search" name="search" id="search" class="search-bar" onkeyup="showHint(this.value)">
        <i id="search-btn" class="fa fa-search"></i>
        <div id="txtHint"></div>
      </a>
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
          <a href="forgotpass.php" style="text-decoration: none">Forgot Password?</a>
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
    <input type="hidden" name="redirectTo" value="Homepage/verification.php">
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
  <div class="headers">
    <p>Best Online Courses</p>

    <h1 style="animation: 0.5s ease-out 0s 1 textanim">
      LEARN, CERTIFY,<br />
      SUCCEED!
    </h1>
    <h4 style="animation: 1s ease-out 0s 1 textanim; font-size: large">
      This website serves as a central hub where users can discover, access,
      and pursue a <br />
      wide range of certifications to enhance their skills and advance their
      careers.<br />
      It's a gateway to unlocking new opportunities and achieving personal and
      professional growth.
    </h4>

    <!-- Join For Free! -->
    <?php
    if (!isset($_SESSION['username'])) { ?>
      <button class="centerbtn" style="animation: 1.5s ease-out 0s 1 textanim" onclick="openform2()">Join For Free!
      <?php } else {
      echo "Welcome, <br>" . $_SESSION['username'] . " !"; ?>
      </button>
    <?php } ?>
    <a href="#mycourses">
      <button class="centerbtn2" style="animation: 1.5s ease-out 0s 1 textanim">
        Explore
      </button></a>
  </div>
  <br /><br /><br />
  <hr style="width: 90%; border: 1px solid gray" />
  <div>
    <h1 id="middle-section">
      "Riding the Wave of E-Learning's Popularity Surge!"
    </h1>
    <img src="../Images/graph2.png" alt="" class="graph-img" />
    <p id="middle-section">
      <h7 style="color: #3399ff">#ELearning</h7>
    </p>
    <p style="
          font-family: 'Quicksand', sans-serif;
          font-size: 22px;
          padding: 0% 4% 4% 4%;
        ">
      Amidst a digital revolution, E-learning rides an exhilarating wave of
      popularity. Its accessible and flexible approach to education transcends
      borders, allowing learners to ride the wave of learning on their own
      terms.
    </p>
  </div>
  <hr style="width: 90%; border: 1px solid gray" />
  <div class="courses" id="mycourses">
    <h1 style="font-family: 'Poppins', sans-serif; color: #3399ff">
      OUR COURSES
    </h1>
    <div class="courses">
      <p>Basic</p>
      <h1>Web-Development</h1>
      <div class="course-card">
        <a href="../Courses/html.php" style="text-decoration: none; color: #3399ff"><img src="../Images/html.png" alt=""
            style="zoom: 19.8%" />
          <p style="float: right">
            4.6
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star-half-empty"></span>
          </p>
          <hr />
          Learn HTML
          <p style="
                font-size: medium;
                color: black;
                font-family: 'Quicksand', sans-serif;
              ">
            Start at the beginning by learning HTML basics - an important
            <br />foundation for building and editing web pages.
          </p>
        </a>
      </div>
      <div class="course-card">
        <a href="#html" style="text-decoration: none; color: #3399ff"><img src="../Images/css.png" alt=""
            style="zoom: 18%" />
          <p style="float: right">
            4.5
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star-o"></span>
          </p>
          <hr />
          Learn CSS
          <p style="
                font-size: medium;
                color: black;
                font-family: 'Quicksand', sans-serif;
              ">
            In this CSS tutorial, you'll learn how to add CSS to visually<br />
            transform HTML into eye-catching sites.
          </p>
        </a>
      </div>
      <div class="course-card">
        <a href="../Courses/javascript.php" style="text-decoration: none; color: #3399ff"><img src="../Images/js2.png"
            alt="" style="zoom: 40%" />
          <p style="float: right">
            4.4
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star-o"></span>
          </p>
          <hr />
          Learn Javascript
          <p style="
                font-size: medium;
                color: black;
                font-family: 'Quicksand', sans-serif;
              ">
            Learn how to use JavaScript - a powerful and flexible<br />
            programming language for adding website interactivity.
          </p>
        </a>
      </div>
    </div>
    <div class="courses">
      <p>Intermediate</p>
      <h1>Programming Languages</h1>
      <div class="course-card">
        <a href="#html" style="text-decoration: none; color: #3399ff"><img src="../Images/c.png" alt=""
            style="zoom: 30.5%" />
          <p style="float: right">
            4.8
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star-half-empty"></span>
          </p>
          <hr />
          Learn C
          <p style="
                font-size: medium;
                color: black;
                font-family: 'Quicksand', sans-serif;
              ">
            Learn about the C programming language in this beginner-<br />friendly
            skill path.
          </p>
        </a>
      </div>
      <div class="course-card">
        <a href="#html" style="text-decoration: none; color: #3399ff"><img src="../Images/php.png" alt=""
            style="zoom: 40%" />
          <p style="float: right">
            4.4
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star-o"></span>
          </p>
          <hr />
          Learn PHP
          <p style="
                font-size: medium;
                color: black;
                font-family: 'Quicksand', sans-serif;
              ">
            Learn the fundamentals of PHP, one of the most popular<br />
            languages of modern web development.
          </p>
        </a>
      </div>
      <div class="course-card">
        <a href="#html" style="text-decoration: none; color: #3399ff"><img src="../Images/sql.png" alt=""
            style="zoom: 36%" />
          <p style="float: right">
            4.5
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star-o"></span>
          </p>
          <hr />
          Learn SQL
          <p style="
                font-size: medium;
                color: black;
                font-family: 'Quicksand', sans-serif;
              ">
            In this SQL course, you'll learn how to manage large
            <br />datasets and analyze real data using the standard data
            <br />management language.
          </p>
        </a>
      </div>
    </div>
    <div class="courses">
      <p>Advanced</p>
      <h1>Advanced Programming Languages</h1>
      <div class="course-card">
        <a href="#html" style="text-decoration: none; color: #3399ff"><img src="../Images/Java.png" alt=""
            style="zoom: 8%" />
          <p style="float: right">
            4.5
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star-o"></span>
          </p>
          <hr />
          Learn JAVA
          <p style="
                font-size: medium;
                color: black;
                font-family: 'Quicksand', sans-serif;
              ">
            Learn to code in Java - a robust programming language<br />
            used to create software, web and mobile apps, and more.
          </p>
        </a>
      </div>
      <div class="course-card">
        <a href="#html" style="text-decoration: none; color: #3399ff"><img src="../Images/python.png" alt=""
            style="zoom: 31%" />
          <p style="float: right">
            4.6
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star-o"></span>
          </p>
          <hr />
          Learn Python
          <p style="
                font-size: medium;
                color: black;
                font-family: 'Quicksand', sans-serif;
              ">
            Learn the basics of Python 3, one of the most powerful,
            versatile,<br />
            and in-demand programming languages today.
          </p>
        </a>
      </div>
      <div class="course-card">
        <a href="#html" style="text-decoration: none; color: #3399ff"><img src="../Images/c++.png" alt=""
            style="zoom: 12.2%" />
          <p style="float: right">
            4.5
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star-o"></span>
          </p>
          <hr />
          Learn C++
          <p style="
                font-size: medium;
                color: black;
                font-family: 'Quicksand', sans-serif;
              ">
            Learn C++ - a versatile programming language that's
            <br />important for developing software, games, databases, and
            more.
          </p>
        </a>
      </div>
    </div>
  </div>
  <div class="boxbtm">
    
    <img src="../Images/boxbtm.png" alt="" />
    <p>
    <button onclick="openform2()">Join Now!</button>
    <br><br>
      Take the next step toward<br />
      your personal and <br />professional goals with SkillNinja.
    </p>
  </div>
  <footer>
    <ul>
      <li>
        <h4>Explore</h4>
      </li>
      <li><a href="index.php">Home</a></li>
      <li><a href="#"> </a></li>
      <li><a href="aboutus.php">AboutUs</a></li>
      <li><a href="enquire.php">Enquire</a></li>
    </ul>
    <hr style="width: 90%" />
    <p>
      <i class="fa fa-copyright"></i> 2023 SkillNinja Inc. All rights
      reserved.
    </p>
  </footer>
</body>

</html>