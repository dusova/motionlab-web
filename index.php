<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <?php include 'includes/head.php'; ?>
    <title>Flutter Motion Lab - Kompleks UI & Animasyonlar</title>
</head>
<body>
    <?php include 'includes/navbar.php'; ?>

    <section class="hero">
        <div class="shell">
            <div class="hero-badge">
                <span class="tag-dot"></span>
                <span>6. Konu Sunumu – Kompleks UI & Animasyonlar</span>
            </div>
            <h1 class="hero-title">
                <span class="text-gradient">Flutter Motion Lab</span>
            </h1>
            <p class="hero-subtitle">
                Flutter ile geliştirilen premium animasyon showcase uygulaması. 
                Gerçek uygulama kalitesinde Duolingo tarzı kutlama efektleri, 
                Spotify benzeri müzik oynatıcı ve daha fazlası.
            </p>
            <div class="hero-actions">
                <?php if (isLoggedIn()): ?>
                    <a href="project.php" class="btn btn-lg btn-success">
                        📱 Sunum Paneline Git
                    </a>
                <?php else: ?>
                    <a href="login.php" class="btn btn-lg btn-primary">
                        🚀 Giriş Yap
                    </a>
                    <a href="register.php" class="btn btn-lg btn-outline">
                        ✨ Kayıt Ol
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="py-4">
        <div class="shell">
            <div class="card-glass">
                <div class="stats-row">
                    <div class="stat-item">
                        <div class="stat-value text-gradient">3</div>
                        <div class="stat-label">Ekran Tasarımı</div>
                    </div>
                    <div class="stat-divider"></div>
                    <div class="stat-item">
                        <div class="stat-value text-gradient">2</div>
                        <div class="stat-label">Animasyon Türü</div>
                    </div>
                    <div class="stat-divider"></div>
                    <div class="stat-item">
                        <div class="stat-value text-gradient">2</div>
                        <div class="stat-label">Harici Paket</div>
                    </div>
                    <div class="stat-divider"></div>
                    <div class="stat-item">
                        <div class="stat-value text-gradient">∞</div>
                        <div class="stat-label">Deneyim</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="shell">
            <div class="text-center mb-4">
                <div class="card-title">Uygulama Önizlemesi</div>
                <h2 class="mb-2">Üç Ekran, Tek Hikâye</h2>
                <p class="muted">Her ekran, farklı bir animasyon tekniğini ve kullanım senaryosunu temsil eder.</p>
            </div>
            
            <div class="phone-row">
                <div class="phone-frame animate-fadeInUp delay-1">
                    <div class="phone-notch"></div>
                    <div class="phone-screen">
                        <img src="images/homepage.gif" alt="Ana Ekran" onerror="this.parentElement.innerHTML='<div class=\'phone-screen-placeholder\'><svg viewBox=\'0 0 24 24\' fill=\'none\' stroke=\'currentColor\' stroke-width=\'1.5\'><rect x=\'3\' y=\'3\' width=\'18\' height=\'18\' rx=\'2\'/><circle cx=\'8.5\' cy=\'8.5\' r=\'1.5\'/><path d=\'m21 15-5-5L5 21\'/></svg>Ana Ekran<br><small>homepage.gif</small></div>'">
                    </div>
                    <div class="phone-badge">Ekran 1</div>
                    <div class="phone-label">
                        <div class="phone-label-title">Ana Ekran</div>
                        <div class="phone-label-sub">Demo kartları galerisi</div>
                    </div>
                </div>

                <div class="phone-frame animate-fadeInUp delay-2">
                    <div class="phone-notch"></div>
                    <div class="phone-screen">
                        <img src="images/duolingo.gif" alt="Duolingo Kutlama" onerror="this.parentElement.innerHTML='<div class=\'phone-screen-placeholder\'><svg viewBox=\'0 0 24 24\' fill=\'none\' stroke=\'currentColor\' stroke-width=\'1.5\'><path d=\'M12 15l-2 5l9-11h-6l2-5l-9 11z\'/></svg>Duolingo<br><small>duolingo.gif</small></div>'">
                    </div>
                    <div class="phone-badge">Ekran 2</div>
                    <div class="phone-label">
                        <div class="phone-label-title">Duolingo Kutlama</div>
                        <div class="phone-label-sub">Ölçek + dönüş animasyonları</div>
                    </div>
                </div>

                <div class="phone-frame animate-fadeInUp delay-3">
                    <div class="phone-notch"></div>
                    <div class="phone-screen">
                        <img src="images/spotify.gif" alt="Spotify Now Playing" onerror="this.parentElement.innerHTML='<div class=\'phone-screen-placeholder\'><svg viewBox=\'0 0 24 24\' fill=\'none\' stroke=\'currentColor\' stroke-width=\'1.5\'><circle cx=\'12\' cy=\'12\' r=\'10\'/><polygon points=\'10,8 16,12 10,16\'/></svg>Spotify<br><small>spotify.gif</small></div>'">
                    </div>
                    <div class="phone-badge">Ekran 3</div>
                    <div class="phone-label">
                        <div class="phone-label-title">Spotify Now Playing</div>
                        <div class="phone-label-sub">Lottie + ses entegrasyonu</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="shell">
            <div class="text-center mb-4">
                <div class="card-title">Öne Çıkan Özellikler</div>
                <h2 class="mb-2">Neden Bu Proje?</h2>
                <p class="muted">Sadece animasyon değil, gerçek bir ürün deneyimi.</p>
            </div>

            <div class="feature-grid">
                <div class="feature-item card-hover">
                    <div class="feature-icon feature-icon-blue">🎭</div>
                    <h3 class="feature-title">Custom Animasyonlar</h3>
                    <p class="feature-desc">
                        AnimationController, CurvedAnimation ve Transform widget'ları ile 
                        sıfırdan yazılmış, hazır paket kullanılmayan animasyonlar.
                    </p>
                </div>

                <div class="feature-item card-hover">
                    <div class="feature-icon feature-icon-green">🎵</div>
                    <h3 class="feature-title">Ses Entegrasyonu</h3>
                    <p class="feature-desc">
                        just_audio paketi ile lokal müzik dosyalarından playlist oluşturma, 
                        play/pause kontrolü ve süre takibi.
                    </p>
                </div>

                <div class="feature-item card-hover">
                    <div class="feature-icon feature-icon-purple">✨</div>
                    <h3 class="feature-title">Lottie Animasyonları</h3>
                    <p class="feature-desc">
                        Spotify ekranındaki equalizer animasyonu için Lottie kullanımı. 
                        Ses durumuna göre animasyon kontrolü.
                    </p>
                </div>

                <div class="feature-item card-hover">
                    <div class="feature-icon feature-icon-orange">🏗️</div>
                    <h3 class="feature-title">Temiz Mimari</h3>
                    <p class="feature-desc">
                        Ayrıştırılmış dosya yapısı: tema, sayfalar, widget'lar ve data 
                        modelleri farklı klasörlerde organize edilmiş.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="shell">
            <div class="card-elevated">
                <div class="text-center mb-3">
                    <div class="card-title">Kullanılan Teknolojiler</div>
                    <h2>Tech Stack</h2>
                </div>
                
                <div class="tech-stack justify-center">
                    <div class="tech-item">
                        <span>💙</span> Flutter 3.x
                    </div>
                    <div class="tech-item">
                        <span>🎯</span> Dart
                    </div>
                    <div class="tech-item">
                        <span>🎬</span> AnimationController
                    </div>
                    <div class="tech-item">
                        <span>✨</span> Lottie
                    </div>
                    <div class="tech-item">
                        <span>🎵</span> just_audio
                    </div>
                    <div class="tech-item">
                        <span>🎨</span> Material 3
                    </div>
                    <div class="tech-item">
                        <span>📱</span> Android
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="shell">
            <div class="d-flex gap-3 flex-wrap">
                <div class="card-glass" style="flex: 1; min-width: 300px;">
                    <div class="card-title">📎 Projenin Amacı</div>
                    <p class="mb-2">
                        Bu projenin amacı, Flutter ile <strong>"gerçek uygulama kalitesinde"</strong> 
                        görünen animasyonlar üretmek ve bu animasyonları tek ekranlık örnekler yerine, 
                        <strong>mini bir ürün</strong> üzerinden göstermektir.
                    </p>
                    <ul class="check-list">
                        <li>Ana ekran kart listesi tasarımı</li>
                        <li>Motivasyon/kutlama ekranı (Duolingo tarzı)</li>
                        <li>Müzik oynatıcı ekranı (Spotify tarzı)</li>
                        <li>Tutarlı ve premium görünüm</li>
                    </ul>
                </div>

                <div class="card-glass" style="flex: 1; min-width: 300px;">
                    <div class="card-title">❓ Çözmeye Çalıştığı Problem</div>
                    <p class="mb-2 muted">
                        Animasyon dersleri genelde küçük ve kopuk örneklerle anlatılır. 
                        Bu proje şu sorulara cevap veriyor:
                    </p>
                    <ul class="bullet-list">
                        <li>"Gerçek bir uygulamada bu animasyonları nasıl kullanırdım?"</li>
                        <li>"Görsel kaliteyi bozmadan animasyon eklemek mümkün mü?"</li>
                        <li>"Ses, animasyon ve UI'ı tek ekranda nasıl birleştiririm?"</li>
                        <li>"Portfolio'da gösterebileceğim bir şey nasıl yaparım?"</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="shell">
            <div class="card-glass text-center">
                <h2 class="mb-2">Projeyi İncelemeye Hazır mısın?</h2>
                <p class="muted mb-4">
                    Sunum paneline giriş yaparak Flutter uygulamasının teknik detaylarını, 
                    kod yapısını ve geliştirme sürecini inceleyebilirsin.
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
                            Zaten hesabım var
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
