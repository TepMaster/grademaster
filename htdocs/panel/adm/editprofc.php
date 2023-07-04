<?php
if(!isset($_SESSION["usr_id"])){header("Location:/");}

require "helper.php";
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
        table {
            width: 100%;
            margin: 15px 0;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }

        thead {
            background-color: #f2f2f2;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        td:nth-child(2) {
            color: blue;
        }

    </style>
    <style type="text/css">
        .button-9 {
            appearance: button;
            backface-visibility: hidden;
            background-color: #405cf5;
            border-radius: 6px;
            border-width: 0;
            box-shadow: rgba(50, 50, 93, .1) 0 0 0 1px inset,rgba(50, 50, 93, .1) 0 2px 5px 0,rgba(0, 0, 0, .07) 0 1px 1px 0;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            font-family: -apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue",Ubuntu,sans-serif;
            font-size: 100%;
            height: 44px;
            line-height: 1.15;
            margin: 12px 0 0;
            outline: none;
            overflow: hidden;
            padding: 0 25px;
            position: relative;
            text-align: center;
            text-transform: none;
            transform: translateZ(0);
            transition: all .2s,box-shadow .08s ease-in;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            width: 100%;
        }

        .button-9:disabled {
            cursor: default;
        }

        .button-9:focus {
            box-shadow: rgba(50, 50, 93, .1) 0 0 0 1px inset, rgba(50, 50, 93, .2) 0 6px 15px 0, rgba(0, 0, 0, .1) 0 2px 2px 0, rgba(50, 151, 211, .3) 0 0 0 4px;
        }
    </style>


    <body data-new-gr-c-s-check-loaded="8.905.0" data-gr-ext-installed="">

    <div id="react-app">
        <div style="box-sizing: border-box; position: relative; margin-left: auto; margin-right: auto; padding: 0px; height: 100vh;" class="">


            <div class="comp-header" style="background-color: rgb(255, 64, 5)">
                <div style="box-sizing: border-box; position: relative; margin-left: auto; margin-right: auto; padding: 0px;" class="comp-header-content-log">
                    <div style="margin-left: 0px; margin-right: 0px; display: flex; flex-flow: row wrap; flex-grow: 0; flex-shrink: 0; align-items: normal; justify-content: flex-start;">
                        <div style="box-sizing: border-box; min-height: 1px; position: relative; padding-left: 0px; padding-right: 0px; width: 16.6667%; flex: 0 0 16.6667%; max-width: 16.6667%; margin-left: 0%; right: auto; left: auto;">

                        </div>
                        <div style="box-sizing: border-box; min-height: 1px; position: relative; padding-left: 0px; padding-right: 0px; width: 83.3333%; flex: 0 0 83.3333%; max-width: 83.3333%; margin-left: 0%; right: auto; left: auto;">
                            <div class="header-content-right">
                                <div class="wrapper-school-info"></div>
                                <div class="comp-tooltip-menu tooltip-preferinte works-on-click">
                                    <div class="more-actions">
                                        <div class="info-profile">
                                            <div class="comp-person-tag false person-tag-avatar ">
                                                <div class="comp-person-tag-share " role="button" tabindex="0">
                                                    <div class=" ">
                              <span><svg
                                      width="35"
                                      height="35"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      xmlns="http://www.w3.org/2000/svg"
                                  >
  <path
      fill-rule="evenodd"
      clip-rule="evenodd"
      d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7ZM14 7C14 8.10457 13.1046 9 12 9C10.8954 9 10 8.10457 10 7C10 5.89543 10.8954 5 12 5C13.1046 5 14 5.89543 14 7Z"
      fill="currentColor"
  />
  <path
      d="M16 15C16 14.4477 15.5523 14 15 14H9C8.44772 14 8 14.4477 8 15V21H6V15C6 13.3431 7.34315 12 9 12H15C16.6569 12 18 13.3431 18 15V21H16V15Z"
      fill="currentColor"
  />
</svg>
                              </span>
                                                    </div>
                                                    <p class="info-left-side">
                                                        <span> </span>
                                                        <span class="small">

                                                    </p>
                                                </div>
                                            </div>
                                            <div class="info-profile-right">
                                                <p>ROOT</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="submenu light  false" style="top: 40px; margin-top: unset;">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span style="display: table; clear: both;"></span>
                </div>
            </div>

            <div style="margin-left: 0px; margin-right: 0px; display: flex; flex-flow: row wrap; flex-grow: 0; flex-shrink: 0; align-items: normal; justify-content: flex-start;" class="two-columns-content">
                <div style="box-sizing: border-box; min-height: 1px; position: relative; padding-left: 0px; padding-right: 0px; width: 16.6667%; flex: 0 0 16.6667%; max-width: 16.6667%; margin-left: 0%; right: auto; left: auto;">
                    <div class="comp-mainmenu close-menu">
                        <nav class="mainmenu-nav nav-order-1">
                            <a href="/adm" aria-current="page" class="active">
                                <span>Noutăți &nbsp;&nbsp;</span>
                                <span role="button" tabindex="0" aria-label="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
  <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"/>
  <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
</svg></span>
                            </a>
                            <a href="/note">
                                <span>Manager Note si Abs&nbsp;&nbsp;</span>
                                <span class="" role="button" tabindex="0" aria-label="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mortarboard" viewBox="0 0 16 16">
  <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5ZM8 8.46 1.758 5.965 8 3.052l6.242 2.913L8 8.46Z"/>
  <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46l-3.892-1.556Z"/>
</svg></span>
                            </a>

                            <a href="/adm/add   ">
                                <span>Add users&nbsp;&nbsp;</span>
                                <span class="" role="button" tabindex="0" aria-label="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
</svg></span>
                            </a>

                        </nav>
                    </div>
                </div>
                <div style="box-sizing: border-box; min-height: 1px; position: relative; padding-left: 0px; padding-right: 0px; width: 83.3333%; flex: 0 0 83.3333%; max-width: 83.3333%; margin-left: 0%; right: auto; left: auto;">
                    <div class="rep-cards" style="">
                        <center>
                            <table style="width: 80%;">
                                <tr>
                                    <th>ID clasa</th>
                                    <th>Clasa</th>


                                </tr>
                                <?php
                                function is($ar,$val){
                                    foreach ($ar as $a){
                                        if($a == $val){return 1;}
                                    }
                                    return 0;
                                }
                                //$data = serialize(array(array(1,4)));
                                //id materia //idclasa
                                $bun =array();
                                $rr = DB::query("SELECT * FROM materi WHERE prof=%s",$_GET['id']);
                                foreach ($rr as $rrr){
                                   array_push($bun,$rrr['id']);
                                }


                                $results = DB::query("SELECT * FROM profcls WHERE userid =%d",$_GET['id']);
                                if($results!=null){
                                    $back =$results;
                                    $results =unserialize($results[0]["classarray"]);
                                    for ($i=0;count($results)>$i;$i++){

                                        echo ' <tr>
                                <th>'.$results[$i][1].'</th>
                                <th>'.getclase($results[$i][1])[0]["nume"].'</th>

                               
                            </tr>';
                                    }

                                }

                               //echo $_GET['id'];


                                ?>

                            </table>lol
                            <div>

                                <form method="post" ><input type="text" id="mat" placeholder="Id Materie" name="mat" min="0" max="60" required style="width: 25%;height: 20%;"> <a href="/adm/materi">Lista Materi</a><br>&nbsp;
                                <input type="text" id="cl" placeholder="Id clasa" name="cl" min="0" max="60" required style="width: 25%;height: 20%;">
                                    <a href="/adm/clase">Lista Clase</a>
                                    <input type="hidden" name="opportunity" value="<?php echo $_GET['id'];?>">
                                <button class="button-9" role="button" type="submit" style="background: red; width: 20%;">Adauga Clasa</button></form>
                            </div>




                        </center>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>


    </body>
    </html>
<?php


if(isset($_POST["cl"])){

    //chack if exit
    $row = DB::query("SELECT * FROM profcls WHERE userid=%s", $_POST['opportunity']);

    if($row!=null){
        //get curent data
        $data = DB::queryFirstRow("SELECT * FROM profcls WHERE userid=%s LIMIT 1",$_POST['opportunity']);
        $d = unserialize($data["classarray"]);
        var_dump($d);echo "<br>";
        array_push($d,array((int)$_POST["mat"],(int)$_POST["cl"]));
        var_dump($d);
        DB::update('profcls', ['classarray' => serialize($d)], "userid=%s", $_POST['opportunity']);
    }else{
        $rr =array(array($_POST["mat"],$_POST["cl"]));
        DB::insert('profcls', [
            'userid' => $_POST['opportunity'],
            'nume' => "",
            'classarray' => serialize($rr)
        ]);
    }





}
?>