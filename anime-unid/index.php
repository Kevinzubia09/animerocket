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
            <div class="logo">🚀 AnimeRocket</div>
            <nav>
                <ul>
                 
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="directorio.php?pagina=1 ">Directorio Anime</a></li>
                </ul>
                <div id="search">
                    <form action="index.php" method="POST">
                        <input type="text" placeholder="Buscar..." name="texto">
                        <input type="submit" name="search" value="🔍">
                    </form>
                </div>
                <a href="#" class="login">Login</a>
            </nav>
        </div>
    </header>
    <section id="main">
        <h2>Últimos episodios</h2>
        <div class="episodes">
            <?php
            require_once 'config/class-video.php';
            $videos = new Video("localhost", "root", "", "reproductor_proyecto");

            // if (isset($_POST['search'])) {
            //     $result = $videos->search($_POST['texto']);
            // } else {
            //     $result = $videos->get_videos();
            // }
            

            $result = (isset($_POST['search'])) ? 
            $videos->search($_POST['texto']) :
            $videos->get_videos();

            while ($row = $result->fetch_array()) {
            ?>
                <div class="episode">
                    <p class="icon">►</p>
                    <img src="<?php echo $row['thumbnail']; ?>" alt="">
                    <div class="episode_description">
                        <p class="episode_number">Episodio <?php echo $row['episodio']; ?>"</p>
                        <h3 class="episode_title"><?php echo $row['titulo']; ?>"</h3>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </section>

    <section id="main">
        <h2>Últimos animes agregados</h2>
        <div class="episodes">
            <?php
            require_once 'config\Class-Listas.php';
            $listas = new listas("localhost", "root", "", "reproductor_proyecto");
            $result = (isset($_POST['search'])) ? 
            $listas->search($_POST['texto']) :
            $listas->get_listas();

            while ($row = $result->fetch_array()) {
            ?>
                <div class="episode">
                    <p class="icon">►</p>
                    <img src="<?php echo $row['thumbnail']; ?>" alt="">
                    <div class="episode_description">
                        <p class="episode_number"> <?php echo $row['categoria']; ?>"</p>
                        <h3 class="episode_title"><?php echo $row['nombre']; ?>"</h3>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </section>

</body>

</html>