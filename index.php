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


// Array con chiave numerica
$colori = ['giallo', 'verde', 'blu'];
// sintassi push
$colori[] = 'Viola';
var_dump($colori);

// in_array equivale a includes per gli array
if(in_array('verde',$colori)){
	echo 'Il verde esiste';
}else{
	echo 'Il verde NON esiste';
}

// se trova il valore restituisce la chiave
$chiave_occorrenza_trovata = array_search('blu',$colori);
var_dump($chiave_occorrenza_trovata );

// Array con chiave definita
$user = [
	'name' => 'Ugo',
	'lastname' => 'De Ughi'
];
// array_key_exists restituisce true o false se trova o meno la chiave
if(array_key_exists('age',$user)){
	echo '<br>age esiste';
}else{
	echo '<br>age NON esiste';

}

$user['age'] = 30; 

if(array_key_exists('age',$user)){
	echo '<br>age esiste';
}else{
	echo '<br>age NON esiste';

}


var_dump($user);
var_dump($user['name']);

// se trova il valore restituisce la chiave
$chiave_occorrenza_trovata_in_user = array_search('De Ughi',$user);
var_dump($chiave_occorrenza_trovata_in_user);

if(in_array('Ugo',$user)){
	echo 'Ugo esiste';
}else{
	echo 'Ugo NON esiste';
}

// array_keys restituisce in un array numerico tutte le chiavi di un array
var_dump(array_keys($user));


$team = [
	[
		'name' => 'Ugo',
		'lastname' => 'De Ughi',
		'age' => 30,
		'role' => 'boss',
		'hobbies' => ['cucina','cucito','golf'],
		'genre' => 'M'
	],
	[
		'name' => 'Giuseppe',
		'lastname' => 'Verdi',
		'age' => 80,
		'role' => 'CEO',
		'hobbies' => ['musica','elettronica','barba'],
		'genre' => 'M'
	],
	[
		'name' => 'Marta',
		'lastname' => 'Bianchi',
		'age' => 40,
		'role' => 'IT',
		'hobbies' => ['codice','modellismo'],
		'genre' => 'F'
	]
];

var_dump($team);

// boss
var_dump($team[0]['role']);
//elettronica
var_dump($team[1]['hobbies' ][1]);

$limit = 10;
for($i = 0; $i < $limit; $i++){
	echo "<br>$i";
}
echo "<br>--------------";
// in foreach si scrive prima l'array da ciclare as valore ciclato
foreach($colori as $colore){
	echo "<br>$colore";
}
echo "<br>--------------";
foreach($team as $person){
	echo "<br>" . $person['name'];
	echo "<br>" . $person['lastname'];
	echo "<br>--------------";
}

echo "<br>--------------";
foreach($user as $chiave => $valore){
	echo "<br>$chiave: $valore";
	
}
echo "<br>--------------";

$animals = [
	"mammals" => ["cow", "pig", "horse", "dog"],
	"birds" => ["duck", "chicken"]
];


foreach ($animals as $animalClass) {
	foreach($animalClass as $animal) {
		echo "<br>$animal";
	}
}

// FUNZIONI -------------

function saluto($name){
	return "Ciao $name";
}

function salutoConEcho($name){
	echo"Ciao $name";
}



?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.css' integrity='sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw==' crossorigin='anonymous'/>
	<title>Primo PHP</title>
</head>
<body class="container py-5">
	<h1>Ciao mio primo PHP</h1>
	<h2><?php echo saluto('Ugo da funzione') ?></h2>
	<h2><?php salutoConEcho('Ugo da funzione con echo') ?></h2>
	<h2> ---> <?php salutoConEcho($user['name']) ?></h2>
	<h2>Ciao <?php  echo $name;   ?> <?php echo $lastname   ?></h2>
	<h2>Ciao <?php echo $nome_cognome ?></h2>
	<h3><?php echo $saluto ?></h3>
	<h3><?php echo $altro_saluto ?></h3>
	<p> <?php echo $testo ?> </p>
	<h2>Paragrafo lungo <?php echo strlen($testo) ?> caratteri</h2>
	<p><?php echo $testo ?> </p>

	<!-- tre modi per ciclare in HTML  -->
	<ul>
		<?php for($i = 0; $i < $limit; $i++){ ?>
			<li><?php echo $i ?></li>
		<?php } ?>
	</ul>

	<ul>
		<?php for($i = 0; $i < $limit; $i++){
			 echo "<li>$i</li>";
		} ?>
	</ul>

	<ul>
		<?php for($i = 0; $i < $limit; $i++): ?>
			<li><?php echo $i ?></li>
		<?php endfor; ?>
	</ul>

	<div class="row">

	<?php foreach($team as $person): 
					$class_color = ($person['genre'] === 'M') ? 'text-danger' : 'text-info';
	?>
		<div class="col">
			<div class="card" style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title <?php echo $class_color ?>"><?php echo $person['name'] ?> <?php echo $person['lastname'] ?></h5>
					<h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $person['role'] ?></h6>
					
					<ul class="list-group">
						<?php foreach($person['hobbies'] as $hobbie): ?>
							<li class="list-group-item"><?php echo $hobbie ?></li>
						<?php endforeach; ?>
					</ul>

				</div>
			</div>
		</div>
	<?php endforeach; ?>


	</div>

</body>
</html>