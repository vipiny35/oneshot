<?php

$shotmsg = $_POST['shotmsg'];

echo link_generator($shotmsg);

function link_generator($shotmsg){
	include 'connect.php';
	$url_code = code_gen();
	$stmt = $con->prepare("insert into shots(url_code,msg) values(:url_code,:msg)");
	$stmt->bindParam(':url_code',$url_code	);
	$stmt->bindParam(':msg',$shotmsg);
	if($stmt->execute()){
		return "https://oneshot.tk/".$url_code;
		}
	else{
		link_generator();
		}
}



function code_gen($length = 7) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
    ceil($length/strlen($x)) )),1,$length);
}

?>
