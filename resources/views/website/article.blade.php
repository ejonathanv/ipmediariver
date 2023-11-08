<x-guest-layout title="{{ $post->title }}">
    <section class="pb-24">
        <div class="container">
            <div class="w-9/12 mx-auto">
                <img src="{{ $post->cover_image }}" alt="IP Media River - Nosotros" class="w-full h-auto mb-10">
                <h1 class="mb-4">
                    {{ $post->title }}
                </h1>

                <p class="mb-10 text-gray-400">
                    Por: <span class="accent">{{ $post->author }}</span> | {{ $post->published_at->format('d M, Y') }}
                </p>

                <p class="text-lg leading-relaxed mb-7 font-bold">
                    {{ $post->resume }}
                </p>

                {{ $post->body }}
            </div>
        </div>
    </section>

    <x-other-posts :currentPost="$post" />
</x-guest-layout>