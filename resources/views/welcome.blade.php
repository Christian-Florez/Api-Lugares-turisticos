<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Explora Bucaramanga - La Ciudad de los Parques</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@700;800&family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary: #003629;
            --primary-container: #1b4d3e;
            --secondary: #ab3600;
            --secondary-container: #fd6b34;
            --tertiary: #462700;
            --background: #fbf9f4;
            --on-background: #1b1c19;
            --surface: #ffffff;
            --outline: #707974;
            --radius-xl: 1.5rem;
            --radius-md: 0.75rem;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--background);
            color: var(--on-background);
            line-height: 1.6;
        }

        h1, h2, h3 {
            font-family: 'Epilogue', sans-serif;
            font-weight: 800;
            color: var(--primary);
        }

        .hero {
            position: relative;
            height: 80vh;
            min-height: 600px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            overflow: hidden;
            background-color: var(--primary);
        }

        .hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(rgba(0, 54, 41, 0.4), rgba(0, 54, 41, 0.8));
            z-index: 1;
        }

        .hero-img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.7;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 900px;
            padding: 0 2rem;
        }

        .hero-title {
            font-size: clamp(3rem, 8vw, 5rem);
            line-height: 1.1;
            margin-bottom: 1.5rem;
            color: #ffffff;
            letter-spacing: -0.02em;
        }

        .hero-subtitle {
            font-size: 1.25rem;
            margin-bottom: 2.5rem;
            color: #e4e2dd;
            max-width: 600px;
            margin-inline: auto;
        }

        .btn {
            display: inline-block;
            padding: 1rem 2.5rem;
            border-radius: 9999px;
            font-weight: 700;
            text-decoration: none;
            transition: transform 0.2s, background-color 0.2s;
            cursor: pointer;
            border: none;
        }

        .btn-primary {
            background-color: var(--secondary);
            color: white;
        }

        .btn-primary:hover {
            background-color: #822700;
            transform: translateY(-2px);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 5rem 2rem;
        }

        .section-title {
            font-size: 2.5rem;
            margin-bottom: 3rem;
            text-align: center;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2.5rem;
        }

        .card {
            background: var(--surface);
            border-radius: var(--radius-xl);
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 54, 41, 0.05);
            transition: transform 0.3s;
            display: flex;
            flex-direction: column;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card-img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .card-body {
            padding: 2rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .card-tag {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            background: #baeed9;
            color: var(--primary);
            font-size: 0.75rem;
            font-weight: 700;
            border-radius: 0.5rem;
            margin-bottom: 1rem;
            width: fit-content;
        }

        .card-title {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .card-text {
            color: var(--outline);
            font-size: 0.95rem;
            margin-bottom: 1.5rem;
            flex-grow: 1;
        }

        .card-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid #f0eee9;
            padding-top: 1.5rem;
        }

        .location {
            display: flex;
            align-items: center;
            font-size: 0.85rem;
            color: var(--primary);
            font-weight: 600;
        }

        .rating {
            display: flex;
            align-items: center;
            color: var(--secondary-container);
            font-weight: 700;
        }

        footer {
            background-color: var(--primary);
            color: white;
            padding: 4rem 2rem;
            text-align: center;
        }

        .footer-logo {
            font-family: 'Epilogue', sans-serif;
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        /* Nav */
        nav {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            padding: 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 10;
        }

        .nav-logo {
            color: white;
            font-family: 'Epilogue', sans-serif;
            font-weight: 800;
            font-size: 1.5rem;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

    <nav>
        <a href="/" class="nav-logo">EXPLORA BGA</a>
        <div class="nav-links">
            <a href="#lugares">Lugares</a>
            <a href="/lugares">API</a>
        </div>
    </nav>

    <header class="hero">
        <div class="hero-overlay"></div>
        <img src="https://images.unsplash.com/photo-1590001158193-79cd2026778d?q=80&w=2070&auto=format&fit=crop" alt="Bucaramanga" class="hero-img">
        <div class="hero-content">
            <h1 class="hero-title">Bucaramanga Vibrante</h1>
            <p class="hero-subtitle">Descubre la esencia de la "Ciudad de los Parques". Un viaje entre montañas andinas, cultura colonial y naturaleza exuberante.</p>
            <a href="#lugares" class="btn btn-primary">Comenzar Aventura</a>
        </div>
    </header>

    <main class="container" id="lugares">
        <h2 class="section-title">Destinos Imperdibles</h2>
        
        <div class="grid">
            @foreach($lugares as $lugar)
                <article class="card">
                    <img src="{{ $lugar->imagen_url ?? 'https://loremflickr.com/640/480/nature,city' }}" alt="{{ $lugar->nombre }}" class="card-img">
                    <div class="card-body">
                        <span class="card-tag">TURISMO</span>
                        <h3 class="card-title">{{ $lugar->nombre }}</h3>
                        <p class="card-text">{{ Str::limit($lugar->descripcion, 120) }}</p>
                        
                        <div class="card-footer">
                            <div class="location">
                                <svg style="width:16px; height:16px; margin-right:4px" viewBox="0 0 24 24" fill="currentColor"><path d="M12,2C8.13,2,5,5.13,5,9c0,5.25,7,13,7,13s7-7.75,7-13c0-3.87-3.13-7-7-7z M12,11.5c-1.38,0-2.5-1.12-2.5-2.5s1.12-2.5,2.5-2.5 s2.5,1.12,2.5,2.5S13.38,11.5,12,11.5z"/></svg>
                                {{ $lugar->ubicacion }}
                            </div>
                            <div class="rating">
                                <svg style="width:16px; height:16px; margin-right:4px" viewBox="0 0 24 24" fill="currentColor"><path d="M12,17.27L18.18,21l-1.64-7.03L22,9.24l-7.19-0.61L12,2L9.19,8.63L2,9.24l5.46,4.73L5.82,21L12,17.27z"/></svg>
                                {{ number_format($lugar->puntuacion, 1) }}
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </main>

    <footer>
        <div class="footer-logo">EXPLORA BGA</div>
        <p>&copy; {{ date('Y') }} Explora Bucaramanga. Todos los derechos reservados.</p>
        <p style="margin-top: 1rem; font-size: 0.8rem; opacity: 0.7;">Orgullosamente Santandereano</p>
    </footer>

</body>
</html>
