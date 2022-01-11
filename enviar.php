<?php
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$mensagem = $_POST['mensagem'];
		$data_envio = date('d/m/y');
		$hora_envio = date('h:i:s');
		
        //Campo Email
        $arquivo ="$nome, $email, $mensagem, $data_envio, $hora_envio";
        
        //email de destino
        $destino = "lfrnndoliveira@gmail.com";
        $assunto = "Contato pelo Site";
        
        //Este sempre deverão existir para garantir a exibição correta dos caracteres
        $headers = "MIME-Version: 1.0\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\n";
        $headers .= "From: $nome <$email>";
        
        //Enviar
        mail($destino, $assunto, $arquivo, $headers);
        
        echo "<meta http-equiv= 'refresh' content='10;URL=../sucesso.php'>";
