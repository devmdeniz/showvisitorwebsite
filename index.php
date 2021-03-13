<!DOCTYPE html> <?php

include("./system/connection.php");

$lastvisitornumber = $conn -> query("SELECT * FROM visitors ORDER BY visitornumber DESC LIMIT 1");
$outputs = $lastvisitornumber->fetch_array();

?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div id = "image"></div>
        <div id = "container">
            <div id = "titleText"><h1 id = "text">Welcome to Isil Collage Robotics Coding Stand</h1>
                                  <h3 id = "text2">Total number of visitors</h3></div>
            <div id = "circles">
              <div class = "one" id="second">
                <h3 class = "day"><?php echo $outputs[1]; ?></h3>
              </div>
           </div>
        </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <form action="system/update.php" method="post">
      <input pattern="\d*" type="text" placeholder="Enter the Visitor" name="updatenumber" required>
      <button type="submit">Save Visitors</button>
    </form>
    <form action="system/delete.php" method="post">
      <input pattern="\d*" type="text" placeholder="Delete the Visitor" name="deletenumber" required>
      <button type="submit">Delete Visitors</button>
    </form>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>