<?php

include ("connect.php");
$bus_no='12';
$sql1 = "SELECT `Route_no` FROM `crew_info` WHERE Bus_no='$bus_no'";
$result1 = mysqli_query($link,$sql1);
$row = mysqli_fetch_assoc($result1);
$res = $row["Route_no"];




if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["Name"];
    $phone_Number = $_POST["Phone_Number"];
    $sql = "INSERT INTO `passenger_info`( `name`, `phone`, `bus_no`, `route_no`)
     VALUES ('$name','$phone_Number','$bus_no','$res')";

    $result = mysqli_query($link,$sql);

    if($result == true){
      echo '<script>alert("Thank you!!")</script>';  
      echo '<script>window.location="passenger_sucess.php"</script>'; 
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
<?php
if(mysqli_num_rows($result1)==0){
    ?>
        <h1 style="text-align:ceter;color:white">Sorry cannot acess the form!!!! </h1>
<?php        
}else{
    
?>


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

              <span   >KSRTC Passenger Info </span><br>
            </div>

            <div class="app-contact"></div>

          </div>

          <div class="screen-body-item">

            <div class="app-form">

              <div class="app-form-group">

                <input class="app-form-control" name = "Name"  placeholder="NAME" required >

              </div>

              <div class="app-form-group">

                <input class="app-form-control" name = "Phone_Number" pattern="[0-9]{10}" placeholder="CONTACT NO" required >

              </div>

        

              <div class="app-form-group message">

                <button class="app-form-button">CANCEL</button>

                <button class="app-form-button">SEND</button>

              </div>

            </div>

        </div>

      </div>

      </form>
      <?php        
}
    
?>

  </body>

</html>