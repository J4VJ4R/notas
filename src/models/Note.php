<?php

namespace Vidamrr\Notas\models;

use Vidamrr\Notas\lib\Database;


class Note extends Database{

    private string $uuid;

    public function __construct(
        private string $title,
        private string $content
    )
    {
        parent::__construct();

        $this->uuid = uniqid();
    }

    //save

    public function save(){
        $query = $this->connect()->prepare("INSERT INTO notes (uuid, title, content, update) VALUES(:uuid,:title,:content, NOW())");
        $query->execute(['title' => $this->title, 'uuid' => $this->uuid, 'content' => $this->content])
    }


}