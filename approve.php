<!-- <?php
if (isset($_GET['id']) && isset($_GET['approved']) && $_GET['approved'] == 1) {
    $con = mysqli_connect("localhost", "root", "", "dk");
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $id = mysqli_real_escape_string($con, $_GET['id']);

    // Update the appointment status to approved in the database
    $query = "UPDATE appoint SET status = 'Approved' WHERE id = '$id'";
    $result = mysqli_query($con, $query);

    mysqli_close($con);

    // Redirect the user to the print.php page
    header("Location: print.php?id=$id");
    exit();
} else {
    // Redirect the user to an error page or display an error message
    header("Location: error.php");
    exit();
} -->

?>

<?php
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $con = mysqli_connect("localhost", "root", "", "dk");
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $id = mysqli_real_escape_string($con, $_GET['id']);

    // Update the appointment status to approved in the database
    $query = "UPDATE appoint SET status = 'Approved' WHERE id = '$id'";
    $result = mysqli_query($con, $query);

    mysqli_close($con);

    if ($result) {
        // Set the session variable to indicate that the appointment is approved
        $_SESSION['approved'] = 1;
        // Redirect the user to the print.php page
        header("Location: print.php?id=$id");
        exit();
    } else {
        // Redirect the user to an error page if the update fails
        header("Location: error.php");
        exit();
    }
} else {
    // Redirect the user to an error page if the id parameter is not set
    header("Location: error.php");
    exit();
}
?>

