<?php
	
	//include permite include path e include remoto com GET mais usado em intranet
	//tenta funcionar mesmo q o arquivo não exista

	//include "inc/exemplo-01.php";

////////////////////////////////////

	//require obriga q o arquivo exista e que funcione.
	//require "inc/exemplo-01.php";

	// usando once impede que vc inclua mais de uma vez o mesmo arquivo.
	require_once "inc/exemplo-01.php";

	$resultado = somar(10, 20);

	echo $resultado;