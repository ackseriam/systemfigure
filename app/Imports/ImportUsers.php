<?php
   
namespace App\Imports;
   
use App\Correction_user;
use App\Guias;
use App\Correction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
   
class ImportUsers implements ToCollection
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    
    public function collection(Collection $rows)
    {

      $i=0;
            $guias=Guias::all();
       $guia=$guias->last();

       $id_users=Auth::user()->id;
         $options =[
            'id_users' => $id_users,
            'id_guias' =>  $guia->id,    
        ];  
    $corrections=Correction::create($options);     
       $names_campo=$guia->names_campo;
       $name_campo=explode(',', $names_campo);
       $number_campos=count($name_campo);


       $correction_last= Correction::all();
       $corre=$correction_last->last();
       $id=$corre->id; 
        foreach ($rows as $row) 
        {

         // $respues='respues'.$i
        $correction=new Correction_user();

       /* if(!empty($row[0]))
         {
            $correction->$respues=$row[0]; 
         }
         else{
              $correction->$respues=NULL;
         }

        */
        if(isset($row[0]))
        {
          $respues0=$row[0];
        }else{
          $respues0=NULL;
        }  
         if(isset($row[1]))
        {
          $respues1=$row[1];
        }else{
          $respues1=NULL;
        }  
        if(isset($row[2]))
        {
          $respues2=$row[2];
        }else{
          $respues2=NULL;
        }  
         if(isset($row[3]))
        {
          $respues3=$row[3];
        }else{
          $respues3=NULL;
        }  
        if(isset($row[4]))
        {
          $respues4=$row[4];
        }else{
          $respues4=NULL;
        }  
         if(isset($row[5]))
        {
          $respues5=$row[5];
        }else{
          $respues5=NULL;
        }  
        if(isset($row[6]))
        {
          $respues6=$row[6];
        }else{
          $respues6=NULL;
        }  
         if(isset($row[7]))
        {
          $respues7=$row[7];
        }else{
          $respues7=NULL;
        } 
       if(isset($row[8]))
        {
          $respues8=$row[8];
        }else{
          $respues8=NULL;
        }  
         if(isset($row[9]))
        {
          $respues9=$row[9];
        }else{
          $respues9=NULL;
        }  
        if(isset($row[10]))
        {
          $respues10=$row[10];
        }else{
          $respues10=NULL;
        }  
         if(isset($row[11]))
        {
          $respues11=$row[11];
        }else{
          $respues11=NULL;
        }  
        if(isset($row[12]))
        {
          $respues12=$row[12];
        }else{
          $respues12=NULL;
        }  
         if(isset($row[13]))
        {
          $respues13=$row[13];
        }else{
          $respues13=NULL;
        }  
        if(isset($row[14]))
        {
          $respues14=$row[14];
        }else{
          $respues14=NULL;
        }  
         if(isset($row[15]))
        {
          $respues15=$row[15];
        }else{
          $respues15=NULL;
        }  
        if(isset($row[16]))
        {
          $respues16=$row[16];
        }else{
          $respues16=NULL;
        }  
         if(isset($row[17]))
        {
          $respues17=$row[17];
        }else{
          $respues17=NULL;
        }  
        if(isset($row[18]))
        {
          $respues18=$row[18];
        }else{
          $respues18=NULL;
        }  
         if(isset($row[19]))
        {
          $respues19=$row[19];
        }else{
          $respues19=NULL;
        }  
       
  Correction_user::create([
                'tipos_campos' =>  $names_campo,
                'id_corrections' =>  $corrections->id,
                'respues0'=>$respues0,
                'respues1'=>$respues1,
                'respues2'=>$respues2,
                'respues3'=>$respues3,
                'respues4'=>$respues4,
                'respues5'=>$respues5,
                'respues6'=>$respues6,
                'respues7'=>$respues7,
                'respues8'=>$respues8,
                'respues9'=>$respues9,
                'respues10'=>$respues10,
                'respues11'=>$respues11,
                'respues12'=>$respues12,
                'respues13'=>$respues14,
                'respues15'=>$respues15,
                'respues16'=>$respues16,
                'respues17'=>$respues17,
                'respues18'=>$respues18,
                'respues19'=>$respues19,
            ]);
     //  $correction->tipos_campos= $names_campo;
    //  $correction->id_corrections= $corrections->id;
     
     //   $correction->save();
   
      
        }


    }
}