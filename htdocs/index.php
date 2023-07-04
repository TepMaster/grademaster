<?php
session_start();
// Require composer autoloader
require __DIR__ . '/vendor/autoload.php';
require_once './db.class.php';


// Create Router instance
$router = new \Bramus\Router\Router();

// Define routes
// This route handling function will only be executed when visiting http(s)://www.example.org/about
$router->match('GET|POST','/', function() {

    if(!isset($_SESSION["usr_id"])){
        require 'main.php';
    }else{
        if($_SESSION["rank"]==0){require_once "panel/index.php";}
        elseif ($_SESSION["rank"]==10){require_once  "panel/adm/index.php";}
        elseif ($_SESSION["rank"]==-1) {require_once "panel/index.php";}
        else{require_once "panel/prof/index.php";}
    }

});
$router->match('GET|POST','/note', function() {
    if(!isset($_SESSION["usr_id"])){
        header("Location: /");
    }else{
    require_once  "panel/note.php";}
});

$router->match('GET|POST','/login', function() {
   require_once  "login.php";
});
$router->match('GET|POST','/library', function() {
    require_once  "library.php";
});

$router->match('GET|POST','/test', function() {
    require_once  "test.php";
});
//blog
$router->match('GET|POST','/blog', function() {
    require_once  "panel/blog.php";
});

//absente
$router->match('GET|POST','/abs', function() {
    require_once  "panel/abs.php";
});
$router->match('GET|POST','/logout', function() {
    require_once  "logout.php";
});

//mes
$router->match('GET|POST','/mes', function() {
    require_once  "panel/mess.php";
});
//sendmsg
$router->match('GET|POST','/sendmsg', function() {
    require_once  "panel/sendmsg.php";
});

$router->match('GET|POST','/guide', function() {
    require_once  "panel/guide.php";
});

//PROF-panel


$router->match('GET|POST','/class', function() {
    require_once  "panel/prof/class.php";
});
$router->match('GET|POST','/pmes', function() {
    require_once  "panel/prof/msg.php";
});
$router->match('GET|POST','/addnote', function() {
    require_once  "panel/prof/addnote.php";
});
$router->match('GET|POST','/addaps', function() {
    require_once  "panel/prof/addaps.php";
});
//manmgestudent
$router->match('GET|POST','/manage', function() {
    require_once  "panel/prof/manage.php";
});
//manmgestudent
$router->match('GET|POST','/addgrade', function() {
    require_once  "panel/prof/addgrade.php";
});
//manmgestudent
$router->match('GET|POST','/edit', function() {
    require_once  "panel/prof/edit.php";
});
//
//motiveaza
$router->match('GET|POST','/motiveaza', function() {
    require_once  "panel/prof/motiveaza.php";
});
$router->match('GET|POST','/addabs', function() {
    require_once  "panel/prof/addabs.php";
});

$router->match('GET|POST','/dirigl', function() {
    require_once  "panel/prof/dirigl.php";
});

$router->match('GET|POST','/dirigselmat', function() {
    require_once  "panel/prof/dirigselmat.php";
});

$router->match('GET|POST','/dirigaddnote', function() {
    require_once  "panel/prof/dirigaddnote.php";
});
$router->match('GET|POST','/dirigmanage', function() {
    require_once  "panel/prof/dirigmanage.php";
});

$router->match('GET|POST','/dirigedit', function() {
    require_once  "panel/prof/dirigedit.php";
});
$router->match('GET|POST','/dirigaddabs', function() {
    require_once  "panel/prof/dirigaddabs.php";
});

//Master Admin
//main page
$router->match('GET|POST','/adm', function() {
    if($_SESSION["rank"]==10){
        require_once  "panel/adm/index.php";
    }else{echo "Nu aveti permisiuni";}

});
//list classes from baza de date
$router->match('GET|POST','/adm/lclass', function() {
    if($_SESSION["rank"]==10){
        require_once  "panel/adm/lclasa.php";
    }else{echo "Nu aveti permisiuni";}

});
//list materi for a clasa from baza de date
$router->match('GET|POST','/adm/selectmat', function() {
    if($_SESSION["rank"]==10){
        require_once  "panel/adm/selectmat.php";
    }else{echo "Nu aveti permisiuni";}

});
$router->match('GET|POST','/adm/addnode', function() {
    if($_SESSION["rank"]==10){
        require_once  "panel/adm/addnote.php";
    }else{echo "Nu aveti permisiuni";}

});
//manage

$router->match('GET|POST','/adm/manage', function() {
    if($_SESSION["rank"]==10){
        require_once  "panel/adm/manage.php";
    }else{echo "Nu aveti permisiuni";}

});
$router->match('GET|POST','/adm/edit', function() {
    if($_SESSION["rank"]==10){
        require_once  "panel/adm/cal/select.php";
    }else{echo "Nu aveti permisiuni";}

});
$router->match('GET|POST','/adm/ll', function() {
    if($_SESSION["rank"]==10){
        require_once "panel/adm/index.html";
    }else{echo "Nu aveti permisiuni";}

});

$router->match('GET|POST','/adm/gen', function() {
    if($_SESSION["rank"]==10){
        require_once "panel/adm/cal/gen.php";
    }else{echo "Nu aveti permisiuni";}

});

$router->match('GET|POST','/adm/addaps', function() {
    if($_SESSION["rank"]==10){
        require_once  "panel/adm/addaps.php";
    }else{echo "Nu aveti permisiuni";}

});
//add users page
$router->match('GET|POST','/adm/add', function() {
    if($_SESSION["rank"]==10){
        require_once  "panel/adm/add.php";
    }else{echo "Nu aveti permisiuni";}

});

$router->match('GET|POST','/adm/list', function() {
    if($_SESSION["rank"]==10){
        require_once  "panel/adm/list.php";
    }else{echo "Nu aveti permisiuni";}

});


$router->match('GET|POST','/adm/addprof', function() {
    if($_SESSION["rank"]==10){
        require_once  "panel/adm/addprof.php";
    }else{echo "Nu aveti permisiuni";}

});
$router->match('GET|POST','/adm/eveadd', function() {
    if($_SESSION["rank"]==10){
        require_once  "panel/adm/addevl.php";
    }else{echo "Nu aveti permisiuni";}

});
$router->match('GET|POST','/adm/up', function() {
    if($_SESSION["rank"]==10){
        require_once  "panel/adm/upload.php";
    }else{echo "Nu aveti permisiuni";}

});
$router->match('GET|POST','/adm/mat', function() {
    if($_SESSION["rank"]==10){
        require_once  "panel/adm/mat.php";
    }else{echo "Nu aveti permisiuni";}

});
$router->match('GET|POST','/adm/addclas', function() {
    if($_SESSION["rank"]==10){
        require_once  "panel/adm/addclas.php";
    }else{echo "Nu aveti permisiuni";}

});

$router->match('GET|POST','/adm/materi', function() {
    if($_SESSION["rank"]==10){
        require_once  "panel/adm/materi.php";
    }else{echo "Nu aveti permisiuni";}

});
$router->match('GET|POST','/adm/modclas', function() {
    if($_SESSION["rank"]==10){
        require_once  "panel/adm/modclas.php";
    }else{echo "Nu aveti permisiuni";}

});
$router->match('GET|POST','/adm/modclase', function() {
    if($_SESSION["rank"]==10){
        require_once  "panel/adm/modclase.php";
    }else{echo "Nu aveti permisiuni";}

});
$router->match('GET|POST','/adm/del', function() {
    if($_SESSION["rank"]==10){
        require_once  "panel/adm/del.php";
    }else{echo "Nu aveti permisiuni";}

});
$router->match('GET|POST','/adm/editprof', function() {
    if($_SESSION["rank"]==10){
        require_once  "panel/adm/editprof.php";
    }else{echo "Nu aveti permisiuni";}

});
$router->match('GET|POST','/adm/editprofc', function() {
    if($_SESSION["rank"]==10){
        require_once  "panel/adm/editprofc.php";
    }else{echo "Nu aveti permisiuni";}

});
$router->match('GET|POST','/adm/clase', function() {
    if($_SESSION["rank"]==10){
        require_once  "panel/adm/clase.php";
    }else{echo "Nu aveti permisiuni";}

});
$router->match('GET|POST','/adm/elv', function() {
    if($_SESSION["rank"]==10){
        require_once  "panel/adm/elv.php";
    }else{echo "Nu aveti permisiuni";}

});
$router->match('GET|POST','/adm/addpar', function() {
    if($_SESSION["rank"]==10){
        require_once  "panel/adm/addpar.php";
    }else{echo "Nu aveti permisiuni";}

});
// Run it!
$router->run();

?>