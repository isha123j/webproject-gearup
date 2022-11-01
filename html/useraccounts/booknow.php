<?php
require_once('configb.php');
?>
<!--<!DOCTYPE html>
<html>
<head>
	<title>User Registration | PHP</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div>-->
	<?php
      if(isset($_POST['create'])){
          $nam    = $_POST['nam'];
          $addr = $_POST['addr'];
          $email  = $_POST['email'];
          $contact = $_POST['contact'];
          $vehiclename = $_POST['vehiclename'];
          $vehicleno = $_POST['vehicleno'];
         

          
 
          $sql = 'INSERT INTO booking (nam, addr, email, contact, vehiclename, vehicleno )VALUES(?,?,?,?,?,?)';         
          $stmtinsert = $db->prepare($sql);

         
          
          $result = $stmtinsert->execute([$nam, $addr, $email, $contact, $vehiclename, $vehicleno ]);
          //$stmt = $db->prepare('INSERT INTO users(firstname, lastname, email, phonenumber, password, Type) VALUES (?,?,?,?,?,?)');

		 // $stmt->bindparam('$firstname', '$lastname', '$email', '$username', '$password','users');
		  //$stmt->execute();

		   //$result = $stmtinsert->get_result();
		  if($result){

              echo 'succesfully saved.';

          }
          else{
              echo 'there were errors while saving the data';

          }  
        



      }
	
	?>	