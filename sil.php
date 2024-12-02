<?php
// Veritabanı bağlantısını dahil eder.
include("baglanti.php");

// URL'den gelen 'id' parametresinin varlığını kontrol eder.
if (isset($_GET['id'])) {
    // 'id' parametresinin geçerli bir tamsayı olduğundan emin olunur.
    $id = intval($_GET['id']); // ID doğrulama

    // 'iletisim' tablosundan belirtilen ID'ye sahip kaydı silmek için SQL sorgusu oluşturulur.
    $sil = "DELETE FROM iletisim WHERE id=$id";

    // SQL sorgusu çalıştırılır ve işlem başarılı ise:
    if ($conn->query($sil) === TRUE) {
        // Kayıt başarıyla silindiği bilgisi gösterilir ve kullanıcı "panel.php"ye yönlendirilir.
        echo "<script>alert('Kayıt başarıyla silindi.'); window.location.href='panel.php';</script>";
    } else {
        // Hata oluşursa hata mesajı gösterilir ve kullanıcı "panel.php"ye yönlendirilir.
        echo "<script>alert('Kayıt silinirken bir hata oluştu: " . $conn->error . "'); window.location.href='panel.php';</script>";
    }
} else {
    // 'id' parametresi yoksa veya geçersizse, kullanıcıya hata mesajı gösterilir ve "panel.php"ye yönlendirilir.
    echo "<script>alert('Geçersiz ID.'); window.location.href='panel.php';</script>";
}
?>
