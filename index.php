<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Chrak</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.3.2-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="jumbotron.css" rel="stylesheet"> -->

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Chrak</a>
        </div>
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Chrak</h1>
        <p>Time tracking for billable hours.</p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-sm-12">
          <h2>Time Clock</h2>
          <table id="timeList" class="table">
            <th>In/Out</th><th>Time</th><th>Amount</th>
          </table>
          <span id="total"></span>
          <button id="time">Time Start</button>
        </div>
      </div>
    </div>




    <ul>
      <li>Current user display name (purely informational): <tt><?php echo $_SERVER['HTTP_X_SANDSTORM_USERNAME']; ?></tt></li>
      <li>Current user hex user ID (stable; store this in the database): <tt><?php echo $_SERVER['HTTP_X_SANDSTORM_USER_ID']; ?></tt></li>
      <li>Current user privilege level (see the docs): <tt><?php echo $_SERVER['HTTP_X_SANDSTORM_PERMISSIONS']; ?></tt></li>
    </ul>
        <!-- Make the file if necessary. -->
        <?php if ( ! file_exists("/var/number.txt") ) { $fp = fopen('/var/number.txt', 'w'); fwrite($fp, "0"); fclose($fp); } ?>
        <!-- Increment it! This is a page view! -->
        <?php
        $fp = fopen('/var/number.txt', 'r'); $s = fread($fp, 1000); $new_s = intval($s) + 1; fclose($fp);
        $fp = fopen('/var/number.txt', 'w'); fwrite($fp, $new_s); fclose($fp);
        ?>
        <!-- Now print it out, using the simplistic and convenient PHP readfile(). -->
        <p>Current contents of the file: <?php readfile("/var/number.txt"); ?></p>


            <!-- Bootstrap core JavaScript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="/jquery.min.js"></script>
            <script src="bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
            <script src="time.js"></script>
          </body>
          </html>
