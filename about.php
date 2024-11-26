<?php

include 'components/connect.php';

if (isset ($_COOKIE['user_id'])) {
   $user_id = $_COOKIE['user_id'];
} else {
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php include 'components/user_header.php'; ?>

   <!-- about section starts  -->

   <section class="about">

      <div class="row">

         <div class="image">
            <img src="images/about-img.svg" alt="">
         </div>

         <div class="content">
            <h3>why choose us?</h3>
            <p>Our e-learning project is driven by a passionate team dedicated to revolutionizing education. With a
               foundation rooted in our belief that learning should be accessible to all, we strive to empower
               individuals worldwide through high-quality, interactive courses tailored to diverse learning styles. Our
               journey began with a vision to break down barriers to education, and since our inception, we have
               continuously evolved, leveraging cutting-edge technology and innovative teaching methodologies to deliver
               engaging learning experiences.</p>
            <a href="courses.php" class="inline-btn">our courses</a>
         </div>

      </div>

      <div class="box-container">

         <div class="box">
            <i class="fas fa-graduation-cap"></i>
            <div>
               <h3>+1k</h3>
               <span>online courses</span>
            </div>
         </div>

         <div class="box">
            <i class="fas fa-user-graduate"></i>
            <div>
               <h3>+25k</h3>
               <span>brilliants students</span>
            </div>
         </div>

         <div class="box">
            <i class="fas fa-chalkboard-user"></i>
            <div>
               <h3>+5k</h3>
               <span>expert teachers</span>
            </div>
         </div>

         <div class="box">
            <i class="fas fa-briefcase"></i>
            <div>
               <h3>100%</h3>
               <span>job placement</span>
            </div>
         </div>

      </div>

   </section>

   <!-- about section ends -->

   <!-- reviews section starts  -->

   <section class="reviews">

      <h1 class="heading">student's reviews</h1>

      <div class="box-container">


         <div class="box">
            <p>"This e-learning platform transformed my learning experience, providing top-notch instruction and
               resources that propelled my academic success."</p>
            <div class="user">
               <img src="images/pic-5.jpg" alt="">
               <div>
                  <h3>Pooja</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
            </div>
         </div>

         <div class="box">
            <p>"This e-learning platform exceeded my expectations with its user-friendly interface and comprehensive
               course content is very helpful for my academic success." </p>
            <div class="user">
               <img src="images/pic-6.jpg" alt="">
               <div>
                  <h3>Ram</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
            </div>
         </div>

         <div class="box">
            <p>"Outstanding e-learning platform! Easy navigation, excellent content, and supportive instructors make
               learning enjoyable and effective."</p>
            <div class="user">
               <img src="images/pic-7.jpg" alt="">
               <div>
                  <h3>Khusi</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
            </div>
         </div>

      </div>

   </section>

   <!-- reviews section ends -->


   <?php include 'components/footer.php'; ?>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>