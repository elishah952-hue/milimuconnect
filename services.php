<?php
$currentPage = 'services';
$pageTitle = 'Services | MilimuConnect';
require_once __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
    <div class="container">
        <h1 class="fw-bold">Our Services</h1>
        <p class="lead mb-0">Browse skilled trades and creative services available across Uganda.</p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <?php foreach ($services as $service): ?>
                <div class="col-md-6 col-xl-4">
                    <div class="card service-card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="service-icon mb-3"><?php echo $service['icon']; ?></div>
                            <h3 class="h4 fw-bold"><?php echo htmlspecialchars($service['name']); ?></h3>
                            <p class="text-muted"><?php echo htmlspecialchars($service['desc']); ?></p>
                            <a href="professionals.php?service=<?php echo urlencode($service['name']); ?>" class="btn btn-primary">
                                View professionals
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
