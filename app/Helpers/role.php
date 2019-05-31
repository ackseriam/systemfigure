<?php 
    
use Illuminate\Http\Request;
use App\User; 

    function roleuser(Request $request)
    { 
      $rol= $request->user()->hasRoleUSer($request->user()->id);
        $ultimo = last($rol);
         $rol = last($ultimo);

        return $rol->name;
       
    
}

?>