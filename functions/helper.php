<?php
if(isset($_GET['url'])){
    $page = $_GET['url'];
    if(file_exists("views/".$page.".php")){
        $title = $page;
    }
    else{
        $title = "Oops! Looks Like You Are Lost";
    }
}
else{
    $title = "Mechismu | IIT ISM DHANBAD";
}
?>
<title><?php echo $title ;?></title>