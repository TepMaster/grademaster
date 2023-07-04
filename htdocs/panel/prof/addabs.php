<script src="/assets/sweetalert.min.js"></script>
<?php
require  'helper.php';
require 'config.php';
if(isset($_SESSION["rank"])) {

   $data =  date("Y-m-d");

    if( !getbs($data) ){
        echo '<script type="text/javascript">',
        'window.addEventListener("DOMContentLoaded", () => {
    swal("Data Invalida", "", "error").then(function() {
    window.history.back() 
    });
    
    
});',
        '</script>';
    }else{

    DB::insert('absente', [
        'userid' => $_GET["student"],
        'moterieid' => $_GET["materie"],
        'addby' => $_SESSION["usr_id"],
        'mot'=>0
    ]);
    //send not
    $obj = json_decode(getnamebyid((int)$_GET["student"]),true);

    $mes = "Elevul ".$obj["n"]." a luat absent la ".getmateriename($_GET["materie"])[0]["nume"]." la data de ".date("Y-m-d H:i", time());;
    $bac2k = $mes;
    send_sms(getphonenrs($_GET["student"]),$mes);

    $row = DB::query("SELECT * FROM logins WHERE parinte =%s ", $_GET["student"]);
    if($row != null){
        for($i=0;count($row)>$i;$i++){
            send_sms($row[$i]["poza"],$mes);
            //echo $row[$i]["poza"];
        }
    }

    //for mail
    $row = DB::query("SELECT * FROM logins WHERE parinte =%s ", $_GET["student"]);
    if($row != null){
        for($i=0;count($row)>$i;$i++){
            send_mail($row[$i]["email"],$bac2k);
        }
    }
    send_mail(getemail((int)$_GET["student"]),$bac2k);


    echo '<script type="text/javascript">',
    'window.addEventListener("DOMContentLoaded", () => {
    swal("Absenta Adaugata!", "Ati adaugat absenta cu succes!", "success").then(function() {
    window.history.back() 
    });
    
    
});',
    '</script>';
}}
?>
