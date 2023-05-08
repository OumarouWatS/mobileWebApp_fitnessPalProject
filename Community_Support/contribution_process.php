<!DOCTYPE>
<html>
<head>
    <title>Adding Contribution</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="../css/style.css">
    <?php include ('../TopMenu.php');?>
</head>

<body>
    <br><br><br><br><br><br>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/community_bg.jpg');"
        data-stellar-background-ratio="2">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <h1 class="mb-0 bread">Community Support in your Fitness Journey!!</h1>
                </div>
            </div>
        </div>
    </section>

    <?php
    include("../db_connection.php");
    ?>
    <?php
    $user_id = $_POST['user_id'];
    $user_name = $_POST['user_name'];
    $fit_story = $_POST['fit_story'];
    $img = $_POST['img'];
    $reliable_ressource = $_POST['reliable_ressource'];
    echo "User id".$user_id;
    ?>
    <?php
    $sql = "INSERT INTO community_support (sid, user_id, user_name, fit_story, img, reliable_ressource) 
            VALUES (0, '$user_id', '$user_name', '$fit_story', '$img', '$reliable_ressource' )";
    $result = $connect->query($sql);
    if ($result == FALSE) {
        echo "Error:( Please, try again. ";
    }

    echo "User id".$user_id;

    if ($result) {
        echo "Thank you for supporting the community!!!";
    } else {
        echo "Sorry, an error occured, please enter the information again";
    }
    ?>

<footer class="footer">
        <div class="row mt-5">
            <div class="col-md-6 col-lg-8">
                <p class="copyright">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>document.write(new Date().getFullYear());</script> All rights reserved
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
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

        <br><br><br><br><br><br>
    </footer>



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
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    <?php include ('../footer.php');?>
</body>
</html>