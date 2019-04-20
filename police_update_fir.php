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
<?php require_once('mysqli_connect.php'); 
$query = "SELECT * FROM  Reports ";
$result = mysqli_query($db, $query);
$rows = mysqli_num_rows($result);

?>


<div id="p1" class="parent_police page1">
            
            
           
           
<div class="cols" style="justify-content: space-between;">
    <div>
    <div class="head margin">
                <p style="color: rgb(68,68,68,1);font-size: 30px;margin-bottom: 0;"><b>All the FIR</b></p>
    </div>
           <?php while($fir = mysqli_fetch_assoc($result)) {
           $user = $fir['Username'];
           $query1 = "SELECT * FROM  Complainant WHERE Username ='$user'";
           $result1 = mysqli_query($db, $query1);
           $complainant = mysqli_fetch_assoc($result1);
           
           ?>

           <div class="rows">

            <div class="margin" class="form1"  style="margin-top: 25px;padding-bottom: 25px">
            	<div class="rows">
                <div class="cols">
                    <div class="head margin">
                            <p style="color: rgb(68,68,68,1);font-size: 30px;margin-bottom: 0;"><b>FIR No</b></p>
                    </div>
                    <div class="rows" style="">
                            <div class="input-group" style="margin-top: 5px;">
                                <input  id = "name" class="inputs" type="text" name="firno" value="<?php echo $fir['FIRNo'] ?>"  required>
                            </div>
                    </div>
                    

                </div>
                <div class="cols" style="padding-left: 50px;">
                    <div class="head margin">
                            <p style="color: rgb(68,68,68,1);font-size: 30px;margin-bottom: 0;"><b>FIR Date</b></p>
                    </div>
                    <div class="rows" style="">
                            <div class="input-group" style="margin-top: 5px;">
                                <input  id = "accname" class="inputs" type="text" name="accname"  value="<?php echo $fir['FIRDate'] ?>" required>
                            </div>
                    </div>
                </div>
                <div class="cols" style="padding-left: 50px;">
                    <div class="head margin">
                            <p style="color: rgb(68,68,68,1);font-size: 30px;margin-bottom: 0;"><b>Complainant Name</b></p>
                    </div>
                    <div class="rows" style="">
                            <div class="input-group" style="margin-top: 5px;">
                                <input  id = "accname" class="inputs" type="text" name="accname"  value="<?php echo $complainant['CompName'] ?>" required>
                            </div>
                    </div>
                </div>
                <div class="cols" style="padding-left: 50px;">
                    <div class="head margin">
                            <p style="color: rgb(68,68,68,1);font-size: 30px;margin-bottom: 0;"><b>Compalinant Contact</b></p>
                    </div>
                    <div class="rows" style="">
                            <div class="input-group" style="margin-top: 5px;">
                                <input  id = "accname" class="inputs" type="text" name="accname"  value="<?php echo $complainant['CompContact'] ?>" required>
                            </div>
                    </div>
                </div>
                </div>

                    <div class="input-group" style="width: 50%;">
                    <div class="rows">
                           <!-- <input href="policeviewfir.php" type="submit" value="View Full FIR" name="submit__"> -->
                        <?php echo "<a href='policeviewfir.php?fir=$fir[FIRNo]'> View Full FIR </a>"; ?>
                    </div>
                    </div>
            </div>
            </div>
            <?php } ?>
        </div>
            
</div>


    </div>



</body>
</html>