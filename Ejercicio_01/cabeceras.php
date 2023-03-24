<?php
   $headers = apache_request_headers();
   echo "<h1>Script cabeceras tarea de Pilar Fernández</h1>";
   foreach ($headers as $header => $value) {
      echo "$header: $value <br />\n";
   }
?>
