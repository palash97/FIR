<?php include('firsubmit.php'); ?>
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
    <div id="p1" class="parent page1">
            <div class="head margin">
                <p style="color: rgb(68,68,68,1);font-size: 30px;margin-bottom: 0;"><b>Please fill your details</b></p>
            </div>

            <form class="margin"  id="form1" class="form1"  style="margin-top: 25px;padding-bottom: 25px;" method="post" action="newfir.php">
                <div class="rows">
                <div class="cols">
                    <div class="head margin">
                            <p style="color: rgb(68,68,68,1);font-size: 30px;margin-bottom: 0;"><b>Complainer detail</b></p>
                    </div>
                    <div class="rows" style="">
                            <div class="input-group" style="margin-top: 5px;">
                                <label class="labels">Complainer Name:</label>
                                <input  id = "name" class="inputs" type="text" name="campname" required>
                                <p class="please_fill">Please fill this field</p>
                            </div>
                    </div>
                    <div class="rows" style="">
                            <div class="input-group" style="margin-top: 5px;">
                                <label class="labels">Complainer Contact no::</label>
                                <input  id = "tel" class="inputs" type="tel" name="comptel" required>
                                <p class="please_fill">Please fill this field</p>
                            </div>
                    </div>
                    <div class="input-group" style="">
                                <label class="labels">Gender :</label>
                                <div id="gender">
                                        <div class="rows soc">
                                            <select style="height:34px;width:101px;" class="gender-button" name="compgender" required>    
                                                <option value="male">Male</option>
                                                <option value="female" selected>Female</option>
                                            </select>
                                        </div>
                                </div>
                    </div>
                    <div class="rows" style="">
                            <div class="input-group" style="margin-top: 5px;">
                                <label class="labels">Complainer Nationality:</label>
                                <input  id = "nationality" class="inputs" type="text" name="compnationality" required>
                                <p class="please_fill">Please fill this field</p>
                            </div>
                    </div>

                    <div class="rows" style="">
                            <div class="input-group" style="margin-top: 5px;">
                                <label class="labels">Complainer Aadhar:</label>
                                <input  id = "nationality" class="inputs" type="text" name="compaadhar" required>
                                <p class="please_fill">Please fill this field</p>
                            </div>
                    </div>

                    <div class="rows" style="">
                            <div class="input-group" style="margin-top: 5px;">
                                <label class="labels">Complainer DOB:</label>
                                <input  id = "nationality" class="inputs" type="date" name="compdob" required>
                                <p class="please_fill">Please fill this field</p>
                            </div>
                    </div>


                    <div class="rows" style="">
                            <div class="input-group" style="margin-top: 5px;">
                                <label class="labels">Complainer State:</label>
                                <input  id = "state" class="inputs" type="text" name="state" required>
                                <p class="please_fill">Please fill this field</p>
                            </div>
                    </div>
                    <div class="rows" style="">
                            <div class="input-group" style="margin-top: 5px;">
                                <label class="labels">Complainer District:</label>
                                <input  id = "district" class="inputs" type="text" name="district" required>
                                <p class="please_fill">Please fill this field</p>
                            </div>
                    </div>
                    <div class="rows" style="">
                            <div class="input-group" style="margin-top: 5px;">
                                <label class="labels">Complainer City:</label>
                                <input  id = "city" class="inputs" type="text" name="city" required>
                                <p class="please_fill">Please fill this field</p>
                            </div>
                    </div>
                    <div class="rows" style="">
                            <div class="input-group" style="margin-top: 5px;">
                                <label class="labels">Neareste Police Station:</label>
                                <input  id = "station" class="inputs" type="text" name="pstation" required>
                                <p class="please_fill">Please fill this field</p>
                            </div>
                    </div>
                    <div class="input-group" style="">
                                <label class="labels">Complainer Address:</label>
                                <textarea id="address" maxlength="400" class="inputs" style="height: 167px;padding: 5px;" type="text" name="address"></textarea>
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
                                <input  id = "accname" class="inputs" type="text" name="accname" required>
                                <p class="please_fill">Please fill this field</p>
                            </div>
                    </div>
                    <div class="rows" style="">
                            <div class="input-group" style="margin-top: 5px;">
                                <label class="labels">Accused Contact no:</label>
                                <input  id = "accnumber" class="inputs" type="text" name="accnumber" required>
                                <p class="please_fill">Please fill this field</p>
                            </div>
                    </div>
                    <div class="input-group" style="">
                                <label class="labels">Accused Address:</label>
                                <textarea id="accaddress" maxlength="400" class="inputs" style="height: 167px;padding: 5px;" type="text" name="accaddress"></textarea>
                                <p class="please_fill">Please fill this field</p>
                    </div>

                    <div class="rows" style="">
                            <div class="input-group" style="margin-top: 5px;">
                                <label class="labels">Accused DOB:</label>
                                <input  id = "nationality" class="inputs" type="date" name="accdob" required>
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
                                <input  id = "time" class="inputs" type="time" name="crimetime" required>
                                <p class="please_fill">Please fill this field</p>
                            </div>
                    </div>
                    <div class="rows" style="">
                            <div class="input-group" style="margin-top: 5px;">
                                <label class="labels">Crime Date:</label>
                                <input  id = "crimedate" class="inputs" type="date" name="crimedate" required>
                                <p class="please_fill">Please fill this field</p>
                            </div>
                    </div>
                    <div class="input-group" style="">
                                <label class="labels">Crime Location:</label>
                                <textarea id="crimelocation" maxlength="400" class="inputs" style="height: 167px;padding: 5px;" type="text" name="crimelocation"></textarea>
                                <p class="please_fill">Please fill this field</p>
                    </div>
                    <div class="input-group" style="">
                                <label class="labels">Crime Description:</label>
                                <textarea id="crimedescription" maxlength="400" class="inputs" style="height: 167px;padding: 5px;" type="text" name="crimedescription"></textarea>
                                <p class="please_fill">Please fill this field</p>
                    </div>
                    <div class="input-group" style="">
                                <label class="labels">Evidence By Complainer:</label>
                                <textarea id="evidence" maxlength="400" class="inputs" style="height: 167px;padding: 5px;" type="text" name="evidence"></textarea>
                                <p class="please_fill">Please fill this field</p>
                    </div>
                    </div>




                    </div>

                    <div class="input-group" style="width: 50%;">
                    <div class="rows">
                           <input type="submit" value="Submit" name="submit__">
                    </div>
                    </div>
            </form>
    </div>
</body>
</html>