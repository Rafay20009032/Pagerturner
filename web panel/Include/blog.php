<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PageTurners Club</title>
  <link rel="stylesheet" href="../style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>

</head>
<body>
  <header class="header">
    <div class="navbar">
      <div class="logo-section">
        <span class="logo">PageTurners Club</span>
        <img src="https://img.icons8.com/material-outlined/24/000000/shopping-cart--v1.png" alt="Cart Icon" class="cart-icon">

      </div>
      <div class="burger-menu" id="burger-menu">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav class="nav-links" id="nav-links">
        <a href="../index.html" class="nav-link">Home</a>
        <a href="about.html" class="nav-link">About Us</a>
        <a href="blog.php" class="nav-link">Blog</a>
        <a href="contact.php" class="nav-link">Contact</a>
        <a href="../login.html" class="nav-link">Logout</a>
      </nav>
    </div>
  </header>
<section class="blog">
    <div class="blogimage">
      <img src="../Images/blog.jpg">
      <div class="overlay">
        <h1>Books Blog</h1>
        <p>Your newest literary companions</p>
      </div>
    </div>
    <div class="blogcontent">
      <h2>Discover 15 New Authors Joining Our Literary Network</h2>
      <p>We are thrilled to introduce 15 remarkable authors who have joined our literary network. From gripping novels to inspiring non-fiction, these authors bring a diverse range of voices and stories. Stay tuned as we spotlight their latest works and upcoming releases!</p>
      <a href="#" class="button">Read More</a>
    </div>
  </section>

  <section class="blogg">
  <?php
    // Database Connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "page_turner_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch Blogs
    $sql = "SELECT Name, Image, Date, Blog FROM Blogs ORDER BY Date DESC";
    $result = $conn->query($sql);

    // Check if blogs exist
    if ($result->num_rows > 0) {
        // Loop through blogs
        while ($row = $result->fetch_assoc()) {
            // Display blog
            echo '<div class="blog1">';
            // Convert binary data to base64 for image rendering
            $imageData = base64_encode($row['Image']);
            echo '<img src="data:image/jpeg;base64,' . $imageData . '" alt="' . htmlspecialchars($row['Name']) . '">';
            echo '<div class="blog1content">';
            echo '<h2>' . htmlspecialchars($row['Name']) . '</h2>';
            echo '<p>' . date("F j, Y", strtotime($row['Date'])) . '</p>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo '<p>No blogs found.</p>';
    }

    // Close connection
    $conn->close();
    ?>

    
  </section>
  
  <footer class="interactive-footer">
    <div class="footer-container">
      <!-- Branding Section -->
      <div class="footer-branding">
        <h2>PageTurners Club</h2>
        <p>Discover the best books and connect with fellow readers worldwide.</p>
      </div>

           <div class="footer-links">
        <h3>Quick Links</h3>
        <ul>
          <li><a href="../index.html">Home</a></li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </div>

   
      <div class="footer-social">
        <h3>Follow Us</h3>
        <div class="social-icons">
          <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
          <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2024 PageTurners Club. All Rights Reserved.</p>
    </div>
  </footer>

  <script src="../script.js"></script>
</body>
</html>
