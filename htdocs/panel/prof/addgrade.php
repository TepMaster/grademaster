<?php
if(!isset($_SESSION["usr_id"])){header("Location:/");}

require 'heder.php';
require "helper.php";
require 'config.php';
?>
<script src="/assets/sweetalert.min.js"></script>


<html data-darkreader-mode="dynamic" data-darkreader-scheme="dark" lang="ro">
<head>
    <title>GradeMaster</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
   
   
    
    
    
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1">
    
    
    
    <meta property="og:type" content="website">

    
    
    
   
    
    
    <link rel="shortcut icon" href="favicon.ico">

    <style type="text/css">
        img {
            border-radius: 50%;
            width: 50px;
            height: 50px;
        }

        img:hover {
            background-color: #eee;
        }

    </style>

    <link href="../../assets/panel/css_002.css" rel="stylesheet">
    <link href="../../assets/panel/css.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/panel/slick-theme.min.css">
    <link rel="stylesheet" charset="UTF-8" href="../../assets/panel/slick.min.css">
    <link href="../../assets/panel/358.70fe707c4acb1c00c992.css" rel="stylesheet">
    <link href="../../assets/panel/main.686a5113dde235253ec1.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../assets/panel/517.9cfc72d747ce58512402.css">

    <link rel="stylesheet" type="text/css" href="../../assets/panel/617.b0e4ac14796e486ec1f5.css">
    <link rel="stylesheet" type="text/css" href="../../assets/panel/647.d6efb16b803dfd9787f3.css">
    <link rel="stylesheet" type="text/css" href="../../assets/panel/772.18feb284bba861d7b8ff.css">
</head>
<style>
    .hide {
        display: none;
    }

    .myDIV:hover + .hide {
        display: block;
        color: red;
    }
    .form {
        width: 500px;
        margin: 50px auto;
        padding: 20px;
        border: 2px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 0 10px #ccc;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    label {
        font-weight: bold;
        margin-bottom: 10px;
    }

    input[type="number"], input[type="date"] {
        width: 90%;
        padding: 10px;
        margin-bottom: 20px;
        border: none;
        border-radius: 5px;
        box-shadow: 0 0 5px #ccc;
    }

    input[type="submit"] {
        width: 50%;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        box-shadow: 0 0 5px #007bff;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    input[type="submit"]:hover {
        background-color: #0062cc;
        box-shadow: 0 0 10px #0062cc;
    }
</style>

<body data-new-gr-c-s-check-loaded="8.905.0" data-gr-ext-installed="">

<div id="react-app">
    <div style="box-sizing: border-box; position: relative; margin-left: auto; margin-right: auto; padding: 0px; height: 100vh;" class="">


        <?php echo $hdr; ?>
        <div style="margin-left: 0px; margin-right: 0px; display: flex; flex-flow: row wrap; flex-grow: 0; flex-shrink: 0; align-items: normal; justify-content: flex-start;" class="two-columns-content">
            <div style="box-sizing: border-box; min-height: 1px; position: relative; padding-left: 0px; padding-right: 0px; width: 16.6667%; flex: 0 0 16.6667%; max-width: 16.6667%; margin-left: 0%; right: auto; left: auto;">
                <div class="comp-mainmenu close-menu">
                    <nav class="mainmenu-nav nav-order-1">
                        <a href="/" aria-current="page">
                            <span style="color: rgba(30,100,49,255);">Noutăți &nbsp;&nbsp;</span>
                            <span role="button" tabindex="0" aria-label="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
  <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"/>
  <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
</svg></span>
                        </a>
                        <a href="/class"  class="active">
                            <span style="color: rgba(30,100,49,255);">Note&Absente &nbsp;&nbsp;</span>
                            <span class="" role="button" tabindex="0" aria-label="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mortarboard" viewBox="0 0 16 16">
  <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5ZM8 8.46 1.758 5.965 8 3.052l6.242 2.913L8 8.46Z"/>
  <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46l-3.892-1.556Z"/>
</svg></span>
                        </a>



                        <a href="https://www.../../assets/panel.ro/ro/messages">
                            <span style="color: rgba(30,100,49,255);">Mesaje&nbsp;&nbsp;</span>
                            <span class="gg-inbox" role="button" tabindex="0" aria-label="icon"></span>
                        </a>

                        <a href="/files">
                            <span>Fișiere&nbsp;&nbsp;</span>
                            <span class="gg-folder " role="button" tabindex="0" aria-label="icon"></span>
                        </a>




                        <div class="separator-bottom"></div>
                        <a href="/guide" class="manual-utilizare" target="_blank" rel="noreferrer">
                            <span style="color: rgba(30,100,49,255);">Asistență  &nbsp;</span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(145, 222, 148); --darkreader-inline-fill: #e8e6e3;" data-darkreader-inline-fill=""><path d="M12 6a3.939 3.939 0 0 0-3.934 3.934h2C10.066 8.867 10.934 8 12 8s1.934.867 1.934 1.934c0 .598-.481 1.032-1.216 1.626a9.208 9.208 0 0 0-.691.599c-.998.997-1.027 2.056-1.027 2.174V15h2l-.001-.633c.001-.016.033-.386.441-.793.15-.15.339-.3.535-.458.779-.631 1.958-1.584 1.958-3.182A3.937 3.937 0 0 0 12 6zm-1 10h2v2h-2z"></path><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path></svg>
                        </a>
                    </nav>
                </div>
            </div>
            <div style="box-sizing: border-box; min-height: 1px; position: relative; padding-left: 0px; padding-right: 0px; width: 83.3333%; flex: 0 0 83.3333%; max-width: 83.3333%; margin-left: 0%; right: auto; left: auto;">
                <div class="rep-cards" style="">

                    <div class="form">

                          <h2>Grade Input</h2>
                          <form method="post">
                              <label for="grade">Nota:</label>
                              <input type="number" id="grade" name="grade" min="0" max="100" required>
                              <br><br>
                              <label for="grade">Comentariu:</label>
                              <input type="text" id="com" name="com" min="0" max="60" placeholder="optional">
                              <br><br>
                              <label for="date">Data:</label>
                              <input type="date" id="date" name="date" required>
                              <br><br>
                              <input type="submit" value="Submit"  onclick="myFunction()">
                          </form>


                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>


</body>
</html>
<?php


if(isset($_POST["grade"])){

    $data =  date("Y-m-d");


    if( !getbs($_POST["date"]) ){
        echo '<script type="text/javascript">',
        'window.addEventListener("DOMContentLoaded", () => {
    swal("Data Invalida", "NU ati adaugat nota", "error").then(function() {
    window.history.back() 
    });
    
    
});',
        '</script>';
    }else{
    DB::insert('note', [
        'userid' =>  $_GET["student"],
        'nota' => $_POST["grade"],
        'materieid' => $_GET["materie"],
        'data'=> $_POST["date"],
        'coment'=> $_POST["com"],
        'addby' => $_SESSION['usr_id']
    ]);

    $obj = json_decode(getnamebyid((int)$_GET["student"]),true);
    $mes = "Elevul ".$obj["n"]." a luat nota ".$_POST["grade"]." la ".getmateriename($_GET["materie"])[0]["nume"]." la data de ".$_POST["date"];
    $bac2k = $mes;
    send_sms(getphonenrs($_GET["student"]),$mes);

    $row = DB::query("SELECT * FROM logins WHERE parinte =%s ", $_GET["student"]);
    if($row != null){
        for($i=0;count($row)>$i;$i++){
            send_sms($row[$i]["poza"],$mes);
           // echo $row[$i]["poza"];
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
    'swal("Nota Adaugata!", "Ati adaugat nota cu succes!", "success").then(function() {
    let params = new URLSearchParams(document.location.search);
    let student = parseInt(params.get("student")); 
    let materie = parseInt(params.get("materie"), 10); 
    student="/manage?student="+student+"&materie="+materie
    window.location =student;
});',
    '</script>';


}}
?>