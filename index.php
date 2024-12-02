<!DOCTYPE html>
<html
    lang="tr">
    <head>

        <link rel="stylesheet" href="owl/owl.carousel.min.css">
        <link rel="stylesheet" href="owl/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/styles.css">
        <meta
            charset="UTF-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0">
        <title>
            Anasayfa
        </title>
        <link
            rel="stylesheet"
            href="style.css">
            <script src="https://kit.fontawesome.com/57f14e84f0.js" crossorigin="anonymous"></script>
    
    </head>

   <body>

    <section id="menu"> 
        <div id="logo">ODEMY</div>
        <nav>
           <a href="index.html"><i class="fa-solid fa-house ikon"></i>Anasayfa</a>
            <a href="hakkimizda.html"><i class="fa-solid fa-info ikon"></i>Hakkımızda</a>
            <a href="iletisim.html"><i class="fa-solid fa-school ikon"></i>Eğitimler</a>
            <a href="iletisim.html"><i class="fa-solid fa-user-group ikon"></i>Ekip</a>
            <a href="iletisim.html"><i class="fa-solid fa-tty ikon"></i>İletişim</a>
        </nav>
    </section>

    <section id="anasayfa">
        <div class="siyah">
        </div>
        <div id="içerik">
            <h2>ODEMY</h2>
            <hr width="50%" align=left>
            <p>Odemy, paylaşarak öğrenmeyi hedefleyen bir platformdur. Bu platformda, eğitimlerinizi paylaşabilir, başkalarının eğitimlerini izleyebilir ve eğitimlerinizi geliştirebilirsiniz. </p>
        </div>
    </section>

    <section id="Hakkımızda">

        <h3>Hakkımızda</h3>
    
        <div class="container">
            <div id="sol">
                <h5 id="h5sol">Odemy, paylaşarak öğrenmeyi hedefleyen bir platformdur. </h5>
                <hr width="50%" align=left>
            </div>
    
            <div id="sag">
                <span>O</span>
                <p id="psag">demy, paylaşarak öğrenmeyi hedefleyen bir platformdur. Bu platformda, eğitimlerinizi paylaşabilir, başkalarının eğitimlerini izleyebilir ve eğitimlerinizi geliştirebilirsiniz.</p>
            </div>
    
            <img src="img\about.jpg" alt=""
            class="img-fluid mt100">
    
            <p id="palt">ODEMY, paylaşarak öğrenmeyi hedefleyen bir platformdur. Bu platformda, eğitimlerinizi paylaşabilir, başkalarının eğitimlerini izleyebilir ve eğitimlerinizi geliştirebilirsiniz.</p>
        </div>
    </section>

    <section id="Egitimler">
        <div class="container">

            <h3>Eğitimler</h3>

            <div class="owl-carousel owl-theme">
                <div class="card 
                item" data-merge=1.5>
                    <img src="img\r5.jpg" alt=""
                    class="img-fluid">
                    <h5 class="cardbaslik">HTML5 ve CSS Eğitimi</h5>
                    <p class="cardp">HTML5 ve CSS Eğitimi</p>
                </div>

                <div class="card item" data-merge=1.5>
                    <img src="img\r7.jpg" alt=""
                    class="img-fluid">
                    <h5 class="cardbaslik">PHP ve Web Tabanlı Yazılım</h5>
                    <p class="cardp">PHP ve Web Tabanlı Yazılım</p>
                </div>

                <div class="card 
                item" data-merge=1.5>
                    <img src="img\r4.jpg" alt=""
                    class="img-fluid">
                    <h5 class="cardbaslik">Python Programlama</h5>
                    <p class="cardp">Python Programlama</p>
                </div>
                
            </div>
        </div>
    </section>

    <section id="Ekip">
        <div class="container">
            <h3 id="ekiph3">Eğitmenlerimiz</h3>
            <div class="sutun-sol-sag">
                 <img src="img\hasan.png" alt="" class="img-fluid oval">
                 <h4 class="ekipisim">Hasan AÇAN</h4>
                 <p class="ekipp">Grafik Tasarımcı</p>

                 <div class="ekip-ikon">
                    <a href="#"><i class="fab fa-facebook social"></i></a>
                    <a href="#"><i class="fab fa-twitter social"></i></a>
                    <a href="https://www.instagram.com/hasan.acn/" target="_blank"><i class="fab fa-instagram social"></i></a>
                    <a href=""><i class="fab fa-linkedin social"></i></a>
                 </div>
            </div>

            <div class="sutun">
                <img src="img\ekip3.jpg" alt="" class="img-fluid oval">
                <h4 class="ekipisim">Hüseyin AÇAN</h4>
                <p class="ekipp">Yazılım Geliştirici</p>

                <div class="ekip-ikon">
                   <a href="#"><i class="fab fa-facebook social"></i></a>
                   <a href="#"><i class="fab fa-twitter social"></i></a>
                   <a href="https://www.instagram.com/hsynacn/" target="_blank"><i class="fab fa-instagram social"></i></a>
                   <a href="https://www.linkedin.com/in/h%C3%BCseyin-a%C3%A7an/" target="_blank"><i class="fab fa-linkedin social"></i></a>
                </div>
           </div>

           <div class="sutun-sol-sag">
            <img src="img\serkan.jpg" alt="" class="img-fluid oval">
            <h4 class="ekipisim">Serkan AKAN</h4>
            <p class="ekipp">Veritabanı Yöneticisi</p>

            <div class="ekip-ikon">
               <a href="#" ><i class="fab fa-facebook social"></i></a>
               <a href="#"><i class="fab fa-twitter social"></i></a>
               <a href="#"><i class="fab fa-instagram social"></i></a>
               <a href="https://www.linkedin.com/in/serkanakan/" target="_blank"><i class="fab fa-linkedin social"></i></a>
            </div>
       </div>

        </div>            
    </section>

    <section id="iletisim">
        <div class="container">
            <h3 id="iletisimh3">İletişim</h3>

            <form action="index.php" method="post">
            <div id="iletisimopak">
                <div id="formgroup">
                    <div id="solform">
                        <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control">
                        <input type="text" name="tel" placeholder="Telefon Numarası" required class="form-control">
                    </div> 
                    <div id="sagform">
                        <input type="email" name="mail" placeholder="E-Mail Adresiniz" required class="form-control">
                        <input type="text" name="konu" placeholder="Konu Başlığı" required class="form-control">
                    </div> 
                    <textarea name="mesaj" cols="30" rows="10" placeholder="Mesajınız" required class="form-control"></textarea>
                    <input type="submit" value="Gönder">

                    

                </div>
                <div id="adres">
                    <h4 id="adresbaslik">Adres:</h4>
                    <p class="adresp">Eğitim mah.</p>
                    <p class="adresp">2. kirazlı sok.</p>
                    <p class="adresp">Bursa/Yıldırım</p>
                    <p class="adresp">Telefon: 0224 000 00 00</p>
                    <p class="adresp">E-Mail:deneme@deneme.com</p>
                </div>
            </div>
        </div>
        </form>
        <footer>
            <div id="copyright">© 2024 ODEMY <br>Hiçbir Hakkı Saklı Değildir.
            </div>
            <div id="soocialfooter">
                <a href="#"><i class="fab fa-facebook social"></i></a>
               <a href="#"><i class="fab fa-twitter social"></i></a>
               <a href="#"><i class="fab fa-instagram social"></i></a>
               <a href="#"><i class="fab fa-linkedin social"></i></a>
            </div>

            <a href="#menu" id="yukarı"><i class="fa-solid fa-arrow-up" id="up"></i></a>

         </footer>
    
    </section>
    
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script src="owl/owl.carousel.min.js"></script>
    <script src="owl/script.js"></script>

   </body> 
</html>

<?php

include 'baglanti.php';

if (isset($_POST['isim']) && isset($_POST['tel']) && isset($_POST['mail']) && isset($_POST['konu']) && isset($_POST['mesaj'])) {
    $adsoyad = $_POST['isim'];
    $telefon = $_POST['tel'];
    $email = $_POST['mail'];
    $konu = $_POST['konu'];
    $mesaj = $_POST['mesaj'];

    $stmt = $conn->prepare("INSERT INTO iletisim (isim, telefon, email, konu, mesaj) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $adsoyad, $telefon, $email, $konu, $mesaj);

    if ($stmt->execute()) {
        echo "<script>alert('Mesajınız başarıyla gönderildi.')</script>";
    } 
    else {
        echo "<script>alert('Hata oluştu.')</script>" . $stmt->error;
    }

    $stmt->close();
}

?>