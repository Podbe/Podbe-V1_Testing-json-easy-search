<!DOCTYPE html>
<html lang="de" dir="ltr" class="client-nojs">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<body> 

<form method="post" action="<?php echo $PHP_SELF;?>">
	Suche: 
	<input type="text" size="12" maxlength="120" name="suche" /> 
	<input type="submit" value="OK">
</form>

<div id="output">
<?php
//mit %20
$valueinput = rawurlencode($_POST["suche"]);

//URL Input
$jsonfile = file_get_contents('http://podbe.wikibyte.org/podbeapi/?json=core.get_search_results&search='. $valueinput .'');	
$suche = json_decode($jsonfile,TRUE);



//test
echo 'input:'. $valueinput = $_POST["suche"] . '<br>';
echo 'decode:'. $valueinput = rawurlencode($_POST["suche"]) . '<br>';


//Schleife [0] +....
$ergebnis = 0; 
while ($ergebnis < count($suche["posts"]))  {           

	echo '<br>';

		echo '<a href="' .$suche["posts"][$ergebnis]["url"]. '">'. $suche["posts"][$ergebnis]["title"]. '</a>
				<br>
			 '. $suche["posts"][0]["podcasting-page"][0]["podrss"] .'<br> ';

	echo '<br>';

	//Ausgabe mit Wertangabe um jeweils +1 erhöht
	$ergebnis++;

}
?>
</body>
</html>