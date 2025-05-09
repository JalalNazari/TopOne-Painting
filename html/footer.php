<footer>
      <a href="index.html" style="text-decoration: none;">
          <div class=" logo">
              <img src="Media/TopOne-Logo.png" alt="TopOne Logo">
              <h3 class="brand-name">TopOne</h3>
              <p style="color:#F0BB78;">ABN: 54 461 065 616 | License No: 278720C</p>
              <a href="https://www.vecteezy.com/free-photos/paint-roller" target="_blank" rel="noopener" style="color: #F0BB78; font-size: 0.75rem;">Paint Roller Stock photos by Vecteezy</a>
          </div>
      </a>
    <div class="footer-section callback" id="footer-form-anchor">
        <h3>Request A Callback</h3>
        <form action="send.php" method="POST">
            <input type="hidden" name="form_type" value="callback">
            <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?? '' ?>">
            <input type="hidden" name="redirect_to" value="<?= basename($_SERVER['PHP_SELF']) ?>">
            <input type="text" name="name" placeholder="Your Name" 
            value="<?= htmlspecialchars($_SESSION['oldd']['name'] ?? '') ?>">
            <?php if (!empty($_SESSION['errorss']['name'])): ?>
                <div class="error"><?= $_SESSION['errorss']['name'] ?></div>
            <?php endif; ?>
            <input type="tel" name="phone" placeholder="Contact Number" 
            value="<?= htmlspecialchars($_SESSION['oldd']['phone'] ?? '') ?>">
            <?php if (!empty($_SESSION['errorss']['phone'])): ?>
                <div class="error"><?= $_SESSION['errorss']['phone'] ?></div>
            <?php endif; ?>

            <button type="submit" id="callbackBtn">Send Request</button>
        </form>
        <?php if (!empty($_SESSION['successs'])): ?>
            <div class="successs"><?= $_SESSION['successs'] ?></div>
        <?php endif; ?>

        <?php
            unset($_SESSION['errorss']);
            unset($_SESSION['oldd']);
            unset($_SESSION['successs']);
        ?>
    </div>
      <div class="footer-section">
          <h3>Quick Links</h3>
          <ul>
              <li><a href="about.php">Who We Are</a></li>
              <li><a href="index.php">Top Painting Services</a></li>
              <li><a href="contact.php">Book Painting Services</a></li>
              <li><a href="contact.php">Paint Your Property</a></li>
              <li><a href="contact.php">FAQs</a></li>
          </ul>
      </div>
      
      <div class="footer-section">
          <h3>Get In Touch</h3>
          <p class="footer-number"><a href="tel:0470775198">0470 775 198</a></p>
          <p>Business Hours: 8:00 AM – 6:00 PM<br>6 Days a Week</p>
      </div>
      
      <div class="footer-bottom">
          <p>© 2025 TopOne Painting | Powered by</p>
          <a href="jalalnazari@icloud.com">Jalal Nazari</a>
      </div>
  </footer>
    <script src="JS/script.js"></script>
</body>
</html>