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
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

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

        /* Estructura para mantener el footer al final */
        html, body {
            height: 100%;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            color: var(--text-light);
            background: linear-gradient(135deg, var(--dark-blue) 0%, var(--primary-blue) 100%);
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .main-content {
            flex: 1 0 auto;
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
            backdrop-filter: blur(10px);
            flex-shrink: 0;
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
        
        /* Estilos para iconos sociales */
        .social-icon {
            width: 20px;
            height: 20px;
            display: inline-block;
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
    <div class="main-content">
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

        <!---Section Frase (comentada)--->
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
    </div>

    <!---Footer--->
    <footer class="text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#" role="button" target="_blank">
                    <i class="bi bi-instagram social-icon"></i>
                </a>

                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="#" role="button">
                    <i class="bi bi-linkedin social-icon"></i>
                </a>

                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" href="#" role="button" target="_blank">
                    <i class="bi bi-github social-icon"></i>
                </a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2025 Copyright:
            <a class="text-white" href="#">techsaviors.com</a>
        </div>
        <!-- Copyright -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
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
                statusElem.textContent = `Estado: ${last极unch.type} registrada a las ${lastPunch.time}`;
            }
        }
        
        // Mostrar historial de registros
        function showHistory() {
            const history = JSON.parse(localStorage.getItem(STORAGE_HISTORY_KEY)) || [];
            const historyList = document.getElementById('history-list');
            const historyContainer = document.getElementById('history-container');
            
            if (history.length > 0) {
                historyContainer.style.display = 'block';
                history极List.innerHTML = '';
                
                history.forEach((record, index) => {
                    const item = document.createElement('div');
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