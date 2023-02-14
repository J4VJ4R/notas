<?php

use Vidamrr\Notas\models\Note;

if(count($_POST) > 0){
    $title = $_POST['title'];
    $content = $_POST['content'];
    

    $note = new Note($title, $content);
    $note->save();
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/notas/src/views/resources/main.css">
    <title>Create</title>
</head>
<body>
    <?php require 'resources/components/nav.php'
    ?>
    <h1 class="title">Create notes</h1>
    <form action="?view=create" method="post">
        <input type="text" name="title" placeholder="Title">
        <textarea name="content" placeholder="your text here" cols="30" rows="10"></textarea>
        <input type="submit" value="Send">
    </form>
</body>
</html>