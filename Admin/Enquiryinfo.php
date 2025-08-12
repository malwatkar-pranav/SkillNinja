<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
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
    <form>
        <?php
        //Connect to the MySQL database
        require_once "../User/Database/functions.php";

        $conn = DBConnect();
        $result = display_enquiries();
        ?>
     
        <div class="area">
            <div class="boxes">
                <span>User Enquiries</span>
            </div>
            <table border="3" width="80%" align="center" class="customers">
                <tr align="center">
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>

                <tr align="center">
                    <?php

                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <td align="center">
                            <?php echo $row['Frist_name']; ?>
                        </td>
                        <td align="center">
                            <?php echo $row['Last_Name']; ?>
                        </td>
                        <td align="center">
                            <?php echo $row['Email']; ?>
                        </td>
                        <td align="center">
                            <?php echo $row['Message']; ?>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
            </table>
            <?php
            ?>
        </div>
    </form>
</body>

</html>