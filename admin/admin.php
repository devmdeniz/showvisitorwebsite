<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/admin.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    </head>
    <body>



        <input type = "checkbox" id = "check">


        <header>
            <label for = "check"><i class="fas fa-bars" id = "sidebar_btn"></i></label>
            <div class = "left_area">
                <h3>Isil Collage<span><?php echo " ". strtoupper($_SESSION["determinator"]);?></span></h3>
            </div>
            <div class="right_area">
                <a href = "login.php" class = "logout_btn">Logout</a>
            </div>
        </header>
        <div class = "sidebar">
            <center><img src = "../assets/deniz.jpg" class = "profile_image"><h4>DevMDeniz</h4></center>  
                <a href = "../system/admindeterminator.php?determinator=dashboard"><i class="fas fa-desktop"></i><span>Visitor Number</span></a>
                <a href = "../system/admindeterminator.php?determinator=create"><i class="fas fa-cogs"></i><span>Create Visitor</span></a>
                <a href = "../system/admindeterminator.php?determinator=update"><i class="fas fa-table"></i><span>Update Visitor</span></a>
                <a href = "../system/admindeterminator.php?determinator=delete"><i class="fas fa-th"></i><span>Delete Visitor</span></a>
        </div>


        <div class = "content">
            <?php
            if($_SESSION["determinator"] == "dashboard") {
                include("./sections/dashboard.php");
            } else if($_SESSION["determinator"] == "create") {
                include("./sections/create.php");
            } else if($_SESSION["determinator"] == "update") {
                include("./sections/update.php");
            } else if($_SESSION["determinator"] == "delete") {
                include("./sections/delete.php");
            } 
            ?>
        </div>


    </body>
</html>
