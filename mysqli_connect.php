<?php

// DEFINE ('DB_USER', 'root');
// DEFINE ('DB_PASSWORD', 'palash');
// DEFINE ('DB_HOST', 'localhost');
// DEFINE ('DB_NAME', 'FIR');

 
// $dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$db = mysqli_connect('localhost' , 'root' , 'palash' , 'fir');

if($db){
	echo "connected";
}
else{
	echo "not connected";
}
// $query = "INSERT INTO Registration (Username)
//           VALUES('username')";

// mysqli_query($dbc, $query);

$name = "palsh";
$query = "INSERT INTO user VALUES ('$name')";
echo $query;
$result = mysqli_query($db,$query);
echo $result;
if($result){
	echo "inserted";
	echo "$result";
}
else{
	echo "not inserted";
	echo $result;
}

?>
