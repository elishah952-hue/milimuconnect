<?php
require_once __DIR__ . '/includes/auth.php';
require_guest();

$errors = [];
$name = '';
$email = '';
$role = 'customer';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim((string) ($_POST['name'] ?? ''));
    $email = trim((string) ($_POST['email'] ?? ''));
    $password = (string) ($_POST['password'] ?? '');
    $confirm = (string) ($_POST['confirm'] ?? '');
    $role = ($_POST['role'] ?? 'customer') === 'professional' ? 'professional' : 'customer';

    if ($name === '') {
        $errors[] = 'Please enter your full name.';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Please enter a valid email address.';
    }
    if (strlen($password) < 6) {
        $errors[] = 'Password must be at least 6 characters.';
    }
    if ($password !== $confirm) {
        $errors[] = 'Passwords do not match.';
    }
    if (find_user_by_email($email)) {
        $errors[] = 'An account with that email already exists.';
    }

    if (!$errors) {
        $users = load_users();
        $nextId = 1;
        foreach ($users as $user) {
            $nextId = max($nextId, (int) $user['id'] + 1);
        }

        $users[] = [
            'id' => $nextId,
            'name' => $name,
            'email' => mb_strtolower($email),
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'role' => $role,
        ];
        save_users($users);

        $_SESSION['user'] = [
            'id' => $nextId,
            'name' => $name,
            'email' => mb_strtolower($email),
            'role' => $role,
        ];
        header('Location: index.php');
        exit;
    }
}

$currentPage = 'register';
$pageTitle = 'Register | MilimuConnect';
require_once __DIR__ . '/includes/header.php';
?>

<section class="auth-wrap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card auth-card shadow">
                    <div class="card-body p-4 p-md-5">
                        <h1 class="h3 fw-bold mb-2">Create an account</h1>
                        <p class="text-muted">Register as a customer or as a professional.</p>

                        <?php if ($errors): ?>
                            <div class="alert alert-danger">
                                <?php echo htmlspecialchars(implode(' ', $errors)); ?>
                            </div>
                        <?php endif; ?>

                        <form method="post" action="register.php">
                            <div class="mb-3">
                                <label class="form-label fw-bold" for="name">Full name</label>
                                <input class="form-control form-control-lg" id="name" name="name"
                                       value="<?php echo htmlspecialchars($name); ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold" for="email">Email</label>
                                <input type="email" class="form-control form-control-lg" id="email" name="email"
                                       value="<?php echo htmlspecialchars($email); ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold" for="role">I am a</label>
                                <select class="form-select form-select-lg" id="role" name="role">
                                    <option value="customer" <?php echo $role === 'customer' ? 'selected' : ''; ?>>Customer</option>
                                    <option value="professional" <?php echo $role === 'professional' ? 'selected' : ''; ?>>Professional</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold" for="password">Password</label>
                                <input type="password" class="form-control form-control-lg" id="password" name="password" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold" for="confirm">Confirm password</label>
                                <input type="password" class="form-control form-control-lg" id="confirm" name="confirm" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg w-100">Register</button>
                        </form>

                        <p class="mt-4 mb-0">Already have an account? <a href="login.php">Login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
