<?php
require 'heder.php';
require "helper.php"


?>
<html data-darkreader-mode="dynamic" data-darkreader-scheme="dark" lang="ro">
<head>
    <title>GradeMaster</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
   
   
    
    
    
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1">
    
    
    
    <meta property="og:type" content="website">

    
    
    
   
    
    
    <link rel="shortcut icon" href="favicon.ico">

    

    
    


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
</style>
<style>
    /* Tooltip container */
    .tooltip {
        position: relative;
        display: inline-block;
        border-bottom: 1px dotted black; /* If you want dots under the hoverable text */
    }

    /* Tooltip text */
    .tooltip .tooltiptext {
        visibility: hidden;
        width: 120px;
        background-color: black;
        color: #fff;
        text-align: center;
        padding: 5px 0;
        border-radius: 6px;
        font-size: small;

        /* Position the tooltip text - see examples below! */
        position: absolute;
        z-index: 1;
    }

    /* Show the tooltip text when you mouse over the tooltip container */
    .tooltip:hover .tooltiptext {
        visibility: visible;
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
                        <a href="#"  class="active">
                            <span style="color: rgba(30,100,49,255);">Note&Absente &nbsp;&nbsp;</span>
                            <span class="" role="button" tabindex="0" aria-label="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mortarboard" viewBox="0 0 16 16">
  <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5ZM8 8.46 1.758 5.965 8 3.052l6.242 2.913L8 8.46Z"/>
  <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46l-3.892-1.556Z"/>
</svg></span>
                        </a>



                        <a href="/mes">
                            <span style="color: rgba(30,100,49,255);">Mesaje&nbsp;&nbsp;</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(145, 222, 148) " ><path d="M4 18h2v4.081L11.101 18H16c1.103 0 2-.897 2-2V8c0-1.103-.897-2-2-2H4c-1.103 0-2 .897-2 2v8c0 1.103.897 2 2 2z"></path><path d="M20 2H8c-1.103 0-2 .897-2 2h12c1.103 0 2 .897 2 2v8c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2z"></path></svg>
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
                    <div class="report-cards-tabs">
                        <div class="comp-tabs">
                            <div class="scroll-div">
                                <button type="button" class="page-tabs__button _tab" data-count="0" id="item-0">
                                    <a aria-current="page" class="active" href="#">Note</a>
                                </button>
                                <button type="button" class="page-tabs__button _tab" data-count="1" id="item-1">
                                    <a href="/abs">Absențe</a>
                                </button>


                            </div>
                        </div>
                    </div>
                    <div class="report-card-grades-container false">
                        <div class="report-card-grades">
                            <table class="comp-table">
                                <thead>
                                <tr class="grades-table-head-row">
                                    <th class="head-row-materie">Materie</th>
                                    <th class="head-row-note">Note</th>
                                    <th class="head-row-medie">Medie</th>
                                </tr>

                                </thead>
                                <tbody>
                                <?php
            $genmed=0;
            $med = "";$obecte=0;$mat=0;

            if(isset($_SESSION["par"]) and $_SESSION["par"]!=0){
                $mot = DB::query("SELECT * FROM logins WHERE id =%s",$_SESSION["par"]);
            }else{
                $mot = DB::query("SELECT * FROM logins WHERE id =%s",$_SESSION["usr_id"]);
            }
                                if($mot!=null){
                                    $meteri = DB::query("SELECT * FROM clase WHERE id =%s",$mot[0]["clasa"]);
                                    if($meteri!=null){
                                           $ar = unserialize($meteri[0]["materi"]);
                                        for($i=0;count($ar)>$i;$i++){
                                                echo'<tr class="grades-table-body-row">
                                    <td class="grades-table-body-row-subject">
                                        <div class="body-row-subject-name">'.getmateriename($ar[$i])[0]["nume"].'</div>
                                        <a href="/mes?id='.getmateriename($ar[$i])[0]["prof"].'"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(0, 0, 0); --darkreader-inline-fill: #e8e6e3;" data-darkreader-inline-fill=""><path d="M20 2H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h3v3.766L13.277 18H20c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2zm0 14h-7.277L9 18.234V16H4V4h16v12z"></path><circle cx="15" cy="10" r="2"></circle><circle cx="9" cy="10" r="2"></circle></svg></a>
                                    </td>
                                    <td class="grades-table-body-row-grade">
                                        <div style="display: flex; flex-wrap: wrap;">';
                                            if(isset($_SESSION["par"]) and $_SESSION["par"]!=0){
                                   $row = DB::query("SELECT * FROM note WHERE userid =%s and materieid = %s ", $_SESSION["par"],$ar[$i]);}
                                            else{
                                                $row = DB::query("SELECT * FROM note WHERE userid =%s and materieid = %s ", $_SESSION["usr_id"],$ar[$i]);
                                            }
                                   $med=0;
                                   if(count($row)!=0){$obecte++;}
                                            for($t=0;count($row)>$t;$t++){
                                                $med=$med+$row[$t]["nota"];
                                                $ob = json_decode(getnamebyid($row[$t]["addby"]),true);
                                                echo '<div class="gradebox-class ">
                                      <span role="button" tabindex="0" class="tooltip">
                                        <span class="tooltip__trigger">
                                          <span>
                                            <span class="show-grade show-color-black ">
                                              <span class="show-grade-integer">'.$row[$t]["nota"].'</span>
                                              <span class="tooltiptext" style="background: rgba(30,100,49,255); color: black; font-size: 14pf"> '.$row[$t]["data"].'  '.$ob["n"].'</span>
                                            </span>
                                          </span>
                                        </span>
                                      </span>
                                                        </div>';

                                            }if(count($row)==0){
                                                echo '<div class="gradebox-class ">
                                      <span role="button" tabindex="0" class="tooltip">
                                        <span class="tooltip__trigger">
                                          <span>
                                            <span class="show-grade show-color-black ">
                                              <span class="show-grade-integer" style="color: red;">-</span>
                                            </span>
                                          </span>
                                        </span>
                                      </span>
                                                        </div>';
                                            }else{$mat++;}
                                            $v = "-";
                                            if(count($row)!=0){$v=round($med/count($row));}
                                            echo '  <td class="grades-table-body-row-average">
                      <span><div class="row-average-desktop"><span><span class="show-grade show-color-none ">
                              <span class="show-grade-integer">'. $v.'</span></span></span></div></span>
                        </td>';if(count($row)!=0){$genmed+=$v;}

                                        }
                                        if($obecte==0){
                                            $med="-";
                                        }else{ $med =round($genmed/$mat,2);}
                                        }

                                }




                                ?>











                            </table>






                            <div class="report-card-grades-footer">
                                <div class="left-info">
                                    <div class="left-info-explained">
                    <span class="info-allign-container">

                                    </div><br>
                                    <div class="average-year">
                                        <div class="comp-tooltip-menu">
                                            <div class="more-actions">

                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(0, 0, 0); --darkreader-inline-fill: #e8e6e3;" data-darkreader-inline-fill=""><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><path d="M11 11h2v6h-2zm0-4h2v2h-2z"></path></svg>
                                                <div class="submenu light  false" style="top: 40px; margin-top: unset;">

                                                    <div>

                                                        <div>Media tuturor mediilor folosint media artmetica</div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>Media Anuală: <span class="average-grade">
                      <span>
                        <span class="show-grade show-color-none ">
                          <span class="show-grade-integer"><?php echo $med;?></span>
                        </span>
                      </span>
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


</body>
</html>
