<?php
require_once 'config.php';
$navbarSubtitle = 'Kaynakça';
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <?php include 'includes/head.php'; ?>
    <title>Kaynakça - Flutter Motion Lab</title>
    <style>
        .ref-stats {
            margin-bottom: 48px;
        }
        
        .ref-stat-card {
            background: rgba(17, 24, 39, 0.6);
            border: 1px solid #1f2937;
            border-radius: 16px;
            padding: 24px;
            text-align: center;
        }
        
        .ref-stat-value {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 8px;
        }
        
        .ref-stat-value.blue { color: #38bdf8; }
        .ref-stat-value.green { color: #22c55e; }
        .ref-stat-value.purple { color: #a855f7; }
        .ref-stat-value.orange { color: #fb923c; }
        
        .ref-stat-label {
            color: #9ca3af;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <?php include 'includes/navbar.php'; ?>

    <section class="references-hero">
        <div class="shell">
            <div class="hero-badge">
                <span class="tag-dot"></span>
                <span>Kullanılan Kaynaklar</span>
            </div>
            <h1><span class="text-gradient">Kaynakça</span></h1>
            <p class="muted">Bu projenin geliştirilmesinde faydalanılan dokümanlar, videolar ve araçlar</p>
        </div>
    </section>

    <section class="py-4">
        <div class="shell">
            <div class="ref-stats">
                <div class="ref-stat-card">
                    <div class="ref-stat-value blue">12</div>
                    <div class="ref-stat-label">Flutter Kaynağı</div>
                </div>
                <div class="ref-stat-card">
                    <div class="ref-stat-value purple">8</div>
                    <div class="ref-stat-label">PHP & Web Kaynağı</div>
                </div>
                <div class="ref-stat-card">
                    <div class="ref-stat-value green">5</div>
                    <div class="ref-stat-label">Tasarım Kaynağı</div>
                </div>
                <div class="ref-stat-card">
                    <div class="ref-stat-value orange">6</div>
                    <div class="ref-stat-label">Araç & Paket</div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-4">
        <div class="shell">
            <div class="ref-section">
                <div class="ref-section-header">
                    <div class="ref-section-icon flutter">💙</div>
                    <div>
                        <div class="ref-section-title">Flutter & Dart Kaynakları</div>
                        <div class="ref-section-subtitle">Mobil uygulama geliştirmede kullanılan kaynaklar</div>
                    </div>
                </div>
                
                <div class="ref-list">
                    <div class="ref-item">
                        <div class="ref-item-header">
                            <div class="ref-item-title">
                                <a href="https://docs.flutter.dev/" target="_blank">Flutter Resmi Dokümantasyonu</a>
                            </div>
                            <span class="ref-item-type ref-type-docs">Dokümantasyon</span>
                        </div>
                        <div class="ref-item-desc">
                            Flutter'ın resmi dokümantasyonu. Widget katalogları, API referansları, 
                            cookbook tarifleri ve başlangıç rehberleri için temel kaynak.
                        </div>
                        <div class="ref-item-meta">
                            <span>🌐 docs.flutter.dev</span>
                            <span>📅 Sürekli güncelleniyor</span>
                        </div>
                    </div>

                    <div class="ref-item">
                        <div class="ref-item-header">
                            <div class="ref-item-title">
                                <a href="https://api.flutter.dev/" target="_blank">Flutter API Reference</a>
                            </div>
                            <span class="ref-item-type ref-type-docs">Dokümantasyon</span>
                        </div>
                        <div class="ref-item-desc">
                            Tüm Flutter sınıfları, metodları ve özellikleri için detaylı API referansı. 
                            AnimationController, CurvedAnimation gibi sınıfların kullanımı için başvuruldu.
                        </div>
                        <div class="ref-item-meta">
                            <span>🌐 api.flutter.dev</span>
                            <span>📖 API Referans</span>
                        </div>
                    </div>

                    <div class="ref-item">
                        <div class="ref-item-header">
                            <div class="ref-item-title">
                                <a href="https://www.youtube.com/c/FlutterDev" target="_blank">Flutter Official YouTube Channel</a>
                            </div>
                            <span class="ref-item-type ref-type-video">Video</span>
                        </div>
                        <div class="ref-item-desc">
                            Flutter'ın resmi YouTube kanalı. Widget of the Week serileri, 
                            animasyon tutorialları ve Flutter Forward etkinlik videoları.
                        </div>
                        <div class="ref-item-meta">
                            <span>📺 YouTube</span>
                            <span>👥 1.5M+ abone</span>
                        </div>
                    </div>

                    <div class="ref-item">
                        <div class="ref-item-header">
                            <div class="ref-item-title">
                                <a href="https://docs.flutter.dev/ui/animations" target="_blank">Flutter Animations Guide</a>
                            </div>
                            <span class="ref-item-type ref-type-docs">Dokümantasyon</span>
                        </div>
                        <div class="ref-item-desc">
                            Flutter animasyonları için kapsamlı rehber. Implicit animations, explicit animations, 
                            hero animations ve staggered animations konularında detaylı açıklamalar.
                        </div>
                        <div class="ref-item-meta">
                            <span>🎭 Animasyon</span>
                            <span>📖 Resmi Rehber</span>
                        </div>
                    </div>

                    <div class="ref-item">
                        <div class="ref-item-header">
                            <div class="ref-item-title">
                                <a href="https://pub.dev/packages/lottie" target="_blank">Lottie for Flutter - pub.dev</a>
                            </div>
                            <span class="ref-item-type ref-type-package">Paket</span>
                        </div>
                        <div class="ref-item-desc">
                            Lottie animasyonlarını Flutter'da kullanmak için resmi paket. 
                            Spotify ekranındaki equalizer animasyonu için kullanıldı.
                        </div>
                        <div class="ref-item-meta">
                            <span>📦 pub.dev</span>
                            <span>⭐ 99% popülerlik</span>
                            <span>🔄 v3.1.0</span>
                        </div>
                    </div>

                    <div class="ref-item">
                        <div class="ref-item-header">
                            <div class="ref-item-title">
                                <a href="https://pub.dev/packages/just_audio" target="_blank">just_audio - pub.dev</a>
                            </div>
                            <span class="ref-item-type ref-type-package">Paket</span>
                        </div>
                        <div class="ref-item-desc">
                            Flutter için feature-rich ses çalma paketi. Playlist yönetimi, 
                            ses kontrolü ve durum takibi için Spotify ekranında kullanıldı.
                        </div>
                        <div class="ref-item-meta">
                            <span>📦 pub.dev</span>
                            <span>⭐ 99% popülerlik</span>
                            <span>🔄 v0.9.36</span>
                        </div>
                    </div>

                    <div class="ref-item">
                        <div class="ref-item-header">
                            <div class="ref-item-title">
                                <a href="https://www.youtube.com/watch?v=IVTjpW3W33s" target="_blank">Flutter Animation Deep Dive - Flutter Europe</a>
                            </div>
                            <span class="ref-item-type ref-type-video">Video</span>
                        </div>
                        <div class="ref-item-desc">
                            Flutter Europe konferansından animasyon derinlemesine inceleme. 
                            AnimationController, Tween ve Curve kavramlarının detaylı açıklaması.
                        </div>
                        <div class="ref-item-meta">
                            <span>📺 YouTube</span>
                            <span>⏱️ 45 dakika</span>
                        </div>
                    </div>

                    <div class="ref-item">
                        <div class="ref-item-header">
                            <div class="ref-item-title">
                                <a href="https://medium.com/flutter" target="_blank">Flutter Medium Blog</a>
                            </div>
                            <span class="ref-item-type ref-type-article">Makale</span>
                        </div>
                        <div class="ref-item-desc">
                            Flutter ekibinin resmi Medium blogu. Best practices, yeni özellikler 
                            ve topluluk hikayelerini içeren zengin makale arşivi.
                        </div>
                        <div class="ref-item-meta">
                            <span>📝 Medium</span>
                            <span>👥 300K+ takipçi</span>
                        </div>
                    </div>

                    <div class="ref-item">
                        <div class="ref-item-header">
                            <div class="ref-item-title">
                                <a href="https://dart.dev/guides" target="_blank">Dart Language Guide</a>
                            </div>
                            <span class="ref-item-type ref-type-docs">Dokümantasyon</span>
                        </div>
                        <div class="ref-item-desc">
                            Dart programlama dili için resmi rehber. Async/await, null safety, 
                            ve collections konularında referans olarak kullanıldı.
                        </div>
                        <div class="ref-item-meta">
                            <span>🌐 dart.dev</span>
                            <span>📖 Dil Rehberi</span>
                        </div>
                    </div>

                    <div class="ref-item">
                        <div class="ref-item-header">
                            <div class="ref-item-title">
                                <a href="https://github.com/Solido/awesome-flutter" target="_blank">Awesome Flutter - GitHub</a>
                            </div>
                            <span class="ref-item-type ref-type-article">Kaynak Listesi</span>
                        </div>
                        <div class="ref-item-desc">
                            Flutter ile ilgili en iyi kaynakları, kütüphaneleri ve araçları 
                            içeren topluluk tarafından oluşturulmuş kapsamlı liste.
                        </div>
                        <div class="ref-item-meta">
                            <span>🐙 GitHub</span>
                            <span>⭐ 50K+ yıldız</span>
                        </div>
                    </div>

                    <div class="ref-item">
                        <div class="ref-item-header">
                            <div class="ref-item-title">
                                <a href="https://www.udemy.com/course/learn-flutter-dart-to-build-ios-android-apps/" target="_blank">Flutter & Dart - The Complete Guide [Udemy]</a>
                            </div>
                            <span class="ref-item-type ref-type-video">Kurs</span>
                        </div>
                        <div class="ref-item-desc">
                            Maximilian Schwarzmüller tarafından hazırlanan kapsamlı Flutter kursu. 
                            Temel kavramlardan ileri seviye konulara kadar geniş içerik.
                        </div>
                        <div class="ref-item-meta">
                            <span>🎓 Udemy</span>
                            <span>⏱️ 42+ saat</span>
                            <span>⭐ 4.6/5</span>
                        </div>
                    </div>

                    <div class="ref-item">
                        <div class="ref-item-header">
                            <div class="ref-item-title">
                                <a href="https://lottiefiles.com/" target="_blank">LottieFiles</a>
                            </div>
                            <span class="ref-item-type ref-type-tool">Araç</span>
                        </div>
                        <div class="ref-item-desc">
                            Ücretsiz Lottie animasyonları kütüphanesi. Equalizer ve diğer 
                            animasyonlar için kaynak olarak kullanıldı.
                        </div>
                        <div class="ref-item-meta">
                            <span>🎨 lottiefiles.com</span>
                            <span>🆓 Ücretsiz animasyonlar</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-4">
        <div class="shell">
            <div class="ref-section">
                <div class="ref-section-header">
                    <div class="ref-section-icon php">🐘</div>
                    <div>
                        <div class="ref-section-title">PHP & Web Geliştirme Kaynakları</div>
                        <div class="ref-section-subtitle">Sunum sitesi geliştirmede kullanılan kaynaklar</div>
                    </div>
                </div>
                
                <div class="ref-list">
                    <div class="ref-item">
                        <div class="ref-item-header">
                            <div class="ref-item-title">
                                <a href="https://www.php.net/docs.php" target="_blank">PHP Resmi Dokümantasyonu</a>
                            </div>
                            <span class="ref-item-type ref-type-docs">Dokümantasyon</span>
                        </div>
                        <div class="ref-item-desc">
                            PHP'nin resmi dokümantasyonu. PDO, sessions, password hashing 
                            ve form işleme konularında temel referans kaynağı.
                        </div>
                        <div class="ref-item-meta">
                            <span>🌐 php.net</span>
                            <span>📖 Resmi Kaynak</span>
                        </div>
                    </div>

                    <div class="ref-item">
                        <div class="ref-item-header">
                            <div class="ref-item-title">
                                <a href="https://developer.mozilla.org/en-US/docs/Web/CSS" target="_blank">MDN Web Docs - CSS</a>
                            </div>
                            <span class="ref-item-type ref-type-docs">Dokümantasyon</span>
                        </div>
                        <div class="ref-item-desc">
                            Mozilla tarafından hazırlanan kapsamlı CSS referansı. Flexbox, Grid, 
                            animasyonlar ve modern CSS özellikleri için başvuru kaynağı.
                        </div>
                        <div class="ref-item-meta">
                            <span>🌐 developer.mozilla.org</span>
                            <span>📖 Web Standartları</span>
                        </div>
                    </div>

                    <div class="ref-item">
                        <div class="ref-item-header">
                            <div class="ref-item-title">
                                <a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/" target="_blank">A Complete Guide to Flexbox - CSS-Tricks</a>
                            </div>
                            <span class="ref-item-type ref-type-article">Makale</span>
                        </div>
                        <div class="ref-item-desc">
                            CSS Flexbox için görsel ve kapsamlı rehber. Navbar, kartlar ve 
                            layout yapılarında flexbox kullanımı için referans.
                        </div>
                        <div class="ref-item-meta">
                            <span>📝 CSS-Tricks</span>
                            <span>🔖 Popüler Rehber</span>
                        </div>
                    </div>

                    <div class="ref-item">
                        <div class="ref-item-header">
                            <div class="ref-item-title">
                                <a href="https://www.w3schools.com/php/php_mysql_intro.asp" target="_blank">PHP MySQL Tutorial - W3Schools</a>
                            </div>
                            <span class="ref-item-type ref-type-docs">Tutorial</span>
                        </div>
                        <div class="ref-item-desc">
                            PHP ile MySQL veritabanı işlemleri. PDO kullanımı, prepared statements 
                            ve güvenli veritabanı sorguları konularında yardımcı kaynak.
                        </div>
                        <div class="ref-item-meta">
                            <span>🌐 w3schools.com</span>
                            <span>📖 Başlangıç Rehberi</span>
                        </div>
                    </div>

                    <div class="ref-item">
                        <div class="ref-item-header">
                            <div class="ref-item-title">
                                <a href="https://fonts.google.com/" target="_blank">Google Fonts</a>
                            </div>
                            <span class="ref-item-type ref-type-tool">Araç</span>
                        </div>
                        <div class="ref-item-desc">
                            Ücretsiz web fontları kütüphanesi. Inter ve JetBrains Mono 
                            fontları bu projede kullanılmıştır.
                        </div>
                        <div class="ref-item-meta">
                            <span>🔤 fonts.google.com</span>
                            <span>🆓 Ücretsiz</span>
                        </div>
                    </div>

                    <div class="ref-item">
                        <div class="ref-item-header">
                            <div class="ref-item-title">
                                <a href="https://owasp.org/www-project-cheat-sheets/" target="_blank">OWASP Cheat Sheet Series</a>
                            </div>
                            <span class="ref-item-type ref-type-docs">Güvenlik</span>
                        </div>
                        <div class="ref-item-desc">
                            Web güvenliği best practices. XSS koruması, SQL injection önleme 
                            ve güvenli session yönetimi konularında referans.
                        </div>
                        <div class="ref-item-meta">
                            <span>🔒 OWASP</span>
                            <span>🛡️ Güvenlik Standartları</span>
                        </div>
                    </div>

                    <div class="ref-item">
                        <div class="ref-item-header">
                            <div class="ref-item-title">
                                <a href="https://www.apachefriends.org/docs/" target="_blank">XAMPP Documentation</a>
                            </div>
                            <span class="ref-item-type ref-type-docs">Dokümantasyon</span>
                        </div>
                        <div class="ref-item-desc">
                            XAMPP kurulum ve yapılandırma rehberi. Yerel geliştirme ortamının 
                            kurulumu için kullanıldı.
                        </div>
                        <div class="ref-item-meta">
                            <span>🌐 apachefriends.org</span>
                            <span>⚙️ Kurulum Rehberi</span>
                        </div>
                    </div>

                    <div class="ref-item">
                        <div class="ref-item-header">
                            <div class="ref-item-title">
                                <a href="https://stackoverflow.com/" target="_blank">Stack Overflow</a>
                            </div>
                            <span class="ref-item-type ref-type-tool">Topluluk</span>
                        </div>
                        <div class="ref-item-desc">
                            Programlama soruları ve cevapları platformu. Karşılaşılan 
                            spesifik problemlerin çözümünde yardımcı kaynak.
                        </div>
                        <div class="ref-item-meta">
                            <span>💬 stackoverflow.com</span>
                            <span>👥 Topluluk Desteği</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-4">
        <div class="shell">
            <div class="ref-section">
                <div class="ref-section-header">
                    <div class="ref-section-icon design">🎨</div>
                    <div>
                        <div class="ref-section-title">Tasarım & UI/UX Kaynakları</div>
                        <div class="ref-section-subtitle">Görsel tasarım ve kullanıcı deneyimi için kaynaklar</div>
                    </div>
                </div>
                
                <div class="ref-list">
                    <div class="ref-item">
                        <div class="ref-item-header">
                            <div class="ref-item-title">
                                <a href="https://dribbble.com/" target="_blank">Dribbble</a>
                            </div>
                            <span class="ref-item-type ref-type-tool">İlham</span>
                        </div>
                        <div class="ref-item-desc">
                            Tasarımcılar için ilham kaynağı. Mobil uygulama UI tasarımları ve 
                            animasyon fikirleri için referans olarak kullanıldı.
                        </div>
                        <div class="ref-item-meta">
                            <span>🎨 dribbble.com</span>
                            <span>✨ UI İlham</span>
                        </div>
                    </div>

                    <div class="ref-item">
                        <div class="ref-item-header">
                            <div class="ref-item-title">
                                <a href="https://www.duolingo.com/" target="_blank">Duolingo App</a>
                            </div>
                            <span class="ref-item-type ref-type-tool">İlham</span>
                        </div>
                        <div class="ref-item-desc">
                            Kutlama animasyonu tasarımı için ilham kaynağı. Başarı ekranı 
                            ve confetti efektleri Duolingo'dan esinlenilmiştir.
                        </div>
                        <div class="ref-item-meta">
                            <span>📱 Mobil Uygulama</span>
                            <span>🎯 Referans Tasarım</span>
                        </div>
                    </div>

                    <div class="ref-item">
                        <div class="ref-item-header">
                            <div class="ref-item-title">
                                <a href="https://www.spotify.com/" target="_blank">Spotify App</a>
                            </div>
                            <span class="ref-item-type ref-type-tool">İlham</span>
                        </div>
                        <div class="ref-item-desc">
                            Now Playing ekranı için ilham kaynağı. Müzik çalar arayüzü, 
                            albüm kapağı sunumu ve kontrol butonları Spotify'dan esinlenilmiştir.
                        </div>
                        <div class="ref-item-meta">
                            <span>📱 Mobil Uygulama</span>
                            <span>🎵 Referans Tasarım</span>
                        </div>
                    </div>

                    <div class="ref-item">
                        <div class="ref-item-header">
                            <div class="ref-item-title">
                                <a href="https://coolors.co/" target="_blank">Coolors - Color Palette Generator</a>
                            </div>
                            <span class="ref-item-type ref-type-tool">Araç</span>
                        </div>
                        <div class="ref-item-desc">
                            Renk paleti oluşturma aracı. Web sitesi ve mobil uygulama için 
                            uyumlu renk kombinasyonları seçiminde kullanıldı.
                        </div>
                        <div class="ref-item-meta">
                            <span>🎨 coolors.co</span>
                            <span>🆓 Ücretsiz</span>
                        </div>
                    </div>

                    <div class="ref-item">
                        <div class="ref-item-header">
                            <div class="ref-item-title">
                                <a href="https://material.io/design" target="_blank">Material Design Guidelines</a>
                            </div>
                            <span class="ref-item-type ref-type-docs">Rehber</span>
                        </div>
                        <div class="ref-item-desc">
                            Google'ın Material Design sistemi. Renk, tipografi, spacing ve 
                            motion prensipleri için temel tasarım rehberi.
                        </div>
                        <div class="ref-item-meta">
                            <span>🌐 material.io</span>
                            <span>📐 Tasarım Sistemi</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-4">
        <div class="shell">
            <div class="ref-section">
                <div class="ref-section-header">
                    <div class="ref-section-icon tools">🛠️</div>
                    <div>
                        <div class="ref-section-title">Geliştirme Araçları</div>
                        <div class="ref-section-subtitle">Proje geliştirmede kullanılan yazılımlar ve araçlar</div>
                    </div>
                </div>
                
                <div class="ref-list">
                    <div class="ref-item">
                        <div class="ref-item-header">
                            <div class="ref-item-title">
                                <a href="https://code.visualstudio.com/" target="_blank">Visual Studio Code</a>
                            </div>
                            <span class="ref-item-type ref-type-tool">IDE</span>
                        </div>
                        <div class="ref-item-desc">
                            Hem PHP/HTML/CSS hem de Flutter geliştirme için kullanılan 
                            kod editörü. Dart ve PHP eklentileri ile birlikte kullanıldı.
                        </div>
                        <div class="ref-item-meta">
                            <span>💻 code.visualstudio.com</span>
                            <span>🆓 Ücretsiz</span>
                        </div>
                    </div>

                    <div class="ref-item">
                        <div class="ref-item-header">
                            <div class="ref-item-title">
                                <a href="https://www.apachefriends.org/" target="_blank">XAMPP</a>
                            </div>
                            <span class="ref-item-type ref-type-tool">Sunucu</span>
                        </div>
                        <div class="ref-item-desc">
                            Apache, MySQL ve PHP içeren yerel geliştirme ortamı. 
                            PHP sunum sitesinin geliştirilmesi ve test edilmesi için kullanıldı.
                        </div>
                        <div class="ref-item-meta">
                            <span>🌐 apachefriends.org</span>
                            <span>🆓 Ücretsiz</span>
                        </div>
                    </div>

                    <div class="ref-item">
                        <div class="ref-item-header">
                            <div class="ref-item-title">
                                <a href="https://git-scm.com/" target="_blank">Git</a>
                            </div>
                            <span class="ref-item-type ref-type-tool">Versiyon Kontrol</span>
                        </div>
                        <div class="ref-item-desc">
                            Dağıtık versiyon kontrol sistemi. Kod değişikliklerinin 
                            takibi ve yönetimi için kullanıldı.
                        </div>
                        <div class="ref-item-meta">
                            <span>🔀 git-scm.com</span>
                            <span>🆓 Açık Kaynak</span>
                        </div>
                    </div>

                    <div class="ref-item">
                        <div class="ref-item-header">
                            <div class="ref-item-title">
                                <a href="https://developer.android.com/studio" target="_blank">Android Studio</a>
                            </div>
                            <span class="ref-item-type ref-type-tool">IDE</span>
                        </div>
                        <div class="ref-item-desc">
                            Android emülatör ve SDK yönetimi için kullanıldı. 
                            Flutter uygulamasının Android'de test edilmesi için gerekli.
                        </div>
                        <div class="ref-item-meta">
                            <span>🤖 developer.android.com</span>
                            <span>🆓 Ücretsiz</span>
                        </div>
                    </div>

                    <div class="ref-item">
                        <div class="ref-item-header">
                            <div class="ref-item-title">
                                <a href="https://www.figma.com/" target="_blank">Figma</a>
                            </div>
                            <span class="ref-item-type ref-type-tool">Tasarım</span>
                        </div>
                        <div class="ref-item-desc">
                            UI/UX tasarım aracı. Ekran tasarımlarının planlanması ve 
                            wireframe oluşturulması için kullanıldı.
                        </div>
                        <div class="ref-item-meta">
                            <span>🎨 figma.com</span>
                            <span>🆓 Ücretsiz (Starter)</span>
                        </div>
                    </div>

                    <div class="ref-item">
                        <div class="ref-item-header">
                            <div class="ref-item-title">
                                <a href="https://www.screentogif.com/" target="_blank">ScreenToGif</a>
                            </div>
                            <span class="ref-item-type ref-type-tool">Kayıt</span>
                        </div>
                        <div class="ref-item-desc">
                            Ekran kaydı ve GIF oluşturma aracı. Uygulama demolarının 
                            GIF formatında kaydedilmesi için kullanıldı.
                        </div>
                        <div class="ref-item-meta">
                            <span>📹 screentogif.com</span>
                            <span>🆓 Açık Kaynak</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="shell">
            <div class="card-glass text-center">
                <h2 class="mb-2">Projeyi İncelemeye Hazır mısın?</h2>
                <p class="muted mb-4">
                    Tüm bu kaynaklarla geliştirilen projeyi detaylı incelemek için sunum paneline git.
                </p>
                <?php if (isLoggedIn()): ?>
                    <a href="project.php" class="btn btn-lg btn-success">
                        📱 Sunum Paneline Git
                    </a>
                <?php else: ?>
                    <div class="hero-actions">
                        <a href="register.php" class="btn btn-lg btn-primary">
                            ✨ Hemen Kayıt Ol
                        </a>
                        <a href="login.php" class="btn btn-lg btn-outline">
                            Giriş Yap
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
