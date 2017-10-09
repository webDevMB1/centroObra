<?php
	if(!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['assunto']) && !empty($_POST['mensagem'])){
		send_email($_POST['nome'], "geral.centroobra@gmail.com", $_POST['assunto'], $_POST['mensagem']);
	}

	function send_email($de, $para, $assunto, $mensagem){

		$headers = 'De: ' . $de . "\r\n";
		$headers .= "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		$mensagem = '(ESTE EMAIL FOI ENVIADO ATRAVÉS DO WEBSITE CENTROOBRA) <br><br>Nome: ' . $_POST['nome'] . '<br><br> Email: ' . $_POST['email'] . '<br><br>' . $mensagem;

		if(mail($para, $assunto, $mensagem, $headers)){
			echo("<script> alert('Email enviado com sucesso! Entraremos em contacto assim que possivel.');
				window.location = 'http://www.centroobra.com'</script>");
		}else{
			echo("<script> alert('Falha no envio!');
				window.location = 'http://www.centroobra.com'</script>");
		}
	}
?>
