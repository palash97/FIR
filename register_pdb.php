<?php require_once("mysqli_connect.php");?>
<?php

session_start();

//$db = mysqli_connect("localhost", "root", "palash", "FIR");
$errors = array(); 

if (isset($_POST['submit'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $pstation = mysqli_real_escape_string($db, $_POST['pstation']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $nationality = mysqli_real_escape_string($db, $_POST['nationality']);
  $password2 = mysqli_real_escape_string($db, $_POST['password2']);
  $contact = mysqli_real_escape_string($db, $_POST['contact']);
  $dob = mysqli_real_escape_string($db, $_POST['dob']);
  $ispolice = TRUE;

  $user_check_query = "SELECT * FROM Registration WHERE Username='$username' OR Email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);


  if ($user) { 
    if ($user['Username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['Email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }
  

  if ($password != $password2) {
  array_push($errors, "The two passwords do not match");
  }


  if (count($errors) == 0) {
  
  $password = md5($password);

  $query = "INSERT INTO Registration (Username,Password,Email,Name,Gender,Address,Nationality,Contact,DOB, Police, PStation) 
          VALUES('$username','$password','$email','$name',NULL,'$address','$nationality','$contact','$dob', '$ispolice', '$pstation')";
  $result = mysqli_query($db, $query);
  if ( false===$result ) {
     printf("error: %s\n", mysqli_error($db));
   }

   }

   $_SESSION['name'] = $name;
   $_SESSION['username'] = $username;
   $_SESSION['success'] = "You are now logged in";
   $_SESSION['police'] = TRUE ;
   //header('location: policepage.php');



   

}











?>