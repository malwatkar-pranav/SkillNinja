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
    <form>
        <div class="side-bar" id="mySide-bar">
            <a href="admin.php" class="active">SkillNinja ⚔︎</a>
            <a href="admin.php">Dashboard</a>
            <a href="userinfo.php"><i class="material-icons" style="position: relative; top: 6%;">person</i> Users</a>
            <a href="courseinfo.php"><i class="material-icons" style="position: relative; top: 6%;">library_books</i>
                Courses</a>
            <a href="upload.html"><i class="material-icons" style="position: relative; top: 6%;">add</i> Add Courses</a>
            <a href="Enquiryinfo.php"><i class="material-icons" style="position: relative; top: 6%;">message</i>
                Enquiries</a>
            <a href="../User/Homepage/index.php"><i class="material-icons"
                    style="position: relative; top: 6%;">exit_to_app</i> Logout</a>
            <a href="javascript:void(0)" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
        </div>
        <?php
        //Connect to the MySQL database
        require_once "../User/Database/functions.php";

        $conn = DBConnect();
        // $result = display_users();
        $result1 = payment();
        ?>
        <div class="area">
            <div class="boxes">
                <span>Users</span>
            </div>
            <table border="3" width="80%" align="center" class="customers">
                <tr align="center">
                    <th>User Id</th>
                    <th>Full Name</th>
                    <th>User name</th>
                    <th>College Name</th>
                    <th>Mother Name</th>
                    <th>User Payment</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php
                // Display user data
                $data = display_users();

                // Display user data
                while ($row = mysqli_fetch_assoc($data)) {
                    ?>
                    <tr>
                        <td align="center">
                            <?php echo $row['u_id']; ?>
                        </td>
                        <td align="center">
                            <?php echo $row['fname']; ?>
                        </td>
                        <td align="center">
                            <?php echo $row['name']; ?>
                        </td>
                        <td align="center">
                            <?php echo $row['question1']; ?>
                        </td>
                        <td align="center">
                            <?php echo $row['question2']; ?>
                        </td>
                        <?php
                        // Display payment data
                        $row1 = mysqli_fetch_assoc($result1);
                        ?>
                        <td align="center">
                            <?php echo $row1['total_price']; ?>
                        </td>
                        <td align="center">
                            <!-- Add an Edit button linking to the edit_user.php page -->
                            <a href="edit_user.php?u_id=<?php echo $row['u_id']; ?>" style="background-color:green">&emsp; Edit &emsp;</a>
                        </td>
                        <td align="center">
                            <!-- Add a Delete button linking to the delete.php page -->
                            <a href="delete.php?u_id=<?php echo $row['u_id']; ?>"
                                onclick="return confirm('Are you sure you want to delete this user?')">&emsp;Delete&emsp;</a>
                        </td>

                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </form>
</body>

</html>