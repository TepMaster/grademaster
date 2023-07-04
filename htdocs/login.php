<script src="/assets/sweetalert.min.js"></script>
<?php
require 'helper.php';
if(isset($_SESSION['usr_id'])){
    header("Location: /");
}

if (isset($_POST['email']) && isset($_POST['pass'])) {
    $usr = $_POST['email'];
    $upass = $_POST['pass'];
    $row = DB::query("SELECT * FROM logins WHERE email =%s ", $usr);
    if ($row != null) {
        $r = $row[0];
        $salt = $r["salt"];
        if ($r['pass'] == hash("sha256", $upass . $salt)) {
            $_SESSION['usr_id'] = $r['id'];
            $_SESSION["rank"] = $r['rank'];
            $_SESSION["par"] = $r['parinte'];
            if($r['dirig']!=0){$_SESSION["dirig"] = $r['dirig'];}

            if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
                $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
            }
            if($r['rank']!=0){            send_sms($r["poza"],"Login nou detectat la data de ".date('d-m-y h:i:s').' de pe adresa IP '.$_SERVER['REMOTE_ADDR']);
            }
           header("Location: /");
        } else {
            echo '<script type="text/javascript"> window.addEventListener("DOMContentLoaded", () => {swal("Parola Gresita!", "Parola introdusa nu este valida!", "error");});</script>';
            $errMSG = 'password Wrong';
            $errTyp = 'danger';
        }

    } else {
        echo '<script type="text/javascript"> window.addEventListener("DOMContentLoaded", () => {swal("Utilizator Gresita!", "Utilizatorul nu a fost gasit!", "error");});</script>';
        $errTyp = 'danger';
        $errMSG = 'User not found';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login - GradeMastet</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="assets/login/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="assets/login/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="assets/grades-svgrepo-com.svg" alt="IMG">
            </div>

            <form class="login100-form validate-form" method="post">
					<span class="login100-form-title">
                        Login
					</span>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="email" id="email"  placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input class="input100" type="password" name="pass" id="pass" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div>

                <div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
                    <a class="txt2" href="#">
                        Username / Password?
                    </a>
                </div>
<br><br>&nbsp;&nbsp;<br>&nbsp;
            </form>
        </div>
    </div>
</div>




<!--===============================================================================================-->
<script src="assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="assets/login/vendor/bootstrap/js/popper.js"></script>
<script src="assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="assets/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="assets/login/vendor/tilt/tilt.jquery.min.js"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>