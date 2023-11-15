<x-guest-layout title="Nosotros">
    <section class="homeCover">
        <div class="container">
            <div class="flex flex-col md:flex-row space-y-7 md:space-y-0 items-center md:space-x-16">
                <div class="w-full md:w-1/2">
                    <h1 class="title mb-10">
                        Tú Socio Confiable en Desarrollo Web y Software en <span class="accent">Tijuana, Baja California</span>
                    </h1>

                    <p>
                        En el año 2009, nacimos en Tijuana, Baja California, con una visión clara: ofrecer soluciones de desarrollo web y aplicaciones personalizadas de la más alta calidad. Desde entonces, hemos recorrido un emocionante viaje de crecimiento y evolución.
                    </p>
                </div>
                <div class="w-full md:w-1/2">
                    <img src="{{ asset('img/ip-media-river-nosotros-portada.jpg') }}" alt="IP Media River - Nosotros | Photo by Burst from Pexels: https://www.pexels.com/photo/books-cup-of-coffee-desk-laptop-373892/" class="w-full h-auto">
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 aboutVideoContainer flex items-center justify-center">

        <video autoplay loop muted playsinline poster="" class="cover-video aboutVideoBg" alt="IP Media River - Video de Nosotros | Video by Matilda Wormwood from Pexels: https://www.pexels.com/video/person-using-her-laptop-4146195/">
            <source src="{{ asset('video/ip-media-river-programacion_3.mp4') }}" type="video/mp4">
            Tu navegador no soporta video HTML5.
        </video>

        <div class="container">
            <div class="w-full md:w-5/12 ml-auto">
                <h4 class="text-left text-white leading-relaxed">
                    A lo largo de más de una década, hemos trabajado incansablemente para perfeccionar nuestras habilidades y servicios. Hemos desarrollado una profunda comprensión de las necesidades de nuestros clientes y hemos adquirido experiencia en una amplia gama de proyectos.
                </h4>
            </div>
        </div>
    </section>

    <section class="py-10 md:py-24">
        <div class="container">
            <div class="flex flex-col md:flex-row space-y-7 md:space-y-0 items-start justify-between">
                <div class="w-full md:w-5/12">
                    <h3 class="mb-7">Nuestra Misión</h3>
                    <p>
                        En IP Media River, nos dedicamos a proporcionar soluciones de software y aplicaciones excepcionales que impulsan el éxito de nuestros clientes. Nuestra misión es superar expectativas a través de la innovación y la satisfacción del cliente, brindando soluciones tecnológicas personalizadas que transforman negocios en Tijuana y más allá.
                    </p>
                </div>
                <div class="w-full md:w-5/12">
                    <h3 class="mb-7">Nuestra Visión</h3>
                    <p>
                        Nuestra visión en IP Media River es ser líderes en desarrollo de software en Tijuana, estableciendo un estándar de excelencia. Impulsamos la innovación y el crecimiento tecnológico, siendo la elección preferida de empresas en busca de soluciones web y aplicaciones personalizadas, destacando por calidad, creatividad y compromiso con el éxito.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-0 pb-10 md:py-32 bg-gray-900 relative">

        <div class="sectionHalfImg" style="background-image: url('img/ip-media-river-nosotros-contacto_2.jpg')" alt="IP Media River - Contacto | Photo by Mikhail Nilov from Pexels: https://www.pexels.com/photo/women-working-in-a-call-center-7682091/">

        </div>

        <div class="container flex items-start justify-between">
            <div class="w-full md:w-5/12">
                <h4 class="text-white leading-relaxed mb-7">
                    En IP Media River, estamos comprometidos en proporcionar soluciones de desarrollo de software y aplicaciones web de la más alta calidad. La excelencia es nuestro estándar, y nos esforzamos por entregar resultados excepcionales en cada proyecto.
                </h4>

                <p class="text-white text-lg">
                    Estamos aquí para ayudarte. Contáctanos para discutir tus necesidades de desarrollo web y software y descubre cómo podemos impulsar tu éxito.
                </p>

                <a href="mailto:info@ipmediariver.com?subject=Contacto%20desde%20la%20página%20web&body=Hola%20IP%20Media%20River,%20me%20gustaría%20saber%20más%20sobre%20sus%20servicios"
                    class="btn btn-primary mt-10">
                    ¡Contáctanos hoy mismo!
                </a>
            </div>
        </div>
    </section>
</x-guest-layout>