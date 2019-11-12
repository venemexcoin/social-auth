<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use App\Http\Requests\PostUpdateRequest;
use App\Http\Requests\PostStoreRequest;
use App\Post;
use App\Category;
use App\Tag;


class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:posts.create')->only(['create', 'store']);

        $this->middleware('permission:posts.index')->only('index');

        $this->middleware('permission:posts.edit')->only(['edit', 'update']);

        $this->middleware('permission:posts.show')->only('show');

        $this->middleware('permission:posts.destroy')->only('destroy');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')
        ->where('user_id', auth()->user()->id) // pasar solo los aticulo del cliente
        ->paginate();

        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        $tags = Tag::orderBy('name', 'ASC')->get();

        return view('admin.posts.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // cuando suba a la pagina colocar public en local en el Disco
    public function store(PostStoreRequest $request)
    {
        $post = Post::create($request->all());
        if($request->file('file')){
            $path = Storage::disk('public')->put('image',$request->file('file'));
            $post->fill(['file' => asset($path)])->save();
        }
            //Tags
        $post->tags()->attach($request->get('tags'));
        return redirect()->route('posts.edit', compact('post'))
        ->with('info', 'Entrada creada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $this->authorize('pass', $post);

        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        $tags = Tag::orderBy('name', 'ASC')->get();



        return view('admin.posts.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostUpdateRequest $request, $id)
    {
        $post = Post::find($id);
        $this->authorize('pass', $post);
        $post->fill($request->all())->save();
        // IMAGE cuando suba a la pagina colocar public en local
        if($request->file('file')){
            $path = Storage::disk('public')->put('image',$request->file('file'));
            $post->fill(['file' => asset($path)])->save();
        }
            //Tags
        $post->tags()->sync($request->get('tags'));
        return redirect()->route('posts.edit', $post->id)
            ->with('info', 'Entrada actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $this->authorize('pass', $post);
        $post->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
