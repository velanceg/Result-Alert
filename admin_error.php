<html>
<head>
<meta charset="utf-8">
<title>Admin section</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="sam_table.css">
<link rel="stylesheet" type="text/css" href="error.css">
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
<body background="bg10.jpeg">
<div class="navbar navbar-inverse collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Result Section</a></li>
        <li><a href="admin_index.php">Home</a></li>
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
             </ul>
        </li>
      </ul>
</div>
<br><br>
<center>
<div class="container">
  <div class="row">
    <div class="span12">
      <div class="hero-unit center">
          <h1>Unauthorised Page!!! <small><font face="Tahoma" color="red">Error</font></small></h1>
          <br />
          <p><h4>The page you requested could not be accessed in your account,you not belong to this department. Use your browsers <b>Back</b> button to navigate to the page you have prevously come from</p>
          <p><b>Or you could just press this neat little button:</b></h4></p><br>
          <a href="admin_index.php" class="btn btn-large btn-info"><i class="icon-home icon-white"></i> Take Me Home</a>
        </div>
        <br />
        
    </div>
  </div>
</div>

</center>
</body>
</html>