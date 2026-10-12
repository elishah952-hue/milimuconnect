<?php
$currentPage = 'professionals';
$pageTitle = 'Professional Profile | MilimuConnect';
require_once __DIR__ . '/includes/header.php';

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$pro = find_professional($professionals, $id);
?>

<section class="page-hero">
    <div class="container">
        <h1 class="fw-bold"><?php echo $pro ? htmlspecialchars($pro['name']) : 'Profile not found'; ?></h1>
        <p class="lead mb-0"><?php echo $pro ? htmlspecialchars($pro['service'] . ' · ' . $pro['location']) : 'This professional does not exist.'; ?></p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <?php if (!$pro): ?>
            <div class="alert alert-danger">We could not find that profile.</div>
            <a href="professionals.php" class="btn btn-primary">Back to professionals</a>
        <?php else: ?>
            <div class="row g-4">
                <div class="col-lg-5">
                    <img src="<?php echo htmlspecialchars($pro['image']); ?>" class="img-fluid rounded-4 shadow" alt="<?php echo htmlspecialchars($pro['name']); ?>">
                </div>
                <div class="col-lg-7">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4 p-md-5">
                            <?php if (!empty($pro['verified'])): ?>
                                <span class="badge bg-success mb-3">Verified</span>
                            <?php endif; ?>
                            <h2 class="fw-bold"><?php echo htmlspecialchars($pro['name']); ?></h2>
                            <p class="text-primary fw-semibold"><?php echo htmlspecialchars($pro['service']); ?></p>
                            <p class="text-muted"><?php echo htmlspecialchars($pro['bio']); ?></p>
                            <ul class="list-unstyled">
                                <li class="mb-2">📍 <?php echo htmlspecialchars($pro['location']); ?></li>
                                <li class="mb-2">⭐ <?php echo htmlspecialchars((string) $pro['rating']); ?> (<?php echo (int) $pro['reviews']; ?> reviews)</li>
                                <li class="mb-2">🛠️ <?php echo (int) $pro['experience']; ?> years of experience</li>
                                <li class="mb-2">📞 <?php echo htmlspecialchars($pro['phone']); ?></li>
                            </ul>
                            <a href="contact.php?pro=<?php echo (int) $pro['id']; ?>" class="btn btn-primary btn-lg">Contact this professional</a>
                            <a href="professionals.php" class="btn btn-outline-secondary btn-lg">All professionals</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
