<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim Tablosu</title>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }

        a {
            color: #04AA6D;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .logout {
            margin-bottom: 20px;
            display: inline-block;
            background-color: #04AA6D;
            color: white;
            padding: 8px 12px;
            text-decoration: none;
            border-radius: 4px;
        }

        .logout:hover {
            background-color: #038c58;
        }
    </style>
</head>

<body>
    <h1>İletişim Tablosu</h1>

    <?php
// Oturum yönetimini başlatır.
session_start();

// Kullanıcı oturumu kontrol edilir.
// Eğer 'user' oturum değişkeni boş ise, kullanıcı çıkış sayfasına yönlendirilir.
if ($_SESSION['user'] == "") {
    echo "<script>window.location.href='cikis.php'</script>";
} else {
    // Eğer oturum geçerliyse, kullanıcı adı ekranda görüntülenir.
    echo "<p>Kullanıcı adınız: <strong>" . $_SESSION['user'] . "</strong></p>";

    // Çıkış yapma bağlantısı oluşturulur.
    echo "<a class='logout' href='cikis.php'>Çıkış Yap</a>";

    // Veritabanı bağlantı dosyası dahil edilir.
    include("baglanti.php");

    // Veritabanı bağlantısının olup olmadığı kontrol edilir.
    if (!isset($conn)) {
        die("<p>Veritabanı bağlantısı başarısız oldu.</p>");
    }

    // 'iletisim' tablosundaki tüm kayıtları seçmek için SQL sorgusu hazırlanır.
    $sec = "SELECT * FROM iletisim";

    // SQL sorgusu çalıştırılır.
    $sonuc = $conn->query($sec);

    // Eğer sonuç varsa ve satır sayısı 0'dan büyükse:
    if ($sonuc && $sonuc->num_rows > 0) {
        // Veriler tablo formatında ekrana yazdırılır.
        echo "<table id='customers'>
                <thead>
                    <tr>
                        <th>Ad Soyad</th>
                        <th>Telefon</th>
                        <th>Email</th>
                        <th>Konu</th>
                        <th>Mesaj</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>
                <tbody>";

        // Tablodaki her satır veritabanından alınır ve ekrana yazdırılır.
        while ($cek = $sonuc->fetch_assoc()) {
            echo "<tr>
                    <td>" . ($cek['isim']) . "</td>
                    <td>" . ($cek['telefon']) . "</td>
                    <td>" . ($cek['email']) . "</td>
                    <td>" . ($cek['konu']) . "</td>
                    <td>" . ($cek['mesaj']) . "</td>
                    <td>
                        <!-- Güncelleme ve silme işlemleri için bağlantılar oluşturulur. -->
                        <a href='guncelle.php?id=" . ($cek['id']) . "'>Güncelle</a> |
                        <a href='sil.php?id=" . ($cek['id']) . "' onclick=\"return confirm('Silmek istediğinize emin misiniz?');\">Sil</a>
                    </td>
                  </tr>";
        }
        // Tablo kapanışı.
        echo "</tbody></table>";
    } else {
        // Eğer veritabanında hiçbir kayıt yoksa kullanıcıya bilgi verilir.
        echo "<p>Veritabanından hiçbir veri bulunamadı.</p>";
    }
}
?>

</body>

</html>
