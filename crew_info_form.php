<?php
include ("connect.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $name = $_POST["Name"];
    $PF_number = $_POST["PF_number"];
    $Badge_number = $_POST["Badge_number"];
    $Bus_number = $_POST["Bus_number"];
    $Route_number = $_POST["Route_number"];
    $status= 1;
    
    $sqll="INSERT INTO `crew_info`(`Name`, `PF_no`, `Badge_no`, `Bus_no`, `Route_no`, `stautus`) 
    VALUES ('$name','$PF_number','$Badge_number','$Bus_number','$Route_number','$status')";
    $resultt = mysqli_query($link,$sqll); 
    if($resultt == true){
        echo '<script>alert("Logeed in succesfully!!")</script>';  
        echo '<script>window.location="crew_succes.php"</script>'; 
    }
    else{
        echo "error!!!";
    }
  
 }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>newform</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

<form action="" method = "POST">
<div class="background">
    <div class="container">
      <div class="screen">
        <div class="screen-header">
        <div class= "formm">
            <div class="screen-header-button close"></div>
            <div class="screen-header-button maximize"></div>
            <div class="screen-header-button minimize"></div>
          </div>
          <div class="screen-header-">
          </div>
        </div>
        <div class="screen-body">
          <div class="screen-body-item left">
            <div class="app-title">
              <span   >KSRTC Crew Info </span><br>
              
            </div>
            <div class="app-contact"></div>
          </div>
          <div class="screen-body-item">
            <div class="app-form">
              <div class="app-form-group">
                <input class="app-form-control" name = "Name" placeholder="NAME" required >
              </div>
              <div class="app-form-group">
                <input class="app-form-control" name = "PF_number" placeholder="PF number" required >
              </div>
              <div class="app-form-group">
                <input class="app-form-control" name = "Badge_number" placeholder="Badge number" required >
              </div>
              <div class="app-form-group">
                <input class="app-form-control" name = "Bus_number" placeholder="Bus number" required >
              </div>
              <div class="app-form-group">
                <input class="app-form-control" name = "Route_number" placeholder="Route number" required >
              </div>
              
              <div class="app-form-group message">
                <button class="app-form-button">CANCEL</button>
                <button class="app-form-button">SEND</button>
              </div>
            </div>
        </div>
      </div>
      </form>
      
    </div>
  </div>
</div>
  </body>
</html>