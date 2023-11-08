<div class="flex-1">
    <div class="flex items-center space-x-6">
        <button type="button" @click.prevent="toggleNavMenu">
            <img src="{{ asset('img/nav-bars.svg') }}" alt="IP Media River - Boton de navegacion">
        </button>
    </div>

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
        </nav>

        <p class="navMenuCopy">
            &copy; {{ date('Y') }} IP Media River. Todos los derechos reservados.
        </p>
    </div>
</div>