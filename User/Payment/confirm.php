<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Quicksand&display=swap');

    body {
      background: linear-gradient(to right, rgb(253, 247, 243) 30%, rgb(215, 231, 239) 50%);
      font-family: 'Quicksand', sans-serif;
    }

    .col-25 {
      -ms-flex: 25%;
      /* IE10 */
      flex: 25%;
    }

    .container {
      background-color: #f2f2f2;
      padding: 5px 20px 15px 20px;
      border: 1px solid lightgrey;
      border-radius: 3px;
      width: 40%;
      right: 30%;
      position: absolute;
      top: 10%;
      border-radius: 0%;
      box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.262);

    }

    #mytext {
      font-weight: bold;
      font-size: xx-large;
      text-align: center;
      padding: 0%;
    }

    .button {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      border-radius: 4%;
    }

    .button:hover {
      background-color: #4caf4fca;
      color: rgb(0, 0, 0);
    }
  </style>
</head>

<body>
  <form>
    <div class="col-25">
      <div class="container">
        <p style="text-align: center;"><i style="font-size:184px; color:green" class="fa">&#xf058;</i>
</p>
        <p id="mytext">Payment Success!</p>
        <p style="text-align: center;font-weight: 600;"> Your Booking has been Confirmed. <br>
          Thank You !</p><br>
        <p style="text-align: center"><button class="button" formaction="../Courses/course.php">Proceed For the Course</button></p>
      </div>
    </div>
  </form>
</body>

</html>