<?php
$currentPage = 'home';
$pageTitle = 'MilimuConnect Uganda';
require_once __DIR__ . '/includes/header.php';
?>

<section class="hero-section">
    <div class="container">
        <div class="row align-items-center min-vh-75">
            <div class="col-lg-6">
                <span class="badge bg-primary mb-3">Trusted Local Professionals</span>
                <h1 class="display-4 fw-bold">Find the Right Professional for Your Job</h1>
                <p class="lead text-muted mt-3">
                    MilimuConnect Uganda helps you find trusted and skilled professionals for the services you need, quickly and easily.
                </p>
                <div class="mt-4">
                    <a href="professionals.php" class="btn btn-primary btn-lg me-2">Find a Professional</a>
                    <a href="services.php" class="btn btn-outline-dark btn-lg">Explore Services</a>
                </div>
            </div>
            <div class="col-lg-6 text-center mt-5 mt-lg-0">
                <img src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&fit=crop&w=900&q=80"
                     class="img-fluid rounded-4 shadow" alt="Professionals working together">
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <span class="text-primary fw-bold">OUR SERVICES</span>
            <h2 class="fw-bold mt-2">What Service Do You Need?</h2>
            <p class="text-muted">Find skilled professionals for your everyday needs.</p>
        </div>
        <div class="row g-4">
            <?php foreach ($services as $service): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="card service-card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="service-icon mb-3"><img src=https://www.google.com/imgres?q=electrician%20jobs&imgurl=https%3A%2F%2Fwww.monitor.co.ug%2Fresource%2Fimage%2F3845224%2Fportrait_ratio1x1%2F1600%2F1600%2Fc2e658bf47f0494dcc67922f6a775900%2FdL%2Fhome003pix.jpg&imgrefurl=https%3A%2F%2Fwww.monitor.co.ug%2Fuganda%2Fnews%2Fnational%2Fera-to-certify-3-000-electricians-in-three-years--3845216&docid=Fq_Ysa2ppuvEXM&tbnid=JuuW3ccdoCDWCM&vet=12ahUKEwjn-8Ovk7SXAxUf_gIHHamFHp8QnPAOegQIThAA..i&w=1600&h=1600&hcb=2&ved=2ahUKEwjn-8Ovk7SXAxUf_gIHHamFHp8QnPAOegQIThAA></div>
                            <h5 class="card-title fw-bold"><?php echo htmlspecialchars($service['name']); ?></h5>
                            <p class="card-text text-muted"><?php echo htmlspecialchars($service['short']); ?></p>
                            <a href="professionals.php?service=<?php echo urlencode($service['name']); ?>" class="btn btn-outline-primary">
                                Find <?php echo htmlspecialchars($service['name']); ?>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <span class="text-primary fw-bold">TOP PROFESSIONALS</span>
            <h2 class="fw-bold mt-2">Meet Our Skilled Professionals</h2>
            <p class="text-muted">Connect with experienced professionals ready to help you.</p>
        </div>
        <div class="row g-4">
            <?php foreach (array_slice($professionals, 0, 3) as $pro) {
                include __DIR__ . '/includes/professional-card.php';
            } ?>
        </div>
        <div class="text-center mt-5">
            <a href="professionals.php" class="btn btn-outline-primary btn-lg">View All Professionals</a>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <span class="text-primary fw-bold">SIMPLE &amp; EASY</span>
            <h2 class="fw-bold mt-2">How MilimuConnect Works</h2>
            <p class="text-muted">Finding the right professional takes only three simple steps.</p>
        </div>
        <div class="row g-4 text-center">
            <div class="col-md-4">
                <div class="work-step p-4">
                    <div class="step-number">01</div>
                    <h4 class="fw-bold mt-4">Search</h4>
                    <p class="text-muted">Search for the service or professional you need from our categories.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="work-step p-4">
                    <div class="step-number">02</div>
                    <h4 class="fw-bold mt-4">Choose</h4>
                    <p class="text-muted">Compare profiles, ratings and services before making your choice.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="work-step p-4">
                    <div class="step-number">03</div>
                    <h4 class="fw-bold mt-4">Connect</h4>
                    <p class="text-muted">Contact your chosen professional and arrange the service you need.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-dark text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="text-center mb-4">
                    <span class="text-info fw-bold">FIND HELP NOW</span>
                    <h2 class="fw-bold mt-2">What Do You Need Help With?</h2>
                    <p class="text-light opacity-75">Search for a skilled professional near you.</p>
                </div>
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-4 p-md-5 text-dark">
                        <form id="serviceSearchForm">
                            <div class="row g-3">
                                <div class="col-md-5">
                                    <label for="service" class="form-label fw-bold">Select a Service</label>
                                    <select id="service" class="form-select form-select-lg" required>
                                        <option value="">Choose a service...</option>
                                        <?php foreach ($services as $service): ?>
                                            <option value="<?php echo htmlspecialchars($service['name']); ?>">
                                                <?php echo htmlspecialchars($service['name']); ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <label for="location" class="form-label fw-bold">Your Location</label>
                                    <input type="text" id="location" class="form-control form-control-lg" placeholder="e.g. Kampala" required>
                                </div>
                                <div class="col-md-2 d-flex align-items-end">
                                    <button type="submit" class="btn btn-primary btn-lg w-100">Search</button>
                                </div>
                            </div>
                        </form>
                        <div id="searchResult" class="mt-4 d-none">
                            <div class="alert alert-success mb-0">
                                <h5 class="fw-bold"><span id="resultService"></span> professionals found!</h5>
                                <p class="mb-3">Showing available professionals near <strong id="resultLocation"></strong>.</p>
                                <a id="resultLink" href="professionals.php" class="btn btn-success">View Professionals</a>
                                <button type="button" id="clearSearch" class="btn btn-outline-secondary ms-2">Clear</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <span class="text-primary fw-bold">CUSTOMER REVIEWS</span>
            <h2 class="fw-bold mt-2">What Our Customers Say</h2>
            <p class="text-muted">See what people think about professionals on MilimuConnect.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="mb-2 text-warning">⭐⭐⭐⭐⭐</div>
                        <p class="text-muted">"I found an electrician quickly and the work was completed professionally."</p>
                        <h6 class="fw-bold mb-0">Joseph</h6>
                        <small class="text-muted">Kampala</small>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="mb-2 text-warning">⭐⭐⭐⭐⭐</div>
                        <p class="text-muted">"The website made it easy for me to find a professional photographer for my event."</p>
                        <h6 class="fw-bold mb-0">Maria</h6>
                        <small class="text-muted">Wakiso</small>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="mb-2 text-warning">⭐⭐⭐⭐☆</div>
                        <p class="text-muted">"Very useful platform. I was able to compare different service providers."</p>
                        <h6 class="fw-bold mb-0">Daniel</h6>
                        <small class="text-muted">Entebbe</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#reviewModal">⭐ Leave a Review</button>
        </div>
    </div>
</section>

<div class="modal fade" id="reviewModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold">Leave a Review</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="reviewForm">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Your Name</label>
                        <input type="text" id="reviewName" class="form-control" placeholder="Enter your name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Your Rating</label>
                        <div id="ratingStars" class="fs-2">
                            <span class="rating-star" data-rating="1">☆</span>
                            <span class="rating-star" data-rating="2">☆</span>
                            <span class="rating-star" data-rating="3">☆</span>
                            <span class="rating-star" data-rating="4">☆</span>
                            <span class="rating-star" data-rating="5">☆</span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Your Review</label>
                        <textarea id="reviewText" class="form-control" rows="4" placeholder="Tell us about your experience..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Submit Review</button>
                </form>
            </div>
        </div>
    </div>
</div>

<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">How Can MilimuConnect Help You?</h2>
            <p class="lead">Whether you need a professional or offer a skill, we are here to connect you.</p>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card border-0 shadow h-100">
                    <div class="card-body text-center p-5">
                        <div class="fs-1 mb-3">🔍</div>
                        <h3 class="fw-bold text-dark">I Need a Professional</h3>
                        <p class="text-muted">Looking for an electrician, plumber, mechanic, photographer or another skilled worker?</p>
                        <a href="professionals.php" class="btn btn-primary btn-lg w-100">Find a Professional</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="card border-0 shadow h-100">
                    <div class="card-body text-center p-5">
                        <div class="fs-1 mb-3">👷</div>
                        <h3 class="fw-bold text-dark">I Offer a Service</h3>
                        <p class="text-muted">Are you a skilled professional? Join MilimuConnect and reach more customers.</p>
                        <button class="btn btn-outline-primary btn-lg w-100" data-bs-toggle="modal" data-bs-target="#professionalModal">
                            Join as a Professional
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="professionalModal" tabindex="-1" aria-labelledby="professionalModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h4 class="modal-title fw-bold" id="professionalModalLabel">Join MilimuConnect</h4>
                    <small class="text-muted">Create your professional profile</small>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-4">
                <form id="professionalForm">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="professionalName" class="form-label fw-bold">Full Name</label>
                            <input type="text" id="professionalName" class="form-control form-control-lg" required>
                        </div>
                        <div class="col-md-6">
                            <label for="professionalService" class="form-label fw-bold">What service do you offer?</label>
                            <select id="professionalService" class="form-select form-select-lg" required>
                                <option value="">Select your service</option>
                                <?php foreach ($services as $service): ?>
                                    <option><?php echo htmlspecialchars($service['name']); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="professionalLocation" class="form-label fw-bold">Where do you work?</label>
                            <input type="text" id="professionalLocation" class="form-control form-control-lg" placeholder="e.g. Kampala" required>
                        </div>
                        <div class="col-md-6">
                            <label for="professionalPhone" class="form-label fw-bold">Phone Number</label>
                            <input type="tel" id="professionalPhone" class="form-control form-control-lg" placeholder="e.g. 0768781773" required>
                        </div>
                        <div class="col-12">
                            <label for="professionalDescription" class="form-label fw-bold">Tell customers about your service</label>
                            <textarea id="professionalDescription" class="form-control" rows="4" required></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg w-100 mt-4">Create My Professional Profile</button>
                </form>
                <div id="professionalSuccess" class="alert alert-success mt-4 d-none">
                    <h5 class="fw-bold">Profile created successfully!</h5>
                    <p class="mb-0">Thank you for joining MilimuConnect. Your professional information has been received.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
