<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>

<div class="container">
<?php @include 'header.php'; ?>   

<section class="about">
   <img src="images/about.jpg" alt=""> 
   <h3>about us</h3>
   <p>
At TechZone, we are passionate about empowering individuals with the knowledge and skills they need to excel in the ever-evolving field of technology. Our team of dedicated experts is committed to delivering cutting-edge curriculum, staying up-to-date with the latest industry trends, and fostering a culture of continuous learning. We believe in a personalized approach to education, tailoring our programs to meet the unique needs and goals of each student. With a strong emphasis on practical application and real-world projects, we ensure that our graduates are well-prepared to tackle challenges and make meaningful contributions in the IT industry. Join us at TechZone and become part of a vibrant community of tech enthusiasts, where innovation and excellence are celebrated.</p>
   <a href="contact.php" class="btn">contact us</a>
</section>

<section class="team">

<h1 class="heading">our team</h1>
<div class="box-container">
    <div class = "box">
        <img src="images/team1.jpg" alt="">
        <h3>Maria Ioana</h3>
        <p>java developer</p>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-github"></a>
        </div>
    </div>
  
    <div class = "box">
        <img src="images/team2.jpg" alt="">
        <h3>Alexandru Ionut</h3>
        <p>fullstack developer</p>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-github"></a>
        </div>
    </div>
    <div class = "box">
        <img src="images/team3.jpg" alt="">
        <h3>Marian Bogdan</h3>
        <p>devops engineer</p>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-github"></a>
        </div>
    </div>
    <div class = "box">
        <img src="images/team4.jpg" alt="">
        <h3>Badia Alexandra</h3>
        <p>frontend developer</p>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-github"></a>
        </div>
    </div>

</div>
</section>


<?php @include 'footer.php'; ?>  
</div>


<!--swiper js link--->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- Custom JS file link -->
    <script src="script.js"></script>
</body>
</html>
