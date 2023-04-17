<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censura la parola!</title>
</head>
<body>
    <form action="censura.php" method="GET">

        <label for="testo">Inserisci un testo</label> <br />
        <input type="text" name="text" id="testo" placeholder="Testo a piacere" /> <br />

        <label for="censura">Inserisci una parola da censurare</label> <br />
        <input type="text" name="censura" id="censura" placeholder="Parola da censurare" /> <br />
        <button type="submit">Controlla il testo</button>

    </form>
    
</body>
</html>