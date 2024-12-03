
# 🎓 **Odemy**  
**Kendi öğrenme platformunuzu yerel ortamınızda oluşturun! 🚀**  
 

---

## 📖 **Hakkında**  
Bu proje, popüler bir öğrenme platformu olan **Odemy'nin klonu**dur.  
Projeyi indirip yerel sunucunuzda çalıştırarak:  
- 👩‍💻 Kod yapısını öğrenebilir,  
- 🔧 Özelleştirmeler yapabilir ve  
- 💡 PHP & MySQL deneyiminizi geliştirebilirsiniz!  

---

## 🚀 **Kurulum Rehberi**  
### 💡 *"Kurulum hiç bu kadar kolay olmamıştı!"*  

#### **Hızlı SQL Çözümü:**  
Manuel işlem yapmaktan hoşlanmıyorsanız, aşağıdaki kodları direkt çalıştırabilirsiniz:  

```sql
CREATE DATABASE IF NOT EXISTS mysite;

USE mysite;

CREATE TABLE IF NOT EXISTS iletisim (
    id INT AUTO_INCREMENT PRIMARY KEY,
    isim VARCHAR(100) NOT NULL,
    telefon VARCHAR(15),
    email VARCHAR(255),
    konu VARCHAR(100),
    mesaj TEXT
);
```  

## 🎨 **Ekran Görüntüleri**  
### 1️⃣   **XAMPP Ayarlarını Yapın**
- Proje klasöründeki **mysite.sql** dosyasını bulun.  
- **XAMPP** veya tercih ettiğiniz başka bir yerel sunucu uygulamasını çalıştırın.  
- **Apache** ve **MySQL** modüllerini başlatın. 
 ![1](https://github.com/user-attachments/assets/86c14703-abdb-4406-b214-59443cdf7800)



---

### 2️⃣ **Veritabanını Oluşturun**  

- Tarayıcınızdan [http://localhost/phpmyadmin](http://localhost/phpmyadmin) adresine gidin.Veya xampp panelinden admin butonuna basın
-![2](https://github.com/user-attachments/assets/e90f86d1-d5ba-4095-bc97-78e10e22461b)


---

### 3️⃣ **Veritabanını İçe Aktarın**  
**PHPMyAdmin** üzerinde şu adımları izleyin:  
1. **İçe Aktar** sekmesine tıklayın.  
2. **mysite.sql** dosyasını seçin ve **Git** butonuna basarak işlemi tamamlayın. 
3.![3](https://github.com/user-attachments/assets/996cb092-6be2-4a4a-b1bb-2ab3380cfff6)
4.![4](https://github.com/user-attachments/assets/1388d655-784d-4805-98de-e91daef84735)





> 🛠️ **Not:** Veritabanı, iletişim formu gibi basit bir yapı kullanıyor. Geliştirmek tamamen sizin elinizde! 💪  


---

### 4️⃣ **Proje Dosyalarını Kopyalayın**  
Tüm proje dosyalarını **htdocs** klasörüne taşıyın:  
📁 `C:\xampp\htdocs\odemy`  

> 🔥 **Artık her şey hazır!** Tarayıcınıza gidin ve [http://localhost/odemy_clone](http://localhost/odemy) adresini ziyaret edin. 🎉  

---

## 🛠️ **Önemli Notlar**  
- **PHPMyAdmin** kullanıyorsanız mevcut yapılandırma uyumludur.  
- Farklı bir veritabanı sistemi kullanıyorsanız bağlantı ayarlarını özelleştirmeyi unutmayın.  
- Proje dosyalarının tamamını **htdocs** klasörüne taşımayı ihmal etmeyin!  

---

## 🌟 **Neden Bu Proje?**  
- 🚀 **PHP & MySQL öğrenmek isteyenler** için birebir!  
- 🔧 Kendi projelerinize entegre edebileceğiniz bir temel sağlar.  
- 🛡️ "Sıfırdan öğreniyorum" diyenler için harika bir başlangıç.  

---

## 🧩 **Katkıda Bulunun**  
- Sorularınız veya önerileriniz mi var? **Issues** sekmesinden bildirin!  
- Projeye katkıda bulunmak için bir **Pull Request** gönderin.  

---

## 🎉 **Teşekkürler!**  
*"Kendi Odemy klonunuzu oluşturduğunuz için teşekkür ederiz. İyi çalışmalar dileriz!"*  
