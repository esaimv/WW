<?php
  if($errores){
    echo '<div><b>'.$errores.'</b></div>';
  }
  if(validation_errors()){
    echo '<div><b>Ingrese un usuario y/o contraseña validos.</b></div>';
  }
?>

<?php
  if ($usuario_nombre && $usuario_usuario) {
    echo '<hr>';
    echo form_open('../../../usuarios/nuevo/'.$nombre);
    echo '<input type="text" name="nombre_usuario" placeholder="Nombre del nuevo usuario"> <br>
          <input type="text" name="usuario_usuario" placeholder="Nombre de usuario"> <br>
          <input type="text" name="clave_usuario" placeholder="Clave del nuevo usuario"> <br>
          <input type="submit" name="guardar_usuario" value="Guardar"> <br>
          ';
    echo form_close();

  }
?>
