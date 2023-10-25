<?php

// $_GET è un array che contiene tutti i parametri passati in GET
//var_dump($_GET);

// se il nome non c'è il nome sarà "NO NAME";
// faccio il controllo con un operatore ternario
// isset resituisce true se una variabile è stata settata
 $name = isset($_GET['name']) ? $_GET['name'] :  "NO NAME";

 // stesso controllo ma con la sintassi ?? -> se a sinistra è null stampa quello che c'è a destra
 $lastname = $_GET['lastname'] ?? 'NO LASTNAME';

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.css' integrity='sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw==' crossorigin='anonymous'/>


  <title>Atterraggio Form GET</title>
</head>
<body>

<div class="container my-5">
  <div class="row">
    <div class="col-6">
      <h2>Atterraggio Form in GET</h2>
      <h2>Nome utente: <?php echo $name ?> <?php echo $lastname ?></h2>
    </div>
  </div>
</div>
  
</body>
</html>