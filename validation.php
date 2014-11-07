<?php
$isSubmitted = isset($_POST["submit"]);

if($isSubmitted) {
 $username = $_POST["username"];
}




if (!isset($username) || $username == "") {
    $usernameMessage = '<div class="form-message form-error">Nime väli ei vasta nõuetele</div>';
  }
  elseif (strlen($username) < 2) {
    $usernameMessage = '<div class="form-message form-error">kasutajanimi  v2hemalt 3 t2hem2rki!</div>';
  }
  elseif (strlen($username) > 20) {
    $usernameMessage = '<div class="form-message form-error">kasutajanimi max 20 t2hem2rki!</div>';
  } else {
    $usernameMessage = '<div class="form-message form-notice">Täname korrektselt sisesatud nime eest!</div>';
  }	



?>