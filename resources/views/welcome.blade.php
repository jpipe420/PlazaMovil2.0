<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Plaza Movil,queremos llevar los productos frescos del campo a tu hogar" />
    <meta name="author" content="Felipe Cañon" />
    <title>Plaza Movil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<style>
        /* Variables de colores para un esquema de colores consistente */
        :root {
            --primary-green: #38a169;
            --secondary-green: #2f855a;
            --primary-blue: #4299e1;
            --secondary-blue: #3182ce;
            --text-dark: #2d3748;
            --text-light: #f7fafc;
            --background-dark: #2d3748;
            --background-light: #ffffff; /* Cambiado a blanco sólido */
            --card-bg: #fff;
            --card-bg-dark: #2d3748;
            --border-color: #e2e8f0;
        }

        /* Estilos para el cuerpo y el contenedor principal */
        body {
            font-family: 'Inter', sans-serif;
            color: var(--text-dark);
            background-color: var(--background-light); /* Fondo blanco */
            line-height: 1.6;
        }

        /* Eliminamos las reglas del tema oscuro que forzaban el fondo oscuro */
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-green);
            text-align: center;
            margin-bottom: 1rem;
        }

        .text-lead {
            font-size: 1.25rem;
            font-weight: 400;
            text-align: center;
            max-width: 800px;
            margin: 0 auto 3rem;
            color: #4a5568;
        }

        /* Estilos para las tarjetas de características */
        .feature-card-container {
            display: grid;
            gap: 2rem;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            justify-content: center;
        }

        .feature-card {
            background-color: var(--card-bg);
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid var(--border-color);
        }

        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px rgba(0, 0, 0, 0.2);
        }

        .feature-card h3 {
            color: var(--primary-blue);
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        /* Estilos para las listas de beneficios */
        .benefits-list {
            list-style: none;
            padding: 0;
        }

        .benefits-list li {
            position: relative;
            padding-left: 2rem;
            margin-bottom: 0.75rem;
            color: var(--text-dark);
        }

        .benefits-list li::before {
            content: '✅';
            position: absolute;
            left: 0;
        }

        /* Estilos para las imágenes */
        .feature-image-wrapper {
            margin-top: 1.5rem;
            border-radius: 0.75rem;
            overflow: hidden;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }

        .feature-image-wrapper img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }

        .feature-image-wrapper:hover img {
            transform: scale(1.05);
        }

        /* Animación de aparición */
        @keyframes fadeInSlideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-on-scroll {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInSlideUp 0.8s ease forwards;
            animation-timeline: view();
            animation-range: entry 25% cover 50%;
        }

    </style>
</head>

<body>

    <!--Barra de navegación--->
    <nav class="navbar navbar-expand-md bg-white">
        <div class="container-fluid">
            <!---Marca de navegación--->
            <a class="navbar-brand" href="{{route('panel')}}" style="color: #00c040;">
                <img src="{{ asset('assets/img/icon.png') }}" alt="Logo" width="30" height="30"
                    class="d-inline-block align-text-top rounded-circle">
                Plaza Movil
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!---Enlaces de Inicio y Acerca de (Izquierda)-->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('panel')}}" style="color: #4cbb17;">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: #4cbb17;">Acerca de</a>
                    </li>
                </ul>

                <!---Otros enlaces de navegación (Empujados a la derecha)-->
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="#desafio" style="color: #4169e1;"> El Desafío </a>
                    <a class="nav-link" href="#solucion" style="color: #4169e1;">Nuestra Solución</a>
                    <a class="nav-link" href="#agricultores" style="color: #4169e1;">Para Agricultores</a>
                    <a class="nav-link" href="#compradores" style="color: #4169e1;">Para Compradores</a>
                </div>

            </div>
        </div>
    </nav>


    <!----Carrusel--->
    <div id="carouselExample" class="carousel slide carousel-fade">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('assets/img/img_carrusel_1.png')}}" class="d-block w-100" alt="banner de invitacion">

                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center h-100">
                    <form action="{{route('login.index')}}" method="get">
                        <button class="btn btn-success btn-lg animate-button text-warning" type="submit">Iniciar sesión</button>
                    </form>
                </div>

            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/img/img_carrusel_2.png')}}" class="d-block w-100" alt="Banner de publicidad">
                <form action="{{route('login.index')}}" method="get">
                        <button class="btn btn-success btn-lg animate-button text-warning" type="submit">Iniciar sesión</button>
                </form>
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/img/img_carrusel_3.png')}}" class="d-block w-100" alt="Banner de contáctanos">
                <form action="{{route('login.index')}}" method="get">
                        <button class="btn btn-success btn-lg animate-button text-warning" type="submit">Iniciar sesión</button>
                </form>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <style>
        /* Estilos para centrar y animar el botón */
        .carousel-caption {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            padding: 0;
        }

        .animate-button {
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .animate-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 7px 10px rgba(0, 0, 0, 0.2);
            background-color: #218838;
            /* Un verde ligeramente más oscuro */
            border-color: #1e7e34;
        }

        .animate-button:active {
            transform: translateY(0);
            box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);
        }
    </style>

    <!---Section Ventajas / Desventajas--->
    <div class="container-fluid px-4">
        <section id="desafio" class="section animate-on-scroll">
            <h2 class="section-title">El Desafío del Campo</h2>
            <p class="text-lead">El sector agrícola enfrenta desafíos significativos para llevar sus productos frescos
                del campo a la mesa del consumidor. La distribución tradicional a menudo implica múltiples
                intermediarios, lo que aumenta los costos y reduce los márgenes de ganancia para los agricultores.
                Además, los consumidores carecen de acceso directo a productos frescos y de calidad, cultivados de
                manera sostenible.</p>

            <div class="feature-card-container">
                <div class="feature-card">
                    <h3>Barreras para el Productor</h3>
                    <p>Los agricultores a menudo luchan por obtener un valor justo por su arduo trabajo. La cadena de
                        suministro tradicional, con sus numerosos intermediarios, consume gran parte del beneficio,
                        dejando a los productores con márgenes mínimos.</p>
                    <ul class="benefits-list">
                        <li>Precios injustos y volátiles para sus cosechas.</li>
                        <li>Acceso limitado a mercados más amplios.</li>
                        <li>Altos costos de logística y distribución.</li>
                        <li>Desperdicio de productos por la ineficiencia de la cadena.</li>
                    </ul>
                    <div class="feature-image-wrapper">
                        <img src="{{asset('assets/img/agricultor-tablet.png')}}"
                            alt="Agricultor usando tablet para gestionar su producción" loading="lazy">
                    </div>
                </div>

                <div class="feature-card">
                    <h3>Necesidades del Consumidor</h3>
                    <p>Los consumidores de hoy buscan transparencia, frescura y sostenibilidad. Quieren saber de dónde
                        vienen sus alimentos y apoyar prácticas agrícolas responsables, pero a menudo se encuentran con
                        opciones limitadas y precios inflados en los supermercados.</p>
                    <ul class="benefits-list">
                        <li>Deseo de productos más frescos y saludables.</li>
                        <li>Búsqueda de precios justos y transparentes.</li>
                        <li>Interés en apoyar a la economía local.</li>
                        <li>Necesidad de conocer el origen de sus alimentos.</li>
                    </ul>
                    <div class="feature-image-wrapper">
                        <img src="{{asset('assets/img/frutas.png')}}" alt="Variedad de frutas y verduras frescas de la granja"
                            loading="lazy">
                    </div>
                </div>
            </div>
        </section>

        <section id="solucion" class="section animate-on-scroll">
            <h2 class="section-title">La Solución: Plaza Móvil</h2>
            <p class="text-lead">Plaza Móvil es el puente digital que conecta directamente el corazón del campo con tu
                hogar. Nuestra plataforma innovadora empodera a los agricultores y brinda a los consumidores un acceso
                sin precedentes a productos frescos, de temporada y cultivados con pasión.</p>

            <div class="feature-card-container">
                <div class="feature-card">
                    <h3>Conexión Directa y Transparente</h3>
                    <p>Eliminamos los intermediarios innecesarios, creando un canal directo donde los agricultores
                        pueden exhibir y vender sus productos, y los consumidores pueden comprar con confianza, sabiendo
                        que están recibiendo lo mejor del campo.</p>
                    <ul class="benefits-list">
                        <li>Transparencia total en la procedencia del producto.</li>
                        <li>Precios más justos para productores y consumidores.</li>
                        <li>Apoyo directo a la economía agrícola local.</li>
                    </ul>
                    <div class="feature-image-wrapper">
                        <img src="{{asset('assets/img/pmtablet.png')}}"
                            alt="Interfaz de la aplicación móvil de Plaza Móvil" loading="lazy">
                    </div>
                </div>
                <div class="feature-card">
                    <h3>Frescura Garantizada, Sostenibilidad Asegurada</h3>
                    <p>Al acortar la cadena de suministro, garantizamos que los productos lleguen a tu mesa en su punto
                        óptimo de frescura. Fomentamos prácticas agrícolas sostenibles y reducimos la huella de carbono
                        asociada al transporte.</p>
                    <ul class="benefits-list">
                        <li>Productos más frescos y nutritivos.</li>
                        <li>Reducción del desperdicio de alimentos.</li>
                        <li>Promoción de la agricultura sostenible.</li>
                    </ul>
                    <div class="feature-image-wrapper">
                        <img src="{{asset('assets/img/canasta.png')}}" alt="Cesta llena de vegetales recién cosechados"
                            loading="lazy">
                    </div>
                </div>
            </div>
        </section>

        <section id="agricultores" class="section animate-on-scroll text-center">
            <h2 class="section-title">Agricultores, su Cosecha al Alcance de Todos</h2>
            <p class="text-lead">Con Plaza Móvil, los agricultores tienen la oportunidad de llevar sus productos
                directamente a los consumidores, eliminando intermediarios. Esto les permite obtener precios justos por
                su trabajo, reducir pérdidas post-cosecha y establecer relaciones duraderas con sus clientes. Nuestra
                plataforma facilita la gestión de inventario, pedidos y entregas de manera eficiente.</p>
            <div class="feature-card-container">
                <div class="feature-card">
                    <h3>Beneficios Tangibles para Usted</h3>
                    <ul class="benefits-list">
                        <li><i class="fas fa-coins me-2"></i>Mayor rentabilidad por sus cosechas.</li>
                        <li><i class="fas fa-hand-pointer me-2"></i>Control total sobre sus precios y condiciones de
                            venta.</li>
                        <li><i class="fas fa-globe-americas me-2"></i>Acceso a un mercado más amplio de consumidores.
                        </li>
                        <li><i class="fas fa-leaf me-2"></i>Reducción de pérdidas post-cosecha y desperdicios.</li>
                        <li><i class="fas fa-star me-2"></i>Construcción de una marca y reputación local.</li>
                    </ul>

                    <div class="feature-card">
                        <div class="feature-image-wrapper">
                            <img src="{{asset('assets/img/agricultor-campo.png')}}"
                                alt="Agricultor sonriendo en su campo con productos frescos" loading="lazy">
                        </div>
                        <p class="mt-4">Plaza Móvil está diseñado pensando en usted, el productor. Facilita la
                            administración de su inventario, la visibilidad de sus productos y la conexión con una
                            comunidad creciente de compradores conscientes.</p>
                    </div>
                </div>
        </section>

        <section id="compradores" class="section animate-on-scroll text-center">
            <h2 class="section-title">Compradores, Productos Frescos, Precios Justos</h2>
            <p class="text-lead">Plaza Móvil permite a los consumidores acceder a una amplia variedad de productos
                frescos directamente de los agricultores locales. Benefíciate de precios justos, frescura inigualable y
                la satisfacción de saber de dónde provienen tus alimentos. Apoya a los productores locales y disfruta de
                productos de la más alta calidad.</p>
            <div class="feature-card-container">
                <div class="feature-card">
                    <div class="feature-image-wrapper">
                        <img src="{{asset('assets/img/buyer-image.png')}}"
                            alt="Persona comprando productos frescos en un mercado local" loading="lazy">
                    </div><br>
                    <p class="mt-4">Explore nuestro catálogo de productos frescos. Desde frutas de temporada hasta
                        vegetales orgánicos, lácteos y más, todo entregado con la garantía de frescura directa del
                        productor.</p>
                </div>
                <div class="feature-card">
                    <h3>Ventajas para el Consumidor</h3>
                    <ul class="benefits-list">
                        <li><i class="fas fa-shopping-basket me-2"></i>Acceso a productos de la más alta calidad y
                            frescura.</li>
                        <li><i class="fas fa-tag me-2"></i>Precios más competitivos al eliminar intermediarios.</li>
                        <li><i class="fas fa-handshake me-2"></i>Conexión directa con los agricultores locales.</li>
                        <li><i class="fas fa-seedling me-2"></i>Contribución al desarrollo sostenible y la economía
                            local.</li>
                        <li><i class="fas fa-truck-fast me-2"></i>Opciones de entrega convenientes.</li>
                    </ul>
                    <div class="feature-image-wrapper">
                        <img src="{{asset('assets/img/compracalle.png')}}"
                            alt="Persona comprando productos frescos en un mercado local" loading="lazy">
                    </div>
                </div>
            </div><br>
            

            <!---Section Frase--->
            <div class="feature-card">
                <section class="container-fluid text-center">
                    <div class="container p-5 d-flex flex-column justify-content-between h-100">
                        <div>
                            <h2 class="text-success mb-5">Compradores, Productos Frescos, Precios Justos<br>
                                <span class="text-info">¡Es momento de usar la tecnología como aliada!</span>
                            </h2>
                        </div>
                        <form action="{{route('login.index')}}" method="get">
                            <button class="btn btn-success btn-lg animate-button text-info" type="submit">Únete ahora!</button>
                        </form>
                    </div>
                </section>
            </div>

            <style>
                /* Estilos para centrar y animar el botón */
                .carousel-caption {
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    padding: 0;
                }

                .animate-button {
                    transition: all 0.3s ease;
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                }

                .animate-button:hover {
                    transform: translateY(-3px);
                    box-shadow: 0 7px 10px rgba(0, 0, 0, 0.2);
                    background-color: #218838;
                    /* Un verde ligeramente más oscuro */
                    border-color: #1e7e34;
                }

                .animate-button:active {
                    transform: translateY(0);
                    box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);
                }
            </style>

        </section>
    </div>

    <!---Footer--->
    <footer class="text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">

                <!-- Instagram -->
                <a class="btn btn-outline-warning btn-floating m-1" href="h#" role="button" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-instagram" viewBox="0 0 16 16">
                        <path
                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                    </svg>
                </a>

                <!-- Linkedin -->
                <a class="btn btn-outline-warning btn-floating m-1" href="#!" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path
                            d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                    </svg>
                </a>

                <!-- Github -->
                <a class="btn btn-outline-warning btn-floating m-1" href="#" role="button" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-github" viewBox="0 0 16 16">
                        <path
                            d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                    </svg>
                </a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2025 Copyright:
            <a class="text-red" href="#">plazamovil.com</a>
        </div>
        <!-- Copyright -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>