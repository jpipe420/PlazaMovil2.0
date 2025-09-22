<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Inicio de sesión en Plaza Movil" />
    <meta name="author" content="Felipe Cañon" />
    <title>Inicia Sesion en Plaza Movil</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <!-- Incluir Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUa6HAi2fWqTEJ/1eRkCkFQpMYkXl8r2sC6pSEpUNFhFm4nJ6jysj3K6Gp5F" crossorigin="anonymous">
    <!-- Incluir la fuente Inter desde Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">
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
        }

        body {
            font-family: 'Inter', sans-serif;
            background-image: url("{{asset('assets/img/fondo_frutas.png')}}");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            margin: 0;
        }

        /* Usamos un pseudo-elemento para el fondo y el efecto de superposición */
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(15, 23, 42, 0.7); /* Azul oscuro con transparencia */
            z-index: -1;
        }

        /* Ajustar el contenedor principal */
        .main-container {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
        }

        /* EFECTO AZUL PARA LA GLASS-CARD AL PASAR EL MOUSE */
        .glass-card {
            background-color: rgba(30, 41, 59, 0.8); /* Azul oscuro con transparencia */
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(59, 130, 246, 0.3);
            border-radius: 1rem;
            transition: all 0.4s ease;
            color: var(--text-light);
        }

        .glass-card:hover {
            background-color: rgba(26, 86, 219, 0.9); /* Azul primario con transparencia */
            border-color: rgba(59, 130, 246, 0.7);
            box-shadow: 0 0 30px rgba(59, 130, 246, 0.4);
            transform: translateY(-5px) scale(1.02);
        }

        /* Estilo para los campos de entrada - EFECTO AZUL */
        .form-control {
            background-color: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(59, 130, 246, 0.3);
            border-radius: 0.5rem;
            padding: 0.75rem 1rem;
            transition: all 0.3s;
            color: var(--text-dark);
        }

        .form-control:hover {
            border-color: var(--light-blue);
            box-shadow: 0 0 0 0.2rem rgba(59, 130, 246, 0.25);
        }

        .form-control:focus {
            background-color: white;
            border-color: var(--light-blue);
            box-shadow: 0 0 0 0.2rem rgba(59, 130, 246, 0.25);
        }

        /* Estilo para el botón con efecto azul */
        .btn-login {
            background: linear-gradient(to right, var(--primary-blue), var(--secondary-blue));
            color: white;
            border: none;
            border-radius: 0.5rem;
            padding: 0.75rem 1.5rem;
            font-weight: 600;
            transition: all 0.3s;
            width: 100%;
        }

        .btn-login:hover {
            background: linear-gradient(to right, var(--secondary-blue), var(--primary-blue));
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(26, 86, 219, 0.3);
        }

        /* Botón de volver */
        .btn-outline-warning {
            border-color: var(--light-blue);
            color: var(--light-blue);
        }

        .btn-outline-warning:hover {
            background-color: var(--light-blue);
            border-color: var(--light-blue);
            color: white;
        }

        /* Footer fijo en la parte inferior */
        .fixed-footer {
            background-color: rgba(15, 23, 42, 0.9) !important; /* Azul oscuro */
            color: var(--text-light) !important;
            width: 100%;
            padding: 1rem 0;
        }

        /* Estilos para los enlaces */
        .login-link {
            color: var(--accent-blue);
            text-decoration: none;
            transition: color 0.3s;
            font-size: 0.9rem;
        }

        .login-link:hover {
            color: var(--light-blue);
            text-decoration: underline;
        }

        /* Estilo para el checkbox - AZUL */
        .form-check-input:checked {
            background-color: var(--primary-blue);
            border-color: var(--primary-blue);
        }

        .form-check-input:hover {
            border-color: var(--primary-blue);
        }

        /* Títulos y texto */
        .text-white {
            color: var(--text-light) !important;
        }

        .text-primary {
            color: var(--light-blue) !important;
        }

        /* Alertas */
        .alert-danger {
            background-color: rgba(239, 68, 68, 0.9);
            border-color: rgba(239, 68, 68, 0.7);
            color: white;
        }

        /* Logo y título */
        .bg-white/20 {
            background-color: rgba(255, 255, 255, 0.2) !important;
        }

        /* Línea decorativa */
        .bg-primary {
            background-color: var(--light-blue) !important;
        }

        /* Enlaces en el footer */
        .fixed-footer a {
            color: var(--accent-blue) !important;
        }

        .fixed-footer a:hover {
            color: var(--light-blue) !important;
        }
    </style>
</head>

<body>
    <div class="main-container">
        <div class="w-full max-w-md mx-auto">
            <!-- Contenedor del logo y título -->
            <div class="flex flex-column align-items-center text-center mb-5">
                <div class="rounded-circle p-3 mb-3 bg-white/20 d-inline-flex">
                    <!-- Logo más grande -->
                    <img src="{{asset('assets/img/Plaza_Movil_Logo.png')}}" class="img-fluid" alt="Plaza Movil Logo" style="width: 150px; height: 150px;">
                </div>
                <h1 class="text-3xl font-bold mb-1" style="color: var(--text-light) !important; font-weight: bold;">TechSaviors</h1>
                <p class="text-lg" style="color: var(--light-blue) !important; font-weight: bold;">Bogota</p>
            </div>

            <!-- ESTE ES EL DIV QUE CAMBIARÁ A AZUL AL PASAR EL MOUSE -->
            <div class="glass-card shadow-lg p-5">
                <h2 class="text-2xl font-bold text-center mb-4">Inicia Sesión</h2>
                <div class="w-20 h-1 bg-primary mx-auto rounded-full mb-4"></div>

                <div class="card-body">
                    @if ($errors->any())
                    @foreach ($errors->all() as $item)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{$item}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endforeach
                    @endif
                    <form action="{{route('login.login')}}" method="post">
                        @csrf
                        <div class="form-floating mb-3">
                            <input autofocus autocomplete="off" value="invitado@gmail.com" class="form-control" name="email" id="inputEmail" type="email" placeholder="name@example.com" />
                            <label for="inputEmail">Correo eléctronico</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="password" value="12345678" id="inputPassword" type="password" placeholder="Password" />
                            <label for="inputPassword">Contraseña</label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                            <label class="form-check-label" for="inputRememberPassword">Recordar contraseña?</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                            <button class="btn btn-primary" type="submit"><a>Iniciar sesión</a></button>
                            <a href="{{ route('panel') }}" class="btn btn-outline-warning">Volver</a>
                        </div>
                    </form>
                </div>
                <!---<div class="card-footer text-center py-3">
                 <div class="small"><a class="login-link" href="register.html">Necesitas una cuenta? Registrate!</a></div>
                </div>--->
            </div>
        </div>
    </div>
    <footer class="fixed-footer text-center">
        <div class="container">
            <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                <div class="mb-2 mb-md-0">Copyright &copy; Tu Sitio Web 2025</div>
                <div>
                    <a href="#" class="me-3">Política de Privacidad</a>
                    <a href="#">Términos &amp; Condiciones</a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>