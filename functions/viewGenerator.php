<?php
if(isset($_GET['url'])){
    $page = $_GET['url'];
    if(file_exists("views/".$page.".php")){
        require_once("views/".$page.".php");
    }
    else{
        require_once("views/404.php");
    }
}
else{
    require_once("views/index.php");
}
?>