<!DOCTYPE html>
<html lang="en">

<head>
 <style>

.mySlides {display: none}
.img1_2{margin: 1em;}
.slide_img {
  height: 60vh;
  width: 100%
 
}

/* Slideshow container */
.slideshow_container {
  margin: auto;
  top: 4em;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: 3rem;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

.prev {
    left: 11px;
}
/* Position the "next button" to the right */

.next {
  right: 11px;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 9px;
  /*padding: 5px;bottom: 3px;*/
  position: absolute;  
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: red;/*#f2f2f2;*/
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

.dot_wrapper{
  text-align:center; 
  margin-top: .1rem;
}


/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 2px 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 600px) {
  .prev, .next,.text {font-size: 11px}
  .slide_img {  height: 40vh;} 
  .prev, .next {margin-top: -2.5rem;}
  .dot {height: 8px; width: 8px;}
  .next { right: 11px;}
  .dot_wrapper{ margin: 0;}

  
}

@media screen and (max-width: 600px) {
.mySlides{

}
.fade {}
.img1_2{}
}
</style>
  
</head>



 <div class="slideshow_container">

    <div class="mySlides fade">
      <div class="numbertext"></div>
      <div class="img1_2">
        <!-- <img class="slide_image" src="https://media.nga.gov/iiif/ea521136-812f-411a-97c2-4cd05d7e9eda/full/!740,560/0/default.jpg" alt=""> -->
        <img class="slide_img" src="https://media.istockphoto.com/id/1305533078/photo/multicolored-straight-strands-texture-background-sewing-equipment-loom-equipment-at-a-garment.jpg?b=1&s=170667a&w=0&k=20&c=6DRaTAwBhDsq_SoDvz06UOwg-fBQl6LHIJBJ4RyCIt4=" alt="">
       <!--  <img src="https://images.pexels.com/photos/3038539/pexels-photo-3038539.jpeg?auto=compress&cs=tinysrgb&w=362&h=560&dpr=0.5" alt=""> -->
      </div>

      <div class="text"></div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext"></div>
      <div class="img1_2">
          <!-- <img class="slide_image" src="https://st3.depositphotos.com/13384644/17635/i/600/depositphotos_176355670-stock-photo-looms-loom-fittings-woven-scarves.jpg" alt="">	 -->
          <img class="slide_img" src="https://images.pexels.com/photos/2928381/pexels-photo-2928381.jpeg?auto=compress&cs=tinysrgb&w=1293&h=350&dpr=1" alt="">
      </div>
      <div class="text"></div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext"></div>
      <div class="img1_2">
        <img class="slide_img" src="https://www.knitting-and.com/wp-content/uploads/2011/08/backstitch-also.jpg" alt="" >
      <!--   <img src="https://images.pexels.com/photos/3099309/pexels-photo-3099309.jpeg?auto=compress&cs=tinysrgb&w=298&h=350&dpr=1" alt="">	
        <img src="https://images.pexels.com/photos/6851277/pexels-photo-6851277.jpeg?auto=compress&cs=tinysrgb&w=293&h=350&dpr=1" alt=""> -->

      </div>
      <div class="text"></div>
    </div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div class="dot_wrapper">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>


<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>



</html>