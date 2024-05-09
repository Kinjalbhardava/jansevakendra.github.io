<?php


// Array of holidays/off days (add your specific dates here)
$holidayOffDays = array(
    '2023-12-25',
    '2023-07-26', // Christmas Day
    '2023-01-01',
    '2024-02-04', // New Year's Day
    // Add more holidays or days off as needed...
);


if (isset($_POST['book'])) {
    $con = mysqli_connect("localhost", "root", "", "dk");
    session_start();

    // Sanitize and validate form inputs
    $name = mysqli_real_escape_string($con, $_POST['service']);
    $email = mysqli_real_escape_string($con, $_POST['date']);
    $password = mysqli_real_escape_string($con, $_POST['time']);
    $address = mysqli_real_escape_string($con, $_POST['location']);
    $useruid = $_SESSION['uid'];
    

    // Check if the selected time slot is already booked
    $sql = "SELECT COUNT(*) as count FROM appoint WHERE user_id = $useruid and  date = '$email' AND time = '$password'";
    // $sql = "SELECT COUNT(*) as count FROM appoint WHERE user_id = '$useruid' AND date = '$date' AND time = '$time'";


    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $bookingCount = $row['count'];
    // $maxBookingsPerSlot = 2; // Set the maximum number of bookings per time slot

    if ( $bookingCount>0) {
        ?>
        <script>
            alert('Sorry, this time slot is already booked. Please choose a different time.');
        </script>
        <?php
    } elseif (in_array($date, $holidayOffDays)) {
        ?>
        <script>
            alert('Sorry, appointments cannot be booked on holidays or days off.');
        </script>
        <?php
    } else {
        // Insert the appointment into the database
        $query = "INSERT INTO appoint VALUES ('','', '$name', '$email', '$password', '$address', '$useruid', '')";
        $result = mysqli_query($con, $query);
        if ($result) {
            ?>

<script>
                
                alert('Your booking has been confirmed!');
                <a href="print.php" target="_blank">Download Appointment Letter</a>
            </script>
           
             
<?php
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }
}
?>































<?php
// Your existing PHP code...

if (isset($_POST['book'])) {
    // Your existing booking logic...

    if ($result) {
        // Successful booking
        // Fetch the appointment details from the database for the specific user
        $con = mysqli_connect("localhost", "root", "", "dk");
        $useruid = $_SESSION['uid'];
        

        $query = "SELECT * FROM appoint WHERE user_id = '$useruid' ORDER BY id DESC LIMIT 1"; // Change 'user_id' to the appropriate column name for the user identifier
        $result = mysqli_query($con, $query);
        $appointmentData = mysqli_fetch_assoc($result);
        



        // Display a link to download the appointment letter PDF
        ?>
        <div>
      
        <h4>Appointment Request has been send successfully</h4><br>
        <h4>Dear, <?php echo $appointmentData['name']; ?> </h4>
        <p>We are pleased to inform you that your application formalities for <?php echo $appointmentData['services']; ?> is done .</p>
        <!-- <p>You have to come <?php echo $appointmentData['time']; ?>, with all required documents listed in services.</p>
        <p>Your location is <?php  echo $appointmentData['location']; ?> alloted by our committee.</p> -->
<br> 
        <p> thanks for using smart Schedule. </p>
        <P> Stay connected with us. </us>
        <p> We will Approve Your Request as per all security checkup </p>
        <p>Best regards,<br>Mamlatdar Office,Upleta</p>
                
           
            <a href="print.php" target="_blank">Download Appointment Letter</a>
        </div>

      
        <?php
    } else {
        // Booking failed
        // Display an error message...
    }
}

// Rest of your existing HTML and form code...
?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Flexor Bootstrap Template - Index</title>
  
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">



    <!-- Your head content remains unchanged -->
    <!-- ... -->
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
         <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
            <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>

      <div class="cta d-none d-md-flex align-items-center">
        <a href="#about" class="scrollto">Get Started</a>
      </div>
    </div>
    </section>
  


    <!-- ======= Hero Section ======= -->
    <main id="main">
        <!-- ==========APPONTMENT FORM SECTION============ -->
        <section>
            <form action="" method="post" class="container" style="width: 500px;">
                <h3 class="" style="text-align: center ;">Appointment</h3>

                <label class="" for="services">Select services</label>
                <select name="service" class="form-select" id="services">
                    <?php
                    $con = mysqli_connect("localhost", "root", "", "dk");
                    $q = "select num from services";
                    $c = mysqli_query($con, $q);
                    while ($row = mysqli_fetch_array($c)) {
                        ?>
                        <option value="<?php echo $row['num']; ?>">
                            <?php echo $row['num']; ?>
                        </option>

                    <?php
                    }
                    ?>
                </select>
                <br>

           

                <label class="" name="dt" for="date_time">Select Date</label>
                <input type="date" name="date" id="date_time" 
                    <?php echo 'disabledDates="' . implode(',', $holidayOffDays) . '"'; 
                    ?>
                >


                <br><br>
                <label class="" name="time" for="time_zone">Select Time</label>
                <select name="time" class="form-select" id="time_zone">

                    <?php
                    $con = mysqli_connect("localhost", "root", "", "dk");
                    $q = "select num from time";
                    $c = mysqli_query($con, $q);
                    while ($row = mysqli_fetch_array($c)) {
                        ?>
                        <option value="<?php echo $row['num']; ?>">
                            <?php echo $row['num']; ?>
                        </option>

                    <?php
                    }
                    ?>
                </select>
                <br>


                <br>
                <label name="location" class="" for="locat">Select location (Bharuch)</label>
                <select name="location" class="form-select" id="locat">
                    <option selected>Select location</option>
                    <option value="Jan-seva Kendra">Jan-seva Kendra</option>
                    <option value="Mamalatdar Office">Mamalatdar Office</option>
                    <option value="Munciple Corporation">Munciple Corporation

                    </option>
                </select>
                <br>
                <button type="submit" name="book" class="btn btn-warning">Take appointment</button>
            </form>
        </section>
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>JSK Appointment</h3>
            <p>
              <strong>Email:</strong> support@government.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="https://appointments.uidai.gov.in/easearch.aspx">Update Aadhar Card</a></li>
           
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Documents Required</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Aadhar Card</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Ration Card</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Category Certificate</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Non Creamy Layer Certificate</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container d-lg-flex py-4">

      <div class="me-lg-auto text-center text-lg-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Gujarat Government</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

    <!-- Vendor JS Files -->
    <!-- Your JS imports remain unchanged -->
    <!-- ... -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Array of holidays/off days (add your specific dates here)
            const holidayOffDays = [
                '2023-12-25', // Christmas Day
                '2023-01-01',
                '2023-07-26',

            ];

            const dateInput = document.getElementById("date_time");
            dateInput.addEventListener("change", function() {
                const selectedDate = this.value;
                if (holidayOffDays.includes(selectedDate)) {
                    alert("Sorry, appointments cannot be booked on holidays or days off.");
                    this.value = ""; // Clear the selected date
                }
            });
        });
    </script>
</body>
</body>

</html>
