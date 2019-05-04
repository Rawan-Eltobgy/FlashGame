<!DOCTYPE html>
<html>
<head>
	<title>Air Hockey</title>
	<style type="text/css">
		@font-face {
    font-family: AtariFont;
    src: url(ARCADE_C.woff);
}
#tab{ color: white;
	text-decoration:none;
	padding-right:100px;
	font-family: Arial;
	 font-size: 30px;
	}
h1:hover{
	font-size: 150px;
	color: black;
	background-image: url(weirdbg.png);
}
h2{
	color: white;
	text-align: center;
	font-family: Arial;
	font-size: 40px;
}
p{
	color: white;.
}
button{
	text-decoration: none;
	color: white;
	text-align: center;
	background-color: black;

}
#tabScores{
	color: white;
	padding-left: 450px;
	text-align: center;
}
a{
	text-decoration: none;
}
th{
	font-size: 30px;
	padding-left: 20px;
	padding-right: 20px;

}
p{
  font-size: 20px;
  font-family: times new roman;
  text-align: center;
}
.divs{
  width: 80%;
  margin-left: 10%;
  background-image: url(divbg.png);
  border-radius: 15px;

}
.bunup{
	padding-left: 500px;
}
</style>


</head>
<body style="background-color: black;">
	<div id="Navigation" class="divs" style="height:630px;">
	<br>
	<br>
		<h1 style="color: white; font-family: AtariFont; font-size: 150px; text-align: center;"> Air Hockey</h1>

	<table style="width:100%;height:50px;text-align:center;">
<tr>
<td><a href="game.html" style="padding-left:100px;" id="tab">
Play Now!
</a>
</td>
<td> <a href="#howtoplaygo2" id="tab">
How to play
</a>
</td>
<td> <a href="#topscores" id="tab">
Top Scores
</a>
</td>
</tr>
</table>
<br>
<br>
	</div>
  <div style="height: 30px;"></div>
  <div style="height: 20px;" id="howtoplaygo2"></div>
	<div id="howtoplay" class="divs" style=" height: 630px;">
	<br>
	<br>
		<h2> How to play</h2>
		<br>
		<br>
		<br>
		<p >
		It's an air hockey game with two players playing against each other.
    <br>
    <br>
1- Player one should use the right and left arrows to control the bottom paddle.
<br>
<br>
2-Player two should use the 'A' and 'D' buttons to control the upper paddle.
<br>
<br>
3-A player scores a point if he manages to shoot the ball inside the corresponding goal, the player against him should defend his goal.
<br>
<br>
4-The player who manages to score higher points i 60 seconds, wins the game.
		</p>
<div class="bunup"><button > <a href="#Navigation">Go up!</a></button></div>
	</div>
  <div style="height: 50px;"></div>
	<div id="topscores" class="divs" style="height: 630px; margin-top: 18px;">
	<br>
	<br>
		<h2> Top Scores</h2>
		<br>
		<br>
		<br>
    <table id="tabScores">
      <tr>
        <th>Name</th>
        <th> Score</th>
      </tr>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "game";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $db);
    
    $sql = "SELECT * FROM scores ORDER BY score DESC";
    $result = $conn->query($sql);
    $scores = array();
    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
            $temp['name'] =  $row["name"];
            $temp['score'] =  $row["score"];
            array_push($scores, $temp);
            echo "<tr><td>" . $row["name"]. "</td><td>" . $row["score"]. "</td></tr>";
        }
        }
        
     
    else {
        echo "<tr><td> No results :'( </td></tr>";
    }
    
    json_encode($scores);
    $conn->close();

    
    //$scores array holdes all the values  
?>



    </table>
<div class="bunup" ><button> <a href="#Navigation">Go up!</a></button> </div>
	</div>

</body>
</html>