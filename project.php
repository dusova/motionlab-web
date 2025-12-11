<?php
require_once 'config.php';
requireLogin();

$currentPage = 'project';
$navbarSubtitle = 'Sunum Paneli – Genel Bakış';
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <?php include 'includes/head.php'; ?>
    <title>Genel Bakış - Flutter Motion Lab</title>
</head>
<body>
    <?php include 'includes/navbar.php'; ?>

    <main class="py-5">
        <div class="shell">
            <section class="mb-5">
                <div class="card-glass">
                    <div class="d-flex flex-wrap gap-3 justify-between align-center">
                        <div style="flex: 1; min-width: 300px;">
                            <div class="tag mb-3">
                                <span class="tag-dot"></span>
                                <span>Aktif Proje</span>
                            </div>
                            <h1 style="font-size: 1.75rem; margin-bottom: 12px;">
                                Flutter Motion Lab
                            </h1>
                            <p class="muted mb-3">
                                <strong>Gerçek uygulama kalitesinde</strong> animasyon laboratuvarı. 
                                Üç ana ekran üzerinden kompleks UI, animasyon teknikleri ve 
                                medya entegrasyonunu gösteren showcase uygulaması.
                            </p>
                            <div class="d-flex gap-2 flex-wrap">
                                <a href="project_flutter.php" class="btn btn-primary">
                                    📱 Teknik Detaylar
                                </a>
                                <a href="project_process.php" class="btn btn-outline">
                                    🛠️ Geliştirme Süreci
                                </a>
                            </div>
                        </div>
                        <div style="text-align: right; min-width: 200px;">
                            <div class="muted" style="font-size: 0.75rem;">Platform</div>
                            <div style="font-weight: 600;">Flutter (Android/iOS)</div>
                            <div class="muted mt-2" style="font-size: 0.75rem;">Konu</div>
                            <div style="font-weight: 600;">6. Konu - Kompleks UI</div>
                            <div class="muted mt-2" style="font-size: 0.75rem;">Durum</div>
                            <div class="badge badge-success">Tamamlandı</div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <div class="card-elevated mb-3">
                    <div class="d-flex flex-wrap justify-between align-center gap-3 mb-4">
                        <div>
                            <div class="card-title">Uygulama Ekranları</div>
                            <p class="muted" style="margin: 0;">
                                Flutter projesinin üç ana ekranı. Her biri farklı animasyon tekniklerini sergiler.
                            </p>
                        </div>
                        <div class="tech-stack">
                            <div class="tech-item">🎬 AnimatedBuilder</div>
                            <div class="tech-item">✨ Lottie</div>
                            <div class="tech-item">🎵 just_audio</div>
                        </div>
                    </div>

                    <div class="phone-row">
                        <div class="phone-frame">
                            <div class="phone-notch"></div>
                            <div class="phone-screen">
                                <img src="images/homepage.gif" alt="Ana Ekran" 
                                     onerror="this.parentElement.innerHTML='<div class=\'phone-screen-placeholder\'><svg viewBox=\'0 0 24 24\' fill=\'none\' stroke=\'currentColor\' stroke-width=\'1.5\'><rect x=\'3\' y=\'3\' width=\'18\' height=\'18\' rx=\'2\'/><circle cx=\'8.5\' cy=\'8.5\' r=\'1.5\'/><path d=\'m21 15-5-5L5 21\'/></svg>Ana Ekran<br><small>homepage.gif</small></div>'">
                            </div>
                            <div class="phone-badge">Ekran 1</div>
                            <div class="phone-label">
                                <div class="phone-label-title">Ana Ekran – Motion Lab</div>
                                <div class="phone-label-sub">Animasyon demo kartları listesi</div>
                            </div>
                        </div>

                        <div class="phone-frame">
                            <div class="phone-notch"></div>
                            <div class="phone-screen">
                                <img src="images/duolingo.gif" alt="Duolingo" 
                                     onerror="this.parentElement.innerHTML='<div class=\'phone-screen-placeholder\'><svg viewBox=\'0 0 24 24\' fill=\'none\' stroke=\'currentColor\' stroke-width=\'1.5\'><path d=\'M12 15l-2 5l9-11h-6l2-5l-9 11z\'/></svg>Duolingo<br><small>duolingo.gif</small></div>'">
                            </div>
                            <div class="phone-badge">Ekran 2</div>
                            <div class="phone-label">
                                <div class="phone-label-title">Duolingo Kutlama</div>
                                <div class="phone-label-sub">Scale + rotate + konfeti efektleri</div>
                            </div>
                        </div>

                        <div class="phone-frame">
                            <div class="phone-notch"></div>
                            <div class="phone-screen">
                                <img src="images/spotify.gif" alt="Spotify" 
                                     onerror="this.parentElement.innerHTML='<div class=\'phone-screen-placeholder\'><svg viewBox=\'0 0 24 24\' fill=\'none\' stroke=\'currentColor\' stroke-width=\'1.5\'><circle cx=\'12\' cy=\'12\' r=\'10\'/><polygon points=\'10,8 16,12 10,16\'/></svg>Spotify<br><small>spotify.gif</small></div>'">
                            </div>
                            <div class="phone-badge">Ekran 3</div>
                            <div class="phone-label">
                                <div class="phone-label-title">Spotify Now Playing</div>
                                <div class="phone-label-sub">Lottie equalizer + ses oynatma</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <div class="d-flex gap-3 flex-wrap">
                    <div class="card-elevated card-hover" style="flex: 1; min-width: 300px;">
                        <div class="card-title">🎯 Projenin Amacı</div>
                        <p class="mb-3">
                            Flutter Motion Lab, animasyon tekniklerini <strong>izole örnekler yerine 
                            gerçek bir uygulama bağlamında</strong> göstermek için tasarlandı.
                        </p>
                        <ul class="check-list">
                            <li>Klasik "buton döndürme" demolarından farklı yaklaşım</li>
                            <li>Kullanıcıya gerçek uygulama hissi veren tasarım</li>
                            <li>Hem tasarım hem animasyon hem de akış bir arada</li>
                            <li>Portfolio'da gösterilebilir kalite</li>
                        </ul>
                    </div>

                    <div class="card-elevated card-hover" style="flex: 1; min-width: 300px;">
                        <div class="card-title">❓ Çözmeye Çalıştığı Problem</div>
                        <p class="mb-3 muted">
                            Animasyon dersleri genelde küçük, bağlamsız örneklerle anlatılır. 
                            Bu proje şu sorulara cevap veriyor:
                        </p>
                        <ul class="bullet-list">
                            <li>Gerçek uygulamada animasyonlar nasıl kullanılır?</li>
                            <li>Görsel kalite korunarak animasyon eklenebilir mi?</li>
                            <li>Ses + animasyon + UI nasıl birleştirilir?</li>
                            <li>AnimationController'lar nasıl yönetilir?</li>
                            <li>Memory leak olmadan dispose nasıl yapılır?</li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <div class="card-elevated">
                    <div class="card-title mb-4">📱 Üç Ekran Ne Anlatıyor?</div>
                    
                    <div class="feature-grid">
                        <div class="feature-item">
                            <div class="feature-icon feature-icon-blue">🏠</div>
                            <h3 class="feature-title">Ana Ekran (HomePage)</h3>
                            <p class="feature-desc mb-3">
                                Uygulamanın giriş noktası. Kullanıcı burada tüm animasyon demolarını 
                                kartlar halinde görür. Her kart, ilgili animasyonun adını, kısa 
                                açıklamasını ve teknik etiketlerini taşır.
                            </p>
                            <ul class="bullet-list" style="font-size: 0.85rem;">
                                <li>CustomScrollView + SliverList yapısı</li>
                                <li>Staggered animasyonlu kart girişleri</li>
                                <li>HapticFeedback ile dokunsal geri bildirim</li>
                                <li>Smooth page transitions</li>
                            </ul>
                        </div>

                        <div class="feature-item">
                            <div class="feature-icon feature-icon-green">🏆</div>
                            <h3 class="feature-title">Duolingo Kutlama</h3>
                            <p class="feature-desc mb-3">
                                Kullanıcı bir hedefe ulaştığında açılan motivasyon ekranı. 
                                Kartın esneyerek gelmesi, hafif sallanması ve konfeti efektleri 
                                Duolingo'nun kutlama atmosferini andırır.
                            </p>
                            <ul class="bullet-list" style="font-size: 0.85rem;">
                                <li>AnimationController + TickerProviderStateMixin</li>
                                <li>Curves.elasticOut ile esneme efekti</li>
                                <li>Transform.scale + Transform.rotate birleşimi</li>
                                <li>Konfeti partikülleri (custom widget)</li>
                            </ul>
                        </div>

                        <div class="feature-item">
                            <div class="feature-icon feature-icon-purple">🎵</div>
                            <h3 class="feature-title">Spotify Now Playing</h3>
                            <p class="feature-desc mb-3">
                                Gerçek bir müzik uygulaması hissi veren ekran. Ses akışı, 
                                Lottie equalizer ve pulse efektli arka plan birleşerek 
                                "canlı" bir Now Playing deneyimi üretir.
                            </p>
                            <ul class="bullet-list" style="font-size: 0.85rem;">
                                <li>just_audio ile gerçek ses oynatma</li>
                                <li>Stream-based duration/position takibi</li>
                                <li>Lottie animasyonu ses durumuna bağlı</li>
                                <li>Slider ile seek kontrolü</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <div class="card-glass">
                    <div class="card-title text-center mb-4">📊 Proje Metrikleri</div>
                    <div class="stats-row">
                        <div class="stat-item">
                            <div class="stat-value" style="color: #60a5fa;">3</div>
                            <div class="stat-label">Sayfa/Ekran</div>
                        </div>
                        <div class="stat-divider"></div>
                        <div class="stat-item">
                            <div class="stat-value" style="color: #4ade80;">5+</div>
                            <div class="stat-label">AnimationController</div>
                        </div>
                        <div class="stat-divider"></div>
                        <div class="stat-item">
                            <div class="stat-value" style="color: #c084fc;">2</div>
                            <div class="stat-label">Harici Paket</div>
                        </div>
                        <div class="stat-divider"></div>
                        <div class="stat-item">
                            <div class="stat-value" style="color: #fb923c;">10</div>
                            <div class="stat-label">Dart Dosyası</div>
                        </div>
                        <div class="stat-divider"></div>
                        <div class="stat-item">
                            <div class="stat-value" style="color: #f472b6;">1</div>
                            <div class="stat-label">Lottie Animasyonu</div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="card-elevated text-center">
                    <h2 class="mb-2">Teknik Detayları İncele</h2>
                    <p class="muted mb-4">
                        Kod yapısını, widget mimarisini ve animasyon mantığını detaylı görmek için
                        Flutter Uygulaması sayfasına, geliştirme hikayesini görmek için Süreç sayfasına git.
                    </p>
                    <div class="d-flex gap-2 justify-center flex-wrap">
                        <a href="project_flutter.php" class="btn btn-lg btn-primary">
                            📱 Flutter Uygulaması →
                        </a>
                        <a href="project_process.php" class="btn btn-lg btn-outline">
                            🛠️ Geliştirme Süreci →
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
