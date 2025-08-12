<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="courses.css">
    <!-- <link rel="stylesheet" href="../Homepage/style.css"> -->
    <script src="../Homepage/script.js"></script>
</head>

<body>
    <form action="../Database/logindb.php" method="POST">
        <input type="hidden" name="redirectTo" value="Courses/html.php">
        <div class="topnav" id="myTopnav">
            <a href="../Homepage/index.php" class="active">SkillNinja ⚔︎</a>
            <a href="#home" class="" style="padding-top: 1.5%;">News</a>
            <a href="../Homepage/aboutus.php" class="" style="padding-top: 1.5%;">About Us</a>
            <a href="../Homepage/enquire.php" class="" style="padding-top: 1.5%">Enquire</a>
            <div>
            </div>
            <?php
            // Check if the user is logged in
            session_start();
            if (isset($_SESSION['username'])) {
                $_SESSION['courseid'] = 3;
                $_SESSION['price'] = 3000;
                $_SESSION["coursename"] = "JAVASCRIPT";
                $_SESSION['parth'] = "javascript.php";

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
      <a href="../Homepage/logout.php"><i class="fa fa-sign-out"></i> Logout</a>
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
                <label for="username">USERNAME:</label>
                <input type="text" name="uname" id="" placeholder="Username">
                <label for="password">PASSWORD:</label>
                <input type="password" name="pass" placeholder="Password">
                <p><a href="#forgotpass" style="text-decoration: none;">Forgot Password?</a></p>
                <button type="submit" name="login">Login</button>
                <p>
                    <hr style="width: 45%;float: left;border:1px solid rgb(204, 204, 204);"><b>or</b>
                    <hr style="width: 45%;float: right;border:1px solid rgb(204, 204, 204);">
                </p>
                <p>New to SkillNinja? <a href="#home" onclick="openform2(),closeform()">SignUp</a></p>
            </div>
        </div>
    </form>

    <form action="../Database/registerdb.php" method="POST">
        <input type="hidden" name="redirectTo" value="Courses/html.php">

        <!-- Register -->
        <div class="form-popup" id="myform2" style="display: none;">
            <div class="form-container">
                <h1>Sign Up</h1>
                <a href="#closebtn" class="closebtn" onclick="closeform2()"><i class="material-icons">close</i></a>
                <label for="Fullname">Full Name:</label>
                <input type="text" name="fullname" id="" placeholder="Enter Your Full Name">

                <label for="username1">Username:</label>
                <input type="text" id="username" required pattern="[a-z]{4,8}[0-9][0-9]{1,9}?" min="0" max="99"
                    oninvalid="this.setCustomValidity('Username must be a combination lowercase alphabets and numbers only!')"
                    maxlength="12" name="username" id="" placeholder="Create a Username">
                <label for="password1">Password:</label>
                <input type="password" name="password" id="password" required pattern="[a-z]{4,8}[0-9][0-9]{1,9}?"
                    oninvalid="this.setCustomValidity('Password must contain atleast 4 alphabets and a number!')"
                    maxlength="12" placeholder="Password">

                <button type="submit" name="signup">Join Now!</button>
                <p>
                    <hr style="width: 45%;float: left;border:1px solid rgb(204, 204, 204);"><b>or</b>
                    <hr style="width: 45%;float: right;border:1px solid rgb(204, 204, 204);">
                </p>
                <p>Already a user? <a href="#home" onclick="openform(),closeform2()">Login</a></p>
            </div>
        </div>
    </form>
    <div class="bgcolor">
        <div style="float:right;margin-top:12%;padding-right:4%;font-family: 'Roboto Condensed', sans-serif;">
            <h3>Course</h3>
            <p>Gain insight into a topic and learn the fundamentals</p>
            <hr>
            <b><span class="material-symbols-outlined">school</span> Instructor:</b> SkillNinja
        </div>
        <div class="text">
            <h1>What is JavaScript?</h1>
            <b><span class="material-symbols-outlined">translate</span> Taught in English</b>
        </div>
    </div>
    <div class="mainbody">
        <div class="content">

            <a href="#enroll"><button>Enroll Now!</button></a>
            <p style="font-size:large;color:blue;font-weight:900;">Course Fee: <i class="fa fa-rupee"
                    style="font-size:xx-large"> <b style="  font-family:'Poppins', sans-serif;">3000</b></i></p>
        </div>
        <div class="rating-card">
            <span class="span1">4.4 <span class="fa fa-star checked"></span></span>
            <span style="text-align: right;">&emsp;Flexible schedule &emsp;|&emsp; Beginner Level &emsp;|&emsp; Easy to
                Learn</span>
        </div>
        <div class="info">
            <h2>Skills you'll gain</h2>
            <p> Javascript </p>
            <p> HTML </p>
            <p> Web-Development </p>

            <h2>Course Description:</h2>
            <span>Embark on a journey into the essential realm of JavaScript with our beginner course designed for
                aspiring web developers.
                Delve into the foundational concepts of programming and gain practical experience in creating dynamic
                and interactive
                web pages. No previous coding experience is necessary - kickstart your web development adventure right
                here.</span>
        </div>
        <div class="modules-info">
            <h1>There are 5 modules in this course</h1>
            <p>Discover the foundations of web development through our Beginner's JavaScript online course.
                Crafted with newcomers in mind, this course delves into key JavaScript principles such as variables,
                functions, and conditional statements. With interactive modules and seasoned guidance, you'll develop
                the
                proficiency to bring interactivity and dynamism to your web projects.
                Enroll today to initiate your venture into the dynamic realm of JavaScript and enhance your prowess in
                web development!</p>
        </div>
        <div class="modules">
            <div onmouseover="showModule1()" onmouseout="hideModule1()">
                <h2>Foundations of JavaScript Programming</h2><span><i class="fa fa-angle-down" style="font-size:36px"></i></span>
                <li>Module 1: <p id="show-info1">Lay the groundwork for JavaScript mastery, covering essential language features, data types, and control structures to build a<br> solid programming foundation.</p></li>
                
            </div>
            <hr>
            <div onmouseover="showModule2()" onmouseout="hideModule2()">
                <h2>Building Dynamic Websites with JavaScript</h2><span><i class="fa fa-angle-down" style="font-size:36px"></i></span>
                <li>Module 2: <p id="show-info2">Explore the power of JavaScript in web development, focusing on DOM manipulation, event handling, and AJAX to create dynamic<br> and responsive user interfaces.</p></li>
            </div>
            <hr>
            <div onmouseover="showModule3()" onmouseout="hideModule3()">
                <h2>Advanced JavaScript Concepts</h2><span><i class="fa fa-angle-down" style="font-size:36px"></i></span>
                <li>Module 3: <p id="show-info3">Elevate your JavaScript skills with advanced concepts like closures, scopes, and asynchronous programming, unlocking the ability to create<br> efficient and sophisticated applications.</p></li>
            </div>
            <hr>
            <div onmouseover="showModule4()" onmouseout="hideModule4()">
                <h2>Front-End Development with JavaScript Frameworks</h2><span><i class="fa fa-angle-down" style="font-size:36px"></i></span>
                <li>Module 4: <p id="show-info4">Dive into popular front-end frameworks such as React, Angular, or Vue.js, mastering the art of building interactive and scalable user interfaces for modern web applications.</p></li>
            </div>
            <hr>
            <div onmouseover="showModule5()" onmouseout="hideModule5()">
                <h2>Full-Stack JavaScript Development</h2><span><i class="fa fa-angle-down" style="font-size:36px"></i></span>
                <li>Module 5: <p id="show-info5">Embark on a comprehensive journey into full-stack development, combining server-side JavaScript with technologies like Node.js and database integration (e.g., MongoDB), enabling end-to-end application development.</p></li>
            </div>
            <hr>
        </div>
        <div class="certi-info">
            <h1>Earn a career certificate</h1>
            Add this credential to your LinkedIn profile, resume, or CV

            Share it on social media and in your performance review
        </div>
        <img src="../Images/certificate.png" alt="" class="cert-img">
    </div>
    <div class="enroll">
        <?php
        require_once('../Database/functions.php');
        function generatePaymentHTML()
        {
            $html = '<a href="../Payment/payment.php"><button type="submit" id="enroll">Start Course</button></a>';
            $result = display_payment($_SESSION['u_id']);
            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $PaymentId = $row["id"];
                if (!empty($PaymentId) && !empty($c_idc) && $c_id = $c_idc) {

                    // if (isset($PaymentId)) {
                    $html = '<a href="course.php"><button type="submit" id="enroll">Start Course</button></a>';
                }
            }
            return $html;
        }
        if (!isset($_SESSION['username'])) {
            echo '<button type="submit" id="enroll"onclick="openform()">Enroll Now</button>';
        }
        if (isset($_SESSION['username'])) {
            $paymentCheckHtml = generatePaymentHTML();
            echo $paymentCheckHtml;
        }
        ?>
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