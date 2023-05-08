<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fitness Project</title>
    
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/videoContainer.css" rel="stylesheet">
    <link href="../css/popUp.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c2356f3c74.js" crossorigin="anonymous"></script>
    <script src ="../js/popUp.js"></script> 

    <?php include '../topMenu.php'; ?>
</head>

<body>
    <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="muscle_group">Filter by Muscle Group:</label><br/>
        <select class = "filter" name="muscle_group" id="muscle_group" class="form-select form-select-sm" aria-label="Default select example" style="width: 200px; height: 50px">
            <option value="">All</option>
            <?php
                include("../db_connection.php");
                $sql = "SELECT DISTINCT muscle_group FROM exercises_demo";
                $result = $connect->query($sql);
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['muscle_group'] . "'>" . $row['muscle_group'] . "</option>";
                }
            ?>
        </select>
        <button class = "btn" type="submit">Filter</button>
    </form>

    <center> <h2> Exercise Demonstration </h2> </center> 
    
    <section class="videoC"> 

    <table>

        <?php
            include("../db_connection.php");
            $sql1 = "SELECT * FROM exercises_demo";
            if (!empty($_GET['muscle_group'])) {
                $muscle_group = $_GET['muscle_group'];
                $sql1 .= " WHERE muscle_group='$muscle_group'";
            }
            $result1 = $connect->query($sql1); 
            $i = 0;
            while ($row1 = $result1->fetch_assoc()) {
                $i++;
        ?>

        <?php if ($i % 2 == 1) { ?>
        <tr>
        <?php } ?>
            <td>  
            <center> 
                <p align="center"> 
                    <video width="400" controls>
                        <source src="<?php echo $row1['video_location']; ?>" type="video/mp4">
                    </video>
                    <br><br>
                    <h2><?php echo $row1['video_name']; ?></h2>
                    <a href="javascript:void(0)" onclick="popupfunction('<?php echo $i; ?>')" class="linktext">View Details</a>
                </p>
                

                <div id="popup<?php echo $i; ?>" class="white_content">
                <p align="center">
                    <video width="400" controls autoplay>
                        <source src="<?php echo $row1['video_location']; ?>" type="video/mp4">
                    </video>
                    <br><br>
                    <h2><?php echo $row1['video_name']; ?></h2>
                    <table> 
                    <tr>
                        <td>
                        <p><?php echo $row1['video_description']; ?></p>
                        <br>
                        </td>
                        <td>-</td>
                        <td>
                        <img class ="workoutsImage" src="<?php echo $row1['video_bodyTarget']; ?>" width="200px" />
                          </td>
                      </tr> 
                      <tr>
                          <td colspan="2">
                              <form method="post" action="add_favorite_Process.php">
                                  <input type="hidden" name="video_id" value="<?php echo $row1['video_id']; ?>">
                                  <button type="submit" class="btn" id="addPersonalWorkouts">Favorite</button>
                              </form>
                          </td>
                      </tr> 
                  </table> 
                  <a href="javascript:void(0)" onclick="popupclose('<?php echo $i; ?>')" class="close">X</a>
              </p>
          </div>

            
            <div id="fade<?php echo $i; ?>" class="black_content"></div>
          </center>
        </td> 
    <?php if ($i % 2 == 0) { ?>
    </tr>
    <?php } ?>
    
    <?php } ?>
    <?php if ($i % 2 == 1) { ?>
    <td></td>
    </tr>
    <?php } ?>
</table>

  </section>

  <?php include '../footer.php'; ?>

</body> 


</html>