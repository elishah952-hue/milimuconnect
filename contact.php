<?php
$currentPage = 'contact';
$pageTitle = 'Contact | MilimuConnect';
require_once __DIR__ . '/includes/header.php';

$proId = isset($_GET['pro']) ? (int) $_GET['pro'] : 0;
$selectedPro = $proId ? find_professional($professionals, $proId) : null;
$subjectPrefill = $selectedPro ? 'Inquiry for ' . $selectedPro['name'] : '';
?>

<section class="page-hero">
    <div class="container">
        <h1 class="fw-bold">Contact Us</h1>
        <p class="lead mb-0">Send a message and we will help you connect with the right professional.</p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-5">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <h2 class="h4 fw-bold">Reach MilimuConnect</h2>
                        <p class="text-muted">Kampala, Uganda</p>
                        <p class="mb-2">📞 +256 768781773</p>
                        <p class="mb-2">✉️ elishah952@gmail.com</p>
                        <?php if ($selectedPro): ?>
                            <div class="alert alert-info mt-4 mb-0">
                                You are contacting us about <strong><?php echo htmlspecialchars($selectedPro['name']); ?></strong>
                                (<?php echo htmlspecialchars($selectedPro['service']); ?>).
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4 p-md-5">
                        <form id="contactForm">
                            <div class="mb-3">
                                <label class="form-label fw-bold" for="contactName">Full name</label>
                                <input class="form-control" id="contactName" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold" for="contactEmail">Email</label>
                                <input type="email" class="form-control" id="contactEmail" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold" for="contactSubject">Subject</label>
                                <input class="form-control" id="contactSubject" value="<?php echo htmlspecialchars($subjectPrefill); ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold" for="contactMessage">Message</label>
                                <textarea class="form-control" id="contactMessage" rows="5" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">Send message</button>
                        </form>
                        <div id="contactSuccess" class="alert alert-success d-none mb-0">
                            Thank you. Your message has been received and we will reply soon.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
