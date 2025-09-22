<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="TechSaviors,Soluciones tecnologicas" />
    <meta name="author" content="Felipe Cañon" />
    <title>TechSaviors</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <style>
        /* Variables de colores para un esquema azul y negro */
        :root {
            --primary-blue: #1a56db;
            --secondary-blue: #1e429f;
            --dark-blue: #0f172a;
            --medium-blue: #2563eb;
            --light-blue: #3b82f6;
            --accent-blue: #60a5fa;
            --text-light: #f1f5f9;
            --text-dark: #1e293b;
            --card-bg: #1e293b;
            --card-bg-light: #f8fafc;
            --border-color: #334155;
        }

        /* Estilos para el cuerpo y el contenedor principal */
        body {
            font-family: 'Inter', sans-serif;
            color: var(--text-light);
            background: linear-gradient(135deg, var(--dark-blue) 0%, var(--primary-blue) 100%);
            line-height: 1.6;
            min-height: 100vh;
        }

        .container-fluid {
            background-color: transparent;
        }

        /* Estilos para la barra de navegación */
        .navbar {
            background-color: rgba(15, 23, 42, 0.95) !important;
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand, .nav-link {
            color: var(--accent-blue) !important;
        }

        .nav-link:hover {
            color: var(--light-blue) !important;
        }

        /* Estilos para el reloj de punto laboral */
        .clock-container {
            background: rgba(30, 41, 59, 0.95);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
            color: var(--text-light);
            padding: 30px;
            margin: 30px auto;
            max-width: 500px;
            text-align: center;
            border: 1px solid var(--border-color);
            backdrop-filter: blur(10px);
        }
        
        .time {
            font-size: 4rem;
            font-weight: 700;
            margin: 0;
            color: var(--light-blue);
            text-shadow: 0 0 10px rgba(59, 130, 246, 0.5);
        }
        
        .date {
            font-size: 1.5rem;
            margin-bottom: 30px;
            opacity: 0.9;
            color: var(--accent-blue);
        }
        
        .btn-punch {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--secondary-blue) 100%);
            border: none;
            border-radius: 50px;
            color: white;
            font-size: 1.2rem;
            font-weight: 600;
            padding: 12px 40px;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(26, 86, 219, 0.4);
            cursor: pointer;
        }
        
        .btn-punch:hover {
            background: linear-gradient(135deg, var(--secondary-blue) 0%, var(--primary-blue) 100%);
            transform: translateY(-3px);
            box-shadow: 0 7px 20px rgba(26, 86, 219, 0.6);
        }
        
        .status {
            margin-top: 20px;
            font-size: 1.1rem;
            color: var(--accent-blue);
        }
        
        .punch-history {
            margin-top: 30px;
            text-align: left;
        }
        
        .history-item {
            background-color: rgba(30, 64, 175, 0.2);
            border-radius: 10px;
            margin-bottom: 10px;
            padding: 10px 15px;
            border-left: 4px solid var(--light-blue);
        }

        /* Estilos para el carrusel */
        .carousel-item {
            height: 400px;
        }
        
        .carousel-item img {
            object-fit: cover;
            height: 100%;
            filter: brightness(0.7);
        }
        
        .carousel-caption {
            top: 50%;
            transform: translateY(-50%);
        }
        
        /* Estilos para las tarjetas de características */
        .feature-card {
            background-color: var(--card-bg);
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid var(--border-color);
            color: var(--text-light);
        }
        
        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px rgba(0, 0, 0, 0.3);
        }
        
        .feature-card h3 {
            color: var(--light-blue);
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
            color: var(--text-light);
        }
        
        .benefits-list li::before {
            content: '🔹';
            position: absolute;
            left: 0;
            color: var(--light-blue);
        }
        
        /* Estilos para el footer */
        footer {
            background-color: rgba(15, 23, 42, 0.95);
            margin-top: 3rem;
            backdrop-filter: blur(10px);
        }
        
        /* Estilos para botones */
        .btn-success {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--secondary-blue) 100%);
            border: none;
            border-radius: 50px;
            padding: 12px 30px;
            font-weight: 600;
            box-shadow: 0 4px 15px rgba(26, 86, 219, 0.4);
        }
        
        .btn-success:hover {
            background: linear-gradient(135deg, var(--secondary-blue) 0%, var(--primary-blue) 100%);
            transform: translateY(-3px);
            box-shadow: 0 7px 20px rgba(26, 86, 219, 0.6);
        }
        
        /* Títulos y textos */
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--light-blue);
            text-align: center;
            margin-bottom: 1rem;
        }
        
        .text-lead {
            font-size: 1.25rem;
            font-weight: 400;
            text-align: center;
            max-width: 800px;
            margin: 0 auto 3rem;
            color: var(--accent-blue);
        }
        
        /* Ajustes de responsividad */
        @media (max-width: 768px) {
            .time {
                font-size: 3rem;
            }
            
            .clock-container {
                padding: 20px;
                margin: 20px auto;
            }
        }
    </style>
</head>

<body>

    <!--Barra de navegación-->
    <nav class="navbar navbar-expand-md bg-white">
        <div class="container-fluid">
            <!---Marca de navegación--->
            <a class="navbar-brand" href="{{route('panel')}}">
                <img src="{{ asset('assets/img/icon.png') }}" alt="Logo" width="30" height="30"
                    class="d-inline-block align-text-top rounded-circle">
                TechSaviors
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
                        <a class="nav-link active" aria-current="page" href="{{route('panel')}}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Acerca de</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Reloj de Punto Laboral -->
    <div class="container">
        <div class="clock-container">
            <h2 class="mb-4">Control de Asistencia</h2>
            
            <p class="time" id="time">--:--:--</p>
            <p class="date" id="date">-- --- ----</p>
            
            <!-- Botón que ejecuta handlePunch() -->
            <button class="btn-punch" id="punch-btn" onclick="handlePunch()">Iniciar Sesión</button>
            
            <div class="status" id="status">
                Estado: No has iniciado sesión hoy
            </div>
            
            <div class="punch-history mt-4" id="history-container" style="display: none;">
                <h4>Registro de hoy:</h4>
                <div id="history-list"></div>
            </div>
        </div>
    </div>

    <!----Carrusel--->
    <!----<div id="carouselExample" class="carousel slide carousel-fade">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('assets/img/img_carrusel_1.png')}}" class="d-block w-100" alt="banner de invitacion">

                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center h-100">
                    <form action="{{route('login.index')}}" method="get">
                        <button class="btn btn-success btn-lg animate-button" type="submit">Iniciar sesión</button>
                    </form>
                </div>
            </div>
        </div>
    </div>--->

    <!---Section Frase--->
     <!---<div class="container mt-5">
       <div class="feature-card">
            <section class="container-fluid text-center">
                <div class="container p-5 d-flex flex-column justify-content-between h-100">
                    <div>
                        <h2 class="mb-5">Compradores, Productos Frescos, Precios Justos<br>
                            <span>¡Es momento de usar la tecnología como aliada!</span>
                        </h2>
                    </div>
                    <form action="{{route('login.index')}}" method="get">
                        <button class="btn btn-success btn-lg animate-button" type="submit">Únete ahora!</button>
                    </form>
                </div>
            </section>
        </div>
    </div>--->

    <!---Footer--->
    <footer class="text-center text-white mt-5">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="h#" role="button" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-instagram" viewBox="0 0 16 16">
                        <path
                            d="M8 极C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.极4.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-极1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.极28.546-.453.92-.598.282-.11.极5-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 极 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                    </svg>
                </a>

                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path
                            d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.极216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025极V6.169h-2.4c.03.678 0 7.极225 0 7.225h2.4z" />
                    </svg>
                </a>

                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" href="#" role="button" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-github" viewBox="0 0 16 16">
                        <path
                            d="M8 0C3.58 0 0 3.58 0 8极c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                    </svg>
                </a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style极="background-color: rgba(0, 0, 0, 0.2);">
            © 2025 Copyright:
            <a class="text-white" href="#">techsaviors.com</a>
        </div>
        <!-- Copyright -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper极.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n极7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    
    <!-- Script para el reloj de punto laboral -->
    <script>
        // Almacenar la fecha del último registro
        const STORAGE_DATE_KEY = 'punchLastDate';
        const STORAGE_HISTORY_KEY = 'punchHistory';
        
        // Actualizar reloj en tiempo real
        function updateClock() {
            const now = new Date();
            
            // Formatear hora
            const time = now.toLocaleTimeString('es-ES');
            document.getElementById('time').textContent = time;
            
            // Formatear fecha
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            const date = now.toLocaleDateString('es-ES', options);
            document.getElementById('date').textContent = date;
            
            // Verificar si es un nuevo día para reiniciar registros
            checkNewDay();
        }
        
        // Verificar si es un nuevo día y reiniciar registros si es necesario
        function checkNewDay() {
            const now = new Date();
            const today = now.toLocaleDateString('es-ES');
            const lastDate = localStorage.getItem(STORAGE_DATE_KEY);
            
            // Si es un nuevo día, limpiar el historial
            if (lastDate !== today) {
                localStorage.removeItem(STORAGE_HISTORY_KEY);
                localStorage.setItem(STORAGE_DATE_KEY, today);
                
                // Actualizar la interfaz
                updateStatus();
                showHistory();
                document.getElementById('punch-btn').textContent = 'Iniciar Sesión';
            }
        }
        
        // Inicializar y actualizar cada segundo
        updateClock();
        setInterval(updateClock, 1000);
        
        // Función para registrar entrada/salida
        function punch() {
            const now = new Date();
            const punchTime = now.toLocaleTimeString('es-ES');
            const punchDate = now.toLocaleDateString('es-ES');
            
            // Guardar la fecha actual como último registro
            localStorage.setItem(STORAGE_DATE_KEY, punchDate);
            
            // Obtener historial actual desde localStorage
            let todayHistory = JSON.parse(localStorage.getItem(STORAGE_HISTORY_KEY)) || [];
            
            // Determinar tipo de registro (entrada/salida)
            let punchType = 'Entrada';
            if (todayHistory.length > 0 && todayHistory[todayHistory.length - 1].type === 'Entrada') {
                punchType = 'Salida';
            }
            
            // Agregar nuevo registro
            const newPunch = {
                type: punchType,
                time: punchTime,
                date: punchDate
            };
            
            todayHistory.push(newPunch);
            localStorage.setItem(STORAGE_HISTORY_KEY, JSON.stringify(todayHistory));
            
            // Actualizar UI
            updateStatus();
            showHistory();
            
            // Cambiar texto del botón para siguiente acción
            document.getElementById('punch-btn').textContent = 
                punchType === 'Entrada' ? 'Registrar Salida' : 'Registrar Entrada';
                
            return punchType; // Devolver el tipo de registro
        }
        
        // Función que maneja el clic del botón
        function handlePunch() {
            // Registrar la entrada/salida y obtener el tipo
            const punchType = punch();
            
            // Solo redirigir al login si es una entrada
            if (punchType === 'Entrada') {
                // Redirigir al login después de un breve retraso para que se actualice la UI
                setTimeout(() => {
                    window.location.href = "{{route('login.index')}}";
                }, 500);
            }
        }
        
        // Actualizar estado mostrado
        function updateStatus() {
            const history = JSON.parse(localStorage.getItem(STORAGE_HISTORY_KEY)) || [];
            const statusElem = document.getElementById('status');
            
            if (history.length === 0) {
                statusElem.textContent = 'Estado: No has iniciado sesión hoy';
            } else {
                const lastPunch = history[history.length - 1];
                statusElem.textContent = `Estado: ${lastPunch.type} registrada a las ${lastPunch.time}`;
            }
        }
        
        // Mostrar historial de registros
        function showHistory() {
            const history = JSON.parse(localStorage.getItem(STORAGE_HISTORY_KEY)) || [];
            const historyList = document.getElementById('history-list');
            const historyContainer = document.getElementById('history-container');
            
            if (history.length > 0) {
                historyContainer.style.display = 'block';
                historyList.innerHTML = '';
                
                history.forEach((record, index) => {
                    const item = document.createElement极('div');
                    item.className = 'history-item';
                    item.innerHTML = `<strong>${record.type}:</strong> ${record.time}`;
                    historyList.appendChild(item);
                });
            } else {
                historyContainer.style.display = 'none';
            }
        }
        
        // Inicializar la vista
        document.addEventListener('DOMContentLoaded', function() {
            // Establecer la fecha actual si no existe
            const today = new Date().toLocaleDateString('es-ES');
            if (!localStorage.getItem(STORAGE_DATE_KEY)) {
                localStorage.setItem(STORAGE_DATE_KEY, today);
            }
            
            // Verificar si es un nuevo día
            checkNewDay();
            
            updateStatus();
            showHistory();
            
            // Verificar el último registro para establecer el texto del botón
            const history = JSON.parse(localStorage.getItem(STORAGE_HISTORY_KEY)) || [];
            if (history.length > 0 && history[history.length - 1].type === 'Entrada') {
                document.getElementById('punch-btn').textContent = 'Registrar Salida';
            }
        });
    </script>
</body>

</html>