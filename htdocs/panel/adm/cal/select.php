<?php

require  'helper.php';
//var_dump($_GET);
$newDate = date('Y-m-d', strtotime($_GET["date"] . ' +1 day'));
$row = DB::query("SELECT * FROM date WHERE  data =%s", $newDate);

if($row!=null){
  if ($row[0]["ok"]==1){
      DB::update('date', ['ok' => 0], "data=%s", $newDate);echo "OK";
  }else{
      DB::update('date', ['ok' => 1], "data=%s", $newDate);echo "OK";
  }
}else{
    DB::insert('date', [
        'data' => $newDate,
        'ok' => 1
    ]);
    echo "OK";
}