<?php
    if(isset($_GET['submit']))
    {
    	$servername = "localhost";
    	$username = "root";
    	$password = "";
    	$dbname = "WorldCup2018";

      $team = $_GET["team"];
      $fname = $_GET["fname"];
      $lname = $_GET["lname"];
      $age = $_GET["age"];
      $goals = $_GET["goals"];

      // Create connection
    	$conn = new mysqli($servername, $username, $password, $dbname);
      $sql = "INSERT INTO `players` (`team`, `fname`, `lname`, `age`, `goals`) VALUES ('$team', '$fname', '$lname', '$age', '$goals');";
      mysqli_query($conn,$sql);
      $conn->close();
    }
header('Location: /WorldCup2018/PlayersRegistration.html');
?>
