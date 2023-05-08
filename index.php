<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fitness Project</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/popUp.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <script src="js/mainCode.js"></script>
    <script src="https://kit.fontawesome.com/c2356f3c74.js" crossorigin="anonymous"></script>
    <?php include 'topMenu.php'; ?>
</head>

<body>

    <section class="home">
        <div class="max-width">
            <div class="home-content">
                <h3>Make Your <br> Body Shape</h3>
                <p><h2>Welcome! You are one step ahead to accomplish your dream Body.</h2> </p>
            </div>
            <div class="home-image">
                <img src="img/index.png">
            </div>
        </div>
    </section>

    <section id = "carouselSection">

            <!-- Slideshow container -->
        <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="img/carousel/car1.png" style="width:100%">
        </div>

        <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="img/carousel/car2.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="img/carousel/car3.jpg" style="width:100%">
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        </div>

    </section> 

    <section>
    <div class="image-container">
  <div class="image-item">
    <img src="img/1.main.jpg" style="width:100%">
    <p>Improve physical health: <br> </br>
    Regular exercise can help to improve your overall 
    physical health by reducing your risk of chronic 
    diseases such as heart disease, stroke, diabetes, and 
    certain types of cancer. It can also improve your strength, 
    flexibility, and endurance.</p>
  </div>
  <div class="image-item">
    <img src="img/2.main.jpg" style="width:100%">
    <p>Increase energy levels: <br></br>
    Regular exercise can help to boost your energy levels, 
    making you feel more alert and focused throughout the day.</p>
  </div>
  <div class="image-item">
    <img src="img/4.main.jpg" style="width:100%">
    <p>Boost mood and reduce stress: <br></br>
     Exercise has been shown to improve mood and reduce stress and anxiety. 
     This is due to the release of endorphins, which are natural chemicals in
      the body that promote feelings of happiness and well-being.</p>
  </div>
</div>


    </section>
    <?php include 'footer.php'; ?>

</body>
</html>
