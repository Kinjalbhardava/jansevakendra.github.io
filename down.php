<?php
require('fpdf/fpdf.php'); // Replace 'fpdf' with the path to your FPDF library folder

if (isset($_POST['book'])) {
    // Your database connection and booking logic here...
    // ...
    $con = mysqli_connect("localhost", "root", "", "dk");
    session_start();
    // // Assuming you have the booking details after successful booking
    // $name = "John Doe";
    // $date = "2023-07-31";
    // $time = "10:00 AM";
    // $location = "Jan-seva Kendra";
    // // ...
    

    // Generate the PDF appointment letter
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(0, 10, 'Appointment Letter', 0, 1, 'C');
    $pdf->Cell(0, 10, '', 0, 1); // Add some space

    // Add booking details to the PDF
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 10, "Name: $name", 0, 1);
    $pdf->Cell(0, 10, "Date: $date", 0, 1);
    $pdf->Cell(0, 10, "Time: $time", 0, 1);
    $pdf->Cell(0, 10, "Location: $location", 0, 1);
    // ...

    // Output the PDF to the browser for download
    $pdf->Output('D', 'appointment_letter.pdf');
    exit;
}
?>
