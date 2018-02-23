<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="">
    <title>Document</title>
</head>
<body>
    <p>Exercice 1:<?php 
for ($i = 0; $i <= 100; $i++){
    echo $i."\n";
}
?> </p>
<p>Exercice 2:<?php 
$dev = "back";
$technos = ["Php", "Ruby", "Javascript", "Html"];
if($dev === "front"){
    echo 'Je suis un dev front et je connais '.$technos[2]."\n". "et"."\n".$technos[3];
}else if($dev === "back"){
    echo 'Je suis un dev back et je connais '.$technos[0]."\n". "et"."\n".$technos[1];
}else{
    echo 'vas a SIMPLON';
}
?> </p>
<p>Exercice 3:<?php 
$technos = array ("Php", "Ruby", "Javascript", "Html");
$technos.push("Python");
for($i=0; $i <= sizeof($technos); $i++){
echo $technos[$i];
}
?> </p>
</body>
</html>