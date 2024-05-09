<!DOCTYPE html>


<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>JSK Appointment</title>
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

</head>

<body>

  <!-- ======= Top Bar ======= -->
  
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

    
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->


  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <
    <!-- ======= Services Section ======= -->
    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">Registration</h2>
          
        </div>
<html lang="en">
<?php
if(isset($_POST['send']))
{
	$con=mysqli_connect("localhost","root","","dk");
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$cpwd=$_POST['Mobileno'];
	$addharNO=$_POST['AdharNo.'];
  $gender=$_POST['Gender'];
  $city=$_POST['city'];
	
	
	
	$query="INSERT into registration values('','$name','$email','$password','$cpwd','$addharNo','$gender','$city')";
	
	$c=mysqli_query($con,$query);
	if($c)
	{
		
		?>
		<script>
		window.location="Logina.php";
		alert('record uploded successfully...');
		</script>
		<?php
		}
	else
	{
		?>
		<script>
			alert('something went wrong!!');
			</script>
			<?php
	}
	
	}
?>
       

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
          <div class="col-xl-9 col-lg-12 mt-4">
            <form action="#" method="post" role="form" >
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="password" class="form-control" name="password" id="subject" placeholder="password" required>
              </div>
			  <div class="form-group mt-3">
                <input type="text" class="form-control" name="Mobileno" id="subject" placeholder="Mobile no" maxlength = 10 required>
              </div>
              <br>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="AdharNo." id="Adharno" placeholder="Your Adhar No." >
                </div>
              <br>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                  <lable class="form-control" name="Gender" id="Gender" placeholder="Gender" > <b>Gender</b><lable> <br>
                    <input type="radio" id="gender" name="Female" value="Female"> <lable> Female </lable> <br>
                      <input type="radio" id="gender" name="Female" value="Male"><lable> Male </lable>
              </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <br>
                <lable for="city" class="form-control"> Choose a City:
                  &nbsp
                  <select name="city" id="city">
                    <option value ="bharuch">Bharuch </option>
                  </select>
                </div>

                </lable><br>
              <div class="text-center"><button  type="submit" name="send" >regiser</button></div>
			  
			  
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

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