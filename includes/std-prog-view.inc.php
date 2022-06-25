<?php

require '../includes/dbh.inc.php';

$username = $_GET['uid'];

  $sql = "SELECT * FROM `$username`;";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    echo '<table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Exp-Name</th>
                    <th scope="col">Code</th>
                    <th scope="col">Input</th>
                    <th scope="col">Output</th>
                    <th scope="col">View All</th>
                </tr>
            </thead>
        <tbody>';
    while ($row = mysqli_fetch_assoc($result)) {
          echo '<tr class="row-white">
                    <th scope="row">'.$row['expid'].'</th>
                        <td>'.$row['expName'].'</td>
                        <td><a class="btn btn-warning dark-btn" href="name">View</a></td>
                        <td><a class="btn btn-warning dark-btn" href="name">View</a></td>
                        <td><a class="btn btn-warning dark-btn" href="name">View</a></td>
                        <td><a class="btn btn-warning dark-btn" href="../Teacher Index/std-prog.php?uid='.$username.'&id='.$row['expid'].'">View</a></td>
                    </tr>';
                }
    echo '</tbody>
    </table>';
  }
  else {
      echo '<h2>Looks like there is no entry in database</h2>';
  }
  