<header class="headerMaster" ref="header">
    <div class="container flex items-center justify-between">
        <x-header-nav-btn />
        <x-header-logo />
        <x-header-social-links />
        <x-header-mobile-nav-btn />


        <div class="navMenu" ref="navMenu">

            <a href="#" class="navMenuCloseBtn">
                <i class="fa fa-times" @click.prevent="toggleNavMenu"></i>
            </a>

            <nav>
                <a href="{{ route('website.index') }}">
                    Inicio
                </a>
                <a href="{{ route('website.about') }}">
                    Nosotros
                </a>
                <a href="{{ route('website.entrepreneurs') }}">
                    Páginas Web para Emprendedores
                </a>
                <a href="{{ route('website.companies') }}">
                    Desarrollo Web Empresarial
                </a>
                <a href="{{ route('website.blog') }}">
                    Blog
                </a>
                <a href="{{ route('website.contact') }}">
                    Contacto
                </a>
                <div class="flex md:hidden items-center space-x-7 mt-4">
                    <a href="https://www.instagram.com/ipmediariver/" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.youtube.com/@ipmediariver" target="_blank">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="https://www.tiktok.com/@ipmediariver" target="_blank">
                        <i class="fab fa-tiktok"></i>
                    </a>
                </div>
            </nav>


            <div class="flex md:hidden flex-row items-center mt-8 space-x-4 font-bold">
                <a href="{{ route('website.terms') }}" class="text-xs text-white underline">
                    Términos y Condiciones
                </a>
                <a href="{{ route('website.privacy') }}" class="text-xs text-white underline">
                    Política de Privacidad
                </a>
            </div>

            <p class="navMenuCopy">
                &copy; {{ date('Y') }} IP Media River. Todos los derechos reservados.
            </p>
        </div>
    </div>
</header>