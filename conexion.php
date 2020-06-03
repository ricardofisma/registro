<?php
    
    try{
       //  $conexion = new PDO('mysql:host=localhost;dbname=proyecto', 'root', '');
         $conexion = new PDO('mysql:host=b2fl5juvonx7jy2herss-mysql.services.clever-cloud.com;dbname=b2fl5juvonx7jy2herss', 'u2torrdwkgyxog4s', 'PPe6V7lNx0FjMHYfApZI');
    }catch(PDOException $prueba_error){
        echo "Error: " . $prueba_error->getMessage();
    }


?>