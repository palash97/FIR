<?php require_once("mysqli_connect.php");?>
<?php
session_start();
$login_errors =  array();
if (isset($_POST['login_submit'])) {
  $username = mysqli_real_escape_string($db, $_POST['uname']);
  $password = mysqli_real_escape_string($db, $_POST['psw']);
  if ($_POST['police'] =="on") {
    $ispolice = TRUE;
  } else {
    $ispolice = FALSE;
  }
  //printf($_POST['police']);
  if (empty($username)) {
    array_push($login_errors, "Username is required");
  }
  if (empty($password)) {
    array_push($login_errors, "Password is required");
  }
  echo $ispolice;

  if (count($login_errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM Registration WHERE Username='$username' AND Password='$password' AND POLICE = '$ispolice'";
    $results = mysqli_query($db, $query);
    $query2 = "SELECT Name FROM Registration WHERE Username='$username' AND Password='$password' AND POLICE = '$ispolice'";
    $name = mysqli_query($db,$query2);
    $name = mysqli_fetch_assoc($name);
    if (mysqli_num_rows($results) == 1) {

      $_SESSION['name'] = $name['Name'];
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      if ($ispolice) {
        header('location: policepage.php');
      } else {
      header('location: userpage.php');
      }
    }else {
      array_push($login_errors, "Wrong username/password combination");
    }
  }

}



?>