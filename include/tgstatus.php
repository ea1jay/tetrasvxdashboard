  <div class="card">
    <div class="card-header">
      Talk Group Status
    </div>
    <div class="table-responsive">
      <table id="currtx" class="table table-condensed table-striped table-hover">
        <thead>
          <tr>
            <th>Current TG (#0=Default)</th>
          </tr>
        </thead>
        <tbody id="tgline">
         <?php
        $tg = getCurrentTG($logLines);
        $deftg = getDefaultTG($config);
        echo  "<th><center>".$tg."</center></th>";
		echo "<th><center>".$deftg."</center></th>";
         ?>
        </tbody>
      </table>
    </div>
  </div>

