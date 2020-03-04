
<?php
  $mysqlii = new mysqli('localhost', 'root', '', 'acme');
?>
      <select name='propietario'>
        <option value="0">Seleccione:</option>
        <?php
          $queryi = $mysqlii -> query ("SELECT * FROM persona");
          while ($valoresi = mysqli_fetch_array($queryi)) {
            echo '<option value="'.$valoresi[pnombre]. " " .$valoresi[snombre]. " " .$valoresi[apellidos].'">'.$valoresi[pnombre]. " " .$valoresi[snombre]. " " .$valoresi[apellidos].'</option>';
          }
        ?>
      </select>
