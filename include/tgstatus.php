 <div class="card">
    <div class="card-header">
      Talk Group Status
    </div>
    <div class="table-responsive">
      <table id="currtx" class="table table-condensed table-striped table-hover">
        <thead>
          <tr>
            <th>Current TG (#0=<?php  $deftg = getDefaultTG($config); echo $deftg;?>)</th>
          </tr>
        </thead>
        <tbody id="tgline">
         <?php
        $tg = getCurrentTG($logLines);
        $mon = getMonitorTGs($config);
        echo  "<th><center>".$tg."</center></th>";
		echo "<th><center>".$mon."</center></th>";
         ?>
        </tbody>
      </table>
    </div>
  </div>
