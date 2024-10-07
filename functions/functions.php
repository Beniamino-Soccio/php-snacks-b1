<?php 
function ispalindrome() {
    $revstring = strrev($_GET["word"]);
    if ($revstring === $_GET["word"]){
        return true;
    } else {
        return false;
    }
    
}
?>