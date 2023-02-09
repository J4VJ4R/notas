<?php
use Vidamrr\Notas\models\Note;

if(isset($_GET['id'])){
    $note = Note::get($_GET['id']);
}else{
    header("Location, ?view=home ");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Views</title>
</head>
<body>
    <h1>Get notes</h1>
    <form action="?view=create" method="post">
        <input type="text" name="title" placeholder="Title" value="<?= $note->getTitle(); ?>">
        <textarea name="content" placeholder="your text here" cols="30" rows="10"><?= $note->getContent(); ?></textarea>
        <input type="submit" value="Send">
    </form>
</body>
</html>