<?php

function getmateriename($id){
    $row = DB::query("SELECT * FROM materi WHERE  id =%s ", $id);
    if($row != null){return $row;}return "";
}
function getclase($id){
    $row = DB::query("SELECT * FROM clase WHERE  id =%s ", $id);
    if($row != null){return $row;}return "";
}
function getbs($data){
    $row = DB::query("SELECT * FROM date WHERE  data =%s ",$data);
    if($row != null){if($row[0]["ok"]==1){return 1;}else{return 0;}}return 0;
}
function getnrofmateri(){
    $row = DB::query("SELECT COUNT(id) FROM materi");
    if($row != null){return $row[0]['COUNT(id)'];}else{return 0;}
}
function getnrofnews(){
    $row = DB::query("SELECT COUNT(id) FROM news");
    if($row != null){return $row[0]['COUNT(id)'];}else{return 0;}
}
function getnamebyid($id){
    $row = DB::query("SELECT * FROM logins WHERE  id =%s ", $id);
    if($row != null){return $row[0]['data'];}else{return 0;}
}
function getnewsby($postid){
    $row = DB::query("SELECT * FROM news WHERE id =%s",$postid);
    if($row != null){return $row[0];}else{return 0;}
}
function getphonenrs($id){
    $row = DB::query("SELECT * FROM logins WHERE id =%s",$id);
    if($row != null){return $row[0]["poza"];}else{return 0;}
}
function getidbyemail($email){
    $row = DB::query("SELECT * FROM logins WHERE  email =%s ", $email);
    if($row != null){return $row[0]['id'];}else{return 0;}
}
function getemail($id){
    $row = DB::query("SELECT * FROM logins WHERE  id =%s ", $id);
    if($row != null){return $row[0]['email'];}else{return 0;}
}
function send_mail($nota,$cont){
    $arr = array("email"=>$nota,"cont"=>$cont);
    $mess = base64_encode(json_encode($arr));
    $chh = curl_init();
    $mess = "http://192.168.100.220:5000/email/".$mess; //AICI IP
    curl_setopt($chh, CURLOPT_URL, $mess);
    curl_setopt($chh, CURLOPT_TIMEOUT, 5);
    curl_setopt($chh, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($chh);
    curl_close($chh);
}
function send_sms($nr,$mes){
    $ch = curl_init();
    $arr = array("nr"=>$nr,"cont"=>$mes);
    $mes = base64_encode(json_encode($arr));
    $mes = "http://192.168.100.220:5000/success/".$mes;   //AICI IP
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_URL, $mes);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
}
function generateRandomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}