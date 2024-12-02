<?php
include("baglanti.php");

// Form yükleme
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sec = "SELECT * FROM iletisim WHERE id=$id";
    $sonuc = $conn->query($sec);

    if ($sonuc->num_rows > 0) {
        $cek = $sonuc->fetch_assoc();
    } else {
        echo "<script>alert('Kayıt bulunamadı.'); window.location.href='panel.php';</script>";
        exit();
    }
} else {
    echo "<script>alert('Geçersiz ID.'); window.location.href='panel.php';</script>";
    exit();
}

// Güncelleme işlemi
if (isset($_POST['guncelle'])) {
    $id = intval($_POST['id']);
    $isim = $conn->real_escape_string($_POST['isim']);
    $telefon = $conn->real_escape_string($_POST['telefon']);
    $email = $conn->real_escape_string($_POST['email']);
    $konu = $conn->real_escape_string($_POST['konu']);
    $mesaj = $conn->real_escape_string($_POST['mesaj']);

    $guncelle = "UPDATE iletisim SET 
                    isim='$isim', 
                    telefon='$telefon', 
                    email='$email', 
                    konu='$konu', 
                    mesaj='$mesaj' 
                 WHERE id=$id";

    if ($conn->query($guncelle) === TRUE) {
        echo "<script>alert('Kayıt başarıyla güncellendi.'); window.location.href='panel.php';</script>";
    } else {
        echo "<script>alert('Kayıt güncellenirken bir hata oluştu: " . $conn->error . "'); window.location.href='panel.php';</script>";
    }
}
?>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    .form-container {
        width: 50%;
        margin: 50px auto;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }
    .form-container h2 {
        text-align: center;
        color: #4CAF50;
    }
    .form-container label {
        display: block;
        margin-bottom: 8px;
        color: #333;
    }
    .form-container input[type="text"],
    .form-container textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    .form-container button {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        border: none;
        color: #fff;
        font-size: 16px;
        border-radius: 4px;
        cursor: pointer;
    }
    .form-container button:hover {
        background-color: #45a049;
    }
</style>

<div class="form-container">
    <h2>Güncelleme Formu</h2>
    <form method="post" action="guncelle.php?id=<?php echo $cek['id']; ?>">
        <input type="hidden" name="id" value="<?php echo $cek['id']; ?>">
        <label>Ad Soyad:</label>
        <input type="text" name="isim" value="<?php echo $cek['isim']; ?>">
        <label>Telefon:</label>
        <input type="text" name="telefon" value="<?php echo $cek['telefon']; ?>">
        <label>Email:</label>
        <input type="text" name="email" value="<?php echo $cek['email']; ?>">
        <label>Konu:</label>
        <input type="text" name="konu" value="<?php echo $cek['konu']; ?>">
        <label>Mesaj:</label>
        <textarea name="mesaj"><?php echo $cek['mesaj']; ?></textarea>
        <button type="submit" name="guncelle">Güncelle</button>
    </form>
</div>