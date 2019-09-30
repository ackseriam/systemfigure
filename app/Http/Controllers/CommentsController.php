<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use App\Models\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CommentRequest;
use Validator;

class CommentsController extends Controller
{
      public function __construct()
    {

   
      $this->middleware('auth', ['except'=> ['store']]); //para dar excepciones de metodos que no necesittan de incio de sesion
      $this->middleware('users_ac');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
}
    public function store(CommentRequest $request)
    {
       
        if(!empty($request->name_desconocido))
        {
           $options =[
   
            'content' => $request->comentario,
            'post_id' => $request->post_id,  
            'name_desconocido' => $request->name_desconocido,   
        ];  
        }else{

            $user= User::join('people', 'people.id', '=', 'users.people_id')
          ->select('people.name as name', 'people.surname as surname')->where('users.id', auth()->user()->id)->get();
         
             $options =[
   
            'content' => $request->comentario,
            'post_id' => $request->post_id,
            'user_id' => auth()->user()->id,   
            'name_desconocido'=> $user[0]->name.' '.$user[0]->surname,
        ]; 
 
        }
        $post= Post::find($request->post_id);
       

        
       if(Comment::create($options)){
          if(Auth::check()){

           $rol = roleuser($request);
            return view('post.show',['exito'=>'exito', 'post'=>$post,'rol'=>$rol]);
        
           
        }else{
            return view('post.show',['exito'=>'error_in', 'post'=>$post]);
        }
    }
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
          $rol = roleuser($request); //se llama al helper en Helpers/role
          if(($rol=='admin')||($rol=='foun'))

        {
           $comment = Comment::find($id);
           $post=$comment->post;
           $comment->delete();
         //  var_dump($post);
            return view('post.show',compact('post'),['rol'=>$rol,'exito'=>'exito']);
         }else{
            return redirect('home');
         }
    }
}
