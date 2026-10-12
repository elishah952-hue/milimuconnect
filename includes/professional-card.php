<?php
$pro = $pro ?? [];
?>
<div class="col-md-6 col-lg-4">
    <div class="card professional-card h-100 border-0 shadow-sm">
        <img src="<?php echo htmlspecialchars($pro['image']); ?>" class="card-img-top professional-image"
             alt="<?php echo htmlspecialchars($pro['name']); ?>">
        <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-start gap-2">
                <h5 class="fw-bold mb-0"><?php echo htmlspecialchars($pro['name']); ?></h5>
                <?php if (!empty($pro['verified'])): ?>
                    <span class="badge bg-success">Verified</span>
                <?php endif; ?>
            </div>
            <p class="text-primary mb-2"><?php echo htmlspecialchars($pro['service']); ?></p>
            <p class="text-muted small">📍 <?php echo htmlspecialchars($pro['location']); ?></p>
            <p class="card-text text-muted"><?php echo htmlspecialchars($pro['bio']); ?></p>
            <div class="mb-3">
                ⭐⭐⭐⭐⭐
                <small class="text-muted"><?php echo htmlspecialchars((string) $pro['rating']); ?> (<?php echo (int) $pro['reviews']; ?> reviews)</small>
            </div>
            <a href="professional-profile.php?id=<?php echo (int) $pro['id']; ?>" class="btn btn-primary w-100">View Profile</a>
        </div>
    </div>
</div>
