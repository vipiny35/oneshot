<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"> 

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

<body style="background-color:#ffffe6;">
  <div class="page-header">
    <h1 align="center" >OneShot</h1>
    <h6 align="center"><i>Coz Thats All You Get</i></h6>      
  </div>
  
<div class="col-md-6 col-md-offset-3" style="background-color:lightblue;" >
<br> 
<h4><i>"<?php msg();?>"</i></h4>
<br>
</div>
<div class="col-md-6 col-md-offset-3">
	<br>
<a href="index.php">
<button class="btn btn-danger btn-block">Create Your own</button>
</div></a>


</body>
</html>





<?php

function msg(){
include 'connect.php';

$url_code	 = $_GET['url_code'];

$vmt = $con->prepare("select * from shots where url_code = :url_code");
$vmt->bindParam(':url_code',$url_code);
$vmt->execute();
$dmt = $con->prepare("delete from shots where url_code = :url_code");
$dmt->bindParam(':url_code',$url_code);
$dmt->execute();

if($vmt->rowCount() > 0){
	while($row = $vmt->fetch(PDO::FETCH_ASSOC)){
	$msg = htmlentities($row['msg']);
	}
	echo $msg;
	}
	
else{
	echo "This Shot Doesnt Exist or It Has been Viewed.";
	}
}
?>
