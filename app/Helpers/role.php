<?php 
    
use Illuminate\Http\Request;
use App\User; 

    function roleuser(Request $request)
    { 

                  
         if($request->user()->hasAnyRole('editor'))
            $rol="editor";
         elseif($request->user()->hasAnyRole('admin'))
            $rol="admin";
         
         elseif($request->user()->hasAnyRole('foun'))
            $rol="foun";
         
         elseif($request->user()->hasAnyRole('task0'))
            $rol="task0";
         
         elseif($request->user()->hasAnyRole('task'))
            $rol="task";
         
         elseif($request->user()->hasAnyRole('buyer'))
            $rol="buyer";
         elseif($request->user()->hasAnyRole('vpnlevel'))
            $rol="vpnlevel";

        elseif($request->user()->hasAnyRole('vpn0'))
            $rol="vpn0";

        return $rol;
       
    
}

?>