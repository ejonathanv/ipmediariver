<x-guest-layout title="Blog">
    <section>
        <div class="container">
            <div class="flex items-stretch flex-wrap -mx-4">
                @foreach($posts as $post)
                <div class="w-4/12 p-4">
                    <x-post-card :post="$post" />
                </div>
                @endforeach
            </div>
        </div>
    </section>
</x-guest-layout>