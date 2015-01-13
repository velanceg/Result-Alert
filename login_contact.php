<html>
<head>
<meta charset="utf-8">
<title>Contact</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="login.css">
<link rel="stylesheet" type="text/css" href="contact.css">
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
        <li class="active"><a href="#">User Section</a></li>
        <li><a href="login_index.html">Home</a></li>
        <li><a href="login_about.html">About</a></li>
        <li><a href="login_news.html">News</a></li>
        <li class="active"><a href="#">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav pull-right">
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
<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Contact us <small>Feel free to contact us</small></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form metho="post" action="contact.php">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">General Service</option>
                                <option value="suggestions">Suggestions</option>
                                <!--<option value="product">Product Support</option>-->
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
            <address>
                <strong>College of Engineering,Guindy</strong><br>
                
                Anna University,Chennai<br>
                Tamilnadu-600025<br>
                <abbr title="Phone">
                    P:</abbr>
                (044) 456-7890
            </address>
            <address>
                <strong>Full Name</strong><br>
                <a href="mailto:#">annauniv.edu@gmail.com</a>
            </address>
            </form>
        </div>
    </div>
</div>
</body>
</html>