<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

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

<section class="home">
<div class="swiper home-slider">
    <div class="swiper-wrapper">
        <div class="swiper-slide" style="background: url(images/bg2.jpg) no-repeat">
          <div class="content">
        <h3>Start your IT career now!</h3>
        <p>Welcome to TechZone, the premier IT academy where you can embark on a comprehensive learning journey. We specialize in offering a wide range of courses that cover various programming languages such as Java, C++, SQL, HTML, CSS, PHP, and more. At TechZone, we prioritize quality education and strive to provide a top-notch learning experience. With experienced instructors, hands-on exercises, and a supportive environment, we ensure that our students gain a solid foundation and develop advanced skills. Whether you are a beginner or an experienced professional, TechZone is dedicated to helping you thrive in the dynamic world of technology. Join us today and unlock your potential for success.</p>
    <a href="about.php" class="btn">discover more</a>    
         </div>
        </div>
        <div class="swiper-slide" style="background: url(images/bg3.jpg) no-repeat">
          <div class="content">
        <h3>Start your IT career now!</h3>
        <p>Welcome to TechZone, the premier IT academy where you can embark on a comprehensive learning journey. We specialize in offering a wide range of courses that cover various programming languages such as Java, C++, SQL, HTML, CSS, PHP, and more. At TechZone, we prioritize quality education and strive to provide a top-notch learning experience. With experienced instructors, hands-on exercises, and a supportive environment, we ensure that our students gain a solid foundation and develop advanced skills. Whether you are a beginner or an experienced professional, TechZone is dedicated to helping you thrive in the dynamic world of technology. Join us today and unlock your potential for success.</p>
    <a href="about.php" class="btn">discover more</a>    
         </div>
        </div>
        <div class="swiper-slide" style="background: url(images/bg4.jpg) no-repeat">
          <div class="content">
        <h3>Start your IT career now!</h3>
        <p>Welcome to TechZone, the premier IT academy where you can embark on a comprehensive learning journey. We specialize in offering a wide range of courses that cover various programming languages such as Java, C++, SQL, HTML, CSS, PHP, and more. At TechZone, we prioritize quality education and strive to provide a top-notch learning experience. With experienced instructors, hands-on exercises, and a supportive environment, we ensure that our students gain a solid foundation and develop advanced skills. Whether you are a beginner or an experienced professional, TechZone is dedicated to helping you thrive in the dynamic world of technology. Join us today and unlock your potential for success.</p>
    <a href="about.php" class="btn">discover more</a>    
         </div>
        </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
</div>
</section>

<section class="courses">

<h1 class="heading">our courses</h1>

<div class="swiper courseSlider">

<div class="swiper-wrapper">

<div class="swiper-curs">
<img src="images/sql.jpg" alt="">
<div class="content">
  <h3>sql</h3>
  <p>Begginer Course</p>
  <a href="about.php" class="btn">about us</a>
</div>
</div>
<div class="swiper-curs">
<img src="images/ccpp.jpg" alt="">
<div class="content">
  <h3>C++</h3>
  <p>Advanced Course</p>
  <a href="about.php" class="btn">about us</a>
</div>
</div>
<div class="swiper-curs">
<img src="images/htmlcss.jpg" alt="">
<div class="content">
  <h3>HTML si CSS</h3>
  <p>Curs Advanced</p>
  <a href="about.php" class="btn">about us</a>
</div>
</div>
<div class="swiper-curs">
<img src="images/java.png" alt="">
<div class="content">
  <h3>Java</h3>
  <p>Backend developer with Java</p>
  <a href="about.php" class="btn">about us</a>
</div>
</div>
<div class="swiper-curs">
<img src="images/php.png" alt="">
<div class="content">
  <h3>PHP</h3>
  <p>5 Mini-proiecte PHP</p>
  <a href="about.php" class="btn">about us</a>
</div>
</div>
<div class="swiper-curs">
<img src="images/uiux.jpeg" alt="">
<div class="content">
  <h3>UI/UX</h3>
  <p>Learn web design with our UI/UX course</p>
  <a href="about.php" class="btn">about us</a>
</div>
</div>

</div>

</div>

</section>


<?php @include 'footer.php'; ?>  
</div>


<!--swiper js link--->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Custom JS file link -->
    <script src="script.js"></script>
</body>
</html>
