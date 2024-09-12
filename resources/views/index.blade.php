@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="hero">
    <div class="hero-content">
        <h1>Bienvenido a PixelMind</h1>
        <p>Building Digital Visions</p>
        <a href="{{ route('contacto') }}" class="btn-primary">Contáctanos</a>
    </div>
</div>

<div class="container">
    <section class="about">
        <h2>Sobre Nosotros</h2>
        <div class="about-content">
            <img src="{{ asset('img/about-us.jpg') }}" alt="Sobre Nosotros">
            <p>En PixelMind, combinamos experiencia y creatividad para desarrollar soluciones de software que impulsan el crecimiento de tu negocio. Nuestro equipo está compuesto por expertos en diversas áreas tecnológicas, dedicados a ofrecer productos innovadores y efectivos.</p>
        </div>
    </section>

    <section class="services">
        <h2>Servicios Destacados</h2>
        <div class="service-cards">
            <div class="service-card">
                <img src="{{ asset('img/service1.jpg') }}" alt="Desarrollo de Software">
                <h3>Desarrollo de Software a Medida</h3>
                <p>Soluciones personalizadas que se adaptan a las necesidades específicas de tu negocio, optimizando procesos y aumentando la eficiencia.</p>
            </div>
            <div class="service-card">
                <img src="{{ asset('img/service2.jpg') }}" alt="Consultoría Tecnológica">
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

    <section class="testimonials">
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

    <section class="cta">
        <h2>Listo para Empezar?</h2>
        <p>Si estás listo para llevar tu negocio al siguiente nivel con soluciones tecnológicas innovadoras, ¡contáctanos hoy mismo!</p>
        <a href="{{ route('contacto') }}" class="btn-primary">Solicita una Consulta</a>
    </section>
</div>
@endsection
