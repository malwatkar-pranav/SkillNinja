<?php
// Include database connection code here
require_once "../User/Database/functions.php";

$conn = DBConnect();

// Check if the "Delete" button is clicked
if (isset($_GET['u_id'])) {
    // Get user ID from the URL parameter
    $user_id = $_GET['u_id'];

    // Delete user from the database
    $delete_query = "DELETE FROM users WHERE U_id = $user_id";
    $delete_result = mysqli_query($conn, $delete_query);

    if ($delete_result) {
        echo "User deleted successfully.";
        // Redirect back to the user list page after deletion
        header("Location: userinfo.php");
        exit;
    } else {
        echo "Error deleting user: " . mysqli_error($conn);
    }
} else {
    echo "User ID not provided.";
}

?>
