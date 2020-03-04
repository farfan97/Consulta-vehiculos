
<?php
  $mysqlii = new mysqli('localhost', 'root', '', 'acme');
?>
      <select name='tipo'>
        <option value="0">Seleccione:</option>
        <?php
          $queryi = $mysqlii -> query ("SELECT * FROM tipo");
          while ($valoresi = mysqli_fetch_array($queryi)) {
            echo '<option value="'.$valoresi[id].'">'.$valoresi[tipo].'</option>';
          }
        ?>
      </select>
