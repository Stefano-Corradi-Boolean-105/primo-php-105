<?php

// $_POST è un array che contiene tutti i parametri passati in POST
//var_dump($_POST);

// se il nome non c'è il nome sarà "NO NAME";
// faccio il controllo con un operatore ternario
// isset resituisce true se una variabile è stata settata
 $name = isset($_POST['name']) ? $_POST['name'] :  "NO NAME";

 // stesso controllo ma con la sintassi ?? -> se a sinistra è null stampa quello che c'è a destra
 $lastname = $_POST['lastname'] ?? 'NO LASTNAME';

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.css' integrity='sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw==' crossorigin='anonymous'/>


  <title>Atterraggio Form POST</title>
</head>
<body>

<div class="container my-5">
  <div class="row">
    <div class="col-6">
      <h2>Atterraggio Form in POST</h2>
      <h2>Nome utente: <?php echo $name ?> <?php echo $lastname ?></h2>

    </div>
  </div>
</div>
  
</body>
</html>