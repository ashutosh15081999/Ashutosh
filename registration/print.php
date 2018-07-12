<?php
session_start();
if(isset($_POST['submit'])){
  
    include_once 'dbh.php';
    
    $date = mysqli_real_escape_string($link, $_POST['date']);
    $title = mysqli_real_escape_string($link, $_POST['title']);
    $discription = mysqli_real_escape_string($link, $_POST['discription']);
    $start = mysqli_real_escape_string($link, $_POST['start']);
	$end = mysqli_real_escape_string($link, $_POST['end']);
	$user = $_SESSION['username'];
	
	$sql = "INSERT INTO events(event_title, event_date, event_start, event_end, event_discription, event_user) VALUES ('$title', '$date', '$start', '$end', '$discription', '$user');";
     mysqli_query($link, $sql);
     header("Location: ../registration/index.php");
     
}
?> 
