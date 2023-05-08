<!DOCTYPE html>
<html>
<head>
	<title>Submit</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/bannerImages.css" rel="stylesheet">
    <link href="../css/personalized_workouts.css" rel="stylesheet">
    <script src ="../js/personalized_workouts.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c2356f3c74.js" crossorigin="anonymous"></script>

    <?php include '../topMenu.php'; ?>
   
</head>
<body>
  <section>
  <?php
    include("../db_connection.php");
    //include ("header.php");
    ?>
  <form class = "form" name="contribution" action="contribution_process.php" method="POST">    
    <div class = "container" style="background: green; width: 500px">
    <div >
			<img class = "miniBanner" src="https://www.girlsgonestrong.com/wp-content/uploads/2020/03/TheImportanceOfCommunityInFitness-1200x630-1-1024x538.png" style="width: 500px; padding:10px;  overflow: auto; " alt="Banner Image">
		</div>
    
      <h1>Community Support in your fitness Progress</h1><br/>
      
      <div class = "inputInformation">
        <div class ="col">
          
          <div class = "row">
          <label class="label-icon">User Email </label>
            <input type = "text" name = "user_id" id = "user_id" style = "color: black; width: 200px; border-radius: 20px" required> 
          </div> <br/>
          <div class = "row">
          <label class="label-icon">First and Last Name </label>
            <input type = "text" name = "user_name" id = "user_name"  style = "color: black; width: 200px;border-radius: 20px" required> 
          </div> <br/>
          <div class = "row">
          <label class="label-icon">User Image </label>

          <input type="text" name= "img" id = "img" style="color: black; width: 100px; border-radius: 20px;" required>
          </div> <br/>
          <div class = "row">
          <label class="label-icon"> Fitness Testimony </label>

          <input type="text" name = "fit_story" id = "fit_story"   style="color: black; width: 100px; border-radius: 20px;" required>
          </div> <br/>
          <div class = "row">
          <label class="label-icon">Reliable Resource </label>

            <input type = "type" name = "reliable_ressource" id = "reliable_ressource"  style = "color: black; width: 200px;border-radius: 20px " required> 
          </div> <br/>
        </div>
      </div>

      <button type = "submit" class = "ProgressButton"> Add Contribution
      </div>
    </div>
</form>

  </section>
<?php include '../footer.php'; ?>

</body>
</html>
