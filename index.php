<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="sources/images/favicon.png" type="image/png">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/331eb88a93.js" crossorigin="anonymous"></script>
    <title>Visual Proyect</title>
</head>
<body>
    <header>
        <div class="container">
            <!--<img src="sources/images/favicon.png" alt="logoType" class="logo">-->
                   
            <h2 class="logo">Visual Proyect</h2>
            <nav>
                <div class="bar">
                    <div class="buscador">
                        <input type="text" name="" id="" placeholder="Buscar" required>
                        <div class="btn-search">
                            <i class="fas fa-search icon"></i>
                        </div>
                    </div>  
                <a href="#" class="active">Inicio</a>
                <a href="prueba/">Series</a>
                <a href="#">Mi lista</a>
                <a href="#">Recientes</a>
                <a href="#">Foro</a>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <div class="serie-principal">
            <video src="sources/videos/genshin.mp4" type="video/mp4" autoplay muted loop id="video"></video>
            <div class="container" id="container">
                <h3 class="title">Genshin Impact</h1>
                    <p class="description">
                        Genshin Impact está ambientado en un continente llamado Teyvat, regido por unos dioses llamados Arcontes, que otorgan Visiones a personas elegidas. Estas Visiones permiten a los jugadores manejar poderes elementales. En Teyvat los jugadores se embarcarán en varias aventuras como forasteros y viajarán con diferentes personajes con habilidades únicas que van encontrando en el camino para explorar lo desconocido y descubrir los secretos de Genshin en esta tierra. Al comienzo del juego, los jugadores pueden elegir ser un hermano o una hermana que se adentra en la aventura en búsqueda de su familia.
                    </p>
                    <button role="button" class="btn"><i class="fas fa-play"></i>Reproducir</button>
                    <button role="button" class="btn"><i class="fas fa-info-circle"></i>Mas informacion</button>
            </div>
        </div>

        <div class="series-recomendadas container">
            <div class="container-title-controls">
                <h3>Series Recomendadas</h3>
                <div class="indicadores">
                </div>
            </div>

            <div class="container-principal">
                <button role="button" id="arrow-left" class="arrow-left"><i class="fas fa-angle-left"></i></button>
                <div class="container-carousel">
                    <div class="carousel">
                        <div class="serie">
                            <a href="#"><img src="sources/images/image-1.jpg" alt="genshin1"></a>
                        </div>
                        <div class="serie">
                            <a href="#"><img src="sources/images/image-2.jpg" alt="genshin1"></a>
                        </div>
                        <div class="serie">
                            <a href="#"><img src="sources/images/image-3.jpg" alt="genshin1"></a>
                        </div>
                        <div class="serie">
                            <a href="#"><img src="sources/images/image-4.jpg" alt="genshin1"></a>
                        </div>
                        <div class="serie">
                            <a href="#"><img src="sources/images/image-5.jpg" alt="genshin1"></a>
                        </div>
                        <div class="serie">
                            <a href="#"><img src="sources/images/image-6.jpg" alt="genshin1"></a>
                        </div>
                        <div class="serie">
                            <a href="#"><img src="sources/images/image-7.jpg" alt="genshin1"></a>
                        </div>
                        <div class="serie">
                            <a href="#"><img src="sources/images/image-8.jpg" alt="genshin1"></a>
                        </div>
                        <div class="serie">
                            <a href="#"><img src="sources/images/image-9.jpg" alt="genshin1"></a>
                        </div>
                        <div class="serie">
                            <a href="#"><img src="sources/images/image-10.jpg" alt="genshin1"></a>
                        </div>
                        <div class="serie">
                            <a href="#"><img src="sources/images/image-11.jpg" alt="genshin1"></a>
                        </div>
                        <div class="serie">
                            <a href="#"><img src="sources/images/image-12.jpg" alt="genshin1"></a>
                        </div>
                        <div class="serie">
                            <a href="#"><img src="sources/images/image-13.jpg" alt="genshin1"></a>
                        </div>
                        <div class="serie">
                            <a href="#"><img src="sources/images/image-14.jpg" alt="genshin1"></a>
                        </div>
                        <div class="serie">
                            <a href="#"><img src="sources/images/image-15.jpg" alt="genshin1"></a>
                        </div>
                        <div class="serie">
                            <a href="#"><img src="sources/images/image-16.jpg" alt="genshin1"></a>
                        </div>
                        <div class="serie">
                            <a href="#"><img src="sources/images/image-17.jpg" alt="genshin1"></a>
                        </div>
                        <div class="serie">
                            <a href="#"><img src="sources/images/image-18.jpg" alt="genshin1"></a>
                        </div>
                        <div class="serie">
                            <a href="#"><img src="sources/images/image-19.jpg" alt="genshin1"></a>
                        </div>
                        <div class="serie">
                            <a href="#"><img src="sources/images/image-20.jpg" alt="genshin1"></a>
                        </div>
                    </div>
                </div>
                <button role="button" id="arrow-right" class="arrow-right"><i class="fas fa-angle-right"></i></button>
            </div>
        </div>
        <div class="series-recomendadas-new container">
            <div class="container-title-controls-new">
                <h3>Series en Estreno</h3>
                <div class="indicadores-new">
                </div>
            </div>
            <div class="container-principal-new">
                <button role="button" id="arrow-left-new" class="arrow-left-new"><i class="fas fa-angle-left"></i></button>
                <div class="container-carousel-new">
                    <div class="carousel-new">
                        <div class="serie-new">
                            <a href="#"><img src="sources/images/image-1.jpg" alt="genshin1"></a>
                        </div>
                        <div class="serie-new">
                            <a href="#"><img src="sources/images/image-2.jpg" alt="genshin1"></a>
                        </div>
                        <div class="serie-new">
                            <a href="#"><img src="sources/images/image-3.jpg" alt="genshin1"></a>
                        </div>
                        <div class="serie-new">
                            <a href="#"><img src="sources/images/image-4.jpg" alt="genshin1"></a>
                        </div>
                        <div class="serie-new">
                            <a href="#"><img src="sources/images/image-5.jpg" alt="genshin1"></a>
                        </div>
                        <div class="serie-new">
                            <a href="#"><img src="sources/images/image-6.jpg" alt="genshin1"></a>
                        </div>
                        <div class="serie-new">
                            <a href="#"><img src="sources/images/image-7.jpg" alt="genshin1"></a>
                        </div>
                        <div class="serie-new">
                            <a href="#"><img src="sources/images/image-8.jpg" alt="genshin1"></a>
                        </div>
                        <div class="serie-new">
                            <a href="#"><img src="sources/images/image-9.jpg" alt="genshin1"></a>
                        </div>
                        <div class="serie-new">
                            <a href="#"><img src="sources/images/image-10.jpg" alt="genshin1"></a>
                        </div>
                        <div class="serie-new">
                            <a href="#"><img src="sources/images/image-11.jpg" alt="genshin1"></a>
                        </div>
                        <div class="serie-new">
                            <a href="#"><img src="sources/images/image-12.jpg" alt="genshin1"></a>
                        </div>
                        <div class="serie-new">
                            <a href="#"><img src="sources/images/image-13.jpg" alt="genshin1"></a>
                        </div>
                        <div class="serie-new">
                            <a href="#"><img src="sources/images/image-14.jpg" alt="genshin1"></a>
                        </div>
                        <div class="serie-new">
                            <a href="#"><img src="sources/images/image-15.jpg" alt="genshin1"></a>
                        </div>
                        <div class="serie-new">
                            <a href="#"><img src="sources/images/image-16.jpg" alt="genshin1"></a>
                        </div>
                        <div class="serie-new">
                            <a href="#"><img src="sources/images/image-17.jpg" alt="genshin1"></a>
                        </div>
                        <div class="serie-new">
                            <a href="#"><img src="sources/images/image-18.jpg" alt="genshin1"></a>
                        </div>
                        <div class="serie-new">
                            <a href="#"><img src="sources/images/image-19.jpg" alt="genshin1"></a>
                        </div>
                        <div class="serie-new">
                            <a href="#"><img src="sources/images/image-20.jpg" alt="genshin1"></a>
                        </div>
                    </div>
                </div>
                <button role="button" id="arrow-right-new" class="arrow-right-new"><i class="fas fa-angle-right"></i></button>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">  
            <div class="social-media">
                <h3>Contactanos</h3>
                <button role="button" class="btn"><i class="fab fa-discord"></i></button>
                <button role="button" class="btn"><i class="fab fa-whatsapp"></i></button>
                <button role="button" class="btn"><i class="fab fa-facebook-f"></i></button>
            </div>
        </div>
    </footer>
    <script src="javascript/main.js"></script>
</body>
</html>