<?php
require_once __DIR__ . '/auth.php';
require_once __DIR__ . '/data.php';

$currentPage = $currentPage ?? '';
$pageTitle = $pageTitle ?? 'MilimuConnect Uganda';
$user = current_user();
$searchQuery = isset($_GET['q']) ? trim((string) $_GET['q']) : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold fs-4" href="index.php">
            Milimu<span class="text-primary">Connect</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
            <form class="navbar-search d-flex mx-lg-3 my-3 my-lg-0 w-100 w-lg-auto" action="search.php" method="get" role="search">
                <input class="form-control" type="search" name="q" placeholder="Search services or professionals"
                       value="<?php echo htmlspecialchars($searchQuery); ?>" aria-label="Search">
                <button class="btn btn-primary ms-2" type="submit">Search</button>
            </form>

            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link px-lg-3 <?php echo $currentPage === 'home' ? 'active' : ''; ?>" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-lg-3 <?php echo $currentPage === 'services' ? 'active' : ''; ?>" href="services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-lg-3 <?php echo $currentPage === 'professionals' ? 'active' : ''; ?>" href="professionals.php">Professionals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-lg-3 <?php echo $currentPage === 'about' ? 'active' : ''; ?>" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-lg-3 <?php echo $currentPage === 'contact' ? 'active' : ''; ?>" href="contact.php">Contact</a>
                </li>

                <?php if ($user): ?>
                    <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                        <span class="navbar-text text-white me-lg-2 d-block d-lg-inline">
                            Hi, <?php echo htmlspecialchars($user['name']); ?>
                        </span>
                    </li>
                    <li class="nav-item mt-2 mt-lg-0">
                        <a href="logout.php" class="btn btn-outline-light px-4 rounded-pill">Logout</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                        <a href="login.php" class="btn btn-outline-light px-4 rounded-pill">Login</a>
                    </li>
                    <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                        <a href="register.php" class="btn btn-primary px-4 rounded-pill">Register</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
