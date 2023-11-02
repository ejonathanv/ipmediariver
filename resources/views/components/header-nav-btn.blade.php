<div class="flex-1">
    <button type="button" @click.prevent="toggleNavMenu">
        <img src="{{ asset('img/nav-bars.svg') }}" alt="IP Media River - Boton de navegacion">
    </button>

    <div class="navMenu" ref="navMenu">

        <a href="#" class="navMenuCloseBtn">
            <i class="fa fa-times" @click.prevent="toggleNavMenu"></i>
        </a>

        <nav>
            <a href="#">
                Inicio
            </a>
            <a href="#">
                Nosotros
            </a>
            <a href="#">
                Páginas Web para Emprendedores
            </a>
            <a href="#">
                Desarrollo Web para Empresas
            </a>
            <a href="#">
                Blog y Recursos
            </a>
            <a href="#">
                Contacto
            </a>
        </nav>

        <p class="navMenuCopy">
            &copy; {{ date('Y') }} IP Media River. Todos los derechos reservados.
        </p>
    </div>
</div>