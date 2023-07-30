<!-- TABLE TO BE PRINTED (hidden from the page) -->
<div class="board" style="display: none;">
<table class="table table-striped print_out" id="sortTbl">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
          </tr>
        </thead>
        <tbody>
          <?php
          //connects to connection.php
          require_once('../../connection.php');

          $i = 1;
          $sql = "SELECT * FROM brgy_officials";
          //executes the sql
          $result = $connection->query($sql);

          //statement if sql is wrong
          if (!$result) {
            die("Invalid query: " . $connection->error);
          }

          while ($row = $result->fetch_assoc()) :
          ?>
            <tr>
              <td style="width: 100px;">
                <p style="font-size: 13px;"><?php echo $i++ ?></p>
              </td>
              <td>
                <?php echo $row['name'] ?><p style="font-size: 12px;"><?php echo $row['position'] ?></p>
              </td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
</div>
<!-- TABLE TO BE PRINTED (hidden from the page) -->