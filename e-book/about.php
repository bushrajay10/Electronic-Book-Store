<?php

include 'config.php';

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

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about_4.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>he specific benefits of ebooks in augmenting learning include: Interactive. Since ebooks are digital, they're not confined by the printed page. That means they can integrate video components, quizzes with real-time scoring, and homework response questions all in one place.</p>
         <p>Is it better to read eBooks?
Many studies confirm that reading comprehension is better with physical books than with eBooks</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>I was using this for a while because the original not-so smartphone that the program for the poor gave me sucked as far as storage and overall performance. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john </h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>I love the e-reader for allowing me to read for hours and days without worrying about recharging, while my Kindle Fire begs for "juice" within 4-5 hours, and leaves me worrying about either carrying a charger with me</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>sara</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>they give them to us for free: no one wants the junky things. Then my bestie upgraded her phone and gave me her old Droid Razr to put my games and other apps on</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ali raza</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>I can tote it easily about. Mine, in its case, tolerates the daily once or twice being dropped, thankfully, without adverse incidence, and happily waits for me to open its case and enjoy whatever book we are sharing, no matter where I am or what else I am also doing. My best buddy.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sofia shahid</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>i have read all the prior books. since i have retired i have read over 1400 books.  i think he is right up with some of my favorite authors. need to start with book one and read the rest. read this in one day could not put it down. will not miss the ones to come</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rizwan khan</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>I really enjoy the Jason Drake stories. Fast, simple and entertaining.
I wish reviews were more honest. These books are released way too soon. I have never read a book with so many grammatical, spelling and content mistakes. There are so many tools available.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Alexa</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">greate authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/Author+David+Mitchell+.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>David-Mitchell</h3>
      </div>

      <div class="box">
         <img src="images/jk_rowling.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>J. K. Rowling</h3>
      </div>

      <div class="box">
         <img src="images/George-Saunders.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>George-Saunders</h3>
      </div>

      <div class="box">
         <img src="images/James_D_Watson.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>James Watson</h3>
      </div>

      <div class="box">
         <img src="images/35c-Nassim-Nicholas-Taleb.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Nassim Nicholas Taleb</h3>
      </div>

      <div class="box">
         <img src="images/donna-tartt.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Donna Tartt</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>