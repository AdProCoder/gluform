<?php
	if(isset($_POST['submit'])){
		$namea=$_POST['faname'];
		$nameb=$_POST['lsname'];
		$gender=$_POST['yesorno'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$day=$_POST['day'];
		$study=$_POST['institute'];

		$to='sonudash369@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Glucian India Pvt.Ltd.';

		$message="Name :".$namea." ".$nameb."\n"."Gender: ".$gender."\n"."Email Id :".$email."\n"."Phone :".$phone."\n"."DoB: ".$day."\n"."Institute: ".$study;
		$headers="From: ".$namea;

		$headersb = "Dear : ".$namea." ".$nameb."\n"."You are being Selected for our Web Development Training Program from dt: 01/08/2021 to dt: 31/8/2021";

		$resultw = mail($to, $subject, $message, $headers);
		$results = mail($email, $subject, $headersb);

		if($resultw){
			echo '<script type="text/javascript">alert("Message was sent Successfully, We will contact shortly!")</script>';
		}
		else{
			echo '<script type="text/javascript">alert("Submission failed! Try again Later")</script>';
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Glucian</title>

  <!-- Favicons -->
  <link href="assets/glucian.png" rel="icon">
  <link href="assets/glucian.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- CSS Files -->
  <link href="assets/aos.css" rel="stylesheet">
  <link href="assets/bootstrap.min.css" rel="stylesheet">
  <link href="assets/glightbox.min.css" rel="stylesheet">
  <link href="assets/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center logo">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/glucian.png" alt="">
        <span>Glucian</span>
      </a>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container" data-aos="zoom-out" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-6 pt-5 pt-lg-0 order-1 order-lg-1 flex-column justify-content-center" data-aos="fade-up">
            <h1>Free Industrial Training On Web Development</h1>
            <h2>Provided by Glucian India Pvt.Ltd.</h2>
          </div>

          <!-- Verification Form -->

          <div class="col-lg-6 order-2 order-lg-2 hero-img hero-form" data-aos="fade-left">
            <form action="" method="post" role="form" class="email-form">
              <div class="row ">

                <div class="form-group col-md-6">
                  <label for="name">First Name</label>
                  <input type="text" class="form-control" name="faname" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Last Name</label>
                  <input type="text" class="form-control" name="lsname" required>
                </div>               
  
                <div class="form-group col-md-6">
                  <label for="name">Email Id</label>
                  <input type="email" class="form-control" name="email" placeholder="example@gmail.com" required>
                </div>

                <div class="form-group col-md-6">
                  <label for="name">Contact No</label>
                  <input type="tel" class="form-control" name="tel" placeholder="+91 8976453987"required>               
                </div>

                <div class="form-group col-md-6">
                  <label for="name" class="gender">Gender</label> <br>
                  <label for="name">Male</label>
                  <input type = "radio" value = "" name = "yesorno" required>
                  <label for="name">Female</label>
                  <input type = "radio" value = "" name = "yesorno" required>
                  <label for="name">Other</label>
                  <input type = "radio" value = "" name = "yesorno" required>
                </div>

                <div class="form-group col-md-6">
                  <label for="name">Date of Birth</label>
	                <input type = "date" class="form-control" name = "day" required>
                </div>
  
                <div class="form-group col-md-12">
                  <label for="name">Institute Name</label>
                  <input type="text" class="form-control" name="institute" required>
                </div>
                <div class="text-center"><button type="submit" name="submit">Submit</button></div>
              
              </div>
            </form>
          </div>

          <!-- Verification Form -->

        </div>
    </div>

  </section><!-- End Hero -->

  <!-- JS Files -->
  <script src="assets/aos.js"></script>
  <script src="assets/bootstrap.bundle.min.js"></script>
  <script src="assets/glightbox.min.js"></script>
  <script src="assets/main.js"></script>

</body>

</html>