<?php
require_once 'config.php';

if (isLoggedIn()) {
    header('Location: project.php');
    exit;
}

$errors = [];
$email = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email    = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($email === '' || $password === '') {
        $errors[] = 'E-posta ve şifre alanları zorunludur.';
    } else {
        $stmt = $pdo->prepare('SELECT id, name, password_hash FROM users WHERE email = ? LIMIT 1');
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if (!$user || !password_verify($password, $user['password_hash'])) {
            $errors[] = 'E-posta veya şifre hatalı.';
        } else {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];

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
    <title>Giriş Yap - Flutter Motion Lab</title>
</head>
<body>
    <div class="auth-bg auth-bg-login"></div>
    
    <div class="auth-container">
        <?php include 'includes/navbar.php'; ?>

        <main class="auth-main">
            <div class="auth-card">
                <div class="card-glass">
                    <div class="auth-header">
                        <div class="auth-logo">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/>
                                <polyline points="10 17 15 12 10 7"/>
                                <line x1="15" y1="12" x2="3" y2="12"/>
                            </svg>
                        </div>
                        <h1 class="auth-title">Hoş Geldin!</h1>
                        <p class="auth-subtitle">
                            Sunum paneline erişmek için giriş yap
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
                            <label class="form-label">E-posta Adresi</label>
                            <input 
                                type="email" 
                                name="email" 
                                class="form-control"
                                placeholder="ornek@email.com"
                                value="<?= h($email) ?>" 
                                required
                                autofocus
                            >
                        </div>

                        <div class="form-group">
                            <label class="form-label">Şifre</label>
                            <input 
                                type="password" 
                                name="password" 
                                class="form-control"
                                placeholder="••••••••"
                                required
                            >
                        </div>

                        <button type="submit" class="btn btn-primary w-100 btn-lg">
                            🚀 Giriş Yap
                        </button>
                    </form>



                    <div class="auth-footer">
                        Hesabın yok mu? <a href="register.php">Kayıt ol</a>
                    </div>
                </div>

                <div class="mt-4">
                    <div class="d-flex gap-2 flex-wrap">
                        <div class="card" style="flex: 1; min-width: 140px; padding: 16px; text-align: center;">
                            <div style="font-size: 1.5rem; margin-bottom: 8px;">🔒</div>
                            <div style="font-size: 0.75rem; color: #9ca3af;">Güvenli Giriş</div>
                            <div style="font-size: 0.7rem; color: #4b5563; margin-top: 4px;">Şifreler hashlenmiş</div>
                        </div>
                        <div class="card" style="flex: 1; min-width: 140px; padding: 16px; text-align: center;">
                            <div style="font-size: 1.5rem; margin-bottom: 8px;">⚡</div>
                            <div style="font-size: 0.75rem; color: #9ca3af;">Hızlı Erişim</div>
                            <div style="font-size: 0.7rem; color: #4b5563; margin-top: 4px;">Session tabanlı</div>
                        </div>
                        <div class="card" style="flex: 1; min-width: 140px; padding: 16px; text-align: center;">
                            <div style="font-size: 1.5rem; margin-bottom: 8px;">📱</div>
                            <div style="font-size: 0.75rem; color: #9ca3af;">Full Erişim</div>
                            <div style="font-size: 0.7rem; color: #4b5563; margin-top: 4px;">Tüm sayfalar açık</div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php include 'includes/footer.php'; ?>
    </div>
</body>
</html>
