<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="stéphane">

<title>Proverbes Bretons</title>

<!-- CSS stephane -->
<link href="proverbes.css" rel="stylesheet">
</head>

<body>

	<header>
		<h1>Quelques proverbes bretons</h1>
	</header>
	<main class="container">
	<section>
		<article>
<?php
$fichier = 'proverbes.txt';
if (! is_file($fichier)) {
    exit('erreur fichier proverbes introuvable');
}
$enregs = file($fichier);

$iMax = count($enregs);

echo "<table>";

for ($i = 0; $i < $iMax; $i ++) {
    $tmp = explode('|', $enregs[$i]);
    echo "<tr>";
    echo "<td>$tmp[0]</td>";
    echo "<td>$tmp[1]</td>";
    echo "</tr>";
}

echo "</table>";

?>
	</article>
	</section>
	</main>
	<footer> DevTec - 2018 - proverbes bretons, bien sûr libres de droits</footer>
</body>