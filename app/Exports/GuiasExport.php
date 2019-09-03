<?php 
namespace App\Exports;


use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromArray;

class GuiasExport implements FromArray
{
    protected $guias;

    public function __construct(array $guias)
    {
        $this->guias = $guias;
    }

    public function array(): array
    {
        return $this->guias;
    }
}


/*
namespace App\Exports;

use App\Guias;
use App\Correction_user;
use App\Correction;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class GuiasExport implements FromView
{
    public function view(): View
    {
    	$id="17";

    	     $guia= Guias::find($id);

        
       $correcciones= Correction::where('id_guias',$id)->get();

    
      $tiempo_envio=$guia->tiempo_envio;  
    
      $number_gui=$guia->number_campos;
      $number_guia=$number_gui-1;
      $number_img_guia=$guia->number_campos_img;
      $number_campos_img=$number_img_guia-1;
      $campos_img=explode(",",$guia->names_campo_img);

      $names_campo=explode(',', $guia->names_campo);

      $corrections=Correction_user::orderBy("id", "DESC")->join('corrections', 'corrections.id', '=', 'correction_users.id_corrections')->join('users','users.id','=','corrections.id_users')->join('people','people.id','=','users.people_id')->where('corrections.id_guias',$id)->select('respues0','respues1','respues2','respues3','respues4','respues5','respues6','respues7','respues8','respues9','respues10','respues11','respues12','respues13','respues14','respues15','respues16','respues17','respues18','respues19','respues20','surname','tipos_campos','username','id_corrections','correction_users.id as id')->get();
      
          if(!empty($number_img_guia)){
          $names_campo = array_collapse([$names_campo,$campos_img]);
        }
      
        return view('exports.guias', [
            'guias' => $corrections,'names_campo'=>$names_campo,'number_guia'=>$number_guia
        ]);
    }
}


namespace App\Exports;

use App\Guias;
use Maatwebsite\Excel\Concerns\FromCollection;

class GuiasExport implements FromCollection
{
    public function collection()
    {
        return Guias::all();

    }
}

*/