<?php
    $testo = $_POST['testo'];

    $password = $_POST['password'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>server</title>
</head>
<body>
    <h1>
        <?php echo ucfirst($testo) ?>
    </h1>
    <h1>
        <?php echo str_replace($password,'***',$password)?>
    </h1>
</body>
</html>