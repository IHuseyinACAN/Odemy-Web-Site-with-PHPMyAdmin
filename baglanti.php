<?php
// Veritabanı bağlantı bilgileri
$servername = "localhost"; // Veritabanı sunucusu (genellikle localhost kullanılır)
$username = "root";        // Veritabanı kullanıcı adı
$password = "";            // Veritabanı şifresi (varsayılan olarak boş)
$dbname = "mysite";        // Veritabanı adı

// MySQL bağlantısını oluştur
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if (!$conn) {
    die("Veritabanı bağlantısı başarısız: " . mysqli_connect_error());
} 


?>
