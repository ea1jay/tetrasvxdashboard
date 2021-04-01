<?php

$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$start = $time;
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
// do not touch these includes!
include "config/config.php";
include "include/tools.php";
include "include/functions.php";
include "include/init.php";
include "version.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta http-equiv="refresh" content="<?php echo REFRESHAFTER?>">

  <title>Tetra DMO Repeater Dashboard for <?php echo getConfigItem(SVXLOGICSECTION, "CALLSIGN", $configs);?></title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
.green
{
  background-color: #4CAF50;
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  width:120px;
}

.blue
{
  background-color: blue;
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  width:120px;
}

.red
{
  background-color: red;
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  width:120px;
}

.black
{
  background-color: black;
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  width:120px;
}

.magenta
{
  background-color: magenta;
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  width:120px;
}

.cyan
{
  background-color: cyan;
  border: none;
  color: black;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  width:120px;
}

.yellow
{
  background-color: yellow;
  border: none;
  color: black;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  width:120px;
}


</style>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">HAM Tetra Repeater Dashboard - <?php echo getConfigItem(SVXLOGICSECTION, "CALLSIGN", $configs); ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="log.php">Log</a>
          </li>
	   <li class="nav-item">
            <a class="nav-link" href="editdash.php">Edit Dash Config</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="editconfig.php">Edit SVX Config</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="mailto:<?php echo CONTACTEMAIL ?>">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <?php checkSetup(); ?>
  <div class="container-fluid">
    <div class="row">
      <?php
        include "include/sysinfo.php";
        include "include/disk.php";
      ?>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-6">
        <?php include "include/txstatus.php"; ?>
      </div>
      <div class="col-6">
        <?php include "include/status.php"; ?>
      </div>
    </div>
  </div>
   <div class="container-fluid">
    <div class="row">
      <div class="col-6">
        <?php include "include/tgstatus.php"; ?>
      </div>
     <div class="col-6">
        <?php include "include/lastheard.php"; ?>
      </div>
    </div>
  </div>


 <?php
        if(array_key_exists('button1', $_POST)) {
            button1();
        }
        if(array_key_exists('button2', $_POST)) {
            button2();
        }
	 if(array_key_exists('button3', $_POST)) {
            button3();
        }
	 if(array_key_exists('button4', $_POST)) {
            button4();
        }
	 if(array_key_exists('button5', $_POST)) {
            button5();
        }
	 if(array_key_exists('button6', $_POST)) {
            button6();
        }
	 if(array_key_exists('button7', $_POST)) {
            button7();
        }
	 if(array_key_exists('button8', $_POST)) {
            button8();
        }
	 if(array_key_exists('button9', $_POST)) {
            button9();
        }
	 if(array_key_exists('button10', $_POST)) {
            button10();
        }
        if(array_key_exists('button11', $_POST)) {
            button11();
        }
	if(array_key_exists('button12', $_POST)) {
            button12();
        }
	
        function button1() {
            $exec= "echo '" . KEY1[1] . "' > /tmp/svxlink_dtmf";
            exec($exec,$output);
            echo "<meta http-equiv='refresh' content='0'>";
        }
        function button2() {
	    $exec= "echo '" . KEY2[1] . "' > /tmp/svxlink_dtmf";
            exec($exec,$output);
            echo "<meta http-equiv='refresh' content='0'>";
        }
	function button3() {
	    $exec= "echo '" . KEY3[1] . "' > /tmp/svxlink_dtmf";        
            exec($exec,$output);
            echo "<meta http-equiv='refresh' content='0'>";
        }
	function button4() {
        $exec= "echo '" . KEY4[1] . "' > /tmp/svxlink_dtmf";
            exec($exec,$output);
            echo "<meta http-equiv='refresh' content='0'>";
        }
	function button5() {
	$exec= "echo '" . KEY5[1] . "' > /tmp/svxlink_dtmf";
            exec($exec,$output);
            echo "<meta http-equiv='refresh' content='0'>";
        }
	function button6() {
	    $exec= "echo '" . KEY6[1] . "' > /tmp/svxlink_dtmf";
            exec($exec,$output);
            echo "<meta http-equiv='refresh' content='0'>";
        }
	function button7() {
  	    $exec= "echo '" . KEY7[1] . "' > /tmp/svxlink_dtmf";
            exec($exec,$output);
            echo "<meta http-equiv='refresh' content='0'>";
        }
	function button8() {
	    $exec= "echo '" . KEY8[1] . "' > /tmp/svxlink_dtmf";
            exec($exec,$output);
            echo "<meta http-equiv='refresh' content='0'>";
        }
	function button9() {
 	    $exec= "echo '" . KEY9[1] . "' > /tmp/svxlink_dtmf";
            exec($exec,$output);
            echo "<meta http-equiv='refresh' content='0'>";
        }
	function button10() {
	    $exec= "echo '" . KEY10[1] . "' > /tmp/svxlink_dtmf";
            exec($exec,$output);
            echo "<meta http-equiv='refresh' content='0'>";
        }
	function button11() {
        $exec= "sudo service svxlink stop";
            exec($exec,$output);
	echo "REPEATER STOPPED !!!";
        }
	function button12() {
        $exec= "sudo service svxlink start";
            exec($exec,$output);
        header("Refresh:0");
        echo "REPEATER STARTED !!!";
        }

	
    ?>
    <br>
    <td><b><center>CONTROL BOARD</center></b></td>
    <br>
    <form method="post">
	<center>
        <input type="submit" name="button1"
                class=<?php echo KEY1[2] ?> value=<?php echo KEY1[0] ?> />
        <input type="submit" name="button2"
		class=<?php echo KEY2[2] ?> value=<?php echo KEY2[0] ?> />
        <input type="submit" name="button3"
		class=<?php echo KEY3[2] ?> value=<?php echo KEY3[0] ?> />
	<input type="submit" name="button4"
		class=<?php echo KEY4[2] ?> value=<?php echo KEY4[0] ?> />
	<input type="submit" name="button5"
		class=<?php echo KEY5[2] ?> value=<?php echo KEY5[0] ?> />
        <input type="submit" name="button6"
		class=<?php echo KEY6[2] ?> value=<?php echo KEY6[0] ?> />
	<input type="submit" name="button7"
		class=<?php echo KEY7[2] ?> value=<?php echo KEY7[0] ?> />
	<input type="submit" name="button8"
		class=<?php echo KEY8[2] ?> value=<?php echo KEY8[0] ?> />
	<input type="submit" name="button9"
                class=<?php echo KEY9[2] ?> value=<?php echo KEY9[0] ?> />
	<input type="submit" name="button10"
                class=<?php echo KEY10[2] ?> value=<?php echo KEY10[0] ?>  /><br><br>
	<?php $stop = getStop($loglines) ; $stopParts = explode(" ", $stop); echo ' Last time stopped: ' . $stopParts[0] . ' ' . $stopParts[1];?>
        <input type="submit" name="button11"
                class="red" value="REPE STOP" />
	<input type="submit" name="button12"
                class="red" value="REPE START" /><?php $boot = getBoot($loglines) ; $bootParts = explode(" ", $boot); echo " Last time started: " . $bootParts[0] . " " . $bootParts[1];?><br>

	</center>
    </form>

<form action="" method="POST">
  <center>
  <br><label for="mydtmf">Send DTMF command (must end with #):</label>  
  <input type="text" id="mydtmf" name="mydtmf">
  <input type="submit" class="buttonnegro"><br>
  </center>
   <br><br>
</form>

<?php
  if (isset($_POST["mydtmf"])){
   $exec= "echo '" . $_POST['mydtmf'] . "' > /tmp/svxlink_dtmf";
   exec($exec,$output);
   echo "<meta http-equiv='refresh' content='0'>";
  
}?>

 <footer class="footer-copyright">
    <span class="navbar navbar-dark bg-dark fixed-bottom text-muted">
      <div class="container-fluid">
        <span class="float:left;">
          <?php
            $lastReload = new DateTime();
            $lastReload->setTimezone(new DateTimeZone(TIMEZONE));
              echo "Tetra Dashboard ".VERSION." | Last Reload ".$lastReload->format('Y-m-d, H:i:s')." (".TIMEZONE.")";
            $time = microtime();
            $time = explode(' ', $time);
            $time = $time[1] + $time[0];
            $finish = $time;
            $total_time = round(($finish - $start), 4);
              echo '<!--Page generated in '.$total_time.' seconds.-->';
          ?>
        </span>
        <span class="float:right;">
          <strong>Made with love by EA2CQ based on KC1AWV's SVXLink Dashboard</strong>
        </span>
      </div>
    </span>
  </footer>


  <!-- Bootstrap core JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <Pureknob Gauge Javascript -->
  <script src="dist/js/pureknob.js" type="text/javascript"></script>

</body>

</html>
