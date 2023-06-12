<?php

$resultadosPorPagina = 2; // Número de resultados por página
    $paginaActual = isset($_GET['pagina']) ? $_GET['pagina'] : 1; // Página actual, obtenida de la URL
    $offset = ($paginaActual - 1) * $resultadosPorPagina;

     // Cantidad total de resultados (sin límite)
     $sqlTotal = "SELECT COUNT(*) AS total FROM video";
     $resultTotal = $conn->query($sqlTotal);
     $rowTotal = $resultTotal->fetch_assoc();
     $totalResultados = $rowTotal['total'];
     
 
 // Cálculo del número de páginas
     $totalPaginas = ceil($totalResultados / $resultadosPorPagina);
 
 // Mostrar enlaces de paginación
     for ($i = 1; $i <= $totalPaginas; $i++) {
     echo "<a href='?pagina=$i'>$i</a> ";
     }
    ?>