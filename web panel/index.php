<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PageTurners Club</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>

  <style>
    /* General styling for the Read button */
    .read-btn {
      display: inline-block;
      text-align: center;
      background-color: #631d04; /* Primary button color */
      color: #fff; /* White text */
      font-size: 16px; /* Adjust font size */
      font-weight: 600; /* Slightly bold text */
      padding: 10px 20px; /* Comfortable padding */
      border-radius: 8px; /* Rounded corners */
      text-decoration: none; /* Remove underline */
      transition: all 0.3s ease-in-out; /* Smooth hover effect */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Add subtle shadow */
      margin-top: 10px;
    }

    /* Hover effect */
    .read-btn:hover {
      background-color: #631d04; /* Darker shade on hover */
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3); /* Slightly deeper shadow */
      transform: translateY(-2px); /* Lift effect */
    }

    /* Active state for button */
    .read-btn:active {
      background-color: #631d04; /* Even darker shade */
      box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2); /* Lower shadow */
      transform: translateY(0); /* Neutralize lift */
    }

    /* For mobile responsiveness */
    @media (max-width: 768px) {
      .read-btn {
        font-size: 14px; /* Smaller font size for mobile */
        padding: 8px 16px; /* Adjust padding */
      }
    }
  </style>

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
        <a href="#" class="nav-link">Home</a>
        <a href="Include/about.html" class="nav-link">About Us</a>
        <a href="Include/blog.php" class="nav-link">Blog</a>
        <a href="Include/contact.php" class="nav-link">Contact</a>
        <a href="logout.php" class="nav-link">Logout</a>
      </nav>
    </div>
  </header>
  <Section class="hero">
    <div class="hero-content">
      <h1 id="dynamictext"></h1>
      <p>Find Your Favorite Book And Read It Here For Free</p>
      <button class="cta-button">Start Reading Now</button>
      <div class="interactive-quote">
        <p id="quote-text">"A room without books is like a body without a soul."</p>
        <span id="counter">Books Available: 1,235</span>
      </div>
    </div>
</Section>
  <div class="container">
    <section class="recommended">
      <h2 style="color: white;">Recommended</h2>
      <div class="book-list">
        <div class="book-card">
          <img src="Images/king.jpg">
          <div class="book-info">
            <h3>King of World</h3>
            <p>By Zoe Sabastan</p>
            <p>The world is full of kings, matter??</p>
          </div>
        </div>
        <div class="book-card">
          <img src="Images/Madame Bovary.jpg">
          <div class="book-info">
            <h3>Madame Bovary</h3>
            <p>By Gustave Flaubert</p>
            <p>Full of human nature and not again</p>
          </div>
        </div>
        <div class="book-card">
          <img src="Images/AnnaKarenina.jpg">
          <div class="book-info">
            <h3>Anna Karenina</h3>
            <p>By Leo Tolstoy</p>
            <p>From the love to the death .</p>
          </div>
        </div>
      </div>
    </section>
  <div class="container">
    <section class="recommended">
      <h2 style="color: white;">Our Best Books</h2>
      <div class="book-list">
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

        // Fetch Books
        $sql = "SELECT Name, Image, Description, BookPDF FROM Books";
        $result = $conn->query($sql);

        // Check if books exist
        if ($result->num_rows > 0) {
            
            // Loop through each book and display
            while ($row = $result->fetch_assoc()) {
                $imageData = base64_encode($row['Image']); // Convert binary image to base64
                $pdfData = $row['BookPDF']; // Convert binary PDF to base64

                echo '<div class="book-card">
                        <img src="data:image/jpeg;base64,' . $imageData . '" alt="' . htmlspecialchars($row['Name']) . '">
                        <div class="book-info">
                          <h3>' . htmlspecialchars($row['Name']) . '</h3>
                          <p>' . htmlspecialchars($row['Description']) . '</p>
                          <a href="../admin panel/books/' . $pdfData . '" target="_blank" class="btn read-btn">Read</a>
                        </div>
                      </div>';
            }
        } else {
            echo '<p>No books available.</p>';
        }

        $conn->close();
        ?>

      </div>
    </section>
    <section>
    <h2 class="popular-title" style="color: white;">This Week Special</h2>
    <div class="popular-grid">
      <div class="popular-book">
        <img src="Images/lalita.jpg">
        <div class="popular-info">
          <h3>Lolita</h3>
          <p>By Vladimir Nabokov</p>
          <p class="popular-rating">⭐⭐⭐⭐⭐</p>
        </div>
      </div>
      <div class="popular-book">
        <img src="Images/Middlemarch.jpg">
        <div class="popular-info">
          <h3>Middlemarch</h3>
          <p>By George Eliot</p>
          <p class="popular-rating">⭐⭐⭐⭐☆</p>
        </div>
      </div>
      <div class="popular-book">
        <img src="Images/Hamlet.jpg">
        <div class="popular-info">
          <h3>Hamlet</h3>
          <p>By William Shakespeare</p>
          <p class="popular-rating">⭐⭐⭐⭐⭐</p>
        </div>
      </div>
      <div class="popular-book">
        <img src="Images/Ulysses.jpg">
        <div class="popular-info">
          <h3>Ulysses</h3>
          <p>By James Joyce</p>
          <p class="popular-rating">⭐⭐⭐⭐☆</p>
        </div>
      </div>
    </div>

    
 
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
          <li><a href="#">Home</a></li>
          <li><a href="Include/about.html">About Us</a></li>
          <li><a href="Include/blog.php">Blog</a></li>
          <li><a href="Include/contact.php">Contact</a></li>
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

  <script src="script.js"></script>
</body>
</html>
