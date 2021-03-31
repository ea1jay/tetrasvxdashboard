   <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" lang="en">
  <head>
    <meta name="robots" content="index" />
    <meta name="robots" content="follow" />
    <meta name="language" content="English" />
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="Author" content="Iñigo Bastarrika (EA2CQ)" />
    <meta name="Description" content="Tetra Dash Config Editor" />
    <meta name="KeyWords" content="Tetra" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="pragma" content="no-cache" />
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <meta http-equiv="Expires" content="0" />
    <title>Tetra Dashboard Config Editor</title>

  </head>
  <body>

  <div class="container">
  <div class="contentwide">
  <?php
  include "config/config.php";
if(isset($_POST['data'])) {
        // File Wrangling
        exec('sudo cp ' . DASHCONFIG . ' /tmp/fmehg65694eh.tmp');
        exec('sudo chown svxlink:svxlink /tmp/fmehg65694eh.tmp');
        exec('sudo chmod 664 /tmp/fmehg65694eh.tmp');

        // Open the file and write the data
        $filepath = '/tmp/fmehg65694eh.tmp';
        $fh = fopen($filepath, 'w');
        fwrite($fh, $_POST['data']);
        fclose($fh);
        exec('sudo cp /tmp/fmehg65694eh.tmp ' . DASHCONFIG);
        exec('sudo chmod 644 ' . DASHCONFIG);
        exec('sudo chown root:root' . DASHCONFIG);

        // Re-open the file and read it
        $fh = fopen($filepath, 'r');
        $theData = fread($fh, filesize($filepath));
        echo '<p style="color: red; text-align: center">Dash Config file has been modified!</p>';
} else {
        // File Wrangling
        exec('sudo cp ' . DASHCONFIG . ' /tmp/fmehg65694eh.tmp');
        exec('sudo chown svxlink:svxklink /tmp/fmehg65694eh.tmp');
        exec('sudo chmod 664 /tmp/fmehg65694eh.tmp');

        // Open the file and read it
        $filepath = '/tmp/fmehg65694eh.tmp';
        $fh = fopen($filepath, 'r');
        $theData = fread($fh, filesize($filepath));
}
fclose($fh);

?>

<form name="test" method="post" action="">
<textarea name="data" cols="80" rows="45"><?php echo $theData; ?></textarea><br />
<br><br>
<input type="submit" name="submit" value="<?php echo "APPLY" ?>" />
</form>
<br>
<a href="index.php">
   <button>BACK TO TETRA DASHBOARD</button>
</a>
</div>
</div>

</div>
</body>
</html>
