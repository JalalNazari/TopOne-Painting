<?php $pageTitle = "TopOne Painting | About";
$metaDescription = 'Learn more about TopOne Painting, a trusted painting company offering high-quality services for residential and commercial projects in Melbourne.';
include 'html/header.php';
?>
    <div class="about-hero">
        <div class="about-hero-content">
            <h1 class="hero-heading">About Us</h1>
            <p class="hero-subheading">
                Learn more about our expertise and values
                that make TopOne Painting stand out
            </p>
            <div class="about-hero-links">
                <a href="index.php">Home</a>
                <p>></p>
                <a href="about.php">About</a>
            </div>
        </div>
    </div>
    <div class="who-we-are">
        <div class="hero-text">
          <h2 class="hero-title">Who We Are</h2>
          <p class="who-we-are-p">At <strong>TopOne Painting</strong>, we’re more than just painters — we’re passionate professionals dedicated to bringing color, life, and character to every surface we touch. Since <strong>2005</strong>, we've proudly served <strong>homes and businesses across Melbourne and Victoria</strong>, delivering <strong>high-quality finishes</strong> with a personal touch. 

            Our journey began with a simple mission: to provide <strong>reliable</strong>, <strong>detail-driven painting services</strong> that exceed expectations every time.
            
            We're <strong>professional painters</strong> who blend <strong>experience</strong>, <strong>creativity</strong>, and <strong>care</strong> to transform spaces — a commitment we've upheld for over two decades. Whether it's a <strong>cozy home interior</strong>, a <strong>bold commercial facade</strong>, or a <strong>complex special-effects finish</strong>, TopOne is here to <strong>make your vision a reality</strong>.
            <br>
            <strong>Zach</strong> — Founder
          </p>
        </div>
        <div class="hero-image">
          <img src="Media/Top-One-painting-Painters.jpg" alt="Painter Painting">
        </div>
    </div>
    <?php include 'html/stats.php'; ?>

    <div class="areas-container">
        <h2 class="title">Our Painting Service Areas Across Victoria</h2>
        <p class="subtitle">Our expert painters delivers painting services in various parts of Victoria</p>
        <div class="areas-grid">
        <div class="area-card">
            <img src="Media/m-cbd.webp" alt="Pinting Services in Melbourne CBD" class="area-img" />
            <div class="area-details">
            <h3>Melbourne CBD</h3>
            <p>We proudly serve the vibrant community of Melbourne CBD with top-quality painting solutions.</p>
            </div>
        </div>
        <div class="area-card">
            <img src="Media/geelong-image-1.webp" alt="Painting Services in Geelong" class="area-img" />
            <div class="area-details">
            <h3>Geelong Region</h3>
            <p>Residential, commercial, and specialty finishes throughout Geelong Region and surrounds.</p>
            </div>
        </div>
        <div class="area-card">
            <img src="Media/balarat-2048x1152.webp" alt="Painting Services in Ballarat" class="area-img" />
            <div class="area-details">
            <h3>Ballarat & Surrounds</h3>
            <p>Get professional painting results from a local trusted name in Ballarat & Surrounds.</p>
            </div>
        </div>
        <div class="area-card">
            <img src="Media/mount-martha-beach_mp_r_supplied-MP-9114-1_1150x863.webp" alt="Painting Services in Mornington Peninsula" class="area-img" />
            <div class="area-details">
            <h3>Mornington Peninsula</h3>
            <p>Interior and exterior painting for homes and businesses across Mornington Peninsula.</p>
            </div>
        </div>
        </div>
    </div>
    
    <?php
    include 'html/cta.php';
include 'html/footer.php';
?>