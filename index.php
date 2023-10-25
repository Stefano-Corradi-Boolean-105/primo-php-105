<?php

// questo è un commento
$name =  'Ugo';
$lastname =  'de Ughi';

// il punto concatena la stringa
$nome_cognome = $name . ' ' . $lastname;

$saluto = 'Ciao';
$saluto .= ' ' . $nome_cognome;

// al posto del template literal si possono usare gli apici doppi perché all'interno posso inserire direttamente delle variabili
$altro_saluto = "Ciao! $nome_cognome come stai? Il tuo nome è $name e il tuo comgnome è $lastname";

$testo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae obcaecati voluptatibus tenetur cum provident fugit, adipisci unde quibusdam officia perspiciatis, consequatur incidunt, nobis recusandae explicabo quidem dolorum deserunt maxime perferendis?';


// explode funziona con split ma accetta 2 parametri. Il separatore e la stringa e restituisce un array
$stringa_esplosa = explode(' ', $testo);
echo "$testo <br>";
// count() conta gli elementi di un array
echo 'Il testo ha ' . count($stringa_esplosa) . ' parole';
//echo $stringa_esplosa[0];

// var_dump è il metodo che si usa per debuggare. Lo si usa al posto di console.log()

var_dump($stringa_esplosa);

$striga_replace = str_replace('Lorem', 'CIAO', $testo);

var_dump($striga_replace);

// equivalente di includes per le stringhe
$containsLoremInTesto = str_contains($testo, 'Lorem');
$containsLoremInstriga_replace = str_contains($striga_replace, 'Lorem');
var_dump($containsLoremInTesto);
var_dump($containsLoremInstriga_replace);


// Array
$colori = ['giallo', 'verde', 'blu'];
var_dump($colori);

// in_array equivale a includes per gli array
if(in_array('verde',$colori)){
	echo 'Il verde esiste';
}else{
	echo 'Il verde NON esiste';
}




?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Primo PHP</title>
</head>
<body>
	<h1>Ciao mio primo PHP</h1>
	<h2>Ciao <?php  echo $name;   ?> <?php echo $lastname   ?></h2>
	<h2>Ciao <?php echo $nome_cognome ?></h2>
	<h3><?php echo $saluto ?></h3>
	<h3><?php echo $altro_saluto ?></h3>
	<p> <?php echo $testo ?> </p>
	<h2>Paragrafo lungo <?php echo strlen($testo) ?> caratteri</h2>
	<p><?php echo $testo ?> </p>

</body>
</html>