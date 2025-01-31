<?php
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Other Page</title>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css"> 

  
  <style>
    
    body {
      background-color: #f0f4f7;
    }
  </style>
</head>

<body>
  
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Shivansh Yadav</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link nav-hover" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-hover" href="other_page.php">Other Page</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-hover" href="#">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page content -->
  <section id="home">
    <div class="container text-center">
      <h1>Welcome to the Other Page</h1>
      <p>This is the content of your new page. Feel free to add more details here.</p>
    </div>
  </section>

  <!-- Scroll to top button -->
  <button id="scrollBtn" style="display: none;">Scroll to Top</button>

  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const scrollBtn = document.getElementById("scrollBtn");

      // Function to check if the user has scrolled enough to display the button
      function toggleScrollBtn() {
        if (
          document.body.scrollTop > 20 ||
          document.documentElement.scrollTop > 20
        ) {
          scrollBtn.style.display = "block";
        } else {
          scrollBtn.style.display = "none";
        }
      }

      // Function to scroll to the top of the page
      function scrollToTop() {
        window.scrollTo({
          top: 0
        });
      }

      // Add scroll event listener to the window
      window.addEventListener("scroll", toggleScrollBtn);

      // Add click event listener to the scroll button
      scrollBtn.addEventListener("click", scrollToTop);

      // Initially hide the scroll button on page load
      toggleScrollBtn();
    });
  </script>
</body>

</html>
