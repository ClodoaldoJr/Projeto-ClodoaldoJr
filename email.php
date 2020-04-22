<?php


if(isset($_POST['email']) && !empety($_POST['email'])){


$nome= addslashes($_POST['Name']);
$email= addslashes($_POST ['Last Name']);
$endereço= addslashes($_POST ['Endereço']);
$telefone= addslashes($_POST ['Telefone']);
$nascimento= addslashes($_POST ["Nascimento"]);
$email= addslashes($_POST ['E-mail']);
$genero= addslashes($_POST ['Gênero']);
$desejarecebernoticias= addslashes($_POST ['Deseja Receber Noticias']);
$clubes= addslashes($_POST ['Clubes']);



$to= "clodoaldo.junior@ymail.com";
$subject= "Projeto";
$body= "Nome: ".$nome."\r\n".
		"Email: ".$email."\r\n".
		"Mensagem: ".$mensagem."\r\n".
		"Endereço: ".$endereço."\r\n".
		"Telefone: ".$telefone."\r\n".
		"Nascimento: ".$nascimento."\r\n".
		"Gênero: ".$gênero."\r\n".
		"Deseja Receber as Notiocias?: ".$desejareceberasnoticias."\r\n".
		"Clubes: ".$clubes."\r\n". 

$header= "From:clodoaldo.junior@ymail.com"."\r\n".
			"Reply-To:".$email."\r\n"
			."X=Mailer:PHP/".phpversion();


if(mail($to,$subject,$body,$header)){

	echo("Email enviado com sucesso!");

}else{

	echo("O Email não pode ser enviado");

}


}

?>