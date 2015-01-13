<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin_login</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="admin_style.css">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <!--<link rel="stylesheet" href="style.css" />-->
    <link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
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
<body>
<div class="navbar navbar-inverse collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Admin login</a></li>
        <li><a href="admin_index.php">Home</a></li>
        <li><a href="admin_about.php">About</a></li>
        <li><a href="admin_news.php">News</a></li>
        </ul>
      <ul class="nav navbar-nav pull-right">
        <!--<li><a href="#">Link</a></li>-->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome,
               <?php 
                session_start(); 
                if (isset($_SESSION['admin_user']))
                {
                   echo $_SESSION['admin_user'];
                } 
                ?>
            <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <!--<li><a href="Student_login.html">Student</a></li>-->
            <li><a href="login_admin.html">Logout</a></li>
             </ul>
        </li>
      </ul>
</div> 
<center> 
<section id="labels">
  <div class="container">
  <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="dl">
            <div class="brand">
                <h2>
                    CSE-V SEM
                </h2>
            </div>
            <div class="discount alizarin">
                100%
                <div class="type">
                    Results
                </div>
            </div>
            <div class="descr">
                <strong>
                    Exams conducted during Dec 2014*. 
                </strong> 
                Results are updated by the respective faculty members. 
            </div>
            <div class="ends">
                <small>
                    * send mail to all registered students.
                </small>
            </div>
            <div class="coupon midnight-blue">
                <a data-toggle="collapse" href="result_fifthcse.php" class="open-code">RELEASE RESULT</a>
                <div id="code-1" class="collapse code">
                    LV5MAY14
                </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div  class="dl">
            <div class="brand">
                <h2>
                    CSE-IV SEM
                </h2>
            </div>
            <div class="discount emerald">
                100%
                <div class="type">
                    Results
                </div>
            </div>
            <div class="descr">
                <strong>
                    Exams conducted during Dec 2014*. 
                </strong> 
                Resuts are updated by the respective faculty members. 
            </div>
            <div class="ends">
                <small>
                   * send mail to all registered students.
                </small>
            </div>
            <div class="coupon midnight-blue">
                <a data-toggle="collapse" href="result_fourthcse.php" class="open-code">RELEASE RESULT</a>
                <!--<div id="code-2" class="collapse in code">
                    MNO123ST
                </div>-->
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div  class="dl">
            <div class="brand">
                <h2>
                    IT-V SEM
                </h2>
            </div>
            <div class="discount peter-river">
            100%
                <div class="type">
                    Results
                </div>
            </div>
            <div class="descr">
                <strong>
                     Exams Conducted during Dec 2014*. 
                </strong> 
                Results are updated by the respective faculty members.
            </div>
            <div class="ends">
                <small>
                   * send mail to all registered students.
                </small>
            </div>
            <div class="coupon midnight-blue">
                <a data-toggle="collapse" href="result_fifthit.php" class="open-code">RELEASE RESULT</a>
                <div id="code-3" class="collapse code">
                    OLV4SY3R
                </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div  class="dl">
            <div class="brand">
                <h2>
                    IT-IV SEM
                </h2>
            </div>
            <div class="discount amethyst">
                100%
                <div class="type">
                    Results
                </div>
            </div>
            <div class="descr">
                <strong>
                    Exams are conducted during Dec 2014*. 
                </strong> 
                Results are updated by the respective faculty members. 
            </div>
            <div class="ends">
                <small>
                   * send mail to all registered students.
                </small>
            </div>
            <div class="coupon midnight-blue">
                <a data-toggle="collapse" href="result_fourthit.php" class="open-code">RELEASE RESULT</a>
                <div id="code-4" class="collapse code">
                    ZUY4OPLQ
                </div>
            </div>
          </div>
        </div>
  </div>
  </div>
</section>
</center>
</body>
</html>