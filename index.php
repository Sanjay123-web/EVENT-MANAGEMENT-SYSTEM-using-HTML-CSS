<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Event Management - Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
    h1{
        font-family: Italic;
        font-size: 60px;
    }
    header {
      background-color: #2c3e50;
      color: white;
      padding: 20px;
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
   
.main {
  display: flex;
  flex-wrap: wrap;
  padding: 20px;
 }
.middle-content, .main-content, .extra-content {
      background-color: white;
      padding: 20px;
      margin: 10px;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}
.middle-content {
      flex: 1 1 100%;
      background-color: #e6ebed;}
 .main-content {
    background-color: #cfd7da;
      flex: 3 1 30%;}

.extra-content {
      flex: 3 1 22%; }
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

.logo {
  width: 120px;
  height: 120px;
  border-radius: 2px;
}
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: center;
  width: 230px;
  flex: 1 1 255px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 370px;
  height: 260px;
  flex: 1 1 230px;
  padding: 10px;
}

div.desc {
  padding: 0px;
  text-align: center;
}
    footer {
      background-color: #2c3e50;
      color: white;
      text-align: center;
      padding: 15px;
      margin-top: 30px;
    }

    @media (max-width: 768px) {
      .main-content, .extra-content {
        flex: 1 1 100%;
      }
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
  <a href="login.php" >Login</a>
</nav>
<div class="main">
    <div class="container">
    <div class="middle-content">
      <h2>Welcome to Our Event Portal</h2>
      <p>Manage and explore events from a single platform. Join upcoming conferences, workshops, and tech expos.</p>
    </div>
    </div>
    <div class="gallery">
  <img src="birthday.jpg" alt="Party" width="" height="auto">
  <div class="desc">Party</div>
</div>

<div class="gallery">
    <img src="wedding.jpg" alt="Wedding" width="600" height="400">
  <div class="desc">Wedding</div>
</div>
<div class="gallery">
    <img src="corperate.jpeg" alt="Wedding" width="600" height="400"
   <div class="desc">Corprate Meeting</div>
</div>

    <div class="extra-content">
  <h2 style="text-align: center; color: #2c3e50;">Our History</h2><br><br>
  <p>
    EventSphere was founded in 2025 with a simple idea — to make event management smarter, smoother, and stress-free. 
    What began as a small team managing local college festivals and community events quickly grew into a scalable digital platform trusted by hundreds of event organizers.
  </p>
  </div>
    <div class="main-content">
  <h2 style="text-align: center; color: #2c3e50;">What We Offer</h2><br><br>
  <ul >
    <li><strong>Event Planning:</strong> Build and publish your event with customizable forms, ticketing options, and schedules.</li>
    <li><strong>Guest Management:</strong> Monitor RSVPs, send updates, and manage check-ins in real time.</li>
    <li><strong>Mobile Accessibility:</strong> Access and manage your events from any device, anywhere.</li>
    <li><strong>Secure Payments:</strong> Handle ticket sales and payments with integrated payment gateways.</li>
    <li><strong>Reports & Insights:</strong> Gain valuable feedback and analytics to improve your future events.</li>
  </ul>
</section>

    </div>

    <div class="extra-content">
      <h2 style="text-align: center; color: #2c3e50;">About Us</h2><br><br>
    At <strong>EventSphere</strong>, we believe that every event deserves to be extraordinary. 
    Founded in 2025, we planned and experienced. 
    Whether it's a wedding, corporate gathering, concert, or private party — our platform provides a seamless experience from registration to execution.
  </p>


    </div>
  </div>
    <footer>
    <p >&copy; Smart Events.          &#128241;91+ 98983 98983</p>  

  </footer>

</body>
</html>

