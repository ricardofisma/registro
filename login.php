<?php session_start();

    if(isset($_SESSION['usuario'])) {
        header('location: index.php');
    }

    $error = '';
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];
        $clave = hash('sha512', $clave);
        
        try{
          //  $conexion = new PDO('mysql:host=localhost;dbname=proyecto', 'root', '');
               $conexion = new PDO('mysql:host=b2fl5juvonx7jy2herss-mysql.services.clever-cloud.com;dbname=b2fl5juvonx7jy2herss', 'u2torrdwkgyxog4s', 'PPe6V7lNx0FjMHYfApZI');    
        }catch(PDOException $prueba_error){
                echo "Error: " . $prueba_error->getMessage();
            }
        
        $statement = $conexion->prepare('
        SELECT * FROM logo WHERE usuario = :usuario AND clave = :clave'
        );
        
        $statement->execute(array(
            ':usuario' => $usuario,
            ':clave' => $clave
        ));
            
        $resultado = $statement->fetch();
        
        if ($resultado !== false){
            $_SESSION['usuario'] = $usuario;
            header('location: principal.php');
        }else{
            $error .= '<i style="color: red;">Este usuario no existe</i>';
        }
    }

require 'frontend/login-vista.php';


?>