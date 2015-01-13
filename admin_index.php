<html>
<head>
  <meta charset="utf-8">
  <title>Result Alert System </title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
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
<body background="bg8.jpeg">
  <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="navbar navbar-inverse collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="admin_about.php">About</a></li>
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
          <li><a href="admin_section.php">Results</a></li>
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