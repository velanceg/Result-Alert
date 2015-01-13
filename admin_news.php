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
        <li><a href="admin_index.php">Home</a></li>
        <li><a href="admin_about.php">About</a></li>
        <li class="active"><a href="#">News</a></li>
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
	<div class="container">
	<div class="row">
    
        <div class="timeline-centered">

        <article class="timeline-entry">

            <div class="timeline-entry-inner">

                <div class="timeline-icon bg-success">
                    <i class="entypo-feather"></i>
                </div>

                <div class="timeline-label">
                    <h2><a href="#">Art Ramadani</a> <span>posted a status update</span></h2>
                    <p>Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth chief trees but rooms think may.</p>
                </div>
            </div>

        </article>


        <article class="timeline-entry">

            <div class="timeline-entry-inner">

                <div class="timeline-icon bg-secondary">
                    <i class="entypo-suitcase"></i>
                </div>

                <div class="timeline-label">
                    <h2><a href="#">Job Meeting</a></h2>
                    <p>You have a meeting at <strong>Laborator Office</strong> Today.</p>
                </div>
            </div>

        </article>


        <article class="timeline-entry">

            <div class="timeline-entry-inner">

                <div class="timeline-icon bg-info">
                    <i class="entypo-location"></i>
                </div>

                <div class="timeline-label">
                    <h2><a href="#">Arlind Nushi</a> <span>checked in at</span> <a href="#">Laborator</a></h2>

                    <blockquote>Great place, feeling like in home.</blockquote>

                   
                </div>
            </div>

        </article>


        <article class="timeline-entry">

            <div class="timeline-entry-inner">

                <div class="timeline-icon bg-warning">
                    <i class="entypo-camera"></i>
                </div>

                <div class="timeline-label">
                    <h2><a href="#">Arber Nushi</a> <span>changed his</span> <a href="#">Profile Picture</a></h2>

                    <blockquote>Pianoforte principles our unaffected not for astonished travelling are particular.</blockquote>

                    <img src="http://themes.laborator.co/neon/assets/images/timeline-image-3.png" class="img-responsive img-rounded full-width">
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