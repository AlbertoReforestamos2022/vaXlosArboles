<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="src/css/style.css">
</head>
<body>
    <!-- Colors 
        Verde primary: rgba(33, 137, 30, 1); 
        Verde secondary: rgba(32, 255, 0, 1);
        Verde tertiary: rgba(128,255,0, .6);
        Café primary: rgba(96, 72, 43, 1);
    -->
<!-- Menú Header -->
<nav class="navbar navbar-expand-md fixed-top shadow bg-white" id="navegacion">
    <div class="container-fluid justify-content-md-center">
        <a href="#" class="navbar-brand d-flex justify-content-center">
            <img src="imgs/logotipo_va_por_los_arboles.png" class="img-fluid logo" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- collapse navbar -->
         <div class="collapse navbar-collapse justify-content-md-between"  id="navbarNav">
            <div class="row justify-content-between">
                <div class="col">
                    <ul class="navbar-nav">
                        <li class="nav-item text-md-center">
                            <a href="" class="nav-link">¿Qué es Va x Los Árboles?</a>
                        </li>
                        <li class="nav-item text-md-center">
                            <a href="" class="nav-link">Acciones</a>
                        </li>
                        <li class="nav-item text-md-center">
                            <a href="" class="nav-link"> Herramientas</a>
                        </li>
                        <li class="nav-item text-md-center">
                            <a href="" class="nav-link"> Aliados </a>
                        </li>
                        <li class="nav-item text-md-center">
                            <a href="" class="nav-link"> Ténicos </a>
                        </li>
                        <li class="nav-item text-md-center">
                            <a href="" class="nav-link"> Reporta </a>
                        </li>


                    </ul>
                </div>
            </div>

            <div class="row row-cols-auto align-items-center">
                <div class="d-grid justify-content-center justify-content-md-end align-items-md-center">
                    <ul class="d-flex list-unstyled gap-3 m-0">
                        <li class="nav-item text-decoration-none text-center">
                            <a href="" class="font-size-25 verde-primary">
                                <i class="bi bi-facebook"></i>
                            </a>
                        </li>

                        <li class="nav-item text-decoration-none text-center">
                            <a href="" class=" font-size-25 verde-primary">
                                <i class="bi bi-youtube"></i> 
                            </a>
                        </li>
                        <li class="nav-item text-decoration-none text-center">
                            <a href="" class=" font-size-25 verde-primary">
                                <i class="bi bi-twitter-x"></i>
                            </a>
                        </li>
                        <li class="nav-item text-decoration-none text-center">
                            <a href="" class=" font-size-25 verde-primary">
                                <i class="bi bi-tiktok"></i>
                            </a>
                        </li>

    
                    </ul>
                    <img src="imgs/logo-suuper-civicos.png" width="100" class="img-fluid logo-supercivicos-menu" alt="" srcset="">                 

                </div>

                <div class="">
                    <a class="btn btn-warning text-white px-3 btn-foundiing" style="border-radius: 15px!important;" href="#"> Donar </a>
                </div>
            </div>

         </div>
    </div>
</nav>
<!-- section Hero -->
 <div class="hero first-content-after-menu d-grid align-items-center" style="background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url('imgs/vista-de-arboles-en-el-parque.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed; ">
    <div class="container" style="padding-top: 50px;">
        <div class="row row-cols-1 row-cols-lg-2 flex-row-reverse justify-content-end align-items-center ">
            <div class="col in-right">
                <div class="rounded shadow px-4 py-5 text-justify" style="background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)); backdrop-filter: blur(1px);" >
                    <p class="text-white text-intro"> 
                        <span class="strong-letter">VaXlosArboles</span> es una iniciativa de <span class="strong-letter">Supercívicos</span>, <span class="strong-letter">Reforestamos</span> e <span class="strong-letter">Imperfect Project</span>,
                        diseñada para crear conciencia y movilizar acciones que protejan el arbolado urbano
                        y los bosques de México. La campaña busca empoderar a los ciudadanos,
                        autoridades comunitarias y al sector privado para que reconozcan la importancia
                        de los árboles y los bosques así como su relación con la salud, la resiliencia climática
                        y la calidad de vida.
                    </p>

                </div>
            </div>

            <div class="col d-lg-flex in-left">
                <img src="imgs/imagen-arturo.png" class="img-fluid" width="380"alt="">
            </div>           
        </div>

    </div>


 </div>

 
<!-- Logos of member´s proyect -->
<div class="hero " style="background: #94ce58;">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-auto justify-content-lg-between justify-content-center">
            <div class="col d-grid align-items-center justify-content-center p-3 p-md-auto in-left-three">
              <img src="imgs/LOGO-REFORESTAMOS-FONDO-TRANSPARENTE.png" width="140" class="img-fluid" alt="" srcset="">   
            </div>
            <div class="col d-grid align-items-center justify-content-center p-3 p-md-auto in-left-two"> 
                <img src="imgs/logo-suuper-civicos.png" width="200" class="img-fluid" alt="" srcset="">                  
            </div>
            <div class="col d-grid align-items-center justify-content-center p-3 p-md-auto in-left-one">
                <img src="imgs/logo-imperfect-project.png" width="150" class="img-fluid" alt="" srcset="">               
            </div>
        </div>
    </div>
</div>

<!-- Action sections (Videos YT - Tik-Tok (Videos) - btn twitter(X)) -->
<div class="hero">
    <div class="text-acciones" style="margin-top: 50px; margin-bottom: 50px;">
        <h2 class="text-center   "> 
            <span class="text-white display-4" style="background: rgba(33, 137, 30, .8); padding-right: 15px; padding-left: 15px; border-radius: 50px;">
                Acciones
            </span>    
        </h2>
    </div>

    <div class="container">
        <div class="row row-cols-1 justify-content-center">
            <div class="col-12 col-xl-9">
                <!-- Hacer carrusel los videos  -->
                <div class="row justify-content-center">

                <!-- Carrusel con los videdos -->
                    <div class="carousel slide" id="carruselYtPlugin">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carruselYtPlugin" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                            </button>

                            <button type="button" data-bs-target="#carruselYtPlugin" data-bs-slide-to="1" aria-label="Slide 2">

                            </button>
                            <button type="button" data-bs-target="#carruselYtPlugin" data-bs-slide-to="2" aria-label="Slide 3">

                            </button>
                        </div>

                        <div class="carousel-inner">
                            <div class="carousel-item content-video-yt active">
                                <img class="d-block w-100" src="imgs/yt-video.png" alt="">
                                <span class="icon-video-yt-plugin">
                                   <i class="bi bi-youtube"></i> 
                                </span>
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Titulo Video </h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="imgs/yt-video.png" alt="">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Titulo Video </h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="imgs/yt-video.png" alt="">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Titulo Video </h5>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-control-prev" data-bs-target="#carruselYtPlugin" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true">
                            </span>
                            <span class="visually-hidden">Previous</span>
                        </div>
                        <div class="carousel-control-next" data-bs-target="#carruselYtPlugin" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true">
                            </span>
                            <span class="visually-hidden">Next</span>
                        </div>
                    </div>

                    <div class="">

                    </div>
                </div>

                <div class="row">
                    <div class="col ver-mas-section d-flex justify-content-center my-3">
                       <a class="btn btn-danger rounded border-2 fw-bold"  style=""  href="#"> Ver más videos en YouTube </a>
                    </div>
                </div>
            </div>
            <!-- Feed Tik-Tok  -->
            <div class="col p-3">
                <div class="row justify-content-center">
                    <div class="col shadow-sm rounded">
                        <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@lossupercivicos" data-unique-id="lossupercivicos" data-embed-from="embed_page" data-embed-type="creator" style="max-width:780px; min-width:288px;"> <section> <a target="_blank" href="https://www.tiktok.com/@lossupercivicos?refer=creator_embed">@lossupercivicos</a> </section> </blockquote> <script async src="https://www.tiktok.com/embed.js"></script>
                    </div>
                </div>
                    
            </div>
        </div>
    </div>



</div>

<!-- Guides tools  --> 
 <div class="hero" style="background: rgba(33, 137, 30, .8); padding-top: 100px; padding-bottom: 100px;">
    <div class="text-acciones" style="margin-bottom: 50px;">
        <h2 class="text-center display-2 text-white"> Herramientas </h2>
    </div>

    <div class="container">
        <div class="row row-cols-1 row-cols-lg-2 justify-content-center justify-content-md-evenly">
            <div class="col d-flex justify-content-center sections-tools container-transition-left scroll-left">
                <div class="card border-0 bg-transparent container-tool">
                    <img src="imgs/inaturalist.png" class="img-fluid card-img-top img-content-tool" alt="">

                    <div class="letter-content-tool">
                        <ul class="list-group border-0 shadow">
                            <li class="list-group-item border-0">
                                <a href="#" class="btn btn-outline-success m-2 text-center">
                                    ¡Naturalist 
                                </a>
                            </li>
                            <li class="list-group-item border-0">
                                <a href="#" class="btn btn-outline-success m-2 text-center">
                                    Reporte ambiental ciudadano
                                </a>
                            </li>
                            <li class="list-group-item border-0">
                                <a href="#" class="btn btn-outline-success m-2 text-center">
                                    ¿Cómo cuido el árbol en mi colonia?
                                </a>
                            </li>
                            <li class="list-group-item border-0">
                                <a href="#" class="btn btn-outline-success m-2 text-center">
                                    ¿Qué árbol plantar? 
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="col col-md-4 container-transition-right scroll-right">
                <div class="card d-grid align-items-center border-0 bg-white shadow rounded h-100">
                    <div class="card-body">
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat, nam dignissimos. 
                            Atque maxime nesciunt exercitationem accusamus nostrum, odio officiis sapiente eius quam fugit voluptatem aliquid culpa saepe cum, rem et!
                        </p>
                    </div>

                </div>

            </div>

        </div>
    </div>
 </div>

<!-- Sponsor´s section  -->
<div class="container">
    <div class="text-acciones" style="margin-top: 50px;">
        <h2 class="text-center"> 
            <span class="text-white display-4" style="background: rgba(33, 137, 30, .8); padding-right: 15px; padding-left: 15px; border-radius: 50px;">
                Aliados
            </span>     

        </h2>
    </div>

    <div class="row row-cols-1 row-cols-md-auto justify-content-evenly align-items-center my-5">
        <div class="col d-flex justify-content-center my-3">
            <img src="imgs/logo-bimbo-copia.png" class="img-fluid" width="200" alt="Logo Grupo Bimbo">
        </div>

        <div class="col my-3">
            <h2 class="fw-bold text-center">Fundación Pepe</h2>
        </div>        
    </div>
</div>

<!-- Biografía expertos -->
<!-- Técnicos arboristas -->
<div class="container">
    <div class="text-acciones" style="margin-top: 50px; margin-bottom: 50px;">
        <h2 class="text-center"> 
            <span class="verde-primary display-4">
                Técnicos
            </span>  

            <span class="text-white display-4" style="background: rgba(33, 137, 30, .8); padding-right: 15px; padding-left: 15px; border-radius: 50px;">
                arboristas
            </span>     
    
        </h2>

 
    </div>

    <div class="row row-cols-auto justify-content-center align-items-center">
        <div class="col">
            <div class="card border-0 shadow" style="background:rgba(33, 137, 30, .8); border-radius: 25px;">
                <img src="imgs/imagen-arturo.png" class="img-fluid img-card-top pointer" data-bs-toggle="modal" data-bs-target="#modalTecnicoUno" width="200" alt="Logo Grupo Bimbo">
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modalTecnicoUno" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalTecnicoUnoLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="modalTecnicoUnoLabel">Nombre</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Biografía Técnico 
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-success">CTA´s</button>
                        </div>
                    </div>
                </div>
            </div>            
        </div>

        <div class="col">
            <div class="card border-0 shadow" style="background:rgba(33, 137, 30, .8); border-radius: 25px;">
                <img src="imgs/imagen-arturo.png" data-bs-toggle="modal" data-bs-target="#modalTecnicoDos" class="img-fluid img-card-top" width="200" alt="Logo Grupo Bimbo">
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modalTecnicoDos" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalTecnicoDosLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="modalTecnicoDosLabel">Nombre</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Biografía Técnico 
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-success">CTA´s</button>
                        </div>
                    </div>
                </div>
            </div> 
        </div>  

    </div>
</div>

<div class="container">
    <div class="row">
        <a href="https://twitter.com/intent/tweet?button_hashtag=WhatsHappening&ref_src=twsrc%5Etfw" class="twitter-hashtag-button" data-show-count="false">Tweet #WhatsHappening</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
    
</div>

<!-- Sección donativo -->

<!-- Mapa de resultados 2da etapa (trabajarlo) -->
<!-- Chatbot con preguntas frecuentes -->
<!-- Footer -->


</body>

<script src="src/js/header.js"></script>
<script src="src/js/body.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</html>