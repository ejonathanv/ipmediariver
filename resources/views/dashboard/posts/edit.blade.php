<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar artículo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <form action="{{ route('posts.update', $post) }}" class="flex items-start space-x-6" method="POST" enctype="multipart/form-data">
                <div class="w-8/12">
                    <div class="card">

                        @csrf
                        @method('PUT')

                        <div class="mb-5">
                            <img src="{{ $post->cover }}" alt="Portada del artículo" class="w-full rounded shadow">
                        </div>

                        <div class="form-group">
                            <label for="">
                                Portada:
                            </label>
                            <input type="file" name="cover_image" class="form-control">
                            @error('cover_image')
                            <span class="text-xs text-ipmr-red">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">
                                Título:
                            </label>
                            <input type="text" name="title" class="form-control" value="{{ $post->title }}">
                            @error('title')
                            <span class="text-xs text-ipmr-red">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">
                                Resumen:
                            </label>
                            <textarea name="resume" class="form-control" rows="5">{{ $post->resume }}</textarea>
                            @error('resume')
                            <span class="text-xs text-ipmr-red">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">
                                Contenido:
                            </label>
                            <div id="editor">
                                {!! $post->body !!}
                            </div>
                            <input type="hidden" name="body" id="postBody" value="{{ $post ? $post->body : old('body') }}">
                            @error('body')
                            <span class="text-xs text-ipmr-red">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="card mt-6">
                        <p class="text-ipmr-red mb-3">Eliminar este artículo</p>
                        <p class="text-sm">
                            Una vez que elimines este artículo no podrás recuperarlo.
                        </p>
                        <button class="btn btn-primary-outline mt-3" form="deletePostForm">
                            Eliminar
                        </button>
                    </div>
                </div>
                <div class="w-4/12">
                    <div class="card">
                        <div class="form-group">
                            <label for="">
                                Categoría:
                            </label>
                            <select name="category" class="form-control">
                                <option disabled selected value="">Seleccione una categoría</option>
                                <option value="Desarrollo web" @if($post->category == 'Desarrollo web') selected @endif>
                                    Desarrollo web
                                </option>
                                <option value="Marketing digital" @if($post->category == 'Marketing digital') selected @endif>
                                    Marketing digital
                                </option>
                                <option value="Diseño gráfico" @if($post->category == 'Diseño gráfico') selected @endif>
                                    Diseño gráfico
                                </option>
                                <option value="Diseño web" @if($post->category == 'Diseño web') selected @endif>
                                    Diseño web
                                </option>
                                <option value="Diseño de marca" @if($post->category == 'Diseño de marca') selected @endif>
                                    Diseño de marca
                                </option>
                                <option value="Consejos" @if($post->category == 'Consejos') selected @endif>
                                    Consejos
                                </option>
                                <option value="Noticias" @if($post->category == 'Noticias') selected @endif>
                                    Noticias
                                </option>
                                <option value="Emprendimiento" @if($post->category == 'Emprendimiento') selected @endif>
                                    Emprendimiento
                                </option>
                            </select>
                            @error('category')
                            <span class="text-xs text-ipmr-red">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">
                                Autor:
                            </label>
                            <input type="text" name="author" class="form-control" value="{{ $post->author }}">
                            @error('author')
                            <span class="text-xs text-ipmr-red">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">
                                Fecha de publicación:
                            </label>
                            <input type="date" name="published_at" class="form-control" value="{{ $post->published_at->format('Y-m-d') }}">
                            @error('published_at')
                            <span class="text-xs text-ipmr-red">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>
                                <input type="checkbox" @if($post->status == 'draft') checked @endif name="status" value="draft" class="mr-2" id="draft">
                                Guardar como borrador
                            </label>
                        </div>


                        @if(session('success'))
                        <div class="font-bold py-3">
                            <i class="fa fa-check text-green-500 mr-2"></i>
                            {{ session('success') }}
                        </div>
                        @endif

                        <button class="btn btn-primary">
                            Guardar
                        </button>
                    </div>
                </div>
            </form>

            <form action="{{ route('posts.destroy', $post) }}" method="POST" id="deletePostForm" onsubmit="return confirm('¿Estás seguro de eliminar este artículo?')">
                @csrf
                @method('DELETE')
            </form>
        </div>
    </div>
</x-app-layout>