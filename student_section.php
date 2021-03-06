<html>
<head>
<meta charset="utf-8">
<title>Student section</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="sam_table.css">
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
<script type="text/javascript">
$(document).ready(function(){
    $('.filterable .btn-filter').click(function(){
        var $panel = $(this).parents('.filterable'),
        $filters = $panel.find('.filters input'),
        $tbody = $panel.find('.table tbody');
        if ($filters.prop('disabled') == true) {
            $filters.prop('disabled', false);
            $filters.first().focus();
        } else {
            $filters.val('').prop('disabled', true);
            $tbody.find('.no-result').remove();
            $tbody.find('tr').show();
        }
    });

    $('.filterable .filters input').keyup(function(e){
        /* Ignore tab key */
        var code = e.keyCode || e.which;
        if (code == '9') return;
        /* Useful DOM data and selectors */
        var $input = $(this),
        inputContent = $input.val().toLowerCase(),
        $panel = $input.parents('.filterable'),
        column = $panel.find('.filters th').index($input.parents('th')),
        $table = $panel.find('.table'),
        $rows = $table.find('tbody tr');
        /* Dirtiest filter function ever ;) */
        var $filteredRows = $rows.filter(function(){
            var value = $(this).find('td').eq(column).text().toLowerCase();
            return value.indexOf(inputContent) === -1;
        });
        /* Clean previous no-result if exist */
        $table.find('tbody .no-result').remove();
        /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
        $rows.show();
        $filteredRows.hide();
        /* Prepend no-result row if all rows are filtered */
        if ($filteredRows.length === $rows.length) {
            $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
        }
    });
});
</script>
</head>
<body background="bg10.jpeg">
<div class="navbar navbar-inverse collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Exam Registration</a></li>
        <li><a href="login_index.php">Home</a></li>
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
            <!--<li><a href="admin_login.html">Admin</a></li>-->
             </ul>
        </li>
      </ul>
</div>
<br><br>
<center>
<div class="container">
    <h3>Exam Schedule for Students</h3>
    <hr>
    <!--<p>Inspired by this <a href="http://bootsnipp.com/snippets/featured/panel-tables-with-filter">snippet</a></p>-->
    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Fifth Sem - CSE</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="#" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Code" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Exam" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Date" disabled></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>CS8501</td>
                        <td>Data Communication</td>
                        <td>10/11/14</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>CS8502</td>
                        <td>Micro Processor</td>
                        <td>12/11/14</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>CS8503</td>
                        <td>System Software</td>
                        <td>13/11/14</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>CS8504</td>
                        <td>Theory of Computation</td>
                        <td>15/11/14</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>CS8551</td>
                        <td>Object Oriented Analysis</td>
                        <td>16/11/14</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
    <div align="right">
             <button onclick="window.location='fifth_cse.php';" type="button" class="btn btn-primary">Register</button>
    </div>
    <hr>
    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Fourth Sem - CSE</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="#" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Code" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Exam" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Date" disabled></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>CS8401</td>
                        <td>Algorithm Analysis</td>
                        <td>18/11/14</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>CS8402</td>
                        <td>Java and internet Programming</td>
                        <td>20/11/14</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>CS8451</td>
                        <td>Operating Systems</td>
                        <td>21/11/14</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>CS8452</td>
                        <td>Software Engineering</td>
                        <td>23/11/14</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>CS8354</td>
                        <td>Probability and Queueing Therory</td>
                        <td>25/11/14</td>
                    </tr>
                </tbody>
            </table>
            
        </div>
    </div>
    <div align="right">
             <button onclick="window.location='fourth_cse.php';" type="button" class="btn btn-primary">Register</button>
    </div>
    <hr>
    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Fifth Sem - IT</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="#" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Code" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Exam" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Date" disabled></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>IT8501</td>
                        <td>Computer Organisation</td>
                        <td>11/11/14</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>IT8502</td>
                        <td>Data Structures</td>
                        <td>12/11/14</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>IT8503</td>
                        <td>Software Internals</td>
                        <td>15/11/14</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>IT8504</td>
                        <td>Electical Applications</td>
                        <td>17/11/14</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>IT8551</td>
                        <td>Compiler Design</td>
                        <td>16/11/14</td>
                    </tr>
                </tbody>
            </table>
            
        </div>
    </div>
    <div align="right">
             <button onclick="window.location='fifth_it.php';" type="button" class="btn btn-primary">Register</button>
    </div>
    <hr>
    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Fourth Sem - IT</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="#" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Code" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Exam" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Date" disabled></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>IT8401</td>
                        <td>Digital Processing</td>
                        <td>21/11/14</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>IT8502</td>
                        <td>Database Management</td>
                        <td>23/11/14</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>IT8503</td>
                        <td>Data Structures</td>
                        <td>25/11/14</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>IT8504</td>
                        <td>Algebra and Number Theory</td>
                        <td>27/11/14</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>IT8551</td>
                        <td>Computer Principles</td>
                        <td>30/11/14</td>
                    </tr>
                </tbody>
            </table>
            
        </div>
    </div>
    <div align="right">
             <button onclick="window.location='fourth_it.php';" type="button" class="btn btn-primary">Register</button>
    </div>
    <br><br>
</div>
</center>
</body>
</html>