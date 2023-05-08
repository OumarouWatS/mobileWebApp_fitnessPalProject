<?php
// Include the database connection file
include_once '../db_connection.php';

// Prepare the SQL query to retrieve data from your database
$sql = "SELECT * FROM workoutplans";

// Execute the SQL query and store the result in a variable
$result = mysqli_query($connect, $sql);

// Close the database connection
mysqli_close($connect);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fitness Project</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/bannerImages.css" rel="stylesheet">
    <link href="../css/popUp.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <script src="../js/mainCode.js"></script>
    <script src ="../js/popUp.js"></script> 
    <script src="https://kit.fontawesome.com/c2356f3c74.js" crossorigin="anonymous"></script>
    <?php include '../topMenu.php'; ?>
</head>

<body>
    <section>
        <img src="../img/bannerWorkout.jpg" alt="Image description">
        <div class="image-text">
            <h2>Free Workout Plans</h2>
            <h2><center> Start your goal Today!</center> </h2>
        </div>
    </section>

    <section>
  <div>
    <table>
      <h1>Welcome</h1>
      <p><center>Here you will find categories of what is your goal<br>The page will show you a weekly exercise</center><br></p>
      <?php
      $counter = 0; // initialize counter
      while ($row = mysqli_fetch_assoc($result)) {
        if ($counter % 4 == 0) { // start a new row after every 4 images
          echo '<tr>';
        }
      ?>
        <td>
          <p align=justify>
            <a href="javascript:void(0)" onclick="popupfunction('<?php echo $row['sid']; ?>')" class=linktext>
              <img src="<?php echo $row['image_workout']; ?>" /><br><h2> <?php echo $row['name_workout']; ?></h2>
            </a>
          </p>

          <div id="popup<?php echo $row['sid']; ?>" class="white_content">
            <p align=justify><br><br>
              <img src="<?php echo $row['image_workout']; ?>" /><br>
              <center>
                <table>
                  <tr><td><p><h2> <?php echo $row['name_workout']; ?></h2><br><?php echo $row['description_workout']; ?></p></td></tr>
                </table>
              </center>

              <br><br>
              <a href="javascript:void(0)" onclick="popupclose('<?php echo $row['sid']; ?>')" class=close>X</a>
            </p>
          </div>

          <div id="fade<?php echo $row['sid']; ?>" class="black_content"></div>
        </td>
      <?php
        $counter++;
        if ($counter % 4 == 0) { // close the row after every 4 images
          echo '</tr>';
        }
      } 
      if ($counter % 4 != 0) { // close the last row if it's not complete
        echo '</tr>';
      }
      ?>
    </table>
  </div>
</section>


    
    <?php include '../footer.php'; ?>

</body> 


</html>