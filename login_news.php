<html>
<head>
<meta charset="utf-8">
<title>News</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="timeline.css">
<script src="js/bootstrap.min.js" type="text/javascript"></script>
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
        <li class="active"><a href="#">News Feed</a></li>
        <li><a href="login_index.php">Home</a></li>
        <li><a href="login_about.php">About</a></li>
        <li class="active"><a href="#">News</a></li>
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
             </ul>
        </li>
      </ul>
</div>
<br><br>
	<div class="container">
	<div class="row">
    
        <div class="timeline-centered">

        <article class="timeline-entry">

            <div class="timeline-entry-inner">

                <div class="timeline-icon bg-success">
                    <i class="entypo-feather"></i>
                </div>

                <div class="timeline-label">
                    <h2><a href="#">Admin</a> <span>posted a update</span></h2>
                    <p>The exams date are posted in the website.Kindly students register for their respective exams.</p>
                </div>
            </div>

        </article>


        <article class="timeline-entry">

            <div class="timeline-entry-inner">

                <div class="timeline-icon bg-secondary">
                    <i class="entypo-suitcase"></i>
                </div>

                <div class="timeline-label">
                    <h2><a href="#">Results</a></h2>
                    <p>PG students results will update at <strong>Website</strong> Today.</p>
                </div>
            </div>

        </article>


        <article class="timeline-entry">

            <div class="timeline-entry-inner">

                <div class="timeline-icon bg-info">
                    <i class="entypo-location"></i>
                </div>

                <div class="timeline-label">
                    <h2><a href="#">Admin</a> <span>posted a update exam date in</span> <a href="#">Website</a></h2>

                    <blockquote>Students register for the exams.All the best for exams</blockquote>

                   
                </div>
            </div>

        </article>


        <article class="timeline-entry">

            <div class="timeline-entry-inner">

                <div class="timeline-icon bg-warning">
                    <i class="entypo-camera"></i>
                </div>

                <div class="timeline-label">
                    <h2><a href="#">Dr.Shsshi Tharoor</a> <span>launch</span> <a href="#">Kurukshetra'15 website </a></h2>

                    <blockquote>He deliver his inspirational speech to students.</blockquote>

                    <img src="ku.jpg" class="img-responsive img-rounded full-width">
                </div>
            </div>

        </article>


        <article class="timeline-entry begin">

            <div class="timeline-entry-inner">

                <div class="timeline-icon" style="-webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg);">
                    <i class="entypo-flight"></i> +
                </div>

            </div>

        </article>

    </div>

    
	</div>
</div>
<br><br>
</body>
</html> 