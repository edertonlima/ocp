<?php
	if($_POST['verificador']){

		include '../include/mailer/PHPMailerAutoload.php';
		include 'anexo.php';

		$anexo = anexo( $_POST['name'],$_FILES['anexo'] );
			
		$mail = new PHPMailer();
		$mail->IsSMTP();

		$mail->Host = 'localhost';
		$mail->SMTPAuth = false;
		$mail->SMTPAutoTLS = false; 
		$mail->Port = 25; 
		$mail->CharSet = 'UTF-8';
		
		$mail->setFrom($_POST['para'],$_POST['nome_site']);
		$mail->addAddress($_POST['para'],$_POST['nome_site']);
		$mail->addReplyTo($_POST['para'],$_POST['nome_site']);

		//$mail->addAddress('edertton@gmail.com');
		
		//$mail->addCC('edertton@gmail.com');
		$mail->addBCC('edertton@gmail.com');

		$body = '';
		$body .= '<strong>' . $_POST['name'] . '</strong><br>';
		$body .= $_POST['email'] . '<br>';
		$body .= $_POST['telefono'] . '<br>';
		$body .= $_POST['direccion'] . '<br>';
		$body .= '<br>' . $_POST['mensaje'] . '<br>';

		$mail->isHTML(true);
		$mail->Subject = $_POST['subject'] . ', ' . $_POST['name'];
		$mail->Body    = $body;
		$mail->AltBody = $body;

		if($anexo){
			$mail->AddAttachment($anexo['url'],$anexo['name']);		
		}	
		
		if(!$mail->Send()) {
			header('Location: https://www.ocpecuador.com/?page_id=23&form=error');
		} else {
			header('Location: https://www.ocpecuador.com/?page_id=23&form=ok');
		}

	}else{
		header('Location: https://www.ocpecuador.com/');
	}
?>