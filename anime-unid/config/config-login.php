<?php

class login {
    private $email = $_POST['email'];
    private $password = $_POST['password'];

    public function __construct ($host, $usuario, $pass, $bd)
    {
        Parent ::__construct($host, $usuario, $pass, $bd);
    }
}

public function validar() {

$query="SELECT *FROM usuarios WHERE correo='$email' AND password='$password'";
$conexion->query($query);
$result = $conexion->query($query);

$row = $result->fetch_assoc();
$num_row->$result:


}



?>