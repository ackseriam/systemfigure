<?php 

namespace App\Http\Controllers;


use App\Guias;
use App\Correction_user;
use App\Correction;
use App\Exports\GuiasExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Maatwebsite\Excel\Facades\Excel;

use Carbon\Carbon;
use Input;
//use App\Http\Controllers\Excele;

class ExceleController extends Controller 
{
    public function index($id) 
    {
    	    

    	     $guia= Guias::find($id);

        
       $correcciones= Correction::where('id_guias',$id)->get();

    
      $tiempo_envio=$guia->tiempo_envio;  
    	$name_guia=$guia->name;
      $number_gui=$guia->number_campos;
      $number_guia=$number_gui-1;
      $number_img_guia=$guia->number_campos_img;
      $number_campos_img=$number_img_guia-1;
      $campos_img=explode(",",$guia->names_campo_img);

      $names_campo=explode(',', $guia->names_campo);
     
      $corrections=Correction_user::orderBy("id", "DESC")->join('corrections', 'corrections.id', '=', 'correction_users.id_corrections')->join('users','users.id','=','corrections.id_users')->join('people','people.id','=','users.people_id')->where('corrections.id_guias',$id)->select('respues0','respues1','respues2','respues3','respues4','respues5','respues6','respues7','respues8','respues9','respues10','respues11','respues12','respues13','respues14','respues15','respues16','respues17','respues18','respues19','respues20','surname','tipos_campos','username','id_corrections','correction_users.id as id')->get();

    
 		 $export = new GuiasExport([
         $names_campo,
        $corrections
    ]);

   return Excel::download($export, $name_guia.'.xlsx');
    //    return Excel::download(new GuiasExport, 'guias.xlsx');
    }
}








