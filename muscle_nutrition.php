<!DOCTYPE html>
<html>
<head>
	<title>Muscle Builder Nutrition</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/bannerImages.css" rel="stylesheet">
    <link href="../css/popUp.css" rel="stylesheet">
    <link href="../css/table.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <script src="../js/mainCode.js"></script>
    <script src ="../js/popUp.js"></script> 
    <script src="https://kit.fontawesome.com/c2356f3c74.js" crossorigin="anonymous"></script>
    <?php include '../topMenu.php'; ?>

</head>
<body align = "center">
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_4.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
            <h1 class="mb-0 bread">Enjoy Some Muscle Building Food!</h1>
          </div>
        </div>
      </div>
</section>
<?php 
    include ('../db_connection.php');
    //include("header_page.php");
?>

    <?php 
    
    // fetching information from the database to the tables
    echo "<table class = 'mytable'>
    <tr>
        <th>Time of day</th>
        <th>Choose any 1 or 2 of the listed items</th>
    </tr>";

    $sql="SELECT * FROM nutrition_ressources WHERE body_part = 'Muscles'";
    $result=$connect->query($sql);
    $row = $result -> fetch_assoc();
    $water = $row['water'];
    $breakfast = $row['breakfast'];
    $pre_workout = $row['pre_workout'];
    $post_workout = $row['post_workout'];
    $dinner = $row['dinner'];
    $before_bed = $row['before_bed'];

    echo "<tr>";
        echo "<td>".'Water a day'."</td>";
        echo "<td>".$water."</td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>".'Breakfast'."</td>";
        echo "<td>".$breakfast."</td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>".'Before Workout'."</td>";
        echo "<td>".$pre_workout."</td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>".'After Workout'."</td>";
        echo "<td>".$post_workout."</td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>".'Dinner'."</td>";
        echo "<td>".$dinner."</td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>".'Before Bed'."</td>";
        echo "<td>".$before_bed."</td>";
    echo "</tr>";
    echo "</table>";

    
    //include('location: ..\footer_page.php');
    echo "<br>"."<br>"."<br>"."<br>";
    //include ('footer_page.php');
     ?>

<footer class="footer">
				<div class="row mt-5">
          <div class="col-md-6 col-lg-8">

            <p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
          <div class="col-md-6 col-lg-4 text-md-right">
          	<p class="mb-0 list-unstyled">
          		<a class="mr-md-3" href="#">Terms</a>
          		<a class="mr-md-3" href="#">Privacy</a>
          		<a class="mr-md-3" href="#">Compliances</a>
          	</p>
          </div>
        </div>
			</div>
		</footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

</body>
</html>