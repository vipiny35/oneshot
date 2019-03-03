<?php
include 'connect.php';


$shotmsg = $_POST['shotmsg'];

if (isset($shotmsg)){
	$url_code = geturl();
	$stmt = $con->prepare("insert into shots(url_code,msg) values(:url_code,:msg)");
	$stmt->bindParam(':url_code',$url_code);
	$stmt->bindParam(':msg',$shotmsg);
	$stmt->execute();
	$link = $_SERVER['SERVER_NAME'].'/oneshot/'.$url_code;
	echo $link;
	}



function geturl(){
	include 'connect.php';
	$url_code = code_gen();
	$chk = $con->prepare("select from shots where url_code=:url_code");
	$chk->bindParam(':url_code',$url_code);
	$chk->execute();
	if($chk->rowCount() > 0){
		geturl();
		}
	else{
	return $url_code;
	}
}


function code_gen($length = 7) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
    ceil($length/strlen($x)) )),1,$length);
}

?>

