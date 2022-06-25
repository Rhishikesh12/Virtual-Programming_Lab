<?php

require '../includes/dbh.inc.php';

  $sql = "SELECT * FROM students;";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    echo '<table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Progress</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
        <tbody>';
    while ($row = mysqli_fetch_assoc($result)) {
          echo '<tr class="row-white">
                    <th scope="row">'.$row['stdid'].'</th>
                        <td>'.$row['stdName'].'</td>
                        <td><a class="btn btn-warning dark-btn" href="../Teacher Index/std-prog-view.php?uid='.$row['stdName'].'">View</a></td>
                        <td><a class="btn btn-danger dark-btn" href="thdh.php">Delete</a></td>
                    </tr>';
                }
    echo '</tbody>
    </table>';
  }
  else {
      echo '<h2>Looks like there is no entry in database</h2>';
  }
  