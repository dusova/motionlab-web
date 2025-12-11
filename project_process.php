<?php
require_once 'config.php';
requireLogin();

$currentPage = 'process';
$navbarSubtitle = 'Sunum Paneli – Geliştirme Süreci';
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <?php include 'includes/head.php'; ?>
    <title>Geliştirme Süreci - Flutter Motion Lab</title>
</head>
<body>
    <?php include 'includes/navbar.php'; ?>

    <main class="py-5">
        <div class="shell">

            <section class="mb-5">
                <div class="card-glass">
                    <div class="d-flex flex-wrap gap-3 justify-between align-center">
                        <div>
                            <div class="card-title">Geliştirme Hikayesi</div>
                            <h1 style="font-size: 1.5rem; margin-bottom: 8px;">
                                Fikirden Ürüne: Motion Lab'in Doğuşu
                            </h1>
                            <p class="muted" style="margin: 0; max-width: 600px;">
                                Bu sayfada projenin nasıl başladığını, hangi adımlardan geçtiğini, 
                                karşılaşılan zorlukları ve öğrenilen dersleri bulacaksın.
                            </p>
                        </div>
                        <div style="text-align: right;">
                            <div class="muted" style="font-size: 0.75rem;">Toplam Süre</div>
                            <div style="font-weight: 600; font-size: 1.25rem;">~2 Hafta</div>
                            <div class="muted mt-2" style="font-size: 0.75rem;">Zorluk</div>
                            <div class="difficulty-badge difficulty-medium">⚡ Orta-İleri</div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <div class="card-elevated mb-3">
                    <div class="card-title mb-2">Üç Ekran, Tek Hikâye</div>
                    <p class="muted mb-4">
                        Motion Lab'in geliştirme süreci, bu üç ekranın sırayla ortaya çıkmasıyla şekillendi:
                        önce yapı, sonra kutlama, en son müzik ekranı.
                    </p>

                    <div class="phone-row">
                        <div class="phone-frame">
                            <div class="phone-notch"></div>
                            <div class="phone-screen">
                                <img src="images/homepage.gif" alt="Ana Ekran" 
                                     onerror="this.parentElement.innerHTML='<div class=\'phone-screen-placeholder\'><svg viewBox=\'0 0 24 24\' fill=\'none\' stroke=\'currentColor\' stroke-width=\'1.5\'><rect x=\'3\' y=\'3\' width=\'18\' height=\'18\' rx=\'2\'/></svg>Adım 1</div>'">
                            </div>
                            <div class="phone-badge" style="background: linear-gradient(135deg, #3b82f6, #2563eb); border: none;">Adım 1</div>
                            <div class="phone-label">
                                <div class="phone-label-title">Ana Ekran</div>
                                <div class="phone-label-sub">İskelet & Temel Yapı</div>
                            </div>
                        </div>

                        <div class="phone-frame">
                            <div class="phone-notch"></div>
                            <div class="phone-screen">
                                <img src="images/duolingo.gif" alt="Duolingo" 
                                     onerror="this.parentElement.innerHTML='<div class=\'phone-screen-placeholder\'><svg viewBox=\'0 0 24 24\' fill=\'none\' stroke=\'currentColor\' stroke-width=\'1.5\'><path d=\'M12 15l-2 5l9-11h-6l2-5l-9 11z\'/></svg>Adım 2</div>'">
                            </div>
                            <div class="phone-badge" style="background: linear-gradient(135deg, #22c55e, #16a34a); border: none;">Adım 2</div>
                            <div class="phone-label">
                                <div class="phone-label-title">Duolingo Kutlama</div>
                                <div class="phone-label-sub">İlk Custom Animasyon</div>
                            </div>
                        </div>

                        <div class="phone-frame">
                            <div class="phone-notch"></div>
                            <div class="phone-screen">
                                <img src="images/spotify.gif" alt="Spotify" 
                                     onerror="this.parentElement.innerHTML='<div class=\'phone-screen-placeholder\'><svg viewBox=\'0 0 24 24\' fill=\'none\' stroke=\'currentColor\' stroke-width=\'1.5\'><circle cx=\'12\' cy=\'12\' r=\'10\'/><polygon points=\'10,8 16,12 10,16\'/></svg>Adım 3</div>'">
                            </div>
                            <div class="phone-badge" style="background: linear-gradient(135deg, #a855f7, #9333ea); border: none;">Adım 3</div>
                            <div class="phone-label">
                                <div class="phone-label-title">Spotify</div>
                                <div class="phone-label-sub">Ses + Animasyon</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <div class="card-elevated">
                    <div class="card-title mb-3">💡 Başlangıç Fikri</div>
                    <div class="d-flex gap-3 flex-wrap">
                        <div style="flex: 1; min-width: 300px;">
                            <p class="mb-3">
                                Proje fikri, klasik animasyon derslerinin <strong>"buton döndürme"</strong> ya da 
                                <strong>"kart çevirme"</strong> gibi izole örneklerinden uzaklaşma isteğiyle doğdu.
                            </p>
                            <p class="muted">
                                Hedef, sadece teknik gösterim değil; <strong>gerçek bir kullanıcının 
                                kullanabileceği</strong> kalitede bir uygulama ortaya koymaktı.
                            </p>
                        </div>
                        <div style="flex: 1; min-width: 300px;">
                            <h4 style="font-size: 0.9rem; margin-bottom: 12px; color: #60a5fa;">
                                🎯 Belirlenen Hedefler
                            </h4>
                            <ul class="check-list" style="font-size: 0.85rem;">
                                <li>Günlük hayatta görebileceğimiz ekranları seçmek</li>
                                <li>Bu ekranları tek bir uygulamada toplamak</li>
                                <li>Hem sade hem premium görünen tasarım</li>
                                <li>Ders kapsamında "projeye benzer" bir şey</li>
                                <li>Portfolio'da gösterilebilir kalite</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <div class="card-title mb-4 text-center">🚀 Adım Adım Geliştirme Süreci</div>
                
                <div class="d-flex gap-3 flex-wrap mb-4">
                    <div class="process-card" style="flex: 1; min-width: 280px;">
                        <div class="process-number process-number-1">1</div>
                        <h3 style="font-size: 1rem; margin: 12px 0 8px; color: #60a5fa;">
                            Proje İskeleti
                        </h3>
                        <p class="muted" style="font-size: 0.85rem; margin-bottom: 12px;">
                            İlk olarak uygulamanın temel yapısı kuruldu. 
                            Animasyonlar daha sonra eklendi.
                        </p>
                        <ul class="bullet-list" style="font-size: 0.8rem;">
                            <li>Flutter projesi oluşturuldu</li>
                            <li>Klasör yapısı belirlendi (feature-first)</li>
                            <li>main.dart + MaterialApp kurulumu</li>
                            <li>Ortak tema dosyası (app_theme.dart)</li>
                        </ul>
                        <div class="mt-2">
                            <span class="difficulty-badge difficulty-easy">✅ Kolay</span>
                        </div>
                    </div>

                    <div class="process-card" style="flex: 1; min-width: 280px;">
                        <div class="process-number process-number-2">2</div>
                        <h3 style="font-size: 1rem; margin: 12px 0 8px; color: #4ade80;">
                            Ana Ekran Tasarımı
                        </h3>
                        <p class="muted" style="font-size: 0.85rem; margin-bottom: 12px;">
                            HomePage ve DemoCard widget'ları yazıldı. 
                            Kart listesi ve navigasyon ayarlandı.
                        </p>
                        <ul class="bullet-list" style="font-size: 0.8rem;">
                            <li>HomePage layout'u (CustomScrollView)</li>
                            <li>DemoCard widget'ı tasarımı</li>
                            <li>AnimationDemo modeli oluşturuldu</li>
                            <li>Demo listesi (demo_animations.dart)</li>
                        </ul>
                        <div class="mt-2">
                            <span class="difficulty-badge difficulty-easy">✅ Kolay</span>
                        </div>
                    </div>

                    <div class="process-card" style="flex: 1; min-width: 280px;">
                        <div class="process-number process-number-3">3</div>
                        <h3 style="font-size: 1rem; margin: 12px 0 8px; color: #c084fc;">
                            Duolingo Kutlama
                        </h3>
                        <p class="muted" style="font-size: 0.85rem; margin-bottom: 12px;">
                            İlk "karakterli" animasyon ekranı. Custom animasyonların 
                            temelini oluşturdu.
                        </p>
                        <ul class="bullet-list" style="font-size: 0.8rem;">
                            <li>AnimationController kurulumu</li>
                            <li>Scale + rotate animasyonları</li>
                            <li>CurvedAnimation (elasticOut)</li>
                            <li>Konfeti partikülleri eklendi</li>
                        </ul>
                        <div class="mt-2">
                            <span class="difficulty-badge difficulty-medium">⚡ Orta</span>
                        </div>
                    </div>
                </div>

                <div class="d-flex gap-3 flex-wrap">
                    <div class="process-card" style="flex: 1; min-width: 280px;">
                        <div class="process-number process-number-4">4</div>
                        <h3 style="font-size: 1rem; margin: 12px 0 8px; color: #fb923c;">
                            Spotify Ekranı
                        </h3>
                        <p class="muted" style="font-size: 0.85rem; margin-bottom: 12px;">
                            En zorlu aşama. Ses oynatma + animasyon senkronizasyonu 
                            bu adımda gerçekleşti.
                        </p>
                        <ul class="bullet-list" style="font-size: 0.8rem;">
                            <li>just_audio paketi entegrasyonu</li>
                            <li>Lokal playlist oluşturma</li>
                            <li>Lottie equalizer animasyonu</li>
                            <li>Stream-based state yönetimi</li>
                            <li>Pulse efektli arka plan</li>
                        </ul>
                        <div class="mt-2">
                            <span class="difficulty-badge difficulty-hard">🔥 Zor</span>
                        </div>
                    </div>

                    <div class="process-card" style="flex: 1; min-width: 280px;">
                        <div class="process-number process-number-5">5</div>
                        <h3 style="font-size: 1rem; margin: 12px 0 8px; color: #f472b6;">
                            Polish & Sunum
                        </h3>
                        <p class="muted" style="font-size: 0.85rem; margin-bottom: 12px;">
                            Son rötuşlar, hata düzeltmeleri ve bu PHP sunum 
                            panelinin hazırlanması.
                        </p>
                        <ul class="bullet-list" style="font-size: 0.8rem;">
                            <li>Geçiş animasyonları iyileştirildi</li>
                            <li>HapticFeedback eklendi</li>
                            <li>Memory leak kontrolleri</li>
                            <li>PHP sunum paneli yazıldı</li>
                            <li>Ekran görüntüleri/GIF'ler</li>
                        </ul>
                        <div class="mt-2">
                            <span class="difficulty-badge difficulty-medium">⚡ Orta</span>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <div class="card-elevated">
                    <div class="card-title mb-4">⚠️ Karşılaşılan Zorluklar & Çözümler</div>
                    
                    <div class="d-flex gap-3 flex-wrap">
                        <div style="flex: 1; min-width: 300px;">
                            <h4 style="font-size: 0.9rem; margin-bottom: 16px; color: #f87171;">
                                ❌ Problemler
                            </h4>
                            
                            <div class="card mb-3" style="padding: 16px;">
                                <h5 style="font-size: 0.85rem; margin-bottom: 6px;">1. Animasyon Süresi Ayarlama</h5>
                                <p class="muted" style="font-size: 0.8rem; margin: 0;">
                                    Animasyonların çok hızlı veya çok yavaş olması. 
                                    "Doğru" hissi yakalamak için deneme-yanılma gerekti.
                                </p>
                            </div>
                            
                            <div class="card mb-3" style="padding: 16px;">
                                <h5 style="font-size: 0.85rem; margin-bottom: 6px;">2. Ses + UI Senkronizasyonu</h5>
                                <p class="muted" style="font-size: 0.8rem; margin: 0;">
                                    Ses oynatılırken UI'ın takılması veya gecikmesi. 
                                    Stream dinleme sırasında setState sorunları.
                                </p>
                            </div>
                            
                            <div class="card mb-3" style="padding: 16px;">
                                <h5 style="font-size: 0.85rem; margin-bottom: 6px;">3. Lottie Boyut/Konum</h5>
                                <p class="muted" style="font-size: 0.8rem; margin: 0;">
                                    Equalizer animasyonunun tasarımla uyumlu konumlandırılması 
                                    ve boyutlandırılması.
                                </p>
                            </div>
                            
                            <div class="card" style="padding: 16px;">
                                <h5 style="font-size: 0.85rem; margin-bottom: 6px;">4. Tema Tutarlılığı</h5>
                                <p class="muted" style="font-size: 0.8rem; margin: 0;">
                                    Hem Duolingo yeşili hem Spotify yeşili farklı tonlarda. 
                                    Ortak bir görünüm yakalamak zordu.
                                </p>
                            </div>
                        </div>
                        
                        <div style="flex: 1; min-width: 300px;">
                            <h4 style="font-size: 0.9rem; margin-bottom: 16px; color: #4ade80;">
                                ✅ Çözümler
                            </h4>
                            
                            <div class="card mb-3" style="padding: 16px; border-color: rgba(34, 197, 94, 0.3);">
                                <h5 style="font-size: 0.85rem; margin-bottom: 6px;">1. Curve Deneyimi</h5>
                                <p class="muted" style="font-size: 0.8rem; margin: 0;">
                                    <code class="mono">Curves.elasticOut</code>, <code class="mono">easeInOut</code> gibi 
                                    farklı eğriler denendi. Duygusal etkiyi curve seçimi belirledi.
                                </p>
                            </div>
                            
                            <div class="card mb-3" style="padding: 16px; border-color: rgba(34, 197, 94, 0.3);">
                                <h5 style="font-size: 0.85rem; margin-bottom: 6px;">2. Mounted Kontrolü</h5>
                                <p class="muted" style="font-size: 0.8rem; margin: 0;">
                                    Stream listener'larda <code class="mono">if (mounted)</code> kontrolü eklendi. 
                                    Gereksiz setState çağrıları önlendi.
                                </p>
                            </div>
                            
                            <div class="card mb-3" style="padding: 16px; border-color: rgba(34, 197, 94, 0.3);">
                                <h5 style="font-size: 0.85rem; margin-bottom: 6px;">3. Flex Layout</h5>
                                <p class="muted" style="font-size: 0.8rem; margin: 0;">
                                    Lottie için <code class="mono">SizedBox</code> + <code class="mono">Center</code> 
                                    kombinasyonu kullanıldı. Responsive davranış sağlandı.
                                </p>
                            </div>
                            
                            <div class="card" style="padding: 16px; border-color: rgba(34, 197, 94, 0.3);">
                                <h5 style="font-size: 0.85rem; margin-bottom: 6px;">4. Tek Tema Dosyası</h5>
                                <p class="muted" style="font-size: 0.8rem; margin: 0;">
                                    <code class="mono">app_theme.dart</code> ile tüm renkler merkezi yönetildi. 
                                    Koyu arka plan + accent rengi prensibi benimsendi.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <div class="card-glass">
                    <div class="card-title mb-4 text-center">📚 Öğrenilen Dersler</div>
                    
                    <div class="feature-grid">
                        <div class="feature-item">
                            <div class="feature-icon feature-icon-blue">🎯</div>
                            <h3 class="feature-title">Animasyon Zamanlama Sanatı</h3>
                            <p class="feature-desc">
                                Doğru süre (duration) ve eğri (curve) seçimi, animasyonun 
                                "profesyonel" veya "amatör" görünmesi arasındaki farkı belirler.
                            </p>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon feature-icon-green">🔄</div>
                            <h3 class="feature-title">State Yönetimi Önemi</h3>
                            <p class="feature-desc">
                                Stream-based güncellemelerde dikkatli olmak gerekiyor. 
                                Gereksiz rebuild'ler performansı öldürür.
                            </p>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon feature-icon-purple">🧹</div>
                            <h3 class="feature-title">Dispose Disiplini</h3>
                            <p class="feature-desc">
                                AnimationController, AudioPlayer gibi kaynakları dispose etmemek 
                                memory leak'e neden olur. Her zaman temizlik şart.
                            </p>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon feature-icon-orange">🎨</div>
                            <h3 class="feature-title">Tutarlı Tasarım Dili</h3>
                            <p class="feature-desc">
                                Tek bir tema dosyasından yönetilen renkler ve stiller, 
                                uygulamaya profesyonel bir bütünlük kazandırır.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <div class="card-elevated">
                    <div class="card-title mb-3">🚀 Gelecekte Neler Eklenebilir?</div>
                    <p class="muted mb-4">
                        Motion Lab, istenirse rahatlıkla büyütülebilir bir temel sunuyor. 
                        Aşağıdaki fikirler değerlendirilebilir:
                    </p>
                    
                    <div class="d-flex gap-2 flex-wrap">
                        <div class="tech-item">📱 Daha fazla animasyon demosu</div>
                        <div class="tech-item">🛒 E-ticaret animasyonları</div>
                        <div class="tech-item">📱 Sosyal medya geçişleri</div>
                        <div class="tech-item">⭐ Favori işaretleme (state)</div>
                        <div class="tech-item">📖 Öğrenme modu (kod + açıklama)</div>
                        <div class="tech-item">🌐 Flutter Web build</div>
                        <div class="tech-item">🎮 Gesture-based animasyonlar</div>
                        <div class="tech-item">🌙 Dark/Light tema toggle</div>
                    </div>
                </div>
            </section>

            <section>
                <div class="card-glass text-center">
                    <h2 class="mb-3">Özet</h2>
                    <p class="muted mb-4" style="max-width: 600px; margin: 0 auto 24px;">
                        Flutter Motion Lab, animasyon tekniklerini gerçek bir uygulama bağlamında 
                        göstermek için tasarlandı. İskelet kurma, custom animasyon yazma ve 
                        ses entegrasyonu gibi aşamalardan geçerek tamamlandı.
                    </p>
                    
                    <div class="stats-row mb-4">
                        <div class="stat-item">
                            <div class="stat-value" style="color: #60a5fa;">5</div>
                            <div class="stat-label">Geliştirme Adımı</div>
                        </div>
                        <div class="stat-divider"></div>
                        <div class="stat-item">
                            <div class="stat-value" style="color: #4ade80;">4</div>
                            <div class="stat-label">Çözülen Problem</div>
                        </div>
                        <div class="stat-divider"></div>
                        <div class="stat-item">
                            <div class="stat-value" style="color: #c084fc;">∞</div>
                            <div class="stat-label">Öğrenilen Ders</div>
                        </div>
                    </div>
                    
                    <div class="d-flex gap-2 justify-center flex-wrap">
                        <a href="project.php" class="btn btn-lg btn-outline">
                            ← Genel Bakış
                        </a>
                        <a href="project_flutter.php" class="btn btn-lg btn-primary">
                            📱 Teknik Detaylar
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
