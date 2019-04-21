<?php require_once('mysqli_connect.php');


if (isset($_POST['update'])) {
  
  $firno = mysqli_real_escape_string($db, $_POST['firno']);
  $accname = mysqli_real_escape_string($db, $_POST['accname']);
  $accnumber = mysqli_real_escape_string($db, $_POST['accnumber']);
  $accaddress = mysqli_real_escape_string($db, $_POST['accaddress']);
  $accdob = mysqli_real_escape_string($db, $_POST['accdob']);

  //$crimetime = mysqli_real_escape_string($db, $_POST['crimetime']);
  $crimedate = mysqli_real_escape_string($db, $_POST['crimedate']);
  $crimelocation = mysqli_real_escape_string($db, $_POST['crimelocation']);
  $crimedescription = mysqli_real_escape_string($db, $_POST['crimedescription']);
  $crimeevidence = mysqli_real_escape_string($db, $_POST['evidence']);
  $crimetype = mysqli_real_escape_string($db, $_POST['crimetype']);
  $pscode = mysqli_real_escape_string($db, $_POST['pstation']);
  $csection = mysqli_real_escape_string($db, $_POST['csection']);
  
  $query = "UPDATE Accused  SET AcName='$accname' , AcAddress='$accaddress', AcDOB = '$accdob', AcContact='$accnumber' WHERE FIRNo = $firno";

  $result = mysqli_query($db, $query);
  if ( false===$result ) {
     printf("error: %s\n", mysqli_error($db));
  } else {
  } 


  $query = "UPDATE Crimes SET CrimeType='$crimetype' , CrimeDescription = '$crimedescription' , CrimeDate = '$crimedate' , CrimePlace='$crimelocation' , CrimeEvidence='$crimeevidence' WHERE FIRNo = $firno";

  $result = mysqli_query($db, $query);
  if ( false===$result ) {
     printf("error: %s\n", mysqli_error($db));
  } else {
  }

  $query = "UPDATE Reports  SET Section = '$csection' WHERE FIRNo = $firno";
  $result = mysqli_query($db, $query);
  if ( false===$result ) {
     printf("error: %s\n", mysqli_error($db));
  } else {
  }
  header('location: policepage.php');

}


?>