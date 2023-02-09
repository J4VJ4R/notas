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
    <title>Home</title>
</head>
<body>
    <h1>home</h1>
    <?php
    
    foreach($notes as $note){
        echo "<div>{$note->getTitle()}</div>";
        echo "<div>{$note->getContent()}</div>";
    }

    ?>
</body>
</html>