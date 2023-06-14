<?php

class Login {
    private $email;
    private $password;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function validar()
    {
        $host = "localhost";
        $usuario = "root";
        $pass = "";
        $bd = "reproductor_proyecto";

       
        $conexion = new mysqli($host, $usuario, $pass, $bd);

    

        $email = $this->email;
        $password = $this->password;

        $query = "SELECT * FROM usuarios WHERE correo='$email' AND password='$password'";
        $result = $conexion->query($query);

        $row = $result->fetch_assoc();
        $num_row = $result->num_rows;

        // validacion del login
        if ($num_row === 1) {
          
            header("Location: admin/admin.php");
           
        } else {
            
            header("Location: ../index.php");
        }


    }
}


$email = $_POST['email'];
$password = $_POST['password'];

// instancia
$login = new Login($email, $password);
$login->validar();
?>

