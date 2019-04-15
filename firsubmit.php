<?php

session_start();

$db = mysqli_connect("localhost", "root", "saket3433", "FIR");
if (mysqli_connect_errno()) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit();
} else {
  //printf("Connect Passed");
}
if (isset($_POST['submit__'])) {
  $compname = mysqli_real_escape_string($db, $_POST['compname']);
  $comptel = mysqli_real_escape_string($db, $_POST['comptel']);
  $compgender = mysqli_real_escape_string($db, $_POST['compgender']);
  $compnationality = mysqli_real_escape_string($db, $_POST['compnationality']);
  $compaddress = mysqli_real_escape_string($db, $_POST['compaddress']);

  $compaadhar = mysqli_real_escape_string($db, $_POST['compaadhar']);
  $compdob = mysqli_real_escape_string($db, $_POST['compdob']);

  $accname = mysqli_real_escape_string($db, $_POST['accname']);
  $accnumber = mysqli_real_escape_string($db, $_POST['accnumber']);
  $accaddress = mysqli_real_escape_string($db, $_POST['accaddress']);


  $accdob = mysqli_real_escape_string($db, $_POST['accdob']);


  $crimetime = mysqli_real_escape_string($db, $_POST['crimetime']);
  $crimedate = mysqli_real_escape_string($db, $_POST['crimedate']);
  $crimelocation = mysqli_real_escape_string($db, $_POST['crimelocation']);
  $crimedescription = mysqli_real_escape_string($db, $_POST['crimedescription']);
  $crimeevidence = mysqli_real_escape_string($db, $_POST['evidence']);
  $pscode = mysqli_real_escape_string($db, $_POST['pstation']);
  $username = mysqli_real_escape_string($db, $_SESSION['username']);
  
   

  // $user_check_query = "SELECT * FROM Registration WHERE Username= $_SESSION['username']  LIMIT 1";
  // $result = mysqli_query($db, $user_check_query);
  // $user = mysqli_fetch_assoc($result);

  
  $query = "INSERT INTO Accused (AcName,AcAddress, AcDOB, AcContact) 
          VALUES('$accname','$accaddress','$accdob','$accnumber')";

  $result = mysqli_query($db, $query);
  if ( false===$result ) {
     printf("error: %s\n", mysqli_error($db));
  }


  $query2 = "INSERT INTO Complainant (CompName,Username,CompAddress,CompNationality,CompDOB,CompAadhar,CompContact,CompGender) 
          VALUES('$compname','$username','$compaddress','$compnationality','$compdob','$compaadhar','$comptel','$compgender')";
  $result2 = mysqli_query($db, $query2);
  if ( false===$result2 ) {
     printf("error: %s\n", mysqli_error($db));
  }


  $query = "INSERT INTO Crimes (CrimeType,CrimeDescription, CrimeDate, CrimePlace, CrimeEvidence) 
          VALUES('','$crimedescription','$crimedate','$crimelocation', '$crimeevidence')";

  $result = mysqli_query($db, $query);
  if ( false===$result ) {
     printf("error: %s\n", mysqli_error($db));
  }

  $query = "INSERT INTO Reports (FIRDate, Section, PSCode) 
          VALUES( '$crimedate',NULL,'$pstation')";

  $result = mysqli_query($db, $query);
  if ( false===$result ) {
     printf("error: %s\n", mysqli_error($db));
  }

   //header('location: userpage.php');   

}


?>