<section class="bg-zinc-800 py-16">
    <div class="container">
        <div class="flex items-center justify-between mb-7">
            <h2 class="text-white">Otras publicaciones</h2>
            <a href="{{ route('website.blog') }}" class="text-white text-sm font-bold underline">
                Ver todas las publicaciones
            </a>
        </div>

        <div class="flex items-stretch flex-wrap -mx-4">
            @foreach($posts as $post)
            <div class="w-4/12 p-4">
                <x-post-card :post="$post" />
            </div>
            @endforeach
        </div>
    </div>
</section>