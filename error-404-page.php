<?php
// http://localhost
$baseUrl = "http://" . $_SERVER["HTTP_HOST"];
$pieces = explode("/", $_SERVER["REQUEST_URI"]);
// error-404-assignment
$projectName = $pieces[1];
// remove first two elements:/error-404-assignment
unset($pieces[0],$pieces[1]);
// what user printed
$gibberish = implode("/", $pieces);

?>





<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        
        <link rel="stylesheet" href="
        <?php 
            echo $baseUrl. "/". $projectName. "/". "css" . "/". "style.css";                
        ?>
        ">
        
       
        <title>404 Error Page</title>
    </head>
    <body>
        <h1>OUCH!</h1>
             
        <h2> We don't have <?php 
            echo $gibberish; 
            ?>
        </h2>
        
        <p>Go back to <a href="
            <?php
            $link = $baseUrl. "/". $projectName. "/". "index.php";
            echo $link;
            ?>
            ">home-page</a>!
        </p>
    </body>
</html>