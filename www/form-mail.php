<?php
	$name = $_POST['nombre'];
	$e_mail = $_POST['email'];
	$title = $_POST['asunto'];
	$content = $_POST['comentario'];

	$headers = 'From: Apk andrea < luminei01@gmail.com >'."\r\n";  
	$headers .= "X-Mailer: PHP5\n";
	$headers .= 'MIME-Version: 1.0' . "\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	$cuerpo = "Nombre: ".$name."<br>";
	$cuerpo .= "E-mail: ".$e_mail."<br>";
	$cuerpo .= "Asunto: ".$title."<br>";
	$cuerpo .= "Comentario: ".$content."<br>";

	if($name != '' && $e_mail != '' && $title != '' && $content != ''){
	    mail($e_mail,$title,$cuerpo,$headers);
	}
?>
