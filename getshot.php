<?php

	include 'connect.php';

	$url_code = $_POST['url_code'];

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
		echo "This shot doesn't exist or it has been viewed already.";
	}

?>