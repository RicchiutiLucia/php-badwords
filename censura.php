<?php

    $testo= $_GET['text'];
    $censura= $_GET['censura'];

    $lunghezzaParagrafo = strlen($testo);
    $testoCensurato = str_replace($censura,'***',$testo);
    $lunghezzaParagrafoCensurato =strlen($testoCensurato);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Censura la parola!</title>
</head>
<body>
    <h2>Il testo inserito e la lunghezza del paragrafo:</h2>
    <p><?php echo "$testo è di  $lunghezzaParagrafo caratteri" ?></p>

    <h3>Parola che hai deciso di censurare:</h3>
    <p><?php echo $censura; ?></p>

    <h3>Testo censurato e nuova lunghezza del testo:</h3>
    <p><?php echo "$testoCensurato è di $lunghezzaParagrafoCensurato caratteri" ?></p>
    
    
</body>
</html>