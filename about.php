<?php
$currentPage = 'about';
$pageTitle = 'About | MilimuConnect';
require_once __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
    <div class="container">
        <h1 class="fw-bold">About MilimuConnect</h1>
        <p class="lead mb-0">A local platform that connects customers with trusted skilled professionals.</p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h2 class="fw-bold">Our mission</h2>
                <p class="text-muted">
                    MilimuConnect was built to make it easier to find electricians, plumbers, mechanics,
                    photographers, designers and beauty professionals in Uganda. We help customers compare
                    people nearby, and we help skilled workers reach more clients.
                </p>
                <p class="text-muted mb-0">
                    The platform is designed to be simple on phones and computers: search, choose a professional,
                    then get in touch.
                </p>
            </div>
            <div class="col-lg-6">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=900&q=80"
                     class="img-fluid rounded-4 shadow" alt="Team collaborating">
            </div>
        </div>

        <div class="row g-4 mt-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="h5 fw-bold">Local first</h3>
                        <p class="text-muted mb-0">We focus on professionals working in Kampala and other Ugandan towns.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="h5 fw-bold">Easy to use</h3>
                        <p class="text-muted mb-0">A clear navbar, search, and short profiles so you can decide quickly.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="h5 fw-bold">Built for both sides</h3>
                        <p class="text-muted mb-0">Customers find help. Professionals register and grow their work.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
