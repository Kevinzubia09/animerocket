<?php
class Listas extends mysqli {
    
    public function __construct($host, $usuario, $pass, $bd)
    {
        parent ::__construct($host, $usuario, $pass, $bd);
    }
    public function get_listas(){
        
        $consulta = "SELECT * FROM listas ORDER BY id DESC LIMIT 4";
        
        $query = $this->query($consulta);
        return $query;
    }
    public function search($texto){
        $consulta = "SELECT * FROM listas WHERE titulo like '%$texto%'";
        $query = $this->query($consulta);
        return $query;
    }


}

?>
