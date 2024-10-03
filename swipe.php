<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden; /* Hide horizontal overflow */
            background-color: white; /* Set background color to white */
        }

        .gallery-container {
            position: relative;
            overflow: hidden; /* Hide overflow content */
        }

        .gallery {
            display: flex;
            gap: 30px;
            overflow-x: auto; /* Allow horizontal scroll */
            scroll-behavior: smooth;
            padding: 10px 50px; /* Padding to accommodate buttons */
            box-sizing: border-box; /* Include padding in width calculation */
        }

        .gallery::-webkit-scrollbar {
            display: none; /* For Chrome, Safari, and Opera */
        }

        .gallery_item {
            width: 350px;
            background: #f5f5f5;
            flex-shrink: 0;
            box-sizing: border-box; /* Include padding in width calculation */
            overflow: hidden; /* To ensure circle effect works */
        }

        .gallery_image {
            width: 100%;
            display: block; /* Remove extra space below image */
            border-radius: 0; /* Initial shape */
            transition: border-radius 0.3s ease, transform 0.3s ease; /* Smooth transition */
        }

        
    </style>
</head>
<body>
    <div class="gallery-container">
        <div class="gallery">
            <?php 
            $conn = mysqli_connect("localhost", "root", "", "riya");
            global $conn;
            
            $sel = "SELECT * FROM riya ORDER BY 1 DESC LIMIT 1,50"; // Modify based on your database schema
            $r = mysqli_query($conn, $sel);

            while ($k = mysqli_fetch_array($r, MYSQLI_BOTH)) {
                $a = $k['image'];
                echo " 
                <div class='gallery_item'>
                    <img src='slider/$a' alt='image' class='gallery_image'> 
                </div>";
            }
            ?>
        </div>
    </div>
</body>
</html>
