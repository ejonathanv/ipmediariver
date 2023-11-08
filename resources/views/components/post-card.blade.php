<div class="blogCard">
    <a href="{{ route('website.article', $post) }}" class="relative">
        <img src="{{ $post->cover_image }}" alt="IP Media River - Blog y Recursos" class="w-full h-auto">
        <span class="absolute top-2 left-0 bg-ipmr-red text-white px-3 py-1 text-sm font-bold">
            {{ $post->published_at->format('d M, Y') }}
        </span>
    </a>
    <div class="p-5">
        <h4 class="mb-5">
            {{ $post->title }}
        </h4>
        <p class="text-sm">
            {{ \Str::limit($post->resume, 150) }}
        </p>
    </div>
    <div class="p-5 !pt-0 mt-auto">
        <a href="{{ route('website.article', $post) }}" class="btn btn-primary-outline block">
            Leer más
        </a>
    </div>
</div>