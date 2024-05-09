<?php
session_start();
   $useruid = $_SESSION['uid'];

if (isset($_GET['id'])) {
    $id = $_GET['id'];
 

    $con = mysqli_connect("localhost", "root", "", "dk");
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if the appointment with the given id is approved
    $query = "SELECT status FROM appoint WHERE id = '$useruid' AND status = 'Approved'";
    $result = mysqli_query($con, $query);
    $row_count = mysqli_num_rows($result);
     
    

    mysqli_close($con);

    if ($row_count > 0) {
        // The appointment is approved, allow the user to view the print.php page
        // Include the HTML content of the print.php page here
        // You can also use include_once("print.php"); to include the print.php file
        // include 'print.php';
        ?><script> download here</script><?php
        include("print.php");
    } else {
        // The appointment is not approved, display an error message
        echo "Error: Appointment not approved yet.";
    }
}
?>


