<html>
<head>
    <meta charset="utf-8">
  <title>Result Alert System </title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="style1.css">
  <script src="js/bootstrap.js" type="text/javascript"></script>
  <script src="js/jquery-1.11.1.js" type="text/javascript"></script>
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
  </script>
  
</head>
<body background-color="#F5FFFA">
    <div class="navbar navbar-inverse collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Admin Section</a></li>
        <li><a href="admin_index.php">Home</a></li>
        <li class="active"><a href="#">About</a></li>
        <li><a href="admin_news.php">News</a></li>
      </ul>
      <ul class="nav navbar-nav pull-right">
        <!--<li><a href="#">Link</a></li>-->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              Welcome,
              <?php 
                session_start(); 
                if (isset($_SESSION['admin_user']))
                {
                   echo $_SESSION['admin_user'];
                } 
              ?>
            <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="login_admin.html">Logout</a></li>
            <li><a href="admin_Section.php">Results</a></li>
          </ul>
        </li>
      </ul>
</div>
<br><br>
<center>
<div id="cp_widget_5fc4ece3-03a0-4029-8696-0246e86cdcbb">...</div><script type="text/javascript">
var cpo = []; cpo["_object"] ="cp_widget_5fc4ece3-03a0-4029-8696-0246e86cdcbb"; cpo["_fid"] = "AkOARA8IY54K";
var _cpmp = _cpmp || []; _cpmp.push(cpo);
(function() { var cp = document.createElement("script"); cp.type = "text/javascript";
cp.async = true; cp.src = "//www.cincopa.com/media-platform/runtime/libasync.js";
var c = document.getElementsByTagName("script")[0];
c.parentNode.insertBefore(cp, c); })(); </script><noscript>Powered by Cincopa <a href='http://www.cincopa.com/video-hosting'>Video Hosting for Business</a> solution.<span>case tool</span><span>height</span><span> 300</span><span>width</span><span> 450</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>height</span><span> 449</span><span>width</span><span> 600</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>height</span><span> 525</span><span>width</span><span> 700</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>height</span><span> 425</span><span>width</span><span> 640</span><span>orientation</span><span> 1</span><span>camerasoftware</span><span> Adobe Photoshop CS4 </span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>height</span><span> 525</span><span>width</span><span> 700</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>height</span><span> 638</span><span>width</span><span> 960</span><span>camerasoftware</span><span> Google</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>height</span><span> 294</span><span>width</span><span> 522</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>height</span><span> 502</span><span>width</span><span> 960</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>height</span><span> 1000</span><span>width</span><span> 2000</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>height</span><span> 308</span><span>width</span><span> 700</span><span>orientation</span><span> 1</span><span>camerasoftware</span><span> Adobe Photoshop Elem</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>height</span><span> 900</span><span>width</span><span> 1600</span><span>orientation</span><span> 1</span><span>camerasoftware</span><span> Adobe Photoshop CS6 </span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>cameramake</span><span> OLYMPUS OPTICAL CO.,</span><span>height</span><span> 1536</span><span>flash</span><span> 25</span><span>camerasoftware</span><span> 22-1012             </span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 2048</span><span>orientation</span><span> 1</span><span>cameramodel</span><span> u10D,S300D,u300D</span><span>height</span><span> 1463</span><span>width</span><span> 2197</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>cameramake</span><span> Canon</span><span>height</span><span> 1125</span><span>flash</span><span> 16</span><span>camerasoftware</span><span> Adobe Photoshop CS2 </span><span>originaldate</span><span> 5/22/2008 11:45:09 AM</span><span>width</span><span> 1688</span><span>orientation</span><span> 1</span><span>cameramodel</span><span> Canon EOS 20D</span><span>height</span><span> 1133</span><span>width</span><span> 1694</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>height</span><span> 638</span><span>width</span><span> 960</span><span>camerasoftware</span><span> Google</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>height</span><span> 321</span><span>width</span><span> 485</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>height</span><span> 434</span><span>width</span><span> 636</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>height</span><span> 421</span><span>width</span><span> 500</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>height</span><span> 667</span><span>width</span><span> 1000</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>cameramake</span><span> NIKON CORPORATION</span><span>height</span><span> 521</span><span>orientation</span><span> 1</span><span>camerasoftware</span><span> Adobe Photoshop CS3 </span><span>originaldate</span><span> 3/25/2012 1:27:38 AM</span><span>width</span><span> 921</span><span>cameramodel</span><span> NIKON D700</span><span>height</span><span> 360</span><span>width</span><span> 640</span><span>orientation</span><span> 1</span><span>camerasoftware</span><span> Adobe Photoshop CS3 </span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>height</span><span> 519</span><span>width</span><span> 941</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>height</span><span> 400</span><span>width</span><span> 640</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>height</span><span> 320</span><span>width</span><span> 570</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>height</span><span> 329</span><span>width</span><span> 436</span><span>orientation</span><span> 1</span><span>camerasoftware</span><span> Paint.NET v3.22</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>height</span><span> 765</span><span>width</span><span> 1024</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>height</span><span> 1080</span><span>width</span><span> 1920</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>height</span><span> 675</span><span>width</span><span> 900</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>height</span><span> 720</span><span>width</span><span> 1280</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span></noscript><br><br>
</center>
<div class="glyphicon">
    <p> <font color="black"><h3><i><b> 
               To implement the E-mail in this proposed project to get exam results quickly and efficiently. Presently candidates who written exam need to wait for long time to get their exam result, even after university/board published the result. To solve this problem, a new system is necessary. In this system candidates know their results via E-mail quickly instead of see the results in University/Board websites. 
    </h3></font></p>
</div>
<div>
<br><br>
</div>
</body>
</html>