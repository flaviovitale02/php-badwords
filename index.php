<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>php badwords</title>
    </head>
    <body>
        <form action="./server.php" method="POST">
            <label for="testo">
                Inserisci un testo
            </label>
            <input type="text" name="testo" id="testo">
            <label for="badWord">
                Inserisci la parola da censurare
            </label>
            <input type="text" name="badWord" id="badWord">
            <button type="submit">invio</button>
        </form>
    </body>
</html>
