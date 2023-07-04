<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>pricing</title>

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

<section class="pricing">

<h1 class="heading">our pricing</h1>

<div class="box-container">
<div class="box">
<h3>Begginer Course</h3>
<div class="price">
    $250
</div>
<div class="list">
    <p><i class ="fas fa-check"></i> Introduction</p>
    <p><i class ="fas fa-check"></i> Mini projects</p>
    <p><i class ="fas fa-check"></i> Assisting 24h a day</p>
    <p><i class ="fas fa-check"></i> CV templates</p>
</div>
<a href="contact.php" class = "btn">choose plan</a>
    </div>


    <div class="box">
<h3>Standard Course</h3>
<div class="price">
    $450
</div>
<div class="list">
    <p><i class ="fas fa-check"></i> Introduction</p>
    <p><i class ="fas fa-check"></i> Mini projects</p>
    <p><i class ="fas fa-check"></i> Assisting 24h a day</p>
    <p><i class ="fas fa-check"></i> Internship right after course</p>
    <p><i class ="fas fa-check"></i> CV templates</p>
</div>
<a href="contact.php" class = "btn">choose plan</a>
    </div>



    <div class="box">
<h3>Premium Course</h3>
<div class="price">
    $800
</div>
<div class="list">
    <p><i class ="fas fa-check"></i> Introduction</p>
    <p><i class ="fas fa-check"></i> Mini projects</p>
    <p><i class ="fas fa-check"></i> Assisting 24h a day</p>
    <p><i class ="fas fa-check"></i> Internship right after course</p>
    <p><i class ="fas fa-check"></i> CV templates</p>
</div>
<a href="contact.php" class = "btn">choose plan</a>
    </div>
</div>


</section>

<section class="reviews">

<h1 class="heading">happy clients</h1>

<div class="reviews-slider">
    <div class="w">

        <div class="slide">
            <img src="images/pic-2.png" alt="">
            <h3>Corina Ioana</h3>
            <p>Java</p>
            <div class="stars">
            <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>

        <div class="slide">
            <img src="images/pic-3.png" alt="">
            <h3>Ianis Craciun</h3>
            <p>SQL</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>

        <div class="slide">
            <img src="images/pic-5.png" alt="">
            <h3>Matei Chirigiu</h3>
            <p>HTML si CSS</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>

        <div class="slide">
            <img src="images/pic-4.png" alt="">
            <h3>Irina Stroilescu</h3>
            <p>PHP</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>

        <div class="slide">
            <img src="images/pic-6.png" alt="">
            <h3>Andrada Brudan</h3>
            <p>Databases</p>
            <div class="stars">
                 <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>

        <div class="slide">
            <img src="images/pic-1.png" alt="">
            <h3>Mihai Popa</h3>
            <p>Javascript</p>
            <div class="stars">
            <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
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
