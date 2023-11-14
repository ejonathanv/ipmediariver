<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Artículos del blog') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="card">

                <div class="flex items-center justify-between mb-7">
                    <h2>
                        Artículos
                    </h2>

                    <a href="{{ route('posts.create') }}" class="btn btn-primary">
                        Agregar nuevo
                    </a>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                Título
                            </th>
                            <th>
                                Fecha
                            </th>
                            <th class="text-center">
                                Acciones
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td class="flex items-center space-x-3">
                                <img class="w-16 h-16 object-cover rounded" src="{{ $post->cover }}" alt="Portada del artículo">
                                <span>
                                {{ $post->title }}
                                </span>
                            </td>
                            <td>
                                {{ $post->published_at->format('d/m/Y') }}
                            </td>
                            <td class="text-center">
                                <a href="{{ route('posts.edit', $post) }}" class="text-ipmr-red">
                                    Editar
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>