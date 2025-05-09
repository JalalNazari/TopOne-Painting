<?php session_start();
if (empty($_SESSION['csrf_token'])) {
  $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$currentPage = basename($_SERVER['PHP_SELF']);
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TopOne Painting | Contact</title>
    <meta name="description" content="Get in touch with TopOne Painting for your painting needs. Request a free quote or ask about our services today. We’re ready to help!">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "How soon can I get a quote?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "We usually respond within 24 hours and can provide a detailed quote within 1–2 business days after a site visit."
              }
            },
            {
              "@type": "Question",
              "name": "Do you do insurance painting jobs?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes! We work with most major insurers and provide high-quality repairs and repainting services for claims."
              }
            },
            {
              "@type": "Question",
              "name": "What areas do you service?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "We're based in Melbourne and proudly serve all of Victoria — including Geelong, Ballarat, Bendigo, and surrounding regions."
              }
            },
            {
              "@type": "Question",
              "name": "Can you help choose paint colours?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Absolutely! We offer free consultations and can guide you on colour selection to match your space and preferences."
              }
            }
          ]
        }
        </script>
        
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
          <button class="dropbtn">Services▼</button>
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
    <div class="about-hero">
        <div class="about-hero-content">
            <h1 class="hero-heading">Contact Us</h1>
            <p class="hero-subheading">
                Find out about the Ways to Get in Touch with TopOne Painting – Experts in Melbourne & Victoria
            </p>
            <div class="about-hero-links">
                <a href="index.php">Home</a>
                <p>></p>
                <a href="contact.php">Contact</a>
            </div>
        </div>
    </div>
    <div class="why-choose-us-container">
        <h2 class="title">Contact Our Friendly Team</h2>
        <p class="subtitle">Let us know how we can help.</p>
        
        <div class="features">
            <div class="feature">
                <div class="icon"><i class="fas fa-phone"></i></div>
                <h3>Call Us</h3>
                <p><a href="tel:0411338737">0411 338 737</a><br>
                Mon–Sat, 8am–6pm</p>
            </div>
        
            <div class="feature">
                <div class="icon"><i class="fas fa-envelope"></i></div>
                <h3>Email Us</h3>
                <p><a href="mailto:info@toponepainting.com.au">info@toponepainting.com.au</a><br>
                Response within 24 hours</p>
            </div>
        
            <div class="feature">
                <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                <h3>Our Service Area</h3>
                <p>Melbourne-based<br>Serving all of Victoria</p>
            </div>
        </div>
        
    </div>



    <div class="contact-container">
        <h2 class="title">Get in Touch with TopOne Painting</h2>
        <p class="subtitle">Have a question or ready to start your next painting project? Fill out the form below and we’ll get back to you within 24 hours.</p>
        <?php if (isset($_SESSION['success'])): ?>
            <div class="subtitle"><?= $_SESSION['success'] ?></div>
        <?php endif; ?>
       <div class="contact-form-img">
            <a id="contact-form-anchor"></a>
            <form action="send.php" method="post" class="contact-form" id="contactForm">
                <h3>Contact Us</h3>
                    <!-- Name Input -->
                    <input type="hidden" name="redirect_to" value="<?= basename($_SERVER['PHP_SELF']) ?>">
                    <label for="name" class="label">Name</label>
                    <input type="text" name="name" id="name" placeholder="Your Name"
                    value="<?= htmlspecialchars($_SESSION['old']['name'] ?? '') ?>">
                    <div class="error-message" id="nameError"><?= $_SESSION['errors']['name'] ?? '' ?></div>

                    <!-- Email Input -->
                    <label for="email" class="label">Email</label>
                    <input type="email" name="email" id="email" placeholder="Your Email"
                    value="<?= htmlspecialchars($_SESSION['old']['email'] ?? '') ?>">
                    <div class="error-message" id="emailError"><?= $_SESSION['errors']['email'] ?? '' ?></div>

                    <!-- Message Input -->
                    <label for="message" class="label">Message</label>
                    <textarea name="message" id="message" placeholder="Your Message"><?= htmlspecialchars($_SESSION['old']['message'] ?? '') ?></textarea>
                    <div class="error-message" id="messageError"><?= $_SESSION['errors']['message'] ?? '' ?></div>
                    <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
                    <button type="submit" id="submitBtn" name="send">Send Message</button>
                    <?php if (isset($_SESSION['errors']['csrf'])): ?>
                    <div class="error-message"><?= $_SESSION['errors']['csrf'] ?></div>
                <?php endif; ?>

                <?php if (isset($_SESSION['errors']['mail'])): ?>
                    <div class="error-message"><?= $_SESSION['errors']['mail'] ?></div>
                <?php endif; ?>
            </form>
            <?php
            // Clear session flash data
            unset($_SESSION['errors']);
            unset($_SESSION['old']);
            unset($_SESSION['success']);
            ?>
        </div>
    </div>
    <section class="faq-section">
      <h2 class="title">Frequently Asked Questions</h2>
    
      <div class="faq-item">
        <button class="faq-question">
          <span>How soon can I get a quote?</span>
          <i class="fas fa-plus icon"></i>
        </button>
        <div class="faq-answer">
          We usually respond within 24 hours and can provide a detailed quote within 1–2 business days after a site visit.
        </div>
      </div>
    
      <div class="faq-item">
        <button class="faq-question">
          <span>Do you do insurance painting jobs?</span>
          <i class="fas fa-plus icon"></i>
        </button>
        <div class="faq-answer">
          Yes! We work with most major insurers and provide high-quality repairs and repainting services for claims.
        </div>
      </div>
    
      <div class="faq-item">
        <button class="faq-question">
          <span>What areas do you service?</span>
          <i class="fas fa-plus icon"></i>
        </button>
        <div class="faq-answer">
          We're based in Melbourne and proudly serve all of Victoria — including Geelong, Ballarat, Bendigo, and surrounding regions.
        </div>
      </div>
    
      <div class="faq-item">
        <button class="faq-question">
          <span>Can you help choose paint colours?</span>
          <i class="fas fa-plus icon"></i>
        </button>
        <div class="faq-answer">
          Absolutely! We offer free consultations and can guide you on colour selection to match your space and preferences.
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-question">
          <span>How long does a standard painting job take?</span>
          <i class="fas fa-plus icon"></i>
        </button>
        <div class="faq-answer">
          Most residential painting projects take 1 to 5 days depending on size, surface prep, and weather. We’ll provide a timeline before we begin.
        </div>
      </div>
    
      <div class="faq-item">
        <button class="faq-question">
          <span>What prep work do I need to do before painters arrive?</span>
          <i class="fas fa-plus icon"></i>
        </button>
        <div class="faq-answer">
          We handle most of the prep! We just ask that you move small or fragile items and cover or remove valuable furniture where possible. We'll take care of the rest.
        </div>
      </div>
    </section> 
    <?php
include 'html/footer.php';
?>