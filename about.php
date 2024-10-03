<?php
include("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <style>

.full-width-image {
            width: 100%;
           
            display: block;
            padding:20px;

            height: 500px; /* Adjust this value as needed */
            object-fit: cover; /* Keeps the image proportional while resizing */
            border-radius: 10px; /* Optional: adds rounded corners */
        }

        /* Media Queries for responsive design */
        /* For mobile devices */
        @media (max-width: 600px) {
            .full-width-image {
                width: 100%;
                height: auto;
            }
        }

        /* For tablets */
        @media (min-width: 601px) and (max-width: 1024px) {
            .full-width-image {
                width: 100%;
                height: auto;
            }
        }

        /* For laptops and desktops */
        @media (min-width: 1025px) {
            .full-width-image {
                width: 100%;
                height: auto;
            }
        }

        .card {
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px 0;
            height: 100%;
            font-family: 'Lora', serif;
        }

        .card-text {
            font-size: 1.5rem;
            padding: 20px;
            text-align: center;
            font-weight: bold;

            font-family: 'Lora', serif;
        }

        .card-img {
            width: 100%;
            height: auto;
            max-width: 500px;
            border-radius: 10px;
        }

        /* Hover effect for images */
        .card:hover .card-img {
            transform: scale(1.05);
            transition: 0.3s;
        }

        @media (max-width: 768px) {
            .card {
                flex-direction: column;
            }

            .card-text {
                font-size: 1.2rem;
                padding: 15px;
            }

            .card-img {
                max-width: 100%;
                margin-bottom: 15px;
            }
        }

        

        
        
      
            </style>

      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>BINDHU AGRO</title>
</head>
<body>
<img src="ablt.jpeg" alt="Full Width Image" class="full-width-image">
<br>

<div class="container my-4">
    <div class="row">
        <!-- Card 1 (Image on one side) -->
        <div class="col-md-6">
            <div class="card">
                <img src="sun.jpg" alt="Card Image" class="card-img">
                <br>
                <br>
            </div>
        </div>

        <!-- Card 2 (Text on opposite side) -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-text">
                  <h3 style = "color:green"><br> WHO WE ARE</br> </h3>
                  <br>


                    <p>Let's Build a Healthier Tomorrow
Join us in our mission to bring wholesome, nutritious grains to every table. Contact us today to learn more about our products or to partner with Bindu Agro Industries for your grain supply needs.3. Customer-Centric: With a strong focus on customer satisfaction, we provide personalized <p>
                   

                </div>
            </div>
        </div>
    </div>
</div>
<br>

<div class="container my-4">
    <div class="row">
        <!-- Card 1 (Image on one side) -->
        <div class="col-md-6">
            <div class="card">
                  <div class = "card-text">
                        <h3 style = "color:green"> Why Choose Us </h3>
                  1. Innovative Processing: Our state-of-the-art technology ensures efficient, eco-friendly.<br>
2. Sustainability Focused: We are committed to eco-friendly practices, from sourcing to packaging.
                



                <br>
                <br>
            </div>


        </div>
      </div>

        <!-- Card 2 (Text on opposite side) -->
        <div class="col-md-6">
            <div class="card">
            <img src="ment.jpg" alt="Card Image" class="card-img">
               
            </div>
        </div>
    </div>
</div>
<br>







<?php
include("footer.php");

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

      
</body>
</html>