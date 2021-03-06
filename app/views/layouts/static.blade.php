<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Family Health Nepal</title>
{{ HTML::style('css/style.css') }}
{{ HTML::style('css/slider.css') }}
<link rel="shortcut icon" href="images/favicon.ico">
</head>

<body>
<div id="wrapper">
 
 <div id="header">
  <div id="logo">
      <img src="images/logo.png" />
  </div><!--logo-->
  <div id="log">
      <a href="#">
        <div class="login">
          LOGIN
        </div></a><!--login-->
        <a href="#">
        <div class="register">
          REGISTER
        </div></a><!--register-->
  </div><!--log-->
 </div><!--header-->
 
 <div id="nav">
 <div id='cssmenu'>
    <ul>
       <li class='active'><a href='index.html'><span></span></a></li>
       <li class='has-sub'><a href='#'><span>Our Services</span></a>
          <ul>
             <li><a href='#'><span>Product 1</span></a></li>
             <li><a href='#'><span>Product 2</span></a></li>
          </ul>
       </li>
       <li><a href='#'><span>Patient Stories</span></a></li>
       <li><a href='#'><span>Referral Sources</span></a></li>
       <li><a href='#'><span>Careers</span></a></li>
       <li><a href='#'><span>Locations</span></a></li>
       <li class='last'><a href='#'><span>Resources</span></a></li>
    </ul>
  </div><!--cssmenu-->
  </div><!--nav-->

  {{ $content }} 
 
  <div id="footer">
  <p><a href="#">Home</a> | 
      <a href="#">Our Services</a> | 
        <a href="#">Patient Stories</a> | 
        <a href="#">Referral Sources</a> | 
        <a href="#">Careers</a> | 
        <a href="#">Locations</a> | 
        <a href="#">Resources</a> </p>
  <p>Copyright © 2014 <a href="index.html">Family Health Nepal</a>. All Rights Reserved.</p>
  </div><!--footer-->
</div> <!--wrapper-->

<script src="js/slippry.min.js"></script>
<script src="js/jquery-2.1.1"></script>
<script src="js/slippry.min.js"></script>

<!--  <script>
    // You can also use "$(window).load(function() {"
    $(function () {

      $("#slider").responsiveSlides({
        maxwidth: 1200,
        speed: 800
      });
  });
  </script>-->

<script>
$(function() {
  var demo1 = $("#demo1").slippry({
    transition: 'fade',
    useCSS: true,
    speed: 1000,
    pause: 3000,
    auto: true,
    preload: 'visible'
  });

  $('.stop').click(function () {
    demo1.stopAuto();
  });

  $('.start').click(function () {
    demo1.startAuto();
  });

  $('.prev').click(function () {
    demo1.goToPrevSlide();
    return false;
  });
  $('.next').click(function () {
    demo1.goToNextSlide();
    return false;
  });
  $('.reset').click(function () {
    demo1.destroySlider();
    return false;
  });
  $('.reload').click(function () {
    demo1.reloadSlider();
    return false;
  });
  $('.init').click(function () {
    demo1 = $("#demo1").slippry();
    return false;
  });
});
</script> 

</body>
</html>
