<?php
require_once __DIR__ . '/includes/auth.php';
require_guest();

$error = '';
$email = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim((string) ($_POST['email'] ?? ''));
    $password = (string) ($_POST['password'] ?? '');
    $user = find_user_by_email($email);

    if (!$user || !password_verify($password, $user['password'])) {
        $error = 'Invalid email or password.';
    } else {
        $_SESSION['user'] = [
            'id' => $user['id'],
            'name' => $user['name'],
            'email' => $user['email'],
            'role' => $user['role'],
        ];
        header('Location: index.php');
        exit;
    }
}

$currentPage = 'login';
$pageTitle = 'Login | MilimuConnect';
require_once __DIR__ . '/includes/header.php';
?>

<section class="auth-wrap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-5">
                <div class="card auth-card shadow">
                    <div class="card-body p-4 p-md-5">
                        <h1 class="h3 fw-bold mb-2">Welcome back</h1>
                        <p class="text-muted">Log in to save professionals and manage your account.</p>

                        <?php if ($error): ?>
                            <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
                        <?php endif; ?>

                        <form method="post" action="login.php" novalidate>
                            <div class="mb-3">
                                <label class="form-label fw-bold" for="email">Email</label>
                                <input type="email" class="form-control form-control-lg" id="email" name="email"
                                       value="<?php echo htmlspecialchars($email); ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold" for="password">Password</label>
                                <input type="password" class="form-control form-control-lg" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg w-100">Login</button>
                        </form>

                        <p class="mt-4 mb-1 text-muted small">
                            Demo account: <strong>demo@milimuconnect.ug</strong> / <strong>password</strong>
                        </p>
                        <p class="mb-0">Need an account? <a href="register.php">Register</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
