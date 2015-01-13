<html>
<head>
  <meta charset="utf-8">
  <title>Result Alert System </title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script src="js/bootstrap.js" type="text/javascript"></script>
  <script src="js/jquery-1.11.1.js" type="text/javascript"></script>
  <style type="text/css">
    body {
          background-image:url(edu5.jpg);
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
'edu8.jpg',
'edu4.jpg',
'edu5.jpg',
'edu13.jpg'
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
        <li class="active"><a href="#">Home</a></li>
        <li><a href="login_about.php">About</a></li>
        <li><a href="login_news.php">News</a></li>
        <li><a href="login_contact.php">Contact Us</a></li>    
  	</ul>
      <ul class="nav navbar-nav pull-right">
        <!--<li><a href="#">Link</a></li>-->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             Welcome,
              <?php 
                session_start(); 
                if (isset($_SESSION['login_user']))
                {
                   echo $_SESSION['login_user'];
                } 
              ?>
            <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="logout.php">Logout</a></li>
            <li><a href="student_section.php">Exam Registration</a></li>
            <!--<li><a href="admin_login.html">Admin</a></li>-->
             </ul>
        </li>
      </ul>
    </div>
</nav>
</div>
</div>
</body>
</html>