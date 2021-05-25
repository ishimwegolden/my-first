  
<?php
session_start();
?>


  <html>
<title>www.muji stars hotel.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <link rel="stylesheet" type="text/css" href="autoslide.css">
    <style>
        
ul {
  list-style-type: none;
  padding: 10px 0px 10px 0px;
  overflow: hidden;
  background-color: navajowhite;
  background-size: cover;
  font-family: papyrus;
  font-size: 20px;
  width: 100%;
  margin:auto;
}

li {
  float: left;
}
li a {
  display: block;
  color: darkred;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 13px;
  font-family: argerian;
  font-weight: bold;
  text-transform: uppercase;
}
.dropdowns{
  display: block;
  color: darkred;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 13px;
  font-family: argerian;
  font-weight: bold;
  text-transform: uppercase;

}

li a:hover, .dropdown:hover .dropbtn {
  color: tomato;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 10rem;
  z-index: 1;
  align-items: right;
  margin-top: 0rem;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: center;
  font-family: algerian;
}

.dropdown-content a:hover {background-color: white;}

.dropdown:hover .dropdown-content {
  display: inline-block;
}
li .login{
    float: right;
}
.login:hover .dropdown-content {
  display: inline-block;
}
li a:hover, .login:hover .dropbtn {
  color: tomato;
}

li.login {
  display: inline-block;
}
.paragraph{
  width:100%;
  background-size: none;
  text-align: center;
  font-family: argerian;
  font-size: 22px;
  color: black;
  height: 18rem;
}
.paragraph p{
  background-size: cover;
  text-align: center;
  font-family: argerian;
  font-size: 20px;
  color: black;
}
.photo{
 content: "";
  display: table;
  clear: both;
}

.image5{
  float: left;
  width: 50%;
  height: 400px;
  margin-top: 90px;
  margin-left: 3rem;
   background-size: cover;
   background-position: center;
}
.image6{
  width: 20%;
  height: 400px;
  margin-top: -7rem;
  margin-left: 40rem;
   background-size: cover;
   background-position: center;
}
.words{
  width: 40%;
  height: 500px;
  font-family: time new roman;
  margin-top: -9rem;
  margin-left: 50rem;
  text-align: left;
}
.word1{
  float: left;
  width: 30%;
  height: 500px;
  font-family: time new roman;
  margin-top: -10rem;
  margin-left: 9rem;
  text-align: left;
}

}
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
.myslides img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: black;
  font-size: 35px;
  padding: 8px 12px;
  position: absolute;
  bottom: 100px;
  width: 100%;
  text-align: center;
  }
  .text1 {
  color: darkgreen;
  font-size: 35px;
  padding: 8px 12px;
  position: absolute;
  bottom: 200px;
  width: 100%;
  text-align: center;
  font-family: argerian;
  }
/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
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
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
.head1{
  width:60%;
}
.image7{
width: 70%;
height: 50%;
margin-left: 12%;
margin-top: 8rem;
}
.rema{
  margin-top: -17rem;
  margin-left: 55%;
}
.rema button[type="submit"]:hover{
  background-color: black;
  color: white;
}
.head2{
  width:60%;
}
.image8{
width: 70%;
height: 50%;
margin-left: 90%;
margin-top: 5rem;
}
.rema1{
  margin-top: -17rem;
  margin-left: 10%;
}
.head3{
  width:60%;
}
.image9{
width: 70%;
height: 50%;
margin-left: 12%;
margin-top: 8rem;
}
.rema2{
  margin-top: -17rem;
  margin-left: 55%;
}
.part1{
  width: 32%;
  margin-left: 0.5rem;
  text-align: center;
  margin-bottom: 6rem;
}
.part2{
  width: 32%;
  margin-top: -47.5rem;
  margin-left: 57rem;
  text-align: right;
  align-items: center;
}
.part3{
  width: 32%;
  margin-bottom: 90rem;
  margin-top: -41.5rem;
  margin-left: 29rem;
  text-align: center;
}
.romantic{
  margin-top: -20rem;
  background-size: cover;
}

.heading2{
   margin-top: -13.2rem;
   color:darkolivegreen;
   font-family: fabiol;
   margin-left: 25rem;
}
.heading1{
  color:darkolivegreen;
   font-family: fabiol;
   margin-top: -11rem;
   margin-left: 72rem;
}
.chart input{
  margin-bottom: 30px;
  width: 300px;
  height: 30px;
  padding: 22px;
  border-left: none;
  border-right: none;
  border-top: none;
  color: darkolivegreen;
  font-size: 17px;
  font-family: argerian;
  font-weight: bold;
  background-color: transparent;
  text-align: left;
  }
  .chart{
    margin-top: -30rem;

  }
  .icon{
    margin-top: 13rem;
    margin-left: 60rem;
  }
  .icon :hover{
    color: red;
  }
  .copy{
      color: darkolivegreen;
      margin-left: -15rem;
          font-size: 17px;
          margin-top: -5rem;
  font-family: argerian;
  font-weight: bold;
}
.romantic{
  margin-top: -15rem;
}
.romantic p{
  background-color: sienna;
  color:black;
  width:30%;
  height: 72%;
  font-size:20px;
  font-family: times newroman;
  margin-left: 58.5rem;
  margin-top: -27.4rem;
  text-align: center;
}
    </style>

</head>
<body>
    <ul>
        <li><a href="home2.php">home</a></li>
        <li class="dropdown">
            <a href="room2.php" class="dropdowns">rooms & suites</a>
            <div class="dropdown-content">
            <a href="standard.php">standard rooms</a>
            <a href="deluxe.php">deluxe rooms</a>
            <a href="superior.php">superior rooms</a>
            <a href="prime.php">prime rooms</a>
            <a href="junior.php">junior suites</a>
            <a href="executive.php">executive suites</a>
            <a href="presidential.php">presidential suites</a>
            <a href="#"><img src="test1.jpg" width="300rem" height="150rem"></a>
        </div>
    </li>
    <li><a href="wedding2.php">Wedding</a></li>
    <li class="dropdown">
            <a href="diining2.php" class="dropdowns">dinning</a>
            <div class="dropdown-content">
            <a href="#">camelia restaurant</a>
            <a href="#">bismillah restraunt</a>
            <a href="#">miliam restraunt</a>
            <a href="#"><img src="image2.jpg" width="300rem" height="150rem"></a>
        </div>
        <li class="dropdown">
            <a href="meeting2.php" class="dropdowns">meeting</a>
             <div class="dropdown-content">
            <a href="#">confererooms</a>
            <a href="#">request for a proposal</a>
            <a href="#"><img src="image13.jpg" width="300rem" height="150rem"></a>
        </div>
        <li><a href="gallery.php">Gallery</a></li>
        <?php
        if($_SESSION["username"]){
          ?>
              <li class="login" style="padding-left: 35rem">
            <a href="meeting.php" class="dropdowns"><?php echo $_SESSION["username"] ;?></a>
             <div class="dropdown-content">
            <a href="logout.php">logout</a>
          </div>
</ul>
<div class="mySlides fade">
        <img src="s4.jpg" style="width:100%;padding-top: 0.06rem;">
          </div>





  <div class="mySlides fade">
        <img src="s3.jpg" style="width:100%;padding-top: 0.06rem;">
         </div>

      <div class="mySlides fade">
        <img src="s1.jpg" style="width:100%;padding-top: 0.06rem;">
             </div>

<div class="mySlides fade">
        <img src="s2.jpg" style="width:100%;padding-top: 0.06rem;">
              </div>
        <br>

    <div style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span>
    </div>
    <br>
<div class="paragraph">
<h2 style="">WELCOME </h2>
    <h3>TO MUJI STARS HOTEL</h3> 
      <p>this hotel is the One of the best hotels in Rwanda <br>
        On an enchanting boulevard in the heart of Kigali Rwanda<br>
         in a secure location just a five-minute walk from the CBD,lies muji stars hotel. A distinctively rich<br> blend of Rwandan heritage,art and culture with contemporary 5-star comfort in 100 sophisticated rooms and suites,<br>
  muji stars hotel provides a private and peaceful retreat like no other for discerning international diplomats and executives. <br> 

Enjoy a host of leisure amenities. Lose yourself in the tranquillity of our tropically landscaped pool Indulge with a Mayan-inspired hot stone massage.<br>
 or a nature-based body wrap at Maisha Mind Body & Spirit Spa. Allow our restaurants to take you on a culinary journey, treating you to everything from expertly<br> crafted Rwandese delicacies to enticing flavours from around the globe.
</div>
<div class="photo">
  <a href="booking.php"><img src="M4.jpg" class="image5" style="border-radius: 0.5rem;"><br><h1 style="margin-left: 2rem;margin-top: 20%; "></h1></a>
   <div class="words">
  <h1>ACCOMODATIONS</h1>
    <h2>ACCOMMODATION Presidential Suite</h2>  
Situated on its own private floor, the resplendent three-bedroom Presidential Suite is one of the finest examples of accommodation in Kigali and throughout Rwanda.</P>
  <a href="booking.php"><button type="submit" style="border: 2px solid green; width: 250px; height: 30px; background-color: white; text-align: center;font-family: segoe script; outline: none;border-radius: 20px;font-size: 20px; text-transform: up">booking</button></a>
  </div>
</div>
</div>
<div class="photo">
  <a href="booking.php"><img src="RO2.jpg" class="image6"style="width: 50%; border-radius: 0.5rem;"><br><h1 style="float: right;margin-right: -35%;margin-top: 10rem;color: darkgreen;"></h1></a>
   <div class="word1">
  <h1 style="margin-top: -10rem;">DINNING</h1>
  <h2> DINING Camelia Restaurant</h2>
Relaxed and stylish, the colourful Sokoni Restaurant is surrounded by extensive tropical gardens and overlooks the pool. A popular meeting place for guests and locals alike, it is renowned for its colourful cocktails, globe-trotting cuisine and vibrant live music.</P>
  <br>
  <a href="booking.php"><button type="submit" style="border: 2px solid green; width: 250px; height: 30px; background-color: white; text-align: center;font-family: segoe script; outline: none;border-radius: 20px;font-size: 20px; text-transform: up">booking</button></a>
  </div>
</div>
</div>
<div class="romantic">
  <img src="ron1.jpg" width="70.3%" height="72%">
  <p><strong style="font-size: 25px; color: darkred;">MUJI STARS HOTEL</strong><br><br><strong style="font-size: 20px; color: darkgrey;">STAY WITH US</strong><br><br>
A visit to MUJI Stars Hotel offers a rich and <br>vivid immersion into the culture, heritage and <br>traditions of Rwanda. As an essential part of your <br>stay, allow us to create unique and authentic <br>experiences that will leave you with lasting <br>memories long after you depart </p>
</div>

<br>
<?php
}
else 
echo"failed";
?>
    </body>

<footer style="background-color: cornsilk; bottom: 0; margin-top:3rem; height: 100%">
  <img src="traveler.png" style="margin-top: -0.2rem;">
  <div class="heading2">
  <h2>contact detail</h2>
  <p><strong>Muji stars hotel</strong><br>
    kn 14 avenue<br>
    kigali,<br>
    rwanda<br>
    0788574387<br>
    0784767542
</div>
<div class="heading1">
  <h2 style="margin-left:-4rem; font-size: 17px;">the perpetrators of the act</h2>
     ISHIMWE Thierry<br>
     UWASE Beatrice<br>
     IYATURINZE Jeanine<br>
     MUSHAYIJA steven
     </div>
     <div class="chart">
 <br>
<input type="text"placeholder="enter Names" name="email"  style="margin-left: 30rem; margin-top: -1rem;">
<br>
<input type="text"placeholder="enter Email" name="email"  style="margin-left: 50rem; margin-top: -4.8rem;">
<br>
<textarea style="border-left: none; border-right: none; border-top: none; width: 40rem; height: 10rem; margin-left: 30rem; background-color: transparent; font-family: argerian; color:darkolivegreen; font-weight: bold; font-size: 17px;" placeholder="Message"></textarea>
<br>
<button type="submit" style="margin-left: 57rem; padding: 0.5rem; margin-top: 1rem; width: 12rem; border-radius: 0.4rem; font-family: argerian; font-size:1.2rem; background-color: darkolivegreen; color:navajowhite;">send message</button>
</div>
<div class="icon">
  <a href="https://www.facebook.com/ishimwe.thierry.7311/" style="margin-left: 3rem;"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path d="M12.001,2.002c-5.522,0-9.999,4.477-9.999,9.999c0,4.99,3.656,9.126,8.437,9.879v-6.988h-2.54v-2.891h2.54V9.798 c0-2.508,1.493-3.891,3.776-3.891c1.094,0,2.24,0.195,2.24,0.195v2.459h-1.264c-1.24,0-1.628,0.772-1.628,1.563v1.875h2.771 l-0.443,2.891h-2.328v6.988C18.344,21.129,22,16.992,22,12.001C22,6.479,17.523,2.002,12.001,2.002z"/></svg></a><a href="instagram.com" style="margin-left: 1rem;"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path d="M20.947,8.305c-0.011-0.757-0.151-1.508-0.419-2.216c-0.469-1.209-1.424-2.165-2.633-2.633 c-0.699-0.263-1.438-0.404-2.186-0.42C14.747,2.993,14.442,2.981,12,2.981s-2.755,0-3.71,0.055 c-0.747,0.016-1.486,0.157-2.185,0.42C4.896,3.924,3.94,4.88,3.472,6.089C3.209,6.788,3.067,7.527,3.053,8.274 c-0.043,0.963-0.056,1.268-0.056,3.71s0,2.754,0.056,3.71c0.015,0.748,0.156,1.486,0.419,2.187 c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45c0.963,0.043,1.268,0.056,3.71,0.056s2.755,0,3.71-0.056 c0.747-0.015,1.486-0.156,2.186-0.419c1.209-0.469,2.164-1.425,2.633-2.633c0.263-0.7,0.404-1.438,0.419-2.187 c0.043-0.962,0.056-1.267,0.056-3.71C21.003,9.572,21.003,9.262,20.947,8.305z M11.994,16.602c-2.554,0-4.623-2.069-4.623-4.623 s2.069-4.623,4.623-4.623c2.552,0,4.623,2.069,4.623,4.623S14.546,16.602,11.994,16.602z M16.801,8.263 c-0.597,0-1.078-0.482-1.078-1.078s0.481-1.078,1.078-1.078c0.595,0,1.077,0.482,1.077,1.078S17.396,8.263,16.801,8.263z"/><circle cx="11.994" cy="11.979" r="3.003"/></svg></a><a href="twiter.php" style="margin-left: 1rem;"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809  c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05  c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032  c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22  c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z"/></svg></a><a href="whatsapp.com"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M18.403,5.633C16.708,3.936,14.454,3.001,12.053,3 c-4.948,0-8.976,4.027-8.978,8.977c0,1.582,0.413,3.126,1.198,4.488L3,21.116l4.759-1.249c1.312,0.715,2.788,1.092,4.29,1.093h0.004 l0,0c4.947,0,8.975-4.027,8.977-8.977C21.03,9.585,20.098,7.33,18.403,5.633 M12.053,19.445H12.05  c-1.339-0.001-2.652-0.36-3.798-1.041l-0.272-0.162l-2.824,0.741l0.753-2.753l-0.177-0.282c-0.747-1.188-1.141-2.561-1.141-3.971  c0.002-4.114,3.349-7.461,7.465-7.461c1.993,0.001,3.866,0.778,5.275,2.188c1.408,1.411,2.184,3.285,2.183,5.279  C19.512,16.097,16.165,19.445,12.053,19.445 M16.146,13.856c-0.225-0.113-1.327-0.655-1.533-0.73 c-0.205-0.075-0.354-0.112-0.504,0.112s-0.58,0.729-0.711,0.879s-0.262,0.168-0.486,0.056s-0.947-0.349-1.804-1.113 c-0.667-0.595-1.117-1.329-1.248-1.554s-0.014-0.346,0.099-0.458c0.101-0.1,0.224-0.262,0.336-0.393  c0.112-0.131,0.149-0.224,0.224-0.374s0.038-0.281-0.019-0.393c-0.056-0.113-0.505-1.217-0.692-1.666 C9.627,7.787,9.442,7.845,9.304,7.839c-0.13-0.006-0.28-0.008-0.429-0.008c-0.15,0-0.393,0.056-0.599,0.28  C8.07,8.336,7.491,8.878,7.491,9.982c0,1.104,0.804,2.171,0.916,2.321c0.112,0.15,1.582,2.415,3.832,3.387  c0.536,0.231,0.954,0.369,1.279,0.473c0.537,0.171,1.026,0.146,1.413,0.089c0.431-0.064,1.327-0.542,1.514-1.066  c0.187-0.524,0.187-0.973,0.131-1.067C16.52,14.025,16.369,13.968,16.146,13.856"/></svg></a>
  <div class="copy">
    &copy2021 Muji stars hotel
  </div>
  </footer>
<script src="autoslide.js"></script>
</html>
s