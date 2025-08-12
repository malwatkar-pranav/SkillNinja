<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="congratulation.css" />
  </head>
  <body>

    <div class="navbar">
      <a href="../Homepage/index.php" class="active">SkillNinja ⚔︎</a>
    </div>
          <!--       <a href="#" id="pdf" style="display: none" onclick="generateReport()"
        >Convert to PDF</a> -->
    <div class="pop-card">
      <a href="https://www.freepdfconvert.com/jpg-to-pdf" id="pdf" style="display: none" onclick="generateReport()"
        >Convert to PDF</a>
    </div>
    <div class="container">
      <img
        src="certificate-image.jpg"
        alt="Certificate Image"
        class="certificate-img"
      />
      <h1>Congratulations!</h1>
      <p>
        You have successfully completed the <strong></strong> on
        <b>SkillNinja</b>.
      </p>
      <p>Here is your well-deserved certificate.</p>
      <a href="#" onclick="myfunction()" id="tag">Get Certificate</a>
      <a href="#" id="back" style="display: none" onclick="generateReport()"
        >Back to Courses</a>
    </div>
    <iframe
      src="../certificate/generate_certificate.php"
      frameborder="0"
      width="100%"
      height="700"
      id="my_cert"
      style="display: none"
    ></iframe>
  </body>
  <script>
    function myfunction() {
      document.getElementById("my_cert").style.display = "block";
      document.getElementById("tag").style.display = "none";
      document.getElementById("back").style.display = "block";
      document.getElementById("pdf").style.display = "block";
    }
    function generateReport() {
      window.location.href = "../../User/Homepage/index.php";
    }
  </script>
</html>
