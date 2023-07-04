<?php

if(isset($_SESSION["usr_id"]) and isset($_POST["recid"])){
    $row =DB::query("SELECT * FROM mes WHERE recvier=%s AND sender =%i", $_SESSION["usr_id"],$_POST["recid"]);
    if($row==null){DB::insert('mes', [
        'mes' => "",
        'recvier' => $_SESSION["usr_id"],
        'sender' => $_POST["recid"]
    ]);}
    var_dump($row);
    DB::insert('mes', [
        'mes' => $_POST["mes"],
        'recvier' => $_POST["recid"],
        'sender' => $_SESSION["usr_id"]
    ]);
    echo "OK";
}