<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <?php include 'includes/head.php'; ?>
    <title>Yapımcı - Flutter Motion Lab</title>
</head>
<body>
    <?php include 'includes/navbar.php'; ?>
        
    <!-- ABOUT HERO -->
    <section class="about-hero">
        <div class="shell">
            <div class="hero-badge">
                <span class="tag-dot"></span>
                <span>Proje Geliştiricisi</span>
            </div>
            <h1><span class="text-gradient">Yapımcı Hakkında</span></h1>
            <p class="muted">Bu projenin arkasındaki geliştirici</p>
        </div>
    </section>

    <!-- PROFILE CARD -->
    <section class="py-4">
        <div class="shell">
            <div class="profile-card">
                <div class="profile-avatar">
                    <img src="images/profile.png" alt="Mustafa Arda Düşova">
                </div>
                <div class="profile-name">Mustafa Arda Düşova</div>
                <div class="profile-title">Kırklareli Üniversitesi Bilgisayar Programcılığı 2. Sınıf Öğrencisi</div>
                <div class="profile-id">Öğrenci No: 1247008066</div>
                
                <p class="profile-bio">
                    Mobil ve web uygulama geliştirme alanında tutkulu bir yazılım geliştirici. 
                    Flutter ile cross-platform uygulama geliştirme, modern web teknolojileri 
                    ve kullanıcı deneyimi odaklı tasarım konularında deneyimli. 
                    Bu proje, kompleks UI animasyonları ve ses entegrasyonu üzerine 
                    derinlemesine çalışmanın bir ürünüdür.
                </p>
                
                <div class="profile-skills">
                    <span class="skill-tag">Flutter</span>
                    <span class="skill-tag">Dart</span>
                    <span class="skill-tag green">PHP</span>
                    <span class="skill-tag green">MySQL</span>
                    <span class="skill-tag purple">JavaScript</span>
                    <span class="skill-tag purple">CSS3</span>
                    <span class="skill-tag orange">UI/UX Design</span>
                </div>
                
                <div class="social-links">
                    <a href="https://github.com/dusova" target="_blank" class="social-link" title="GitHub">
                        🐙
                    </a>
                    <a href="https://linkedin.com/in/mdusova" target="_blank" class="social-link" title="LinkedIn">
                        💼
                    </a>
                    <a href="mailto:arda@codewithmad.com" class="social-link" title="E-posta">
                        ✉️
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- PROJECT INFO -->
    <section class="py-5">
        <div class="shell">
            <div class="project-info">
                <div class="text-center">
                    <div class="card-title">Proje Detayları</div>
                    <h2 class="mb-2">Flutter Motion Lab Hakkında</h2>
                    <p class="muted">Bu proje hakkında teknik bilgiler</p>
                </div>
                
                <div class="info-grid">
                    <div class="info-card">
                        <div class="info-card-icon">📚</div>
                        <div class="info-card-title">Ders</div>
                        <div class="info-card-text">
                            Mobil Uygulama Geliştirme dersi kapsamında 
                            6. konu sunumu olarak hazırlanmıştır.
                        </div>
                    </div>
                    
                    <div class="info-card">
                        <div class="info-card-icon">🎯</div>
                        <div class="info-card-title">Konu</div>
                        <div class="info-card-text">
                            Kompleks UI & Animasyonlar: Custom animasyonlar, 
                            Lottie entegrasyonu ve ses kontrolü.
                        </div>
                    </div>
                    
                    <div class="info-card">
                        <div class="info-card-icon">📅</div>
                        <div class="info-card-title">Tarih</div>
                        <div class="info-card-text">
                            Aralık 2025 döneminde geliştirilmiş ve 
                            sunuma hazır hale getirilmiştir.
                        </div>
                    </div>
                    
                    <div class="info-card">
                        <div class="info-card-icon">⏱️</div>
                        <div class="info-card-title">Geliştirme Süresi</div>
                        <div class="info-card-text">
                            Araştırma, tasarım ve kodlama dahil 
                            yaklaşık 2 haftalık yoğun çalışma.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-5">
        <div class="shell">
            <div class="card-glass text-center">
                <h2 class="mb-2">Projeyi İncelemek İster misin?</h2>
                <p class="muted mb-4">
                    Sunum paneline giderek Flutter uygulamasının tüm detaylarını keşfet.
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
