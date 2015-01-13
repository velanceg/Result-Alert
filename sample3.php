<html>
<head>
  <meta charset="utf-8">
  <title>Result Alert System </title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script src="js/bootstrap.js" type="text/javascript"></script>
  <script src="js/jquery-1.11.1.js" type="text/javascript"></script>
  <style type="text/css">
    body {
          background-image:url(edu4.jpg);
          background-size: 100%;
          }
  </style>
  <script type="text/javascript">
 $(function(){
    $(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            });
    });

var num;
var temp=0;
var speed=5000; /* this is set for 5 seconds, edit value to suit requirements */
var preloads=[];

/* add any number of images here */

preload(
'edu1.jpg',
'edu2.jpg',
'edu8.jpg',
'edu4.jpg',
'edu6.jpg',
'edu9.jpg'
);

function preload(){

for(var c=0;c<arguments.length;c++) {
preloads[preloads.length]=new Image();
preloads[preloads.length-1].src=arguments[c];
}
}

function rotateImages() {
num=Math.floor(Math.random()*preloads.length);
if(num==temp){
rotateImages();
}
else{
document.body.style.backgroundImage='url('+preloads[num].src+')';
temp=num;

setTimeout(function(){rotateImages()},speed);
}
}

if(window.addEventListener){
window.addEventListener('load',function(){setTimeout(function(){rotateImages()},speed)},false);
}
else {
if(window.attachEvent){
window.attachEvent('onload',function(){setTimeout(function(){rotateImages()},speed)});
}
}
</script>
</head>
<body>
  <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="navbar navbar-inverse collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="news.html">News</a></li>
        <li><a href="contact.html">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav pull-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login/Register<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="Student_login.html">Student</a></li>
            <li><a href="login_admin.html">Admin</a></li>
             </ul>
        </li>
      </ul>
    </div>
</body>
</html>