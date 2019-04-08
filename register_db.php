<?php
session_start();

// initializing variables
$name = "";
$email    = "";
$nationality    = "";
$dob= "";
$username    = "";
$password    = "";
$contact    = "";
$address    = "";
$myfile    = "";
$password2 = "";
$gender = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', 'palash', 'FIR');

// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password= mysqli_real_escape_string($db, $_POST['password']);
  $password2 = mysqli_real_escape_string($db, $_POST['password2']);
  $nationality = mysqli_real_escape_string($db, $_POST['nationality']);
  $dob= mysqli_real_escape_string($db, $_POST['dob']);
  $gender= mysqli_real_escape_string($db, $_POST['gender']);
  //$myfile = mysqli_real_escape_string($db, $_POST['myfile']);
  $contact = mysqli_real_escape_string($db, $_POST['contact']);
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if ($password != $password2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM Registration WHERE Username='$username' OR Email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['Username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['Email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password);//encrypt the password before saving in the database
    $query = "INSERT INTO Registration (Username,Email, Password , Name , Address , Gender , Nationality , DOB , Contact ) 
          VALUES('$username', '$email', '$password' , '$name', '$address' , '$gender' , '$nationality' , '$dob' , '$contact')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    //header('location: home.php');
  }
  else{
    echo "count>0";
  }
}