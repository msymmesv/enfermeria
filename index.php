<?php
// Configuración de la página
$empresa = "SymCarPer";
$slogan = "Soluciones de Inteligencia Artificial para tu Día a Día";
$anio_actual = date('Y');

// Información de contacto centralizada
$contacto = [
    'direccion' => 'Santiago, Chile',
    'email' => 'vlopez@symcarper.cl',
    'telefono' => '+56 9 8482 1018',
    'horario' => 'Lunes a Viernes, 9:00 - 18:00'
];

// Contenido principal de la página
$servicios = [
    [
        'id' => 'chatbots',
        'titulo' => 'Chatbots Personalizados con IA',
        'descripcion' => 'Desarrollamos chatbots inteligentes con procesamiento de lenguaje natural que aprenden de cada interacción para mejorar la atención al cliente, automatizar consultas frecuentes y proporcionar respuestas precisas las 24/7.',
        'icono' => 'fas fa-robot',
        'color' => '#8B5CF6',
        'color_inicio' => '#6D28D9',
        'color_fin' => '#9333EA',
        'imagen' => 'chatbot.svg',
        'caracteristicas' => [
            'Machine Learning integrado',
            'Multiidioma',
            'Integración API',
            'Analítica avanzada'
        ]
    ],
    [
        'id' => 'desarrollo',
        'titulo' => 'Desarrollo de Software con IA',
        'descripcion' => 'Creamos aplicaciones y sistemas que integran algoritmos avanzados de machine learning y deep learning para resolver problemas específicos de tu negocio, automatizando tareas complejas y optimizando procesos.',
        'icono' => 'fas fa-code',
        'color' => '#EC4899',
        'color_inicio' => '#BE185D',
        'color_fin' => '#DB2777',
        'imagen' => 'software.svg',
        'caracteristicas' => [
            'UX/UI inteligente',
            'Escalabilidad',
            'Seguridad avanzada',
            'Arquitectura modular'
        ]
    ],
    [
        'id' => 'automatizacion',
        'titulo' => 'Automatización de Procesos con Python',
        'descripcion' => 'Implementamos scripts y programas en Python con capacidades de IA que automatizan tareas repetitivas, analizan grandes volúmenes de datos y generan insights accionables para optimizar tus operaciones comerciales.',
        'icono' => 'fab fa-python',
        'color' => '#3B82F6',
        'color_inicio' => '#1D4ED8',
        'color_fin' => '#3B82F6',
        'imagen' => 'python.svg',
        'caracteristicas' => [
            'Detección de patrones',
            'Procesamiento de datos',
            'Dashboards en tiempo real',
            'Integración con APIs'
        ]
    ],
    [
        'id' => 'analisis',
        'titulo' => 'Análisis Predictivo de Datos',
        'descripcion' => 'Desarrollamos modelos predictivos basados en técnicas estadísticas avanzadas y algoritmos de machine learning que analizan patrones históricos para predecir tendencias futuras y ayudarte a tomar decisiones estratégicas.',
        'icono' => 'fas fa-chart-line',
        'color' => '#10B981',
        'color_inicio' => '#059669',
        'color_fin' => '#10B981',
        'imagen' => 'analytics.svg',
        'caracteristicas' => [
            'Visualización interactiva',
            'Predicción de comportamientos',
            'Segmentación inteligente',
            'Informes personalizados'
        ]
    ]
];

$caracteristicas = [
    [
        'titulo' => 'Algoritmos de Vanguardia',
        'descripcion' => 'Utilizamos los algoritmos más modernos de machine learning y deep learning para ofrecer resultados excepcionales.',
        'icono' => 'fas fa-microchip'
    ],
    [
        'titulo' => 'Procesamiento de Lenguaje Natural',
        'descripcion' => 'Nuestras soluciones entienden y procesan el lenguaje humano para interacciones más naturales y efectivas.',
        'icono' => 'fas fa-language'
    ],
    [
        'titulo' => 'Análisis de Datos en Tiempo Real',
        'descripcion' => 'Procesamos y analizamos grandes volúmenes de datos en tiempo real para ofrecer insights inmediatos.',
        'icono' => 'fas fa-tachometer-alt'
    ],
    [
        'titulo' => 'Escalabilidad y Adaptabilidad',
        'descripcion' => 'Nuestras soluciones crecen con tu negocio y se adaptan a tus necesidades cambiantes.',
        'icono' => 'fas fa-expand-arrows-alt'
    ],
    [
        'titulo' => 'Seguridad Avanzada',
        'descripcion' => 'Implementamos medidas de seguridad robustas para proteger tus datos y sistemas contra amenazas.',
        'icono' => 'fas fa-shield-alt'
    ],
    [
        'titulo' => 'Integración con Sistemas Existentes',
        'descripcion' => 'Nuestras soluciones se integran perfectamente con tus sistemas y plataformas actuales.',
        'icono' => 'fas fa-plug'
    ]
];

$tecnologias = [
    [
        'titulo' => 'Machine Learning Avanzado',
        'descripcion' => 'Implementamos algoritmos de aprendizaje automático que evolucionan constantemente, mejorando con cada interacción y conjunto de datos.',
        'icono' => 'fas fa-cogs',
        'color' => '#6366F1'
    ],
    [
        'titulo' => 'Redes Neuronales Profundas',
        'descripcion' => 'Utilizamos arquitecturas de deep learning que emulan el cerebro humano para resolver problemas complejos con precisión sin precedentes.',
        'icono' => 'fas fa-network-wired',
        'color' => '#8B5CF6'
    ],
    [
        'titulo' => 'Computación Cognitiva',
        'descripcion' => 'Nuestros sistemas aprenden, razonan y se adaptan para proporcionar soluciones personalizadas a problemas únicos de cada cliente.',
        'icono' => 'fas fa-brain',
        'color' => '#EC4899'
    ],
    [
        'titulo' => 'Procesamiento de Big Data',
        'descripcion' => 'Contamos con infraestructura de alto rendimiento para analizar y procesar volúmenes masivos de datos con velocidad y eficiencia.',
        'icono' => 'fas fa-database',
        'color' => '#F59E0B'
    ],
    [
        'titulo' => 'Visión Artificial',
        'descripcion' => 'Nuestros sistemas pueden interpretar, analizar y comprender imágenes y videos para automatizar tareas de clasificación e identificación.',
        'icono' => 'fas fa-eye',
        'color' => '#10B981'
    ],
    [
        'titulo' => 'Auto-aprendizaje Continuo',
        'descripcion' => 'Todas nuestras soluciones incorporan capacidades de mejora automática, evolucionando constantemente para ofrecer resultados superiores.',
        'icono' => 'fas fa-sync-alt',
        'color' => '#3B82F6'
    ]
];

$preguntas_frecuentes = [
    [
        'pregunta' => '¿Qué es la inteligencia artificial y cómo puede beneficiar a mi empresa?',
        'respuesta' => 'La inteligencia artificial (IA) es un conjunto de tecnologías que permiten a las máquinas aprender, razonar y tomar decisiones de manera similar a los humanos. Puede beneficiar a tu empresa automatizando tareas repetitivas, analizando grandes volúmenes de datos para obtener insights valiosos, personalizando la experiencia de tus clientes y optimizando procesos operativos, lo que se traduce en mayor eficiencia, reducción de costos y ventajas competitivas.'
    ],
    [
        'pregunta' => '¿Cuánto tiempo toma implementar una solución de IA en mi negocio?',
        'respuesta' => 'El tiempo de implementación varía según la complejidad del proyecto y los requerimientos específicos. Un chatbot básico puede estar operativo en 2-3 semanas, mientras que soluciones más complejas de análisis predictivo o automatización de procesos pueden tomar entre 1-3 meses. En SymCarPer realizamos una evaluación inicial para proporcionarte un cronograma detallado adaptado a tus necesidades.'
    ],
    [
        'pregunta' => '¿Necesito conocimientos técnicos para utilizar vuestras soluciones?',
        'respuesta' => 'No, nuestras soluciones están diseñadas pensando en la facilidad de uso. Desarrollamos interfaces intuitivas y proporcionamos capacitación completa para que tu equipo pueda utilizar nuestras herramientas sin necesidad de conocimientos técnicos avanzados. Además, ofrecemos soporte técnico continuo para resolver cualquier duda que pueda surgir.'
    ],
    [
        'pregunta' => '¿Cómo garantizan la seguridad y privacidad de nuestros datos?',
        'respuesta' => 'La seguridad es una prioridad para nosotros. Implementamos protocolos de encriptación avanzados, autenticación multifactor, y seguimos las mejores prácticas de la industria en materia de seguridad informática. Cumplimos con regulaciones de protección de datos como GDPR y mantenemos auditorías de seguridad periódicas para garantizar que tus datos estén siempre protegidos.'
    ],
    [
        'pregunta' => '¿Ofrecen soluciones personalizadas o solo tienen productos estándar?',
        'respuesta' => 'Nos especializamos en desarrollar soluciones personalizadas que se adaptan perfectamente a las necesidades específicas de cada cliente. Aunque contamos con frameworks y módulos prediseñados que aceleran el desarrollo, cada implementación es única y está configurada para integrarse con tus sistemas existentes y resolver tus desafíos particulares.'
    ],
    [
        'pregunta' => '¿Cómo se mide el retorno de inversión (ROI) de las soluciones de IA?',
        'respuesta' => 'Establecemos métricas claras desde el inicio del proyecto para medir el ROI. Dependiendo de la solución, estas pueden incluir: reducción de costos operativos, aumento en la tasa de conversión, mejora en la satisfacción del cliente, reducción de tiempo en procesos, optimización de recursos humanos, entre otras. Proporcionamos dashboards de análisis para que puedas visualizar estos resultados en tiempo real.'
    ]
];

// Generación de meta tags dinámicos
$meta_description = "SymCarPer ofrece soluciones avanzadas de Inteligencia Artificial para transformar tu empresa. Chatbots, desarrollo de software IA, automatización y análisis predictivo.";
$meta_keywords = "inteligencia artificial, IA, machine learning, deep learning, automatización, chatbots, análisis predictivo, Python, desarrollo de software, SymCarPer";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Metadatos para caché y SEO -->
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    
    <title><?php echo $empresa; ?> - Soluciones Avanzadas de Inteligencia Artificial</title>
    
    <!-- Meta Tags SEO -->
    <meta name="description" content="<?php echo $meta_description; ?>">
    <meta name="keywords" content="<?php echo $meta_keywords; ?>">
    <meta name="author" content="<?php echo $empresa; ?>">
    
    <!-- Meta Tags para Redes Sociales -->
    <meta property="og:title" content="<?php echo $empresa; ?> - Revolucionando con IA">
    <meta property="og:description" content="<?php echo $meta_description; ?>">
    <meta property="og:url" content="https://www.symcarper.cl">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.symcarper.cl/img/og-image.jpg">
    <meta name="twitter:card" content="summary_large_image">
    
    <!-- Favicon incrustado como SVG -->
    <link rel="icon" href="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAgMTAwIj48ZGVmcz48bGluZWFyR3JhZGllbnQgaWQ9ImEiIHgxPSIwJSIgeTE9IjAlIiB4Mj0iMTAwJSIgeTI9IjEwMCUiPjxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9IiM4QjVDRjYiLz48c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNFQzQ4OTkiLz48L2xpbmVhckdyYWRpZW50PjwvZGVmcz48cmVjdCB3aWR0aD0iMTAwIiBoZWlnaHQ9IjEwMCIgcng9IjIwIiBmaWxsPSJ1cmwoI2EpIi8+PHBhdGggZD0iTTUwIDI1YzEwIDAgMTggOCAxOCAxOHMtOCAxOC0xOCAxOC0xOC04LTE4LTE4IDgtMTggMTgtMTh6TTMwIDY1YzAgMCA3IDEwIDIwIDEwczIwLTEwIDIwLTEwIiBzdHJva2U9IiNmZmYiIHN0cm9rZS13aWR0aD0iNCIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBmaWxsPSJub25lIi8+PC9zdmc+" type="image/svg+xml">
    <link rel="apple-touch-icon" href="assets/img/favicon.png">
    
    <!-- Precargas para optimización -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    
    <!-- Google Fonts optimizados -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@400;500;600;700&family=Outfit:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- CSS Libraries optimizadas -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    
    <!-- CSS principal -->
    <link rel="stylesheet" href="assets/css/main.min.css">
    
    <!-- CSS para la animación de red neuronal -->
    <link rel="stylesheet" href="assets/css/neural-network.css">
    
    <!-- CSS para el menú mejorado -->
    <link rel="stylesheet" href="assets/css/navbar-enhanced.css">
    
    <!-- CSS adicional para mejoras visuales -->
    <style>
        /* Mejoras para el texto y elementos visuales */
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Space Grotesk', sans-serif;
        }
        
        .hero__title {
            font-size: 3.75rem !important;
            letter-spacing: -0.02em;
            line-height: 1.1;
            margin-bottom: 1.5rem;
            text-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }
        
        .hero__description {
            font-size: 1.25rem !important;
            line-height: 1.6;
            color: rgba(255, 255, 255, 0.85);
            max-width: 95%;
        }
        
        /* Botones más atractivos */
        .btn {
            position: relative;
            overflow: hidden;
            z-index: 1;
            font-weight: 600;
            letter-spacing: 0.01em;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275) !important;
        }
        
        .btn::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 0;
            background: rgba(255, 255, 255, 0.1);
            z-index: -1;
            transition: height 0.3s ease-in-out;
        }
        
        .btn:hover::after {
            height: 100%;
        }
        
        .btn--primary {
            background: linear-gradient(135deg, #6D28D9, #8B5CF6) !important;
        }
        
        .btn--primary:hover {
            box-shadow: 0 8px 16px rgba(109, 40, 217, 0.3) !important;
            transform: translateY(-3px) !important;
        }
        
        .btn--secondary {
            background: linear-gradient(135deg, #1D4ED8, #3B82F6) !important;
        }
        
        .btn--secondary:hover {
            box-shadow: 0 8px 16px rgba(29, 78, 216, 0.3) !important;
            transform: translateY(-3px) !important;
        }
        
        /* Mejoras para stats de hero */
        .hero__stats {
            display: flex;
            gap: 3rem;
            padding: 1.5rem;
            background: rgba(17, 24, 39, 0.5);
            border-radius: 16px;
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            margin-top: 2rem;
        }
        
        .hero__stat-value {
            font-size: 3rem !important;
            font-weight: 800;
            color: white !important;
            text-shadow: 0 0 10px rgba(139, 92, 246, 0.5);
        }
        
        .hero__stat-label {
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.7);
            font-weight: 500;
        }
        
        /* Mejoras para tarjetas y secciones */
        .section__title {
            font-size: 2.75rem !important;
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 1.5rem;
        }
        
        .section__description {
            font-size: 1.125rem !important;
            line-height: 1.6;
        }
        
        .service-card {
            border-radius: 24px !important;
            overflow: hidden;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15) !important;
            transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275) !important;
        }
        
        .service-card:hover {
            transform: translateY(-10px) !important;
        }
        
        .service-card__content {
            padding: 3.5rem !important;
        }
        
        .service-card__title {
            font-size: 2rem !important;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }
        
        .service-card__description {
            font-size: 1.125rem !important;
            line-height: 1.6;
            color: rgba(0, 0, 0, 0.7);
        }
        
        /* Mejoras para los formularios */
        .form-control {
            padding: 1rem 1rem 1rem 3rem !important;
            border: 2px solid var(--gray-300) !important;
            border-radius: 12px !important;
            transition: all 0.3s ease !important;
        }
        
        .form-control:focus {
            border-color: var(--primary) !important;
            box-shadow: 0 0 0 4px rgba(139, 92, 246, 0.15) !important;
        }
        
        .form-textarea {
            min-height: 180px !important;
        }
        
        /* Mejoras para el footer */
        .footer {
            position: relative;
            padding-top: 6rem !important;
            background: linear-gradient(180deg, #0f172a, #111827) !important;
        }
        
        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 10px;
            background: linear-gradient(90deg, #6D28D9, #EC4899, #3B82F6);
        }
        
        .footer__description {
            font-size: 1.125rem !important;
            line-height: 1.6;
            color: rgba(255, 255, 255, 0.7);
        }
        
        .footer__heading {
            position: relative;
            padding-bottom: 0.75rem;
            margin-bottom: 1.5rem !important;
        }
        
        .footer__heading::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: linear-gradient(90deg, #8B5CF6, #EC4899);
        }
        
        /* Efecto de tarjetas mejorado para móviles */
        @media (max-width: 992px) {
            .service-tile {
                background: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(12px);
                -webkit-backdrop-filter: blur(12px);
                border-radius: 16px;
                border: 1px solid rgba(255, 255, 255, 0.2);
                box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
                transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            }
            
            .service-tile:hover {
                transform: translateY(-8px) scale(1.02);
            }
        }
    </style>
    
    <!-- Three.js para la animación de red neuronal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
</head>
<body>
    <!-- Precargador -->
    <div class="preloader" id="preloader">
        <div class="preloader__content">
            <div class="preloader__logo">
                <div class="logo__icon">
                    <i class="fas fa-brain"></i>
                </div>
                <div class="logo__text"><?php echo $empresa; ?></div>
            </div>
            <div class="preloader__brain">
                <svg id="brain-svg" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="brain-path" d="M50 20C40 20 30 30 30 40C30 50 40 60 50 60C60 60 70 50 70 40C70 30 60 20 50 20Z" 
                          stroke="url(#gradient-1)" stroke-width="2" stroke-linecap="round"/>
                    <path class="brain-path" d="M30 45C20 45 15 55 15 65C15 75 25 85 50 85C75 85 85 75 85 65C85 55 80 45 70 45" 
                          stroke="url(#gradient-1)" stroke-width="2" stroke-linecap="round"/>
                    <path class="brain-path" d="M25 65C25 65 35 75 50 75C65 75 75 65 75 65" 
                          stroke="url(#gradient-1)" stroke-width="2" stroke-linecap="round"/>
                    <path class="brain-path" d="M40 85C40 85 45 95 50 95C55 95 60 85 60 85" 
                          stroke="url(#gradient-2)" stroke-width="2" stroke-linecap="round"/>
                    <path class="brain-path" d="M20 50C20 50 10 40 10 30C10 20 20 10 40 10C60 10 70 20 70 30C70 40 60 50 60 50" 
                          stroke="url(#gradient-2)" stroke-width="2" stroke-linecap="round"/>
                    <path class="brain-path" d="M30 25C30 25 40 15 50 15C60 15 70 25 70 25" 
                          stroke="url(#gradient-2)" stroke-width="2" stroke-linecap="round"/>
                    <path class="brain-path" d="M40 10C40 10 45 5 50 5C55 5 60 10 60 10" 
                          stroke="url(#gradient-2)" stroke-width="2" stroke-linecap="round"/>
                    
                    <!-- Puntos de conexión animados -->
                    <circle class="node" cx="50" cy="20" r="2" fill="#8B5CF6"/>
                    <circle class="node" cx="30" cy="40" r="2" fill="#8B5CF6"/>
                    <circle class="node" cx="70" cy="40" r="2" fill="#8B5CF6"/>
                    <circle class="node" cx="15" cy="65" r="2" fill="#EC4899"/>
                    <circle class="node" cx="50" cy="85" r="2" fill="#EC4899"/>
                    <circle class="node" cx="85" cy="65" r="2" fill="#EC4899"/>
                    <circle class="node" cx="50" cy="5" r="2" fill="#8B5CF6"/>
                    <circle class="node" cx="40" cy="60" r="2" fill="#EC4899"/>
                    <circle class="node" cx="60" cy="60" r="2" fill="#EC4899"/>
                    
                    <!-- Gradientes para trazos -->
                    <defs>
                        <linearGradient id="gradient-1" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#8B5CF6"/>
                            <stop offset="100%" stop-color="#6D28D9"/>
                        </linearGradient>
                        <linearGradient id="gradient-2" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#EC4899"/>
                            <stop offset="100%" stop-color="#BE185D"/>
                        </linearGradient>
                    </defs>
                </svg>
            </div>
            <div class="preloader__text">CARGANDO</div>
            <div class="preloader__bar">
                <div class="preloader__progress"></div>
            </div>
        </div>
    </div>

    <!-- Navegación Principal -->
    <header class="navbar" id="navbar">
        <div class="container">
            <div class="navbar__container">
                <!-- Logo -->
                <a href="./" class="logo">
                    <div class="logo__icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <div class="logo__text">Sym<span class="logo__highlight">CarPer</span></div>
                </a>
                
                <!-- Navegación -->
                <nav class="nav">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#inicio" class="nav__link active" data-scroll>Inicio</a>
                        </li>
                        <li class="nav__item">
                            <a href="#nosotros" class="nav__link" data-scroll>Nosotros</a>
                        </li>
                        <li class="nav__item">
                            <a href="#servicios" class="nav__link" data-scroll>Servicios</a>
                        </li>
                        <li class="nav__item">
                            <a href="#tecnologia" class="nav__link" data-scroll>Tecnología</a>
                        </li>
                        <li class="nav__item">
                            <a href="plataformas.php" class="nav__link">Plataformas</a>
                        </li>
                        <li class="nav__item">
                            <a href="#contacto" class="nav__link" data-scroll>Contacto</a>
                        </li>
                    </ul>
                </nav>
                
                <!-- Botones de acción -->
                <div class="navbar__actions">
                    <a href="#contacto" class="btn btn--primary-outline btn--sm">Contáctanos</a>
                    <button class="navbar__toggle" id="navbar-toggle" aria-label="Menú">
                        <span class="navbar__toggle-icon"></span>
                    </button>
                </div>
            </div>
        </div>
    </header>
    
    <!-- Menú Móvil -->
    <div class="mobile-menu" id="mobile-menu">
        <div class="mobile-menu__container">
            <ul class="mobile-menu__list">
                <li class="mobile-menu__item">
                    <a href="#inicio" class="mobile-menu__link" data-scroll>Inicio</a>
                </li>
                <li class="mobile-menu__item">
                    <a href="#nosotros" class="mobile-menu__link" data-scroll>Nosotros</a>
                </li>
                <li class="mobile-menu__item">
                    <a href="#servicios" class="mobile-menu__link" data-scroll>Servicios</a>
                </li>
                <li class="mobile-menu__item">
                    <a href="#tecnologia" class="mobile-menu__link" data-scroll>Tecnología</a>
                </li>
                <li class="mobile-menu__item">
                    <a href="plataformas.php" class="mobile-menu__link">Plataformas</a>
                </li>
                <li class="mobile-menu__item">
                    <a href="#contacto" class="mobile-menu__link" data-scroll>Contacto</a>
                </li>
            </ul>
            <div class="mobile-menu__footer">
                <div class="mobile-menu__social">
                    <a href="#" class="social-link" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="social-link" aria-label="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-link" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
                <a href="#contacto" class="btn btn--primary btn--block">Solicitar Información</a>
            </div>
        </div>
    </div>

    <!-- Sección Hero -->
    <section id="inicio" class="hero">
        <!-- Neural Network Container -->
        <div id="neural-network-container" class="neural-network-container"></div>
        <div class="neural-network-interactive"></div>
        
        <!-- Particles Canvas -->
        <div id="particles-canvas" class="hero__particles"></div>
        
        <div class="container">
            <div class="hero__container">
                <!-- Contenido Principal -->
                <div class="hero__content">
                    <div class="hero__badge">
                        <i class="fas fa-robot"></i>
                        <span>Inteligencia Artificial Avanzada</span>
                    </div>
                    <h1 class="hero__title">
                        Revoluciona Tu Empresa Con <span class="hero__title-gradient" id="hero-typewriter">Data Science</span>
                    </h1>
                    <p class="hero__description">
                        Transformamos desafíos empresariales en oportunidades mediante soluciones personalizadas
                        de inteligencia artificial que automatizan procesos, optimizan recursos y potencian 
                        la toma de decisiones estratégicas.
                    </p>
                    <div class="hero__buttons">
                        <a href="#contacto" class="btn btn--primary" data-scroll>
                            <i class="fas fa-rocket"></i>
                            <span>Comienza Ahora</span>
                        </a>
                        <a href="#servicios" class="btn btn--secondary" data-scroll>
                            <i class="fas fa-lightbulb"></i>
                            <span>Descubre Más</span>
                        </a>
                    </div>
                    <div class="hero__stats">
                        <div class="hero__stat">
                            <div class="hero__stat-value" data-count="300">0</div>
                            <div class="hero__stat-label">Proyectos<br>Completados</div>
                        </div>
                        <div class="hero__stat">
                            <div class="hero__stat-value" data-count="98">0</div>
                            <div class="hero__stat-label">Clientes<br>Satisfechos</div>
                        </div>
                        <div class="hero__stat">
                            <div class="hero__stat-value" data-count="5">0</div>
                            <div class="hero__stat-label">Años de<br>Experiencia</div>
                        </div>
                    </div>
                </div>
                
                <!-- Visualización 3D (reemplazada por neural-network) -->
                <div class="hero__visual">
                    <div class="hero__visual-overlay"></div>
                </div>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <a href="#servicios" class="scroll-indicator" data-scroll>
            <span>Descubre</span>
            <div class="scroll-chevron">
                <i class="fas fa-chevron-down"></i>
            </div>
        </a>
        
        <!-- Mouse Tracker -->
        <div class="mouse-tracker" id="mouse-tracker"></div>
    </section>

    <!-- Servicios -->
    <section id="servicios" class="section section--services" data-section="servicios">
        <div class="section__background">
            <div class="section__shapes">
                <div class="shape shape--1"></div>
                <div class="shape shape--2"></div>
                <div class="shape shape--3"></div>
            </div>
            <div class="section__grid"></div>
        </div>
        
        <div class="container">
            <div class="section__header" data-aos="fade-up">
                <div class="section__badge">
                    <i class="fas fa-cogs"></i>
                    <span>Nuestros Servicios</span>
                </div>
                <h2 class="section__title">Soluciones Inteligentes Para Tu Negocio</h2>
                <p class="section__description">
                    Utilizamos tecnologías avanzadas de IA para crear soluciones personalizadas que transforman 
                    la forma en que operas y compites en el mercado digital actual.
                </p>
            </div>
            
            <div class="services" id="services-tabs" data-aos="fade-up" data-aos-delay="200">
                <!-- Tab Navigation -->
                <div class="services__tabs">
                    <?php foreach($servicios as $index => $servicio): ?>
                    <button class="services__tab <?php echo $index === 0 ? 'active' : ''; ?>" 
                            data-tab="<?php echo $servicio['id']; ?>">
                        <i class="<?php echo $servicio['icono']; ?>"></i>
                        <span><?php echo $servicio['titulo']; ?></span>
                    </button>
                    <?php endforeach; ?>
                </div>
                
                <!-- Tab Content -->
                <div class="services__content">
                    <?php foreach($servicios as $index => $servicio): ?>
                    <div class="services__panel <?php echo $index === 0 ? 'active' : ''; ?>" 
                         id="tab-<?php echo $servicio['id']; ?>" 
                         data-aos="fade-up" data-aos-delay="300">
                        <div class="service-card">
                            <div class="service-card__content">
                                <h3 class="service-card__title"><?php echo $servicio['titulo']; ?></h3>
                                <p class="service-card__description"><?php echo $servicio['descripcion']; ?></p>
                                
                                <ul class="service-card__features">
                                    <?php foreach($servicio['caracteristicas'] as $caracteristica): ?>
                                    <li class="service-card__feature">
                                        <i class="fas fa-check-circle"></i>
                                        <span><?php echo $caracteristica; ?></span>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                                
                                <div class="service-card__cta">
                                    <a href="#contacto" class="btn btn--primary" data-scroll>
                                        <i class="fas fa-rocket"></i>
                                        <span>Solicitar Información</span>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="service-card__visual">
                                <div class="service-card__icon" style="background: linear-gradient(135deg, <?php echo $servicio['color_inicio']; ?>, <?php echo $servicio['color_fin']; ?>);">
                                    <i class="<?php echo $servicio['icono']; ?>"></i>
                                </div>
                                <div class="service-card__image">
                                    <img src="assets/img/services/<?php echo $servicio['imagen']; ?>" 
                                         alt="<?php echo $servicio['titulo']; ?>"
                                         class="service-card__img"
                                         loading="lazy">
                                </div>
                                <div class="service-card__particles" id="particles-<?php echo $servicio['id']; ?>"></div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <!-- Servicios Destacados - Tarjetas para móvil -->
            <div class="services-grid" data-aos="fade-up" data-aos-delay="200">
                <?php foreach($servicios as $servicio): ?>
                <div class="service-tile">
                    <div class="service-tile__icon" style="background: linear-gradient(135deg, <?php echo $servicio['color_inicio']; ?>, <?php echo $servicio['color_fin']; ?>);">
                        <i class="<?php echo $servicio['icono']; ?>"></i>
                    </div>
                    <h3 class="service-tile__title"><?php echo $servicio['titulo']; ?></h3>
                    <p class="service-tile__description"><?php echo $servicio['descripcion']; ?></p>
                    <a href="#contacto" class="service-tile__link" data-scroll>
                        <span>Más Información</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Sobre Nosotros / Características -->
    <section id="nosotros" class="section section--features" data-section="nosotros">
        <div class="section__background section__background--dark">
            <div class="section__circuit"></div>
            <div class="section__gradient"></div>
        </div>
        
        <div class="container">
            <div class="section__header section__header--light" data-aos="fade-up">
                <div class="section__badge section__badge--light">
                    <i class="fas fa-brain"></i>
                    <span>Quiénes Somos</span>
                </div>
                <h2 class="section__title">Potenciando Empresas Con <span class="gradient-text">Tecnología IA</span></h2>
                <p class="section__description">
                    En <?php echo $empresa; ?>, transformamos desafíos cotidianos mediante soluciones innovadoras 
                    de Inteligencia Artificial que impulsan la eficiencia y el crecimiento.
                </p>
            </div>
            
            <div class="features-grid">
                <?php foreach($caracteristicas as $index => $caracteristica): ?>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                    <div class="feature-card__icon">
                        <i class="<?php echo $caracteristica['icono']; ?>"></i>
                    </div>
                    <h3 class="feature-card__title"><?php echo $caracteristica['titulo']; ?></h3>
                    <p class="feature-card__description"><?php echo $caracteristica['descripcion']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
            
            <div class="stats" data-aos="fade-up">
                <div class="stats__item">
                    <div class="stats__value" data-count="99">0</div>
                    <div class="stats__label">Satisfacción<br>Cliente</div>
                    <div class="stats__symbol">%</div>
                </div>
                <div class="stats__item">
                    <div class="stats__value" data-count="65">0</div>
                    <div class="stats__label">Reducción de<br>Costos</div>
                    <div class="stats__symbol">%</div>
                </div>
                <div class="stats__item">
                    <div class="stats__value" data-count="24">0</div>
                    <div class="stats__label">Soporte<br>Continuo</div>
                    <div class="stats__symbol">/7</div>
                </div>
                <div class="stats__item">
                    <div class="stats__value" data-count="15">0</div>
                    <div class="stats__label">Reconocimientos<br>Industria</div>
                    <div class="stats__symbol">+</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Tecnología -->
    <section id="tecnologia" class="section section--tech" data-section="tecnologia">
        <div class="section__background">
            <div class="section__shapes">
                <div class="shape shape--4"></div>
                <div class="shape shape--5"></div>
            </div>
            <div class="section__grid section__grid--alt"></div>
        </div>
        
        <div class="container">
            <div class="tech-row">
                <div class="tech-content" data-aos="fade-right">
                    <div class="section__badge">
                        <i class="fas fa-microchip"></i>
                        <span>Nuestra Tecnología</span>
                    </div>
                    <h2 class="section__title">La <span class="gradient-text">Mejor Tecnología IA</span> a Tu Alcance</h2>
                    <p class="section__description">
                        En <?php echo $empresa; ?> implementamos la tecnología de inteligencia artificial más avanzada disponible en 
                        el mercado. Nuestros algoritmos se mantienen en constante evolución, aprendiendo de cada 
                        interacción para ofrecer resultados cada vez más precisos y eficientes.
                    </p>
                    
                    <div class="tech-highlight">
                        <div class="tech-highlight__icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <div class="tech-highlight__content">
                            <h3 class="tech-highlight__title">Aprendizaje Continuo</h3>
                            <p class="tech-highlight__description">
                                Nuestros sistemas mejoran automáticamente con cada interacción, adaptándose 
                                constantemente para ofrecer resultados superiores con el tiempo.
                            </p>
                        </div>
                    </div>
                    
                    <div class="tech-features">
                        <div class="tech-feature">
                            <i class="fas fa-check-circle"></i>
                            <span>Algoritmos de última generación</span>
                        </div>
                        <div class="tech-feature">
                            <i class="fas fa-check-circle"></i>
                            <span>Redes neuronales profundas</span>
                        </div>
                        <div class="tech-feature">
                            <i class="fas fa-check-circle"></i>
                            <span>Procesamiento de lenguaje natural</span>
                        </div>
                        <div class="tech-feature">
                            <i class="fas fa-check-circle"></i>
                            <span>Análisis predictivo avanzado</span>
                        </div>
                    </div>
                    
                    <a href="#contacto" class="btn btn--primary" data-scroll>
                        <i class="fas fa-rocket"></i>
                        <span>Implementa Esta Tecnología</span>
                    </a>
                </div>
                
                <div class="tech-visual" data-aos="fade-left">
                    <div class="robot-container" id="robot3D">
                        <!-- El contenido del robot 3D se generará con JS -->
                    </div>
                    <div class="tech-particles" id="tech-particles"></div>
                </div>
            </div>
            
            <div class="tech-grid">
                <?php foreach($tecnologias as $index => $tecnologia): ?>
                <div class="tech-card" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                    <div class="tech-card__header">
                        <div class="tech-card__icon" style="background: <?php echo $tecnologia['color']; ?>">
                            <i class="<?php echo $tecnologia['icono']; ?>"></i>
                        </div>
                    </div>
                    <div class="tech-card__body">
                        <h3 class="tech-card__title"><?php echo $tecnologia['titulo']; ?></h3>
                        <p class="tech-card__description"><?php echo $tecnologia['descripcion']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Preguntas Frecuentes -->
    <section id="faq" class="section section--faq" data-section="faq">
        <div class="section__background section__background--light">
            <div class="section__dots"></div>
        </div>
        
        <div class="container">
            <div class="section__header" data-aos="fade-up">
                <div class="section__badge">
                    <i class="fas fa-question-circle"></i>
                    <span>Preguntas Frecuentes</span>
                </div>
                <h2 class="section__title">Todo lo que necesitas saber sobre nuestras <span class="gradient-text">Soluciones IA</span></h2>
                <p class="section__description">
                    Respondemos a las dudas más comunes sobre la implementación de inteligencia artificial en tu empresa.
                </p>
            </div>
            
            <div class="faq" data-aos="fade-up" data-aos-delay="200">
                <?php foreach($preguntas_frecuentes as $index => $pregunta): ?>
                <div class="faq__item">
                    <button class="faq__question">
                        <?php echo $pregunta['pregunta']; ?>
                        <i class="fas fa-chevron-down faq__icon"></i>
                    </button>
                    <div class="faq__answer">
                        <p><?php echo $pregunta['respuesta']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            
            <div class="section__action" data-aos="fade-up" data-aos-delay="400">
                <p class="section__action-text">
                    ¿Tienes más preguntas? No dudes en contactarnos
                </p>
                <a href="#contacto" class="btn btn--primary" data-scroll>
                    <i class="fas fa-comment-dots"></i>
                    <span>Contactar Ahora</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Contacto -->
    <section id="contacto" class="section section--contact" data-section="contacto">
        <div class="section__background">
            <div class="section__shapes">
                <div class="shape shape--6"></div>
                <div class="shape shape--7"></div>
            </div>
            <div class="ai-particles" id="ai-particles"></div>
        </div>
        
        <div class="container">
            <div class="contact-grid">
                <div class="contact-info" data-aos="fade-right">
                    <div class="section__header section__header--left">
                        <div class="section__badge">
                            <i class="fas fa-paper-plane"></i>
                            <span>Contacto</span>
                        </div>
                        <h2 class="section__title">
                            ¿Listo para Transformar tu Negocio con <span class="gradient-text">IA</span>?
                        </h2>
                        <p class="section__description">
                            Contáctanos hoy mismo y descubre cómo nuestras soluciones de IA pueden impulsar tu crecimiento 
                            empresarial y optimizar tus procesos.
                        </p>
                    </div>
                    
                    <div class="contact-methods">
                        <div class="contact-method">
                            <div class="contact-method__icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-method__details">
                                <div class="contact-method__label">Ubicación</div>
                                <div class="contact-method__value"><?php echo $contacto['direccion']; ?></div>
                            </div>
                        </div>
                        
                        <div class="contact-method">
                            <div class="contact-method__icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-method__details">
                                <div class="contact-method__label">Email</div>
                                <div class="contact-method__value"><?php echo $contacto['email']; ?></div>
                            </div>
                        </div>
                        
                        <div class="contact-method">
                            <div class="contact-method__icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="contact-method__details">
                                <div class="contact-method__label">Teléfono</div>
                                <div class="contact-method__value"><?php echo $contacto['telefono']; ?></div>
                            </div>
                        </div>
                        
                        <div class="contact-method">
                            <div class="contact-method__icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="contact-method__details">
                                <div class="contact-method__label">Horario de Atención</div>
                                <div class="contact-method__value"><?php echo $contacto['horario']; ?></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="contact-social">
                        <h3 class="contact-social__title">Síguenos</h3>
                        <div class="contact-social__links">
                            <a href="#" class="contact-social__link" aria-label="LinkedIn">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="contact-social__link" aria-label="Twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="contact-social__link" aria-label="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="contact-social__link" aria-label="Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form-wrapper" data-aos="fade-left">
                    <form id="contactForm" class="contact-form" novalidate>
                        <h3 class="contact-form__title">Envíanos un mensaje</h3>
                        
                        <div class="form-group">
                            <label class="form-label" for="nombre">Nombre Completo</label>
                            <div class="form-input">
                                <i class="fas fa-user"></i>
                                <input type="text" id="nombre" name="nombre" class="form-control" required 
                                       placeholder="Tu nombre completo">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="email">Correo Electrónico</label>
                            <div class="form-input">
                                <i class="fas fa-envelope"></i>
                                <input type="email" id="email" name="email" class="form-control" required 
                                       placeholder="correo@ejemplo.com">
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label" for="empresa">Empresa</label>
                                <div class="form-input">
                                    <i class="fas fa-building"></i>
                                    <input type="text" id="empresa" name="empresa" class="form-control" 
                                           placeholder="Nombre de tu empresa">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label" for="servicio">Servicio de Interés</label>
                                <div class="form-select">
                                    <select id="servicio" name="servicio" class="form-control">
                                        <option value="">Selecciona un servicio</option>
                                        <option value="chatbots">Chatbots Personalizados con IA</option>
                                        <option value="desarrollo">Desarrollo de Software con IA</option>
                                        <option value="automatizacion">Automatización de Procesos con Python</option>
                                        <option value="analisis">Análisis Predictivo de Datos</option>
                                        <option value="otro">Otro (Especificar en el mensaje)</option>
                                    </select>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="mensaje">Mensaje</label>
                            <div class="form-input">
                                <i class="fas fa-comment-alt"></i>
                                <textarea id="mensaje" name="mensaje" class="form-control form-textarea" required 
                                          placeholder="Cuéntanos sobre tu proyecto o necesidades..."></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group form-group--checkbox">
                            <label class="form-checkbox">
                                <input type="checkbox" name="privacy" required>
                                <span class="checkbox-indicator"></span>
                                <span class="checkbox-text">
                                    Acepto la <a href="#" class="form-link">Política de Privacidad</a> y el tratamiento de mis datos.
                                </span>
                            </label>
                        </div>
                        
                        <button type="submit" class="btn btn--primary btn--block">
                            <i class="fas fa-paper-plane"></i>
                            <span>Enviar Mensaje</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer__background">
            <div class="footer__gradient"></div>
            <div class="footer__circuit"></div>
        </div>
        
        <div class="container">
            <div class="footer__content">
                <div class="footer__branding">
                    <a href="./" class="footer__logo">
                        <div class="logo__icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <div class="logo__text">Sym<span class="logo__highlight">CarPer</span></div>
                    </a>
                    <p class="footer__description">
                        Transformamos desafíos cotidianos mediante soluciones innovadoras de Inteligencia Artificial 
                        que impulsan el crecimiento de tu empresa con tecnología de vanguardia.
                    </p>
                    <div class="footer__social">
                        <a href="#" class="social-link" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="social-link" aria-label="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-link" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-link" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </div>
                </div>
                
                <div class="footer__links">
                    <div class="footer__column">
                        <h3 class="footer__heading">Enlaces Rápidos</h3>
                        <ul class="footer__nav">
                            <li class="footer__item">
                                <a href="#inicio" class="footer__link" data-scroll><i class="fas fa-chevron-right"></i> Inicio</a>
                            </li>
                            <li class="footer__item">
                                <a href="#nosotros" class="footer__link" data-scroll><i class="fas fa-chevron-right"></i> Sobre Nosotros</a>
                            </li>
                            <li class="footer__item">
                                <a href="#servicios" class="footer__link" data-scroll><i class="fas fa-chevron-right"></i> Servicios</a>
                            </li>
                            <li class="footer__item">
                                <a href="#tecnologia" class="footer__link" data-scroll><i class="fas fa-chevron-right"></i> Tecnología</a>
                            </li>
                            <li class="footer__item">
                                <a href="#contacto" class="footer__link" data-scroll><i class="fas fa-chevron-right"></i> Contacto</a>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="footer__column">
                        <h3 class="footer__heading">Nuestros Servicios</h3>
                        <ul class="footer__nav">
                            <li class="footer__item">
                                <a href="#servicios" class="footer__link" data-scroll><i class="fas fa-chevron-right"></i> Chatbots con IA</a>
                            </li>
                            <li class="footer__item">
                                <a href="#servicios" class="footer__link" data-scroll><i class="fas fa-chevron-right"></i> Desarrollo con IA</a>
                            </li>
                            <li class="footer__item">
                                <a href="#servicios" class="footer__link" data-scroll><i class="fas fa-chevron-right"></i> Automatización Python</a>
                            </li>
                            <li class="footer__item">
                                <a href="#servicios" class="footer__link" data-scroll><i class="fas fa-chevron-right"></i> Análisis Predictivo</a>
                            </li>
                            <li class="footer__item">
                                <a href="#servicios" class="footer__link" data-scroll><i class="fas fa-chevron-right"></i> Consultoría en IA</a>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="footer__column">
                        <h3 class="footer__heading">Contacto</h3>
                        <ul class="footer__contact">
                            <li class="footer__contact-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span><?php echo $contacto['direccion']; ?></span>
                            </li>
                            <li class="footer__contact-item">
                                <i class="fas fa-envelope"></i>
                                <a href="mailto:<?php echo $contacto['email']; ?>"><?php echo $contacto['email']; ?></a>
                            </li>
                            <li class="footer__contact-item">
                                <i class="fas fa-phone-alt"></i>
                                <a href="tel:<?php echo str_replace(' ', '', $contacto['telefono']); ?>"><?php echo $contacto['telefono']; ?></a>
                            </li>
                            <li class="footer__contact-item">
                                <i class="fas fa-clock"></i>
                                <span><?php echo $contacto['horario']; ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="footer__bottom">
                <p class="footer__copyright">
                    &copy; <?php echo $anio_actual; ?> <?php echo $empresa; ?>. Todos los derechos reservados.
                </p>
                <ul class="footer__policy">
                    <li><a href="#" class="footer__policy-link">Términos y Condiciones</a></li>
                    <li><a href="#" class="footer__policy-link">Política de Privacidad</a></li>
                    <li><a href="#" class="footer__policy-link">Política de Cookies</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- Botón Volver Arriba -->
    <button class="back-to-top" id="backToTop" aria-label="Volver arriba">
        <i class="fas fa-chevron-up"></i>
    </button>

    <!-- Scripts optimizados -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    
    <!-- Script principal -->
    <script src="assets/js/main.min.js"></script>
    
    <!-- Script de la animación de red neuronal -->
    <script src="assets/js/neural-network.js"></script>
</body>
</html>
