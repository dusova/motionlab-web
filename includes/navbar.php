<?php
// Mevcut sayfa belirle
$currentFile = basename($_SERVER['PHP_SELF']);
$isAuthPage = in_array($currentFile, ['login.php', 'register.php']);
?>
<nav class="navbar">
    <div class="shell">
        <div class="navbar-inner">
            <a href="index.php" class="navbar-brand">
                <span class="navbar-brand-title">🎬 Flutter Motion Lab</span>
                <span class="navbar-brand-sub"><?= $navbarSubtitle ?? 'Kompleks UI & Animasyonlar' ?></span>
            </a>
            <div class="navbar-nav">
                <?php if ($isAuthPage): ?>
                    <!-- Auth sayfaları için basit navbar -->
                    <a href="index.php" class="nav-link">Ana Sayfa</a>
                    <?php if ($currentFile === 'login.php'): ?>
                        <a href="register.php" class="btn btn-sm btn-primary">Kayıt Ol</a>
                    <?php else: ?>
                        <a href="login.php" class="btn btn-sm btn-outline">Giriş Yap</a>
                    <?php endif; ?>
                <?php elseif (isLoggedIn()): ?>
                    <!-- Giriş yapmış kullanıcılar için navbar -->
                    <a href="index.php" class="nav-link <?= $currentFile === 'index.php' ? 'active' : '' ?>">Anasayfa</a>
                    <a href="project.php" class="nav-link <?= $currentFile === 'project.php' ? 'active' : '' ?>">Genel Bakış</a>
                    <a href="project_flutter.php" class="nav-link <?= $currentFile === 'project_flutter.php' ? 'active' : '' ?>">Flutter</a>
                    <a href="project_process.php" class="nav-link <?= $currentFile === 'project_process.php' ? 'active' : '' ?>">Süreç</a>
                    <a href="about.php" class="nav-link <?= $currentFile === 'about.php' ? 'active' : '' ?>">Yapımcı</a>
                    <a href="references.php" class="nav-link <?= $currentFile === 'references.php' ? 'active' : '' ?>">Kaynakça</a>
                    <span class="nav-user">👋 <?= h($_SESSION['user_name'] ?? '') ?></span>
                    <a href="logout.php" class="btn btn-sm btn-danger">Çıkış</a>
                <?php else: ?>
                    <!-- Giriş yapmamış kullanıcılar için navbar -->
                    <a href="index.php" class="nav-link <?= $currentFile === 'index.php' ? 'active' : '' ?>">Anasayfa</a>
                    <a href="about.php" class="nav-link <?= $currentFile === 'about.php' ? 'active' : '' ?>">Yapımcı</a>
                    <a href="references.php" class="nav-link <?= $currentFile === 'references.php' ? 'active' : '' ?>">Kaynakça</a>
                    <a href="login.php" class="btn btn-sm btn-outline">Giriş Yap</a>
                    <a href="register.php" class="btn btn-sm btn-primary">Kayıt Ol</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>
