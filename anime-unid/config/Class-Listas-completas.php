<?php
class Listas extends mysqli {
    
    public function __construct($host, $usuario, $pass, $bd)
    {
        parent ::__construct($host, $usuario, $pass, $bd);
    }
    public function get_listas2(){
        
        $consulta = "SELECT * FROM listas ORDER BY id DESC ";
        
        $query = $this->query($consulta);
        return $query;
    }
    public function search2($texto2){
        $consulta2 = "SELECT * FROM listas WHERE titulo like '%$texto2%'";
        $query2 = $this->query($consulta2);
        return $query2;
    }


}

?>

