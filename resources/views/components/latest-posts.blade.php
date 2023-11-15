<section class="bg-zinc-800 py-16">
    <div class="container">
        <div class="flex items-center justify-between mb-7">
            <h2 class="text-white">Publicaciones recientes</h2>
            <a href="{{ route('website.blog') }}" class="text-white text-sm font-bold underline text-right md:text-left">
                Ver todas las publicaciones
            </a>
        </div>
        @if($posts->count() > 0)
        <div class="flex flex-col md:flex-row items-stretch md:flex-wrap md:-mx-4 space-y-7 md:space-y-0">
            @foreach($posts as $post)
            <div class="w-full md:w-4/12 md:p-4">
                <x-post-card :post="$post" />
            </div>
            @endforeach
        </div>
        @else
        <p class="text-center text-white">No hay artículos aún.</p>
        @endif
    </div>
</section>