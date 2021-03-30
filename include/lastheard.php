  <div class="card">
    <div class="card-header">
      Last Heard
    </div>
    <div class="table-responsive">
      <table id="lh" class="table table-condensed table-striped table-hover">
        <thead>
          <tr>
            <th>Recent Activity</th>
          </tr>
        </thead>
        <tbody id="lhline">
         <?php
        $lh = getLHLines($logLines);
        $lh2= str_replace("stop","",$lh);
        echo  "<th>".$lh2."</th>";        
         ?>
        </tbody>
      </table>
    </div>
  </div>

