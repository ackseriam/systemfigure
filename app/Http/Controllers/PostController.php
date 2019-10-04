<?php

namespace App\Http\Controllers;

use App\Models\Post;
use User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\PostFormRequest;
use Illuminate\Support\Facades\Auth;
use Validator;

class PostController extends Controller
{

        public function __construct()
    {

   
      $this->middleware('auth', ['except'=> ['index','show']]); //para dar excepciones de metodos que no necesittan de incio de sesion
      $this->middleware('users_ac');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request)
     {
        
        $posts= Post::orderBy("id", "DESC")->paginate(4);
        
       // $comments= $post->comments;
       // var_dump($comments);
        if(Auth::check()){
             $rol = roleuser($request);
             return view("post.index", compact("posts"), compact("rol"));
            }else{
                 return view("post.index", compact("posts")); 
            }
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $rol = roleuser($request); //se llama al helper en Helpers/role
           if(($rol=='admin')||($rol=='foun'))
        {
            return view("post.create",['summernote'=>'summernote']);
        }
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostFormRequest $request)
    {

         $rol = roleuser($request); //se llama al helper en Helpers/role
          if(($rol=='admin')||($rol=='foun'))

        {
                     $detail=$request->content;
    libxml_use_internal_errors(true);

         $dom = new \domdocument();
        $dom->loadHTML(
            mb_convert_encoding($detail, 'HTML-ENTITIES', 'UTF-8'),
            LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD
        );

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $count => $image) {
            $src = $image->getAttribute('src');

            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                    list($type, $src) = explode(';', $src);
                      list(, $src)      = explode(',', $scr);
                $mimeType = $groups['mime'];

                $path = '/images/images_post/' . uniqid('', true) . '.' . $mimeType;

                $image->removeAttribute('src');
                $image->setAttribute('src', asset($path));
            }
        }
         $detail = $dom->saveHTML();
        
      
      
        $options =[
            'title' => $request->title,
            'content' => $detail,
            'description' => $request->description,
            'user_id' => auth()->user()->id,
          
            
        ];

        
         if(Post::create($options)){
            return view('post.create',['summernote'=>'summernote','exito'=>'error_in','rol'=>$rol]);
        }else{
            return view('post.create',['summernote'=>'summernote','error_in'=>'error_in','rol'=>$rol]);
        }
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,Post $post)
    {
         if(Auth::check()){
           $rol = roleuser($request);
     
        return view('post.show',['summernote'=>'summernote','post'=>$post,'rol'=>$rol]);
         }else{
            return view('post.show',['summernote'=>'summernote','post'=>$post,'rol'=>$rol]);
         }
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        
         $rol = roleuser($request); //se llama al helper en Helpers/role
          if(($rol=='admin')||($rol=='foun'))

        {
       $detail=$request->content;
    // and don' throw exceptions
libxml_use_internal_errors(true);

         $dom = new \domdocument();
        $dom->loadHTML(
            mb_convert_encoding($detail, 'HTML-ENTITIES', 'UTF-8'),
            LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD
        );

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $count => $image) {
            $src = $image->getAttribute('src');

            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                    list($type, $src) = explode(';', $src);
                      list(, $src)      = explode(',', $scr);
                $mimeType = $groups['mime'];

                $path = '/images/images_post/' . uniqid('', true) . '.' . $mimeType;

                $image->removeAttribute('src');
                $image->setAttribute('src', asset($path));
            }
        }

        $detail = $dom->saveHTML();
       
         $post=Post::find($id);
         $post->content=$detail;

          if($post->save()){
                 return view('post.show',['summernote'=>'summernote','post'=>$post,'rol'=>$rol,'exito'=>'exito']);
            }else{
                  return view('post.show',['summernote'=>'summernote','post'=>$post,'error_in'=>'error_in','rol'=>$rol]);
            }
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Post $post,$id)
    {
          $rol = roleuser($request); //se llama al helper en Helpers/role
          if(($rol=='admin')||($rol=='foun'))

        {
           $post = Post::find($id);
         
           $post->delete();
         $posts= Post::orderBy("id", "DESC")->paginate(5);
            return view('post.index',compact('posts'),['rol'=>$rol,'exito'=>'exito']);
         }else{
            return redirect('home');
         }
    }
}
