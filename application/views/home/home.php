<ul>
<?php
  foreach ($congresos as $key => $value) {
    echo '<li> <a href="/congreso/'.$value['nombre'].'">'.$value['nombre'].'</li>';
  }
 ?>
</ul>
