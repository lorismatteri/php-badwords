<?php
    /* $name = "Loris";
    $surname = "Matteri"; */
    $par = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus dolores laborum maxime! Minus, consequatur! Delectus provident suscipit modi voluptatibus in maxime, a odit adipisci deleniti officiis error, incidunt, aut quos?";
    $length = strlen($par);
    $badword = "ciao";
    $_GET["badword"];
    $word = str_replace("ciao", "***", $badword);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p><?php echo $par;?></p> 
    <p>La lunghezza del paragrafo è di <?php echo $length;?> caratteri</p>
    
    <p>La parola inserita è <?php echo $word;?></p>
    
</body>
</html>

<!-- php -S localhost:9999 -->