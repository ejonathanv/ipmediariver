<x-guest-layout title="Blog">
    <section>
        <div class="container">
            @if($posts->count() > 0)
            <div class="flex flex-col md:flex-row items-stretch md:flex-wrap -mx-4">
                @foreach($posts as $post)
                <div class="w-full md:w-4/12 p-4">
                    <x-post-card :post="$post" />
                </div>
                @endforeach
            </div>
            @else
            <p class="text-center text-gray-500">No hay artículos aún.</p>
            @endif
        </div>
    </section>
</x-guest-layout>