

<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>🚀 AnimeRocket</title>
</head>

<body>
    <header>
        <div class="header">
            <div class="logo">Anime</div>
            <nav>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="directorio.php">Directorio Anime</a></li>
                </ul>
                <div id="search">
                    <form action="directorio.php" method="POST">
                        <input type="text" placeholder="Buscar..." name="texto2">
                        <input type="submit" name="search2" value="🔍">
                    </form>
                </div>
                <a href="#" class="login">Login</a>
            </nav>
        </div>
    </header>


    <section id="main">
        <h2>Lista completa de Animes</h2>
        <div class="episodes">
            <?php
            require_once 'config\Class-Listas-completas.php';
            $listas = new listas("localhost", "root", "", "reproductor_proyecto");
            $result = (isset($_POST['search2'])) ? 
            $listas->search2($_POST['texto2']) :
            $listas->get_listas2();

            while ($row = $result->fetch_array()) {
            ?>
                <div class="episode">
                    <p class="icon">►</p>
                    <img src="<?php echo $row['thumbnail']; ?>" alt="">
                    <div class="episode_description">
                        <p class="episode_number"> <?php echo $row['categoria']; ?>"</p>
                        <h3 class="episode_title"><?php echo $row['titulo']; ?>"</h3>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </section>

</body>

</html>