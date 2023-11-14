<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nuevo artículo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <form action="{{ route('posts.store') }}" class="flex items-start space-x-6" method="POST" enctype="multipart/form-data">
                <div class="w-8/12">
                    <div class="card">
                        @csrf

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
                            <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                            @error('title')
                            <span class="text-xs text-ipmr-red">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">
                                Resumen:
                            </label>
                            <textarea name="resume" class="form-control" rows="5">{{ old('resume') }}</textarea>
                            @error('resume')
                            <span class="text-xs text-ipmr-red">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">
                                Contenido:
                            </label>
                            <div id="editor">
                                {!! old('body') !!}
                            </div>
                            <input type="hidden" name="body" id="postBody" value="{{ old('body') }}">
                            @error('body')
                            <span class="text-xs text-ipmr-red">{{ $message }}</span>
                            @enderror
                        </div>
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
                                <option value="Desarrollo web">
                                    Desarrollo web
                                </option>
                                <option value="Marketing digital">
                                    Marketing digital
                                </option>
                                <option value="Diseño gráfico">
                                    Diseño gráfico
                                </option>
                                <option value="Diseño web">
                                    Diseño web
                                </option>
                                <option value="Diseño de marca">
                                    Diseño de marca
                                </option>
                                <option value="Consejos">
                                    Consejos
                                </option>
                                <option value="Noticias">
                                    Noticias
                                </option>
                                <option value="Emprendimiento">
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
                            <input type="text" name="author" class="form-control" value="{{ old('author') }}">
                            @error('author')
                            <span class="text-xs text-ipmr-red">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">
                                Fecha de publicación:
                            </label>
                            <input type="date" name="published_at" class="form-control" value="{{ old('published_at') }}">
                            @error('published_at')
                            <span class="text-xs text-ipmr-red">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="status" class="mr-2" id="draft">
                                Guardar como borrador
                            </label>
                        </div>

                        <button class="btn btn-primary">
                            Guardar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>