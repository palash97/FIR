<?php require_once('mysqli_connect.php');?>

<?php

session_start();


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


  //$crimetime = mysqli_real_escape_string($db, $_POST['crimetime']);
  $crimedate = mysqli_real_escape_string($db, $_POST['crimedate']);
  $crimelocation = mysqli_real_escape_string($db, $_POST['crimelocation']);
  $crimedescription = mysqli_real_escape_string($db, $_POST['crimedescription']);
  $crimeevidence = mysqli_real_escape_string($db, $_POST['evidence']);
  $pscode = mysqli_real_escape_string($db, $_POST['pstation']);
  $username = mysqli_real_escape_string($db, $_SESSION['username']);
  
   

  
  $query = "INSERT INTO Reports (FIRDate, Section, Username, PStation) 
          VALUES( '$crimedate',NULL, '$username','$pscode')";
  $result = mysqli_query($db, $query);
  if ( false===$result ) {
     printf("error:1 %s\n", mysqli_error($db));
  }

  $query = "SELECT MAX(FIRNo) FROM  Reports";
  $result = mysqli_query($db, $query);
  if ( false===$result ) {
     printf("error:2 %s\n", mysqli_error($db));
  }
  $firset = mysqli_fetch_assoc($result);
  $firno =mysqli_real_escape_string($db, $firset['MAX(FIRNo)']);
  printf("This is fir, %d    " , $firno);



  $query = "INSERT INTO Accused (AcName,AcAddress, AcDOB, AcContact, FIRNo) 
          VALUES('$accname','$accaddress','$accdob','$accnumber', '$firno')";

  $result = mysqli_query($db, $query);
  if ( false===$result ) {
     printf("error:3 %s\n", mysqli_error($db));
  }


  $query2 = "INSERT INTO Complainant (CompName,Username,CompAddress,CompNationality,CompDOB,CompAadhar,CompContact,CompGender, FIRNo) 
          VALUES('$compname','$username','$compaddress','$compnationality','$compdob','$compaadhar','$comptel','$compgender', $firno)";
  $result2 = mysqli_query($db, $query2);
  if ( false===$result2 ) {
     printf("error: 4%s\n", mysqli_error($db));
  }


  $query = "INSERT INTO Crimes (CrimeType,CrimeDescription, CrimeDate, CrimePlace, CrimeEvidence, FIRNo) 
          VALUES('','$crimedescription','$crimedate','$crimelocation', '$crimeevidence','$firno')";

  $result = mysqli_query($db, $query);
  if ( false===$result ) {
     printf("error: 5%s\n", mysqli_error($db));
  }


  $query = "INSERT INTO PoliceStation (PSCode,PState, PDistrict,PIN, Head, FIRNo) 
          VALUES('$pstation',NULL,NULL,NULL, NULL , '$firno')";

  $result = mysqli_query($db, $query);
  if ( false===$result ) {
     printf("error: 6%s\n", mysqli_error($db));
  }

  header('location: userpage.php');   

}


?>