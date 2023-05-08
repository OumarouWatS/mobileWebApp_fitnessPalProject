
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fitness Project</title>
    
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/videoContainer.css" rel="stylesheet">
    <link href="../css/popUp.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <script src="https://kit.fontawesome.com/c2356f3c74.js" crossorigin="anonymous"></script>
    <script src ="../js/popUp.js"></script> 
    <?php include '../topMenu.php'; ?>
</head>

<body>
    <h1> <center> Equipment </center></h1>
  <section class="videoC"> 
  <table>
  <?php
    include("../db_connection.php");
    $sql1 = "SELECT * FROM equipment_table"; 
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
                <img style = "width:300px" src="<?php echo $row1['img_work']; ?> ">
                
                <br><br>
                <h2><?php echo $row1['img_name']; ?></h2>
                <a href="javascript:void(0)" onclick="popupfunction('<?php echo $i; ?>')" class="linktext">View Details</a>
            </p>
            

            <div id="popup<?php echo $i; ?>" class="white_content">
              <p align="center">
              <img style = "width:300px" src="<?php echo $row1['img_work']; ?>">
                  <br><br>
                  <h2><?php echo $row1['img_name']; ?></h2>
                  <table> 
                      <tr>
                          <td>
                              <p><?php echo $row1['img_description']; ?></p>
                              <br>
                          </td>
                          <td>
                              <img style = "width:300px" src="<?php echo $row1['img_bodyTarget']; ?>"  />
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