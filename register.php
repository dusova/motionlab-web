<?php
require_once 'config.php';

if (isLoggedIn()) {
    header('Location: project.php');
    exit;
}

$errors = [];
$name = '';
$email = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name      = trim($_POST['name'] ?? '');
    $email     = trim($_POST['email'] ?? '');
    $password  = $_POST['password'] ?? '';
    $password2 = $_POST['password2'] ?? '';

    if ($name === '') {
        $errors[] = 'Ad soyad alanı zorunludur.';
    } elseif (strlen($name) < 2) {
        $errors[] = 'Ad soyad en az 2 karakter olmalıdır.';
    }

    if ($email === '') {
        $errors[] = 'E-posta adresi zorunludur.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Geçerli bir e-posta adresi giriniz.';
    }

    if ($password === '') {
        $errors[] = 'Şifre alanı zorunludur.';
    } elseif (strlen($password) < 6) {
        $errors[] = 'Şifre en az 6 karakter olmalıdır.';
    }

    if ($password !== $password2) {
        $errors[] = 'Şifreler birbiriyle uyuşmuyor.';
    }

    if (!$errors) {
        $stmt = $pdo->prepare('SELECT id FROM users WHERE email = ? LIMIT 1');
        $stmt->execute([$email]);
        
        if ($stmt->fetch()) {
            $errors[] = 'Bu e-posta adresi zaten kayıtlı.';
        } else {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $pdo->prepare('INSERT INTO users (name, email, password_hash) VALUES (?, ?, ?)');
            $stmt->execute([$name, $email, $hash]);

            $_SESSION['user_id'] = $pdo->lastInsertId();
            $_SESSION['user_name'] = $name;

            header('Location: project.php');
            exit;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <?php include 'includes/head.php'; ?>
    <title>Kayıt Ol - Flutter Motion Lab</title>
</head>
<body>
    <div class="auth-bg auth-bg-register"></div>
    
    <div class="auth-container">
        <?php include 'includes/navbar.php'; ?>

        <main class="auth-main">
            <div class="auth-card">
                <div class="card-glass">
                    <div class="auth-header">
                        <div class="auth-logo">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                                <circle cx="9" cy="7" r="4"/>
                                <line x1="19" y1="8" x2="19" y2="14"/>
                                <line x1="22" y1="11" x2="16" y2="11"/>
                            </svg>
                        </div>
                        <h1 class="auth-title">Hesap Oluştur</h1>
                        <p class="auth-subtitle">
                            Sunum paneline erişim için kayıt ol
                        </p>
                    </div>

                    <?php if ($errors): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php foreach ($errors as $e): ?>
                                    <li><?= h($e) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <form method="post" novalidate>
                        <div class="form-group">
                            <label class="form-label">Ad Soyad</label>
                            <input 
                                type="text" 
                                name="name" 
                                class="form-control"
                                placeholder="Adınız Soyadınız"
                                value="<?= h($name) ?>" 
                                required
                                autofocus
                            >
                        </div>

                        <div class="form-group">
                            <label class="form-label">E-posta Adresi</label>
                            <input 
                                type="email" 
                                name="email" 
                                class="form-control"
                                placeholder="ornek@email.com"
                                value="<?= h($email) ?>" 
                                required
                            >
                        </div>

                        <div class="form-group">
                            <label class="form-label">Şifre</label>
                            <input 
                                type="password" 
                                name="password" 
                                class="form-control"
                                placeholder="En az 6 karakter"
                                required
                            >
                            <div class="form-hint">Minimum 6 karakter olmalıdır</div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Şifre Tekrar</label>
                            <input 
                                type="password" 
                                name="password2" 
                                class="form-control"
                                placeholder="Şifrenizi tekrar girin"
                                required
                            >
                        </div>

                        <button type="submit" class="btn btn-success w-100 btn-lg">
                            ✨ Kayıt Ol
                        </button>
                    </form>

                    <div class="auth-footer">
                        Zaten hesabın var mı? <a href="login.php">Giriş yap</a>
                    </div>
                </div>

                <div class="mt-4">
                    <div class="card" style="padding: 20px;">
                        <h3 style="font-size: 0.9rem; margin-bottom: 16px; color: #fff;">
                            🎁 Kayıt olunca ne kazanırsın?
                        </h3>
                        <ul class="check-list" style="margin: 0;">
                            <li>Flutter projesinin detaylı teknik analizine erişim</li>
                            <li>Animasyon kodlarının satır satır açıklamaları</li>
                            <li>Geliştirme sürecinin tüm aşamaları</li>
                            <li>Karşılaşılan zorluklar ve çözümleri</li>
                        </ul>
                    </div>
                </div>
            </div>
        </main>

        <?php include 'includes/footer.php'; ?>
    </div>
</body>
</html>
