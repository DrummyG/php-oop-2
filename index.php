<?php
include_once __DIR__.'/classes/type.php';
include_once __DIR__.'/classes/user.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sei un cane</title>
</head>
<body>
    <header>

    </header>

    <main>
        <?php foreach($types as $key => $value){ ?>
            <h4><?php echo $value['nome']; ?></h4>
            <p><?php echo $value['prezzo']; ?> </p>
        <?php}?>
    </main>
    
</body>
</html>

<?php ?>

