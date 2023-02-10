<?php
use Vidamrr\Notas\models\Note;

if(count($_POST) > 0){
    //Update Note
    $title = $_POST['title'];
    $content = $_POST['content'];
    $uuid = $_POST['id'];

    $note = Note::get($uuid);
    $note->setTitle($title);
    $note->setContent($content);

    $note->update();
}else if(isset($_GET['id'])){
    $note = Note::get($_GET['id']);
}else{
    header("Location, http://172.17.0.2/notas/?view=home ");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/notas/src/views/resources/main.css">
    <title>Views</title>
</head>
<body>
<?php require 'resources/components/nav.php'; ?>
    <h1 class="title">Get notes</h1>
    <form action="?view=views&id=<?= $note->getUUID() ?>" method="post">
        <input type="text" name="title" placeholder="Title" value="<?= $note->getTitle(); ?>">
        <input type="hidden" name="id" value="<?php echo $note->getUUID(); ?>">
        <textarea name="content" placeholder="your text here" cols="30" rows="10"><?= $note->getContent(); ?></textarea>
        <input type="submit" value="Update Note">
    </form>
</body>
</html>