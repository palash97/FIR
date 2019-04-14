<?php
session_start();
$db = mysqli_connect("localhost", "root", "palash", "FIR");
$login_errors =  array();
if (isset($_POST['login_submit'])) {
  $username = mysqli_real_escape_string($db, $_POST['uname']);
  $password = mysqli_real_escape_string($db, $_POST['psw']);

  if (empty($username)) {
    array_push($login_errors, "Username is required");
  }
  if (empty($password)) {
    array_push($login_errors, "Password is required");
  }

  if (count($login_errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM Registration WHERE Username='$username' AND Password='$password'";
    $results = mysqli_query($db, $query);
    $query2 = "SELECT Name FROM Registration WHERE Username='$username' AND Password='$password'";
    $name = mysqli_query($db,$query2);
    $name = mysqli_fetch_assoc($name);
    if (mysqli_num_rows($results) == 1) {

      $_SESSION['name'] = $name['Name'];
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: userpage.php');
    }else {
      array_push($login_errors, "Wrong username/password combination");
    }
  }

}



?>