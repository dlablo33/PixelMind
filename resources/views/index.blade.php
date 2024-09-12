@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<!-- Carrusel de imágenes -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('img/logometa.jpg') }}" class="d-block w-100" alt="Primera Imagen">
            <div class="carousel-caption d-none d-md-block">
                <h1>Bienvenido a PixelMind</h1>
                <p>Building Digital Visions</p>
                <a href="{{ route('contacto') }}" class="btn btn-primary">Contáctanos</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/hero-bg.jpg') }}" class="d-block w-100" alt="Segunda Imagen">
            <div class="carousel-caption d-none d-md-block">
                <h1>Soluciones Innovadoras</h1>
                <p>Transformamos tus ideas en software</p>
                <a href="{{ route('contacto') }}" class="btn btn-primary">Conoce más</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/slide3.jpg') }}" class="d-block w-100" alt="Tercera Imagen">
            <div class="carousel-caption d-none d-md-block">
                <h1>Desarrollo a Medida</h1>
                <p>Software que se adapta a ti</p>
                <a href="{{ route('servicios') }}" class="btn btn-primary">Nuestros Servicios</a>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
    </button>
</div>

<!-- Sección sobre nosotros -->
<div class="container mt-5">
    <section class="about">
        <h2>Sobre Nosotros</h2>
        <div class="about-content">
            <img src="{{ asset('img/about-us.jpg') }}" alt="Sobre Nosotros">
            <p>En PixelMind, combinamos experiencia y creatividad para desarrollar soluciones de software que impulsan el crecimiento de tu negocio. Nuestro equipo está compuesto por expertos en diversas áreas tecnológicas, dedicados a ofrecer productos innovadores y efectivos.</p>
        </div>
    </section>

    <!-- Sección de servicios destacados -->
    <section class="services mt-5">
        <h2>Servicios Destacados</h2>
        <div class="service-cards">
            <div class="service-card">
                <img src="{{ asset('img/service1.jpg') }}" alt="Desarrollo de Software">
                <h3>Desarrollo de Software a Medida</h3>
                <p>Soluciones personalizadas que se adaptan a las necesidades específicas de tu negocio, optimizando procesos y aumentando la eficiencia.</p>
            </div>
            <div class="service-card">
                <img src="{{ asset('img/service2.png') }}" alt="Consultoría Tecnológica">
                <h3>Consultoría Tecnológica</h3>
                <p>Asesoramiento experto para identificar y implementar las mejores prácticas tecnológicas que maximicen el rendimiento de tu empresa.</p>
            </div>
            <div class="service-card">
                <img src="{{ asset('img/service3.jpg') }}" alt="Soporte y Mantenimiento">
                <h3>Soporte y Mantenimiento</h3>
                <p>Soporte continuo para asegurar que tus sistemas funcionen sin problemas y actualizaciones regulares para mantener la seguridad y funcionalidad.</p>
            </div>
        </div>
    </section>

    <!-- Sección de testimonios -->
    <section class="testimonials mt-5">
        <h2>Testimonios</h2>
        <div class="testimonial-cards">
            <div class="testimonial-card">
                <p>"PixelMind transformó nuestra visión en una solución digital increíble. Su atención al detalle y creatividad fueron excepcionales."</p>
                <span>- Ana Martínez, CEO de TechVentures</span>
            </div>
            <div class="testimonial-card">
                <p>"El equipo de PixelMind entiende nuestras necesidades y ofrece soluciones efectivas. Recomendamos encarecidamente sus servicios."</p>
                <span>- Carlos Ruiz, Director de Innovación en DevSolutions</span>
            </div>
        </div>
    </section>

    <!-- Sección de llamado a la acción (CTA) -->
    <section class="cta mt-5">
        <h2>Listo para Empezar?</h2>
        <p>Si estás listo para llevar tu negocio al siguiente nivel con soluciones tecnológicas innovadoras, ¡contáctanos hoy mismo!</p>
        <a href="{{ route('contacto') }}" class="btn btn-primary">Solicita una Consulta</a>
    </section>
</div>

<!-- Scripts necesarios para el carrusel -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
