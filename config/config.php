<?php
date_default_timezone_set('Europe/Madrid');
define("CONTACTEMAIL", "mymail@mydomain.es");
define("SVXLOGPATH", "/var/log");
define("SVXLOGPREFIX", "svxlink");
define("SVXCONFPATH", "/etc/svxlink/");
define("SVXCONFFILENAME", "svxlink.conf");
define("SVXLINKPATH", "/usr/bin/");
define("SVXLOGICSECTION", "TetraLogic");
define("SVXMODULES", array('Parrot', 'MetarInfo'));
define("TIMEZONE", "Europe/Madrid");
define("REFRESHAFTER", "10");
define("SHOWPROGRESSBARS", "on");
define("SHOWOLDMHEARD", "60");
define("TEMPERATUREALERT", "on");
define("TEMPERATUREHIGHLEVEL", "85");
define("SHOWQRZ", "on");
// Available colours for  keys background:  black, blue, red, magenta, green, cyan, yellow (Powered by ZX Spectrum palette)
define("KEY1", array('TG214','91214#','blue'));
define("KEY2", array('TG21433','9121433#','blue'));
define("KEY3", array('TG21482','9121482#','blue'));
define("KEY4", array('TG21401','9121401#','blue'));
define("KEY5", array('TG204','91204#','blue'));
define("KEY6", array('TG208','91208#','blue'));
define("KEY7", array('TG262','91262#','blue'));
define("KEY8", array('METAR','D61010#','green'));
define("KEY9", array('PARROT ON','D61004#','green'));
define("KEY10", array('PARROT OFF','D61005#','green'));
define("DASHCONFIG", "/var/www/html/tetrasvxdashboard/config/config.php");
?>
