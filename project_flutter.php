<?php
require_once 'config.php';
requireLogin();

$currentPage = 'flutter';
$navbarSubtitle = 'Sunum Paneli – Flutter Uygulaması';
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <?php include 'includes/head.php'; ?>
    <title>Flutter Uygulaması - Flutter Motion Lab</title>
</head>
<body>
    <?php include 'includes/navbar.php'; ?>

    <main class="py-5">
        <div class="shell">

            <section class="mb-5">
                <div class="card-glass">
                    <div class="d-flex flex-wrap gap-3 justify-between align-center">
                        <div>
                            <div class="card-title">Flutter Tarafı</div>
                            <h1 style="font-size: 1.5rem; margin-bottom: 8px;">
                                Ekranlar, Widget'lar & Mimari
                            </h1>
                            <p class="muted" style="margin: 0; max-width: 600px;">
                                Bu sayfada Flutter projesinin kod yapısını, her ekranın arkasındaki 
                                widget mimarisini ve animasyon mantığını teknik açıdan inceleyeceğiz.
                            </p>
                        </div>
                        <div style="text-align: right;">
                            <div class="muted" style="font-size: 0.75rem;">Ana Dosyalar</div>
                            <div class="mono" style="font-size: 0.85rem;">main.dart</div>
                            <div class="mono" style="font-size: 0.85rem;">home_page.dart</div>
                            <div class="mono" style="font-size: 0.85rem;">duolingo_celebration_page.dart</div>
                            <div class="mono" style="font-size: 0.85rem;">spotify_now_playing_page.dart</div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <div class="phone-row mb-3">
                    <div class="phone-frame">
                        <div class="phone-notch"></div>
                        <div class="phone-screen">
                            <img src="images/homepage.gif" alt="Ana Ekran" 
                                 onerror="this.parentElement.innerHTML='<div class=\'phone-screen-placeholder\'><svg viewBox=\'0 0 24 24\' fill=\'none\' stroke=\'currentColor\' stroke-width=\'1.5\'><rect x=\'3\' y=\'3\' width=\'18\' height=\'18\' rx=\'2\'/></svg>Ana Ekran</div>'">
                        </div>
                        <div class="phone-badge">HomePage</div>
                        <div class="phone-label">
                            <div class="phone-label-title">Ana Ekran</div>
                            <div class="phone-label-sub">Demo kartları listesi</div>
                        </div>
                    </div>

                    <div class="phone-frame">
                        <div class="phone-notch"></div>
                        <div class="phone-screen">
                            <img src="images/duolingo.gif" alt="Duolingo" 
                                 onerror="this.parentElement.innerHTML='<div class=\'phone-screen-placeholder\'><svg viewBox=\'0 0 24 24\' fill=\'none\' stroke=\'currentColor\' stroke-width=\'1.5\'><path d=\'M12 15l-2 5l9-11h-6l2-5l-9 11z\'/></svg>Duolingo</div>'">
                        </div>
                        <div class="phone-badge">Celebration</div>
                        <div class="phone-label">
                            <div class="phone-label-title">Duolingo Kutlama</div>
                            <div class="phone-label-sub">AnimatedBuilder + Custom</div>
                        </div>
                    </div>

                    <div class="phone-frame">
                        <div class="phone-notch"></div>
                        <div class="phone-screen">
                            <img src="images/spotify.gif" alt="Spotify" 
                                 onerror="this.parentElement.innerHTML='<div class=\'phone-screen-placeholder\'><svg viewBox=\'0 0 24 24\' fill=\'none\' stroke=\'currentColor\' stroke-width=\'1.5\'><circle cx=\'12\' cy=\'12\' r=\'10\'/><polygon points=\'10,8 16,12 10,16\'/></svg>Spotify</div>'">
                        </div>
                        <div class="phone-badge">Now Playing</div>
                        <div class="phone-label">
                            <div class="phone-label-title">Spotify</div>
                            <div class="phone-label-sub">Lottie + just_audio</div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <div class="card-elevated">
                    <div class="card-title mb-3">📁 Proje Dosya Yapısı</div>
                    <p class="muted mb-4">
                        Uygulama, <strong>feature-first</strong> yaklaşımıyla organize edilmiştir. 
                        Her özellik kendi klasöründe, katmanlara ayrılmış şekilde bulunur.
                    </p>
                    
                    <div class="d-flex gap-3 flex-wrap">
                        <div style="flex: 1; min-width: 280px;">
                            <div class="file-tree">
<pre style="margin: 0;">lib/
├── <span class="highlight">main.dart</span>
├── core/
│   └── theme/
│       └── <span class="highlight">app_theme.dart</span>
└── features/
    └── animation_showcase/
        ├── data/
        │   └── <span class="file">demo_animations.dart</span>
        ├── domain/
        │   └── <span class="file">animation_demo.dart</span>
        └── presentation/
            ├── pages/
            │   ├── <span class="highlight">home_page.dart</span>
            │   ├── <span class="highlight">duolingo_celebration_page.dart</span>
            │   └── <span class="highlight">spotify_now_playing_page.dart</span>
            └── widgets/
                └── <span class="file">demo_card.dart</span></pre>
                            </div>
                        </div>
                        
                        <div style="flex: 1; min-width: 280px;">
                            <h4 style="font-size: 0.9rem; margin-bottom: 12px;">Dosya Açıklamaları</h4>
                            <ul class="bullet-list" style="font-size: 0.85rem;">
                                <li><strong>main.dart</strong> — Uygulama giriş noktası, MaterialApp tanımı</li>
                                <li><strong>app_theme.dart</strong> — Renk paleti, tipografi, buton/kart stilleri</li>
                                <li><strong>demo_animations.dart</strong> — Mevcut animasyon demolarının listesi</li>
                                <li><strong>animation_demo.dart</strong> — Demo modeli (başlık, açıklama, ikon)</li>
                                <li><strong>home_page.dart</strong> — Ana ekran, kart listesi</li>
                                <li><strong>duolingo_celebration_page.dart</strong> — Kutlama animasyonu</li>
                                <li><strong>spotify_now_playing_page.dart</strong> — Müzik oynatıcı</li>
                                <li><strong>demo_card.dart</strong> — Tekrar kullanılabilir kart widget'ı</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <div class="card-elevated">
                    <div class="d-flex flex-wrap gap-4">
                        <div style="flex: 1; min-width: 300px;">
                            <div class="card-title mb-2">🏠 HomePage – Teknik Detay</div>
                            <p class="mb-3">
                                Ana ekran, kullanıcıyı uygulamaya karşılayan <strong>"laboratuvar giriş kapısı"</strong>.
                                Performans ve görsel kalite dengesi gözetilmiş.
                            </p>
                            
                            <h4 style="font-size: 0.85rem; margin-bottom: 8px; color: #60a5fa;">Widget Yapısı</h4>
                            <ul class="check-list" style="font-size: 0.85rem; margin-bottom: 16px;">
                                <li><code class="mono">Scaffold</code> + <code class="mono">CustomScrollView</code></li>
                                <li><code class="mono">SliverToBoxAdapter</code> ile header bölümü</li>
                                <li><code class="mono">SliverList</code> ile lazy-loaded kart listesi</li>
                                <li><code class="mono">BouncingScrollPhysics</code> ile iOS tarzı scroll</li>
                            </ul>

                            <h4 style="font-size: 0.85rem; margin-bottom: 8px; color: #4ade80;">Animasyon Özellikleri</h4>
                            <ul class="check-list" style="font-size: 0.85rem;">
                                <li>FadeTransition ile sayfa geçişleri</li>
                                <li>HapticFeedback.lightImpact() ile dokunsal feedback</li>
                                <li>Staggered delay ile kartların sıralı görünmesi</li>
                            </ul>
                        </div>
                        
                        <div style="flex: 1; min-width: 300px;">
                            <div class="card-title mb-2">📦 DemoCard Widget</div>
                            <p class="mb-3 muted">
                                Her demo kartı, ayrı bir widget olarak tasarlanmış. 
                                Böylece kart yapısı merkezi olarak yönetilir.
                            </p>
                            
                            <h4 style="font-size: 0.85rem; margin-bottom: 8px; color: #c084fc;">Kart Özellikleri</h4>
                            <ul class="bullet-list" style="font-size: 0.85rem;">
                                <li>Gradient ikon container</li>
                                <li>Başlık + açıklama + teknik tag</li>
                                <li>İndeks bazlı staggered animasyon delay</li>
                                <li>onTap callback ile navigasyon</li>
                                <li>Hover/press state için ölçek değişimi</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <div class="card-elevated">
                    <div class="card-title mb-3">🏆 DuolingoCelebrationPage – Animasyon Anatomisi</div>
                    <p class="mb-4">
                        Bu ekran, Flutter'ın <strong>AnimationController</strong> ve <strong>AnimatedBuilder</strong> 
                        altyapısını kullanarak yazılmış tamamen custom bir kutlama animasyonudur.
                    </p>

                    <div class="d-flex gap-3 flex-wrap mb-4">
                        <div class="feature-item" style="flex: 1; min-width: 200px;">
                            <div style="font-size: 1.5rem; margin-bottom: 8px;">🎮</div>
                            <h4 style="font-size: 0.9rem; margin-bottom: 6px;">State Yönetimi</h4>
                            <p style="font-size: 0.8rem; color: #9ca3af; margin: 0;">
                                StatefulWidget + TickerProviderStateMixin
                            </p>
                        </div>
                        <div class="feature-item" style="flex: 1; min-width: 200px;">
                            <div style="font-size: 1.5rem; margin-bottom: 8px;">⏱️</div>
                            <h4 style="font-size: 0.9rem; margin-bottom: 6px;">Controller Sayısı</h4>
                            <p style="font-size: 0.8rem; color: #9ca3af; margin: 0;">
                                2 adet (main + confetti)
                            </p>
                        </div>
                        <div class="feature-item" style="flex: 1; min-width: 200px;">
                            <div style="font-size: 1.5rem; margin-bottom: 8px;">📐</div>
                            <h4 style="font-size: 0.9rem; margin-bottom: 6px;">Transform Türleri</h4>
                            <p style="font-size: 0.8rem; color: #9ca3af; margin: 0;">
                                Scale + Rotate birleşik
                            </p>
                        </div>
                        <div class="feature-item" style="flex: 1; min-width: 200px;">
                            <div style="font-size: 1.5rem; margin-bottom: 8px;">🎢</div>
                            <h4 style="font-size: 0.9rem; margin-bottom: 6px;">Curve</h4>
                            <p style="font-size: 0.8rem; color: #9ca3af; margin: 0;">
                                Curves.elasticOut (esneme)
                            </p>
                        </div>
                    </div>

                    <div class="d-flex gap-3 flex-wrap">
                        <div style="flex: 1; min-width: 300px;">
                            <h4 style="font-size: 0.9rem; margin-bottom: 12px; color: #60a5fa;">
                                🔧 Animasyon Kurulumu
                            </h4>
                            <div class="code-block">
<pre style="margin: 0;"><span class="comment">// initState içinde</span>
<span class="keyword">_mainController</span> = AnimationController(
  vsync: <span class="keyword">this</span>,
  duration: <span class="keyword">const</span> Duration(milliseconds: <span class="number">800</span>),
);

<span class="keyword">_scale</span> = CurvedAnimation(
  parent: _mainController,
  curve: <span class="class">Curves.elasticOut</span>,
);

<span class="keyword">_rotation</span> = Tween&lt;<span class="class">double</span>&gt;(
  begin: <span class="number">-0.05</span>,
  end: <span class="number">0.05</span>,
).animate(_mainController);</pre>
                            </div>
                        </div>
                        
                        <div style="flex: 1; min-width: 300px;">
                            <h4 style="font-size: 0.9rem; margin-bottom: 12px; color: #4ade80;">
                                🎨 Widget Kullanımı
                            </h4>
                            <div class="code-block">
<pre style="margin: 0;"><span class="class">AnimatedBuilder</span>(
  animation: _mainController,
  builder: (context, child) {
    <span class="keyword">return</span> <span class="class">Transform</span>.rotate(
      angle: _rotation.value,
      child: <span class="class">Transform</span>.scale(
        scale: _scale.value,
        child: child,
      ),
    );
  },
  child: <span class="comment">/* Kart widget'ı */</span>,
)</pre>
                            </div>
                        </div>
                    </div>

                    <div class="section-divider"></div>

                    <h4 style="font-size: 0.9rem; margin-bottom: 12px;">🎊 Konfeti Partikülleri</h4>
                    <p class="muted" style="font-size: 0.85rem;">
                        Ekrandaki konfeti efekti, ayrı bir <code class="mono">_ConfettiParticle</code> widget'ı ile oluşturulur. 
                        Her partikül kendi pozisyon, renk ve animasyon süresine sahiptir. 
                        <code class="mono">_confettiController</code> ile koordineli hareket ederler.
                    </p>
                </div>
            </section>

            <section class="mb-5">
                <div class="card-elevated">
                    <div class="card-title mb-3">🎵 SpotifyNowPlayingPage – Ses + Animasyon Entegrasyonu</div>
                    <p class="mb-4">
                        Bu ekran, görsel animasyonları <strong>gerçek ses oynatma</strong> mantığıyla birleştirir. 
                        just_audio paketi ile lokal müzik dosyaları oynatılır, Lottie ile equalizer animasyonu gösterilir.
                    </p>

                    <div class="d-flex gap-3 flex-wrap mb-4">
                        <div class="feature-item" style="flex: 1; min-width: 220px;">
                            <div style="font-size: 1.5rem; margin-bottom: 8px;">📦</div>
                            <h4 style="font-size: 0.9rem; margin-bottom: 6px;">Kullanılan Paketler</h4>
                            <div class="tech-stack" style="margin-top: 8px;">
                                <span class="tech-item" style="padding: 4px 8px; font-size: 0.7rem;">just_audio</span>
                                <span class="tech-item" style="padding: 4px 8px; font-size: 0.7rem;">lottie</span>
                            </div>
                        </div>
                        <div class="feature-item" style="flex: 1; min-width: 220px;">
                            <div style="font-size: 1.5rem; margin-bottom: 8px;">🎧</div>
                            <h4 style="font-size: 0.9rem; margin-bottom: 6px;">Playlist</h4>
                            <p style="font-size: 0.8rem; color: #9ca3af; margin: 0;">
                                3 şarkılık lokal playlist<br>
                                <span style="font-size: 0.7rem;">assets/audio/ klasöründen</span>
                            </p>
                        </div>
                        <div class="feature-item" style="flex: 1; min-width: 220px;">
                            <div style="font-size: 1.5rem; margin-bottom: 8px;">📊</div>
                            <h4 style="font-size: 0.9rem; margin-bottom: 6px;">Stream Dinleme</h4>
                            <p style="font-size: 0.8rem; color: #9ca3af; margin: 0;">
                                durationStream<br>
                                positionStream<br>
                                playerStateStream
                            </p>
                        </div>
                    </div>

                    <div class="d-flex gap-3 flex-wrap">
                        <div style="flex: 1; min-width: 300px;">
                            <h4 style="font-size: 0.9rem; margin-bottom: 12px; color: #60a5fa;">
                                🎵 Audio Player Kurulumu
                            </h4>
                            <div class="code-block">
<pre style="margin: 0;"><span class="keyword">_audioPlayer</span> = AudioPlayer();

<span class="comment">// Süre değişimini dinle</span>
_audioPlayer.durationStream.listen((duration) {
  <span class="keyword">if</span> (duration != <span class="keyword">null</span>) {
    setState(() => _duration = duration);
  }
});

<span class="comment">// Pozisyon değişimini dinle</span>
_audioPlayer.positionStream.listen((position) {
  setState(() => _position = position);
});

<span class="comment">// Oynatma durumunu dinle</span>
_audioPlayer.playerStateStream.listen((state) {
  <span class="keyword">if</span> (state.playing) {
    _lottieController.repeat(); <span class="comment">// Animasyonu başlat</span>
  } <span class="keyword">else</span> {
    _lottieController.stop();   <span class="comment">// Animasyonu durdur</span>
  }
});</pre>
                            </div>
                        </div>
                        
                        <div style="flex: 1; min-width: 300px;">
                            <h4 style="font-size: 0.9rem; margin-bottom: 12px; color: #4ade80;">
                                ✨ Lottie Equalizer
                            </h4>
                            <div class="code-block">
<pre style="margin: 0;"><span class="class">Lottie</span>.asset(
  <span class="string">'assets/animations/equalizer.json'</span>,
  controller: _lottieController,
  onLoaded: (composition) {
    _lottieController.duration = composition.duration;
  },
)</pre>
                            </div>
                            
                            <div class="mt-3">
                                <h4 style="font-size: 0.9rem; margin-bottom: 12px; color: #c084fc;">
                                    🌊 Pulse Arka Plan
                                </h4>
                                <div class="code-block">
<pre style="margin: 0;"><span class="class">AnimatedBuilder</span>(
  animation: _pulseController,
  builder: (context, child) {
    <span class="keyword">return</span> Container(
      decoration: BoxDecoration(
        gradient: <span class="class">RadialGradient</span>(
          radius: <span class="number">1.2</span> + (_pulseController.value * <span class="number">0.1</span>),
          colors: [spotifyGreen, background],
        ),
      ),
    );
  },
)</pre>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-divider"></div>

                    <h4 style="font-size: 0.9rem; margin-bottom: 12px;">🎛️ Kontroller</h4>
                    <div class="d-flex gap-2 flex-wrap">
                        <div class="badge badge-primary">▶️ Play/Pause</div>
                        <div class="badge badge-primary">⏭️ Next</div>
                        <div class="badge badge-primary">⏮️ Previous</div>
                        <div class="badge badge-purple">Slider Seek</div>
                        <div class="badge badge-success">Süre Gösterimi</div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <div class="card-glass">
                    <div class="card-title mb-3">⚠️ Önemli Teknik Notlar</div>
                    <div class="d-flex gap-3 flex-wrap">
                        <div style="flex: 1; min-width: 280px;">
                            <h4 style="font-size: 0.9rem; margin-bottom: 8px; color: #fbbf24;">
                                🧹 Memory Management
                            </h4>
                            <ul class="bullet-list" style="font-size: 0.85rem;">
                                <li>Tüm AnimationController'lar <code class="mono">dispose()</code> edilir</li>
                                <li>AudioPlayer kaynakları temizlenir</li>
                                <li>Stream subscription'lar <code class="mono">mounted</code> kontrolü ile güvenli</li>
                            </ul>
                        </div>
                        <div style="flex: 1; min-width: 280px;">
                            <h4 style="font-size: 0.9rem; margin-bottom: 8px; color: #fbbf24;">
                                🔄 setState Optimizasyonu
                            </h4>
                            <ul class="bullet-list" style="font-size: 0.85rem;">
                                <li>Gereksiz rebuild'ler önlenir</li>
                                <li>AnimatedBuilder ile izole rebuild</li>
                                <li>Stream listener'larda <code class="mono">if (mounted)</code> kontrolü</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="card-elevated text-center">
                    <h2 class="mb-2">Geliştirme Sürecini İncele</h2>
                    <p class="muted mb-4">
                        Projenin nasıl başladığını, hangi adımlardan geçtiğini ve 
                        karşılaşılan zorlukları görmek için devam et.
                    </p>
                    <a href="project_process.php" class="btn btn-lg btn-primary">
                        🛠️ Geliştirme Süreci →
                    </a>
                </div>
            </section>

        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
