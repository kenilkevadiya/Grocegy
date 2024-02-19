<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- favicon link -->
   <link rel="apple-touch-icon" sizes="180x180" href="favicon_io_G/apple-touch-icon.png">
   <link rel="icon" type="image/png" sizes="32x32" href="favicon_io_G/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="favicon_io_G/favicon-16x16.png">
   <link rel="manifest" href="favicon_io_G/site.webmanifest">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-1.png" alt="">
         <h3>why choose us?</h3>
         <p>Farm fresh organic vegetable, fruits and grocery items and much more <br> to your door step to give you variety, save your time and energy.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>what we provide?</h3>
         <p>We are providing farm fresh organic vegetable, fruits and grocery etc. <br> The freshest produce curetted everyday to give you variety.</p>
         <a href="shop.php" class="btn">shop now</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">customer's reviews </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/viratkohli.jpg" alt="">
         <p>My experience with a grocegy was fantastic, I buy veggies regularly from a big basket and I have to say they have very fresh fruits and vegetables.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Virat Kohli</h3>
      </div>

      <div class="box">
         <img src="images/msdhoni.jpg" alt="">
         <p>They are very consistent in providing really good products. I Received very good products. They give importance to their customers.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>MS Dhoni</h3>
      </div>

      <div class="box">
         <img src="images/rohitsharma.jpg" alt="">
         <p>Grocegy has proved to be everything I wanted in an online supermarket for me. Helpline providers are always able to assist you with any kind of query.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rohit Sharma</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>