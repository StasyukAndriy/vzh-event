<?php session_start(); ?>
<?php 
      if($_SERVER['HTTP_REFERER'] == 'http://karpaty1/register-users.php'){
          echo '<script>alert("Такий користувач існує")</script>';
      }
      if($_SERVER['HTTP_REFERER'] == 'http://karpaty1/check_user.php'){
          echo '<script>alert("Такого користувача не існує")</script>';
      }
 ?>
<!-- Hello!!!!!! -->
<html>
<head>
<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="css/main.css">  
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.0/css/all.css" integrity="sha384-OLYO0LymqQ+uHXELyx93kblK5YIS3B2ZfLGBmsJaUyor7CpMTBsahDHByqSuWW+q" crossorigin="anonymous">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>

<body >

   <div class="header" id="header">
   <i class="fas fa-bars"></i>
   <div class="register_buttons">
            
            <div class="header-user-button"> 
                <a class="register-href"><p class="register-user-button a-paragrap">Реєстрація</p></a>
                <a class="register-href"><p class="login-user-button a-paragrap">Вхід</p></a>
            </div>
    </div>
<!--       <video class="video_media" src="video/vzh.mp4" autoplay muted loop></video>-->
        <h1 data-aos="zoom-in" data-aos-duration="2000"  class="header-title">
        Вище за хмари   
       </h1>
       <p class="header-subtitle">
        еко-котедж в серці Карпат
       </p>
       <div class="header-viber"> 
        <img class="viber-image" src="image/icons/viber_PNG15.png">
         <p class="viber-name">Viber/</p>
        <p class="number">5555555 </p>
       </div> 
       <div class="header-button"> 
                <a class="register-href"><p class="register-button">Відвідати</p></a>
        </div>
        
        
        
       <div class="header-arrow">
        <img src="./image/header/chevron-down.svg" alt=""> 
       </div>
    
</div>

    <div class="portfolio">
        <div class="container">
          <h2 class="portfolio-header">Переваги відпочинку</h2>
            <div class="porfolio-cards-wrapper">
              <div  data-aos="fade-right" class="card">
                  <img class="card-image" src="image/portfolio/spring1.jpg">
                  <h3 class="card-title"><a href="portfolio.php">Наші краєвиди</a></h3>
                  <p> Незаймана природа </p>                    
              </div>
              <div data-aos="fade-left" class="card">

                <img class="card-image" src="image/portfolio/Forest.jpg">
                <h3 class="card-title"><a href="portfolio.php">Будинок зі зрубу </a></h3>
                <p> з екологічно чистої деревини </p>                    
            </div>
            <div data-aos="fade-right" class="card">
              <img class="card-image" src="image/portfolio/water.jpg">
              <h3 class="card-title"><a href="portfolio.php"> Джерельна вода з глибин Карпат</a></h3>
              <p> Запорука здоров'я та сили </p>                    
          </div>
          <div data-aos="fade-left" class="card ">
            <img class="card-image" src="image/portfolio/servis.jpg">
            <h3 class="card-title"><a href="portfolio.php"> Відмінний сервіс</a></h3>
            <p> Домашня кухня та затишні номери </p>                    
        </div>
            </div>
        </div>
    </div>
    <div class="container map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2660.9745978725755!2d24.78141876439374!3d48.16857083722609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4736ef1c61721a41%3A0x7ad26dd862dad6b6!2sAbove%20the%20clouds!5e0!3m2!1sru!2sua!4v1613840031972!5m2!1sru!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row footer-content">
                <div class="col-12 col-sm-4">
                    <div class="footer-links">
                           <a target=blank href="https://www.google.com/travel/hotels/entity/CgoItq3rloa7m-l6EAE/overview?g2lb=2502548%2C4258168%2C4270442%2C4271060%2C4306835%2C4317915%2C4322823%2C4328159%2C4371334%2C4401769%2C4419364%2C4425458%2C4433754%2C4444000%2C4445603%2C4447566%2C4448315%2C4270859%2C4284970%2C4291517%2C4412690&hl=uk&gl=ua&un=1&rp=ELat65aGu5vpehC2reuWhrub6Xo4AkAASAHAAQI&ictx=1&sa=X&cshid=1603033068518601&utm_campaign=sharing&utm_medium=link&utm_source=htls&hrf=KhYKBwjkDxAKGBkSBwjkDxAKGBoYASgAggElMHg0NzM2ZWYxYzYxNzIxYTQxOjB4N2FkMjZkZDg2MmRhZDZiNpoBJxolMHg0NzM2ZWYxYzYxNzIxYTQxOjB4N2FkMjZkZDg2MmRhZDZiNg"><i style= "color: #fff; font-size: 22px; " class="fab fa-google"></i> </a>
                           <a target=blank href="https://www.facebook.com/vyshchezakhmary"><img src="image/icons/facebook.svg"> </a>
                           <a target=blank href="https://www.booking.com/hotel/ua/vyshche-za-hmary.uk.html"><img wight=40 height=40 src="image/icons/b.svg"> </a>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="footer-info">
                        <div>
                            <span>вул. Гостинна, с.Ільці,</span>
                            <span>Верховинський р-н, Івано-Франківська обл.</span>
                            <span>Координати: 48.1691, 24.7803</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="footer-contacts">
                        <p>+38 (097) 468-85-24</p>
                        <p>+38 (099) 413-05-19</p>
                        <div>
                            <a href=""><i class="fab fa-viber"></i>Viber</a>
                            <a href=""><i class="fab fa-whatsapp"></i>Whatsapp</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>    
    </div>

 <div class="form-user-popap">
           <div class="register">
               <div class="popap-close">
                   <i style=" color: white; pointer-event :none; font-size: 20px;" class="fas fa-times register-close"></i>
               </div>
            <form class="black" method="POST" action="register-users.php">
                <div class="form-group">
                    <label for="exampleInputEmail1">Firstname</label>
                    <input  name="firstname"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    <label for="exampleInputEmail1">Lastname</label>
                    <input  name="lastname"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    <label for="exampleInputEmail1">Email address</label>
                    <input  name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    <label for="exampleInputEmail1">Password</label>
                    <input  name="password"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    <label for="exampleInputPassword1">Pnone</label>
                    <input name="phone" class="form-control" id="exampleInputPassword1" required>
                    <button value="true" name="button-users" type="submit" class=" btn btn-primary">Submit</button>
                    
                </div>
              </div> 
            </form>
</div>
<div class="form-user-login-popap">
           <div class="register">
               <div class="popap-login-close">
                   <i style=" color: white; pointer-event :none; font-size: 20px;" class="fas fa-times login-close"></i>
               </div>
            <form class="black" method="POST" action="check_user.php">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input  name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    <label for="exampleInputEmail1">Password</label>
                    <input  name="password"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    <button value="true" name="button-users" type="submit" class=" btn btn-primary">Submit</button>
                </div>
              </div> 
            </form>
</div>
   
   <div class="form-popap">
       <div class="register">
           <div class="popap-close">
               <i style=" color: white; pointer-event :none; font-size: 20px;" class="fas fa-times"></i>
           </div>
       <form class="black" method="POST" action="register.php">
           <div class="form-group">
               <label for="exampleInputEmail1">Firstname</label>
               <input  name="firstname"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
               <label for="exampleInputEmail1">Lastname</label>
               <input  name="lastname"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
               <label for="exampleInputEmail1">Email address</label>
               <input  name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
               <label for="exampleInputEmail1">Number</label>
               <input  name="phone"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
               <label for="exampleInputPassword1">Pnone</label>
               <input name="pnone" type="number" class="form-control" id="exampleInputPassword1" required>
           </div>
           <div class="date-container">
               <div class="label">
                    <label for="exampleInputEmail1">Number of rooms</label>
                    <label for="exampleInputEmail1">Number of people</label>
               </div>
                <div class="date">
                            <input  type="number" name="number_of_rooms"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            <input  type="number" name="number_of_people"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="label">
                    <label for="exampleInputEmail1">From</label>
                    <label for="exampleInputEmail1">To</label>
               </div>
              <div class="date">
                    <input  name="from" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    <input  name="to" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
              </div>
               
               
     </div>
              
               
          
           <button  value=true name="button" type="submit" class="btn btn-primary">Submit</button>
       </form>
   </div>
   </div>
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="js/Jquery/jquery-3.5.1.min.js"></script>
<script src="js/vide/jquery.vide.js"></script>
<script src="js/main.js"></script>

</body>
</html>