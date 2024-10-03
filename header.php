<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BINDHU AGRO</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #fff; /* White background for the entire page */
    }
    .navbar {
      background-color: transparent; /* No default background */
    }
    .navbar-brand img {
      height: 90px; /* Adjust height */
      width: 200px; /* Set a responsive width for the logo */
      max-width: 100%; /* Ensures it fits within its container */
    }
    .nav-link {
      color: #000 !important; /* Black text for normal state */
      font-size: 18px;
    }
    .nav-link:hover {
      background-color: #28a745; /* Green background on hover */
      color: #fff !important; /* White text on hover */
      border-radius: 5px;
    }
    .navbar-toggler-icon {
      background-image: none; /* Remove default icon */
    }
    /* Green background for the toggler */
    .navbar-toggler {
      background-color: #28a745; 
      border: none; /* Remove border */
    }
    /* Custom hamburger icon */
    .navbar-toggler-icon::before {
      content: "\2630"; /* Unicode for hamburger icon */
      font-size: 24px;
      color: #fff; /* White icon */
    }
    /* Align navbar items to the left */
    .navbar-nav {
      margin-left: 15px; /* Adjust space from logo */
    }
    .nav-item {
      margin-left: 20px; /* Add space between nav items */
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <!-- Responsive logo -->
      <img src="bgglogo.jpeg" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="product.php">PRODUCT </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script type="text/javascript">
  (function () {
      var options = {
          
          whatsapp: "+91-9935187821", // WhatsApp number
         
          button_color: "green", // Color of button
          position: "right", // Position may be 'right' or 'left'
          order: "call,whatsapp", // Order of buttons
      };
      var proto = 'https:', host = "getbutton.io", url = proto + '//static.' + host;
      var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
      s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
      var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
  })();
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
