<?php 
include("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            font-family: 'Poppins', sans-serif; /* Better font family */
            margin: 0;
            padding: 0;
        }
        .hero-section {
            background: url('ldf.jpg') no-repeat center center/cover; /* Background image */
            color: white; /* White text color */
            text-align: left; /* Align text to the left */
            height: 100vh; /* Full height */
            display: flex;
            align-items: center;
            justify-content: flex-start; /* Align content to the start (left) */
            padding: 0 20px; /* Add some horizontal padding */
        }
        .hero-content {
            max-width: 700px;
            padding: 20px;
            color:white;
            background-color: transparent; /* Fully transparent background for content */
            border-radius: 8px; /* Rounded corners */
            animation: fadeIn 1s ease; /* Animation for the content */
        }
        .hero-content h1 {
            font-size: 2.3rem;
            font-weight: bold;
            color: #28a745; /* Green color for the heading */
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6); /* Adding shadow for better readability */
        }
        .hero-content p {
            font-size: 1.3rem;
            line-height: 1.6;
            color:white;
            
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.6); /* Shadow for paragraph text */
        }
        .btn-contact {
            margin-top: 20px;
            padding: 10px 30px;
            background-color: #28a745; /* Green button */
            color: white;
            font-size: 1.2rem;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn-contact:hover {
            background-color: #218838; /* Darker green on hover */
        }
        /* Animation keyframes */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px); /* Slide up from below */
            }
            to {
                opacity: 1;
                transform: translateY(0); /* Final position */
            }
        }
        /* Responsive font sizes */
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.2rem;
            }
            .hero-content p {
                font-size: 1rem;
            }
            .btn-contact {
                font-size: 1rem;
                padding: 8px 20px;
            }
        }
        @media (max-width: 576px) {
            .hero-content h1 {
                font-size: 1.8rem;
            }
            .hero-content p {
                font-size: 0.9rem;
            }
            .btn-contact {
                font-size: 0.9rem;
                padding: 6px 15px;
            }
        }


        .container {
            padding: 30px; /* Add padding to the container */
        }
        .custom-container {
            margin-top: 20px; /* Space between elements */
        }
        .image-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 15px; /* Space between images */
        }
        .image-item {
            flex: 1 1 calc(50% - 15px); /* 2 images per row, adjust based on space */
            overflow: hidden;
        }
        .image-item img {
            width: 100%;
            border-radius: 8px; /* Rounded corners for images */
            transition: transform 0.3s ease; /* Animation for images */
        }
        .image-item img:hover {
            transform: scale(1.05); /* Zoom effect on hover */
        }
        .content {
            background-color: white; /* White background for content */
            padding: 20px;
            border-radius: 8px; /* Rounded corners for content */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Shadow effect for depth */
            margin-top: 20px; /* Space above content */
        }
       
        p {
           
        }
        .custom-label {
            display: flex;
            align-items: center; /* Center align checkbox and label */
            margin: 10px 0; /* Margin for checkboxes */
            padding: 8px; /* Padding for label */
            border-radius: 5px; /* Rounded corners for label */
            transition: background-color 0.3s; /* Transition for hover effect */
            font-family: 'Lora', serif;
        }
        .custom-label:hover {
            background-color: #e6ffe6; /* Light green background on hover */
        }
        .custom-label span {
            color: #333; /* Darker color for text */
            font-size: 16px; /* Font size for labels */
        }
        /* Responsive design */
        @media (max-width: 768px) {
            .image-item {
                flex: 1 1 calc(100% - 15px); /* 1 image per row on small screens */
            }
        }
        p{ 
            
        }

        p {
      color: rgba(0, 0, 0, 0.8); /* Slightly softer black for better readability */
      font-size: 22px; /* Adjusted for better readability */
      line-height: 1.7; /* Slightly increased line height */
      word-spacing: 2px; /* Improve word spacing */
      letter-spacing: 0.5px; /* Subtle letter spacing for cleaner text */
      font-weight: 400; /* Medium weight for balanced appearance */
      margin-bottom: 20px; /* Margin below paragraphs for spacing */
      text-align: justify; /* Justified text for cleaner alignment */
      font-family: 'Lora', serif;
    }

    h2 {
      color: #228B22; /* A natural green for header */
      font-size: 28px;
      font-weight: bold;
      text-align: center;
      margin: 20px 0;
      font-family: 'Lora', serif;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }

    /* Responsive design */
    @media (max-width: 768px) {
      p {
        font-size: 18px;
        font-family: 'Lora', serif;
      }
    }

    @media (max-width: 480px) {
      p {
        font-size: 16px;
        font-family: 'Lora', serif;
      }
    }

        .marquee-container {
      width: 100%;
      overflow: hidden;
      white-space: nowrap;
      background-color: #f0f0f0;
      padding: 10px 0;
    }
    .marquee-text {
      display: inline-block;
      animation: marquee 10s linear infinite;
    }
    .marquee-container:hover .marquee-text {
      animation-play-state: paused;
    }
    /* Duplicate the text for seamless effect */
    .marquee-content {
      display: inline-block;
      padding-right: 100%; /* Adjust this to control the gap */
    }

    @keyframes marquee {
      0% {
        transform: translateX(0%);
      }
      100% {
        transform: translateX(-100%);
      }
    }

    /* Responsive font size */
    @media (max-width: 768px) {
      .marquee-container {
        padding: 8px 0;
      }
      .marquee-content {
        font-size: 14px;
      }
    }
    @media (max-width: 480px) {
      .marquee-container {
        padding: 6px 0;
      }
      .marquee-content {
        font-size: 12px;
      }
    }


    .custom-wrapper {
      max-width: 1200px;
      margin: 0 auto;
    }

    .card-row {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between; /* Ensure space between the cards */
      gap: 20px;
    }

    .card {
      display: flex;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      flex-basis: calc(50% - 20px); /* Take 50% width of the row minus the gap */
      max-width: 600px;
      max-height:400px;
    }

    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .card img {
      width: 100%;/* Half the card is the image */
      object-fit: cover;
    }

    .card-content {
      padding: 20px;
      font-family: 'Lora', serif;
      width: 50%; /* Half the card is the content */
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .card-content h3 {
      color: #333;
      margin-bottom: 10px;
      font-size: 22px;
    }

    .card-content p {
      color: #777;
      font-family: 'Lora', serif;
      line-height: 1.6;
      font-size: 16px;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .card {
        flex-direction: column; /* Stack image and content on smaller screens */
        flex-basis: 100%; /* Full width on smaller screens */
      }
      .card img, .card-content {
        width: 100%; /* Full width on small screens */
      }
    }
    .card-c{ 
      padding:18px;
      font-family: 'Lora', serif;
      color: #2c3e50;
      font-weight: 600;
      font-size: 28px;
    }
    h3{ 
      color:green;
    }
    .full-width-image {
      width: 100%;
      height: 50vh; /* Adjust height as needed (50% of the viewport height) */
      object-fit: cover; /* Ensures the image covers the area without distortion */
    }

    /* Optional styling for centering and visual adjustments */
    .image-container {
      width: 100%;
      overflow: hidden;
    }
    

    

    
   
    /* Responsive Design */
   
    
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BINDHU AGRO</title>
</head>
<body>
<div class="hero-section">
    <div class="hero-content">
        <h1>Welcome to Bindu Agro Industries</h1>
       <p><b> At Bindu Agro Industries, we believe in the power of nature's finest grains to fuel healthy living. Our commitment to providing top-quality,</b></p>

        

        <a href="contact.php"class="btn-contact">Contact Us</a>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="custom-container" data-aos="fade-up">
                <div class="image-grid">
                    <div class="image-item" data-aos="fade-up">
                        <img src="c1.jpg" class="img-fluid rounded" alt="Image 1">
                    </div>
                    <div class="image-item" data-aos="fade-up">
                        <img src="c2.jpg" class="img-fluid rounded" alt="Image 2">
                    </div>
                    <div class="image-item" data-aos="fade-up">
                        <img src="c3.jpg" class="img-fluid rounded" alt="Image 3">
                    </div>
                    <div class="image-item" data-aos="fade-up">
                        <img src="c4.jpg" class="img-fluid rounded" alt="Image 4">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6" data-aos="fade-in">
            <div class="content">
                <h2 style="color:green"><b>About Bindu Agro Industries</b></h2>
                <br>
                <p>Bindu Agro Industries is a trusted name in the grain industry, dedicated to delivering high-quality, nutritious grains and grain-based products.</p>

                <div class="custom-container">
                    <div class="image-grid">
                        <div class="image-item">
                            <label class="custom-label"><input type="checkbox" style="display:none;"><span>Corn and maize derivatives</span></label>
                        </div>
                        <div class="image-item">
                            <label class="custom-label"><input type="checkbox" style="display:none;"><span>Wheat flour and semolina</span></label>
                        </div>
                        <div class="image-item">
                            <label class="custom-label"><input type="checkbox" style="display:none;"><span>Specialty grain products</span></label>
                        </div>
                        <div class="image-item">
                            <label class="custom-label"><input type="checkbox" style="display:none;"><span>Bindhu Plant Q&M Service</span></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="marquee-container">
    <div class="marquee-text">

    <?php 
include("swipe.php");

?>

</div>
</div>


<div class="custom-wrapper">
    

    <div class="card-row">
      <!-- Card 1 -->
      
      <div class="card">
            <h3 style="color:green">
            
            
          <center> Before   Use</center> </h3>
            <br>
        <img src="drt.jpg" alt="Product 1">

        


      </div>

      <!-- Card 2 -->
      <div class="card">
            <div class = "card-c">
        
        
          <h3 style="color:green">
          
        <center><b>  After Use </b></center>
      
      </h3>
          <br>
          <p>Bindu Agro Industries is a trusted name in the grain industry, dedicated to delivering high-quality, nutritious grains and grain-based products. We combine cutting-edge technology with sustainable practices to produce premium-grade products that cater to the diverse needs of our customers, from households to food industries.</p>


          

        </div>
      </div>
    </div>
  </div>




    


</div>
  </div>
  <br>

  <div class="image-container">
    <img src="full.jpg" alt="Full-Width Image" class="full-width-image">
  </div>
  <br>

  







<?php 
include("footer.php");
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script> <!-- AOS library script -->
<script>
    AOS.init(); // Initialize AOS animations
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
