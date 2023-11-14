<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->paginate(9);
        return view('dashboard.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        // La informacion ya esta validada, ahora se guarda en la base de datos
        // Vamos a crear un nuevo post y agregar los datos recibidos del formulario
        $post = new Post();
        $this->updatePostFromRequest($post, $request);

        // A continuacion vamos a guardar la imagen de portada del post
        $this->updateCoverImageFromRequest($post, $request);

        // Ahora vamos a redireccionar al usuario a la pagina de edicion del post
        return redirect()->route('posts.edit', $post);
    }

    public function updatePostFromRequest($post, $request){
        $post->title = $request->title;
        $post->resume = $request->resume;
        $post->body = $request->body;
        $post->category = $request->category;
        $post->author = $request->author;
        $post->published_at = $request->published_at;
        $post->status = $request->has('status') ? 'draft' : 'published';
        $post->slug = Str::slug($request->title);

        // Guardamos el post
        $post->save();
    }

    public function updateCoverImageFromRequest($post, $request){
        if($request->hasFile('cover_image')){
            // Si se envio una imagen, vamos a guardarla
            $coverImage = $request->file('cover_image');
            // Vamos a crear un nombre unico para la imagen
            $imageName = time() . '_' . $post->id . '.' . $coverImage->extension();
            // Ahora vamos a mover la imagen a la carpeta publica
            $coverImage->move(public_path('images/posts'), $imageName);
            // Ahora vamos a actualizar el post con el nombre de la imagen
            $post->cover_image = $imageName;
            // Guardamos el post
            $post->save();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        // Vamos a mostrar la vista de un post
        return view('dashboard.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        // Vamos a mostrar la vista de edicion de un post
        return view('dashboard.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        // La informacion ya esta validada, ahora se actualiza en la base de datos
        $this->updatePostFromRequest($post, $request);

        // A continuacion vamos a actualizar la imagen de portada del post
        $this->updateCoverImageFromRequest($post, $request);

        // Ahora vamos a redireccionar al usuario a la pagina de edicion del post
        return redirect()->route('posts.edit', $post)->with('success', 'Post actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        // Vamos a eliminar el post
        $post->delete();

        // Ahora vamos a redireccionar al usuario a la pagina de listado de posts
        return redirect()->route('posts.index');
    }
}
