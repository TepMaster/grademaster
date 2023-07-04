<?php
session_start();
require_once './db.class.php';
if(isset($_SESSION['usr_id'])&& $_SESSION["rank"] !=0){
    DB::delete('note', 'id=%s', $_GET["id"]);
}

