# 🎬 Flutter Motion Lab

<div align="center">

![Flutter](https://img.shields.io/badge/Flutter-02569B?style=for-the-badge&logo=flutter&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)

**Kompleks UI & Animasyon Showcase Sunum Platformu**

*Mobil Uygulama Geliştirme Dersi - 6. Konu Sunumu*

</div>

---

## 📖 Proje Hakkında

Flutter Motion Lab, Flutter ile geliştirilen bir mobil uygulamanın showcase'ini sunan PHP tabanlı bir web platformudur. Proje, Kırklareli Üniversitesi Bilgisayar Programcılığı bölümü Mobil Uygulama Geliştirme dersi kapsamında **6. Konu: Kompleks UI & Animasyonlar** sunumu için hazırlanmıştır.

### 🎯 Projenin Amacı

- Flutter'da custom animasyon tekniklerini sergilemek
- Lottie animasyonları ve ses entegrasyonunu göstermek
- Gerçek uygulama kalitesinde UI/UX deneyimi sunmak
- Geliştirme sürecini detaylı olarak dokümante etmek

---

## ✨ Özellikler

### 🔐 Kullanıcı Sistemi
- Güvenli kayıt ve giriş sistemi
- Şifre hashleme (password_hash)
- Session tabanlı oturum yönetimi
- Korumalı sayfa erişimi

### 📱 Sunum Paneli
- **Genel Bakış:** Projenin özeti ve ekran önizlemeleri
- **Flutter Detayları:** Kod yapısı, widget mimarisi, animasyon mantığı
- **Geliştirme Süreci:** Adım adım geliştirme aşamaları
- **Kaynakça:** Kullanılan tüm referanslar

### 🎨 Modern Tasarım
- Glassmorphism efektleri
- Gradient renkler ve animasyonlar
- Responsive tasarım
- Dark mode tema

---

## 🛠️ Kullanılan Teknolojiler

| Teknoloji | Kullanım Amacı |
|-----------|----------------|
| **PHP 8.x** | Backend ve sunucu tarafı işlemler |
| **MySQL** | Veritabanı yönetimi (kullanıcı verileri) |
| **PDO** | Güvenli veritabanı bağlantısı |
| **HTML5** | Sayfa yapısı |
| **CSS3** | Stil ve animasyonlar |
| **Google Fonts** | Inter & JetBrains Mono fontları |

### 📁 Dosya Yapısı

```
htdocs/
├── assets/
│   └── style.css          # Tüm CSS stilleri (tek dosya)
├── images/
│   ├── homepage.gif       # Ana ekran GIF
│   ├── duolingo.gif       # Duolingo ekranı GIF
│   ├── spotify.gif        # Spotify ekranı GIF
│   └── profile.png        # Profil fotoğrafı
├── includes/
│   ├── head.php           # Ortak head içeriği
│   ├── navbar.php         # Dinamik navigasyon
│   └── footer.php         # Ortak footer
├── config.php             # Veritabanı ve ayarlar
├── index.php              # Ana sayfa
├── login.php              # Giriş sayfası
├── register.php           # Kayıt sayfası
├── logout.php             # Çıkış işlemi
├── project.php            # Genel bakış sayfası
├── project_flutter.php    # Flutter detayları
├── project_process.php    # Geliştirme süreci
├── about.php              # Yapımcı hakkında
├── references.php         # Kaynakça
└── README.md              # Bu dosya
```

---

## 🚀 Kurulum

### Gereksinimler

- [XAMPP](https://www.apachefriends.org/) (Apache + MySQL + PHP)
- PHP 7.4 veya üzeri
- MySQL 5.7 veya üzeri
- Modern web tarayıcı

### Adım 1: Dosyaları Kopyalayın

```bash
# Proje klasörünü XAMPP htdocs dizinine kopyalayın
C:\xampp\htdocs\
```

### Adım 2: XAMPP'ı Başlatın

1. XAMPP Control Panel'i açın
2. **Apache** servisini başlatın
3. **MySQL** servisini başlatın

### Adım 3: Veritabanını Oluşturun

phpMyAdmin'e gidin: `http://localhost/phpmyadmin`

Aşağıdaki SQL kodunu çalıştırın:

```sql
-- Veritabanını oluştur
CREATE DATABASE IF NOT EXISTS motionlab 
CHARACTER SET utf8mb4 
COLLATE utf8mb4_unicode_ci;

-- Veritabanını seç
USE motionlab;

-- Kullanıcılar tablosunu oluştur
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- (Opsiyonel) Test kullanıcısı ekle
-- Şifre: 123456
INSERT INTO users (name, email, password_hash) VALUES 
('Mustafa Arda Düşova', 'arda@motionlab.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi');
```

### Adım 4: Projeyi Açın

Tarayıcınızda şu adresi açın:

```
http://localhost/
```

---

## 📸 Ekran Görüntüleri

### Ana Sayfa
Projenin genel tanıtımı, özellikler ve uygulama önizlemeleri.

### Sunum Paneli
Flutter uygulamasının detaylı teknik analizi.

### Giriş/Kayıt Sayfaları
Modern tasarımlı kimlik doğrulama sayfaları.

---

## 🔧 Yapılandırma

### Veritabanı Ayarları

`config.php` dosyasındaki değerleri kendi ortamınıza göre düzenleyin:

```php
$host = 'localhost';     // Veritabanı sunucusu
$db   = 'motionlab';     // Veritabanı adı
$user = 'root';          // MySQL kullanıcı adı
$pass = '';              // MySQL şifresi (XAMPP'de varsayılan olarak şifresiz gelmektedir.)
```

---

## 🏗️ Mimari Kararlar

### Neden Include Sistemi?
- **Tekrar kullanılabilirlik:** Navbar ve footer tek yerden yönetilir
- **Bakım kolaylığı:** Değişiklikler tüm sayfalara otomatik yansır
- **Kod tekrarını önleme:** DRY (Don't Repeat Yourself) prensibi

### Neden Tek CSS Dosyası?
- **Performans:** Tek HTTP isteği ile tüm stiller yüklenir
- **Cache:** Tarayıcı CSS'i önbelleğe alır
- **Yönetim:** Tüm stiller merkezi bir yerde

### Neden PDO?
- **Güvenlik:** Prepared statements ile SQL injection koruması
- **Esneklik:** Farklı veritabanlarına geçiş kolaylığı
- **Hata yönetimi:** Exception tabanlı hata yakalama

---

## 👨‍💻 Geliştirici

<div align="center">

**Mustafa Arda Düşova**

Kırklareli Üniversitesi - Bilgisayar Programcılığı 2. Sınıf

Öğrenci No: 1247008066

[![GitHub](https://img.shields.io/badge/GitHub-dusova-181717?style=flat-square&logo=github)](https://github.com/dusova)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-mdusova-0A66C2?style=flat-square&logo=linkedin)](https://linkedin.com/in/mdusova)
[![Email](https://img.shields.io/badge/Email-arda@codewithmad.com-EA4335?style=flat-square&logo=gmail)](mailto:arda@codewithmad.com)

</div>

---

## 📄 Lisans

Bu proje eğitim amaçlı geliştirilmiştir. Kırklareli Üniversitesi Mobil Uygulama Geliştirme dersi kapsamında 6. konu sunumu olarak hazırlanmıştır.

---

## 🙏 Teşekkürler

- Flutter ve Dart ekibine
- PHP ve MySQL topluluğuna
- Kullanılan tüm açık kaynak projelere
- Ders hocamıza rehberliği için

---

<div align="center">

**Flutter Motion Lab** © 2025 - Mustafa Arda Düşova

*Kompleks UI & Animasyon Showcase*

</div>

