<?php

    use Vidamrr\Notas\models\Note;

    $notes = Note::getAll();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/notas/src/views/resources/main.css">
    <title>Home</title>
</head>
<body>
<?php require 'resources/components/nav.php'?>
    <h1 class="title">Get Views</h1>
    <?php
    
    foreach($notes as $note){
    ?>
    <a href="?view=views&id=<?= $note->getUUID(); ?>">
        <div class="title title-color"><?= $note->getTitle(); ?></div>
    </a>

    <?php
    
    }

    ?>
</body>
</html>