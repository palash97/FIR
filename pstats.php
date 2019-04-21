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

<?php
require_once("mysqli_connect.php");
session_start();

$countfir ="";
$accusedfir="";
$sectionfir="";
$pcrime = "";
$crimetype = "";
$pusername = mysqli_real_escape_string($db, $_SESSION['username']);
$query  = "SELECT PStation FROM Registration WHERE Username = '$pusername'";
$result = mysqli_query($db, $query);
$pstation = mysqli_fetch_assoc($result);
//print_r($pstation);
$pstation = $pstation['PStation'];

if (isset($_POST['query1'])) {
    $query1 = "SELECT COUNT(FIRNo) FROM Reports WHERE PStation = '$pstation'";
    $result1 = mysqli_query($db, $query1);
    $ans = mysqli_fetch_assoc($result1);
    //print_r($ans);
    $countfir = (int)$ans['COUNT(FIRNo)'];

}

if (isset($_POST['query2'])) {
	$accused = mysqli_real_escape_string($db, $_POST['accused']);
    $query1 = "SELECT COUNT(FIRNo) FROM Accused WHERE AcName = '$accused'";
    $result1 = mysqli_query($db, $query1);
    $ans = mysqli_fetch_assoc($result1);
    $accusedfir = (int)$ans['COUNT(FIRNo)'];
}


if (isset($_POST['query3'])) {
	$section = mysqli_real_escape_string($db, $_POST['section']);
    $query1 = "SELECT COUNT(FIRNo) FROM Reports WHERE Section = '$section'";
    $result1 = mysqli_query($db, $query1);
    $ans = mysqli_fetch_assoc($result1);
    $sectionfir = (int)$ans['COUNT(FIRNo)'];
}


if (isset($_POST['query4'])) {
	$query1 = "SELECT COUNT(FIRNo) FROM Reports WHERE PStation = '$pstation'";
    $result1 = mysqli_query($db, $query1);
    $ans = mysqli_fetch_assoc($result1);
    $count_fir = (int)$ans['COUNT(FIRNo)'];
    //printf($count_fir);
    $query2 = "SELECT COUNT(FIRNo) FROM Reports";
    $result2 = mysqli_query($db, $query2);
    $ans2 = mysqli_fetch_assoc($result2);
    $total_fir = (int)$ans2['COUNT(FIRNo)'];
    //printf($total_fir);
    $pcrime = ($count_fir/$total_fir)*100;
    
}

if (isset($_POST['query5'])) {
	$ctype = mysqli_real_escape_string($db, $_POST['ctype2']);
	echo $ctype;
	$query1 = "SELECT COUNT(Crimes.FIRNo) FROM  Crimes INNER JOIN Reports ON Crimes.FIRNo = Reports.FIRNo  WHERE CrimeType ='$ctype' AND PStation='$pstation' ";
    $result1 = mysqli_query($db, $query1);
    $ans = mysqli_fetch_assoc($result1);
    //print_r($ans);
    $crimetype = (int)$ans['COUNT(Crimes.FIRNo)'];  
}


?>




<div class="head margin">
        <p style="color: rgb(68,68,68,1);font-size: 30px;"><b>Stats</b></p>
</div>

<div style="display: flex;flex-direction: column;">
		<form method="post" action="pstats.php" style="padding: 20px; display: flex; flex-direction: row;">
		<div><button type="submit" name="query1" class="button" style="height:50px ; width: 200px;">Total FIR's</button></div>
        <div style="padding: 5px;padding-left: 10px;"><input  id = "name" class="inputs" type="text" name="totalfir" value="<?php echo $countfir ?>"></div>
        </form>
        


        <form method="post" action="pstats.php" style="padding: 20px; display: flex; flex-direction: row;">
		<div><button type="submit" name="query2" class="button" style="height:50px ; width: 200px;">No. of FIR's againts</button></div>
		<div style="padding: 5px;padding-left: 10px;"><input class="inputs" type="text" name="accused" placeholder="Enter Accused Name"></div>
        <div style="padding: 5px;padding-left: 10px;"><input  id = "name" class="inputs" type="text" name="acname" value="<?php echo $accusedfir ?>"></div>
        </form>

        <form method="post" action="pstats.php" style="padding: 20px; display: flex; flex-direction: row;">
		<div><button type="submit" name="query3" class="button" style="height:50px ; width: 200px;">No. of FIR's under</button></div>
		<div style="padding: 5px;padding-left: 10px;"><input class="inputs" type="text" name="section" placeholder="Enter Section"></div>
        <div style="padding: 5px;padding-left: 10px;"><input  id = "name" class="inputs" type="text" name="sectionfir" value="<?php echo $sectionfir ?>"></div>
        </form>


        <form method="post" action="pstats.php" style="padding: 20px; display: flex; flex-direction: row;">
		<div><button type="submit" name="query4" class="button" style="height:50px ; width: 200px;">Percentage Crime</button></div>
        <div style="padding: 5px;padding-left: 10px;"><input  id = "name" class="inputs" type="text" name="pcrime" value="<?php echo $pcrime ?>"></div>
        </form>

        <form method="post" action="pstats.php" style="padding: 20px; display: flex; flex-direction: row;">
		<div><button type="submit" name="query5" class="button" style="height:50px ; width: 200px;">Crimes of :</button></div>
		<div style="padding: 5px;padding-left: 10px;"><input class="inputs" type="text" name="ctype2" placeholder="Enter Crime Type"></div>
        <div style="padding: 5px;padding-left: 10px;"><input  id = "name" class="inputs" type="text" name="ctype" value="<?php echo $crimetype ?>"></div>
        </form>


	
</div>


</body>
</html>