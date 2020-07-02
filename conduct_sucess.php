<?php

include ("connect.php");
$bus_no='12';
$sql1 = "SELECT count(id) as count FROM `passenger_info`";
$result1 = mysqli_query($link,$sql1);
$row = mysqli_fetch_assoc($result1);
$res = $row["count"];
?>



<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>newform</title>

   <style>
h1{
    color:white;
    text-align:center;

}
.count{
    padding:50px;
    border-style: solid;
}
h3{
    text-align:center;
    color:white;
    font-size:50px;
}
   </style>
</head>

<body>
    <h1>Passenger Count</h1>
    <div class="count">
    <h3>Count <?php

echo "$res";
?></h3>
    
    <div>
</body>

</html>