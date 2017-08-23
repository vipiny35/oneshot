<?php
include 'connect.php';


$shotmsg = $_POST['shotmsg'];

if (isset($shotmsg)){
	$r1 = geturl();
	$stmt = $con->prepare("insert into shots(url1,msg) values(:url1,:msg)");
	$stmt->bindParam(':url1',$r1);
	$stmt->bindParam(':msg',$shotmsg);
	$stmt->execute();
	$link = "localhost/1shot/".$r1;
	echo $link;
	}



function geturl(){
	include 'connect.php';
	$r1 = url();
	$chk = $con->prepare("select from shots where url1=:url1");
	$chk->bindParam(':url1',$r1);
	$chk->execute();
	if($chk->rowCount() > 0){
		geturl();
		}
	else{
	return $r1;
	}
}


function url($length = 7) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
    ceil($length/strlen($x)) )),1,$length);
}

?>
