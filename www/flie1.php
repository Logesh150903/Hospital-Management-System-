<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- aos css file cdn link --> 
<link rel="stylesheet" 
href="www/style.css">
 <!-- magnific popup css cdn link -->
 <link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/magnificpopup.js/1.1.0/mag
nific-popup.min.css">
 <!-- bootstrap cdn link -->
 <link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/twitterbootstrap/4.5.3/css/bo
otstrap.min.css">
 <!-- font awesome cdn link -->
 <link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/5.15.1/css/all.
min.css">
</head>
<body>
<!-- header section starts -->
<header>
<div class="container">
<a href="#" class="logo"><span>H</span>ealth<span>C</span>are.</a>
<nav class="nav">
 <ul>
 <li><a href="#home">home</a></li>
<li><a href="#Services">Services</a></li>
<li><a href="#facility">Doctors</a></li>
<li><a href="#about">About Us</a></li>
 <li><a href="#feedback">Feedback</a></li>
 <li><a href="#review">Review</a></li>
 <li><a href="login.php">Book</a></li>
 </ul>
</nav>
<div class="fas fa-bars"></div> 
</div>
</header>
<!-- header section ends -->
<!-- home section starts -->
<section class="home" id="home">
<div class="container">
<div class="row min-vh-100 align-items-center text-center text-md-left">
<div class="col-md-6 pr-md-5" data-aos="zoom-in">
<img src="images/home-img.svg" width="100%" alt="">
</div>
<div class="col-md-6 pl-md-5 content" data-aos="fade-left">
<h1><span>stay</span> safe, <span>stay</span> healthy. </h1>
<a href="contact.php"><button class="button">Contact Us</button></a>
</div>
</div>
</div>
</section>
<!-- home section ends -->
<!-- Services section start -->
<section
class="Services "
id="Services">
<div class="container"> 
<div class="row min-vh-100 align-items-center">
<div class="col-md-6 content" data-aos="fade-right">
<div class="box">
<h3> <i class="fas fa-ambulance"></i> Ambulance Services </h3>
<p>An ambulance is a medically equipped vehicle which transports patients to
treatment facilities, such as hospitals.</p>
</div>
<div class="box">
<h3> <i class="fas fa-procedures"></i> Emergency Rooms </h3>
<p>Emergency services are organizations which ensure public safety and health
by addressing different emergencies.</p>
 </div>
<div class="box">
<h3> <i class="fas fa-stethoscope"></i> Free check-ups </h3
<p>A free medical check-up is a periodicalset of medical tests that you can take
in designated health centres.</p>
</div>
</div>
<div class="col-md-6 d-none d-md-block" data-aos="fade-left">
<img src="" width="100%" alt="">
</div>
</div>
</section>
<section class="facility" id="facility">
<div class="container">
<h1 class="heading"><span>'</span> Our Doctors<span>'</span></h1>
<div class="box-container">
<div class="box" data-aos="zoom-in">
<ahref="images/doc-1.jpg" title="Dr.Bandana Chettri<br>General
Surgeons<br>2345643234">
<img src="images/doc-1.jpg" alt="">
</a>
</div>
<div class="box" data-aos="zoom-in">
<a href="images/doc-2.jpg"
Khati<br>Dermatologists<br>3456789098">
<img src="images/doc-2.jpg" alt="">
</a>
</div>
<div class="box" data-aos="zoom-in">
title="Dr.Adarash
<a href="images/doc-3.jpg"
Sharma<br>Ophthalmologists<br>9876789876">
title="Dr.Binod
<img src="images/doc-3.jpg"
alt="">
</a>
</div>
<div class="box" data-aos="zoomin">
<a href="images/doc-4.jpg"
Surgeons<br>6754321345">
<img src="images/doc-4.jpg"
alt="">
</a>
</div>
<div class="box" data-aos="zoomin">
title="Dr.Arpan Neopaney<br>General
<a href="images/doc-5.jpg" title="Dr.Sanju
Sharma<br>Dermatologists<br>65743256798">
<img src="images/doc-5.jpg" alt="">
</a>
</div>
<div class="box" data-aos="zoom-in">
<a href="images/doc-6.jpg" title="Dr.Promad Sharma<br>General
Surgeons<br>0987654345">
<img src="images/doc-6.jpg" alt="">
</a>
</div>
</div>
</div>
</section>
<!-- Doctors section ends -->
<!-- counter section starts --><section class="counter">
<div class="container">
<div class="box-container">
<div class="box" data-aos="fade-up">
 <i class="fas fa-hospital"></i>
 <span>12+</span>
 <h3>Hospitals</h3>
 </div>
 <div class="box" data-aos="fade-up">
 <i class="fas fa-users"></i>
 <span>50+</span>
 <h3>staff</h3>
 </div>
</div>
<div class="box" data-aos="fade-up">
<i class="fas fa-procedures"></i>
 <span>1o+</span>
 <h3>Services</h3>
 </div>
 </div>
 </div> 
</section>
<!-- counter section ends -->
<!--about start here-->
<section class="about" id="about">
<h1 class="heading"> <span>about</span> us </h1>
<div class="row">
<div class="image">
<img src="about-img.svg" alt="">
</div>
<div class="content">
<h3>we take care of your healthy life</h3>
<p>Health care or healthcare is the improvement of health via the prevention,
diagnosis, treatment, amelioration, or cure of disease, illness, injury, and other
physical and mental impairments in people.</p>
<p>Health care is delivered by health professionals and allied health fields.</p>

<a href="#" class="btn"> learn more <span class="fas fa-chevronright"></span> </a> </div>
</div>
</section>
<!--about end here-->
<!-- feedback section starts -->
<section class="feedback" id="feedback">
<div class="container min-vh-100">
<div class="row justify-content-center">
<h1 class="heading"><span>'Feedback'</span></h1>
<div class="col-md-10" data-aos="flip-down">
<form action="c.php" method="POST">
<div class="inputBox">
<input type="text" name="name" placeholder="full name">
<input type="number" name="number" placeholder="phone">
</div>
<textarea cols="30" rows="10" name="message" placeholder="message (
optional )"></textarea>
<input type="submit" name="submit" value="submit feedback"
class="button">
</form>
</div>
</div>
</div>
</section>
<!--feedback end here-->
<!-- review section starts -->
<section class="review" id="review">
<div class="container">
<h1 class="heading"><span>'</span> people's review <span>'</span></h1>
<div class="box-container">
<div class="box" data-aos="fade-right">
<p>I really appreciated for your immediate Response. It helped me so
much.</p>
<h3>Diksha Panday</h3>
<span>jan 5, 2021</span>
<img src="images/doc-5.jpg" alt="">
</div>
<div class="box" data-aos="fade-up">
<p>You really went above and beyond to solve my complex issue at time. i
really Appreciate it.</p>
<h3>Badal Thapa</h3>
<span>jan 7, 2021</span>
<img src="images/doc-2.jpg" alt="">
</div>
<div class="box" data-aos="fade-left">
<p>You did a great job managing the conflict that came up during the meeting
yesterday afternoon.</p>
<h3>Chetan Sharma</h3>
<span>jan 10, 2021</span
<img src="images/doc-6.jpg" alt="">
</div>
</div>
</div>
</section> 
<!--contact section ends -->
<!--footer start-->
<section class="footer">
<div class="box-container">
<div class="box">
<h3>quick links</h3>
<a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
<a href="#Services"> <i class="fas fa-chevron-right"></i>Services</a>
<a href="#facility"> <i class="fas fa-chevron-right"></i>Doctors</a>
<a href="#about"> <i class="fas fa-chevron-right"></i>About Us </a>
</div>
<div class="box">
<h3>quick links</h3>
<a href="#feedback"> <i class="fas fa-chevron-right"></i>Feedback</a>
 <a href="#review"> <i class="fas fa-chevron-right"></i>Review</a>
 <a href="login.php"> <i class="fas fa-chevron-right"></i>Book</a>
 </div>
 <div class="box">
 <h3>contact info</h3>
 <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
 <a href="#"> <i class="fas fa-envelope"></i> anishaneopaney10gmail.com
</a>
 <a href="#"> <i class="fas fa-map-marker-alt"></i> gangtoks, india - 400104
</a>
</div>
 <div class="box">
 <h3>follow us</h3>
 <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
 <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
 <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
 <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
 </div>
 </div>
 <div class="credit"> created By: Anisha Neopaney| developed in association
with
Sikharthy Infotech Private Limited </div>
</section>
<!-- jquery cdn link -->
<script
src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script
>
<!-- magnific popup js link -->
<scriptsrc="https://cdnjs.cloudflare.com/ajax/libs/magnificpopup.js/1.1.0/jquery.magnificpopup.min.js"></script>
<!-- aos js file cdn link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<!-- custom js link -->
<script src="js/main.js"></script> 
<script>
AOS.init({duration:1000,delay:400});
</script>
<script>
$(document).ready(function(){$('.fa-bars').click(function(){$(this).toggleClass('fa-times');$('.nav').toggleClass('nav-toggle'); });
$(window).on('load scroll',function(){$('.fa-bars').removeClass('fa-times');$('.nav').removeClass('nav-toggle');
if($(window).scrollTop() > 10)
{
$('header').addClass('header-active');
}else{
$('header').removeClass('header-active');
 }
 }); 
$('.facility').magnificPopu
p({ delegate:'a',
type:'image',
 gallery:{
enabled:true
 }
 });
});
</script>
</body>
</html>