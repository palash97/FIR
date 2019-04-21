
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<title>Police Fir Registration</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" href="Home.css">
	<script type="text/javascript" src="purify.min.js"></script>
</head>
<body>


<div class="newfir" style="padding: 20px;">
	    <div class="rows" style="justify-content: space-between;">
	    <?php 
		session_start();
		if(isset($_SESSION['username'])) {		
		?>
		<div><h1>Welcome <?=$_SESSION['name']?></h1></div>
		<div class="logout" style="">

            <a href="home.php?logout='1'"><button type="button" class="button" style="height:50px ; width: 200px;">Police Logout</button></a>
        </div>
        </div>
        <hr>
    	<a target="_blank" href="police_update_fir.php"><button type="button" class="button" style="height:50px ; width: 200px;">View all FIR</button></a>
    	<a target="_blank" href="pstats.php"><button type="button" class="button" style="height:50px ; width: 200px;">Show Stats</button></a>
 </div>

</body>
</html>

<?php
}
?>