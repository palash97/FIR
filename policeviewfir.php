<?php include('firupdate_db.php'); ?>
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


<?php require_once('mysqli_connect.php'); 
$firno = $_GET['fir'];
$query = "SELECT * FROM  Complainant WHERE FIRNo = '$firno' ";
$query1 = "SELECT * FROM  Crimes WHERE FIRNo = $firno";
$query2 = "SELECT * FROM  Accused WHERE FIRNo = $firno";
$query3 = "SELECT * FROM  PoliceStation WHERE FIRNo = $firno";
$result = mysqli_query($db, $query);
$result1 = mysqli_query($db, $query1);
$result2 = mysqli_query($db, $query2);
$complainant = mysqli_fetch_assoc($result);
$crimes = mysqli_fetch_assoc($result1);
$accused = mysqli_fetch_assoc($result2);
$result3 = mysqli_query($db, $query3);
$policestation = mysqli_fetch_assoc($result3);
// print_r($result);
?>



</head>
<body>
    <div id="p1" class="parent page1">
            <div class="head margin">
                <p style="color: rgb(68,68,68,1);font-size: 30px;margin-bottom: 0;"><b>FIR NO. <?php echo $_GET['fir'];?></b></p>
            </div>



            <form class="margin"  id="form1" class="form1"  style="margin-top: 25px;padding-bottom: 25px;" method="post" action="policeviewfir.php">
                <div class="rows">
                <div class="cols">
                    <div class="head margin">
                            <p style="color: rgb(68,68,68,1);font-size: 30px;margin-bottom: 0;"><b>Complainer detail</b></p>
                    </div>
                    <div class="rows" style="">
                            <div class="input-group" style="margin-top: 5px;">
                                <label class="labels">FIR No:</label>
                                <input  id = "firno" class="inputs" type="text" name="firno" value="<?php echo $firno ?>" required>
                                <p class="please_fill">Please fill this field</p>
                            </div>
                    </div>
                    <div class="rows" style="">
                            <div class="input-group" style="margin-top: 5px;">
                                <label class="labels">Complainer Name:</label>
                                <input  id = "name" class="inputs" type="text" name="campname" value="<?php echo $complainant['CompName'] ?>" required>
                                <p class="please_fill">Please fill this field</p>
                            </div>
                    </div>
                    <div class="rows" style="">
                            <div class="input-group" style="margin-top: 5px;">
                                <label class="labels">Complainer Contact no::</label>
                                <input  id = "tel" class="inputs" type="tel" name="comptel" value="<?php echo $complainant['CompContact'] ?>" required>
                                <p class="please_fill">Please fill this field</p>
                            </div>
                    </div>
                    <div class="input-group" style="">
                                <label class="labels">Gender :</label>
                                <div id="gender">
                                        <div class="rows soc">
                                            <select style="height:34px;width:101px;" class="gender-button" name="compgender" value="<?php echo $complainant['CompGender'] ?>" required>    
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                </div>
                    </div>
                    <div class="rows" style="">
                            <div class="input-group" style="margin-top: 5px;">
                                <label class="labels">Complainer Nationality:</label>
                                <input  id = "nationality" class="inputs" type="text" name="compnationality" value="<?php echo $complainant['CompNationality'] ?>" required>
                                <p class="please_fill">Please fill this field</p>
                            </div>
                    </div>

                    <div class="rows" style="">
                            <div class="input-group" style="margin-top: 5px;">
                                <label class="labels">Complainer Aadhar:</label>
                                <input  id = "nationality" class="inputs" type="text" name="compaadhar" value="<?php echo $complainant['CompAadhar'] ?>" required>
                                <p class="please_fill">Please fill this field</p>
                            </div>
                    </div>

                    <div class="rows" style="">
                            <div class="input-group" style="margin-top: 5px;">
                                <label class="labels">Complainer DOB:</label>
                                <input  id = "nationality" class="inputs" type="date" name="compdob" value="<?php echo $complainant['CompDOB'] ?>" required>
                                <p class="please_fill">Please fill this field</p>
                            </div>
                    </div>


                    <div class="rows" style="">
                            <div class="input-group" style="margin-top: 5px;">
                                <label class="labels">Complainer State:</label>
                                <input  id = "state" class="inputs" type="text" name="state" value="<?php echo $complainant['CompCity'] ?>" required>
                                <p class="please_fill">Please fill this field</p>
                            </div>
                    </div>
                    <div class="rows" style="">
                            <div class="input-group" style="margin-top: 5px;">
                                <label class="labels">Complainer District:</label>
                                <input  id = "district" class="inputs" type="text" name="district" value="<?php echo $complainant['CompDistrict'] ?>" required>
                                <p class="please_fill">Please fill this field</p>
                            </div>
                    </div>
                    <div class="rows" style="">
                            <div class="input-group" style="margin-top: 5px;">
                                <label class="labels">Complainer City:</label>
                                <input  id = "city" class="inputs" type="text" name="city" value="<?php echo $complainant['CompCity'] ?>" required>
                                <p class="please_fill">Please fill this field</p>
                            </div>
                    </div>
                    <div class="input-group" style="">
                                <label class="labels">Nearest Police Station :</label>
                                <div id="pstation">
                                        <div class="rows soc">
                                            <select style="height:34px;width:101px;" class="gender-button" name="pstation" value="<?php echo $policestation['PS_username'] ?>" required>    
                                                <option value="ps1">PS1</option>
                                                <option value="ps2" selected>PS2</option>
                                            </select>
                                        </div>
                                </div>
                    </div>
                    <div class="input-group" style="">
                                <label class="labels">Complainer Address:</label>
                                <input id="address" class="inputs"  type="text" name="address" value="<?php echo $complainant['CompAddress'] ?>"></input>
                                <p class="please_fill">Please fill this field</p>
                    </div>

                    </div>
                    <div class="cols" style="padding-left: 50px;">
                    <div class="head margin">
                            <p style="color: rgb(68,68,68,1);font-size: 30px;margin-bottom: 0;"><b>Accused detail</b></p>
                    </div>
                    <div class="rows" style="">
                            <div class="input-group" style="margin-top: 5px;">
                                <label class="labels">Accused Name:</label>
                                <input  id = "accname" class="inputs" type="text" name="accname" value="<?php echo $accused['AcName'] ?>" required>
                                <p class="please_fill">Please fill this field</p>
                            </div>
                    </div>
                    <div class="rows" style="">
                            <div class="input-group" style="margin-top: 5px;">
                                <label class="labels">Accused Contact no:</label>
                                <input  id = "accnumber" class="inputs" type="text" name="accnumber"  value="<?php echo $accused['AcContact'] ?>" required>
                                <p class="please_fill">Please fill this field</p>
                            </div>
                    </div>
                    <div class="input-group" style="">
                                <label class="labels">Accused Address:</label>
                                <input id="accaddress" class="inputs" type="text" value="<?php echo $accused['AcAddress'] ?>" name="accaddress"></input>
                                <p class="please_fill">Please fill this field</p>
                    </div>

                    <div class="rows" style="">
                            <div class="input-group" style="margin-top: 5px;">
                                <label class="labels">Accused DOB:</label>
                                <input  id = "nationality" class="inputs" type="date" name="accdob" value="<?php echo $accused['AcDOB'] ?>" required>
                                <p class="please_fill">Please fill this field</p>
                            </div>
                    </div>


                    </div>


                    <div class="cols" style="padding-left: 50px;">
                    <div class="head margin">
                            <p style="color: rgb(68,68,68,1);font-size: 30px;margin-bottom: 0;"><b>Crime details</b></p>
                    </div>
                    <div class="rows" style="">
                            <div class="input-group" style="margin-top: 5px;">
                                <label class="labels">Crime Time:</label>
                                <input  id = "time" class="inputs" type="time" name="crimetime" value="<?php echo $crimes['CrimeTime'] ?>" required>
                                <p class="please_fill">Please fill this field</p>
                            </div>
                    </div>
                    <div class="rows" style="">
                            <div class="input-group" style="margin-top: 5px;">
                                <label class="labels">Crime Date:</label>
                                <input  id = "crimedate" class="inputs" type="date" name="crimedate" value="<?php echo $crimes['CrimeDate'] ?>" required>
                                <p class="please_fill">Please fill this field</p>
                            </div>
                    </div>
                    <div class="input-group" style="">
                                <label class="labels">Crime Location:</label>
                                <input id="crimelocation" class="inputs" type="text" value="<?php echo $crimes['CrimePlace'] ?>" name="crimelocation"></input>
                                <p class="please_fill">Please fill this field</p>
                    </div>
                    <div class="input-group" style="">
                                <label class="labels">Crime Description:</label>
                                <input id="crimedescription" class="inputs" type="text" name="crimedescription" value="<?php echo $crimes['CrimeDescription'] ?>"></input>
                                <p class="please_fill">Please fill this field</p>
                    </div>
                    <div class="input-group" style="">
                                <label class="labels">Evidence By Complainer:</label>
                                <input id="evidence" class="inputs" type="text" name="evidence" value="<?php echo $crimes['CrimeEvidence'] ?>"></input>
                                <p class="please_fill">Please fill this field</p>
                    </div>
                    <div class="input-group" style="">
                                <label class="labels">Crime Type:</label>
                                <input id="crimetype" class="inputs" type="text" name="crimetype"></input>
                                <p class="please_fill">Please fill this field</p>
                    </div>


                    </div>




                    </div>

                    <div class="input-group" style="width: 50%;">
                    <div class="rows">
                           <input type="submit" value="Update" name="update">
                    </div>
                    </div>
            </form>
    </div>
</body>
</html>