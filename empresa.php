<!DOCTYPE html>
<html  lang="es">
<head>
	<meta charset='utf-8'>
	<title>Enviar datos por url</title>
	<meta charset="utf-8" >
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/journal/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">


<h2 style="text-transform: uppercase;"><?php echo $idioma=$_GET['idioma']; ?></h2>
<?php

$bio1 =<<<BIO1
	<p>Esto es una pagina es español</p>
BIO1;
$bio2 =<<<BIO2
	<p>This is a web in English</p>
BIO2;
$bio3 =<<<BIO3
	<p>Ce est une page en français</p>
BIO3;
$bio4 =<<<BIO4
	<p>Dies ist eine Seite in Deutsch</p>
BIO4;
	
//-----------Esto es con un IF------------
/*if(empty($_GET['idioma'])){
	echo'';
}else{
	$idioma=$_GET['idioma'];		
	if($idioma=='español')echo $bio1;
	if($idioma=='ingles')echo $bio2;
	if($idioma=='frances')echo $bio3;
	if($idioma=='aleman')echo $bio4;
}
*/
//---------------------
$idioma=$_GET['idioma'];
switch($idioma){
	case "ingles":
		echo $bio2;
	break;
	case "español":
		echo $bio1;
	break;
	case "frances":
		echo $bio3;
	break;
	case "aleman":
		echo $bio4;
	break;

	
}

?>
</div>
</body>
</html>
