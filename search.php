<?php
$currentPage = 'search';
$pageTitle = 'Search | MilimuConnect';
require_once __DIR__ . '/includes/header.php';

$query = isset($_GET['q']) ? trim((string) $_GET['q']) : '';
$results = search_directory($professionals, $services, $query);
?>

<section class="page-hero">
    <div class="container">
        <h1 class="fw-bold">Search</h1>
        <p class="lead mb-0">
            <?php if ($query === ''): ?>
                Type a service, name or town in the navbar search bar.
            <?php else: ?>
                Results for “<?php echo htmlspecialchars($query); ?>”
            <?php endif; ?>
        </p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <?php if ($query === ''): ?>
            <div class="alert alert-info">Enter a keyword such as electrician, Kampala, or a professional’s name.</div>
        <?php else: ?>
            <h2 class="h4 fw-bold mb-3">Services</h2>
            <?php if (!$results['services']): ?>
                <p class="text-muted">No matching services.</p>
            <?php else: ?>
                <div class="row g-4 mb-5">
                    <?php foreach ($results['services'] as $service): ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body p-4">
                                    <div class="service-icon mb-2"><?php echo $service['icon']; ?></div>
                                    <h3 class="h5 fw-bold"><?php echo htmlspecialchars($service['name']); ?></h3>
                                    <p class="text-muted"><?php echo htmlspecialchars($service['short']); ?></p>
                                    <a class="btn btn-outline-primary" href="professionals.php?service=<?php echo urlencode($service['name']); ?>">View professionals</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <h2 class="h4 fw-bold mb-3">Professionals</h2>
            <?php if (!$results['professionals']): ?>
                <p class="text-muted">No matching professionals.</p>
            <?php else: ?>
                <div class="row g-4">
                    <?php foreach ($results['professionals'] as $pro) {
                        include __DIR__ . '/includes/professional-card.php';
                    } ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
