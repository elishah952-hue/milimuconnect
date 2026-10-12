<?php
$currentPage = 'professionals';
$pageTitle = 'Professionals | MilimuConnect';
require_once __DIR__ . '/includes/header.php';

$filterService = isset($_GET['service']) ? trim((string) $_GET['service']) : '';
$filterLocation = isset($_GET['location']) ? trim((string) $_GET['location']) : '';

$filtered = array_filter($professionals, function ($pro) use ($filterService, $filterLocation) {
    $ok = true;
    if ($filterService !== '') {
        $ok = $ok && (stripos($pro['service'], $filterService) !== false || stripos($filterService, $pro['service']) !== false);
    }
    if ($filterLocation !== '') {
        $ok = $ok && stripos($pro['location'], $filterLocation) !== false;
    }
    return $ok;
});
?>

<section class="page-hero">
    <div class="container">
        <h1 class="fw-bold">Professionals</h1>
        <p class="lead mb-0">Compare verified local experts and contact the right person for your job.</p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <form class="row g-3 mb-4" method="get" action="professionals.php">
            <div class="col-md-5">
                <label class="form-label fw-bold" for="filterService">Service</label>
                <select class="form-select" id="filterService" name="service">
                    <option value="">All services</option>
                    <?php foreach ($services as $service): ?>
                        <option value="<?php echo htmlspecialchars($service['name']); ?>" <?php echo $filterService === $service['name'] ? 'selected' : ''; ?>>
                            <?php echo htmlspecialchars($service['name']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-5">
                <label class="form-label fw-bold" for="filterLocation">Location</label>
                <input class="form-control" id="filterLocation" name="location" value="<?php echo htmlspecialchars($filterLocation); ?>" placeholder="e.g. Kampala">
            </div>
            <div class="col-md-2 d-flex align-items-end">
                <button class="btn btn-primary w-100" type="submit">Filter</button>
            </div>
        </form>

        <?php if (!$filtered): ?>
            <div class="alert alert-warning">No professionals matched those filters. Try another service or location.</div>
        <?php endif; ?>

        <div class="row g-4">
            <?php foreach ($filtered as $pro) {
                include __DIR__ . '/includes/professional-card.php';
            } ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
