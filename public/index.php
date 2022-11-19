<?php
if( !session_id() ) {
    session_start();
}

require_once '../app/init.php'; // teknik ini disebut bootstrapping

$app = new App;
// $control = new Controller();
?>