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

            <form class="margin"  id="form1" class="form1"  style="margin-top: 25px;padding-bottom: 25px;">
                <div class="cols">
                    <div class="rows" style="">
                            <div class="input-group" style="margin-top: 5px;">
                                <label class="labels">Name:</label>
                                <input  id = "name" class="inputs" type="text" name="name">
                                <p class="please_fill">Please fill this field</p>
                            </div>
                            <div class="input-group token" style="margin-top: 5px;">
                                <label class="labels">Email ID:</label>
                                <input id="email" class="inputs" style="" type="email" name="email">
                                <p class="please_fill">Please fill this field</p>
                            </div>
                    </div>
                    <div class="input-group" style="">
                                <label class="labels">Gender :</label>
                                <div id="gender">
                                        <div class="rows soc">
                                            <select style="height:34px;width:101px;" class="gender-button" name="">    
                                                <option value="male">Male</option>
                                                <option value="female" selected>Female</option>
                                            </select>
                                        </div>
                                </div>
                    </div>
                    <div class="rows" style="">
                            <div class="input-group" style="margin-top: 5px;">
                                <label class="labels">Nationality:</label>
                                <input  id = "nationality" class="inputs" type="text" name="nationality">
                                <p class="please_fill">Please fill this field</p>
                            </div>
                    </div>
                    <div class="rows" style="">
                            <div class="input-group" style="margin-top: 5px;">
                                <label class="labels">Date of Birth:</label>
                                <input  id = "dob" class="inputs" type="date" name="dob">
                                <p class="please_fill">Please fill this field</p>
                            </div>
                    </div>
                    <div class="rows" style="">
                            <div class="input-group" style="margin-top: 5px;">
                                <label class="labels">Username:</label>
                                <input  id = "username" class="inputs" type="text" name="username">
                                <p class="please_fill">Please fill this field</p>
                            </div>
                    </div>
                    <div class="rows" style="">
                            <div class="input-group" style="margin-top: 5px;">
                                <label class="labels">Password:</label>
                                <input  id = "password" class="inputs" type="password" name="password">
                                <p class="please_fill">Please fill this field</p>
                            </div>
                    </div>
                    <div class="rows" style="">
                            <div class="input-group" style="margin-top: 5px;">
                                <label class="labels">Contact no.:</label>
                                <input  id = "contact" class="inputs" type="tel" name="contact">
                                <p class="please_fill">Please fill this field</p>
                            </div>
                    </div>
                    <div class="input-group" style="">
                                <label class="labels">Address:</label>
                                <textarea id="address" maxlength="400" class="inputs" style="height: 167px;padding: 5px;" type="text" name="address"></textarea>
                                <p class="please_fill">Please fill this field</p>
                    </div>

                    <div class="input-group" style="">
                                <label class="labels">Your Photo:</label>
                                <div class="rows">
                                    <div class="upload-btn-wrapper">
                                      <button class="btn">Upload</button>
                                      <input onchange="display()" type="file" id="myfile" name="myfile" accept="image/*" / >
                                    </div>
                                    <span style="font-size:16px;color:rgba(149, 165, 166, 1);margin-left:10px;margin-top: 5px;">(Image name should be same as the username)</span>
                                </div>
                                
                                <span id="show" style="font-size:12px;color:rgba(22, 160, 133, 1);"></span>
                    </div>
                    <div class="input-group" style="">
                    <div class="rows">
                           <input type="submit" value="Submit">
                    </div>
                    </div>



                </div>
            </form>
    </div>
</body>
</html>