<?php
// Oturum yönetimini başlatır.
session_start();

// Tüm oturum verilerini temizler.
$_SESSION = array();

// Oturumu tamamen sonlandırır.
session_destroy();

// Kullanıcıyı "panelgiris.php" sayfasına yönlendirir.
header("Location:panelgiris.php");
?>
