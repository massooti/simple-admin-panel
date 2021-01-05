<?php
require_once './config/config.php';

function counter($table) : int{

    $db = getDbInstance();
     $counter = $db->get($table);

     return count($counter);

}

?>