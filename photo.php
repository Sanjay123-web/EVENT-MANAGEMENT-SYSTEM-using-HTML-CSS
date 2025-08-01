<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Smart Events</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f7fa;
      color: #333;
    }
    h1 {
      font-family: Italic;
      font-size: 60px;
    }
    header {
      background-color: #2c3e50;
      color: white;
      padding: 20px;
    }
    .header-container {
      display: flex;
      align-items: center;
      justify-content: space-between;
      position: relative;
    }
    .header-title {
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      text-align: center;
    }
    nav {
      background-color: #34495e;
      overflow: hidden;
    }
    nav a {
      float: left;
      display: block;
      color: #ecf0f1;
      text-align: center;
      padding: 14px 20px;
      text-decoration: none;
    }
    nav a:hover {
      background-color: #1abc9c;
      color: white;
    }
    footer {
      background-color: #2c3e50;
      color: white;
      text-align: center;
      padding: 15px;
      margin-top: 30px;
    }
    .logo {
      width: 120px;
      height: 120px;
      border-radius: 2px;
    }
    .carousel-img {
      height: 400px;
      object-fit: cover;
    }
    .carousel-container {
      margin: 40px auto;
      max-width: 900px;
    }
  </style>
</head>
<body>
  <header>
    <div class="header-container">
      <div class="header-title">
        <h1>Smart Events</h1>
        <p>Your One-Stop Solution for Events</p>
      </div>
      <img src="logo1.gif" alt="Logo" class="logo">
      <img src="logo2.gif" alt="Logo" class="logo">
    </div>
  </header>
  <nav>
    <a href="index.php">Home</a>
    <a href="photo.php">Gallery</a>
    <a href="contact.php">Contact</a>
    <a href="login.php">Login</a>
  </nav>
  <div class="carousel-container">
    <div id="eventCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="p1.jpg" class="d-block w-100 carousel-img" alt="Slide 1">
        </div>
        <div class="carousel-item">
          <img src="p2.jpg" class="d-block w-100 carousel-img" alt="Slide 2">
        </div>
        <div class="carousel-item">
          <img src="p3.jpg" class="d-block w-100 carousel-img" alt="Slide 3">
        </div>
        <div class="carousel-item">
          <img src="p4.jpg" class="d-block w-100 carousel-img" alt="Slide 4">
        </div>
        <div class="carousel-item">
          <img src="p5.jpg" class="d-block w-100 carousel-img" alt="Slide 5">
        </div>
        <div class="carousel-item">
          <img src="p6.jpg" class="d-block w-100 carousel-img" alt="Slide 6">
        </div>
        <div class="carousel-item">
          <img src="p7.jpg" class="d-block w-100 carousel-img" alt="Slide 7">
        </div></div>
      <button class="carousel-control-prev" type="button" data-bs-target="#eventCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#eventCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <footer>
    <p>&copy; Smart Events. &#128241; 91+ 98983 98983</p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
