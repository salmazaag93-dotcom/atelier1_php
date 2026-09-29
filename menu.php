<?php 
function display_menu(){
    for ($i=1; $i < 11; $i++) { 
       echo "<a href=\"ex$i.php\">Exercice $i</a><br>";
    }
}
?>