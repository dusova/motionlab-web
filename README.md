# 🎬 Flutter Motion Lab

<div align="center">

![Flutter](https://img.shields.io/badge/Flutter-02569B?style=for-the-badge&logo=flutter&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)

**Kompleks UI & Animasyon Showcase Sunum Platformu**

*Mobil Uygulama Geliştirme dersi kapsamında geliştirildi.*

</div>

---

## 📖 Proje Hakkında

Flutter Motion Lab, Flutter ile geliştirilen bir mobil uygulamanın showcase'ini sunan PHP tabanlı bir web platformudur. Proje, Kırklareli Üniversitesi Bilgisayar Programcılığı programındaki Mobil Uygulama Geliştirme dersi kapsamında **Kompleks UI & Animasyonlar** konusu için hazırlanmıştır.

### 🎯 Projenin Amacı

- Flutter'da custom animasyon tekniklerini sergilemek
- Lottie animasyonları ve ses entegrasyonunu göstermek
- Gerçek uygulama kalitesinde UI/UX deneyimi sunmak
- Geliştirme sürecini detaylı olarak dokümante etmek

---

## ✨ Özellikler

### 🔐 Kullanıcı Sistemi
- Kayıt ve giriş sistemi
- `password_hash` tabanlı parola saklama
- Session tabanlı oturum yönetimi
- Korumalı sayfa erişimi

### 📱 Sunum Paneli
- **Genel Bakış:** Projenin özeti ve ekran önizlemeleri
- **Flutter Detayları:** Kod yapısı, widget mimarisi, animasyon mantığı
- **Geliştirme Süreci:** Adım adım geliştirme aşamaları
- **Kaynakça:** Kullanılan referanslar

### 🎨 Arayüz
- Glassmorphism efektleri
- Gradient ve animasyonlar
- Responsive tasarım
- Dark mode tema

---

## 🛠️ Kullanılan Teknolojiler

| Teknoloji | Kullanım Amacı |
|-----------|----------------|
| **PHP 8.x** | Backend ve sunucu tarafı işlemler |
| **MySQL** | Kullanıcı verileri |
| **PDO** | Veritabanı erişimi |
| **HTML5** | Sayfa yapısı |
| **CSS3** | Stil ve animasyonlar |
| **Google Fonts** | Inter & JetBrains Mono |

### 📁 Dosya Yapısı

```text
htdocs/
├── assets/
│   └── style.css
├── images/
├── includes/
│   ├── head.php
│   ├── navbar.php
│   └── footer.php
├── config.php
├── index.php
├── login.php
├── register.php
├── logout.php
├── project.php
├── project_flutter.php
├── project_process.php
├── about.php
├── references.php
└── README.md
```

---

## 🚀 Kurulum

### Gereksinimler

- PHP 7.4+
- MySQL 5.7+
- Apache/Nginx veya XAMPP benzeri yerel geliştirme ortamı
- Modern web tarayıcı

### 1. Projeyi web kök dizinine yerleştirin

Örnek XAMPP kullanımı:

```text
C:\xampp\htdocs\motionlab
```

### 2. Apache ve MySQL servislerini başlatın

### 3. Veritabanını oluşturun

```sql
CREATE DATABASE IF NOT EXISTS motionlab
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE motionlab;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```

Yeni kullanıcı oluşturmak için uygulamadaki kayıt ekranını kullanın; repoya sabit test parolası eklenmez.

### 4. Veritabanı ayarlarını yapılandırın

`config.php` içindeki bağlantı değerlerini kendi ortamınıza göre düzenleyin.

### 5. Uygulamayı açın

```text
http://localhost/motionlab/
```

---

## 🏗️ Mimari Notlar

- Tekrarlanan sayfa parçaları `includes/` altında tutulur.
- PDO kullanımı veritabanı işlemlerini merkezi ve taşınabilir tutar.
- Sunum platformu, web tarafındaki proje anlatımını Flutter uygulamasından ayrı bir katmanda ele alır.

---

## 👨‍💻 Geliştirici

**Mustafa Arda Düşova**  
Kırklareli Üniversitesi — Bilgisayar Programcılığı mezunu

[GitHub](https://github.com/dusova) · [LinkedIn](https://linkedin.com/in/mdusova) · [Email](mailto:arda@codewithmad.com)

---

## 📄 Lisans

Bu proje eğitim amaçlı geliştirilmiştir. Repository içinde ayrıca tanımlanmış lisans koşulları geçerlidir.
