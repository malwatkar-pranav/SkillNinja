<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script src="script.js"></script>
    <title>SkillNinja</title>
</head>

<body>
    <div class="side-bar" id="mySide-bar">
        <a href="admin.php" class="active">SkillNinja ⚔︎</a>
        <a href="admin.php">Dashboard</a>
        <a href="userinfo.php"><i class="material-icons" style="position: relative; top: 6%;">person</i> Users</a>
        <a href="courseinfo.php"><i class="material-icons" style="position: relative; top: 6%;">library_books</i>
            Courses</a>
        <a href="upload.html"><i class="material-icons" style="position: relative; top: 6%;">add</i> Add Courses</a>
        <a href="Enquiryinfo.php"><i class="material-icons" style="position: relative; top: 6%;">message</i>
            Enquiries</a>
        <a href="../User/Homepage/index.php"><i class="material-icons" style="position: relative; top: 6%;">exit_to_app</i>
            Logout</a>
        <a href="javascript:void(0)" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
    </div>
    <a href="#none" onclick="bgchange()"><b id="icon">🌙</b></a>
    <div class="container">
        <h1>Welcome, Admin!</h1>
    </div>
    <div class="dashboard">
        <div class="card">
            <h2>Total Users</h2>
            <p id="userCount">
                <?php
                require_once "../User/Database/functions.php";

                $conn = DBConnect();
                // Query to get the user count from the database
                $query = "SELECT COUNT(*) AS user_count FROM users"; // Adjust the table name if needed
                
                // Execute the query
                $result = $conn->query($query);

                if ($result) {
                    // Fetch the user count from the result
                    $row = $result->fetch_assoc();
                    $userCount = $row["user_count"];

                    // Display the user count
                    echo $userCount;

                    // Close the database connection
                    $conn->close();
                } else {
                    echo "Error: " . $conn->error;
                }
                ?>
            </p>
        </div>
        <div class="card">
            <?php
            // Connect to the database
            require_once "../User/Database/functions.php";

            $conn = DBConnect();
            // SQL query to count records for each c_id
            $sql = "SELECT c_id, COUNT(*) as count FROM course GROUP BY 'c_id'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output the counts for each c_id
                while ($row = $result->fetch_assoc()) {
                    $a = $row['count'];
                }
            } else {
                echo "No records found";
            }

            echo '<h2>Total Courses</h2>';
            echo "<p id='courseCount'>$a</p>
          
        </div>
        <div class='card'> ";
            // SQL query to count records for each c_id
            $sql1 = "SELECT id, COUNT(*) as count FROM payment GROUP BY 'id'";
            $result = $conn->query($sql1);

            if ($result->num_rows > 0) {
                // Output the counts for each c_id
                while ($row = $result->fetch_assoc()) {
                    $b = $row['count'];
                }
            } else {
                echo "No records found";
            }
            echo "
            <h2>Total Payments</h2>
            <p id='revenueCount'>$b</p>
        </div><br>
       ";
            ?>
            <div class="card">
            <?php
            $sql = "SELECT SUM(price) as totalPayments FROM payment";
             $result = $conn->query($sql);
             if ($result->num_rows > 0) {
                // Fetch the result
                $row = $result->fetch_assoc();
                $totalPayments = $row['totalPayments'];
        
                echo "
                <h2>Total Amount</h2>
                <p id='revenueCount'>$totalPayments</p>";
            } else {
                echo "No records found";
            }
             ?>
            </div>
        </div>
        <div class="graph">
        <div
id="myChart" style="width:100%; max-width:600px;">
</div>  
        </div>
 
            
</body>

</html>