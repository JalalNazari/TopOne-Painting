<?php session_start();
$currentPage = basename($_SERVER['PHP_SELF']);
$pageTitle = $pageTitle ?? 'TopOne Painting'; // fallback title
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$pageTitle = $pageTitle ?? 'TopOne Painting';
$metaDescription = $metaDescription ?? 'TopOne Painting provides expert painting services across Melbourne and Victoria. Request a free quote today.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZCNEF1F8QW"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-ZCNEF1F8QW');
    </script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="index, follow">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="description" content="<?= htmlspecialchars($metaDescription) ?>">
    <!-- Open Graph -->
    <meta property="og:title" content="TopOne Painting | Expert Painters in Melbourne">
  <meta property="og:description" content="Trusted painting services for homes and businesses across Victoria. Get a free quote today!">
  <meta property="og:image" content="https://toponepainting.com.au/Media/Painting-roll.jpg">
  <meta property="og:url" content="https://toponepainting.com.au/">
  <meta property="og:type" content="website">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="TopOne Painting | Expert Painters in Melbourne">
  <meta name="twitter:description" content="Trusted painting services across Victoria. Fast quotes, clean results.">
  <meta name="twitter:image" content="https://toponepainting.com.au/Media/Painting-roll.jpg">
  <link rel="icon" href="Media/TopOne-Logo.png" type="image/x-icon">
  <link rel="stylesheet" href="CSS/style.css" />
</head>
<body>
  <nav class="top-bar">  
    <div class="contact-info">
      <svg width="24" height="24" fill="#F0BB78" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path d="M6.62 10.79a15.053 15.053 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.01-.24c1.12.37 2.33.57 3.58.57a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1c-9.39 0-17-7.61-17-17a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.2 2.46.57 3.58a1 1 0 0 1-.24 1.01l-2.2 2.2z"/>
      </svg>
      <a href="tel:0411338737">0411 338 737</a>
    </div>
    <a href="contact.php" class="button">Fast Free Quote</a>
  </nav>

  <nav class="navbar">
    <a href="index.php" style="text-decoration: none;">
      <div class="navbar-left">
        <img src="Media/TopOne-Logo.png" alt="TopOne Logo" class="logo-img" />
        <span class="brand-name">TopOne</span>
      </div>
    </a>

    <div class="hamburger" id="hamburger" onclick="toggleMenu()">
      <span></span><span></span><span></span>
    </div>

    <div class="navbar-links" id="navbar-links">
      <div class="navbar-center">
        <a class="<?= $currentPage === 'index.php' ? 'active' : '' ?>" href="index.php">Home</a>
        <a class="<?= $currentPage === 'about.php' ? 'active' : '' ?>" href="about.php">About</a>
        <a class="<?= $currentPage === 'contact.php' ? 'active' : '' ?>" href="contact.php">Contact</a>
        <div class="dropdown">
        <?php
$servicePages = [
  'interior-painting.php',
  'exterior-painting.php',
  'special-effects-painting.php',
  'wallpaper-installation.php',
  'floor-coating.php',
  'insurance-painting.php'
];

$isServiceActive = in_array($currentPage, $servicePages);
?>

<button class="dropbtn <?= $isServiceActive ? 'active' : '' ?>">Services▼</button>
<div class="dropdown-content">
  <a class="<?= $currentPage === 'interior-painting.php' ? 'active' : '' ?>" href="interior-painting.php">Interior Painting</a>
  <a class="<?= $currentPage === 'exterior-painting.php' ? 'active' : '' ?>" href="exterior-painting.php">Exterior Painting</a>
  <a class="<?= $currentPage === 'special-effects-painting.php' ? 'active' : '' ?>" href="special-effects-painting.php">Special Effects</a>
  <a class="<?= $currentPage === 'wallpaper-installation.php' ? 'active' : '' ?>" href="wallpaper-installation.php">Wallpaper Installation</a>
  <a class="<?= $currentPage === 'floor-coating.php' ? 'active' : '' ?>" href="floor-coating.php">Floor Coating</a>
  <a class="<?= $currentPage === 'insurance-painting.php' ? 'active' : '' ?>" href="insurance-painting.php">Insurance Painting</a>
</div>

        </div>
      </div>
      <div class="navbar-right">
        <div class="contact-info">
          <svg width="24" height="24" fill="#F0BB78" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M6.62 10.79a15.053 15.053 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.01-.24c1.12.37 2.33.57 3.58.57a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1c-9.39 0-17-7.61-17-17a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.2 2.46.57 3.58a1 1 0 0 1-.24 1.01l-2.2 2.2z"/>
          </svg>
          <a href="tel:0411338737">0411 338 737</a>
        </div>
        <a href="contact.php" class="button">Fast Free Quote</a>
      </div>
    </div>
  </nav>

  <div class="navbar-toggle" id="navbar-toggle">
    <a class="<?= $currentPage === 'index.php' ? 'active' : '' ?>" href="index.php">Home</a>
    <a class="<?= $currentPage === 'about.php' ? 'active' : '' ?>" href="about.php">About</a>
    <a class="<?= $currentPage === 'contact.php' ? 'active' : '' ?>" href="contact.php">Contact</a>
    <div class="mobile-dropdown">
      <button onclick="toggleMobileDropdown()">Services▼</button>
      <div id="mobileDropdownContent" class="mobile-dropdown-content">
  <a class="<?= $currentPage === 'interior-painting.php' ? 'active' : '' ?>" href="interior-painting.php">Interior Painting</a>
  <a class="<?= $currentPage === 'exterior-painting.php' ? 'active' : '' ?>" href="exterior-painting.php">Exterior Painting</a>
  <a class="<?= $currentPage === 'special-effects-painting.php' ? 'active' : '' ?>" href="special-effects-painting.php">Special Effects</a>
  <a class="<?= $currentPage === 'wallpaper-installation.php' ? 'active' : '' ?>" href="wallpaper-installation.php">Wallpaper Installation</a>
  <a class="<?= $currentPage === 'floor-coating.php' ? 'active' : '' ?>" href="floor-coating.php">Floor Coating</a>
  <a class="<?= $currentPage === 'insurance-painting.php' ? 'active' : '' ?>" href="insurance-painting.php">Insurance Painting</a>
</div>

    </div>
  </div>
