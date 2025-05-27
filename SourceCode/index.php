<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Hostel Management System</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@400;700&display=swap" rel="stylesheet">

  </head>
  <body onscroll="changecolor()">

    <script type="text/javascript">
    function rtohome(){
      window.location.href ="index.php";
    }
    function change(){
      window.location.href ="registration.php";
    }
    window.onscroll=function(){
      var top=window.scrollY;
      if(top>=50){
        document.getElementById("Nav1").style.backgroundColor = "white";
        document.getElementById("linkcolor").style.color = "black";
        document.getElementById("linkcolor1").style.color = "black";
        document.getElementById("linkcolor2").style.color = "black";
        document.getElementById("linkcolor3").style.color = "black";
      }
      else{
        document.getElementById("Nav1").style.backgroundColor = "transparent";
        document.getElementById("linkcolor").style.color = "white";
        document.getElementById("linkcolor1").style.color = "white";
        document.getElementById("linkcolor2").style.color = "white";
        document.getElementById("linkcolor3").style.color = "white";
      }
    }

    </script>


<div class="Nav" id="Nav1">
  <div class="NavbarContainer">
    <img src="images\vit1.png" alt="" class="NavLogo" onclick="rtohome()">
    <div class="MobileIcon">
    <i class="fa fa-bars"></i>
    </div>
    <ul class="NavMenu ">
      <li class="NavItem"><a id="linkcolor" on class="NavLinks" href="https://srmap.edu.in/">About</a></li>
      <li class="NavItem"><a id="linkcolor1" class="NavLinks" href="https://srmap.edu.in/admission-india/hostel-fee-seas/">Pricing</a></li>
      <li class="NavItem"><a id="linkcolor2" class="NavLinks" href="https://srmap.edu.in/seas/electronics-and-communication-engineering/contact-and-location/">Contact Us</a></li>
      <li class="NavItem"><a id="linkcolor3" class="NavLinks" href="signin.php">Sign in</a></li>
    </ul>
    <div class="NavBtn">
      <button type="button" name="button" class="NavBtnLink"  onclick="change()">Signup</button>
    </div>

  </div>
</div>

<!-- Hero section -->
<div class="HeroContainer">
  <div class="HeroBg">
    <video muted autoplay="autoplay" loop class="VideoBg">
  <source src="videos\video2.mp4" type="video/mp4">
</video>
  </div>
<div class="HeroContent">
  <h1 class="HeroH1">SRM AP Hostel Registration</h1>
  <p class="HeroP">SRM AP Amaravati</p>
  <div class="HeroBtnWrapper">
<button type="button" name="button" class="NavBtnLink"  onclick="change()">Get Started</button>
  </div>
</div>

</div>





<!-- footer -->
<div class="FooterContainer" id="contact">
<div class="FooterWrap">
  <div class="FooterLinksContainer">
    <div class="FooterLinksWrapper">
        <div class="FooterLinkItems">
            <h1 class="FooterLinkTitle">About Us</h1>
            <a href="https://srmap.edu.in/admission-india/hostel-fee-seas/" class="FooterLink">Pricing</a>
            <a href="admin\adminlogin.php" class="FooterLink">Admin</a>
        </div>
    </div>
  </div>

  <div class="SocialMedia">
    <div class="SocialMediaWrap">
      <a href="#" class="SocialLogo">HMS</a>
      <p class="WebsiteRights">SRM AP AMARAVATI © 2023</p>
      <div class="SocialIcons">
        <a href="https://www.facebook.com/SRMUAP/" class="SocialIconLink"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
        <a href="https://twitter.com/SRMUAP" class="SocialIconLink"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="https://www.instagram.com/srmuap/?hl=en" class="SocialIconLink"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="https://www.youtube.com/@SRMUniversityAP" class="SocialIconLink"><i class="fa-brands fa-youtube"></i></a>
      </div>
    </div>

  </div>

</div>
</div>


  </body>
</html>
