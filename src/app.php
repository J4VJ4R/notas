<?php

if(isset($_GET['view'])){
    $view = $_GET['view'];

    require 'src/views/'.$view.'.php';
    // require 'src/lib/'.$view.'.php';
}else{
    require 'src/views/home.php';
}