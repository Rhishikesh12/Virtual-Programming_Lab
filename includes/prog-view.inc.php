<?php

require '../includes/dbh.inc.php';

$username = $_GET['uid'];
$id = $_GET['id'];

  $sql = "SELECT * FROM `$username` WHERE expid='$id';";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    echo '<div class="row" style="margin-top: -90px;">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
    <div class="row">';
    while ($row = mysqli_fetch_assoc($result)) {
          echo '<label class="form-control-label code-label-blue">Code</label>
          <textarea for="view" class="form-control" id="view" name="view" rows="10" cols="50">//Students Code...'."\n".$row['expCode']."\n\n".'//Students Input...'."\n".$row['expInput']."\n\n".'
          //Students Output'."\n".$row['expOutput'].'</textarea>';
                }
    echo '</div>
    </div>
    <div class="col-sm-1"></div>';
  }
  else {
      echo '<h4 class="text-center" style="padding-top: 10px;">Looks like there is no entry in database</h4>';
  }
  