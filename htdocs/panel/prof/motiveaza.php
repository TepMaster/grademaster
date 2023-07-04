<script src="/assets/sweetalert.min.js"></script>

<?php
if(isset($_SESSION["rank"])){
    DB::update('absente', ['mot' => 1], "id=%s", $_GET["id"]);


    echo '<script type="text/javascript">',
    'window.addEventListener("DOMContentLoaded", () => {
    swal("Absenta Motivata!", "Ati motivat absenta cu succes!", "success").then(function() {
    window.history.back() 
    });
    
    
});',
    '</script>';
}
?>