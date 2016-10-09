<!DOCTYPE html>
<html lang="en">
<?php
$username = 'root';
$password = '';
$host = 'localhost';

$conn = new PDO("mysql:host=$host", $username, $password);

$sql = "create table time(

id int NOT NULL AUTO_INCREMENT,
time DATE NOT NULL,
inout BOOLEAN not NULL

)";

$conn->exec($sql);


$sql = "INSERT INTO TIME (time, inout) VALUES (NOW(), true)";

$conn->exec($sql);


//$sql = "select * from time";
//$conn->query($sql);
//
//foreach ($conn->query($sql) as $line){
//  print_r($line);
//}

?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="stylesheet" href="/css/font-awesome.min.css">


    <title>Chrak</title>

    <!-- Bootstrap core CSS -->
    <link href="/bootstrap-3.3.2-dist/css/bootstrap.min.css" rel="stylesheet">

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
    <div class="jumbotron row">
      <div class="container col-sm-6">
        <h1>Chrak</h1>
        <p>Time tracking for billable hours.</p>
      </div>
      <div class="container col-sm-6">
        <div class="input-group">
          <span class="input-group-addon">Hourly $</span>
          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
          <span class="input-group-addon">.00</span>
        </div>
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
          <button id="time"><i class="fa fa-clock-o" aria-hidden="true"></i> Time Start</button>
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

    <?php
    try {


      $sql = "select * from time";
      print_r($sql);

      foreach ($conn->query($sql) as $line) {
        print_r($line);
      }

      $sql = "select * from information_schema.tables";

      echo $conn->query($sql);

    }catch(Exception $e) { var_dump($e->getMessage()); }

    ?>

            <!-- Bootstrap core JavaScript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="/jquery.min.js"></script>
            <script src="bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
            <script src="time.js"></script>
          </body>
          </html>
