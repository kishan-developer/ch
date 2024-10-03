<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Footer</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Footer styling */
    .footer {
      background-color: #28a745; /* Green background */
      color: white;
      padding: 40px 0;
      text-align: center;
    }
    .footer h5 {
      margin-bottom: 20px;
      font-size: 18px;
      font-weight: bold;
    }
    .footer p {
      font-size: 14px;
    }
    .footer a {
      color: white;
      text-decoration: none;
      font-size: 16px;
    }
    .footer a:hover {
      text-decoration: underline;
    }
    .footer .social-icons a {
      margin: 0 10px;
      font-size: 24px;
    }
    .footer-bottom {
      margin-top: 20px;
      font-size: 14px;
      border-top: 1px solid white;
      padding-top: 15px;
    }
    /* Responsive layout */
    @media (min-width: 768px) {
      .footer .row > div {
        text-align: left;
      }
    }
  </style>
</head>
<body>

<!-- Footer -->
<footer class="footer">
  <div class="container">
    <div class="row">
      <!-- Column 1: About -->
      <div class="col-md-4">
        <h5>About Us</h5>
        <p style="color:white"> We Provide Best Service</P>



      </div>
      <!-- Column 2: Links -->
      <div class="col-md-4">
        <h5>Quick Links</h5>
        <a href="#">Home</a><br>
        <a href="#">About</a><br>
        <a href="#">Services</a><br>
        <a href="#">Contact</a><br>
      </div>
      <!-- Column 3: Social Icons -->
      <div class="col-md-4">
        <h5>Address</h5>
        <div class="social-icons">
            <p style="color:white">
            
            Bindu Agro Industries<br>
                    Plot No. K5, K7 - Industrial Area Ramnagar, Chandauli, U.P<br>
                    Pin Code: 221110<br>
                    GSTIN No: 09AGZPJ5336M2ZG</p>


        


        </div>
      </div>
    </div>
    <div class="footer-bottom">
      &copy; 2024 Your Company. All rights reserved.
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<!-- Add Bootstrap icons CDN for social icons -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>
</html>
