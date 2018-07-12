<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delta 3 task</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
    <nav>
        <div class="main-wrapper">
          <ul>
              <li><a href="index.php" style = "color:red; font-size:30px; display:block; text-decoration:none; background-color:#f0f0f0; width:200px;">Home page</a></li>  
          </ul>
          
        </div>
    </nav>
</header>
<br>
<br>
<section class="main-container">
        <div class="main-wrapper">
            <h2>YOUR APPOINMENTS</h2>
            <br><hr>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "registration");
            $temp = $_SESSION['username'];
            $sql = "SELECT * FROM events WHERE event_user = '$temp'";
            $result = mysqli_query($conn, $sql);
           
            if(mysqli_num_rows($result)>0){ 
            while($arr = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
               
               $title = $arr['event_title'];
               $date = $arr['event_date'];
               $start = $arr['event_start'];
               $end = $arr['event_end'];
               $des = $arr['event_discription'];
               
                
               echo "<br>".'<strong>TITLE:</strong>'.$title."<br>".'<strong>DATE:</strong>'.$date."<br>".'<strong>START TIME:</strong>'.$start."<br>".'<strong>END TIME:</strong>'.$end."<br>".'<strong>DISCRIPTION:</strong>'.$des."<br>";    
     
 
        
  }} 
?>
            </div>
    </section>
</body>
</html>