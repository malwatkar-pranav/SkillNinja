<!DOCTYPE html>
<html>

<head>
  <title>Certificate</title>
  <link rel="stylesheet" href="certificate.css">
</head>

<body>
  <div class="container">
    <img src="Certificate_page-0001.jpg" alt="Notebook" style="width:100%;">
    <div class="content">
      <?php
      session_start();
      $loginUserID = $_SESSION["u_id"];
      $c_id = $_SESSION['courseid'];
      $CourseName=$_SESSION["coursename"];
      // Connect to the database
      require_once "../Database/functions.php";
      $conn = DBConnect();

      $query = "SELECT u.fname, c.c_name FROM course_users AS cu 
      INNER JOIN course AS c ON cu.c_id = c.c_id 
      INNER JOIN users AS u ON cu.u_id = u.u_id 
      WHERE u.u_id =$loginUserID
      LIMIT 1";
      $result = mysqli_query($conn, $query);

      if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $Fullname = $row['fname'];
      }
      // // Display the certificate
      echo "<h1>" . strtoupper($Fullname) . "</h1>";
      echo "<h2>" . strtoupper($CourseName) . " Online Course</h2>";
      echo "<h7>" . date('(F j, Y)') . "</h7>";
      $currentDate = date('F j, Y');
      $sql = "UPDATE course_users SET c_date = '$currentDate' WHERE  c_id = $c_id AND u_id = $loginUserID";
      if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    $conn->close();

      ?>
      <!-- Add the download button -->
    </div>
  </div>
  <button><a class="button" id="downloadButton" download>Download</a></button>

  <script>
    // JavaScript to enable image download on button click
    document.getElementById("downloadButton").addEventListener("click", function () {
      var container = document.querySelector(".container");
      html2canvas(container).then(function (canvas) {
        var link = document.createElement("a");
        link.href = canvas.toDataURL("image/jpg");
        link.download = "certificate.jpg";
        link.click();
      });
    });
  </script>

  <!-- Include the html2canvas library -->
  <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>


</body>

</html>