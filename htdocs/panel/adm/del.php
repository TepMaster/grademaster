
<script src="/assets/sweetalert.min.js"></script>
<?php
require "helper.php";


if(isset($_GET["id"])){
    DB::delete('tbl', 'id=%s', $_GET["id"]);

    echo '<script type="text/javascript">',
        'swal("Clasa Stersa!", "Clasa stersa!", "success").then(function() {
    
    window.location ="/adm/add";
});',
    '</script>';


}
?>