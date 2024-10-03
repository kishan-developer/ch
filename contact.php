<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BINDHU AGRO</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <style>
        /* Custom Styles for the Form and Address */
        .contact-container {
            display: flex;
            flex-wrap: wrap;
        }

        .address-box {
            background-color: #f8f9fa;
            padding: 20px;
            margin-bottom: 20px;
        }

        .form-box {
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .form-control {
            border-radius: 0;
            box-shadow: none;
        }

        .btn-primary {
            border-radius: 0;
            background-color: #007bff;
            border: none;
            padding: 10px 20px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .box-header h2 {
            font-family: 'Poppins', sans-serif;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .text-muted {
            font-size: 14px;
            color: #6c757d;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .contact-container {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>

    <?php include("header.php"); ?>

    <div id="content">
        <div class="container">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>

            <div class="contact-container">
                <!-- Address Section (Left) -->
                <div class="col-md-4 address-box">
                    <h3>Our Address</h3>
                    <p>
                       
                        Bindu Agro Industries<br>
                    Plot No. K5, K7 - Industrial Area Ramnagar, Chandauli, U.P<br>
                    Pin Code: 221110<br>
                    GSTIN No: 09AGZPJ5336M2ZG</p>
                       
                    </p>
                </div>

                <!-- Contact Form (Right) -->
                <div class="col-md-8 form-box">
                    <div class="box">
                        <div class="box-header">
                            <center>
                                <h2>Feel free to Contact Us</h2>
                                <p class="text-muted">
                                    If you have any questions, feel free to contact us. Our Customer Service works <strong>24/7</strong>.
                                </p>
                            </center>
                        </div>

                        <form action="contactcode.php" method="post">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>

                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" class="form-control" name="subject" required>
                            </div>

                            <div class="form-group">
                                <label>Message</label>
                                <textarea name="message" class="form-control" rows="6" required></textarea>
                            </div>

                            <div class="text-center">
                                <button type="submit" name="submit" class="btn btn-primary">
                                    <i class="fa fa-envelope"></i> Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
    include("footer.php");

    ?>

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
</body>
</html>
