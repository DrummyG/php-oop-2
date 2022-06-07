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
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <header>
        <h3>Non sei iscritto? Fallo adesso per ottenere il 20% di sconto sui nostri prodotti!</h3>
        <form action="" method="post">
            <input type="text" name="nome">
            <input type="text" name="cognome">
            <input type="text" name="email">
            <button>ISCRIVITI</button>
        </form>
        <p><?php echo $errore ?></p>
    </header>

    <main>
        <?php foreach($types as $key => $value){ ?>
            <div>
                <img src="<?php echo $value['img'];  ?>" alt="">
                <h4><?php echo $value['nome']; ?></h4>
                <p><?php echo $value['prezzo']; ?> </p>
                <p><?php echo $value['tipo']; ?></p>
                <p><?php echo $value['animale']; ?></p>
                <button>Aggiungi al carrello</button>
            </div>
        <?php } ?>
    </main>
    
</body>
</html>

<?php ?>

