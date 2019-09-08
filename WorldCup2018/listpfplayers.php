<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>List of players</title>
    <link rel="stylesheet" type="text/css" href="styleWorldCup2018.css">
    <link rel="stylesheet" type="text/css" href="table_style.css">
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "WorldCup2018";
$sql="";
    if(isset($_GET['team']))
    {
      switch ($_GET['team']) {
        case 'France':
          $sql = "SELECT * FROM `players` WHERE `team` = 'France';";
          break;
        case 'Croatia':
          $sql = "SELECT * FROM `players` WHERE `team` = 'Croatia';";
          break;
        case 'Belgium':
          $sql = "SELECT * FROM `players` WHERE `team` = 'Belgium';";
          break;
      }
    }
    ?>
  </head>
  <body>
    <section class="sideBar3">
  		<a href=""><img src="images/twitter.png" width="30px"></a><br>
  		<a href=""><img src="images/instagram.png" width="30px"></a><br>
  		<a href=""><img src="images/face.png" width="30px"></a><br>
  		<a href=""><img src="images/gmail.png" width="30px"></a><br>
  		<a href=""><img src="images/snap.png" width="30px"></a><br>
  	</section>
		<!--Header-->
		<section class ="nheader">
			<div class="logo">
				<a href=""><img src="images/WorldCup2018logo.png"width= "250px"></a>
			</div>
		</section>
		<!--Menu-->
		<section class="nmenu">
			<div class="nnmenu">
				<ul>
					<li><a href="Home.html">Home</a></li>
					<li><a href="welcome.html">Welcome</a></li>
					<li><a href="abautus.html">About us</a></li>
					<li><a href="contactus.html">Contact us</a></li>
					<li><a href="WorldCup2018.html">World Cup 2018</a></li>
          <li><a href="topthreeteams.html">Top three teams</a></li>
					<li><a href="PlayersRegistration.html">Players Registration</a>
					</li>
          <li><a class="active" href="listpfplayers.phpl">Players list</a></li>
				</ul>
			</div>
		</section>

		<section style="text-align: center; padding-top: 200px; padding-bottom: 300px;">
		<form class="" action="listpfplayers.php" method="get">
<div class="content">
  <td>
  <h4>team</h4>
  <br>
  <select name="team" onchange="this.form.submit()">
  <option value="#">select team</option>
  <option value="France">France</option>
  <option value="Croatia">Croatia</option>
  <option value="Belgium">Belgium</option>
  </select>
  </td>

  <table class="table-fill">
<thead>
<tr>
<th class="text-left">Team</th>
<th class="text-left">First name</th>
<th class="text-left">Last name</th>
<th class="text-left">Age</th>
<th class="text-left">goals</th>
</tr>
</thead>
<tbody class="table-hover">
  <?php
  if($sql!="")
  {
    $conn = new mysqli($servername, $username, $password, $dbname);
    $topGoaler = "SELECT goals FROM players WHERE team='".$_GET['team']."' ORDER BY goals DESC LIMIT 1";
    $result = $conn->query($topGoaler);
    if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {
      $topGoaler=$row["goals"];
    }
    }

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
       // output data of each row
       $topGoalerClass="";
       while($row = $result->fetch_assoc()) {
         if($row["goals"]==$topGoaler)
         {
           $topGoalerClass="topGoaler";
         }
         else {
           $topGoalerClass=$row["goals"];
         }
       echo '<tr>
       <td class="text-left">'.$row["team"].'</td>
       <td class="text-left">'.$row["fname"].'</td>
       <td class="text-left">'.$row["lname"].'</td>
       <td class="text-left">'.$row["age"].'</td>
       <td class="text-left '.$topGoalerClass.'">'.$row["goals"].'</td>
       </tr>';
       }
     }
  }
  ?>
</tbody>
</table>
</div>
		</form>
		</section>

		<!--footer-->
		<section class="foter">
			<div>
				<a href=""><img src="images/twitter.png" width="30px"></a>
				<a href=""><img src="images/instagram.png" width="30px"></a>
				<a href=""><img src="images/face.png" width="30px"></a>
				<a href=""><img src="images/gmail.png" width="30px"></a>
				<a href=""><img src="images/snap.png" width="30px"></a>
				<p>Copyright Â© 2018 <a href="https://www.webprogrammingsite.com" style="text-decoration: none; color: white">Web Programming Site </a></p>
        <br>
<a href="#top">Go to the Top</a>
				<br>
			</div>
		</section>
    <script type="text/javascript">
    setTimeout(function() { window.location=window.location;},15000);
    </script>
		<!--end of footer-->
</body>
</html>
