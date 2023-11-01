<x-guest-layout>
    <section class="homeCover">
        <div class="container">
            <div class="w-7/12 mx-auto text-center">
                <h1 class="title mb-16">
                    <span class="accent">Aplicaciones Web</span> y <span class="accent">Páginas Web</span> que Reflejan tu Esencia, con Calidad Inigualable y un Toque Exclusivo.
                </h1>

                <a href="#" class="btn btn-primary">
                    Hablemos de tu proyecto
                </a>
            </div>
        </div>
    </section>

    <section class="relative">
        <img src="{{ asset('img/bg-diagonal-gradient.svg') }}" alt="IP Media River - Fondo Diagonal" class="bgDiagonal">
        <div class="container">
            <img src="{{ asset('img/ip-media-river-portada.jpg') }}" alt="IP Media River - Portada" class="w-full h-auto">
        </div>
    </section>

    <section class="py-32">
        <div class="container">
            <div class="flex w-10/12 mx-auto space-x-16">
                <div class="w-4/12">
                    <h3 class="borderBottom">
                        Tus Socios en Desarrollo de Software Personalizado.
                    </h3>
                </div>
                <div class="w-8/12">
                    <p class="leading-relaxed">
                        Estamos aquí para transformar tus ideas en soluciones de software excepcionales que reflejen tu esencia y visión. Nuestro enfoque en el desarrollo a medida y la calidad inigualable nos distingue, y estamos emocionados por la posibilidad de colaborar contigo en tu próximo proyecto.
                    </p>
                    <p class="accent mt-5">
                        ¡Descubre cómo juntos podemos hacer realidad tus sueños digitales!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-60">
        <div class="container">
            <div class="flex items-center space-x-20">
                <div class="w-1/2">
                    <div class="serviceSquare" style="background-image: url('{{ asset('img/ip-media-river-paginas-web-para-emprendedores.jpg') }}')">
                        <h3 class="right-0">Páginas Web para Emprendedores</h3>
                    </div>
                </div>

                <div class="w-1/2">
                    <div class="serviceSquare top-48" style="background-image: url('{{ asset('img/ip-media-river-software-empresarial-a-la-medida.jpg') }}')">
                        <h3 class="left-0">Software Empresarial a la Medida</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="container">
            <div class="w-9/12 mx-auto text-center">
                <h2 class="leading-relaxed mb-10">
                    En <span class="accent">IP Media River</span>, nos especializamos en ofrecer una amplia gama de servicios de desarrollo de software y soluciones web altamente profesionales y personalizadas.
                </h2>

                <p>
                    Creemos en la importancia de la excelencia y la innovación, y nos esforzamos por convertir ideas en realidad digital de la manera más efectiva y eficiente posible. Nuestros servicios incluyen:
                </p>
            </div>
        </div>
    </section>

    <section class="pb-20 relative">
        <img src="{{ asset('img/bg-diagonal-gradient.svg') }}" alt="IP Media River - Fondo Diagonal" class="bgDiagonal" style="top: -800px;">

        <div class="container flex items-center space-x-1">
            <a href="#" class="block w-1/5">
                <div class="serviceBox">
                    <img src="{{ asset('img/ip-media-river-aplicaciones-web-personalizadas.svg') }}" alt="IP Media River - Aplicaciones Web Personalizadas">
                    <h5>
                        Aplicaciones Web Personalizadas
                    </h5>
                </div>
            </a>
            <a href="#" class="block w-1/5">
                <div class="serviceBox">
                    <img src="{{ asset('img/ip-media-river-desarrollo-de-software.svg') }}" alt="IP Media River - Desarrollo de Software">
                    <h5>
                        Desarrollo de Software
                    </h5>
                </div>
            </a>
            <a href="#" class="block w-1/5">
                <div class="serviceBox">
                    <img src="{{ asset('img/ip-media-river-diseno-de-paginas-web.svg') }}" alt="IP Media River - Diseño de Páginas Web">
                    <h5>
                        Diseño de Páginas Web Profesionales
                    </h5>
                </div>
            </a>
            <a href="#" class="block w-1/5">
                <div class="serviceBox">
                    <img src="{{ asset('img/ip-media-river-servicios-de-consultoria.svg') }}" alt="IP Media River - Servicios de Consultoría">
                    <h5>
                        Servicios de Consultoría
                    </h5>
                </div>
            </a>
            <a href="#" class="block w-1/5">
                <div class="serviceBox">
                    <img src="{{ asset('img/ip-media-river-mantenimiento-y-soporte.svg') }}" alt="IP Media River - Mantenimiento y Soporte">
                    <h5>
                        Mantenimiento y Soporte
                    </h5>
                </div>
            </a>
        </div>
    </section>

    <section class="pt-10">
        <div class="container">
            <div class="w-7/12 mx-auto">
                <h2 class="text-center mb-7">Suscríbete</h2>
                <p class="text-center">Regístrate con tu correo electrónico para recibir información de IP Media River</p>
                <form action="" class="flex items-center space-x-2 mt-10">
                    <input type="text" placeholder="Correo electrónico" class="form-control">
                    <button class="btn btn-primary-outline">
                        Suscribirme
                    </button>
                </form>
            </div>
        </div>
    </section>
</x-guest-layout>