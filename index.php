<?php $pageTitle = "TopOne Painting | Home";
$metaDescription = 'TopOne Painting offers professional painting services for homes and businesses across Melbourne and Victoria. Get your free quote today!';
include 'html/header.php';
?>
  <!-- Hero Section -->

    <div class="hero-content">
      <div class="hero-text">
        <h1 class="hero-title">TopOne Painting</h1>
        <p class="hero-subtitle">Professional Residential and Commercial Painting Services in Melbourne & Victoria</p>
        <a href="contact.html" class="button">Get in Touch</a>
      </div>
      <div class="hero-image">
        <img src="Media/Painting-roll.jpg" alt="Painting roller">
      </div>
    </div>
    <div class="services-container">
        <h2 class="title">Our Painting Services</h2>
        <p class="subtitle">We offer a comprehensive range of painting solutions tailored to meet your needs.</p>
        <div class="services-grid">
            <a href="interior-painting.html">
                <div class="service-card">
                    <div class="image-container">
                        <img src="Media/Interior-Painting-Before.jpg" alt="Interior Painting Services">
                        <div class="service-name">Interior Painting</div>
                    </div>
                    <div class="service-details">
                        <p>Enhance your home's interior with our expert painting services, delivering flawless finishes and vibrant colours.</p>
                    </div>
                </div>
            </a>
            <a href="exterior-painting.html">
                <div class="service-card">
                    <div class="image-container">
                        <img src="Media/Exterior-Home-Painting-After.jpg" alt="Exterior Painting Services">
                        <div class="service-name">Exterior Painting</div>
                    </div>
                    <div class="service-details">
                        <p>Protect and beautify your property's exterior with durable and weather-resistant paint solutions.</p>
                    </div>
                </div>
            </a>
            <a href="special-effects-painting.html">
                <div class="service-card">
                    <div class="image-container">
                        <img src="Media/Special-Effects-Painting.jpg" alt="Special Effects Painting">
                        <div class="service-name">Special Effects</div>
                    </div>
                    <div class="service-details">
                        <p>Add unique textures and finishes to your walls with our special effects painting techniques</p>
                    </div>
                </div>
            </a>
            <a href="wallpaper-installation.html">
                <div class="service-card">
                    <div class="image-container">
                        <img src="Media/Wallpaper-Home-Wall.jpg" alt="Wallpaper Installation Sevices">
                        <div class="service-name">Wallpaper Installation</div>
                    </div>
                    <div class="service-details">
                        <p>Choose from a wide range of wallpapers to add character and style to your rooms.</p>
                    </div>
                </div>
            </a>
            <a href="floor-coating.html">
                <div class="service-card">
                    <div class="image-container">
                        <img src="Media/Floor-Coating.jpg" alt="Floor Coating Services">
                        <div class="service-name">Floor Coating</div>
                    </div>
                    <div class="service-details">
                        <p>Durable and attractive floor coating solutions for garages, basements, and commercial spaces.</p>
                    </div>
                </div>
            </a>
            <a href="insurance-painting.html">
                <div class="service-card">
                    <div class="image-container">
                        <img src="Media/Insurance-work-painting.jpg" alt="Insurance Work Painting Services">
                        <div class="service-name">Insurance Painting</div>
                    </div>
                    <div class="service-details">
                        <p>Professional restoration and repainting for insurance claims, with minimal disruption and maximum care.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>


    <div class="projects-container">
        <h2 class="title">Recent Projects</h2>
        <p class="subtitle"> Explore our portfolio showcasing our commitment to excellence in various locations across Victoria.</p>
        <div class="projects">  
            <!-- First project with image comparison slider -->
            <div class="project">
                <div class="wrapper">
                    <div class="images">
                        <div class="img-1" style="background-image: url('Media/Pool-Painting-After.jpg');" alt="Pool Painting Project in Melbourne"></div>
                        <div class="img-2" style="background-image: url('Media/Pool-Painting-Before.jpg');" alt="Pool Painting Project in Melbourne"></div>
                        <div class="overlay"><span>After</span></div>
                    </div>
                    <div class="slider">
                        <div class="drag-line">
                            <span></span>
                        </div>
                        <input type="range" min="0" max="100" value="50">
                    </div>
                </div>
            </div>
            
            <!-- Second project with image comparison slider -->
            <div class="project">
                <div class="wrapper">
                    <div class="images">
                        <div class="img-1" style="background-image: url('Media/Exterior-Painting-After.jpg');" alt="Exterior House Painting in Geelong"></div>
                        <div class="img-2" style="background-image: url('Media/Exterior-Painting-Before.jpg');" alt="Exterior House Painting in Geelong"></div>
                        <div class="overlay"><span>After</span></div>
                    </div>
                    <div class="slider">
                        <div class="drag-line">
                            <span></span>
                        </div>
                        <input type="range" min="0" max="100" value="50">
                    </div>
                </div>
            </div>
            
            <!-- Third project with image comparison slider -->
            <div class="project">
                <div class="wrapper">
                    <div class="images">
                        <div class="img-1" style="background-image: url('Media/Cabinet-Painting-After.jpg');" alt="Cabinet Painting Project in Victoria"></div>
                        <div class="img-2" style="background-image: url('Media/Cabinet-Painting-Before.jpg');" alt="Cabinet Painting Project in Victoria"></div>
                        <div class="overlay"><span>After</span></div>
                    </div>
                    <div class="slider">
                        <div class="drag-line">
                            <span></span>
                        </div>
                        <input type="range" min="0" max="100" value="50">
                    </div>
                </div>
            </div>
        </div>
    </div>   

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

          

    <div class="why-choose-us-container">
        <h2 class="title">Why Choose Us?</h2>
        <p class="subtitle">We bring expertise, quality, and commitment to every painting project.</p>
        
        <div class="features">
            <div class="feature">
                <div class="icon">🎨</div>
                <h3>Professional Quality</h3>
                <p>We use top-quality paints and materials for a long-lasting finish.</p>
            </div>

            <div class="feature">
                <div class="icon">⏳</div>
                <h3>On-Time Completion</h3>
                <p>We respect your time and ensure timely project delivery.</p>
            </div>

            <div class="feature">
                <div class="icon">💰</div>
                <h3>Affordable Pricing</h3>
                <p>Get premium painting services at competitive prices.</p>
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
<?php
include 'html/footer.php';
?>