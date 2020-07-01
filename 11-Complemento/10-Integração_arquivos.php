<?php

	include("3-files_txt.php");

	require_once("3-files_txt.php");
	Gravar("Include", "arq.txt");
	
	require_once("3-files_txt.php");
	$text = Leitura("arq.txt");
	echo $text;

	include_once("3-files_txt.php");
