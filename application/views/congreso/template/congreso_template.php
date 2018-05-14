<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Inicio</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    </head>
    <body>
        <?php
          echo $nombre.'<br>';
          echo $eslogan.'<br>';
          echo $logo.'<br>';
          echo $fecha_inicio.'<br>';
          echo $fecha_fin.'<br>';
        ?>
        <br><br>
        <?php
          if($usuario_nombre && $usuario_usuario){
            echo 'Sesion iniciada: '.$usuario_nombre;
          } else{
            echo 'No has iniciado sesion.';
          }
        ?>
        <hr>

        <ul>

        </ul>
        <?php
          echo '<li>Inicio</li>
                <li>Asistentes</li>
                <li>Talleres</li>
                <li>Visitas</li>
                <li><a href="/congreso/'.$nombre.'/usuarios">Usuarios</a></li>';
         ?>
        <hr>
        <?php
          if ($usuario_nombre && $usuario_usuario) {
            echo form_open('../../../usuarios/logout/'.$nombre);
            echo '<input type="submit" name="salir" value="Salir">';
            echo form_close();
          }
        ?>

        <?php if(!($usuario_nombre && $usuario_usuario)) {?>
        <?php echo form_open('../../usuarios/login/'.$nombre); ?>
          <input type="text" name="nombre" placeholder="Nombre de usuario">
          <br>
          <input type="password" name="clave" placeholder="Contraseña">
          <br>
          <input type="submit" name="entrar" value="Entrar">
        <?php echo form_close() ;
        }?>

        <?php $this->load->view('congreso/modulos/'.$modulo.'') ?>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </body>
</html>
