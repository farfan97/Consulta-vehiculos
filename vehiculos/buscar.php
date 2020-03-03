        <?php
        include "header.php";
        // Vamos a pasar una variable $_GET a nuestro ejemplo, en este caso es
        // 'aid' para 'actor_id' de nuestra base de datos Sakila. Le vamos a asignar un
        // valor predeterminado de 1, y a amoldarla a un integer para evitar inyecciones
        // de SQL y/o problemas de seguridad relacionados. El manejo de todo esto va más
        // allá del alcance de este sencillo ejemplo:
        //   http://example.org/script.php?aid=42
        $aid = $_GET['busqueda'];

        //if (isset($_GET['aid']) && is_numeric($_GET['aid'])) {
            //$aid = (int) $_GET['aid'];
        //} else {
        //    $aid = 1;
        //}
        // Conectarse a y seleccionar una base de datos de MySQL llamada sakila
        // Nombre de host: 127.0.0.1, nombre de usuario: tu_usuario, contraseña: tu_contraseña, bd: sakila
        $mysqli = new mysqli('localhost', 'root', '', 'acme');

        // ¡Oh, no! Existe un error 'connect_errno', fallando así el intento de conexión
        if ($mysqli->connect_errno) {
            // La conexión falló. ¿Que vamos a hacer?
            // Se podría contactar con uno mismo (¿email?), registrar el error, mostrar una bonita página, etc.
            // No se debe revelar información delicada

            // Probemos esto:
            echo "Lo sentimos, este sitio web está experimentando problemas.";

            // Algo que no se debería de hacer en un sitio público, aunque este ejemplo lo mostrará
            // de todas formas, es imprimir información relacionada con errores de MySQL -- se podría registrar
            echo "Error: Fallo al conectarse a MySQL debido a: \n";
            echo "Errno: " . $mysqli->connect_errno . "\n";
            echo "Error: " . $mysqli->connect_error . "\n";

            // Podría ser conveniente mostrar algo interesante, aunque nosotros simplemente saldremos
            exit;
        }

        // Realizar una consulta SQL
        $sql = "SELECT * FROM cars WHERE id = $aid";
        if (!$resultado = $mysqli->query($sql)) {
            // ¡Oh, no! La consulta falló.
            echo "Lo sentimos, este sitio web está experimentando problemas.";

            // De nuevo, no hacer esto en un sitio público, aunque nosotros mostraremos
            // cómo obtener información del error
            echo "Error: La ejecución de la consulta falló debido a: \n";
            echo "Query: " . $sql . "\n";
            echo "Errno: " . $mysqli->errno . "\n";
            echo "Error: " . $mysqli->error . "\n";
            exit;
        }

        // ¡Uf, lo conseguimos!. Sabemos que nuestra conexión a MySQL y nuestra consulta
        // tuvieron éxito, pero ¿tenemos un resultado?
        if ($resultado->num_rows === 0) {
            // ¡Oh, no ha filas! Unas veces es lo previsto, pero otras
            // no. Nosotros decidimos. En este caso, ¿podría haber sido
            // actor_id demasiado grande?
            echo "Lo sentimos. No se pudo encontrar una coincidencia para el ID $aid. Inténtelo de nuevo.";
            exit;
        }

        // Ahora, sabemos que existe solamente un único resultado en este ejemplo, por lo
        // que vamos a colocarlo en un array asociativo donde las claves del mismo son los
        // nombres de las columnas de la tabla
        $actor = $resultado->fetch_assoc();
        ?>
        <div class="container">
          <h2><?php echo $actor['placa'];?></h2>
          <table class="responsive-table centered striped bordered">
            <head>
              <td>Propietario</td>
              <td>Conductor</td>
              <td>Color</td>
            </head>
            <body>
              <tr>
                <td><?php echo $actor['propietario'];?></td>
                <td><?php echo $actor['driver'];?></td>
                <td><?php echo $actor['color'];?></td>
              </tr>
            </body>
          </table>
        </div>

        <?php
        // El script automáticamente liberará el resultado y cerrará la conexión
        // a MySQL cuando finalice, aunque aquí lo vamos a hacer nostros mismos
        $resultado->free();
        $mysqli->close();
        ?>
        <div class="container">
          <a href="<?=$_SERVER["HTTP_REFERER"]?>" class="waves-effect waves-light btn blue accent-2">
            <i class="material-icons left">navigate_before</i>
            Atras
          </a>
        </div>
        <?php include "footer.php"; ?>
