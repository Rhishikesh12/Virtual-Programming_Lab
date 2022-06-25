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
                    <th scope="col">Options</th>
                </tr>
            </thead>
        <tbody>';
    while ($row = mysqli_fetch_assoc($result)) {
          echo '<tr class="row-white">
                    <th scope="row">'.$row['stdid'].'</th>
                        <td>'.$row['stdName'].'</td>
                        <td><a class="btn btn-danger dark-btn" href="../includes/delete.inc.php?id='.$row['stdid'].'&username='.$row['stdName'].'&from=students">Delete</a></td>
                    </tr>';
                }
    echo '</tbody>
    </table>';
  }
  else {
      echo '<h4 class="text-center" style="padding-top: 10px;">Looks like there is no entry in database</h4>';
  }


  