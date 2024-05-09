<?php
session_start();
$id = $_SESSION['uid'];


// Initialize the $approved variable


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your head content here -->
</head>
<body>

<!-- Your HTML content here -->


<!-- More HTML content here -->

</body>
</html>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Jan Seva Kendra Appointment</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

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

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
	 <?php  if(isset($_SESSION['namee'])){ ?>
       <i class="d-flex align-items-center"><a href="mailto:contact@example.com" style="padding-right:20px;"> <?php print_r($_SESSION['namee']);?> </a> </i>
	 <?php }?>
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>
 <div class="cta d-none d-md-flex align-items-center">
  <?php  if(isset($_SESSION['namee'])){ ?>
       <i class="d-flex align-items-center"><a href="mailto:contact@example.com" style="padding-right:20px;"> <a href="Logout.php" class="scrollto">Logout</a></a> </i>
	 <?php }?>
        
      </div>
     
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
	
	  
        <h1><a href="index.php">Jan Seva Kendra Appointment</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li class="dropdown"><a href="#"><span>Get Appointment</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Aadhar Card</a></li>
              <li><a href="#">Ration Card</a></li>
              <li><a href="#">Category Certificate</a></li>
              <li><a href="#">Non Creamy Layer Certificate</a></li>
              <li><a href="#">Birth-Death Certificate</a></li>
              <li><a href="#">Income Certificate</a></li>
              <li><a href="#">Domicile Certificate</a></li>
              <li><a href="#">Widow Certificate</a></li>
              <li><a href="#">Senior Citizen Certificate</a></li>
              
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>Manage Appointment</span> <i class="bi bi-chevron-down"></i></a>

          
          <ul>
       



<?php
// Check if the 'approved' parameter is set and its value is '1'
?>
<?Php
if (isset($_SESSION['uid'])) {
    $id = $_SESSION['uid'];

    $con = mysqli_connect("localhost", "root", "", "dk");
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // $query = "SELECT status FROM appoint WHERE id = '$id' AND status = 'Approved'";
    // $result = mysqli_query($con, $query);
    // $row_count = mysqli_num_rows($result);

    // mysqli_close($con);
    ?>



    <?php
    // Check if the 'approved' parameter is set and its value is '1'
    $approved = isset($_GET['approved']) && $_GET['approved'] == 1;
    
    $query = "SELECT status FROM appoint WHERE  status  = 'Approve' and id = '$id' ";
    $result = mysqli_query($con, $query);
    $row_count = mysqli_num_rows($result);
    if( "SELECT status FROM appoint WHERE id = '$id' AND status = 'Approved'"){

    ?>
        <a href="print.php" target="_blank">Download Appointment Letter</a>
    <?php }
    else ?>
        <p>Application has not been approved yet.</p>
   <?php 

?>
     




<!-- <?php
// Check if the 'approved' parameter is set and its value is '1'
$approved = isset($_GET['approved']) && $_GET['approved'] == 1;

// Uncomment the database query and connection details
$query = "SELECT status FROM appoint WHERE status = 'Approved' AND id = '$id'";

// Connect to your database (replace with your connection details)
$con = mysqli_connect("localhost", "root", "", "dk");

// Check connection error (optional but recommended)
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$result = mysqli_query($con, $query);

// Check if there's a result and the appointment is approved
if ($result && mysqli_num_rows($result) > 0) {
  ?>
  <a href="print.php" target="_blank">Download Appointment Letter</a>
  <?php
} else {
  ?>
  <p>Application request has not been approved yet.</p>
  <?php
}

// Close the database connection (optional but recommended)
mysqli_close($con);
}
?> -->






<!-- <li> <a href="print.php"> Letter </a> </li> -->
        
            
          </ul>
        </li>
          
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
	 

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container" data-aos="fade-in">
      <h1>Welcome to Appointment</h1>
      <h2>Your appointment is few clicks away.</h2>
	   <?php  if(!isset($_SESSION['namee'])){ ?>
      <div class="d-flex align-items-center">
        <i class="bx bxs-right-arrow-alt get-started-icon"></i>
        <a href="Logina.php" class="btn-get-started scrollto">Login Here</a>
      </div>
      <?elseif(!isset($_SESSION['service'])){ ?>
      <div class="d-flex align-items-center">
        <i class="bx bxs-right-arrow-alt get-started-icon"></i>
        <a href="print.php" class="btn-get-started scrollto">generate Appointment letter</a>
      </div>
	   <?php }else{ ?>
	   
	     <div class="d-flex align-items-center">
        <i class="bx bxs-right-arrow-alt get-started-icon"></i>
        <a href="appoo.php" class="btn-get-started scrollto">Book Appointment</a>
      </div>
	   <?php } ?>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-xl-4 col-lg-5" data-aos="fade-up">
            <div class="content">
              <h3>Step for taking appointment</h3>
              <p>
                Step 1 : Login.<br>
                Step 2 : Go to appointment section.<br>
                Step 3 : Fill the form. <br>
                Step 4 : Download the appointment letter. <br>

              </p>
              <div class="text-center">
                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-xl-8 col-lg-7 d-flex">
            <div class="icon-boxes d-flex flex-column justify-content-center">

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Services</h2>
          <p>This website will help you to book and confirm appointment available at Jan Seva Kendra, Bharuch.
            <br>
            Also, this will help to smartly manage the traffic at the counter.
          </p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6" data-aos="fade-up">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-person-fill"></i></div>
              <h4 class="title"><a href="Adhar.php">AADHAR CARD</a></h4>
              <p class="description">The official website of UIDAI have few falts and doesn't provide a good appointment
                system. That site provides a better appointment system with the features of selection time slot.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-person-square"></i></div>
              <h4 class="title"><a href="ration.php">RATION CARD</a></h4>
              <p class=" description">There is no online platform who allows you to get the ration card online
                  but now you can make your e-ration card through our website.
                  </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-person-bounding-box"></i></i></div>
              <h4 class="title"><a href="Category.html">CATEGORY CERTIFICATE</a></h4>
              <p class="description">Caste Certifications are awarded to individuals that belong to the Scheduled caste and Scheduled Tribes or Other Backward Classes that are documented in the Indian Constitution.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-person-plus-fill"></i></i></div>
              <h4 class="title"><a href="OBC.html">NON CREAMY LAYER CERTIFICATE</a></h4>
              <p class="description">The website of Digital Gujarat provides details for OBC certificate. But, doesn't
                provides an option for appointment and this problem is overcome in this website.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-person-rolodex"></i></i></div>
              <h4 class="title"><a href="">BIRTH-DEATH CERTIFICATE</a></h4>
              <p class="description">Now you can get your Birth Death certificate directly from your mobile phone.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-cash-coin"></i></i></i></div>
              <h4 class="title"><a href="incomea.php">INCOME CERTIFICATE</a></h4>
              <p class="description">The income certificate is a government-issued document, which records your annual income. This certificate will include the annual income of an individual or family.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-house-fill"></i></i></div>
              <h4 class="title"><a href="">DOMICILE CERTIFICATE</a></h4>
              <p class="description">Domicile certificate is an official document provided by the Gujarat Government to recognize the residence of a citizen. </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-people-fill"></i></div>
              <h4 class="title"><a href="">WIDOW CERTIFICATE</a></h4>
              <p class="description">A widow certificate is provided by the state government as a proof to widow women that her husband is not alive. </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-person-badge"></i></div>
              <h4 class="title"><a href="">SENIOR CITIZEN CERTIFICATE</a></h4>
              <p class="description">Senior Citizen Certificate is a certification provided to the citizen by the government confirming and testifying that he/she is a Senior Citizen.</p>
            </div>
          </div>

        </div>


      </div>
    </section><!-- End Services Section -->


    <div class="row justify-content-center">

<div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up">
  <div class="info-box">
    <i class="bx bx-map"></i>
    <h3>Our Address</h3>
    <p>Jan Seva Kendra, Bharuch, Gujarat, India</p>
  </div>
</div>

<div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="100">
  <div class="info-box">
    <i class="bx bx-envelope"></i>
    <h3>Email Us</h3>
    <p>info@example.com<br>contact@example.com</p>
  </div>
</div>
<div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="https://appointments.uidai.gov.in/easearch.aspx">Aadhar Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          

      <div>
      
		

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
          <div class="col-xl-9 col-lg-12 mt-4">
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  
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

</body>

</html>