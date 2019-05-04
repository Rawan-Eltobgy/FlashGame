<?php
include "/connecting.php";
$score1 = $_GET['score1'];
$score2 = $_GET['score2'];
if($score1>$score2)
{
	$name = $_GET['player1'];
	$sql = "INSERT INTO scores (score, name) VALUES ( ".$score1.", '".$name."')"; 
}
elseif ($score1==$score2) {
	echo "<h2 style="color: white;"> Try again </h2>";
}
else
{
	$name = $_GET['player2'];
	$sql = "INSERT INTO scores (score, name) VALUES ( ".$score2.", '".$name."')";
}


if ($conn->query($sql) === TRUE) {
    //for debuging 
    echo "New record created successfully";
    
} else {
    //also for debuging
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>