<?php
require_once "../User/Database/functions.php";

$conn = DBConnect();
if (isset($_POST['upload'])) {
    $file_name = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];
    $temp_name = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_destination = "upload/" . $file_name;
    if (move_uploaded_file($temp_name, $file_destination)) {
        $q = "INSERT INTO video (name) VALUES ('$file_name')";
        if (mysqli_query($conn, $q)) {
            echo "<script>
            alert('Video uploaded successfully.');
            window.location.href='upload.html';
            </script>";
        } else {
            echo "<script>
            alert('Something went wrong??');
            window.location.href='upload.html';
            </script>";
        }

    } else {
        echo "<script>
        alert('Please select a video-to-upload.');
        window.location.href='upload.html';
        </script>";
    }
} else {
    // Login failed, show an error message
    echo "<script>
    alert('Please select a video-to-upload.');
    window.location.href='upload.html';
    </script>";
}

?>